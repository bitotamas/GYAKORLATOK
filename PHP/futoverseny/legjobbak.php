<?php

$helyszinek="";
$futok="";
$sql="SELECT vid,helyszin from versenyek group by helyszin";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
    $helyszinek.="<option value='{$vid}'>{$helyszin}</option>";
}

if(isset($_POST['listaz'])){
    $h=$_POST['helyszinek'];
    if($h==0){
        header("Location:index.php?page=legjobbak.php");
    }else{
        echo "ok";
        $sql="SELECT b.fnev as 'futo',a.ido as 'ido' from eredmenyek a,futo b where a.fid=b.fid AND a.vid={$h} order by ido";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract($row);
            $futok.="<tr><td>{$futo}</td><td>{$ido}</td></tr>";
        }
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
<h1 class="text-center border">Legjobbak</h1>
        <div class="row justify-content-center border">
            <form action="" method="post" class="form-group col-6">
                <select name="helyszinek" id="" class="form-control">
                    <option value="0">válassz ki egy helyszínt..</option>
                    <?=$helyszinek?>
                </select>
                <input type="submit" name="listaz" value="Listázás" class="btn btn-info form-control">
            </form>

            <table class="col-6 border text-center">  
                <thead>
                    <th>Futó neve</th>
                    <th>Ideje</th>
                </thead>
                <tbody>
                    <?=$futok?>
                </tbody>
            </table>
        
        </div>
</div>