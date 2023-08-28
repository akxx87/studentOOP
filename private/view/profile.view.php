<?php $this->view('includes/header')?>
<?php $this->view('includes/nav')?>

	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
		<?php $this->view('includes/crumbs')?>

		<div class="row">
			<div class="col-sm-4 col-md-3">
				<img src="https://cdn-icons-png.flaticon.com/512/3749/3749780.png" class="border border-primary d-block mx-auto rounded-circle" style="width:150px;">
				<h3 class="text-center">Maria Packa</h3>
			</div>
			<div class="col-sm-8 col-md-9 bg-light p-2">
				<table class="table table-hover table-striped table-bordered">
					<tr><th>First Name:</th><td>Maria</td></tr>
					<tr><th>Last Name:</th><td>Packa</td></tr>
					<tr><th>Gender:</th><td>Female</td></tr>
					<tr><th>Date Created:</th><td>2023-08-25</td></tr>
				</table>

			</div>
			
		</div>
		<hr>
		<div class="container-fluid">
			<ul class="nav nav-tabs">
		  <li class="nav-item">
		    <a class="nav-link active" aria-current="page" href="#">Basic Info</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#">Classes</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#">Test</a>
		  </li>
		  
		</ul>

				<div class="input-group flex-nowrap">
		  <span class="input-group-text" id="addon-wrapping">@</span>
		  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
		</div>
		</div>
	</div>

<?php $this->view('includes/footer')?>