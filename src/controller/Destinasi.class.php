<?php
class Destinasi extends Controller
{

    public function index()
    {
        $destinasiModel = $this->loadModel('DestinasiModel');
        $destinasi = $destinasiModel->getAll();
        $this->loadView('destinasi', ['destinasi' => $destinasi]);
    }

    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $input = json_decode(file_get_contents('php://input'), true);
            $search = addslashes($input['query']);

            $destinasiModel = $this->loadModel('DestinasiModel');
            $results = $destinasiModel->searchDestinasi($search);

            $data = [];
            while ($row = $results->fetch_object()) {
                $data[] = $row;
            }

            echo json_encode($data);
        } else {
            http_response_code(400);
            echo json_encode(['message' => 'Invalid request']);
        }
    }


    public function detail()
    {
        $id = $_GET['id'];
        if (!$id) {
            header('Location: index.php?c=Destinasi');
            exit;
        }

        $destinasiModel = $this->loadModel('DestinasiModel');
        $destinasi = $destinasiModel->getById($id)->fetch_object();
        if (!$destinasi) {
            header('Location: index.php?c=Destinasi');
            exit;
        }

        $this->loadView('detailDestinasi', ['destinasi' => $destinasi]);
    }

    public function create_form()
    {
        $this->loadView('insert_destinasi');
    }

    public function create_process()
    {
        if (!isset($_SESSION['user_id'])) {
            die('Unauthorized');
        }

        $nama = addslashes($_POST['nama']);
        $deskripsi = addslashes($_POST['deskripsi']);
        $aktivitas = addslashes($_POST['aktivitas']);
        $fasilitas = addslashes($_POST['fasilitas']);
        $alamat = addslashes($_POST['alamat']);
        $telepon = addslashes($_POST['telepon']);
        $email = addslashes($_POST['email']);
        $lokasi = addslashes($_POST['lokasi']);

        $imagePath = "";

        $uploadDir = 'uploads/destinasi/';

        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        if (isset($_FILES['upload_gambar']) && $_FILES['upload_gambar']['error'] === UPLOAD_ERR_OK) {
            $uploadFile = $uploadDir . basename($_FILES['upload_gambar']['name']);

            if (move_uploaded_file($_FILES['upload_gambar']['tmp_name'], $uploadFile)) {
                $imagePath = $uploadFile;
            } else {
                die('Upload failed.');
            }
        }

        $user_id = $_SESSION['user_id'];

        // $postModel = $this->loadModel('PostModel');
        // $postModel->insert($title, $content, $imagePath, $user_id);

        $destinasiModel = $this->loadModel('DestinasiModel');
        $destinasiModel->insert($nama, $deskripsi, $aktivitas, $fasilitas, $alamat, $telepon, $email, $lokasi, $imagePath);

        header('Location: ?c=Destinasi');
        exit;
    }

    public function confirm()
    {
        // Check if 'id' is set and is a valid integer
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            die('Invalid ID');
        }

        $id = intval($_GET['id']);
        $destinasiModel = $this->loadModel('DestinasiModel');
        $destinasi = $destinasiModel->getById($id);

        // Check if the query returned a result
        if ($destinasi->num_rows === 0) {
            die('No destinasi found with this ID');
        }

        $this->loadView('confirm_destinasi', ['destinasi' => $destinasi->fetch_object()]);
    }

    public function edit()
    {
        if (!isset($_SESSION['user_id'])) {
            die('Unauthorized');
        }

        $id = $_GET['id'];
        if (!$id) header('Location: index.php?c=Destinasi');

        $destinasiModel = $this->loadModel('DestinasiModel');
        $destinasi = $destinasiModel->getById($id)->fetch_object();

        if ($_SESSION['role'] !== 'admin') {
            die('Unauthorized');
        }

        $this->loadView('edit_destinasi', ['destinasi' => $destinasi]);
    }

    public function update()
    {
        if (!isset($_SESSION['user_id'])) {
            die('Unauthorized');
        }

        $id = $_POST['id'];
        $destinasiModel = $this->loadModel('DestinasiModel');
        $destinasi = $destinasiModel->getById($id)->fetch_object();

        if ($_SESSION['role'] !== 'admin' && $destinasi->user_id != $_SESSION['user_id']) {
            die('Unauthorized');
        }


        $nama = addslashes($_POST['nama']);
        $deskripsi = addslashes($_POST['deskripsi']);
        $aktivitas = addslashes($_POST['aktivitas']);
        $fasilitas = addslashes($_POST['fasilitas']);
        $alamat = addslashes($_POST['alamat']);
        $telepon = addslashes($_POST['telepon']);
        $email = addslashes($_POST['email']);
        $lokasi = addslashes($_POST['lokasi']);

        $imagePath = "";

        $currentImagePath = $destinasi->gambar;

        if (isset($_FILES['upload_gambar']) && $_FILES['upload_gambar']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = 'uploads/destinasi/';

            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $uploadFile = $uploadDir . basename($_FILES['upload_gambar']['name']);

            if (move_uploaded_file($_FILES['upload_gambar']['tmp_name'], $uploadFile)) {
                $imagePath = $uploadFile;

                if ($currentImagePath && file_exists($currentImagePath)) {
                    unlink($currentImagePath);
                }
            } else {
                die('Upload failed.');
            }
        }

        $destinasiModel->update($id, $nama, $deskripsi, $aktivitas, $fasilitas, $alamat, $telepon, $email, $lokasi, $imagePath);
        header('Location: ?c=Destinasi');
    }

    public function delete()
    {
        if (!isset($_SESSION['user_id'])) {
            die('Unauthorized');
        }

        $id = $_POST['id'];
        $destinasiModel = $this->loadModel('DestinasiModel');
        $destinasi = $destinasiModel->getById($id)->fetch_object();

        if ($_SESSION['role'] !== 'admin' && $destinasi->user_id != $_SESSION['user_id']) {
            die('Unauthorized');
        }

        $currentImagePath = $destinasi->gambar;

        if ($currentImagePath && file_exists($currentImagePath)) {
            unlink($currentImagePath);
        }

        $destinasiModel->delete($id);
        header('Location: ?c=Destinasi');
        exit;
    }
}
