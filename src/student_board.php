<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script type="text/javascript" src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   </head>
   <?php
    //session_start();
include("database.php");

$db= $conn;
$tableName="students";
$columns= ['id', 'fullName','gender','email','mobile', 'address','city','state'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{

$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName"." ORDER BY id DESC";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
   ?>
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
        <span class="side_board">Student</span>
      </div>
    </nav>
  </div>
  <div class="home-section-2">
    <nav style="background-color: white" >
      <div class="sidebar-button-2">
        <i class="fa fa-keyboard-o" style="font-size:26px" style="color: darkblue"></i>
         &nbsp;
        <span class="" style="font-size: 14px" style="color: black">Search Student By Name</span>
         &nbsp; &nbsp;
      </div>
      <div class="profile-details-2">  
        <a href="add_student.php" class="btn-liquid">
          <span class="inner" style="color: white" style="font-size: 30px">add student</span>
        </a>
      </div>
    </nav>
  </div>
  <div class="home-section-4">
    <div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>S.N</th>
         <th>Full Name</th>
         <th>Gender</th>
         <th>Email</th>
         <th>Mobile Number</th>
         <th>Address</th>
         <th>City</th>
         <th>State</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['fullName']??''; ?></td>
      <td><?php echo $data['gender']??''; ?></td>
      <td><?php echo $data['email']??''; ?></td>
      <td><?php echo $data['mobile']??''; ?></td>
      <td><?php echo $data['address']??''; ?></td>
      <td><?php echo $data['city']??''; ?></td>
      <td><?php echo $data['state']??''; ?></td>  
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
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


$(function() {
  // Vars
  var pointsA = [],
    pointsB = [],
    $canvas = null,
    canvas = null,
    context = null,
    vars = null,
    points = 8,
    viscosity = 20,
    mouseDist = 70,
    damping = 0.05,
    showIndicators = false;
    mouseX = 0,
    mouseY = 0,
    relMouseX = 0,
    relMouseY = 0,
    mouseLastX = 0,
    mouseLastY = 0,
    mouseDirectionX = 0,
    mouseDirectionY = 0,
    mouseSpeedX = 0,
    mouseSpeedY = 0;

  /**
   * Get mouse direction
   */
  function mouseDirection(e) {
    if (mouseX < e.pageX)
      mouseDirectionX = 1;
    else if (mouseX > e.pageX)
      mouseDirectionX = -1;
    else
      mouseDirectionX = 0;

    if (mouseY < e.pageY)
      mouseDirectionY = 1;
    else if (mouseY > e.pageY)
      mouseDirectionY = -1;
    else
      mouseDirectionY = 0;

    mouseX = e.pageX;
    mouseY = e.pageY;

    relMouseX = (mouseX - $canvas.offset().left);
    relMouseY = (mouseY - $canvas.offset().top);
  }
  $(document).on('mousemove', mouseDirection);

  /**
   * Get mouse speed
   */
  function mouseSpeed() {
    mouseSpeedX = mouseX - mouseLastX;
    mouseSpeedY = mouseY - mouseLastY;

    mouseLastX = mouseX;
    mouseLastY = mouseY;

    setTimeout(mouseSpeed, 50);
  }
  mouseSpeed();

  /**
   * Init button
   */
  function initButton() {
    // Get button
    var button = $('.btn-liquid');
    var buttonWidth = button.width();
    var buttonHeight = button.height();

    // Create canvas
    $canvas = $('<canvas></canvas>');
    button.append($canvas);

    canvas = $canvas.get(0);
    canvas.width = buttonWidth+100;
    canvas.height = buttonHeight+100;
    context = canvas.getContext('2d');

    // Add points

    var x = buttonHeight/2;
    for(var j = 1; j < points; j++) {
      addPoints((x+((buttonWidth-buttonHeight)/points)*j), 0);
    }
    addPoints(buttonWidth-buttonHeight/5, 0);
    addPoints(buttonWidth+buttonHeight/10, buttonHeight/2);
    addPoints(buttonWidth-buttonHeight/5, buttonHeight);
    for(var j = points-1; j > 0; j--) {
      addPoints((x+((buttonWidth-buttonHeight)/points)*j), buttonHeight);
    }
    addPoints(buttonHeight/5, buttonHeight);

    addPoints(-buttonHeight/10, buttonHeight/2);
    addPoints(buttonHeight/5, 0);
    renderCanvas();
  }
  function addPoints(x, y) {
    pointsA.push(new Point(x, y, 1));
    pointsB.push(new Point(x, y, 2));
  }
  function Point(x, y, level) {
    this.x = this.ix = 50+x;
    this.y = this.iy = 50+y;
    this.vx = 0;
    this.vy = 0;
    this.cx1 = 0;
    this.cy1 = 0;
    this.cx2 = 0;
    this.cy2 = 0;
    this.level = level;
  }

  Point.prototype.move = function() {
    this.vx += (this.ix - this.x) / (viscosity*this.level);
    this.vy += (this.iy - this.y) / (viscosity*this.level);

    var dx = this.ix - relMouseX,
      dy = this.iy - relMouseY;
    var relDist = (1-Math.sqrt((dx * dx) + (dy * dy))/mouseDist);

    // Move x
    if ((mouseDirectionX > 0 && relMouseX > this.x) || (mouseDirectionX < 0 && relMouseX < this.x)) {
      if (relDist > 0 && relDist < 1) {
        this.vx = (mouseSpeedX / 4) * relDist;
      }
    }
    this.vx *= (1 - damping);
    this.x += this.vx;

    // Move y
    if ((mouseDirectionY > 0 && relMouseY > this.y) || (mouseDirectionY < 0 && relMouseY < this.y)) {
      if (relDist > 0 && relDist < 1) {
        this.vy = (mouseSpeedY / 4) * relDist;
      }
    }
    this.vy *= (1 - damping);
    this.y += this.vy;
  };
  function renderCanvas() {
    rafID = requestAnimationFrame(renderCanvas);
    context.clearRect(0, 0, $canvas.width(), $canvas.height());
    context.fillStyle = '#fff';
    context.fillRect(0, 0, $canvas.width(), $canvas.height());
    for (var i = 0; i <= pointsA.length - 1; i++) {
      pointsA[i].move();
      pointsB[i].move();
    }
    var gradientX = Math.min(Math.max(mouseX - $canvas.offset().left, 0), $canvas.width());
    var gradientY = Math.min(Math.max(mouseY - $canvas.offset().top, 0), $canvas.height());
    var distance = Math.sqrt(Math.pow(gradientX - $canvas.width()/2, 2) + Math.pow(gradientY - $canvas.height()/2, 2)) / Math.sqrt(Math.pow($canvas.width()/2, 2) + Math.pow($canvas.height()/2, 2));

    var gradient = context.createRadialGradient(gradientX, gradientY, 300+(300*distance), gradientX, gradientY, 0);
    gradient.addColorStop(0, '#102ce5');
    gradient.addColorStop(1, '#E406D6');
    var groups = [pointsA, pointsB]

    for (var j = 0; j <= 1; j++) {
      var points = groups[j];

      if (j == 0) {
        context.fillStyle = '#1CE2D8';
      } else {
        context.fillStyle = gradient;
      }

      context.beginPath();
      context.moveTo(points[0].x, points[0].y);

      for (var i = 0; i < points.length; i++) {
        var p = points[i];
        var nextP = points[i + 1];
        var val = 30*0.552284749831;

        if (nextP != undefined) {
          
            p.cx1 = (p.x+nextP.x)/2;
            p.cy1 = (p.y+nextP.y)/2;
            p.cx2 = (p.x+nextP.x)/2;
            p.cy2 = (p.y+nextP.y)/2;

            context.bezierCurveTo(p.x, p.y, p.cx1, p.cy1, p.cx1, p.cy1);
        } else {
nextP = points[0];
            p.cx1 = (p.x+nextP.x)/2;
            p.cy1 = (p.y+nextP.y)/2;

            context.bezierCurveTo(p.x, p.y, p.cx1, p.cy1, p.cx1, p.cy1);
        }
      }
      context.fill();
    }

    if (showIndicators) {
      context.fillStyle = '#000';
      context.beginPath();
      for (var i = 0; i < pointsA.length; i++) {
        var p = pointsA[i];

        context.rect(p.x - 1, p.y - 1, 2, 2);
      }
      context.fill();
      context.fillStyle = '#f00';
      context.beginPath();
      for (var i = 0; i < pointsA.length; i++) {
        var p = pointsA[i];

        context.rect(p.cx1 - 1, p.cy1 - 1, 2, 2);
        context.rect(p.cx2 - 1, p.cy2 - 1, 2, 2);
      }
      context.fill();
    }
  }
  initButton();
});


 </script>

</body>
</html>

