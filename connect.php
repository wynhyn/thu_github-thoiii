<?php

$link = mysql_connect("local","root","") or die ("Khong the ket noi CSDL MySQL");

mysqli_select_db($link,"dulieu");
$sql = "select * from table1";
$result= mysqli_query($link,$sql);
echo '<table border="1" width="100%"';
echo '<Caption>Du lieu truy xuat tu bang Nhan su</Caption>';
echo "<TR><TH>Ma So</TH><TH>Ho Ten</TH><TH>Ngay Sinh</TH><TH>Nghe ngiep</TH></TR>";
while($row=mysqli_fetch_array($result)){
    $maso=$row{"maso"};
    $hoten=$row{"hoten"};
    $ngaysinh=$row{"ngaysinh"};
    $nghenghiep=$row{"nghenghiep"};
    echo "<tr><td>$maso</td><td>$hoten</td><td>$ngaysinh</td><td>$nghenghiep</td></tr>";
    }
echo '</TABLE>';
mysql_free_result($result);
mysql_close($linhk);
?>