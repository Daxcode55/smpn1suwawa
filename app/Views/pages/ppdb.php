<section class="flex items-center justify-center pt-28 sm:pt-20 lg:pt-24 container-ppdb">
    <div class="border border-transparentBg lg:border-none bg-bgColor w-4/5 flex flex-col lg:flex-row items-center justify-center rounded-3xl shadow-custom wraper-content-ppdb">
        <div class="w-3/4 lg:w-2/4 wrap-svg-ppdb">
            <img src="<?= base_url('images/icons/High School-rafiki.png'); ?>" alt="" width="100%" />
        </div>
        <div class="text-center mb-7 lg:mb-0 desc-ppdb">
            <p>PENDAFTARAN PESERTA DIDIK BARU</p>
            <h1 class="mb-4 text-xl sm:text-3xl font-semibold">SMP NEGRI 1 SUWAWA</h1>
            <button
                class="mt-4 mr-3 bg-primary py-2 px-4 rounded-md text-bgColor cursor-pointer hover:bg-sky-700 ease-in-out duration-300" onclick="showModal()">Lihat Informasi</button>
            <button
                class="mt-4 bg-primary py-2 px-4 rounded-md text-bgColor cursor-pointer hover:bg-sky-700 ease-in-out duration-300" onclick="showModal2()">Persyaratan</button>
        </div>
    </div>
</section>

<div class="hidden fixed top-0 left-0 w-full h-screen overflow-auto modal-box">
    <div class="w-full h-full flex items-center justify-center parent-modal">
        <div class="relative bg-bgColor flex justify-center items-center w-3/4 lg:w-1/3 h-72 rounded-3xl shadow-custom wraper-informasi">
            <span class="absolute top-4 right-8 font-bold text-2xl text-red-700 cursor-pointer">X</span>
            <p class="text-xl font-semibold">Pendaftaran telah ditutup!</p>
        </div>
    </div>
</div>

<div class="hidden fixed top-0 left-0 w-full h-screen overflow-auto modal-box modal-box2">
    <div class="h-full flex items-center justify-center parent-modal2">
        <div class="relative bg-bgColor p-12 w-11/12 lg:w-1/2 rounded-3xl shadow-custom wraper-informasi2">
            <span class="absolute top-4 right-8 font-bold text-2xl text-red-700 cursor-pointer">X</span>
            <p class="text-xl font-bold">Persyaratan :</p>
            <ul>
                <li class="my-4">
                    1. Berusia paling tinggi 15 (lima belas) tahun pada tanggal 1 Juli
                    tahun 2024
                </li>
                <li class="my-4">2. Fc. Akta Kelahiran</li>
                <li class="my-4">3. Fc. Ijazah SD/ Surat Keterangan Lulus</li>
                <li class="my-4">4. Fc. KK</li>
                <li class="my-4">
                    5. Fc. sertifikat prestasi di bidang akademik maupun non akademik
                    (jika ada)
                </li>
                <li class="my-4">6. Foto berwarna 3 x 4 dan 4 x 6, masing-masing 2 lembar</li>
            </ul>
        </div>
    </div>
</div>