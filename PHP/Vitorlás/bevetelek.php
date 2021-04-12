<?php
$hajok="";
$sql="SELECT id,nev from hajo group by nev";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $hajok.="<option value='{$id}'>{$nev}</option>";
}

$osszesen="";

if(isset($_POST['select']) && $_POST['kivalasztottHajo']!=0){

    $sql1="SELECT nev from hajo where id={$_POST['kivalasztottHajo']}";
    $stmt=$db->query($sql1);
    $row=$stmt->fetch();
    $hajonev="";
    $hajonev=$row['nev'];


    $sql="SELECT sum(b.nap*a.dij) as osszeg from hajo a, tura b WHERE a.id=b.hajo_id AND a.id={$_POST['kivalasztottHajo']}";
    $stmt=$db->query($sql);
    while($row=$stmt->fetch()){
        extract($row);
        $osszesen.="<h4>A kiválasztott hajó ({$hajonev}) összbevétele: {$osszeg} Ft.</h4>";
    }   

}

?>
<div class="containter">
<h2 class="mt-3">Bevételek</h2>
    <div class="row justify-content-center">
            <form action="" method="post">
                <select name="kivalasztottHajo" id="">
                    <option value="0">válassz egy hajót</option>
                    <?=$hajok?>
                </select>
                <input type="submit" value="Kiválaszt" name="select" class="btn btn-info">
            </form>

            
        </div>
        <div class="row justify-content-center"><?=$osszesen==""?"":$osszesen?></div>
    </div>
</div>