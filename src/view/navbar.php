<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <!-- <link href="/mvc2/public/styles/output.css" rel="stylesheet"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <style>
        #navbar-custom {
            background-color: transparent;
            height: 12vh;
            transition: all 0.3s ease;
        }

        #navbar-custom.scrolled {
            background-color: rgba(0, 0, 0, 0.5);
            height: 10vh;
        }
    </style>
</head>

<body>
    <nav id="navbar-custom" class="z-50 fixed w-full bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="max-w-[1150px] flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="?c=Home&m=index" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="../../assets/logo.png" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Wisata Kreatif</span>
            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden" aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>

            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 bg-white md:bg-transparent rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0">
                    <li>
                        <a href="?c=Destinasi&m=index" class="block py-2 px-3 text-black md:text-white rounded md:p-0" aria-current="page">Destinasi</a>
                    </li>
                    <li>
                        <a href="?c=Produk&m=index" class="block py-2 px-3 text-black md:text-white rounded md:p-0" aria-current="page">Produk</a>
                    </li>
                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-black md:text-white rounded md:border-0 md:p-0 md:w-auto">Profil <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                <ul class="py-2 text-sm" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="?c=User&m=profile" class="block px-4 py-2 text-black">Lihat Profil</a>
                                    </li>
                                    <li class="block px-4 py-2 text-black">
                                        <?php echo $_SESSION['username'] ?>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="?c=User&m=logout" class="block text-sm px-4 py-2 text-black">Logout</a>
                                </div>
                            </div>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="?c=User&m=login_form" class="block py-2 px-3 text-black md:text-white rounded md:bg-transparent md:p-0" aria-current="page">Login</a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>



    <!-- <script src="/mvc2/node_modules/flowbite/dist/flowbite.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        window.addEventListener('scroll', function() {
            var navbar = document.getElementById('navbar-custom');
            if (window.scrollY > 50) { // adjust this value as needed
                navbar.classList.add('scrolled');

            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>

</body>

</html>