<?php
/**
 * Created by PhpStorm.
 * User: Anik
 * Date: 12/23/2018
 * Time: 10:31 AM
 */
$server = "localhost"; //working in a local PC
$username = "root";   // local user name and password
$password = "root";
$db = "mechanic"; // database name

//create a connectiom
$conn = mysqli_connect($server,$username, $password, $db);

//check connection
if(!$conn){
    die("connection failed". mysqli_connect_error());
}
//echo "connected successfully"."<br>";

if(isset($_POST["add"] ) ){
    
    function validateFromData($formData){
        $formData = trim(stripslashes(htmlspecialchars($formData)));
        return $formData;
    }
    
    
    if(!$_POST["name"]){
        $nameError = "please put your name here <br>";
    }else{
     $name = validateFormData($_POST["name"]);   
    }
    
    
    if($_POST["address"]){
        $address = validateFormData($_POST["address"]);  
    }
    
    
    if(!$_POST["date"]){
        $dateError = "please put your desired date of appointment <br>";
    }else{
     $date = validateFormData($_POST["date"]);   
    }
    
     if(!$_POST["phone"]){
        $phoneError = "please put your phone number <br>";
    }else{
     $phone = validateFormData($_POST["phone"]);   
    }
    
     if(!$_POST["reg"]){
        $regError = "please put your cars registration number<br>";
    }else{
     $reg = validateFormData($_POST["reg"]);   
    }
    
     if(!$_POST["license"]){
        $licenseError = "please put your license number <br>";
    }else{
     $license = validateFormData($_POST["license"]);   
    }
    
     if(!$_POST["mechanic"]){
        $mechanicError = "please put your desired mechanics name <br>";
    }else{
     $mechanic = validateFormData($_POST["mechanic"]);   
    }
    
    

      // check to see if each variable has data
    if( $username && $email && $password ) {
        $query = "INSERT INTO `user_info` (`id`, `username`, `address`, `phone`, `license`, `engine`, `date`, `mechanic_name`) VALUES(NULL,'$name','$address',$phone,$license,$reg,'$date','$mechanic')";
        
////        
//        INSERT INTO `user_info` (`id`, `username`, `address`, `phone`, `license`, `engine`, `date`, `mechanic_name`) VALUES (NULL, 'karim', 'kakrail', '456789', '123456', '789546', '2019-2-20', 'rahim');
//        
        echo ( $query);
        
        
//        INSERT INTO `users`(`id`, `username`, `address`, `phone`, `date`, `license`, `reg`, `mechanic`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])
//
//        if( mysqli_query( $conn, $query ) ) {
//            echo "New record in database!";
//        } else {
//            echo "Error: ". $query . "<br>" . mysqli_error($conn);
//        }
        mysqli_close($conn);
        mysqli_close($conn);
    }
    
    
}



?>




<!DOCTYPE html>
<html>
<head>
	<title>Appointment</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    
    
    
	<section>
		
		<h1>Appoint Your Mechanic</h1>
		<h3>Users Pannel</h3>
		<hr>

	</section>


	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " method="post">
		
        <small>* <?php echo $nameError; ?></small>
		<input type="text" name="username" placeholder="Your name"><br>
        
		<input type="text" name="address"  placeholder="Your Address"><br>
        <small>* <?php echo  $phoneError; ?></small>
        
		<input type="number" name="phone" placeholder="Phone Number"><br>
        <small>* <?php echo $licenseError; ?></small>
        
		<input type="number" name="license" placeholder="DHAKA METRO - KO - 15465"><br>
        
        <small>* <?php echo $regError; ?></small>
        <input type="number" name="reg" placeholder="Engine Number"><br>
        
        <small>* <?php echo $dateError; ?></small>
		<input type="date" name="date" max="2019-05-31" placeholder="Year-month-day"><br>
        
        <small>* <?php echo $mechanicError; ?></small>  

			<select name="mechanic">
				<option value="rahim">Rahim</option>
				<option value="karim">Karim</option>
				<option value="bob">Bob</option>
			</select>


        <input type="submit" name="add" value="Get Your Appointment!">
		
	</form>
                                                        
    <a href="admin.php">Admin page</a>                                                  
</body>
</html>