<?php $this->view('includes/header')?>
<?php $this->view('includes/nav')?>


<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
		<?php $this->view('includes/crumbs')?>

		<div class="card-group justify-content-center">

		
			<?php foreach($rows as $row):?>
			
				<div class="card m-2 shadow-sm" style="max-width: 14rem;min-width: 14rem;">
				<img src="https://www.freeiconspng.com/thumbs/female-icon/female-icon-13.png" class="card-img-top" alt="...">
		
				<div class="card-body">
				<h5 class="card-title"><?php print_r($row['firstname']);?> <?php print_r($row['lastname']);?></h5>
				<p class="card-text">rank: <?php print_r($row['rank']);?></p>
				<a href="#" class="btn btn-primary">Profile</a>
				</div>
				</div>
			
			<?php endforeach?>

	
		</div>
</div>


<?php $this->view('includes/footer')?>