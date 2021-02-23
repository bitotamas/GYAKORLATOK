<?php
$kiskoruak="";
$sql="SELECT fnev,year(now())-szulev as 'ev' from futo where year(now())-szulev<18 order by fnev";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $kiskoruak.="<tr><td>{$fnev}</td><td>{$ev}</td></tr>";
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
<h1 class="text-center">Kiskorúak</h1>
        <div class="row justify-content-center border">
            <table class="col-6 border text-center">
                
                <thead>
                    <th>Név</th>
                    <th>Életkor</th>
                </thead>
                <tbody>
                    <?=$kiskoruak?>
                </tbody>
            </table>
        </div>
</div>