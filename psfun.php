<?php
function load_ps($sql,$con)
{
	echo '
				<table class="table table-striped">
				<tr>
				<th>S.No.</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Blood</th>
				<th>Unit</th>
				<th>Hospital</th>
				<th>Reason</th>
				<th>R-Date</th>
				<th>Status</th>
				
				
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
									echo "<td>".$row['NAME']."</td>";
									echo "<td>".$row['GENDER']."</td>";
									echo "<td>".$row['BLOOD']."</td>";
									echo "<td>".$row['BUNIT']."</td>";
									echo "<td>".$row['HOSP']."</td>";
									echo "<td>".$row['REASON']."</td>";
									echo "<td>".$row['RDATE']."</td>";
										
									if($row["STATUS"]==0)
									{
									
									echo "<td><a href='#' class='btn btn-danger btn-xs'><i class='fa fa-bed'></i> Pending</a></td>";
									
									}
									else if($row["STATUS"]==2)
									{
										
									echo "<td><a href='#' class='btn btn-success btn-xs'><i class='fa fa-bed'></i> Completed</a></td>";
									
									}
									else if($row["STATUS"]==1)
									{
										
									echo "<td><a href='#' class='btn btn-warning btn-xs'><i class='fa fa-bed'></i> Not Completed</a></td>";
									
									}
									
									
									
									
									
									echo "</tr>";
									
								}
							}
							
						
				
			echo'</table>';

}

?>
