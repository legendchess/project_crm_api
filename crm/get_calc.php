
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	
	<div class="container mt-5">

		<section>
			
			<div class="row">
				<div class="col-6 offset-3">
					
					<form action="get_calculation.php" method="post" enctype="multipart/form-data">
					  <div class="form-group row">
					    <label class="col-sm-4 col-form-label">Aircompany rate</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="aircompany_rates">
					    </div>
					  </div>
					  
					  
 					<div class="form-group row float-right">
					    <input type="submit" value="next" class="btn btn-success">
					</div>	

					</form>
				</div>
			</div>

		</section>

	</div>

</body>
</html>