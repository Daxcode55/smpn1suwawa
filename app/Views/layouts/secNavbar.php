<section class="relative lg:sticky lg:top-0 container-navbar">
    <nav class="absolute top-full w-3/4 h-screen bg-bgColor shadow-md pt-4 lg:pt-0 lg:pl-24 lg:h-auto lg:sticky lg:top-0 lg:left-0 lg:w-full navbar">
        <ul class="lg:flex">
            <img class="hidden lg:block lg:w-1/5" src="<?= base_url('images/icons/logo2.svg') ?>" alt="">
            <li class="lg:ml-10 li-links"><a class="block link" href="<?= base_url('/') ?>">Beranda</a></li>
            <li id="dropdown" class="lg:cursor-pointer lg:relative li-links">
                <div class="flex items-center justify-between link lg:justify-normal">Profil Sekolah
                    <svg class="text-lg" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="m6 9l6 6l6-6" />
                    </svg>
                </div>
                <div class="hidden pl-4 pb-4 flex flex-col lg:absolute lg:pl-4 lg:w-72 lg:block dropdown-link">
                    <a href="<?= base_url('/sambutan-kepala-sekolah') ?>">Sambutan Kepala Sekolah</a>
                    <a href="<?= base_url('/visi-dan-misi') ?>">Visi dan Misi</a>
                    <a href="<?= base_url('/struktur-organisasi') ?>">Struktur Organisasi</a>
                    <a class="borderNon" href="<?= base_url('/civitas-akademik') ?>">Civitas Akademik</a>
                </div>
            </li>

            <li class="li-links"><a class="block link" href="<?= base_url('/galery') ?>">Gallery</a></li>
            <li class="li-links"><a class="block link" href="">PPDB</a></li>
            <li class="li-links"><a class="block link" href="">Kontak Kami</a></li>
        </ul>
    </nav>
    <!-- </header> -->
    <!-- header end -->
</section>