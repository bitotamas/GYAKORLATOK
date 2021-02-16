<?php

$ujId="";
$sql='SELECT max(az)as"az" from maszo';
$stmt=$db->query($sql);
$row=$stmt->fetch();
$ujId=$row['az']+1;



if(isset($_POST['add'])){
    if($_POST['nem']!=-1){
        $ujNev=$_POST['nev'];
        $neme=$_POST['nem'];
        $sql="INSERT INTO maszo values({$ujId},'{$ujNev}',{$neme})";
        $stmt=$db->exec($sql);

        if($stmt){
            $_SESSION['ujmaszoMsg']="<div class='text-success text-center'>Sikeres adatbeírás! :)</div>";
        }else{
            $_SESSION['ujmaszoMsg']="<div class='text-danger text-center'>Sikertelen adatbeírás! :(</div>";
        }

    }else{
        header("Location:index.php?page=ujmaszo.php");
    }
}

?>
<div class="container">
    <div class="d-flex justify-content-center">
            <div>
                <div class="text-center"><h1>Új mászó bevitele</h1></div> 
                <form action="" method="post">
                    <label for="">A mászó neve: </label>
                    <input type="text" name="nev" id="" required>
                    <label for="">Neme: </label>
                    <select name="nem">
                        <option value="-1">válassza ki a nemét..</option>
                        <option value="1">Férfi</option>
                        <option value="0">Nő</option>
                    </select>
                    <input type="submit" name="add" value="Hozzáad" class="btn btn-success">
                </form> 
                <?=isset($_SESSION['ujmaszoMsg'])?$_SESSION['ujmaszoMsg']:""?>
            </div>           
    </div>
</div>
<link rel="stylesheet" href="style.css">