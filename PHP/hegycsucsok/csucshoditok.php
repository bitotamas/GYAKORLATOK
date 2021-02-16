<?php

$hegyekOpt="";
$maszo="";

$sql="SELECT az,nev from csucs order by nev";
$stmt=$db->query($sql);

while($row=$stmt->fetch()){
    extract($row);  
    $hegyekOpt.="<option value='{$az}'>{$nev}</option>";
}

if(isset($_POST['listaz'])){
    if($_POST['hegy']!=0){
        $sql="SELECT b.az as 'id',b.nev as 'nev' from maszo b,csucs a where a.mazon=b.az AND a.az={$_POST['hegy']}";
        $stmt=$db->query($sql);
        $row=$stmt->fetch();
        if($row['id']==0){
            $maszo="<div class='text-center text-danger'><h2>Az adott hegycsúcsot magyar mászó még nem mászta meg.</h2></div>";
        }else {
            $maszo="<div class='text-center text-success'><h2>{$row['nev']}</h2></div>";
        }
        
    }else{
        header("Location:index.php?page=csucshoditok.php");
    }
}
?>
<div class="text-center"><h1>Hegycsúcsok ahol magyar még nem járt</h1></div>
<div class="container">
    <div class="d-flex justify-content-center">
            <div>
                <form action="" method="post" class="text-center">
                    <select name="hegy" id="">
                        <option value="0">válassz ki egy hegyet...</option>
                        <?=$hegyekOpt?>
                    </select>
                <input type="submit" value="Listáz" name="listaz" class="btn btn-info">
                </form>
                <?=$maszo==""?"":$maszo?>
             </div>           
    </div>
</div>
<link rel="stylesheet" href="style.css">