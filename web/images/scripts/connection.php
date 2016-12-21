<?php 

//Define Constants relative to your database and the host
/* define('DB_HOST', 'localhost'); 
define('DB_NAME', 'registration'); 
define('DB_USER','root'); 
define('DB_PASSWORD','');  */

//Establish host connection
/* $con= new PDO(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 

//Establish database connection
$db=mysql_select_db(DB_NAME,$con) or  die("Failed to connect to MySQL: " . mysql_error()); 

//For debugging, print confirmation or error
//if (mysqli_connect_errno($con)) { 
//    echo "<div class='alert alert-danger'>Failed to connect to MySQL: " . mysqli_connect_error()."</div>";
//} else { 
//    echo "<div class='alert alert-success'>Successfully connected to your database…</div>"; 
//} 
*/
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "registration";

			// Create connection
			$conn = new mysqli($servername, $username, $password,$db);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			//echo "Connected successfully";
			
			
			/* 
			//start here
				$host = 'localhost';
				$username = 'root';
				$password = '';
				//$database = 'registration';
				//$conn= NULL;

			try
			{
				$conn = new PDO("mysql:host=$host; dbname=registration", $username, $password);
				/* $conn = mysqli_connect($host,$username,$password,$database);
				
				$db=mysql_select_db($database,$conn) or die("Failed to connect to MySQL: " . mysql_error()); */
				//echo "Connection was successful";
			/* } 
			catch (PDOException $e) 
			{
				echo "Connection Failed:" . $e->getMessage();
			}
				 *///end here */
				//$this->db = $conn;
			


?>