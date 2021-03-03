<?php
$top10="";

$sql="SELECT * from film order by hossz desc limit 10";
$stmt=$db->query($sql);

while($row=$stmt->fetch()){
    extract($row);
    
    $top10.="<tr><td>{$filmcim}</td><td>{$szarmazas}</td><td>{$mufaj}</td><td>{$hossz} perc</td></tr>";

}
?>
<div class="text-center"><h1>Tíz leghosszabb film</h1></div>
    <div class="container">
    <div class="d-flex justify-content-center">
        <div>
            <table>
                <thead>
                    <th>Cím</th>
                    <th>Származás</th>
                    <th>Műfaj</th>
                    <th>Hossz</th>
                </thead>
                <tbody>
                    <?=$top10?>
                </tbody>
                </table>
        </div>          
    </div>
    </div>