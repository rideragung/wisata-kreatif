<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/MVC2/public/assets/logo.png">
    <title>Detail Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    <?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <section class="bg-white min-h-screen flex items-center overflow-hidden">
        <img src="<?php echo $produk->gambar; ?>" class="object-cover object-center absolute z-10 block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        <div class="z-20 py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h1 class="mb-4 text-4xl font-bold tracking-tight leading-none text-white md:text-5xl lg:text-6xl"><?php echo $produk->nama; ?></h1>
        </div>
    </section>

    <!-- Detail Destinasi -->
    <div class="min-h-screen bg-white">
        <div class="max-w-[1150px] mx-auto mt-10 flex flex-col gap-5">
            <h1 class="text-4xl font-bold"><?php echo $produk->nama; ?></h1>
            <p class="text-justify"><?php echo $produk->deskripsi; ?></p>
            <h3 class="text-2xl font-bold">Kategori</h3>
            <p><?php echo $produk->kategori; ?></p>
            <h3 class="text-2xl font-bold">Harga</h3>
            <p>Rp. <?= number_format($produk->harga, 0, ',', '.') ?></p>

            <!-- Tombol Edit -->
            <?php if ($_SESSION['role'] === 'admin') : ?>
                <a href="?c=Produk&m=edit&id=<?php echo $produk->id; ?>" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 w-fit">Edit</a>
            <?php endif; ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
