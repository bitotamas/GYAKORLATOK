<?php
$lista=$tipusok="";

$sql="SELECT tipus_id,tipusnev from tipusok";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $tipusok.="<option value='{$tipus_id}'>{$tipusnev}</option>";
}

if(isset($_POST['listaz'])){
    $sql="SELECT nev,rendszam from autosok where tipuskod={$_POST['type']}";
    $stmt=$db->query($sql);

    while($row=$stmt->fetch()){
    extract($row);
    $lista.="<li class='border'>{$nev} - {$rendszam}</li>";
    }
}


?>
<div class="containter">
    <h2 class="text-center m-3">Autósok akik a kíválasztott típusó autóval rendelkeznek</h2>
    <div class="row justify-content-center">   
        <div class="col-6 border text-center">
            <form action="" method="post">
                <select name="type" id="">
                    <option value="0">válassz egy típust...</option>
                    <?=$tipusok?>
                </select> 
                <input type="submit" value="Kiválasztás" name="listaz" class="btn btn-info"> 
            </form>   
        </div>
    </div> 
    <div class="row justify-content-center"> 
        <div class="col-6 border text-center">
            <ol>
                <?=$lista?>
            </ol>
        </div>
    </div>
</div>
