<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   <link rel="stylesheet" href="styles.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script type="text/javascript" src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</head>
<body>
<div class="sidebar">
    <div class="logo-details">
      <span class="logo_name">the_task</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin_dashboard.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#" class="active">
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
        <iconify-icon icon="mi:settings" style="font-size: 17px" style="color:white"></iconify-icon>
        <span class="admin_name">Welcome One Smarter.inc</span>
        <i class='bx bx-chevron-down' style="color: white" ></i>
      </div>
    </nav>
  </section>
  <div class="home-section">
    <nav style="background-color: #ADD8E6" >
      <div class="sidebar-button">
        <span class="dashboar" style="font-size: 18px" style="color: black">Manage Account</span>
      </div>
      <div class="profile-details">
        <i class="fa fa-home" style="font-size: 16px"></i>
        <iconify-icon icon="bx:chevron-right" style="font-size: 20px"></iconify-icon>
        <span class="side_board">Manage Account</span>
      </div>
    </nav>
  </div>
 <div class="home-section-1">
    <nav style="background-color: white" >
      <div class="sidebar-button-1">
      <i class="fa fa-lock" style="font-size:25px"></i>
        <span class="dashboar-1" style="font-size: 18px" style="color: black">Authentication (2-Step Verification)</span>
      </div>
      <div class="profile-details-1">
        <span class="side_board"><label class="switch">
                 <input type="checkbox">
              <span class="slider-1 round"></span>
</label></span>
      </div>
</nav>
</div>
  <div class="home-section-1">
    <nav style="background-color: white" >
      <div class="sidebar-button-1">
        <br><i class="fa fa-globe" style="font-size:25px;color:black"></i><br>
        <span class="dashboar-1" style="font-size: 18px" style="color: black">Profile Settings</span>
      </div>
      <div class="profile-details-1">
        <iconify-icon icon="bx:chevron-right" style="font-size: 27px"></iconify-icon>
      </div>
    </nav>
  </div>
    <div class="home-section-1">
    <nav style="background-color: white" >
      <div class="sidebar-button-1">
        <i class="fa fa-map-marker" style="font-size:30px;color:black"></i><br>
        <span class="dashboar-1" style="font-size: 18px" style="color: black">Manage Location & Address</span>
      </div>
      <div class="profile-details-1">
        <iconify-icon icon="bx:chevron-right" style="font-size: 27px"></iconify-icon>
      </div>
</nav>
  <hr style="width: 20>px;color: black">
</div>
  <div class="home-section-1">
    <nav style="background-color: white" >
      <div class="sidebar-button-1">
        <i class="material-icons" style="font-size:19px;color:black">email</i><br>
        <span class="dashboar-1" style="font-size: 18px" style="color: black">Manage Email</span>
      </div>
      <div class="profile-details-1">
        <iconify-icon icon="bx:chevron-right" style="font-size: 27px"></iconify-icon>
      </div>
</nav>
</div>
 <div class="home-section-1">
    <nav style="background-color: white" >
      <div class="sidebar-button-1">
        <img src="717009.png" style="height: 20px;width: 20px">
        &nbsp;
        <span class="dashboar-1" style="font-size: 18px" style="color: black">Change Password</span>
      </div>
      <div class="profile-details-1">
        <iconify-icon icon="bx:chevron-right" style="font-size: 27px"></iconify-icon>
      </div>
</nav>
</div>
</body>
</html>