<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Pola</title>
</head>
<body>
<h2> Membuat Pola</h2>
<table>
<form method="post" action="">
    <h3>Masukan angka 5</h3>
    <tr><td>Masukan Jumlah</td><td><input type="text" name="angka" style="width:300px"></td></tr>
    <tr><td></td><td><input type="submit" name="ok" value="Buat Pola"></td></tr>
</form>
</table>
<center>
<table>
<?php
$angka = $_POST['angka'];
if($angka == 5){
    $row_kosong = array(
        0,1,2,
        10,11,12,15,16,18,19,
        22,26,27,29,
        30,35,36,38,
        40,42,43,46,47,48,
        52,53,54,
        68,69,
        70,74,75,76,79,
        80,82,84,86,87,
        92,93,95,96,
        100,1003,104,106,107,110,
        111,112,
        120,121
    );
        $num = "";
        $num .='<tr>';
        for($x=1;$x<=121;$x++){
            if (in_array($x, $row_kosong)){
                $num .= "<td> </td>";
                }else{
                $num .= "<td> &nbsp;X&nbsp; </td>";
            }
            if($x % 11 == 0){
                $num .="</tr>";
            }
        }
        echo $num;
}else{
    echo"Number Range invalid";
}
?>
</table>
</center>
</body>
</html>