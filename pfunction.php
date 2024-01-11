<?php 
function load_pn($sql,$con)
{
	echo '
				<table class="table table-striped">
				<tr>
				<th>S.No.</th>
				<th>Name</th>
				<th>EMAIL</th>
				
				<th>PHONE</th>
				<th>Blood Group</th>
				<th>CITY</th>
				
				
				</tr>';
				
					
							$result=$con->query($sql);
							$n=0;
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc())
								{   
									$n++;
									echo "<tr>";
									echo "<td>".$n."</td>";
									echo "<td>".$row['pname']."</td>";
									echo "<td>".$row['pemail']."</td>";
									
									echo "<td>".$row['pphone']."</td>";
									echo "<td>".$row['rbg']."</td>";
									echo "<td>".$row['pcity']."</td>";
									
										
									
									echo "</tr>";
								}
							}
							
						
				
			echo'</table>';

}
?>