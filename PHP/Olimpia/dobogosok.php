<?php
$opt="";
$szurt="";
$sql="SELECT az,nev from versenyzo order by nev";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $opt.="<option value='{$az}'>{$nev}</option>";   
}

if(isset($_POST['szures'])){
    $sql="SELECT a.nev as versenynev,b.ev as ev from versenyszam a,eredmeny b where a.az=b.versenyszamaz AND versenyzoaz={$_POST['versenyzo']} and helyezes<=3";
    $stmt=$db->query($sql);
    while($row=$stmt->fetch()){
    extract($row);
    $szurt.="<tr><td>{$versenynev}</td><td>{$ev}</td></tr>";   
}
}

?>
<div class="containter">
<h2 class="text-center m-3">Dobogósok</h2>
    <div class="row justify-content-center">
            <div class="col-8">
                <form action="" method="post">
                <div class="form-group">
                    <select name="versenyzo" id="" class="form-control">
                        <option value="0">válassz egy versenyzőt...</option>
                        <?=$opt?>
                    </select>
                </div>
                <div class="form-group">   
                    <input type="submit" value="Szűrés" name="szures" class="btn btn-info form-control">  
                </div>  
                </form>
            </div>
            <div class="col-4">
            <?=$szurt!=""?"<table><thead><th>Versenyszám neve</th><th>Olimpia éve</th></thead>
                                     <tbody>$szurt</tbody>
                             </table>":""?>
            </div>
        </div>
    </div>
</div>