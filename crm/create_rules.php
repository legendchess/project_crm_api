
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
					
					<form action="rulesPost.php" method="POST"  enctype="multipart/form-data">
					  <div class="form-group row">
					    <label class="col-sm-4 col-form-label">Aircompany rate</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="aircompany_rate">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label class="col-sm-4 col-form-label">non-refoundable tax type</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="non_r_tax_t">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label class="col-sm-4 col-form-label">non-refoundable tax amount</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="non_r_tax_a">
					    </div>
					  </div>					  
					    <div class="form-group row">
					    <label class="col-sm-4 col-form-label">Agent fees for register ticket </label>
					    <div class="col-sm-8">
					      <input type="number" class="form-control" name="agent_fees">
					    </div>
					  </div>
					    <div class="form-group row">
					    <label class="col-sm-4 col-form-label">Aircompany fees</label>
					    <div class="col-sm-8">
					      <input type="number" class="form-control" name="aircompany_fees">
					    </div>
					  </div>
					   <div class="form-group row">
					    <label class="col-sm-4 col-form-label">fees type</label>
					    <div class="col-sm-8">
					    <!-- <input type="number" class="form-control" name="fees_type"> -->
					      <select class="form-control" name='fees_type'>
					      	<option value="0">Calculate in the percentage</option>
					      	<option value="1">Calculate in the cash</option>
					      </select>
					    </div>
					  </div>
					<!--   <div class="form-group row">
					    <label class="col-sm-4 col-form-label">file</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="hash_fileq">
					    </div>
					  </div> -->
					  <div class="form-group-row">
					  <span class="col-sm-4 col-form-label">Rule file</span>
					  
					<input class="input100" required='true' type="file" name="hash_fileq" placeholder="Enter name of RULE">
				
					</div>
					

<!--  <div class="form-group row">
 	 <label class="col-sm-4 col-form-label">non-refoundable tax</label>
						<table >
						  <tr>
						    <td> 
						     	<div class="col-sm-8">
					      		<input type="password" class="form-control" name="password">
					    		</div>
							</td>
						    <td>
						 	   	  <div class="form-group row float-right">
					  			  <input type="submit" value="add more" class="btn btn-success">
					  			  </div>
						    </td>
						  </tr>
						</table>

 </div> -->
					  <div class="form-group row float-right">
					    <input type="submit" value="SEND" class="btn btn-success">
					  </div>

		<!-- 		<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Rule File</span>
					<input class="input100" required='true' type="file" name="rule_file" placeholder="Enter name of RULE">
					<span class="focus-input100"></span>
				</div>	 -->



					</form>
				</div>
			</div>

		</section>

	</div>

</body>
</html>