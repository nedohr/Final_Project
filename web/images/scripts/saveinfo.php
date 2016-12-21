<?php 
    
		include("assets/scripts/connection.php");
		
		if(isset($_POST['submit'])){
				//$dbcon->real_escape_string($_POST['fn']);
				//$fname = $conn->real_escape_string($_POST['firstname']);
				$fname = $_POST['firstname'];
				//$lname = $conn->real_escape_string($_POST['lastname']);
				$lname = $_POST['lastname'];
				//$gender = $conn->real_escape_string($_POST['gender']);
				$gender = $_POST['gender'];
				$dateob = date( 'Y-m-d', strtotime( $_POST['dob'] ));
				//$dateob = $conn->real_escape_string($_POST['dob']);
				//$dateob = $_POST['dob'];
				//$yoe = $conn->real_escape_string($_POST['experience']);
				$yoe = $_POST['experience'];
				//$field = $conn->real_escape_string($_POST['industry']);
				$field = $_POST['industry'];
				//$location = $conn->real_escape_string($_POST['Location']);
				$location = $_POST['Location'];
				//$aboutUs = $conn->real_escape_string($_POST['about']);
				$aboutUs = $_POST['about'];
				//$image = $conn->real_escape_string($_POST['profilePic']);
				$image= explode(".",$_FILES['profilePic']['name']);
				$tmp_name= $_FILES['profilePic']['tmp_name'];
				$uploaddir = 'uploads/';
				$new_pic_name = $email . '.' . end($image);
				$pic_full_name = $uploaddir.$new_pic_name;
				/*$image = file_get_contents($image);
				$image = base64_encode($image);
				$pic = explode(".", $_FILES["file"]["name"]);
					$tmp_pic_name = $_FILES['file']['tmp_name'];
					$uploaddir = 'uploads/';
					//Done to rename the file
					$new_pic_name = $email . '.' . end($pic);
					$pic_full_name = $uploaddir.$new_pic_name;*/
					//move_uploaded_file('$image','upload/'.$image);
				//$filepath="upload/".$image;
				//$title = $conn->real_escape_string($_POST['title']);
				$title = $_POST['title'];
				//$clevel = $conn->real_escape_string($_POST['cLevel']);
				$clevel = $_POST['cLevel'];
				//$level = $conn->real_escape_string($_POST['level']);
				$level = $_POST['level'];
				//$olevel = $conn->real_escape_string($_POST['olevel']);
				$olevel = $_POST['olevel'];
				//$jlevel = $conn->real_escape_string($_POST['jlevel']);
				$jlevel = $_POST['jlevel'];
				//$address = $conn->real_escape_string($_POST['address']);
				$address = $_POST['address'];
				//$number = $conn->real_escape_string($_POST['tel']);
				$number = $_POST['tel'];
				//$web = $conn->real_escape_string($_POST['website']);
				$web = $_POST['website'];
				//$email = $conn->real_escape_string($_POST['email']);
				$email = $_POST['email'];
		
		//$query = mysqli_query($conn,"SELECT email FROM users WHERE email = '$email'") or die(mysqli_error($conn)); 
		//execute();
		
	} 
		
		$query = mysqli_query($conn,"SELECT email FROM users WHERE email = '$email'") or die(mysqli_error($conn));
		//require("userlist.php");
        
		//include ("assets/scripts/saveinfo.php");
        
        //Check any records came back. If anything other than 0 came back, it means that at least one record already exists.
        if(mysqli_num_rows($query) == 0 ) { 

            $query = "INSERT INTO users (firstName,lastName,gender,dob,experience,industry,location,aboutUs,photo,proTitle,carLevel,comLevel,orLevel,joLevel,address,tel,website,email) 
					VALUES ('$fname','$lname','$gender','$dateob', '$yoe','$field','$location', '$aboutUs','$pic_full_name','$title', '$clevel','$level','$olevel', '$jlevel','$address','$number', '$web','$email')"; 

            $data = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
            if($data) {

				if (!move_uploaded_file($tmp_name, $pic_full_name)){
                    echo "<div class='alert alert-warning'>Profile picture upload failed...</div>"; 
                 }

                echo "<div class='alert alert-success'>Registration successful</div>"; 
                
                //header("Location: view.php?id=".mysql_insert_id());
			}
               // echo "<div class='alert alert-success'>User Registration successful</div>"; 
            //} 
            else{
                echo "<div class='alert alert-danger'>User Registration failed!</div>";
            }
        }else {
            echo "<div class='alert alert-warning'>A user already has the email ". $email.". Record not saved. </div>";
        }
    
?>