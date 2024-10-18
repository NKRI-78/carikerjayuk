<?= $this->extend('layout/layouts') ?>

<?= $this->section('content') ?>

<div class="flex justify-center items-center">
    <div class="rounded-md mx-10">
        <img src="<?= base_url('public/assets/image/banner.png') ?>?t=" . time()" class="object-fit" alt="banner" width="1300" />
    </div>
</div>

<div class="flex flex-col md:flex-col justify-center items-center mt-8 pb-12">
    <!-- <div class="my-10 mx-10">
            <a href="https://api.whatsapp.com/send?phone=+6285212131890&text=Loker"> <img src="<?= base_url() ?>assets/image/info-loker.png" class="object-fit info-loker-c" alt="info-loker" /> </a>
        </div> -->
    <!-- <div class="my-4 mx-10">
        <a href="https://api.whatsapp.com/send?phone=+6285212131890&text=Loker" class="flex items-center btn-wa">
            <img src="<?= base_url('public/assets/image/WhatsApp.png') ?>" class="object-fit image-icon-wa" alt="info-loker" />
            <h2 class="text-bot-wa">Info Loker Via Whatsapp</h2>
        </a>
    </div> -->
    <div class="w-96 flex items-center justify-center">
        <!-- <hr class="w-full bg-gray-400 line-hr"> -->
        <p class="text-base font-medium leading-4 px-2.5 text-atau">Hubungi</p>
        <!-- <hr class="w-full bg-gray-400 line-hr"> -->
    </div>
    <!-- <div class="flex justify-start items-center my-10 mx-10">
            <a href="#" class="flex items-center text-bot">
                <div class=" btn-register">
                    <img src="<?= base_url() ?>assets/image/Cs-icon.png" class="object-fit image-icon" alt="info-loker" />
                    <h2>Lewat Chat Bot Kami!</h2>
                </div>
            </a>
        </div> -->
    <div class="my-4 mx-10">
        <a href="https://info.tentangloker.com/" class="flex items-center btn-register">
            <img src="<?= base_url('public/assets/image/Cs-icon.png') ?>" class="object-fit image-icon" alt="info-loker" />
            <h2 class="text-bot">Lewat Chat Bot Kami!</h2>
        </a>
    </div>
</div>



<?= $this->endSection() ?>