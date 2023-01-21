<!DOCTYPE html>
<html>
<head>
	<title>The_task</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div id="bg"></div>
  <center>
    <form action="" method="post">
     <input type="text" name="emi" placeholder="Email" required><br><br>
      <input type="password" name="passwor" placeholder="Password" required><br><br>
      <button class="btn"type="submit" name="submit">Submit</button>
    </form><br>
  </center>
  <?php
    session_start();
    $email ="";
    $name ="";
      if(isset($_POST['submit'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"the_task");
        $query = "select * from login where email = '$_POST[emi]'";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
          if($row['email'] == $_POST['emi']){
            if($row['password'] == $_POST['passwor']){
              $_SESSION['email']= $row['email'];
              $_SESSION['Name']= $row['name'];
              header("Location: admin_dashboard.php");
                echo "Hello world!";
            }
            else{
              echo "Wrong Password";
            }
          }
          else{
            echo "Wrong email ID";
          }
        }
      } 
    ?>
    
    
</body>
</html>