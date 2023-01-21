<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script type="text/javascript" src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <?php
    //include(database.php);
    //session_start();
   ?>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <span class="logo_name">the_task</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin_dashboard.php" class="active">
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
          <a href="student_board.php">
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
        <span class="dashboar" style="font-size: 18px" style="color: black" style="font-stretch: bold">Dashboard</span>
      </div>
      <div class="profile-details">
        <i class="fa fa-home" style="font-size: 16px"></i>
        <iconify-icon icon="bx:chevron-right" style="font-size: 20px"></iconify-icon>
        <span class="side_board">Dashboard</span>
      </div>
    </nav>
  </div>
  <div class="home-section-2">
    <nav style="background-color: white" >
      <div class="sidebar-button-2">
        <img src="industry.jpg" style="height: 65px;width: 65px">
         &nbsp;
        <span class="dashboar-2" style="font-size: 18px" style="color: black" style="font-stretch: bold">One Smarter.inc</span>
         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <span class="dashboar-2" style="font-size: 18px" style="color: black" style="font-stretch: bold">Contact Person</span>
         &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <span class="dashboar-2" style="font-size: 18px" style="color: black" style="font-stretch: bold">Email</span>
         &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <span class="dashboar-2" style="font-size: 18px" style="color: black" style="font-stretch: bold">Phone</span>
      </div>
      <div class="profile-details-2">
        <span class="side_board-2"><label class="switch-1">
                 <input type="checkbox">
              <span class="slider round-1" style="background-color: darkblue"></span>
      </div>
    </nav>
  </div>
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>