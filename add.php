<?php 
  require("config.php");

  if($_POST){

  	   $title=$_POST['title'];
  	  $description=$_POST['description'];
  
   $sql="INSERT INTO todo_app(title,description) VALUES (:title,:description)";
   $pdostatment=$pdo->prepare($sql);
 $result=$pdostatment->execute(
  array(':title'=>$title,':description'=>$description)

 );

   if($result){
   	echo "<script> alert('new todo is added');window.location.href='index.php';</script>";
   }
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>create page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<div class="card">
		<div class="card-body">
			<h2> Create New Todo</h2>
			<form action="add.php" method="POST" accept-charset="utf-8">
				<div class="form-group">
					<label for="">Title</label>
					<input type="text" name="title" class="form-control" required >
					
				</div>
				<div class="form-group">
					<label for="">Description</label>
					<textarea name="description" class="form-control" rows="8" cols="80">
						
					</textarea>
					
				</div><br>
				<div class="form-group">
				<input type="submit" name="submit" class="btn btn-dark" value="SUBMIT">
				<a href="index.php" class="btn btn-danger">Back</a>
				</div>
				
			</form>
			
		</div>
		
	</div>
</body>
</html>