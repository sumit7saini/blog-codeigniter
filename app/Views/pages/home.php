<section>
	<?php 
		$session = \Config\Services::session();
	?>
	<?php if(isset($session->success)): ?>
			<div class="alert alert-success text-center alert-dismissable show fade mb-0" role="0">
				<?= $session->success ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span area-hidden="true">&times;</span>
				</button>
			</div>
	<?php endif ?>
	<?php ?>
	<div>
		<div class="jumbotron">
			<div class="container">
  <h1 class="display-4">BLog</h1>
  <p class="lead">CodeIgniter is awesome for creating fast webapps.</p>
  <hr class="my-4">
  <p>Hey, checkout my first website build with codeigniter 4.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
  </div>
</div>
	</div>
</section>
<section class="blog-section">
	<div class="container">
	<?php
		echo "<pre>";
		if($news) {
			foreach ($news as $newsItem) { ?>
				 <h3><a href="/blog/<?= $newsItem['slug'] ?>"><?= $newsItem['title']  ?></a></h3>
			<?php }
		}	
		else {
			echo "<p class='text-center'>No posts have been found</p>";
		}
		echo "</pre>";
	?>
	</div>
</section

