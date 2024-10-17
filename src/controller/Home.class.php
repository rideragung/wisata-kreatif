<?php
class Home extends Controller
{
    public function index()
    {
        $destinasiModel = $this->loadModel('DestinasiModel');
        $destinasi = $destinasiModel->getAll();
        $produkModel = $this->loadModel('ProdukModel');
        $produk = $produkModel->getAll();
        $this->loadView('home', ['destinasi' => $destinasi, 'produk' => $produk]);
    }
}
?>
