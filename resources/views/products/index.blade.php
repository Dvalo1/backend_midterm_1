<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<table class="table">
			<tr>
				<td>#</td>
				<td>IMDB</td>
				<td>Cover</td>
				<td>Title</td>
				<td>Description</td>
				<td>Genre_ID</td>
			</tr>
			@foreach ($movies as $element)
				<tr>
					<td>{{ ++$loop->index }}</td>
					<td>{{ $element->IMDB }}</td>
					<td>{{ $element->image }}</td>
					<td>{{ $element->title }}</td>
					<td>{{ $element->description }}</td>
					<td>{{ $element->genre_id }}</td>
					<td>
						<form action="{{ route('admindelete') }}" method="POST">
							@csrf
							<input type="hidden" name="id" value="{{ $element->id }}">
							<button class="btn btn-danger">
								Delete
							</button>
						</form>
						<a href="{{ route('adminedit',["id"=>$element->id ]) }}" class="btn btn-warning">
							Update
						</a>
						<a href="{{ route('adminshow',["id"=>$element->id ]) }}" class="btn btn-success">
							Info
						</a>
					</td>
				</tr>
			@endforeach
		</table>
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>