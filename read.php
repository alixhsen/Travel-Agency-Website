<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Roboto+Slab:wght@200&family=Roboto:wght@300&display=swap');
        body {
            font-family: "Poppins";
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        input[type='submit'] {
            margin-top: 20px;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type='submit']:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<?php 
$db=mysqli_connect('localhost','root','','travel');
if (!$db) die("no connection");
if (!mysqli_select_db($db,'travel')) die("no db");
$q="select * from travel_information";
$result=mysqli_query($db,$q) or die("query failed"); // two dim array n rows by 3 columns
echo "<table border=1 style='border-collapse:collapse;' width=100%>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>Number of Guests</th>
                <th>Departure Date</th>
                <th>Return Date</th>
                <th>Travel Purpose</th>
                <th>Destination</th>
            </tr>";
			
while ($row=mysqli_fetch_array($result)){
   
  echo"<tr><td>".$row["Names"]."</td><td>".$row["Email"]."</td><td>".$row["PhoneNumber"].'</td><td>'.$row["Number_Of_Guest"]."</td><td>".$row["Departure_Date"].
  "</td><td>".$row["Return_Date"]."</td><td>".$row["Travel_Purpose"]."</td><td>".$row["Destination"]."</td></tr>";

 }
echo "</table>";
echo "</form>";
mysqli_close($db);
?>
</body>
</html>
