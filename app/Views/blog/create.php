<div class="container">
	<h1>Create new post</h1>
	<?php
		if($_POST):
			echo \Config\Services::validation()->listErrors();
		endif	
	?>
	<form class="" action="/blog/create" method="post">
		<div class="form-group">
			<label for="title"><strong>Title:</strong></label>
			<input type="text" class="form-control" name="title" id="title">
		</div>
		<div class="form-group">
			<label for="body"><strong>Body:</strong></label>
			<textarea name="body" class="form-control" id="body"></textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Create</button>
		</div>
	</form>
</div>