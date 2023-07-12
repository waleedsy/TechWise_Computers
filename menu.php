<?php

$title = "Menu";
include "./Components/Connection.php";
require_once "./Components/Header.php";

$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$sql = "SELECT * FROM Products";
$result = $mysqli->query($sql);

$products = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
} 

$mysqli->close();

?>
<table>
    <tr>
        <th>Product ID</th>&nbsp;
        <th>Brand</th>&nbsp;
        <th>Model</th>&nbsp;
        <th>Name</th>&nbsp;
        <th>Description</th>&nbsp;
        <th>Price</th>&nbsp;
    </tr>
    <?php
    foreach($products as $product){
        echo "<tr>
                <td>{$product['Product_id']}</td>
                <td>{$product['Brand']}</td>
                <td>{$product['Model']}</td>
                <td>{$product['Name']}</td>
                <td>{$product['Description']}</td>
                <td>{$product['Price']}</td>
              </tr>";
    }
    ?>
</table>
<a href="Cart.php" target="_blank"> Go to Cart </a>
        <?php

include_once "./Components/Footer.php";

?>