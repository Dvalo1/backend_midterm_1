<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container">

        @foreach ($movies as $element)
            @if($element->genre_id == $genreID) 
                <a href="{{ route('usershow',["id"=>$element->id ]) }}" style="text-decoration: none;">
                    <div class="card p-2" style="margin-bottom: 20px;">
                        <div class="card-cover"><img style="width: 20%;" src="{{ $element->image}}"></div>
                        <div class="card-title">Title: {{ $element->title }}</div>
                    </div>
                </a>
            @endif
        @endforeach

    </div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>