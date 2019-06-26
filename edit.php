<?php
include ('connection.php');

//


    //echo "the value is: ".$_GET['id'];
$clientID= $_GET['id'];
$query2 = "SELECT * FROM user_info WHERE id='$clientID'";
$result = mysqli_query($conn, $query2);
    function validateFormData( $formData ) {
        $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
        return $formData;
    }

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $clientName = $row['username'];
        $clientAddress = $row['address'];
        $clientPhone = $row['phone'];
        $clientLicense = $row['license'];
        $clientEngine = $row['engine'];
        $clientDate = $row['date'];
        $clientMechanic = $row['mechanic_name'];
    }
}else{
    echo "nothing to show!!!";
}
//echo "here";
if(isset($_POST["edit"] ) ){

        $name = validateFormData($_POST["username"]);   
        //sdie("in if here");

        $address = validateFormData($_POST["address"]);  

        $date = validateFormData($_POST["date"]);   

        $phone = validateFormData($_POST["phone"]);   

        $reg = validateFormData($_POST["reg"]);   

        $license = validateFormData($_POST["license"]);   

        $mechanic = validateFormData($_POST["mechanic"]);   


    if($name && $phone && $date && $license && $reg){


        $query = "UPDATE user_info SET 
        `username`='$name', 
        `address`='$address', 
        `phone`=$phone, 
        `license`=$license, 
        `engine`=$reg, 
        `date`='$date', 
        `mechanic_name`='$mechanic' 
        WHERE id='$clientID'";

        //echo $query;


      if( mysqli_query( $conn, $query ) ) {
          echo "Edited";
      } else {
           echo "Please Fill up the necessaary information". $query . "<br>" . mysqli_error($conn);
       }

    } 

    mysqli_close($conn);

}


if(isset($_POST["delete"] ) ){
    $query = "DELETE FROM `user_info` WHERE id='$clientID'";

        echo "Entry has been deleted.";


      if( mysqli_query( $conn, $query ) ) {
          echo "DELETED";
      } else {
           echo "Please Fill up the necessaary information". $query . "<br>" . mysqli_error($conn);
       }

    } 



?>


<!DOCTYPE html>
<html>
    <head>
        <title>Appointment Edit</title>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>



        <section>

            <h1>Appoint Your Mechanic</h1>
            <h3>Users Pannel</h3>
            <hr>

        </section>


        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id=<?php echo $clientID; ?>" method="post">
            <small>*Required</small>
            <br>

            <small>* <?php echo $nameError; ?></small>
            <input type="text" name="username" value="<?php echo $clientName;?>" ><br>

            <input type="text" name="address" value="<?php echo $clientAddress;?>" ><br>

            <small>* <?php echo  $phoneError; ?></small>
            <input type="number" name="phone" value="<?php echo $clientPhone;?>"><br>
            <small>* <?php echo $licenseError; ?></small>

            <input type="number" name="license" value="<?php echo $clientLicense;?>"><br>

            <small>* <?php echo $regError; ?></small>
            <input type="number" name="reg" value="<?php echo $clientEngine;?>"><br>

            <small>* <?php echo $dateError; ?></small>
            <input type="date" name="date" max="2019-05-31" value="<?php echo $clientDate;?>" ><br>

            <small>* <?php echo $mechanicError; ?></small>  

            <select name="mechanic" >
                <option value="<?php echo $clientMechanic;?>">Client choose: 
               <?php echo $clientMechanic;?>
                </option>
                <option value="rahim">Rahim</option>
                <option value="karim">Karim</option>
                <option value="bob">Bob</option>
            </select>

            <br>
            <input type="submit" name="edit" value="Edit"><br>
            <input type="submit" name="delete" value="Delete" id="del">

        </form>



        <a href="admin.php">Admin page</a>                                                  
    </body>
</html>
