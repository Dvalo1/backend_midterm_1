<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="card p-2">
			<div class="card-cover"><img style="width: 20%;" src="{{ $product->image}}"></div>
			<div class="card-title">Title: {{ $product->title }}</div>
			<div class="card-text">Movie Description: {{ $product->description }}</div>
			<div class="card-rating">IMDB Rating: {{ $product->IMDB }}</div>
			<div class="card-genre">Movie Genre: {{ $product->genre_id }}</div>

			<div class="card-added">Added on: {{ $product->created_at }}</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>