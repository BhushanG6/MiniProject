<?php
if(!isset($_SESSION)) {
session_start();
}
//include "auth.php";
//include "header_voter.php";
?>
<h4 style="text-align:center"> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3 style="text-align:center">Make a Vote </h3>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'> Select a option to vote? <BR>
<label><input type="radio" name="lan" value="BJP">  BJP<br></label>
<label><input type="radio" name="lan" value="CONGRESS">CONGRESS<BR></label>
<label><input type="radio" name="lan" value="AAP">   AAP<BR></label>
<label><input type="radio" name="lan" value="NOTA">  NOTA<BR></label>
<label><input type="radio" name="lan" value="NIRDLIY">  NIRDLIY<BR></label>

</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>
