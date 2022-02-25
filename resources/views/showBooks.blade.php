<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style4.css">
</head>
<body>
<h1>PERPUSTAKAAN INDOMERDEKA</h1>
    
    <div id="hero">
        <div class="kotak">
            <div class="tulisan">
            <table class="table table-danger table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penulis Buku</th>
                    <th scope="col">Jumlah Halaman</th>
                    <th scope="col">Tanggal Rilis</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr>
                    <th scope="row">{{$book->bookTitle}}</th>
                    <td>{{$book->author}}</td>
                    <td>{{$book->pageTotal}}</td>
                    <td>{{$book->releaseDate}}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>