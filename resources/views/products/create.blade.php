<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<form action="{{ route('adminstore') }}" method="POST">
			@csrf
			<input type="number" class="form-control" name="rating" placeholder="imdbRating">
			<input type="text" class="form-control" name="cover" placeholder="Image cover URL">
			<input type="text" class="form-control" name="title" placeholder="title">
			<textarea name="text" class="form-control" placeholder="description"></textarea>
			<input type="number" class="form-control" name="genre_id" placeholder="Genre ID">
			<button class="btn btn-primary">Add</button>
		</form>
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>