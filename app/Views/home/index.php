<?= $this->extend('layout/layouts') ?>

<?= $this->section('content') ?>

<div class="flex flex-col md:flex-row justify-center items-center">
    <div class="mx-10">
        <img src="<?= base_url('public/assets/image/banner-new.png') ?>?t=" . time()" style="width: 600px;" alt="banner-1"/>
        <div class="flex flex-col justify-start items-start mt-8 ml-4 pb-12">
            <a href="https://info.tentangloker.com/" class="flex items-center btn-register">
                <img src="<?= base_url('public/assets/image/Cs-icon.png') ?>" class="object-fit image-icon" alt="info-loker" />
                <h2 class="text-white font-bold">Lewat Chat Bot Kami!</h2>
            </a>
        </div>
    </div>
    <div class="mx-10">
        <img src="<?= base_url('public/assets/image/people.png')?>" style="width: 600px;" alt="banner-2">
    </div>
</div>

<!-- <div class="flex flex-col md:flex-col justify-center items-center mt-8 pb-12">
    <div class="w-96 flex items-center justify-center">
    </div>
    <div class="my-4 mx-10">
        <a href="https://info.tentangloker.com/" class="flex items-center btn-register">
            <img src="<?= base_url('public/assets/image/Cs-icon.png') ?>" class="object-fit image-icon" alt="info-loker" />
            <h2 class="text-bot">Lewat Chat Bot Kami!</h2>
        </a>
    </div>
</div> -->

<?= $this->endSection() ?>