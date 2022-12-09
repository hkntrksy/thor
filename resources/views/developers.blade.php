<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Developers</title>
</head>
<body>
<div class="container">
    <div class="row g-3">
        @foreach($developers as $developer)
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $developer->name }}</h5>
                    <p class="card-text">Toplam Süre: {{ $developer->total_hour }}</p>
                    <p class="card-text">Hafta: {{ $developer->total_week }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach($developer->todos as $todo)
                    <li class="list-group-item">

                        {{ $todo->name }} <br>
                        Duration :{{ $todo->duration }} <br>
                        Level :{{ $todo->level }} <br>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
