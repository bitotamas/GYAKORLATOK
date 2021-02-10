<?php
$diakOpt="";
$tantargyak="";



$sql="SELECT tanitvany_id,nev from tanitvany order by nev";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    $tanarOpt.="<option value='{$row['tanitvany_id']}'>{$row['nev']}</option>";
}

if(isset($_POST['listaz'])){
    if($_POST['diak']!=0){
    $sql="SELECT a.tantargynev";
    $stmt=$db->query($sql);
    while($row=$stmt->fetch()){
        $tantargyak.="<li class='border'>{$row['nev']} - {$row['datum']} - {$row['kezdesido']}</li>";;
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
                        <?=$tanarOpt?>
                    </select>
                    <input type="submit" name="listaz" value="Listáz" class="btn btn-outline-success">
                </form> 
                <h3></h3>    
        </div>
        <div class="col-6 border">
            <ul>
                <?=$tanitvanyok?>
            </ul>
        </div>
    </div>
</div>