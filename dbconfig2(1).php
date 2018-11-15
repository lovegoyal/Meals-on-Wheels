<?php
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
if($username&&$password)
{
include("database.php");
$qry="select * from websiteusers where username='$username' and password='$password'";
$execute=mysql_query($qry);
$num=mysql_num_rows($execute);
if($num!=0)
{
?>
<script type="text/javascript">
alert("you are logged in!!");
console.log("you r in ");
</script>
<?php
header ('Location:http://localhost/love/index(1).php');
}
else
{
	/*echo '<script language="javascript">';
echo 'alert("Incorrect Username And Password")';
 echo 'window.location= "index.html"';
echo '</script>';*/

?>
<script type="text/javascript">
alert("Incorrect Username And Password");
window.location.href = "http://localhost/love/index(1).php";
</script>

<?php
}
}
else
{
	/*echo '<script language="javascript">';
echo 'alert("Please Enter Username And Password")';
echo '</script>';*/
?>
<script type="text/javascript">
alert("Plz Enter Username And Password");
window.location.href = "index(1).php";
</script>
<?php
}
?>





?>