<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitaphana</title>

    <link rel="stylesheet" href="/bootstrap.min.css">
    <style>
        .carousel-inner {
            background: #9E9E9E;
        }
        .carousel-item img {
            max-height: 500px;
            max-width: 100%;
            object-fit: contain;
        }
        .card img {
            height: 250px;
            width: fit-content;
        }
    </style>
</head>
<body>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        @foreach($books as $book)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->index == 0 ? 'active' : '' }}"></li>
        @endforeach
      </ol>
      <div class="carousel-inner">
        @foreach($books as $book)
            <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
              <img src="{{ $book->imageUrl() }}" class="d-block w-100" alt="...">
            </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Öňki</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Indiki</span>
      </button>
    </div>

    <br><br>
    <div class="container">
        <h2 class="text-center">Kitaplar</h2>
        <br><br>
        <div class="row">
            @foreach($books as $book)
                <div class="col-4">
                    <div class="card mb-3">
                        <div style="display: flex;justify-content: center;">
                            <img src="{{ $book->imageUrl() }}" class="card-img-top" alt="...">
                        </div>
                      <div class="card-body">
                        <h5 class="card-title">Ady: {{ $book->name }}</h5>
                        <p class="card-text">Ýazyjy: {{ $book->author }}</p>
                        <p class="card-text">Kategoriýa: {{ $book->category }}</p>
                         <a href="{{ $book->fileUrl() }}" class="btn btn-primary">Ýükle</a>
                        <p class="card-text"><small class="text-muted">Goşulan wagty: {{ $book->created_at }}</small></p>
                      </div>
                    </div>
                </div>  
            @endforeach
        </div>
    </div>

    
    <script src="/jquery.slim.min.js"></script>
    <script src="/bootstrap.bundle.min.js"></script>
</body>
</html>
