<?php
$diakok="";
$sql="SELECT nev,telefon,email FROM tanitvany order by nev";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    $diakok.="<li class='border'>{$row['nev']} - {$row['telefon']} - {$row['email']}</li>";
}
?>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="col-8">
                <div class="text-center"><b>Diákok elérhetőségei</b></div>
                <ul class="text-left"><?=$diakok?></ul>        
        </div>
    </div>
</div>
<link rel="stylesheet" href="style.css">