<?php
$filmek="";
$sql="SELECT * from film order by fid desc";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $filmek.="<tr><td>{$filmcim}</td><td>{$szarmazas}</td><td>{$mufaj}</td><td>{$hossz} perc</td></tr>";
}

if(isset($_POST['add'])){
    
    $sql="INSERT into film values(null,'{$_POST['cim']}','{$_POST['szarmazas']}','{$_POST['mufaj']}','{$_POST['hossz']}')";
    $stmt=$db->exec($sql);

    if($stmt){
        $_SESSION['ujfilmMsg']="<h4 class='text-center text-success'>Az új film sikeresen bekerült a listába!</h4>";
        header("Location:index.php?page=ujfilm.php"); 
    }else{
        $_SESSION['ujfilmMsg']="<h4 class='text-center text-danger'>Az új film bevitele sikertelen volt :c</h4>"; 
    }
}
?>
<div class="container">
    <div class="d-flex justify-content-center">
            <div>
                <div class="text-center"><h1>Új film bevitele</h1></div> 
                <form action="" method="post">
                    <label for="">A film címe: </label>
                    <input type="text" name="cim" id="" required>
                    <label for="">Származása: </label>
                    <input type="text" name="szarmazas" id="" required>
                    <label for="">Műfaja: </label>
                    <input type="text" name="mufaj" id="" required>
                    <label for="">Hossza: </label>
                    <input type="number" name="hossz" max="200" id="" required>
                    <div class="text-center"><input type="submit" name="add" value="Hozzáad" class="btn btn-success text-center"></div> 
                    
                </form> 
                <?=isset($_SESSION['ujfilmMsg'])?$_SESSION['ujfilmMsg']:""?>
            </div>
    </div>           
    <div class="d-flex justify-content-center">
        <div>
            <table>
                <thead>
                    <th>Cím</th>
                    <th>Származás</th>
                    <th>Műfaj</th>
                    <th>Hossz</th>
                </thead>
                <tbody>
                    <?=$filmek?>
                </tbody>
                </table>
        </div>          
    </div>
</div>