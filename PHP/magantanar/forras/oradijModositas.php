<?php
$tanarOpt="";
$oradijUpdate="";


print_r($_POST);

$sql="SELECT tanar_id,nev from tanar order by nev";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    $tanarOpt.="<option value='{$row['tanar_id']}'>{$row['nev']}</option>";
}
if(isset($_POST['listaz'])){
    if($_POST['tanar']!=0){
        $sql="SELECT oradij from tanar where tanar_id={$_POST['tanar']}";
        $stmt=$db->query($sql);
        $row=$stmt->fetch();

        $oradijUpdate="
        <div>
            <label for=''>Jelenlegi óradíj: </label>
            <input type='text' name='' id='' value='{$row['oradij']}' readonly>
        </div>
        <div>
            <label for=''>Módosítás erre az órabérre: </label>
            <input type='number' name='oradijBe' id='' value='' required>
        </div>
        <div>
            <input type='submit' name='update' id='' value='Módosít' class='btn btn-success'>
            <input type='hidden' name='tanarID' value='{$_POST['tanar']}'>
        </div>

        ";
    }
}

if(isset($_POST['update'])){
    $dij=$_POST['oradijBe'];
    $tanarId=$_POST['tanarID'];

    $sql="UPDATE tanar SET oradij={$dij} where tanar_id={$tanarId}";
    $stmt=$db->exec($sql);

    if($stmt){
        $_SESSION['msgDij']="Sikeres módosítás!";
    }else {
        $_SESSION['msgDij']="Sikeretelen módosítás :c";
    }

}

?>
<div class="container">
    <div class="justify-content-center">
        <div class="row">
        <div class="col-6 border">
                
                <form action="" method="post">
                    <select name="tanar" id="" class="mr-3">
                        <option value="0">válassz ki egy tanárt</option>
                        <?=$tanarOpt?>
                    </select>
                    <input type="submit" name="listaz" value="Listáz" class="btn btn-outline-success">
                
                <h3></h3>    
        </div>
        <div class="col-6 border">
            <?=$oradijUpdate!=""? $oradijUpdate:"" ?>
            <?=isset($_SESSION['msgDij'])?$_SESSION['msgDij']:""?>
        </div>
        </form> 
    </div>
</div>
