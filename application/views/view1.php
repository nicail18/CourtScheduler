<!DOCTYPE html>
<html lang="en">	
<head>
	<title>Insert, Select, Update, Delete Data using CodeIgniter</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="<?php echo base_url('bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet" />
	<script src="<?php echo base_url('bootstrap/js/tests/vendor/jquery.min.js'); ?>" > </script>
   
</head>
<body>
<div class="container">
	<br /><br /><br />
	<h3 align="center">Insert, Select, Update, Delete Data using CodeIgniter</h3><br />
	<form method="post" action="<?php echo base_url()?>controller1/form_validation">
		<?php 
			if($this->uri->segment(2)=="inserted"){
				echo '<p class="text-success">Data Inserted</p>';
			}
		?>
		
		<?php
			if(isset($user_data)){
				foreach($user_data->result() as $row){
		?>	
					<div class="form-group">
						<label>Enter First Name</label>
						<span class="text-danger"><?php echo form_error("first_name"); ?></span>
						<input type="text" name="first_name" 
						value="<?php echo $row->first_name; ?>" 
						class="form-control" /> 
					</div>
					<div class="form-group">
						<label>Enter Last Name</label>
						<input type="text" name="last_name" value="<?php echo $row->last_name; ?>" class="form-control" />
						<span class="text-danger"><?php echo form_error("last_name"); ?></span>
					</div>
					<div class="form-group">
						<input type="hidden" name="hidden_id" value="<?php echo $row->id; ?>" />
						<input type="submit" name="update" value="Update" class="btn btn-info" />
					</div>
		<?php
				}
			}
			else{
			
		?>
		<div class="form-group">
			<label>Enter First Name</label>
			<span class="text-danger"><?php echo form_error("first_name"); ?></span>
			<input type="text" name="first_name" class="form-control" /> 
		</div>
		<div class="form-group">
			<label>Enter Last Name</label>
			<input type="text" name="last_name" class="form-control" />
			<span class="text-danger"><?php echo form_error("last_name"); ?></span>
		</div>
		<div class="form-group">
			<input type="submit" name="insert" value="Insert" class="btn btn-info" />
		</div>
		<?php
			}
		?>
	</form>
	<br /><br /><br />
	<h3>Fetch Data from Table using CodeIgniter</h3><br />
	<div class="table-responsive">
		<table class="table table-bordered">
			<tr>
				<th>ID</th>	
				<th>First Name</th>
				<th>Last Name</th>
				<th>Delete</th>
				<th>Update</th>
			</tr>
			<?php
				if($fetch_data->num_rows()> 0){
					foreach($fetch_data->result() as $row){
			?>
				<tr>
					<td><?php echo $row->id; ?></td>
					<td><?php echo $row->first_name; ?></td>
					<td><?php echo $row->last_name; ?></td>
					<td><a href="#" class="delete_data" id="<?php echo $row->id; ?>" >Delete</a></td>
					<td><a href="<?php echo base_url(); ?>controller1/update_data/<?php echo $row->id; ?>">Edit</a></td>
				</tr>
			<?php
					}
				}
				else{
			?>
				<tr>
					<td colspan="4">No Data Found</td>
				</tr>
			<?php
				}
			?>
		</table>
</div>
<script>
$(document).ready(function(){
	$('.delete_data').click(function(){
		var id = $(this).attr("id");
		if(confirm("Are you sure you want to delete this?")){
			window.location="<?php echo base_url(); ?>controller1/delete_data/"+id;
		}
		else{
			return false;
		}
	});
});
</script>
</body>
</html>

