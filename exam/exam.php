<?php include 'inc/header.php'; ?>

<?php
     Session::checkSession();
 ?>
 <style>
   body{
     background-image: url("bg.jpg");
     margin-top: 60px;

   }

 </style>

<div class="main">
<h1>Welcome to Online Exam - Start Now</h1>
	<div class="segment" style="margin-right:30px;">
		<img src="img/online_exam.png"/>
	</div>
	<div class="segment">
	<h2>Start Test</h2>
	<ul>
		<li><a href="starttest.php">Start Now...</a></li>
	</ul>
	</div>

  </div>
<?php include 'inc/footer.php'; ?>
