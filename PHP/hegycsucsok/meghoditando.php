<?php
$hegyek="";

$sql="SELECT nev,edatum from csucs where mazon=0";
$stmt=$db->query($sql);

while($row=$stmt->fetch()){
    extract($row);
    
    $hegyek.="<tr><td>{$nev}</td><td>{$edatum}</td></tr>";

}
?>
<div class="container">
    <div class="d-flex justify-content-center">
            <div>
                <div class="text-center"><h1>Hegycsúcsok ahol magyar még nem járt</h1></div>
                <table>
                    <thead>
                        <th>Név</th>
                        <th>Első sikeres nemzetközi megmászás</th>
                    </thead>
                    <tbody><?=$hegyek?></tbody>
                </table>
             </div>           
    </div>
</div>
<link rel="stylesheet" href="style.css">