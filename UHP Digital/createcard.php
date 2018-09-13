<?php include_once "config.php" ?>
<!doctype html>
<html>
<head>   
    <?php include_once "template/head.php" ?>
</head>

<body>
<?php include_once "template/navigation.php" ?> 
<form class="callout text-center" style="width:500px;margin-left:auto;margin-right:auto;text-align:center;">
    <h2>Create Card</h2>
    <div class="floated-label-wrapper">
        <label for="firstName">First name</label>
        <input type="text" id="firstName" name="firstName" placeholder="Full name">
    </div>
    <div class="floated-label-wrapper">
        <label for="lastName">Last name</label>
        <input type="text" id="lastName" name="lastName" placeholder="Last name">
    </div>
    <div class="floated-label-wrapper">
        <label for="c&p">Company & position</label>
        <input type="text" id="c&p" name="c&p" placeholder="Company & position">
    </div>
    <div class="floated-label-wrapper">
        <label for="Email">Email</label>
        <input type="Email" id="Email" name="Email" placeholder="Email">
    </div>
    <div class="floated-label-wrapper">
        <label for="Phone">Phone</label>
        <input type="text" id="Phone" name="Phone" placeholder="Phone">
    </div>
    <div class="floated-label-wrapper">
        <label for="color">Choose color</label>
        <input type="color" id="color" name="color" placeholder="Choose color">
    </div>
    <div class="floated-label-wrapper">
        <label for="Picture">Picture</label>
        <input  style="text-align:center" type="file" id="Picture" name="Picture" accept="image/*" placeholder="Picture">
    </div>
    <input class="button expanded" type="submit" value="Create card">
</form>

  
  

   
   <?php include_once "template/scripts.php" ?> 
</body>



</html>