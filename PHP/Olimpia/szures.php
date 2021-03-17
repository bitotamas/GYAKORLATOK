<?php
$opt="";
$szurt="";
$sql="SELECT orszag from eredmeny group by orszag";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $opt.="<option value='{$orszag}'>{$orszag}</option>";   
}

if(isset($_POST['szures'])){
   
        $sql="SELECT b.nev as nev,a.ev as ev from eredmeny a, versenyzo b where a.versenyzoaz=b.az AND a.orszag like '{$_POST['orszag']}' order by a.ev";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
        extract($row);
        $szurt.="<tr><td>{$nev}</td><td>{$ev}</td></tr>";   
           
    }
}
?>
<div class="containter">
<h2 class="text-center m-3">Szűrés ország szerint</h2>
    <div class="row justify-content-center">
            <div class="col-8 text-center">
                <form action="" method="post">
                    <select name="orszag" id="">
                        <option value="0">válassz egy országot...</option>
                        <?=$opt?>
                    </select>
                    <input type="submit" value="Szűrés" name="szures" class="btn btn-info">    
                </form>
            </div>
            <div class="col-4">
            <?=$szurt!=""?"<table><thead><th>Név</th><th>Éve</th></thead>
                                     <tbody>$szurt</tbody>
                             </table>":""?>
            </div>
        </div>
    </div>
</div>