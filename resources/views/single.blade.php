<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="card p-2" style="margin-bottom: 20px;">
            <div class="card-cover"><img style="width: 20%;" src="{{ $movies->image}}"></div>
            <div class="card-title">Title: {{ $movies->title }}</div>
            <div class="card-text">Movie Description: {{ $movies->description }}</div>
            <div class="card-rating">IMDB Rating: {{ $movies->IMDB }}</div>
            <div class="card-genre">Movie Genre: <a href="{{ route('usershowByCategory',["id"=>$movies->genre_id ]) }}">{{ $movies->genre_id }}</a></div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>