<?php
    
	include("assets/scripts/connection.php");
	
	$email = isset($_POST['email']);
	
	 $query = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email'") or die(mysql_error()); 
            
   // $row = mysqli_fetch_array($query);
	//Get the posted email address and use for the query
	//
	
		//$query = $conn->query("SELECT * FROM users WHERE email = '$email'") or die(mysqli_error()); 
     //$query = mysqli_query($mysqli , "SELECT * FROM users WHERE email = '$email'") or die(mysqli_error()); 
           // mysqli_query()
    $row = mysqli_fetch_array($query);  
	
	 //$stmt = db->prepare($query);
        
           // $results = $query->fetch(PDO::FETCH_ASSOC);
            //echo '<pre>' ; print_r($results);
            //return $results;
        
	
	   
	/* $sql = "SELECT * FROM users WHERE email = '$email'; 
        
		//$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
         $stmt = $this->db->prepare($sql);
        if ($stmt->execute())
        {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo '<pre>' ; print_r($results);
            return $results;
        }
        else
        {
            echo 'error';
        } */
?> 