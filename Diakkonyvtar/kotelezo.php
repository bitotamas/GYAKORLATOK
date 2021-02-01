<?php

//print_r($_POST);

$tbl="";
$opt="";
$evfolyam="";
$h2Tag="";

$sql="SELECT evfolyam FROM mu GROUP BY evfolyam";
$stmt=$db->prepare($sql);
$stmt->execute();
while($row=$stmt->fetch()){
    $opt.="<option value={$row['evfolyam']}>{$row['evfolyam']}</option>";
}

if(isset($_POST['listaz'])){
    $evfolyam=$_POST['evfolyam'];
    $sql="SELECT szerzo,cim from mu where evfolyam={$evfolyam}";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    while($row=$stmt->fetch()){
    $tbl.="<tr><td>{$row['szerzo']}</td><td>{$row['cim']}</td></tr>";
    }
}


?>
<div>
<h1>Kötelező olvasmányok</h1>
<form method="post">
<select name="evfolyam" id="">
    <option value="0">válassz ki egy évfolyamot...</option>
    <?=$opt?>
</select>
    <input type="submit" value="listáz" name="listaz" class="btn btn-info">
</form>
<h2><?=$evfolyam=="" ? $h2Tag="": $h2Tag="{$evfolyam}. osztályos tanulók kötelező olvasmányai:"?></h2>
<table>
    <thead>
        <th>Szerző</th>
        <th>Cím</th>
    </thead>
    <tbody>
        <?=$tbl?>
    </tbody>
</table>
</div>