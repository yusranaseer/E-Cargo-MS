<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >

<!--	Style CSS	-->
<link href="source/css/admin.css" rel="stylesheet">

<!-- Link for fontawesome -->
<script src="https://kit.fontawesome.com/affc06d9e8.js" crossorigin="anonymous"></script>
	
<title>Dashboard</title>
</head>
<body>
<?php
include 'nav.php';
?>

<div>
<div class="container margin-1">
	<div class="row text-center">
		<div class="col-md">
			<div class="shadow">
				<div class="table table-hover table-responsive">
					<table class="table">
						<thead>
							<tr>
							<th scope="col">#</th>
							<th scope="col">First</th>
							<th scope="col">Last</th>
							<th scope="col">Handle</th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
							<td><button type="button" class="btn btn-primary">Primary</button></td>
							<td><button type="button" class="btn btn-success">Success</button></td>
							<td><button type="button" class="btn btn-danger">Danger</button></td>
							</tr>
							<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
							</tr>
						</tbody>    
					</table>
				</div>				
			</div>
		</div>		
	</div>
</div>    
</div>
  
<script src="source/js/popper.min.js"></script>
<script src="source/js/jquery-3.4.1.slim.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>