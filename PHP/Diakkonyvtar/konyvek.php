<?php


$tbl="";
$index=1;
$sql='SELECT a.szerzo as "szerzo",a.cim as "cim",count(b.az)as "darabszam" from mu a, peldany b where b.muaz=a.az GROUP BY cim ORDER BY szerzo,cim';
$stmt=$db->prepare($sql);
$stmt->execute();
while($row=$stmt->fetch()){
$tbl.="<tr><td>{$index}</td><td>{$row['szerzo']}</td><td>{$row['cim']}</td><td>{$row['darabszam']}</td></tr>";
$index++;
}
?>
<h1>Könyvtári nyitvatartás</h1>
<div>
<table>
    <thead>
        <th class="text-center"></th>
        <th>Szerző</th>
        <th>Cím</th>
        <th class="text-center">Darabszám</th>
    </thead>
    <tbody>
        <?=$tbl?>
    </tbody>
</table>
</div>