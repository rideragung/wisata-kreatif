<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/MVC2/public/assets/logo.png">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Destinasi</title>
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Tambah Destinasi Baru</h2>
        <form action="?c=Destinasi&m=create_process" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="namaDestinasi">Nama Destinasi</label>
                <input type="text" class="form-control" id="namaDestinasi" name="nama" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="aktivitas">Aktivitas</label>
                <textarea class="form-control" id="aktivitas" name="aktivitas" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="fasilitas">Fasilitas</label>
                <textarea class="form-control" id="fasilitas" name="fasilitas" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="petaLokasi">Peta Lokasi (Embed URL)</label>
                <input type="text" class="form-control" id="petaLokasi" name="lokasi" required>
            </div>
            <div class="form-group">
                <label for="upload_gambar">Upload Gambar</label>
                <input type="file" class="form-control-file" id="upload_gambar" name="upload_gambar" required/>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>