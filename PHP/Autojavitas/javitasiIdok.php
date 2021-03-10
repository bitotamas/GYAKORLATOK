<?php
$javitasidok="";
$sql="SELECT a.nev as nev,sum(b.javido) as osszes from szerelok a,javitasok b where a.szerelo_id=b.szerelo_id group by a.nev order by osszes desc";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $javitasidok.="<tr><td>{$nev}</td><td>{$osszes}</td></tr>";
    
}
?>
<div class="containter">
<h2 class="text-center m-3">Szerelők javítási összideje</h2>
    <div class="row justify-content-center">
            <table>
                <thead>
                    <th>Szerelő neve</th>
                    <th>Javítás összhossza</th>
                </thead>
                <tbody>
                    <?=$javitasidok?>
                </tbody>
            </table>
        </div>
    </div>
</div>