 <?php 
include('connection.php');
     
error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$txt=$_POST['txt'];
echo $txt;
if( $txt!='' )
    {
      $sql="INSERT INTO notes (Text) VALUES('$txt')";
      $result=mysqli_query($conn,$sql);


    if($result){
     echo "<script>alert('inserted successfully');</script>";
     header("location:notes.php");
    }
    else{
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
}
?>
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
     <div class="col-sm-12" style="background-image: url('img3.jpg');background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;height: 800px;">


     <form method="post" action="index.php">
     <div style="margin-top: 100px;">
       <h1 style="color: black;margin-left: 110px;"><b><u>WRITE YOUR NOTES</u></b></h1>

       <br>
     
    <div class="input-group" style="width: 45%;">
        <textarea class="form-control" aria-label="With textarea" style="height: 190px" name="txt"></textarea>
    </div>

    <br>
<button type="submit" class="btn btn-dark" style="margin-left: 250px;">Submit</button>

     </div>
     </form>
   
     </div>
    </div>
  </div>
   </body>
   </html>