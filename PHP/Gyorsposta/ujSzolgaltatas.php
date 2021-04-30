<?php
$szolgaltatasok="";

$sql="SELECT id,nev FROM szolgaltatas order by id desc";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $szolgaltatasok.="<tr><td>{$id}</td><td>{$nev}</td></tr>";
}
   
if(isset($_POST['add'])){
    $sql="INSERT INTO szolgaltatas values(null,'{$_POST['ujszolgaltatas']}',0)";
    $stmt=$db->exec($sql);
    if($stmt){
        header("Location:index.php?page=ujSzolgaltatas.php");
        $_SESSION['msg']="<h2 class='text-success'>Sikeres szolgáltalásfelvétel!</h2>";
    }else{
        header("Location:index.php?page=ujSzolgaltatas.php");
        $_SESSION['msg']="<h2 class='text-danger'>Sikertelen szolgáltalásfelvétel!</h2>";
    }
}

?>
<div class="row justify-content-center">
    <div class="col-5 text-center">
        <form action="" method="post" class="m-1">
            <label for="" class="m-1">Add meg az új szolgáltalás nevét</label>
            <input type="text" name="ujszolgaltatas" required class="m-1">
            <input type="submit" value="Hozzáad" name="add" class="btn btn-success m-1">
        </form>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-5 text-center">
        <?=isset($_SESSION['msg'])?$_SESSION['msg']:""?>
    </div>
</div>
<div class="row justify-content-center">
    <table class="col-5 text-center">
        <thead>
          <th></th>
          <th>Szolgáltalás</th>
        </thead>
        <tbody>
            <?=$szolgaltatasok?>
        </tbody>
    </table>
</div>