<html>
<head>
<link rel="stylesheet" type="text/css" href="home.css"/>
<script src="home.js"></script>
<link rel="shortcut icon" href="large.png" />
</head>
<body>

<nav class="navbar">
      <div class="container">
       <link rel="shortcut icon" href="large.png" />
        <img src="large.png" alt="HTML5 Icon" style="width:128px;height128px;"> 
       
        <ul class="nav">
          <li><a href="../index.php">Home</a></li>
          <li><a href="logout.php">Logout</a></li>
          <li><a href="order.php">Orders</a></li>
         
        </ul>
      </div>
    </nav>

<center><h1>Orders</h1>
<table border=2 style="margin-top:50" width=100% height=100%>

<?php
include 'connection.php';
$sql = "SELECT * FROM users_items";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<tr>
<th>User Id</th>
<th>Item Id</th>
<th>Status</th>
</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["user_id"]. "</td><td>" . $row["item_id"]. "</td><td>" . $row["status"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>


</body>
</html>

