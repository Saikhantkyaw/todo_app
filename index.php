<?php 
   require("config.php");
   $statment=$pdo->prepare("SELECT * FROM todo_app ORDER BY id DESC");
   $statment->execute();
   $result=$statment->fetchALL();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TODO</title>
	<link rel="stylesheet" href="#">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<div class="card">
		<div class="card-body">
			<h2>Todo Home Page</h2>
			<a href="add.php" class="btn btn-warning">Create new</a><br><br>
			<table class="table table-striped">
				
				<thead>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Description</th>
						<th>Created</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
                <?php 
                $i= 1;
                if($result){
                	foreach ($result as  $value) { ?>
                	
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $value['title'];?></td>
						<td><?php echo $value['description']; ?></td>
						<td><?php echo date('Y-m-d',strtotime($value['created_at'])) ?></td>
						<td>
								<a class="btn btn-info" href="edit.php?id=<?= $value['id'] ;?>">Edit</a>
			     				<a class="btn btn-danger" href="delete.php?id=<?= $value['id']?>" >Delete</a>
						</td>
					</tr>	




                	<?php 
                		$i++;
                }
                } ?>


               



				</tbody>


			</table><br><br>
		
			
		</div>
		
	</div>

</body>
</html>