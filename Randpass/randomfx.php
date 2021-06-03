<?php  
function randompass( $len ) {  
  
$chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*_";  

$size = strlen( $chars );  
echo "</br></br><center><h3>Your Random password Generator =";  
for( $i = 0; $i < $len; $i++ ) {  
$str= $chars[ rand( 0, $size - 1 ) ];  
echo $str;  
}  
}  
randompass( $_POST['rpass'] );  
echo "</h3><h5>0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*_</h5>";  
echo "</center>";

?> 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!--  <title>Random password Generator</title> -->
  </head>
  <body>



<form method="post" >
  <div class="form-group" >
            <label for="rpass"><h5>Password Char</h5></br></label>
        <input type="number" name="rpass" class="submit" value="10" id="rpass" placeholder="Enter the Value">
  </div>
  </br>
           <button type="submit" class="btn btn-success">Submit</button>
                </form>
  </body>
</html>