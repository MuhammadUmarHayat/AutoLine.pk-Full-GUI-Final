<?php include 'sidebar.php'; ?>

<div class="container">
	<div class="row dashboard-main-data">
		<?php

		$category = "";
		$totalRows = ""; //total rows from table
		$result = "";

		$sql = "SELECT * FROM category";
		$result = $con->query($sql);

		$totalRows = $result->num_rows;




		if (isset($_POST['done'])) {
			if (!empty($_POST)) {
				if (!empty($_POST['category'])) {
					//insert data into table

					$category = $_POST['category'];
					$subcategory = $_POST['subcategory'];
					$query = "INSERT INTO `category`(`category`,`subcategory`) VALUES ('$category','$subcategory')";

					$query1 = mysqli_query($con, $query);


					echo 'Record  is  successfully';

					/////////////////////////////////////////get data///////////////////////////////

					$sql = "SELECT * FROM category";
					$result = $con->query($sql);

					$totalRows = $result->num_rows;
				} else {
					echo "field should not empty <br>";
				}
			}
		}
		?>

		

			






					<br>
					<table class="table">
						<tr>
							<th> #</th>
							<th>Category </th>
							<th>Sub Category </th>
						</tr>
						<?php

						if ($totalRows > 0) {
							$usertype = "";
							while ($row = $result->fetch_assoc()) {
								echo "<tr><td>" . $row['id'] . "</td>";
								echo "<td>" . $row['category'] . "</td>";
								echo "<td>" . $row['subcategory'] . "</td></tr>";
							}
						} else {
							echo "No data is found";
						}


						?>

					</table>

					<br>
					<br>
					<br>
					<form method="POST" action="categoryManagement.php">
					<table>
						<tr>
							<td> Enter category name</td>
							<td> <input type="text" name="category" class="form-control"></td>
						</tr>
						<tr>
							<td> Enter sub category name </td>
							<td> <input type="text" name="subcategory" class="form-control"></td>
						</tr>
						<tr>
							<td> </td>
							<td> <button type="submit" name="done" class="btn btn-dark">Submit</button></td>
						</tr>


					</table>

				</form>
			</div>
	</div>
	</main>
</div>
</body>

</html>