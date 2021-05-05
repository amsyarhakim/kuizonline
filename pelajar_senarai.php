<?php
include("sambungan.php");
?>
<html>
<head>
<link rel="stylesheet" href="senarai.css">    
</head>
<body>
    <table>
    <caption>SENARAI NAMA PELAJAR</caption>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Katalaluan</th>
        </tr>
<?php
$sql = 'select * from pelajar ';
$hasil = mysqli_query($sambungan, $sql);
while($pelajar = mysqli_fetch_array($hasil)) {
echo '<tr><td>'.$pelajar["idpelajar"].'</td>
<td>'.$pelajar["namapelajar"].'</td>
<td>'.$pelajar["idkelas"].'</td>
<td>'.$pelajar["PASSWORD"].'</td>

</tr>';    
}
        
?>
    
    </table>
    
</body>

</html>