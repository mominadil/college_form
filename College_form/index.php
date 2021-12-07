<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      .error {
        color: #ff0000;
      }
    </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Addmission Form</title>
  </head>
  <body>

            <?php


$lname="";

      // Last Name Validation
    if (empty ($_POST['lname'])) {  
    $errMsg = "<br>Error! You didn't enter the Last Name.";  
             echo $errMsg;  
        } 
    else {  
    $lname = $_POST['lname'];  
    } 



      ?>

  
    <h2>Addmission Form</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="action.php" enctype="multipart/form-data">
      First Name: <input type="text" name="fname" />
      <span class="error">*</span>
      <br /><br />
      Last Name: <input type="text" name="lname" />
      <span class="error">*<?php echo "$errMsg" ?></span>
      <br /><br />
      Select image to upload:
      <input type="file" name="fileToUpload" id="fileToUpload" /><br />
      Image should be in PNG , JPEG & JPG format & less than 500kb. <br /><br />
      E-mail: <input type="email" name="email" />
      <span class="error">*</span>
      <br /><br />
      Password: <input type="password" name="password" />
      <span class="error">*</span>
      <br /><br />
      Gender:
      <input type="radio" name="gender" value="male" />Male
      <input type="radio" name="gender" value="female" />Female
      <input type="radio" name="gender" value="other" />Other
      <span class="error">*</span>
      <br /><br />
      <script>
        document.querySelector("input[name=gender][value=male]").checked = true;
      </script>
      <input type="submit" name="submit" value="Submit" />






    </form>
  </body>
</html>
