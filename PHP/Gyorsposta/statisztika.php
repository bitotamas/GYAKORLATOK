<?php
$szolgaltatasok="";
$counter=1;
$sql="SELECT a.id as id, a.nev as 'nev',count(b.id) as 'darab' FROM szolgaltatas a, ugyfel b WHERE a.id=b.szolgaltatasid GROUP BY a.nev";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $szolgaltatasok.="<tr><td class='text-center'>{$counter}</td><td>{$nev}</td><td class='text-center'>{$darab}</td></tr>";
    $counter++;
}
?>

<h1 class="text-center">Vasárnapi statisztika</h1>
<div class="row justify-content-center">
    <table class="col-5">
        <thead>
            <th></th>
            <th>Szolgáltalás</th>
            <th class='text-center'>Darabszám</th>
        </thead>
        <tbody>
            <?=$szolgaltatasok?>
        </tbody>
    </table>
</div>
