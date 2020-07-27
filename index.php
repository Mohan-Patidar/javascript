<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <?php include 'db.php'; ?>
    <?php 
    
//     if(isset($_POST['submit'])){
//       if (empty($_POST["fname"])) {
//         $fnameErr = "Name is required";
//       } else {
//         $a = test_input($_POST["fname"]);
//           if (!preg_match("/^[a-zA-Z ]*$/",$a)) {
//             $nameErr = "Only letters and white space allowed";
//            }
//       } 
//       if(empty($_POST["lname"])){
//           $lnameErr = "Last name is required";
//       } else{
//           $b = test_input($_POST['lname']);
//             if (!preg_match("/^[a-zA-Z ]*$/",$b)) {
//               $lnameErr = "Only letters are allowed";
//             }
//       }
//       if(empty($_POST["gender"])){
//         $genderErr = "selection  is required";
//       } else{
//         $c = test_input($_POST['gender']);
//       }
//       if(empty($_POST["email"])){
//         $emailErr = "email is required";
//         echo $emailErr;
//       } else{
//         $d = test_input($_POST['email']);
//           if (!filter_var($d, FILTER_VALIDATE_EMAIL)) {
//              $emailErr = "Invalid email format";
//             }
//       }
//       if(empty($_POST["contact"])){
//         $contactErr = "contact number is required";
//       } else{
//         $e = test_input($_POST['contact']);
//           if (!preg_match(preg_match("^[0-9]{10}",$e)) {
//             $contactErr = "Your Mobile No is invalid"
//           }
//       }
//       if(empty($_POST["comment"])){
//         $textErr = "";
//       } else{
//         $f = test_input($_POST['comment']);
//       }
//       if($_POST["fname"]!='' && $_POST["lname"]!='' && $_POST["email"]!='' && $_POST["contact"]!='' && $_POST["comment"]!='' && $_POST["gender"]!='' ){

//       $s="INSERT INTO `person`(`First name`, `Last name`, `Gender`, `E- mail`, `Contact no.`, `Text`) VALUES ('$a','$b','$c','$d','$e','$f')";  
// mysqli_query($conn, $s);
   
//         echo mysqli_error($conn);
//     }  
// }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
      }
    ?>
<form method="post">  
  First name: <input type="text" name="fname">
  <br> <br>
  Last name: <input type="text" name="lname">
  <br><br>
  Gender:
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="other">Other
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Contact no: <input type="text" name="contact">
  <br><br>
  Text: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

</script>


</body>
</html>