<?php



// $_GET
// $_POST
// $_REQUEST
// $_FILES
// $GLOBALS





echo "<pre>";
echo "GET Method<br>";
print_r($_GET);

echo "POST Method<br>";
print_r($_POST);

echo "REQUEST Method<br>";
print_r($_REQUEST);

echo "FILES Method<br>";
print_r($_FILES);















?>









<form action="" method="post" enctype="multipart/form-data"  >


<input type="text" placeholder="Enter your name" name="name">
<input type="text" placeholder="Enter your password" name="password">
<input type="file" name="prof_pic">

<button  type="submit"  >Submit</button>


</form>