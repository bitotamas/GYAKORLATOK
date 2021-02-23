<?php
$letszam="";
$sql="SELECT year(now())-szulev as 'ev', count(fid) as 'darab' from futo group by ev";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $letszam.="<tr><td>{$ev}</td><td>{$darab}</td></tr>";
}
?>
<style>
    th{
        background-color: lightgray;
    }
    th,tr,td{
        border: 1px solid black;
    }
</style>
<div class="container">
    <h1 class="text-center border">Statisztika</h1>
        <div class="row justify-content-center border">
            <table class="col-6 border text-center">
                <thead>
                    <th>Életkor</th>
                    <th>Létszám</th>
                </thead>
                <tbody>
                    <?=$letszam?>
                </tbody>
            </table>
        </div>
</div>