<?php
$hegyek="";

$sql="SELECT nev,magassag,edatum from csucs order by magassag desc";
$stmt=$db->query($sql);

while($row=$stmt->fetch()){
    extract($row);
    
    $hegyek.="<tr><td>{$nev}</td><td>{$magassag}</td><td>{$edatum}</td></tr>";

}
?>
<div class="text-center"><h1>Hegycsúcsok</h1></div>
    <div class="container">
        <div class="d-flex justify-content-center">
                <div>
                    
                    <table>
                        <thead>
                            <th>Név</th>
                            <th>Magasság</th>
                            <th>Első sikeres megmászás</th>
                        </thead>
                        <tbody><?=$hegyek?></tbody>
                    </table>
                </div>           
        </div>
    </div>
<link rel="stylesheet" href="style.css">
