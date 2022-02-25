<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
</head>
<body>
    <h1>PERPUSTAKAAN INDOMERDEKA</h1>
    <div id="hero">
        
        <div class="kotak">
            <div class="tulisan">
                <h2 id="tulisan1">Masukkan Informasi Buku</h2>
                <br>
                <form action="{{route('storeBook')}}" method="POST">
                    @csrf
                    <div class="satu">
                        <label for="bookTitle">Judul Buku</label>
                        <br>
                        <input type="text" required minlength="5" maxlength="20" id="bookTitle" name="bookTitle">
                    </div>
                    <div class="dua">
                        <label for="author">Penulis Buku</label>
                        <br>
                        <input type="text" required minlength="5" maxlength="20" id="author" name="author">
                    </div>
                    <div class="tiga">
                        <label for="pageTotal">Jumlah Halaman</label>
                        <br>
                        <input type="number" id="pageTotal" name="pageTotal">
                    </div>
                    <div class="empat">
                        <label for="releaseDate">Tanggal Rilis</label>
                        <br>
                        <input type="date" min="2000-01-01" max="2021-12-31" id="releaseDate" name="releaseDate">
                    </div>
                    <input type="submit" class="tombol" value="SUBMIT">
                    <a class="tombol2" href="/">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>