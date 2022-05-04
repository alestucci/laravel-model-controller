<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Movies</title>
</head>
<body>
    <main>
        <div class="container">
            @foreach ($movies as $movie)
                <div class="card">
                    <div class="title">
                        <h1 class="capitalize">{{ $movie->title }}</h1>
                        <h2 class="regular capitalize">({{ $movie->original_title }})</h2>
                    </div>
                    <div class="description">
                        <h3>Nazione:<br><span class="regular capitalize">{{ $movie->nationality }}</span></h3>
                        <h4>Data:<br><span class="regular">{{ date("d/m/Y", strtotime($movie->date)) }}</span></h4>
                        <h4>Voto:<br><span class="regular">{{ $movie->vote }}</span></h4>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>