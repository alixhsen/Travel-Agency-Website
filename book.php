<html>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Roboto+Slab:wght@200&family=Roboto:wght@300&display=swap');
        body {
            font-family: "Poppins";
        }

        h1{
            color:black;
            font-family:"Poppins";
        }
        a{
            text-decoration: none;
            background-color:#0873ba;
            color: #fff;
            display: inline-flex;
            justify-content:center;
            font-family: 'Roboto';
            font-weight: 400;
            font-size: 1rem;
            text-transform: uppercase;
            line-height: 14px;
            width: 200px;
            height: 40px;
            align-items: center;
            border-style: solid;
            border-color: #fff;
            cursor: pointer;
        }
        a:hover{
            background-color: #fff;
            color: #0873ba;
            border-color: #0873ba;
            border-style: solid;
            transition: 0.2s;
        }
    </style>
<body>
<?php
$db=mysqli_connect('localhost','root','','travel');
if (!$db) die("no connection");

if (!mysqli_select_db($db,'travel')) die("no db");

$name=$_GET['name'];
$mail=$_GET['email'];
$phone=$_GET['phone'];
$guests=$_GET['guests'];
$dept=$_GET['departure-date'];
$ret=$_GET['return-date']; // Adjusted key
$travel=$_GET['travel-purpose']; // Adjusted key
$des=$_GET['travel-des'];

$q="insert into travel_information (Names, Email, PhoneNumber, Number_Of_Guest, Departure_Date, Return_Date, Travel_Purpose, Destination) 
    values ('$name', '$mail', '$phone', '$guests', '$dept', '$ret', '$travel', '$des')";

if (mysqli_query($db, $q)) 
    echo('<h1>"Ordered Successfully"</h1>');
else 
    echo("cannot insert item");

echo('<br><a href="read.php">show records</a>');
?>
</body>
</html>
