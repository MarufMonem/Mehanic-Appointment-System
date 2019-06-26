<?php
include('connection.php');

?>



<!DOCTYPE html>
<html>
<head>
	<title>Appointment</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<section>
		
		<h1>Appoint Your Mechanic</h1>
		<h3>Admin Pannel</h3>
		<hr>

	</section>
    
 
    
    
	<section class="tableinfo">
<!--
		<table>
			<th>Name</th>
			<th>Address</th>
			<th>Phone Number</th>
			<th>Car License</th>
			<th>Date</th>
			<th><button>Edit</button></th>
			<th><button>delete</button></th>
		</table>
-->
        
        
           <?php
$query="SELECT * FROM user_info";
$results = mysqli_query($conn, $query);
        echo "<table>
            <th>ID</th>
			<th>Name</th>
			<th>Phone Number</th>
			<th>Registration</th>
			<th>Date</th>
            <th>Mechanic Name</th>
			<th>Edit/Delete</th>
			
		";

if(mysqli_num_rows($results)>0){//are there any rows?
   // echo "found values";
     while($row = mysqli_fetch_assoc($results)){
         
//            <a href="edit-record.php?id='.$row['id'].'">edit</a>
         $userNum = $row["id"];
         //echo "Value is: " .$userNum;
         echo "<tr>
            <td>".$row["id"]."</td>
            <td>".$row["username"]."</td>
            <td>".$row["phone"]."</td>
            <td>".$row["engine"]."</td>
            <td>".$row["date"]."</td>
            <td>".$row["mechanic_name"]."</td>
            <td>
            <a href='edit.php?id=$userNum'>
                <i class='fas fa-edit'></i>
            </a>

            </td>
			
         </tr>";
         
         
     }
}else{
    echo "Problem";
}
    
    
    
    
    
mysqli_close($conn);
?>

	</section>

</body>
</html>