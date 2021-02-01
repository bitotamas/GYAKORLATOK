<?php
$nev="";
$h2Tag="";
$opt="";
$tbl="";
$e=$v="";

//print_r($_POST);

$sql="SELECT nev FROM diak GROUP BY nev";
$stmt=$db->prepare($sql);
$stmt->execute();
while($row=$stmt->fetch()){
    $opt.="<option value='{$row['nev']}'>{$row['nev']}</option>";
}

if(isset($_POST['listaz'])){
    $nev=$_POST['nevOpt'];
    $sql="SELECT a.nev as nev,a.evfolyam as evfolyam, d.szerzo as szerzo,d.cim as cim, b.el as elvitte, b.vissza as visszahozta, datediff(b.vissza,b.el)as diff from diak a,kolcsonzes b,peldany c,mu d where a.az=b.diakaz and b.peldanyaz=c.az and c.muaz=d.az and nev='{$nev}'";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    while($row=$stmt->fetch()){
        $datediff=$row['diff'];
        if($datediff>28){
            $tbl.="<tr class='bg-danger'><td>{$row['nev']}</td><td>{$row['evfolyam']}</td><td>{$row['szerzo']}</td><td>{$row['cim']}</td><td>{$row['elvitte']}</td><td>{$row['visszahozta']}</td></tr>";
     
        }else $tbl.="<tr><td>{$row['nev']}</td><td>{$row['evfolyam']}</td><td>{$row['szerzo']}</td><td>{$row['cim']}</td><td>{$row['elvitte']}</td><td>{$row['visszahozta']}</td></tr>";
}
    
}

?>
<div>
<h1>Kölcsönzések</h1>
<form method="post">
<select name="nevOpt" id="">
    <option value="0">válassz ki egy tanulót...</option>
    <?=$opt?>
</select>
    <input type="submit" value="listáz" name="listaz" class="btn btn-info">
</form>
<h2><?=$nev=="" ? $h2Tag="": $h2Tag="{$nev} tanuló kölcsönzési adatai:"?></h2>
<table>
    <thead>
        <th>Név</th>
        <th>Évfolyam</th>
        <th>Könyv szerzője</th>
        <th>Könyv címe</th>
        <th>Kölcsönzés kezdete</th>
        <th>Kölcsönzés vége</th>
    </thead>
    <tbody>
        <?=$tbl?>
    </tbody>
</table>
</div>