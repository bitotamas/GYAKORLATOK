<?php
$tipusok="";

$sql="SELECT tipus_id,tipusnev from tipusok order by tipus_id desc";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $tipusok.="<tr><td>{$tipusnev}</td></tr>";
}
if(isset($_POST['insert'])){
    $sql="INSERT INTO tipusok values(null,'{$_POST['ujTipus']}')";
    $stmt=$db->exec($sql);
    if($stmt){
        $_SESSION['msg']="<h4 class='text-center text-success'>Sikeresen hozzáadott egy új típust!</h4>";
        header("Location:index.php?page=ujtAutoTipus.php");
    }else{
        $_SESSION['msg']="<h4 class='text-center text-danger'>Sikertelen volt az új típus felvétele :(!</h4>";
    }
}


?>
<div class="containter">
    <h2 class="text-center m-3">Új autó típus bevitele</h2>
    <div class="row justify-content-center">   
        <div class="col-8 border text-center">
            <form action="" method="post">
               <label for="">Kérem adja meg az új típus nevét:</label><input type="text" name="ujTipus" id="" class="ml-2" required>
               <input type="submit" value="Bevitel" class="btn btn-success ml-2" name="insert">
            </form>
            <?=isset($_SESSION['msg'])?$_SESSION['msg']:""?>
        </div>
        <div class="col-4 border text-center">
            <table class="text-center"><th>Jelenlegi típusok</th><tbody><?=$tipusok?></tbody></table>
        </div>
    </div> 
</div>