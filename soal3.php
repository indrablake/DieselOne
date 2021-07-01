<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Pola</title>
</head>
<body>
<h2> Gabungan Huruf</h2>
<table>
<form method="post" action="">
    <tr><td>Jumlah huruf A</td><td><input type="text" name="hurufA" style="width:300px"></td></tr>
    <tr><td>Jumlah huruf B</td><td><input type="text" name="hurufB" style="width:300px"></td></tr>
    <tr><td></td><td><input type="submit" name="ok" value="Buat Pola"></td></tr>
</form>
</table>
<center>
<?php
    $hurufA = $_POST['hurufA'];
    $hurufB = $_POST['hurufB'];
    $arr = array("A","B");
    for($a=$hurufA; $a>0; $a--){
        $res1 = print("A");
    }
    
    for($a=$hurufB; $a>0; $a--){
        $res2 = print("B");
    }
    echo join(" ",$arr);
   
    
    
?>
</center>
</body>
</html>