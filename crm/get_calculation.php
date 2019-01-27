
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
					
					<form action="get_calculatePost.php" method="post">

						<div class="col-sm-8">
							<?php $a = $_POST['aircompany_rates'] ?>
							<div>
								<?php echo $a; ?>
							</div>
					      <input type="hidden" name="aircompany_rate" value="<?php  echo $a; ?>">
					    </div>
	
					  <div class="form-group row">
					    <label class="col-sm-4 col-form-label">Ticket sum</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="ticket">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label class="col-sm-4 col-form-label">Agent fees for return ticket</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="agent_f_r_t">
					    </div>
					  </div>
					    <div class="form-group row">
					    <label class="col-sm-4 col-form-label">new non-refoundable tax </label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="new_n_r_t">
					    </div>
					  </div>
					  
				
	



 					<div class="form-group row float-right">
					    <input type="submit" value="calculate" class="btn btn-success">
					</div>	

					</form>
				</div>
			</div>

		</section>

	</div>

</body>
</html>