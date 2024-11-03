<section class="pt-3 mb-10 lg:pt-0">
    <div class="bg-bgSection w-full h-36 bg-cover bg-center lg:h-60">
        <h2 class="text-3xl font-bold pt-20 pl-8 text-bgColor lg:text-3xl">Gallery</h2>
    </div>

    <div class="flex flex-col items-center border-b border-primary pb-20 mx-24 mt-10">
        <p class="text-xl font-semibold">Galeri Kegiatan Siswa</p>
        <p class="text-center text-lg mt-2 font-light">Foto-foto kegiatan siswa didalam lingkungan sekolah maupun diluar sekolah. <br><span class="text-primary">SMP Negri 1 Suwawa</span></p>
    </div>

    <div class="px-5 sm:px-0 wraper-galery mt-7 lg:mt-24 flex flex-wrap items-center justify-center gap-6 lg:flex-row lg:gap-12">
        <div class="w-full sm:w-11/12 md:w-96 lg:w-96 card">
            <img id="myImg" class="w-full h-auto rounded-t-lg" src="<?= base_url('images/img/smp1.jpg') ?>" alt="Avatar"
                style="width: 100%" />
            <div class="py-3 px-4 container bg-bgColor rounded-b-lg">
                <p class="text-base">kegiatan belajar di dalam kelas</p>
            </div>
        </div>

        <div class="w-full sm:w-11/12 md:w-96 lg:w-96 card">
            <img id="myImg" class="w-full h-auto rounded-t-lg" src="<?= base_url('images/img/smp1.jpg') ?>" alt="Avatar" />
            <div class="py-3 px-4 container bg-bgColor rounded-b-lg">
                <p class="text-base">kegiatan belajar di dalam kelas</p>
            </div>
        </div>

        <div class="w-full sm:w-11/12 md:w-96 lg:w-96 card">
            <img id="myImg" class="w-full h-auto rounded-t-lg" src="<?= base_url('images/img/smp1.jpg') ?>" alt="Avatar"
                style="width: 100%" />
            <div class="py-3 px-4 container bg-bgColor rounded-b-lg">
                <p class="text-base">kegiatan belajar di dalam kelas</p>
            </div>
        </div>

        <div class="w-full sm:w-11/12 md:w-96 lg:w-96 card">
            <img id="myImg" class="w-full h-auto rounded-t-lg" src="<?= base_url('images/img/smp1.jpg') ?>" alt="Avatar"
                style="width: 100%" />
            <div class="py-3 px-4 container bg-bgColor rounded-b-lg">
                <p class="text-base">kegiatan belajar di dalam kelas</p>
            </div>
        </div>

        <div class="w-full sm:w-11/12 md:w-96 lg:w-96 card">
            <img id="myImg" class="w-full h-auto rounded-t-lg" src="<?= base_url('images/img/smp1.jpg') ?>" alt="Avatar"
                style="width: 100%" />
            <div class="py-3 px-4 container bg-bgColor rounded-b-lg">
                <p class="text-base">kegiatan belajar di dalam kelas</p>
            </div>
        </div>

        <div class="w-full sm:w-11/12 md:w-96 lg:w-96 card">
            <img id="myImg" class="w-full h-auto rounded-t-lg" src="<?= base_url('images/img/smp1.jpg') ?>" alt="Avatar"
                style="width: 100%" />
            <div class="py-3 px-4 container bg-bgColor rounded-b-lg">
                <p class="text-base">kegiatan belajar di dalam kelas</p>
            </div>
        </div>

        <!-- modal img -->
        <div id="myModal" class="hidden fixed pt-28 left-0 top-0 w-full h-full overflow-auto  modal">
            <span class="absolute top-4 right-9 text-bgColor text-5xl font-bold duration-75 close">&times;</span>
            <img class="m-auto block w-4/5 max-w-2xl modal-content" id="img01">
        </div>
    </div>
</section>