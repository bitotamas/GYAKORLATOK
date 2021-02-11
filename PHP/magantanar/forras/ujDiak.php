<?php

print_r($_POST);
if(isset($_POST['bevitel'])){
    $name=$_POST['nev'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];


    $sql="SELECT email from tanitvany where email='{$email}'";
    $stmt=$db->query($sql);





    if($stmt->rowCount()==1){
        $_SESSION['msg']="Van már ilyen email cím";
    }else {

        $sql="INSERT into tanitvany values(null,'{$name}','{$phone}','{$email}')";
        $stmt=$db->exec($sql);

        if($stmt){
            $_SESSION['msgDiak']="Sikeresen hozzáadott egy diákot a névsorhoz.";

        }else{
            $_SESSION['msgDiak']="Nem sikerült a diák névsorba írása.";
        }
    

    }
    

  header("Location:index.php?page=ujDiak.php");  
}
?>
<div class="container">
    <div class="justify-content-center">
        <div class="row">
        <div class="col-6 border">
                
                <form action="" method="post">
                <div>
                    <label for="">Név: </label>
                    <input type="text" name="nev" id="" required>
                </div>
                <div>
                    <label for="">Telefonszám: </label>
                    <input type="tel" name="phone" id="" placeholder="(99) 999-99-99" pattern="['(']{1}[1-9]{1}[0-9]{1}[')']{1} [1-9]{1}[0-9]{2}-[0-9]{2}-[0-9]{2}" required>
                </div>
                <div>
                    <label for="">Email: </label>
                    <input type="email" name="email" id="" required>
                </div>
                <div>
                    <input type="submit" name="bevitel" value="Új diák bevitele" class="btn btn-outline-success">
                </div>
                </form> 
                <h3></h3>    
        </div>
        <div class="col-6 border">
            <?=isset($_SESSION['msgDiak'])?$_SESSION['msgDiak']:""?>
        </div>
    </div>
</div>
<link rel="stylesheet" href="style.css">