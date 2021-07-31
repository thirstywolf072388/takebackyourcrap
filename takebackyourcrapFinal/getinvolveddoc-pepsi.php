<?php

$user = 'root';
$password = 'root';
$db = 'mydb';
$host = 'localhost';
$port = 3306;

       
$con = mysqli_connect($host, $user, $password, $db);
         
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die("I am doomed!!");
    }

// Attempt insert query execution
$sqlcompname = "Select name from mydb.company where companyID = 2";
$sqlshipping = "SELECT address, city, state, zipCode FROM mydb.company WHERE companyID =2";

$result = mysqli_query($con,$sqlcompname); 
$result2 = mysqli_query($con,$sqlshipping);

 while ($row = mysqli_fetch_array($result)) {

                $name = $row['name'];             
}
  while ($row = mysqli_fetch_array($result2)) {
          
                $address = $row['address'];
                $city = $row['city'];
                $state = $row['state'];
		$zipCode = $row['zipCode'];
}

$fname = ''. htmlspecialchars($_POST["first_name"]) .'';
$lname = ''. htmlspecialchars($_POST["last_name"]) .'';
//echo $name;
//echo $address;
//echo $city;
//echo $state;
//echo $zipCode;
//echo $fname;
//echo $lname;

echo nl2br("Hello, I am $fname $lname. I am writing you today to express some concerns I have about the future of $name. My family and I enjoy your products very much but are concerned about the amount of plastic waste that ends up in our community. I would apprechiate it if you would kindly take back this waste that I have collected for you and dispose of it in a better way. \n\nI hope that the future of $name will be one where the containers are biodegradable or that your company finds a better way of collecting this waste. I dont think the responsibility of waste management should be placed on your consumers and if that continues to be the case we will look to take our business elsewhere. For the good of all please take care of this.\n\nCheers, \n$fname $lname\n\n\n\n\n");

echo "----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------";

echo nl2br("\n\nCompany Information Cutout For Printing.\n\n\n$name\n$address\n$city, $state\n$zipCode\n\n");




// Close connection
mysqli_close($con);

?>