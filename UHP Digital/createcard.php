<?php
include_once "config.php";
if(isset($_POST["add"])){
    $query =  $conn->prepare("insert into user(FirstName,LastName,Comp_Pos,Phone,Email,Color,Picture)values
    (:FirstName,:LastName,:Comp_Pos,:Phone,:Email,:Color,:Picture)");
    unset($_POST["add"]);    
$query->execute($_POST);
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["Picture"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    move_uploaded_file($_FILES["Picture"]["tmp_name"], $target_file);
header("location: cards.php");

}
?>

<!doctype html>
<html>
<head>   
    <?php include_once "template/head.php" ?>
</head>

<body>
<?php include_once "template/navigation.php" ?> 



<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>" class="callout text-center" style="width:500px;margin-left:auto;margin-right:auto;text-align:center;">
    <h2>Create Card</h2>
    <div class="floated-label-wrapper">
        <label for="FirstName">First name</label>
        <input type="text" id="FirstName" name="FirstName" placeholder="First name">
    </div>
    <div class="floated-label-wrapper">
        <label for="LastName">Last name</label>
        <input type="text" id="LastName" name="LastName" placeholder="Last name">
    </div>
    <div class="floated-label-wrapper">
        <label for="Comp_Pos">Company & position</label>
        <input type="text" id="Comp_Pos" name="Comp_Pos" placeholder="Company & position">
    </div>
    <div class="floated-label-wrapper">
        <label for="Phone">Phone</label>
        <input type="text" id="Phone" name="Phone" placeholder="Phone">
    </div><div class="floated-label-wrapper">
        <label for="Email">Email</label>
        <input type="Email" id="Email" name="Email" placeholder="Email">
    </div>
   </div><div class="floated-label-wrapper">
        <label for="Color">Choose color</label>
        <input type="color" id="Color" name="Color">
    </div>
    </div><div class="floated-label-wrapper">
        <label for="Picture">Add picture</label>
        <input type="file" name="Picture" accept="image/*">
    </div>
   
    
    <button type="submit" name="add" class="button">Create card</button>
</form>

  
  

   
   <?php include_once "template/scripts.php" ?> 
</body>



</html>