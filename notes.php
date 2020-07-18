<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Assessment for consultify internship">
    <meta name="keywords" content="HTML5, Template, Design, Development, Task" />
    <meta name="author" content="">
      <?php include('links.php'); ?>
      
      
   </head>
   <body>
    
<?php require "nav.php"; ?>

  <div class="container-fluid">
    <div class="row" style="">
     <div class="col-sm-12" style="background-image: url('notes.jpg');background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;">

        <center><h1 style="margin-top: 50px;color: white"><b><u>YOUR NOTES</u></b></h1></center>
        <br><br>

      <div class="notes-slider slider-style-two owl-carousel" data-item="[1,1,1,1]">
                <div class="item row">
        <?php
     
         $query1="SELECT * FROM notes";
        $result=mysqli_query($conn,$query1);
        $n=0;
       if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
    $n++;
            
?>

        <div class="col-md-3 col-sm-12">
        <div class="card">
  <div class="card-header" style="background-color: black;color: white;">
    Note <?php echo $n ?>
  </div>
  <div class="card-body">
    
    <p class="card-text"> <?php echo $row['Text'];?></p>
    
  </div>
</div>
<br><br>
</div>



<?php }} ?>
     </div>
   </div>
 </div>

</div>
</div>

</body>
</html>