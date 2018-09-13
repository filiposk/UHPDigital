<?php include_once "config.php" ?>
<!doctype html>
<html>
<head>   
    <?php include_once "template/head.php" ?>
</head>

<body>
<?php include_once "template/navigation.php" ?> 

<?php
$query =  $conn->prepare("select * from user ;");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_OBJ);
?>
 <?php foreach($result as $row): ?>
 <div style="margin-top: 25px;"></div><br>
<div style="width:30%; border:1px solid black; margin: auto; background-color:<?php echo $row->Color ?>">

  <div>
  
  
            <div class="front"></div>
            <div style="text-align:right;top:50%;">
              <img src="./uploads/<?php echo $row->Picture ?>" alt="slika" width="30%" heigt="30%" >
            </div>
          
         <div class="back">
         
                
         <p><?php echo $row->FirstName; ?></p>
          <p><?php echo $row->LastName; ?></p>
          <p><?php echo $row->Comp_Pos; ?></p>
          <p><?php echo $row->Phone; ?></p>
          <p><?php echo $row->Email; ?></p>
                    
          
                   
      </div> 
           
  </div>
</div>
<?php endforeach; ?>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
  

   
   <?php include_once "template/scripts.php" ?> 
</body>



</html>