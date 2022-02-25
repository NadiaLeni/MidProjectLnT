<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{asset('css/style6.css')}}">
</head>
<body>
    <h1>PERPUSTAKAAN INDOMERDEKA</h1>
    <div id="hero">
        
        <div class="kotak">
            <div class="tulisan">
                <h2 id="tulisan1">Masukkan Informasi Buku</h2>
                <br>
                <form action="{{route('reupdateBook', $books['id'])}}" method="POST">
                    @csrf
                    <div class="satu">
                        <label for="bookTitle">Judul Buku</label>
                        <br>
                        <input type="text" required minlength="5" maxlength="20" id="bookTitle" name="bookTitle" value="{{$books->bookTitle}}">
                    </div>
                    <div class="dua">
                        <label for="author">Penulis Buku</label>
                        <br>
                        <input type="text" required minlength="5" maxlength="20" id="author" name="author" value="{{$books->author}}">
                    </div>
                    <div class="tiga">
                        <label for="pageTotal">Jumlah Halaman</label>
                        <br>
                        <input type="number" id="pageTotal" name="pageTotal" value="{{$books->pageTotal}}">
                    </div>
                    <div class="empat">
                        <label for="releaseDate">Tanggal Rilis</label>
                        <br>
                        <input type="date" min="2000-01-01" max="2021-12-31" id="releaseDate" name="releaseDate" value="{{$books->releaseDate}}">
                    </div>
                    <input type="submit" class="tombol" value="SUBMIT">
                    <a class="tombol2" href="/update/book">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>