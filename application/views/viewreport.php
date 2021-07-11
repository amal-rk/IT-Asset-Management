<?php include "header.php" ?>
	<!-- main content start-->
	<div id="page-wrapper">
     	<div class="row">
			<div class="container">
				<h2>Reports</h2><br>
				<table class="table table-striped table-hover table-bordered">
					<thead>
						<tr>
							<th>Device Number</th>
							<th>Type</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($report as $row)
							{
							echo "<tr>";
							echo "<td>".$row->itemid."</td>";
							echo "<td>".$row->type."</td>";
							echo "<td>".$row->description."</td>";
							echo "</tr>";
							}
						?>
					</tbody>		
				</table>
			</div>
		</div>
		<br>
	</div>
<?php include "footer.php" ?>