<?php
$magyarFilmek="";

$sql="SELECT filmcim,hossz from film order by filmcim";
$stmt=$db->query($sql);

while($row=$stmt->fetch()){
    extract($row);
    
    $magyarFilmek.="<tr><td>{$filmcim}</td><td>{$hossz} perc</td></tr>";

}
?>
<div class="text-center"><h1>Magyar filmek</h1></div>
    <div class="container">
        <div class="d-flex justify-content-center">
                <div>
                    <table>
                        <thead>
                            <th>Cím</th>
                            <th>Hossz</th>
                        </thead>
                        <tbody><?=$magyarFilmek?></tbody>
                    </table>
                </div>           
        </div>
    </div>