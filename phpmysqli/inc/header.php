<!DOCTYPE html>
<html>
<head>
	<title>PHP & MySQL & PDO</title>
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css"/>
	<script type="text/javascript" src="inc/bootstrap.min.js"></script>
	<script type="text/javascript" src="inc/jquery.min.js"></script>
 <style>
   
  .insert{color:#06960E; font-weight:bold;}
  .delete{color:#DE5A24; font-weight:bold;}

  .mainleft{border-right:1px dotted #999; float:left; margin-right:16px; width:350px;}
  .mainright{float:right; width:450px;}

  .tblone{width:100%; border:1px solid #fff;}
  .tblone th{padding: 5px 10px; text-align: center;}
  .tblone td{padding: 5px 10px; text-align: center;}

  table.tblone tr:nth-child(2n+1){background:#fff; height: 30px;}
  table.tblone tr:nth-child(2n){background: #fdf0f1 none repeat scroll 0 0; height: 30px;}

  input[type="text"]{border:1px solid #ddd; margin-bottom:5px; padding:5px; width:228px; font-size:16px;}
  input[type="submit"]{cursor: pointer}


 </style>


</head>

<body>
  <div class="container">
  	<nav class="navbar navbar-default">
  		<div class="container-fluid">
  			<div class="navbar-header">
  				<a class="navbar-brand"  href="index.php">
  			   PHP & MySQL & PDO
  				</a>
  			</div>
               <ul class="nav navbar-nav pull-right"> 
                 <li><a href="index.php">Home</a></li>
                 <li><a href="index.php">For Student</a></li>
                 <li><a  href="teacher.php">For Teacher</a></li>
               </ul>

                <!-- 
                     <li><a  href="profile.php">Profile</a></li>
              	     <li><a href="">Logout</a></li>
              	     <li><a href="login.php">Login</a></li>  
                -->
              
              
  		</div>
  	</nav>
