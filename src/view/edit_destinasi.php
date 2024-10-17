<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/MVC2/public/assets/logo.png">
    <title>Edit Destinasi Wisata</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Edit Detail Destinasi -->
    <div class="container mt-5">
        <h1 class="display-4 text-center">Edit Detail Destinasi</h1>
        <form action="?c=Destinasi&m=update" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $destinasi->id; ?>" />
            <div class="form-group">
                <label for="namaDestinasi">Nama Destinasi</label>
                <input type="text" class="form-control" id="namaDestinasi" name="nama" value="<?php echo $destinasi->nama; ?>" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required><?php echo $destinasi->deskripsi; ?></textarea>
            </div>
            <div class="form-group">
                <label for="aktivitas">Aktivitas</label>
                <textarea class="form-control" id="aktivitas" name="aktivitas" rows="3" required><?php echo $destinasi->aktivitas; ?></textarea>
            </div>
            <div class="form-group">
                <label for="fasilitas">Fasilitas</label>
                <textarea class="form-control" id="fasilitas" name="fasilitas" rows="3" required><?php echo $destinasi->fasilitas; ?></textarea>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $destinasi->alamat; ?>" required>
            </div>
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo $destinasi->telepon; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $destinasi->email; ?>" required>
            </div>
            <div class="form-group">
                <label for="petaLokasi">Peta Lokasi (Embed URL)</label>
                <input type="text" class="form-control" id="petaLokasi" name="lokasi" value="<?php echo $destinasi->lokasi; ?>" required>
            </div>
            <div class="form-group">
                <label>Gambar Destinasi Sekarang:</label>
                <?php if (!empty($destinasi->gambar)) : ?>
                    <img src="<?php echo $destinasi->gambar; ?>" width="300" height="300"><br>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="upload_gambar">Upload Gambar Destinasi Baru:</label>
                <input type="file" class="form-control-file" id="upload_gambar" name="upload_gambar" />
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#konfirmasiHapus">
            Delete
        </button>
    </div>

    <!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="konfirmasiHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus destinasi ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <form action="?c=Destinasi&m=delete" method="post">
                        <input type="hidden" name="id" value="<?php echo $destinasi->id; ?>">
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>