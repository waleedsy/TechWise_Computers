<?php 
$title = "Contact";
include "./Components/Connection.php";
include_once "./Components/Header.php";

$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$sql = "SELECT Users.FirstName, Users.Surname, Products.Name, Purchases.Quantity, Purchases.date_time, Purchases.Invoice_no FROM Purchases INNER JOIN Users ON Purchases.User_id = Users.UserID INNER JOIN Products ON Purchases.Prod_id = Products.Product_id WHERE Purchases.Purchased = 1";
$result = $mysqli->query($sql);

echo "<table>";
echo "<tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Date</th>
        <th>Invoice Number</th>
      </tr>";
while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row['FirstName']."</td>
            <td>".$row['Surname']."</td>
            <td>".$row['Quantity']."</td>
            <td>".$row['date_time']."</td>
            <td>".$row['Invoice_no']."</td>
          </tr>";
}
echo "</table>";


?>


<?php 

require_once './Components/Footer.php';

?>