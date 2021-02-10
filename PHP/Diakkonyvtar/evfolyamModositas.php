<?php

print_r($_POST);
$opt=$evOpt="";
$h2Tag=$diakAz=$diakNeve=$diakEvfolyam="";
$tbl="";
$msg="";

$formgroup="";

$sql="SELECT az,nev FROM diak order by nev";
$stmt=$db->prepare($sql);
$stmt->execute();
while($row=$stmt->fetch()){
    $opt.="<option value={$row['az']}>{$row['nev']}</option>";
}

if(isset($_POST['select'])){
    $sql="SELECT az,nev,evfolyam from diak where az={$_POST['diakSelect']}";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $row=$stmt->fetch();

    $diakAz=$row['az'];
    $diakNeve=$row['nev'];
    $diakEvfolyam=$row['evfolyam'];

    $sql="SELECT evfolyam FROM diak where evfolyam not like '{$diakEvfolyam}' GROUP BY evfolyam";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    while($row=$stmt->fetch()){
    $evOpt.="<option value={$row['evfolyam']}>{$row['evfolyam']}</option>";
    }
    $formgroup="
            <div class='form-group'>
                <label for=''>Tanuló azonosítója: </label>
                    <input type='text' name='diakAzon' class='form-control' value='{$diakAz}' readonly>
            </div>
            <div class='form-group'>
                <label for=''>Tanuló évfolyama: </label>
                    <input type='text' name='diakEvfolyam' class='form-control' value='{$diakEvfolyam}' readonly>
            </div>
            <div class='form-group'>
                <label for=''>Tanuló neve: </label>
                    <input type='text' name='diakNev' class='form-control' value='{$diakNeve}' readonly>
            </div>
            <div class='form-group'>
                <label for=''>Tanuló évfolyama: </label>
                    <select name='evfolyamSelect'>
                    <option value='0'>válassz egy évfolyamot...</option>
                        $evOpt;
                    </select>
            </div>
                <input type='submit' name='update' value='Évfolyam módosítása' class='btn btn-success rounded'>
    ";


}

if(isset($_POST['update'])){

    if($_POST['evfolyamSelect']!="0"){

    $az=$_POST['diakAzon'];
    $evfolyam=$_POST['evfolyamSelect'];

    $sql="UPDATE diak set evfolyam='{$evfolyam}' where az='{$az}'";
    echo "sql: ".$sql;
    $stmt=$db->exec($sql);
    if($stmt){
        $msg="Sikeres évfolyam módosítás :)";
    }else{
        $msg="Nem sikerült módosítani az évfolyamot :(";
    }
}else {$msg="Kérek válassz ki egy évfolyamot amire módosítani szeretnél!";}
}

?>
<div>
<h1>Tanuló módosítása</h1>

<div class="row m-1 p-2">
    <div class="col-8">
        <form method="post">
            <div class="form-group">
                <select name="diakSelect" id="">
                    <option value="0">válassz ki egy diákot...</option>
                    <?=$opt?>
                </select>
                <input type="submit" name="select" value="Kiválaszt">
            </div>
                <?=$formgroup?>
            
                <p><?=$msg==""?"":$msg?></p>
        </form>
    </div>
</div>
</div>