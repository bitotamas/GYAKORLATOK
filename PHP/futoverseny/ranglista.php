<?php
$futok="";
$sql="SELECT b.fnev as 'futo',a.ido as 'ido' from eredmenyek a,futo b where a.fid=b.fid order by ido";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $futok.="<tr><td>{$futo}</td><td>{$ido}</td></tr>";
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
<h1 class="text-center border">Ranglista</h1>
        <div class="row justify-content-center border">
            <table class="col-6 border text-center">  
                <thead>
                    <th>Futó neve</th>
                    <th>Ideje</th>
                </thead>
                <tbody>
                    <?=$futok?>
                </tbody>
            </table>
        </div>
</div>