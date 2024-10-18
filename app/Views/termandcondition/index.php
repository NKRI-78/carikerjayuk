<?= $this->extend('layout/layouts') ?>

<?= $this->section('content') ?>

<div class="w-4/5 my-8 mx-auto">
    <div class="my-4 mx-2">
        <!-- Accordion Item 1 -->
        <div class="border rounded-md mb-2" x-data="{ open: true }">
            <!-- Accordion Header -->
            <div class="flex justify-between items-center px-4 py-2 bg-gray-200 cursor-pointer" @click="open = !open">
                <h2 class="text-lg font-semibold">Disclaimer</h2>
                <svg x-show="!open" class="w-6 h-6 transform transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 9l6 6 6-6" />
                </svg>
                <svg x-show="open" class="w-6 h-6 transform transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 9l-6 6-6-6" />
                </svg>
            </div>
            <!-- Accordion Content -->
            <div class="px-4 py-2 bg-white" x-show="open">
                <!-- Content Goes Here -->
                <div class="my-4">
                    1. Hanya dengan Rp.2.000,- “CariKerjaYuk” akan membantu anda dalam kemudahan pencarian lowongan kerja sesuai dengan keinginan anda.
                </div>
                <div class="my-4">
                    2. “CariKerjaYuk”  tidak memiliki ikatan apapun dengan perusahan-perusahan yang info lowongannya terdaftar di situs ini.
                </div>
                <div class="my-4">
                    3. “CariKerjaYuk” tidak bertanggung jawab atas kesalahan data atau informasi yang termuat di situs ini karena “CariKerjaYuk” selalu berusaha memberikan informasi yang benar dan valid kepada para pencari kerja berdasarkan sumber-sumber resmi dan terpercaya.
                </div>
                <div class="my-4">
                    3. “CariKerjaYuk” tidak bertanggung jawab atas kesalahan data atau informasi yang termuat di situs ini karena “CariKerjaYuk” selalu berusaha memberikan informasi yang benar dan valid kepada para pencari kerja berdasarkan sumber-sumber resmi dan terpercaya.
                </div>
                <div class="my-4">
                    4. “CariKerjaYuk” tidak bertanggung jawab terhadap data atau informasi yang disebarkan oleh pembaca, sekalipun data atau informasi tersebut mengacu kepada informasi yang termuat di situs kami.
                </div>
                <div class="my-4">
                    5. “CariKerjaYuk” tidak pernah meminta imbalan dalam bentuk apapun kepada para pencari kerja yang berkunjung ke situs ini, kami bukan pihak perekrut, kami hanya menyampaikan informasi seputar lowongan kerja. Jika ada pihak tertentu yang meminta imbalan dalam bentuk apapun dan mengatas namakan “CariKerjaYuk”, maka mohon untuk tidak dilayani.
                </div>
                <div class="my-4">
                    6. “CariKerjaYuk” memiliki Tujuan memberikan Layanan Informasi kesempatan Kerja bagi seluruh Rakyat Indonesia
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

















