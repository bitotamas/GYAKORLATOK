<?php
$javitasok="";
$sql="SELECT a.nev as nev, b.datum as datum, b.javido as javido, b.iranyar as iranyar, c.rendszam as rendszam from szerelok a, javitasok b, autosok c WHERE a.szerelo_id=b.szerelo_id and b.autos_id=c.autos_id order by b.datum";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $javitasok.="<tr><td>{$nev}</td><td>{$datum}</td><td>{$javido}</td><td>{$iranyar}</td><td>{$rendszam}</td></tr>";
    
}
?>
<div class="containter">
<h2 class="text-center m-3">Az összes javítási adat</h2>
    <div class="row justify-content-center">
            <table>
                <thead>
                    <th>Szerelő neve</th>
                    <th>Javítás dátuma</th>
                    <th>Javítási idő</th>
                    <th>Irányár</th>
                    <th>Rendszám</th>
                </thead>
                <tbody>
                    <?=$javitasok?>
                </tbody>
            </table>
        </div>
    </div>
</div>