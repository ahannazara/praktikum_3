<!DOCTYPE html>
<html lang="en">
    
<head>

<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 4px solid #99A799;
  text-align: left;
  padding: 8px;

}

tr:nth-child(even) {
  background-color: #D3E4CD;
}
</style>

</head>
<body style="background-color:#ADC2A9">
<div style="background-color: #FEF5ED">
<h1 style="color:#32502E; text-align: center;">꧁༺✿WARUNG JOY✿༻꧂</h1>

    

<table>

  <tr>
    <th style="color:#32502E">No</th>
    <th style="color:#32502E">Nama Barang</th>
    <th style="color:#32502E">Stok</th>
    <th style="color:#32502E">Berat(kg)</th>
    <th style="color:#32502E">Berat(gram)</th>
    <th style="color:#32502E">Berat(Miligram)</th>
    <th style="color:#32502E">Berat(Liter)</th>
  </tr>
    <?php

$a=1;
$nama_barang=[
    1=>'beras',
    2=>'telur',
    3=>'minyak',
    4=>'garam',
    5=>'gula',
    6=>'tepung',
    7=>'bubuk kopi',
    8=>'kerupuk',
];
$stock=[
    1=>40,
    2=>0,
    3=>11,
    4=>24,
    5=>0,
    6=>42,
    7=>52,
    8=>23,
];
$kg = 10;
$gram = 10000;
$miligram = 971828182846;
$liter =7.530;

function kosong($stock, $a){
    if($stock[$a]==0){
        echo'<td style=" background-color:#C37B89; 
                         color:white;
                         margin:center;">KOSONG</td>';
    }
    else{
        echo"<td>".$stock[$a]."</td>";
    }
 
}

while ($a < 9){
    echo "<tr>";
        echo"<td>".$a."</td>";
        echo"<td>".$nama_barang[$a]."</td>";
        kosong($stock, $a);
        echo"<td>".$stock[$a]*$kg."kg</td>";
        echo"<td>".$stock[$a]*$gram."g</td>";
        echo"<td>".$stock[$a]*$miligram."mg</td>";
        echo"<td>".$stock[$a]*$liter."L</td>";
    echo "</tr>";

  $a++;
}


    ?>
</table>

<h1 style="color:#32502E; text-align: center;">꧁༺✿WARUNG JOY✿༻꧂</h1>
</div>

</body>

</html>
