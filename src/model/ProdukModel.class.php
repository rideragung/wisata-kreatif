<?php
class ProdukModel extends Model
{
    public function getAll()
    {
        $sql = "SELECT * from produk order by id desc";
        return $this->mysqli->query($sql);
    }

    public function searchProduk($search)
    {
        $sql = "SELECT * FROM produk WHERE nama LIKE '%$search%' OR deskripsi LIKE '%$search%' OR kategori LIKE '%$search%' OR harga LIKE '%$search%' ORDER BY id DESC";
        return $this->mysqli->query($sql);
    }


    public function insert($nama, $deskripsi, $kategori, $harga, $gambar)
    {
        $sql = "INSERT INTO produk (nama, deskripsi, kategori, harga, gambar) VALUES ('$nama', '$deskripsi', '$kategori', '$harga', '$gambar')";
        $result = $this->mysqli->query($sql);
        if ($result) {
            echo 'Data inserted successfully'; // Debugging
        } else {
            echo 'Database insert error: ' . $this->mysqli->error; // Debugging
        }
    }

    public function getById($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM produk WHERE id = $id";
        return $this->mysqli->query($sql);
    }

    public function update($id, $nama, $deskripsi, $kategori, $harga, $gambar = null)
    {
        if ($gambar) {
            $sql = "UPDATE produk SET nama = '$nama', deskripsi = '$deskripsi', kategori = '$kategori', harga = '$harga', gambar='$gambar' WHERE id = '$id'";
        } else {
            $sql = "UPDATE produk SET nama = '$nama', deskripsi = '$deskripsi', kategori = '$kategori', harga = '$harga' WHERE id = '$id'";
        }
        $this->mysqli->query($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM produk WHERE id = $id";
        $this->mysqli->query($sql);
    }
}
