<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','127.0.0.1','','realestate');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM realestate WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Area Name</th>
<th>Zip Code</th>
<th>Population</th>
<th>University</th>
<th>Evaluation of Residential Environment</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
      echo "<td>" . $row['Area Name'] . "</td>";
    echo "<td>" . $row['ZipCode'] . "</td>";
    echo "<td>" . $row['Population'] . "</td>";
    echo "<td>" . $row['University'] . "</td>";
    echo "<td>" . $row['Evaluation of Residential Environment'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
