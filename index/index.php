<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="../css/styl.css"> -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/public/uploadmovie.html"> -->
	<!-- <link rel="stylesheet" type="text/css" href="/phpintro/index/index.php"> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color:white;">












	<div class="container">
	<form action="index.php" method="post">    
    <div class="row">
      <div class="col">
      	<div class="form-group">
      	<input type="text" class="form-control" id="movie" placeholder="Movie Name" name="movie"></div>
   <br>
     <div class="col">
     	<div class="form-group">
        <input type="text" class="form-control" id="actor" placeholder="Lead Actor" name="actor"></div>
        <br>
        <div class="col">
        <div class="form-group">
        <input type="duration" class="form-control" id="duration" placeholder="Time in Hours" name="duration"></div>
        <br>
        <div class="col">
        	<div class="form-group">
      	
        <input type="text" class="form-control" id="rate" placeholder="PG" name="rate"></div>
        <br>
         <div class="col">
         	<div class="form-group">
      	
        <input type="text" class="form-control" id="Genre" placeholder="action" name="Genre"></div>
        <br>


        <div class="col">
        	<div class="form-group">
        		<input class="btn btn-warning" type="submit" name="save" class="form-control" value="submit">
        		
        	</div>
        	
        </div>

</div>
</div>
</div>
</div>
</div>
</div>

</form>

<?php
$moviename= '';
$leadactor= '';
$duration= '';
$rate= '';
$genre ='';



if (isset($_POST{'save'})) {
	// users input
	$moviename= $_POST{'movie'};
	$leadactor= $_POST{'actor'};
	$duration= $_POST{'duration'};
	$rate= $_POST{'rate'};
	$genre= $_POST{'Genre'};
	# code...
}


echo "<h1>$moviename<br>$leadactor<br>$duration<br>$rate<br>$genre</h1>" ;




// using if else



/*$moviename'';
$leadactor'';
$duration'';
$rate'';
$genre'';

$sum;
$average;

if (isset($_POST{'save'})) {
	// users input
	$moviename= $_POST{'movie'}
	$leadactor= $_POST{'actor'}
	$duration= $_POST{'duration'}
	$rate= $_POST{'rate'}
	$genre= $_POST{'genre'}
	# code...
}

$sum=$moviename+$leadactor+$duration+$rate+$genre;
$average=$sum /5;

if ($average>=60) {
	echo "1st division";

	elseif ($average>=50) {
		echo "2nd division";

		elseif (average>=35) {
			echo "3rd division";

			else ()
				echo "failed";
			# code...
		}
		# code...
	}
	# code...
}*/






?>



</body>
</html>