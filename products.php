<html>
<head>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/> 
</head>
<body>

<section class="bestdeals-w3ls">
	<div class="container-fluid">
		<div class="col-lg-1 col-md-1 col-md-push-5 deal-agileits3" data-aos="zoom-in">
			<h3 class="deal-agile2">Meals</h3>
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
							<th>S.NO</th>
							<th>FAST FOOD</th>
							<th>PRICE</th>
							<th>CART</th>
						</tr>
					</thead>
					<tbody>
					
					<?php
				   $sql = "SELECT * from products";
				   $qury = mysql_query($sql);

				   while($row=mysql_fetch_array($qury))
				   {
							echo"<tr>";
							echo "<form action='cart.php?id=$row[0]' method='post'>";
							echo"<td>$row[0]</td>";
							echo"<td>$row[1]</td>";
							echo"<td>$row[2]</td>";
							$a1=$row[0];
							$a2=$row[1];
							$a3=$row[2];
							echo"<input type='hidden' value='$a1' name='n11'>";	
							echo"<input type='hidden' value='$a2' name='n12'>";	
							echo"<input type='hidden' value='$a3' name='n13'>";	
							echo"<td>";
							echo"<input type='number' value='1' name='n14'>";
							echo'<input type="submit" value="add" width="20"></td>';
							echo "</form>";
						echo"</tr>";
				   }
				   ?>
					</tbody>
				</table>
				
			</div>
		</div>
		<div class="col-lg-1 col-md-1 deal-agileits3" data-aos="zoom-in">
			<h3 class="deal-agile2">Groceries </h3>
		</div>
		<?php
			mysql_connect("localhost","root","");
			$a=mysql_select_db("meals");
		?>	
		<div class="col-lg-5 col-md-5 deal-agileits2" data-aos="zoom-in">
			<div class="table-responsive">          
				<table class="table">
					<thead>
						<tr>
							<th>S.NO</th>
							<th>ITEMS</th>
							<th>PRICE</th>
							<th>cart</th>
						</tr>
					</thead>
					<tbody>
					<?php
				   $sql = "SELECT * from grocery";
				   $qury = mysql_query($sql);

				   while($row=mysql_fetch_array($qury))
				   {
							echo"<tr>";
							echo "<form action='cart.php?id=$row[0]' method='post'>";
							echo"<td>$row[0]</td>";
							echo"<td>$row[1]</td>";
							echo"<td>$row[2]</td>";
							$a1=$row[0];
							$a2=$row[1];
							$a3=$row[2];
							echo"<input type='hidden' value='$a1' name='n11'>";	
							echo"<input type='hidden' value='$a2' name='n12'>";	
							echo"<input type='hidden' value='$a3' name='n13'>";	
							echo"<td>";
							echo"<input type='number' value='1' name='n14'>";
							echo'<input type="submit" value="add" width="20"></td>';
						    echo"</form>";
							echo"</tr>";

				   }
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