<?php
$a1=$_REQUEST["n11"];
$a2=$_REQUEST["n12"];
$a3=$_REQUEST["n13"];
$a4=$_REQUEST["n14"];
include("database.php");
$query="insert into cartitem(productname,price,quantity) values ('$a2','$a3','$a4')";
$items=mysql_query($query);


// $a1=$_REQUEST["n11"];
// $a2=$_REQUEST["n12"];
// $a3=$_REQUEST["n13"];
// $a4=$_REQUEST["n14"];
// include("database.php");
// $query="insert into cartitem1(id,productname,price,quantity) values ('$a1','$a2','$a3','$a4')";
// $items=mysql_query($query);


?>
<html>
<head>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/> 
</head>
<body>

<section class="bestdeals-w3ls">
	<div class="container-fluid">
		<div class="col-lg-1 col-md-1 col-md-push-5 deal-agileits3" data-aos="zoom-in">
			<h3 class="deal-agile2">orders</h3>
		</div>
		<div class="col-lg-5 col-md-5 col-md-pull-1 deal-agileits1" data-aos="zoom-in">
			
		<div class="table-responsive"> 
			<?php
			mysql_connect("localhost","root","");
			$a=mysql_select_db("meals");
		?>         
				
					
				<table class="table">
				
				<thead>
						<tr>
							<th>YOUR ORDERS</th>
							<th>PRICE</th>
                            <th>QUANTITY</th>
                            <th>AMOUNT</th>
						</tr>
					</thead>
					<tbody>
					
					<?php
				   $sql = "SELECT * from cartitem";
				   $qury = mysql_query($sql);
                   $f=0;
				   while($row=mysql_fetch_array($qury))
				   {
							echo"<tr>";
							//echo "<form action='cart.php?id=$row[0]' method='post'>";
							echo"<td>$row[0]</td>";
							echo"<td>$row[1]</td>";
                            echo"<td>$row[2]</td>";
                            //echo"<td>$row[3]</td>";
                            $b=$row[2];
                            $c=$row[1];
                            $e=$b*$c;
                            $f=$f+$e;
							echo"<td>";
							echo"<input type='text' value='$e'  name='n14'></td>";
							//echo'<input type="submit" value="+" width="20"></td>';
							//echo "</form>";
						echo"</tr>";
                   }
                   echo"<td></td>";
                   echo"<td></td>";
                   echo"<td>total Bill</td>";
                   echo"<td>";
                   echo $f;
                   echo"</td>";
                   echo"<tr>";
                   echo"<td></td>";
                   echo"<td></td>";
                   echo"<td></td>";
                   echo"<td>";
                   echo'<input type="submit" value="PAY NOW" width="20">';
                   echo"</td>";
                   echo"</tr>";
                   
				   ?>
					</tbody>
				</table>
				
			</div>
                </div>
		
		<div class="clearfix"></div>
	</div>
</section>



</body>
</html>