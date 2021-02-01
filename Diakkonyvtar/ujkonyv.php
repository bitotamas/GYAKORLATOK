<?php
$msg="";

print_r($_POST);

function megjelenit($db,&$tbl){
    $sql="select * from mu order by az desc";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    while($row=$stmt->fetch()){
    extract($row);
    $tbl.="<tr><td>{$az}</td><td>{$szerzo}</td><td>{$cim}</td><td>{$evfolyam}</td></tr>";
    }
}

if(isset($_POST['insert'])){
    $msg="";
    $sql="SELECT szerzo,cim,evfolyam from mu where szerzo='{$_POST['szerzo']}' and cim='{$_POST['cim']}' and evfolyam={$_POST['evfolyam']}";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $count=$stmt->rowCount();

    $sql="SELECT az from mu order by az desc limit 1";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $row=$stmt->fetch();

    $nextAz=$row['az']+1;


    echo "darabszam= ".$count."<br>";
    echo "INSERT INTO mu VALUES({$nextAz},'{$_POST['szerzo']}','{$_POST['cim']}',{$_POST['evfolyam']})";
    
    if($count>0){
        $msg="Létezik már ilyen könyv!";
    }else{
        

        $sql="INSERT INTO mu VALUES({$nextAz},'{$_POST['szerzo']}','{$_POST['cim']}','{$_POST['evfolyam']}')";
        $stmt=$db->exec($sql);
        if($stmt){
            $msg="Sikeresen hozzáadott egy új könyvet!";
            
        }else{
            $msg="Nem sikerült a könyv hozzáadása :(";
            
        }    
    }
    
}
megjelenit($db,$tbl);
?>
<div class="row m-1 p-2">
    <div class="col-5">
        <form method="post">
            <div class="form-group">
                <label for="">Könyv szerzője: </label>
                    <input type="text" name="szerzo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Könyv címe: </label>
                    <input type="text" name="cim" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Évfolyam: </label>
                    <input type="number" name="evfolyam" class="form-control" required>
            </div>
                <input type="submit" name="insert" value="Új könyv hozzáadása" class="btn btn-success rounded">
                <p><?=$msg==""?"":$msg?></p>
        </form>
    </div>
    <div class="col-5">
        <table class="table table-bordered table-striped">
            <thead>
                <th>Azonosító</th>
                <th>Szerző</th>
                <th>Cím</th>
                <th>Évfolyam</th>
            </thead>
            <tbody>
                <?=$tbl?>
            </tbody>  
        </table>
    </div>
</div>