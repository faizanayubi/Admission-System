<?php require_once ("../includes/connection.php");?>
<?php require_once ("../includes/functions.php");?>
<?php require_once ("../includes/session.php");?>

<?php confirm_logged_in(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>IGNOU</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/image_slide.js"></script>
</head>

<body>
  <div id="main">
    <div id="header">
    <div id="banner">
      <div id="welcome">
        <h1>IGNOU</h1>
      </div><!--close welcome-->
      <div id="welcome_slogan">
        <h1>Online Admission System</h1>
      </div><!--close welcome_slogan-->
    </div><!--close banner-->
    </div><!--close header-->
<?php $basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);?>
  <div id="menubar">
      <ul id="menu">
        <li <?php if ($basename == 'index') echo ' class="current"'; ?>><a href="index.php">Home</a></li>
        <li <?php if ($basename == 'programs') echo ' class="current"'; ?>><a href="programs.php">Programs</a></li>
        <li <?php if ($basename == 'fees') echo ' class="current"'; ?>><a href="fees.php">Fees</a></li>
        <li <?php if ($basename == 'students') echo ' class="current"'; ?>><a href="students.php">Student</a></li>
        <li <?php if ($basename == 'admission') echo ' class="current"'; ?>><a href="admission.php">Admission</a></li>
      </ul>
    </div><!--close menubar-->  
    
  <div id="site_content">

    <div class="sidebar_container">
    <div class="sidebar">
    <div class="sidebar_item">
    <h2>Admin Panel</h2>
    </div><!--close sidebar_item--> 
    </div><!--close sidebar-->
  
    <div class="sidebar">
    <div class="sidebar_item">
    <h3>Welcome <?php echo $_SESSION['username'];?></h3>
    <p><ul>
      <li><a href="index.php">Manage Website Content</a></li>
      <li><a href="add_admin.php">Add Staff Users</a></li>
      <li><a href="logout.php">LogOut</a></li>
    </ul></p>  
    </div><!--close sidebar_item-->
    </div><!--close sidebar-->
        <div class="sidebar">
          <div class="sidebar_item">
            <h2><a href="new_update.php">+ Add a new Update</a></h2>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  
        <div class="sidebar">
          <div class="sidebar_item">
            <h2>Contact</h2>
            <p>Phone: +91 (0)1234 567891</p>
            <p>Email: <a href="mailto:info@youremail.co.in">info@ignou.co.in</a></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container--> 
<?php sidebar_navigation_id();?>