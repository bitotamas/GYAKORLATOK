<?php
$tanarok="";
$sql="SELECT a.nev as nev,a.telefon as telefon,a.email as email,b.tantargynev as tnev FROM tanar a,tantargy b where a.tantargy_id=b.tantargy_id order by a.nev";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    $tanarok.="<li class='border'>{$row['nev']} - {$row['telefon']} - {$row['email']} - {$row['tnev']}</li>";
}
?>


<div class="container">
    <div class="d-flex justify-content-center">
        <div class="col-8">
                <div class="text-center"><b>Tanárok elérhetőségei</b></div>
                <ol class="text-left"><?=$tanarok?></ol>        
        </div>
    </div>
</div>