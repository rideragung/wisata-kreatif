<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/MVC2/public/assets/logo.png">
  <title>Profil</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<?php include 'navbar.php' ?>

<body class="bg-gradient-to-br from-indigo-500 to-purple-500">
  <div class="flex justify-center items-center min-h-screen">
    <div class="bg-white rounded-xl shadow-lg px-20 py-8 max-w-md">
      <div class="flex flex-col items-center mb-6">
        <img class="w-32 h-32 rounded-full object-cover mb-4" src="<?php echo $user->gambar ? $user->gambar : 'https://via.placeholder.com/150'; ?>" alt="Foto Profil" class="profile-image">
        <h2 class="username text-3xl font-bold text-gray-800 mb-2"><?php echo $user->username; ?></h2>
        <p class="role text-gray-600 font-medium"><?php echo $user->role; ?></p>
      </div>
      <div class="flex justify-center mb-6">
        <button data-modal-target="editProfileModal" data-modal-toggle="editProfileModal" class="bg-gradient-to-r from-purple-500 to-blue-500 text-white hover:bg-gradient-to-l hover:from-purple-600 hover:to-indigo-600 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center duration-300" type="button">
          Edit Profil
        </button>
      </div>
    </div>
  </div>

  <!-- Modal for editing profile -->
  <div id="editProfileModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow">
        <!-- Modal header -->
        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
          <h3 class="text-xl font-semibold text-gray-900">Edit Profil</h3>
          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="editProfileModal">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <!-- Modal body -->
        <div class="p-4 md:p-5">
          <form class="space-y-4" action="?c=User&m=update_profile" method="post" enctype="multipart/form-data">
            <div>
              <label for="editUsername" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
              <input type="text" name="username" id="editUsername" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5" value="<?php echo $user->username ?>">
            </div>
            <div>
              <label for="editPassword" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
              <input type="password" name="password" id="editPassword" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5" value="<?php echo $user->password ?>">
            </div>
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900" for="profilePicture">Foto Profil</label>
              <input name="upload_gambar" class="form-control-file block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:ring-purple-500 focus:border-purple-500" id="profilePicture" type="file">
            </div>
            <button type="submit" class="w-full bg-gradient-to-r from-purple-500 to-blue-500 text-white hover:bg-gradient-to-l hover:from-purple-600 hover:to-indigo-600 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php' ?>

  <!-- Flowbite JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>