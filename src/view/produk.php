<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/MVC2/public/assets/logo.png">
    <title>Produk Kreatif</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

</head>

<body>

    <?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <section class="bg-white min-h-screen overflow-hidden flex items-center">
        <img src="https://images.unsplash.com/photo-1543874911-320748e4c335?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="object-cover object-center absolute z-10 block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        <div class="z-20 py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h1 class="mb-4 text-4xl font-bold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Produk Kreatif Indonesia</h1>
        </div>
    </section>

    <!-- Produk Section -->
    <section class="min-h-screen bg-white">
        <div class="max-w-[1150px] mx-auto mt-10 flex flex-col gap-5 px-5">
            <h2 class="text-center text-4xl font-bold">Produk Kreatif di Indonesia</h2>

            <form class="flex items-center w-full mx-auto">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Produk yang Anda Cari..." required />
                </div>
            </form>

            <!-- Tambah Produk -->
            <?php if ($_SESSION['role'] === 'admin') : ?>
                <a class="w-fit text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5" href="?c=Produk&m=create_form">Tambah Produk</a>
            <?php endif; ?>

            <!-- List Produk -->
            <div id="produk-list" class="w-full flex flex-wrap gap-3 mt-5">
                <?php
                if ($produk->num_rows > 0) :
                    while ($row = $produk->fetch_assoc()) : ?>
                        <div class="w-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="?c=produk&m=detail&id=<?= $row["id"] ?>">
                                <img class="relative rounded-t-lg w-full h-52 object-cover" src="<?= $row["gambar"] ?>" alt="Produk" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="?c=produk&m=detail&id=<?= $row["id"] ?>">
                                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white"><?= $row["nama"] ?></h5>
                                </a>

                                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-1 py-0.5 rounded-full dark:bg-blue-200 dark:text-blue-800"><?= $row["kategori"] ?></span>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-medium text-gray-900 dark:text-white">Rp. <?= number_format($row["harga"], 0, ',', '.') ?></span>
                                    <a href="?c=produk&m=detail&id=<?= $row["id"] ?>" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Detail</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                else : ?>
                    <p class="text-center font-semibold text-xl">Tidak ada poduk kreatif yang tersedia</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("simple-search");

            searchInput.addEventListener("input", function() {
                const query = searchInput.value;

                fetch("?c=Produk&m=search", {
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
                        const produkList = document.getElementById("produk-list");
                        produkList.innerHTML = "";

                        if (data.length > 0) {
                            data.forEach(item => {
                                const produkItem = `<div class="w-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="?c=produk&m=detail&id=${item.id}">
                                <img class="rounded-t-lg w-full h-52 object-cover" src="${item.gambar}" alt="Produk" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="?c=produk&m=detail&id=${item.id}">
                                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">${item.nama}</h5>
                                </a>

                                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-1 py-0.5 rounded-full dark:bg-blue-200 dark:text-blue-800">${item.kategori}</span>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-medium text-gray-900 dark:text-white">Rp. ${formatRupiah(item.harga)}</span>
                                    <a href="?c=produk&m=detail&id=${item.id}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Detail</a>
                                </div>
                            </div>
                        </div>
                    `;
                                produkList.insertAdjacentHTML('beforeend', produkItem);
                            });
                        } else {
                            produkList.innerHTML = '<p class="text-center font-semibold text-xl">Tidak ada destinasi wisata yang tersedia.</p>';
                        }
                    })
                    .catch(error => console.error("Error fetching search results:", error));
            });
        });

        function formatRupiah(angka) {
            return angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }
    </script>

</body>

</html>