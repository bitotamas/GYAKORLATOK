<?php
$napidijak="";
$counter=1;

$sql="SELECT nev,tipus,round(dij/utas) as egyfo from hajo order by nev asc";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $napidijak.="<tr><td>{$counter}</td><td>{$nev}</td><td>{$tipus}</td><td>{$egyfo}</td></tr>";
    $counter++;
}
?>
<div class="containter">
<h2 class="mt-3">Az 1 főre jutó napi bérleti díj</h2>
    <div class="row justify-content-center">
            <table class="col-8">
                <thead>
                    <th class="bg-secondary"></th>
                    <th class="bg-secondary">Hajó</th>
                    <th class="bg-secondary">Típus</th>
                    <th class="bg-secondary">Díj/személy</th>
                </thead>
                <tbody>
                    <?=$napidijak?>
                </tbody>
            </table>
        </div>
    </div>
</div>