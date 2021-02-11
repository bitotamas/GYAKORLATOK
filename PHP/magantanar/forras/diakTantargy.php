<?php
$diakOpt="";
$tantargyak="";



$sql="SELECT tanitvany_id,tanitvany.nev from tanitvany order by nev";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    $diakOpt.="<option value='{$row['tanitvany_id']}'>{$row['nev']}</option>";
}

if(isset($_POST['listaz'])){
    if($_POST['diak']!=0){
    $sql="SELECT a.tantargynev as tantargynev from tantargy a, tanar b, tanitasi_alkalom c, tanitvany d where a.tantargy_id=b.tantargy_id and b.tanar_id=c.tanar_id and c.tanitvany_id=d.tanitvany_id AND d.tanitvany_id={$_POST['diak']}";
    $stmt=$db->query($sql);
    while($row=$stmt->fetch()){
        $tantargyak.="<li class='border'>{$row['tantargynev']}</li>";;
    }
    }else header("Location:index.php?page=tanarTanitvany.php");
}
?>

<div class="container">
    <div class="justify-content-center">
        <div class="row">
        <div class="col-6 border">
                
                <form action="" method="post">
                    <select name="diak" id="" class="mr-3">
                        <option value="0">válassz ki egy diákot</option>
                        <?=$diakOpt?>
                    </select>
                    <input type="submit" name="listaz" value="Listáz" class="btn btn-outline-success">
                </form> 
                <h3></h3>    
        </div>
        <div class="col-6 border">
            <ul>
                <?=$tantargyak?>
            </ul>
        </div>
    </div>
</div>