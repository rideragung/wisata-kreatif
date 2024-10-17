<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/MVC2/public/assets/logo.png">
    <title>Destinasi Wisata</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <?php include 'navbar.php'; ?>

    <!-- Hero section -->
    <section class="bg-white min-h-screen flex items-center">
        <img src="https://images.unsplash.com/photo-1714632432479-bb1b32871e44?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="object-cover object-center absolute z-10 block w-full min-h-screen -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        <div class="z-20 py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h1 class="mb-4 text-4xl font-bold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Destinasi Wisata Indonesia</h1>
        </div>
    </section>

    <!-- Destinasi Area -->
    <section class="min-h-screen bg-white">
        <div class="max-w-[1150px] mx-auto mt-10 flex flex-col gap-5 px-5">
            <h2 class="text-center text-4xl font-bold">Destinasi Wisata di Indonesia</h2>

            <form class="flex items-center w-full mx-auto">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Destinasi..." required />
                </div>
            </form>

            <!-- Tambah Destinasi -->
            <?php if ($_SESSION['role'] === 'admin') : ?>
                <a class="w-fit text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5" href="?c=Destinasi&m=create_form">Tambah Destinasi</a>
            <?php endif; ?>

            <!-- List Destinasi -->
            <div id="destinasi-list" class="w-full flex flex-wrap gap-5 mb-10">
                <!-- Konten hasil pencarian akan muncul di sini -->
                <?php
                if ($destinasi->num_rows > 0) :
                    while ($row = $destinasi->fetch_assoc()) : ?>
                        <div class="w-full border-[3px] border-slate-300 rounded-xl flex h-56 overflow-hidden hover:border-blue-700 duration-300">
                            <img src="<?php echo $row["gambar"]; ?>" alt="..." class="w-[25%] object-cover object-center">
                            <div class="w-[75%] flex py-5">
                                <div class="w-[75%] px-10 flex flex-col gap-3">
                                    <h1 class="text-4xl font-bold"><?php echo $row["nama"]; ?></h1>
                                    <p class="text-justify"><?php echo implode(' ', array_slice(explode(' ', $row["deskripsi"]), 0, 30)); ?>...</p>
                                </div>
                                <div class="w-[25%] border-l-2 border-slate-300 p-5 flex justify-center items-center">
                                    <a href="?c=Destinasi&m=detail&id=<?= $row["id"] ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                        Detail
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                else : ?>
                    <p class="text-center font-semibold text-xl">Tidak ada destinasi wisata yang tersedia.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("simple-search");

            searchInput.addEventListener("input", function() {
                const query = searchInput.value;

                fetch("?c=Destinasi&m=search", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                        },
                        body: JSON.stringify({
                            query: query
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        const destinasiList = document.getElementById("destinasi-list");
                        destinasiList.innerHTML = "";

                        if (data.length > 0) {
                            data.forEach(item => {
                                const destinasiItem = `
                        <div class="w-full border-[3px] border-slate-300 rounded-xl flex h-56 overflow-hidden hover:border-blue-700 duration-300">
                            <img src="${item.gambar}" alt="..." class="w-[25%] object-cover object-center">
                            <div class="w-[75%] flex py-5">
                                <div class="w-[75%] px-10 flex flex-col gap-3">
                                    <h1 class="text-4xl font-bold">${item.nama}</h1>
                                    <p class="text-justify">${truncateDescription(item.deskripsi, 30)}...</p>
                                </div>
                                <div class="w-[25%] border-l-2 border-slate-300 p-5 flex justify-center items-center">
                                    <a href="?c=Destinasi&m=detail&id=${item.id}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                        Detail
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    `;
                                destinasiList.insertAdjacentHTML('beforeend', destinasiItem);
                            });
                        } else {
                            destinasiList.innerHTML = '<p class="text-center font-semibold text-xl">Tidak ada destinasi wisata yang tersedia.</p>';
                        }
                    })
                    .catch(error => console.error("Error fetching search results:", error));
            });
        });

        function truncateDescription(description, maxLength) {
            const words = description.split(' ');
            const truncatedWords = words.slice(0, maxLength);
            return truncatedWords.join(' ');
        }
    </script>

</body>

</html>