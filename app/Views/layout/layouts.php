<?php $uri = current_url(true) ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CariKerjaYuk</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('public/assets/image/logo.png') ?>" />
    <meta name="description" content="Penyedia lowongan kerja yang memudahkan pelamar mencari kerja tanpa ribet">
    <meta name="keywords" content="Cari Kerja Yuk, cari, kerja, yuk, cari">

    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- add custome css -->
    <link href="<?= base_url("public/assets/css/custom.css") ?>" rel="stylesheet" type="text/css" />

    <!-- popup sweetalert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="flex flex-col">

    <nav class="flex justify-between items-center">

        <!-- LOGO -->
        <div class="flex py-4 my-4 mx-12">
            <a href="<?= base_url() ?>">
                <img src="<?= base_url('public/assets/image/logo.png') ?>" alt="Logo" class="logo-c">
            </a>
        </div>

        <!-- NAVIGATION -->
        <div class="hidden lg:block navbar-c flex-1 rounded-md py-4 my-4 ml-2 mr-12" style="background-color: #F99A1C;">
            <div class="container mx-auto flex justify-around items-center">
                <a href="<?= base_url() ?>" class="<?=$uri->getSegment(1) === '' ? ' font-bold text-white' : 'text-white ' ?>">Home</a>
                <a href="<?= base_url() ?>/term-and-condition" class="<?=$uri->getSegment(1) === 'term-and-condition' ? ' font-bold text-white' : 'text-white' ?>">Term & Condition</a>
                <a href="<?= base_url() ?>/about-us" class="<?=$uri->getSegment(1) === 'about-us' ? ' font-bold text-white' : 'text-white' ?>">About Us</a>
                <!-- <a href="<?= base_url() ?>/how-to-use" class="<?=$uri->getSegment(1) === 'how-to-use' ? ' font-bold text-white' : 'text-white' ?>">How To Use</a> -->
            </div>
        </div>

        <!-- Mobile Menu Button (Hidden on larger screens) -->
        <div class="lg:hidden navbar-c rounded-md my-4 mr-12">
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="mobile-menu z-50">
                <ul class="menu-items">
                    <li><a href="<?= base_url() ?>" class="text-sm">Home</a></li>
                    <li><a href="<?= base_url() ?>/term-and-condition" class="text-sm">Term & Condition</a></li>
                    <li><a href="<?= base_url() ?>/about-us" class="text-sm">About Us</a></li>
                    <!-- <li><a href="<?= base_url() ?>/how-to-use" class="text-sm">How To Use</a></li> -->
                </ul>
            </nav>
        </div>

    </nav>

    <?= $this->renderSection('content') ?>

    <div class="flex-1"></div>

    <!-- <footer class="bg-gray-800 text-gray-300 p-4">
        <div class="container mx-auto text-center">
            <p>
                PT. CONNEXIST INDONESIA
            </p>
            <p>
                Jl. Kemang Selatan IX No.9A, Jakarta Selatan, Jakarta, 12730
            </p>
        </div>
    </footer> -->

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>

    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", async function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const mobileMenu = document.querySelector('.mobile-menu');

            menuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('active');
            });

            const urlIpAdress = 'https://api.ipify.org?format=json';
            const baseUrl = 'https://api.tentangloker.com/api/v1';
            try {
                const responseIpAdress = await fetch(urlIpAdress);
                const responseIpAddressData = await responseIpAdress.json();

                const reponseLog = await axios.post(`${baseUrl}/logs`, {currentIp: responseIpAddressData.ip, message: `IP Address ${responseIpAddressData.ip} telah membuka website tentangloker.com`, data: {
                    domain: 'https://tentangloker.com/', device: 'web'
                }});
            } catch(err) {
                console.error(err.message)
            }
        });
    </script>

    <?= $this->renderSection('script') ?>

</body>

</html>