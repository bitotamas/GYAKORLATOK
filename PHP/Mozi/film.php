<?php
$mozik="";
$mozifilmei="";
$sql="SELECT mid,mozinev from mozi group by mozinev";
$stmt=$db->query($sql);

while($row=$stmt->fetch()){
    extract($row);
    $mozik.="<option value='{$mid}'>{$mozinev}</option>";
}

if(isset($_POST['listaz'])){
    $sql="SELECT a.filmcim as 'cim',a.szarmazas as 'szarmazas', a.mufaj as 'mufaj' from film a, hely b, mozi c WHERE a.fid=b.fid and b.mid=c.mid AND c.mid={$_POST['mozik']}";
    $stmt=$db->query($sql);
    while($row=$stmt->fetch()){
        extract($row);
        $mozifilmei.="<tr><td>{$cim}</td><td>{$szarmazas}</td><td>{$mufaj}</td></tr>";
    }
}
?>
<div class="text-center"><h1>Mozi filmjei</h1></div>
    <div class="container">
    <div class="d-flex justify-content-center">
           <form action="" method="post">
             <label for="">Mozik listája: </label>
             <select name="mozik" id="">
             <option value="0">válassz..</option>
             <?=$mozik?>
             </select>
             <div class="text-center"><input type="submit" value="Listáz" name="listaz" class="btn btn-info rounded"></div>
            </form>          
    </div>
    <div class="d-flex justify-content-center">
        <div>
            <table>
                <thead>
                    <th>Cím</th>
                    <th>Származás</th>
                    <th>Műfaj</th>
                </thead>
                <tbody>
                    <?=$mozifilmei?>
                </tbody>
                </table>
        </div>          
    </div>
    </div>