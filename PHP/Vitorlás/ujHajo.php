<?php
$hajok="";
$sql="SELECT * from hajo order by id desc";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $hajok.="<tr><td>{$nev}</td><td>{$tipus}</td><td>{$utas}</td><td>{$dij}</td></tr>";   
}

if(isset($_POST['insert'])){
    $sql="INSERT INTO hajo values(null,'{$_POST['ujHajo']}','{$_POST['tipus']}',{$_POST['utas']},{$_POST['dij']})";
    $stmt=$db->exec($sql);
    if($stmt){
        $_SESSION['msg']="Sikeresen bevezetett egy új hajót.";
    }else{
        $_SESSION['msg']="Sikertelen adatfeltöltés.";
    }
}
?>
<div class="containter">
    <h2 class="text-center m-3">Új hajó bevitele</h2>
    <div class="row justify-content-center">   
        <div class="col-8 border text-center">
            <form action="" method="post">
               <label for="">Kérem adja meg az új hajó nevét:</label><input type="text" name="ujHajo" id="" class="ml-2" required>
               <label for="">Típusa:</label><input type="text" name="tipus" id="" class="ml-2" required>
               <label for="">Utasszám:</label><input type="number" name="utas" id="" class="ml-2" required>
               <label for="">Díj:</label><input type="number" name="dij" id="" class="ml-2" required>
               <input type="submit" value="Bevitel" class="btn btn-success ml-2" name="insert">
            </form>
            <?=isset($_SESSION['msg'])?$_SESSION['msg']:""?>
        </div>
        <div class="col-4 border text-center">
            <table class="text-center"><th>Név</th><th>Típus</th><th>Utas</th><th>Díj</th><tbody><?=$hajok?></tbody></table>
        </div>
    </div> 
</div>