<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8" name = "viewport" content = "width-device=width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<title>OOP PHP CRUD Operation</title>
	</head>
<body>
	<nav class = "navbar navbar-default">
		<div class = "container-fluid">
			<a class = "navbar-brand" href = "https://www.sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class = "row">	
		<div class = "col-md-3">
		</div>
		<div class = "col-md-6 well">
			<h3 class = "text-primary">OOP PHP CRUD Operation Using MySQLi - Part 1</h3>
			<hr style = "border-top:1px dotted #000;"/>
			<form method  = "POST" class = "form-inline" action = "create.php">
				<div class = "form-group">
					<label>Firstname:</label>
					<input type  = "text" name = "firstname" class = "form-control" required = "required"/>
				</div>
				<div class = "form-group">
					<label>Lastname:</label>
					<input type  = "text" name = "lastname" class = "form-control" required = "required"/>
				</div>
				<div class = "form-group">
					<button name = "save" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> Add</button>
				</div>
			</form>
			<br />
			<table class = "table table-bordered alert-warning table-hover">
				<thead>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Action</th>
				</thead>
				<tbody>
				<?php
					require 'class.php';
					$conn = new db_class();
					$read = $conn->read();
					while($fetch = $read->fetch_array()){ 
				?>
					<tr>
						<td><?php echo $fetch['firstname']?></td>
						<td><?php echo $fetch['lastname']?></td>
						<td><center><a class = "btn btn-warning"><span class = "glyphicon glyphicon-edit"></span> Update</a> | <a class = "btn btn-danger"><span class = "glyphicon glyphicon-trash"></span> Delete</a></center></td>
					</tr>
				<?php
					}
				?>	
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>