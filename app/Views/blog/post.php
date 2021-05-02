<section>
	<div class="container">
		<article class="blog-post">
			<h1><?= $post['title'] ?></h1>
			<div class="details">
			<?= date('M d Y', strtotime($post['created_at'])) ?> by <a href="https://github.com/sumit7saini">Sumit Saini</a>
			</div>
			<?= $post['body'] ?>
		</article>
	</div>
</section>