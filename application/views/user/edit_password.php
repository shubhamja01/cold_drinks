
<style type="text/css">

	.row1{
    border-radius: 10px;
    border: 1px solid black;
  }
  .row1 h2{
  	color: white;
    font-weight: bold;
    text-shadow: 1px 1px black;
  }
  label{
  	text-transform: uppercase;
  	font-weight: bold;
  	font-size: 15px !important;
  }
  button{
  	font-weight: bold;
  	font-size: 20px !important;
  }
  input{
  	margin-bottom: 20px;
  }
  img{
  	border-radius: 10px;
  	border: 2px solid black;
  	padding: 5px;
  }
</style>
<div class="container">
	<div class="row p-4 row1 bg-white m-4">
		
		<div class="col-md-12 p-2 bg-secondary row1">
				<h2>Change Password</h2>
		</div>
</div>
    <a href="<?=base_url()?>user/profile"><button class="btn btn-primary" style="font-weight: bold;">Back</button></a>

<form action="<?=base_url()?>user/update_password" method="post" enctype="multipart/form-data">
	<div class="row p-4 row1 bg-white m-4">

		<div class="col-md-6 bg-light pt-4 mt-4">
			<label>Old Password :-</label>
			<input type="number" name="old_password" class="form-control">
		</div>
		<div class="col-md-6 bg-light pt-4 mt-4">
			<label>New Password :-</label>
			<input type="number" name="new_password" class="form-control">
		</div>
		<div class="col-md-12 bg-light text-center p-4">
			<button class="btn btn-info ">save</button>
		</div>

		
		

	</div>
</form>
</div>