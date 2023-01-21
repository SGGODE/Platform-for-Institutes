<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script type="text/javascript" src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="sidebar">
    <div class="logo-details">
      <span class="logo_name">the_task</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin_dashboard.php" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="manageaccount.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Manage Account</span>
          </a>
        </li>
        <li>
          <a href="student_board.php"class="active">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Students</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name" >Log out</span>
          </a>
        </li>
      </ul>
  </div>
<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <span class="dashboard" style="font-size: 18px" >School Portal</span>
      </div>
      <div class="profile-details">
        <iconify-icon icon="mi:settings" style="font-size: 15px" style="color:white"></iconify-icon>
        <span class="admin_name">Welcome One Smarter.inc</span>
        <i class='bx bx-chevron-down' style="color: white" ></i>
      </div>
    </nav>
  </section>
  <div class="home-section">
    <nav style="background-color: #ADD8E6" >
      <div class="sidebar-button">
        <span class="dashboar" style="font-size: 18px" style="color: black" style="font-stretch: bold">Student</span>
      </div>
      <div class="profile-details">
        <i class="fa fa-home" style="font-size: 16px"></i>
        <iconify-icon icon="bx:chevron-right" style="font-size: 20px"></iconify-icon>
        <span class="side_board" style="font-size=12px">Student</span>
        <iconify-icon icon="bx:chevron-right" style="font-size: 20px"></iconify-icon>
        <span class="side_board" style="font-size=12px">Add Student</span>
      </div>
    </nav>
  </div>
  <div class="home-section-2">
    <nav style="background-color: white" >
      <div class="profile-details-2">  
        <a href="exportData.php" class="btn-liquid">
          <span class="inner" style="color: white" style="font-size: 30px">Download</span>
        </a>
      </div>
    </nav>
  </div>
 <div class="home-section-4">
<div class="container">
 <div class="row">
   <div class="col-sm-4">
    <h3 class="text-primary">Here You Can Add Student</h3>
    <p><?php echo !empty($result)? $result:''; ?></p>
      <form method="post" >
         <div class="form-group">
          <input type="password" class="form-control" placeholder="Id" name="id">
       </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Full Name" name="fullName">
       </div>
     
     <div class="form-group">
       <div class="form-check-inline">
         <input type="text" class="form-check-input" name="gender" placeholder="Gender">
       </div>
     </div>

        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email Address" name="email">
       </div>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="Mobile Number" name="mobile">
       </div>

        <div class="form-group">
       
       <textarea class="form-control" name="address" placeholder="Address"></textarea>

       </div>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="City" name="city">
       </div>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="State" name="state">
       </div>
 
  <button type="submit"  name="save" class="btn btn-primary">Save</button>
  </form>
  <br>
  <br>
        <form action="importData.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
        </form>
   </div>
   </div>
</div>
</div>

<?php
include("database.php");
if(isset($_POST['save']))
{    
     $id = $_POST['id'];
     $fullName = $_POST['fullName'];
     $gender = $_POST['gender'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $address = $_POST['address'];
     $city = $_POST['city'];
     $state = $_POST['state'];
     $sql = "INSERT INTO students (id,fullName,gender,email,mobile,address,city,state)
     VALUES('$id','$fullName','$gender','$email','$mobile','$address','$city','$state')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successful !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     $to = "$email";
     $subject = "My subject";
     $txt = "Hi,$fullName Your Registraion is Successful.";
     $headers = "From: OneSmarter.com" . "\r\n" .

     
      mail($to, $subject, $txt, $headers);
     mysqli_close($conn);
}
?>
</body>
</html>
