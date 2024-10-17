<?php
class User extends Controller
{
    public function login_form()
    {
        $this->loadView('login');
    }

    public function login_process()
    {
        $userModel = $this->loadModel('UserModel');
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $userModel->getByUsername($username)->fetch_object();

        if ($user && $password === $user->password) {
            session_start();
            $_SESSION['user_id'] = $user->id;
            $_SESSION['username'] = $user->username;
            $_SESSION['role'] = $user->role;
            header('Location: index.php');
        } else {
            // $error_message = "Invalid login credentials.";
            // echo "Invalid login credentials.";
            $_SESSION['error_message'] = 'Invalid login credentials.';
            header('Location: index.php?c=User&m=login_form');
        }
    }

    public function register_form()
    {
        $this->loadView('register');
    }

    public function register_process()
    {
        $userModel = $this->loadModel('UserModel');
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $userModel->getByUsername($username)->fetch_object();

        if ($user) {
            $_SESSION['error_message'] = 'Username has been taken. Please try another username.';
            header('Location: index.php?c=User&m=register_form');
        } else {
            $userModel->insert($username, $password);
            header('Location: index.php?c=User&m=login_form');
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: index.php');
        exit;
    }

    public function profile()
    {
        if (!isset($_SESSION['user_id'])) {
            die('Unauthorized');
        }

        $userModel = $this->loadModel('UserModel');
        $user = $userModel->getById($_SESSION['user_id'])->fetch_object();
        $this->loadView('profile', ['user' => $user]);
    }

    public function edit_profile()
    {
        if (!isset($_SESSION['user_id'])) {
            die('Unauthorized');
        }

        $userModel = $this->loadModel('UserModel');
        $user = $userModel->getById($_SESSION['user_id'])->fetch_object();
        $this->loadView('edit_profile', ['user' => $user]);
    }

    public function update_profile()
    {
        if (!isset($_SESSION['user_id'])) {
            die('Unauthorized');
        }

        $userModel = $this->loadModel('UserModel');
        $id = $_SESSION['user_id'];

        $currentUser = $userModel->getById($id)->fetch_object();

        // Menggunakan username lama jika input username kosong
        $username = !empty($_POST['username']) ? addslashes($_POST['username']) : $currentUser->username;

        // Menggunakan password baru jika diisi, atau null jika kosong
        $password = !empty($_POST['password']) ? addslashes($_POST['password']) :  $currentUser->password;

        // Path gambar saat ini
        $currentImagePath = $currentUser->gambar;
        $imagePath = $currentImagePath;

        // Handle file upload
        if (isset($_FILES['upload_gambar']) && $_FILES['upload_gambar']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = 'uploads/users/';

            // Create the users directory if it doesn't exist
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $uploadFile = $uploadDir . basename($_FILES['upload_gambar']['name']);
            if (move_uploaded_file($_FILES['upload_gambar']['tmp_name'], $uploadFile)) {
                // Hapus gambar lama jika berbeda dengan yang baru
                if ($currentImagePath && $currentImagePath !== $uploadFile) {
                    if (file_exists($currentImagePath)) {
                        unlink($currentImagePath);
                    }
                }
                $imagePath = $uploadFile;
            }
        }

        // Update data pengguna
        $userModel->update($id, $username, $password, $imagePath);
        $_SESSION['username'] = $username;

        header('Location: ?c=User&m=profile');
        exit;
    }
}
