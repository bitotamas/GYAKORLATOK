<?php
$versenyszamok="";
$sql="SELECT nev,tipus,nem from versenyszam order by nev,tipus";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $versenyszamok.="<tr><td>{$nev}</td><td>{$tipus}</td><td>{$nem}</td></tr>";
    
}
?>
<div class="containter">
<h2 class="text-center m-3">Az összes versenyszám</h2>
    <div class="row justify-content-center">
            <table>
                <thead>
                    <th>Név</th>
                    <th>Tipus</th>
                    <th>Nem</th>
                </thead>
                <tbody>
                    <?=$versenyszamok?>
                </tbody>
            </table>
        </div>
    </div>
</div>