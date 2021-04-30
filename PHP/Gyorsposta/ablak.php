<?php
$opt=$lista=$htag="";
$counter=1;
$sql="SELECT ablak from ugyfel group by ablak";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $opt.="<option value='{$ablak}'>{$ablak}</option>";
}

if(isset($_POST['listaz'])&& $_POST['ablakok']!=0){


    $htag="A(z) ".$_POST['ablakok']." számú ablaknál történt műveletek:";

    $sql="SELECT a.nev as nev, b.erkezett as erkezett, b.sorrakerult as sorrakerult, b.tavozott as tavozott FROM szolgaltatas a, ugyfel b WHERE a.id=b.szolgaltatasid AND b.ablak={$_POST['ablakok']} ORDER BY b.erkezett";
    $stmt=$db->query($sql);
    while($row=$stmt->fetch()){
        extract($row);
        $lista.="<tr><td>$counter</td><td>{$nev}</td><td>{$erkezett}</td><td>{$sorrakerult}</td><td>{$tavozott}</td></tr>";
        $counter++;
    }
}
?>
<div class="row justify-content-center">
    <div class="col-5">
        <form action="" method="post">
            <select name="ablakok" id="" class="m-1">
                <option value="0">válassz ki egy ablakot...</option>
                <?=$opt?>
            </select>
            <input type="submit" name="listaz" value="Listázás" class="btn btn-info m-1">
        </form>
    </div> 
</div>
<h1 class="text-center"><?=$htag==""?"":$htag?></h1>
<div class="row justify-content-center">
    <table class="col-5 text-center">
        <thead>
           <?=$lista==""?"":" 
            <th></th>
            <th>Szolgáltalás</th>
            <th>Érkezés ideje</th>
            <th>Sorrakerülés ideje</th>
            <th>Távozás időpontja</th>
            ";
            ?>
        </thead>
        <tbody>
            <?=$lista?>
        </tbody>
    </table>
</div>
