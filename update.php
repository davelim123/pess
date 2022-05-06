<!-- Part 1 -->
<?php require_once 'nav.php'; ?>
<br><br>
<?php
if (!isset($_POST["btnSearch"])){
?>
	<!-- create a form to search for patrol car based on id -->
	<form name="form1" method="post"
	 action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?> ">
	 <table class="ContentStyle">
	  <tr><tr>
	  <tr>
	   <td>Patrol Car ID :</td>
	   <td><input type="text" name="patrolCarId" id="patrolCarId"></td>
	   <td><input type="submit" name="btnSearch" id="btnSearch"> value="Search"></td>
	   </tr>
	  </table>
	 </form>
	<?php
	} ?>
	 