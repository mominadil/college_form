<?php 

include('connection.php');
$fname = $_POST['fname'];
$lname = $_POST['lname'];



if(isset($_FILES['fileToUpload'])){
    $errors= array();
    
    // First Name Validation
    if (empty ($_POST['fname'])) {  
    $errMsg = "<br>Error! You didn't enter the First Name.";  
             echo $errMsg;  
        } 
    else {  
    $fname = $_POST['fname'];  
    } 
    
    
    // Last Name Validation
    if (empty ($_POST['lname'])) {  
    $errMsg = "<br>Error! You didn't enter the Last Name.";  
             echo $errMsg;  
        } 
    else {  
    $lname = $_POST['lname'];  
    } 








    
    
    
}
$sql = "INSERT INTO student_db_table (fname,lname) VALUES ('$fname','$lname')";
mysqli_query($conn,$sql);



?>