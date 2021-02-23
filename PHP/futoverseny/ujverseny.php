<?php
$versenyek="";
$sql="SELECT * from versenyek order by vid desc";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $versenyek.="<tr><td>{$vnev}</td><td>{$datum}</td><td>{$helyszin}</td></tr>";
}
if(isset($_POST['bevitel'])){
    $sql="INSERT INTO versenyek values(null,'{$_POST['ujnev']}','{$_POST['ujdatum']}','{$_POST['ujhelyszin']}')";
    $stmt=$db->exec($sql);
    if($stmt){
        $_SESSION['ujMsg']="<h3 class='text-success'>Sikeres adatbeírás!</h3>";
    }else{
        $_SESSION['ujMsg']="<h3 class='text-danger'>Sikertelen adatbeírás!</h3>";
    }
}
?>
<style>
    th{
        background-color: lightgray;
    }
    th,tr,td{
        border: 1px solid black;
    }
</style>
<div class="container">

        <div class="row justify-content-center border">

            <div class="col-6">
                <form method="post" action="" class="form-group">
                    <h2 class="text-center border">Új verseny bevitele</h2>
                    <label for=""> Verseny neve: </label><input type="text" class="form-control" name="ujnev" placeholder="verseny neve..." value="" required>
                    <label for="">Időpontja: </label><input type="date" class="form-control" name="ujdatum" value="" required>
                    <label for="">Helyszíne: </label><input type="text" class="form-control" name="ujhelyszin" placeholder="helyszin..." value="" required>
                    <input type="submit" name="bevitel" value="Új verseny bevitele" class="form-control btn btn-success mt-2" >
                </form>
            </div>
            <table class="col-6 border text-center">
                
                <thead>
                    <th>Verseny neve</th>
                    <th>Dátuma</th>
                    <th>Helyszíne</th>
                </thead>
                <tbody>
                    <?=$versenyek?>
                </tbody>
            </table>
            <?=isset($_SESSION['ujMsg'])?$_SESSION['ujMsg']:""?>
        </div>
</div>