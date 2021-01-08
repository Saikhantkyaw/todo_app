<?php 
  require("config.php");

  if ($_POST) {
  	   $title=$_POST['title'];
  	  $description=$_POST['description'];
  	  $id=$_POST['id'];

  	  $pdostatment=$pdo->prepare("UPDATE todo_app SET title='$title',description='$description' WHERE id='$id' ");
  	     $result =$pdostatment->execute();

   if($result){
   	echo "<script> alert('new todo is updated');window.location.href='index.php';</script>";
   }

  	# code...
  }else{
    $pdostatment=$pdo->prepare("SELECT * FROM todo_app WHERE id=".$_GET['id']) ;
    $pdostatment->execute() ;
    $result=$pdostatment->fetchALL();
    
    

  }

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<div class="card">
		<div class="card-body">
			<h2> Edit  Todo</h2>
			<form action="" method="post" accept-charset="utf-8">

				<input type="hidden" name="id" value="<?= $result [0]['id']?>">
				<div class="form-group">
					<label for="">Title</label>
			<input type="text" name="title" class="form-control" value="<?= $result [0]['title'];?>" required >
					
				</div>
				<div class="form-group">
					<label for="">Description</label>
					<textarea name="description" class="form-control" rows="8" cols="80">
						<?= $result [0] ['description'];?>
					</textarea>
					
				</div><br>
				<div class="form-group">
				<input type="submit" name="submit" class="btn btn-dark" value="UPDATE">
				<a href="index.php" class="btn btn-danger" >Back</a>
				</div>
				
			</form>
			
		</div>
		
	</div>
</body>
</html>