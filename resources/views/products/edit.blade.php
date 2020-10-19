<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<form action="{{ route('adminupdate') }}" method="POST">
			@csrf
			<input type="hidden" name="id" value="{{ $product->id }}">
			<input type="number" class="form-control" name="rating" value="{{ $product->IMDB }}">
			<input type="text" class="form-control" name="cover" value="{{ $product->image }}">
			<input type="text" class="form-control" name="title" value="{{ $product->title }}">
			<textarea name="text" class="form-control">{{ $product->description }}</textarea>
			<input type="number" class="form-control" name="genre_id" value="{{ $product->genre_id }}">


			<button class="btn btn-primary">Update</button>
		</form>
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>