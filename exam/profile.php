<?php include 'inc/header.php'; ?>

<?php
     Session::checkSession();
     $userid = Session::get('userid');
 ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$updateUser = $usr->updateUserData($userid, $_POST);
}
 ?>

 <style>
 body{
   background-image: url("bg.jpg");
   margin-top: 50px;
 }
 .profile{width: 520px;margin: 0 auto;border: 2px solid #ddd; padding:50px;}

 </style>

<?php
$getData = $usr->getUserData($userid);
if ($getData) {
  $result = $getData->fetch_assoc();

 ?>

<div class="main">
<h1>Your Profile</h1>
<div class="profile">

  <?php
    if (isset($updateUser)) {
      echo $updateUser;
    }
   ?>
	<form action="" method="post">
		<table class="tbl">
			 <tr>
			   <td>Name </td>
			   <td><input  name="name" type="text" value="<?php echo $result['name']; ?>"/></td>
			 </tr>
       <tr>
			   <td>Username </td>
			   <td><input  name="username" type="text" value="<?php echo $result['username']; ?>"/></td>
			 </tr>
       <tr>
			   <td>Email</td>
			   <td><input name="email" type="text"  value="<?php echo $result['email']; ?>"/></td>
			 </tr>

			  <tr>
			  <td></td>
			   <td><input type="submit"  value="Update">
			   </td>
			 </tr>
       </table>
	   </form>

</div>
<?php } ?>

</div>
<?php include 'inc/footer.php'; ?>
