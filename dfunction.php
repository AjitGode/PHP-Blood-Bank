<?php 
function load_dn($sql,$con)
{
	echo '
				<table class="table table-striped">
				<tr>
				<th>S.No.</th>
				<th>Name</th>
				<th>EMAIL</th>
				
				<th>PHONE</th>
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
									echo "<td>".$row['dname']."</td>";
									echo "<td>".$row['demail']."</td>";
									
									echo "<td>".$row['dphone']."</td>";
									echo "<td>".$row['dcity']."</td>";
									
										
									
									echo "</tr>";
								}
							}
							
						
				
			echo'</table>';

}
