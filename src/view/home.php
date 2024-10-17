<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Wisata Kreatif Indonesia</title>
    <link rel="icon" href="/MVC2/public/assets/logo.png">
    <!-- <link href="/MVC2/public/styles/output.css" rel="stylesheet"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <style>
        html{
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <section id="default-carousel" class="relative w-full bg-slate-200 min-h-screen" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative min-h-screen overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden min-h-screen duration-700 ease-in-out" data-carousel-item>
                <img src="https://images.unsplash.com/photo-1509023464722-18d996393ca8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="object-cover object-center absolute z-10 block w-full min-h-screen -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="relative min-h-screen flex flex-col justify-center items-center z-20 py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                    <h1 class="shadow-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none text-slate-50 md:text-5xl lg:text-6xl">Wisata Kreatif Indonesia</h1>
                    <p class="shadow-2xl mb-8 text-lg font-normal text-slate-50 lg:text-xl sm:px-16 lg:px-48">Menemukan dan Mendukung Destinasi Wisata serta Produk Kreatif Lokal</p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                        <a href="#services" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                            Pelajari Selengkapnya
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden min-h-screen duration-700 ease-in-out" data-carousel-item>
                <img src="https://images.unsplash.com/photo-1449156733864-dd5471bb7427?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="object-cover object-center absolute z-10 block w-full min-h-screen -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="relative min-h-screen flex flex-col justify-center items-center z-20 py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-slate-50 md:text-5xl lg:text-6xl">Wisata Kreatif Indonesia</h1>
                    <p class="mb-8 text-lg font-normal text-slate-50 lg:text-xl sm:px-16 lg:px-48">Menemukan dan Mendukung Destinasi Wisata serta Produk Kreatif Lokal</p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                        <a href="#services" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                            Pelajari Selengkapnya
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden min-h-screen duration-700 ease-in-out" data-carousel-item>
                <img src="https://images.unsplash.com/photo-1506794778225-cbf6c8df4c5c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="object-cover object-center absolute z-10 block w-full min-h-screen -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="relative min-h-screen flex flex-col justify-center items-center z-20 py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-slate-50 md:text-5xl lg:text-6xl">Wisata Kreatif Indonesia</h1>
                    <p class="mb-8 text-lg font-normal text-slate-50 lg:text-xl sm:px-16 lg:px-48">Menemukan dan Mendukung Destinasi Wisata serta Produk Kreatif Lokal</p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                        <a href="#services" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                            Pelajari Selengkapnya
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="hidden min-h-screen duration-700 ease-in-out" data-carousel-item>
                <img src="https://images.unsplash.com/photo-1484176141566-3674cda218f0?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzAyfHxkYXJrfGVufDB8fDB8fHww" class="object-cover object-center absolute z-10 block w-full min-h-screen -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="relative min-h-screen flex flex-col justify-center items-center z-20 py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-slate-50 md:text-5xl lg:text-6xl">Wisata Kreatif Indonesia</h1>
                    <p class="mb-8 text-lg font-normal text-slate-50 lg:text-xl sm:px-16 lg:px-48">Menemukan dan Mendukung Destinasi Wisata serta Produk Kreatif Lokal</p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                        <a href="#services" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                            Pelajari Selengkapnya
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </section>

    <!-- Our Services Section -->
    <section id="services" class="bg-white w-full mt-10">
        <div class="max-w-[1150px] mx-auto">
            <h2 class="text-4xl font-bold text-[#091426] text-center">Layanan Kami</h2>
            <div class="flex flex-wrap justify-center gap-10 mt-10">
                <div class="w-80 p-5 border-[3px] border-slate-200 rounded-xl hover:border-blue-700 duration-300 ease-in-out">
                    <h5 class="text-xl font-bold text-center">Panduan Wisata</h5>
                    <p class="mt-3 text-center">Menawarkan informasi lengkap tentang destinasi wisata kreatif di Indonesia.</p>
                </div>
                <div class="w-80 p-5 border-[3px] border-slate-200 rounded-xl hover:border-blue-700 duration-300 ease-in-out">
                    <h5 class="text-xl font-bold text-center">Dukungan Ekonomi Kreatif</h5>
                    <p class="mt-3 text-center">Mendukung pelaku ekonomi kreatif lokal dengan mempromosikan produk mereka.</p>
                </div>
                <div class="w-80 p-5 border-[3px] border-slate-200 rounded-xl hover:border-blue-700 duration-300 ease-in-out">
                    <h5 class="text-xl font-bold text-center">Event & Workshop</h5>
                    <p class="mt-3 text-center">Menyelenggarakan berbagai event dan workshop untuk meningkatkan kreativitas lokal.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section id="statistics" class="bg-white w-full mt-10">
        <div class="max-w-[1150px] mx-auto">
            <hr class="border-2 border-slate-200">
            <h2 class="text-4xl font-bold text-[#091426] mt-10 text-center">Statistik</h2>
            <div class="flex flex-wrap justify-center gap-10 mt-10 text-center">
                <div class="w-80 p-5 border-[3px] border-slate-200 rounded-xl hover:border-blue-700 duration-300 ease-in-out">
                    <h5 class="text-xl font-bold">Total Destinasi</h5>
                    <p class="mt-3 text-2xl">150+</p>
                </div>
                <div class="w-80 p-5 border-[3px] border-slate-200 rounded-xl hover:border-blue-700 duration-300 ease-in-out">
                    <h5 class="text-xl font-bold">Total Produk Kreatif</h5>
                    <p class="mt-3 text-2xl">50+</p>
                </div>
                <div class="w-80 p-5 border-[3px] border-slate-200 rounded-xl hover:border-blue-700 duration-300 ease-in-out">
                    <h5 class="text-xl font-bold">Pengguna Aktif</h5>
                    <p class="mt-3 text-2xl">1000+</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Destinations Section -->
    <section id="destinations" class="min-h-screen w-full px-5 mt-10">
        <div class="max-w-[1150px] mx-auto">
            <hr class="border-2 border-slate-200">
            <h2 class="text-3xl font-bold mt-10">Destinasi Populer</h2>
            <div class="w-full flex flex-wrap gap-3 mt-5">
                <?php
                if ($destinasi->num_rows > 0) :
                    while ($row = $destinasi->fetch_assoc()) : ?>
                        <a href="?c=destinasi&m=detail&id=<?= $row["id"] ?>" class="relative w-52 h-64 overflow-hidden rounded-xl">
                            <img src="<?= $row["gambar"] ?>" alt="Destinasi" class="relative object-cover w-full h-full hover:scale-125 duration-300 ease-in-out" loading="lazy">
                            <span class="w-fit text-center absolute z-10 m-auto left-0 right-0 bottom-5 text-slate-50 text-xl font-bold"><?= $row["nama"] ?></span>
                        </a>
                    <?php endwhile;
                else : ?>
                    <p class="text-center font-semibold text-xl">Tidak ada destinasi wisata yang tersedia.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Popular Creative Products Section -->
    <section id="products" class="min-h-screen w-full px-5 mt-10">
        <div class="max-w-[1150px] mx-auto">
            <hr class="border-2 border-slate-200">
            <h2 class="text-3xl font-bold mt-10">Produk Kreatif Populer</h2>
            <div class="w-full flex flex-wrap gap-3 mt-5">
                <?php
                if ($produk->num_rows > 0) :
                    while ($row = $produk->fetch_assoc()) : ?>
                        <a href="?c=produk&m=detail&id=<?= $row["id"] ?>" class="relative w-52 h-52 overflow-hidden rounded-xl">
                            <img src="<?= $row["gambar"] ?>" alt="Produk" class="relative object-cover w-52 h-52 hover:scale-125 duration-300 ease-in-out" loading="lazy">
                            <span class="w-fit absolute z-10 m-auto left-0 right-0 bottom-5 text-slate-50 text-xl font-bold"><?= $row["nama"] ?></span>
                        </a>
                    <?php endwhile;
                else : ?>
                    <p class="text-center font-semibold text-xl">Tidak ada poduk kreatif yang tersedia</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- <script src="/MVC2/node_modules/flowbite/dist/flowbite.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>