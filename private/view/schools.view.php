<?php $this->view('includes/header')?>
<?php $this->view('includes/nav')?>


<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
		<?php $this->view('includes/crumbs')?>

		<div class="card-group justify-content-center">

		
			<?php if($rows ):?>
				<?php foreach($rows as $row):?>
				
				<?php endforeach?>
			<?php else:?>
				<h4>No school at this time</h4>
			<?php endif?>

	
		</div>
</div>


<?php $this->view('includes/footer')?>