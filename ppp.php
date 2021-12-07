
<?php
function Clean($input){
   return   strip_tags(trim($input));
}
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $name     =clean($_POST['name'] ) ;
    $password =$_POST['password'] ;
    $email    =clean($_POST['email']);
    $address  =clean($_POST['address']);
    $linkedIn =clean($_POST['linkedIn']);
    $errors = [];

     # Validate Name ... 
     if(empty($name)){
         $errors['Name']  = "Field Required";
     }

     # Validate Email ..... 
     if(empty($email)){
         $errors['Email'] = "Field Required";
     }
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $errors['Email'] = "Invalid email format";
     }
    
    #Validate Password
    if(empty($password)){
      $errors['password'] = "Field Required";
    }
    if(strlen($password) < 6){
        $errors['Password']  = "Password Length must be >= 6 chs ";
    }

    # Validate Address ..... 
    if(empty($address)){
      $errors['Address'] = "Field Required";
    }
    if(strlen($address) != 10){
     $errors['Address']  = "address Length must be 10 chs ";
  }

    # Validate LinkedIn ..... 
    if(empty($linkedIn)){
       $errors['LinkedIn'] = "Field Required";
  }
    if (!filter_var($linkedIn, FILTER_VALIDATE_URL)) {
      $errors['LinkedIn'] ="Enter Valid Url" ;
    }
     # Check .... 
     if(count($errors) > 0){
         foreach ($errors as $key => $value) {
             # code...
             echo '* '.$key.' : '.$value.'<br>';
         }
     }
     else
     {
        echo 'Valid Data .... ';
     }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>"   method="post" >

  

  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="name" aria-describedby="" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail">Email address</label>
    <input type="email"   class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword">New Password</label>
    <input type="password"   class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail">Address</label>
    <input type="text"   class="form-control" id="exampleInputAddress" name="address" aria-describedby="addressHelp" placeholder="Enter address">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail">LinkedInUrl</label>
    <input type="text"   class="form-control" id="exampleInputUrl" name="linkedIn" aria-describedby="urlHelp" placeholder="Enter linkedIn">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>











































//<?php
//$cha="z";
//$cha="a";
//$cha ++;
//if(strlen($cha)>1){
//    echo $cha[0];
//}
//else {
//    echo $cha;
//}
//?>















//<?php
//$unit=118;
//$bill=0;
//if($unit>0 && $unit<=50)
//    {
//        $bill=$unit*3.50;
//        echo $bill;
//    }
//   elseif($unit>50 && $unit<=150)
//    {
//        $firstPart=50*3.50;
//        $remainUnitPrice=($unit-50)*4.00;
//        $bill= $firstPart + $remainUnitPrice ;
//        echo $bill;
//    }
//else{
//        $firstPart=50*3.50;
//        $secondPart=100*4.00;
//        $remainUnitPrice=($unit-150)*6.50;
//          $bill=$firstPart+$secondPart+$remainUnitPrice;
//        echo $bill;
    
//    }

// ?>
