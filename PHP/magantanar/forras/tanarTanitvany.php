<?php
$tanarOpt="";
$tanitvanyok="";



$sql="SELECT tanar_id,nev from tanar order by nev";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    $tanarOpt.="<option value='{$row['tanar_id']}'>{$row['nev']}</option>";
}

if(isset($_POST['listaz'])){
    if($_POST['tanar']!=0){
    $sql="SELECT a.nev as nev,b.datum as datum,b.kezdesido as kezdesido from tanitvany a, tanitasi_alkalom b where a.tanitvany_id=b.tanitvany_id AND tanar_id={$_POST['tanar']}";
    $stmt=$db->query($sql);
    while($row=$stmt->fetch()){
        $tanitvanyok.="<li class='border'>{$row['nev']} - {$row['datum']} - {$row['kezdesido']}</li>";;
    }
    }else header("Location:index.php?page=tanarTanitvany.php");
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