<?php
$versenyszamok="";
$sql="SELECT nev,tipus,nem from versenyszam order by az desc";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $versenyszamok.="<tr><td>{$nev}</td><td>{$tipus}</td><td>{$nem}</td></tr>";
    
}

if(isset($_POST['hozzaad'])){
    $sql="INSERT into versenyszam values(null,'{$_POST['nev']}','{$_POST['tipus']}','{$_POST['nem']}')";
    $stmt=$db->exec($sql);

    if($stmt){
        $_SESSION['msg']="<h3 class='text-success text-center'>Sikeresen hozzáadott egy új versenyszámot!</h3>";
    }else{
        $_SESSION['msg']="<h3 class='text-danger text-center'>Nem sikerült hozzáadni az új versenyszámot!</h3>"; 
    }
    header("Location:index.php?page=ujVersenyszam.php");
}
?>
<div class="containter">
<h2 class="text-center m-3">Új versenyszám bevitele</h2>
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Neve: </label>
                        <input type="text" name="nev" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Tipusa: </label>
                        <input type="text" name="tipus" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Neme: </label>
                        <select name="nem" id="">
                            <option value="férfi">Férfi</option>
                            <option value="női">Női</option>
                        </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Hozzáad" name="hozzaad" class="btn btn-success form-control">
                </div>
            </form>
            <?=isset($_SESSION['msg'])?$_SESSION['msg']:""?>
        </div>
        <div class="col-4">
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