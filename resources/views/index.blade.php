@extends('layouts.app')

@section('content')
    @include('components/carousel')
    <div class="etalase-inovasi flex-column py-5 text-center">
        <h1>Inovasi Kabupaten Bogor</h1>
        <p>*sampai saat ini</p>
        <div class="mt-5 d-flex justify-content-center">
            <div class="row" style="width: 70%">
                <div class="col col-md-4 col-12">
                    <img src="{{ asset('assets/images/etalase-1.png') }}" alt="" width="60" class="mb-2">
                    <h1>321</h1>
                    <h5>Instansi</h5>
                </div>
                <div class="col col-md-4 col-12">
                    <img src="{{ asset('assets/images/etalase-2.png') }}" alt="" width="60" class="mb-2">
                    <h1>2929</h1>
                    <h5>Inovasi</h5>
                </div>
                <div class="col col-md-4 col-12">
                    <img src="{{ asset('assets/images/etalase-3.png') }}" alt="" width="60" class="mb-2">
                    <h1>21012</h1>
                    <h5>SDG'S</h5>
                </div>
            </div>
        </div>
        <button class="btn btn-etalase text-white px-5 my-4">Lihat Etalase Inovasi</button>
    </div>
    <div class="rangkuman-berita d-flex flex-column justify-content-center align-items-center py-5">
        <h1>Rangkuman Berita</h1>
        <div class="row gap-md-0 gap-3" style="width: 75%">
            <div class="col-md-6 col-12">
                <div class="card border-0 card-berita-utama">
                    <img src="{{ asset('assets/images/berita-utama.png') }}" class="card-img-top w-100 p-0" alt="...">

                    <div class="card-body body-berita-utama">
                        <p class="m-0">
                            <i>#umum</i>
                        </p>
                        <h5 class="card-title">Telemedicine #SayDOC (Satu Layar Ngobrol dengan Dokter)</h5>
                        <p class="card-text mb-1" style="font-size: 14px">
                            RSUD Prof. Dr. Margono (RSMS) merupakan RS milik Prov. Jawa Tengah
                            Klas B Pendidikan. Rata-rata kunjungan pasien rawat jalan 1.054
                            pasien/hari (2019) dengan rata-rata pasien kronis (jantung, paru, bedah
                            saraf, dalam, jiwa) sebesar 278 pasien/hari (2019). Berdasarkan laporan
                            evaluasi pelayanan di RSUD Prof. Dr. Margono Soekarjo (RSMS) tahun
                            2019 ditemukan permasalahan belum adanya akses rawat jalan melalui
                        </p>
                        <a href="#" class="btn btn-detail-berita">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 d-flex flex-column gap-4">
                <div class="d-flex flex-row gap-3 align-items-center">
                    <img src="{{ asset('assets/images/berita-utama.png') }}" alt="" class="card-berita">
                    <div class="d-flex flex-column">
                        <p class="mb-0"><i>#umum</i></p>
                        <p class="mb-1 judul-berita">
                            RSUD Prof. Dr. Margono (RSMS) merupakan RS milik
                            Prov. Jawa Tengah Klas B Pendidikan. Rata-rata
                        </p>
                        <p class="date">
                            <svg width="12" height="14" viewBox="0 0 12 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.25 11.8844V5.35H11.0125V11.8844C11.0125 12.533 10.484 13.0375 9.85938 13.0375H1.40313C0.754492 13.0375 0.25 12.533 0.25 11.8844ZM7.9375 7.17578V8.13672C7.9375 8.30488 8.05762 8.425 8.22578 8.425H9.18672C9.33086 8.425 9.475 8.30488 9.475 8.13672V7.17578C9.475 7.03164 9.33086 6.8875 9.18672 6.8875H8.22578C8.05762 6.8875 7.9375 7.03164 7.9375 7.17578ZM7.9375 10.2508V11.2117C7.9375 11.3799 8.05762 11.5 8.22578 11.5H9.18672C9.33086 11.5 9.475 11.3799 9.475 11.2117V10.2508C9.475 10.1066 9.33086 9.9625 9.18672 9.9625H8.22578C8.05762 9.9625 7.9375 10.1066 7.9375 10.2508ZM4.8625 7.17578V8.13672C4.8625 8.30488 4.98262 8.425 5.15078 8.425H6.11172C6.25586 8.425 6.4 8.30488 6.4 8.13672V7.17578C6.4 7.03164 6.25586 6.8875 6.11172 6.8875H5.15078C4.98262 6.8875 4.8625 7.03164 4.8625 7.17578ZM4.8625 10.2508V11.2117C4.8625 11.3799 4.98262 11.5 5.15078 11.5H6.11172C6.25586 11.5 6.4 11.3799 6.4 11.2117V10.2508C6.4 10.1066 6.25586 9.9625 6.11172 9.9625H5.15078C4.98262 9.9625 4.8625 10.1066 4.8625 10.2508ZM1.7875 7.17578V8.13672C1.7875 8.30488 1.90762 8.425 2.07578 8.425H3.03672C3.18086 8.425 3.325 8.30488 3.325 8.13672V7.17578C3.325 7.03164 3.18086 6.8875 3.03672 6.8875H2.07578C1.90762 6.8875 1.7875 7.03164 1.7875 7.17578ZM1.7875 10.2508V11.2117C1.7875 11.3799 1.90762 11.5 2.07578 11.5H3.03672C3.18086 11.5 3.325 11.3799 3.325 11.2117V10.2508C3.325 10.1066 3.18086 9.9625 3.03672 9.9625H2.07578C1.90762 9.9625 1.7875 10.1066 1.7875 10.2508ZM9.85938 2.275C10.484 2.275 11.0125 2.80352 11.0125 3.42812V4.58125H0.25V3.42812C0.25 2.80352 0.754492 2.275 1.40313 2.275H2.55625V1.12187C2.55625 0.929687 2.72441 0.7375 2.94063 0.7375H3.70938C3.90156 0.7375 4.09375 0.929687 4.09375 1.12187V2.275H7.16875V1.12187C7.16875 0.929687 7.33691 0.7375 7.55313 0.7375H8.32188C8.51406 0.7375 8.70625 0.929687 8.70625 1.12187V2.275H9.85938Z"
                                    fill="#6C757D" />
                            </svg>
                            23 December 2023 | 03:12
                        </p>
                    </div>
                </div>
                <div class="d-flex flex-row gap-3 align-items-center">
                    <img src="{{ asset('assets/images/berita-utama.png') }}" alt="" class="card-berita">
                    <div class="d-flex flex-column">
                        <p class="mb-0"><i>#umum</i></p>
                        <p class="mb-1 judul-berita">
                            RSUD Prof. Dr. Margono (RSMS) merupakan RS milik
                            Prov. Jawa Tengah Klas B Pendidikan. Rata-rata
                        </p>
                        <p class="date">
                            <svg width="12" height="14" viewBox="0 0 12 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.25 11.8844V5.35H11.0125V11.8844C11.0125 12.533 10.484 13.0375 9.85938 13.0375H1.40313C0.754492 13.0375 0.25 12.533 0.25 11.8844ZM7.9375 7.17578V8.13672C7.9375 8.30488 8.05762 8.425 8.22578 8.425H9.18672C9.33086 8.425 9.475 8.30488 9.475 8.13672V7.17578C9.475 7.03164 9.33086 6.8875 9.18672 6.8875H8.22578C8.05762 6.8875 7.9375 7.03164 7.9375 7.17578ZM7.9375 10.2508V11.2117C7.9375 11.3799 8.05762 11.5 8.22578 11.5H9.18672C9.33086 11.5 9.475 11.3799 9.475 11.2117V10.2508C9.475 10.1066 9.33086 9.9625 9.18672 9.9625H8.22578C8.05762 9.9625 7.9375 10.1066 7.9375 10.2508ZM4.8625 7.17578V8.13672C4.8625 8.30488 4.98262 8.425 5.15078 8.425H6.11172C6.25586 8.425 6.4 8.30488 6.4 8.13672V7.17578C6.4 7.03164 6.25586 6.8875 6.11172 6.8875H5.15078C4.98262 6.8875 4.8625 7.03164 4.8625 7.17578ZM4.8625 10.2508V11.2117C4.8625 11.3799 4.98262 11.5 5.15078 11.5H6.11172C6.25586 11.5 6.4 11.3799 6.4 11.2117V10.2508C6.4 10.1066 6.25586 9.9625 6.11172 9.9625H5.15078C4.98262 9.9625 4.8625 10.1066 4.8625 10.2508ZM1.7875 7.17578V8.13672C1.7875 8.30488 1.90762 8.425 2.07578 8.425H3.03672C3.18086 8.425 3.325 8.30488 3.325 8.13672V7.17578C3.325 7.03164 3.18086 6.8875 3.03672 6.8875H2.07578C1.90762 6.8875 1.7875 7.03164 1.7875 7.17578ZM1.7875 10.2508V11.2117C1.7875 11.3799 1.90762 11.5 2.07578 11.5H3.03672C3.18086 11.5 3.325 11.3799 3.325 11.2117V10.2508C3.325 10.1066 3.18086 9.9625 3.03672 9.9625H2.07578C1.90762 9.9625 1.7875 10.1066 1.7875 10.2508ZM9.85938 2.275C10.484 2.275 11.0125 2.80352 11.0125 3.42812V4.58125H0.25V3.42812C0.25 2.80352 0.754492 2.275 1.40313 2.275H2.55625V1.12187C2.55625 0.929687 2.72441 0.7375 2.94063 0.7375H3.70938C3.90156 0.7375 4.09375 0.929687 4.09375 1.12187V2.275H7.16875V1.12187C7.16875 0.929687 7.33691 0.7375 7.55313 0.7375H8.32188C8.51406 0.7375 8.70625 0.929687 8.70625 1.12187V2.275H9.85938Z"
                                    fill="#6C757D" />
                            </svg>
                            23 December 2023 | 03:12
                        </p>
                    </div>
                </div>
                <div class="d-flex flex-row gap-3 align-items-center">
                    <img src="{{ asset('assets/images/berita-utama.png') }}" alt="" class="card-berita">
                    <div class="d-flex flex-column">
                        <p class="mb-0"><i>#umum</i></p>
                        <p class="mb-1 judul-berita">
                            RSUD Prof. Dr. Margono (RSMS) merupakan RS milik
                            Prov. Jawa Tengah Klas B Pendidikan. Rata-rata
                        </p>
                        <p class="date">
                            <svg width="12" height="14" viewBox="0 0 12 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.25 11.8844V5.35H11.0125V11.8844C11.0125 12.533 10.484 13.0375 9.85938 13.0375H1.40313C0.754492 13.0375 0.25 12.533 0.25 11.8844ZM7.9375 7.17578V8.13672C7.9375 8.30488 8.05762 8.425 8.22578 8.425H9.18672C9.33086 8.425 9.475 8.30488 9.475 8.13672V7.17578C9.475 7.03164 9.33086 6.8875 9.18672 6.8875H8.22578C8.05762 6.8875 7.9375 7.03164 7.9375 7.17578ZM7.9375 10.2508V11.2117C7.9375 11.3799 8.05762 11.5 8.22578 11.5H9.18672C9.33086 11.5 9.475 11.3799 9.475 11.2117V10.2508C9.475 10.1066 9.33086 9.9625 9.18672 9.9625H8.22578C8.05762 9.9625 7.9375 10.1066 7.9375 10.2508ZM4.8625 7.17578V8.13672C4.8625 8.30488 4.98262 8.425 5.15078 8.425H6.11172C6.25586 8.425 6.4 8.30488 6.4 8.13672V7.17578C6.4 7.03164 6.25586 6.8875 6.11172 6.8875H5.15078C4.98262 6.8875 4.8625 7.03164 4.8625 7.17578ZM4.8625 10.2508V11.2117C4.8625 11.3799 4.98262 11.5 5.15078 11.5H6.11172C6.25586 11.5 6.4 11.3799 6.4 11.2117V10.2508C6.4 10.1066 6.25586 9.9625 6.11172 9.9625H5.15078C4.98262 9.9625 4.8625 10.1066 4.8625 10.2508ZM1.7875 7.17578V8.13672C1.7875 8.30488 1.90762 8.425 2.07578 8.425H3.03672C3.18086 8.425 3.325 8.30488 3.325 8.13672V7.17578C3.325 7.03164 3.18086 6.8875 3.03672 6.8875H2.07578C1.90762 6.8875 1.7875 7.03164 1.7875 7.17578ZM1.7875 10.2508V11.2117C1.7875 11.3799 1.90762 11.5 2.07578 11.5H3.03672C3.18086 11.5 3.325 11.3799 3.325 11.2117V10.2508C3.325 10.1066 3.18086 9.9625 3.03672 9.9625H2.07578C1.90762 9.9625 1.7875 10.1066 1.7875 10.2508ZM9.85938 2.275C10.484 2.275 11.0125 2.80352 11.0125 3.42812V4.58125H0.25V3.42812C0.25 2.80352 0.754492 2.275 1.40313 2.275H2.55625V1.12187C2.55625 0.929687 2.72441 0.7375 2.94063 0.7375H3.70938C3.90156 0.7375 4.09375 0.929687 4.09375 1.12187V2.275H7.16875V1.12187C7.16875 0.929687 7.33691 0.7375 7.55313 0.7375H8.32188C8.51406 0.7375 8.70625 0.929687 8.70625 1.12187V2.275H9.85938Z"
                                    fill="#6C757D" />
                            </svg>
                            23 December 2023 | 03:12
                        </p>
                    </div>
                </div>
                <div class="d-flex flex-row gap-3 align-items-center">
                    <img src="{{ asset('assets/images/berita-utama.png') }}" alt="" class="card-berita">
                    <div class="d-flex flex-column">
                        <p class="mb-0"><i>#umum</i></p>
                        <p class="mb-1 judul-berita">
                            RSUD Prof. Dr. Margono (RSMS) merupakan RS milik
                            Prov. Jawa Tengah Klas B Pendidikan. Rata-rata
                        </p>
                        <p class="date">
                            <svg width="12" height="14" viewBox="0 0 12 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.25 11.8844V5.35H11.0125V11.8844C11.0125 12.533 10.484 13.0375 9.85938 13.0375H1.40313C0.754492 13.0375 0.25 12.533 0.25 11.8844ZM7.9375 7.17578V8.13672C7.9375 8.30488 8.05762 8.425 8.22578 8.425H9.18672C9.33086 8.425 9.475 8.30488 9.475 8.13672V7.17578C9.475 7.03164 9.33086 6.8875 9.18672 6.8875H8.22578C8.05762 6.8875 7.9375 7.03164 7.9375 7.17578ZM7.9375 10.2508V11.2117C7.9375 11.3799 8.05762 11.5 8.22578 11.5H9.18672C9.33086 11.5 9.475 11.3799 9.475 11.2117V10.2508C9.475 10.1066 9.33086 9.9625 9.18672 9.9625H8.22578C8.05762 9.9625 7.9375 10.1066 7.9375 10.2508ZM4.8625 7.17578V8.13672C4.8625 8.30488 4.98262 8.425 5.15078 8.425H6.11172C6.25586 8.425 6.4 8.30488 6.4 8.13672V7.17578C6.4 7.03164 6.25586 6.8875 6.11172 6.8875H5.15078C4.98262 6.8875 4.8625 7.03164 4.8625 7.17578ZM4.8625 10.2508V11.2117C4.8625 11.3799 4.98262 11.5 5.15078 11.5H6.11172C6.25586 11.5 6.4 11.3799 6.4 11.2117V10.2508C6.4 10.1066 6.25586 9.9625 6.11172 9.9625H5.15078C4.98262 9.9625 4.8625 10.1066 4.8625 10.2508ZM1.7875 7.17578V8.13672C1.7875 8.30488 1.90762 8.425 2.07578 8.425H3.03672C3.18086 8.425 3.325 8.30488 3.325 8.13672V7.17578C3.325 7.03164 3.18086 6.8875 3.03672 6.8875H2.07578C1.90762 6.8875 1.7875 7.03164 1.7875 7.17578ZM1.7875 10.2508V11.2117C1.7875 11.3799 1.90762 11.5 2.07578 11.5H3.03672C3.18086 11.5 3.325 11.3799 3.325 11.2117V10.2508C3.325 10.1066 3.18086 9.9625 3.03672 9.9625H2.07578C1.90762 9.9625 1.7875 10.1066 1.7875 10.2508ZM9.85938 2.275C10.484 2.275 11.0125 2.80352 11.0125 3.42812V4.58125H0.25V3.42812C0.25 2.80352 0.754492 2.275 1.40313 2.275H2.55625V1.12187C2.55625 0.929687 2.72441 0.7375 2.94063 0.7375H3.70938C3.90156 0.7375 4.09375 0.929687 4.09375 1.12187V2.275H7.16875V1.12187C7.16875 0.929687 7.33691 0.7375 7.55313 0.7375H8.32188C8.51406 0.7375 8.70625 0.929687 8.70625 1.12187V2.275H9.85938Z"
                                    fill="#6C757D" />
                            </svg>
                            23 December 2023 | 03:12
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="inovasi-unggulan d-flex flex-column justify-content-center align-items-center py-5">
        <div class="pl-2" style="width: 75%">
            <h4 class="text-start">Inovasi Unggulan</h4>
            <hr style="border-width: 3px">
            <div id="carouselExampleControls" class="carousel carousel-dark slide p-0" data-bs-ride="carousel">
                <div class="carousel-inner p-0">
                    <div class="carousel-item active">
                        <div class="card-wrapper container-sm d-flex justify-content-around p-0">
                            <div class="row w-100 gap-4">
                                <div class="card card-inovasi col p-0">
                                    <img src="{{ asset('assets/images/berita-utama.png') }}" class="card-img-top"
                                        alt="..."
                                        style="border-top-left-radius: 20px; border-top-right-radius: 20px">
                                    <div class="card-body">
                                        <p class="inovasi-card-title">DETAK (DESA TUNTAS ADMINISTRASI)</p>
                                        <p class="inovasi-card-text mb-1">
                                            Inovasi DETAK (Desa Tuntas Administrasi) adalah salah satu
                                            Inovasi yang dibangun oleh Dinas Kependudukan dan
                                            Pencatatan Sipil dengan tujuan untuk meningkatkan cakupan
                                            kepemilikan dokumen kependudukan.
                                        </p>
                                        <button class="btn btn-inovasi-selengkapnya">
                                            selengkapnya
                                        </button>
                                    </div>
                                </div>
                                <div class="card card-inovasi col p-0">
                                    <img src="{{ asset('assets/images/berita-utama.png') }}" class="card-img-top"
                                        alt="..."
                                        style="border-top-left-radius: 20px; border-top-right-radius: 20px">
                                    <div class="card-body">
                                        <p class="inovasi-card-title">DETAK (DESA TUNTAS ADMINISTRASI)</p>
                                        <p class="inovasi-card-text mb-1">
                                            Inovasi DETAK (Desa Tuntas Administrasi) adalah salah satu
                                            Inovasi yang dibangun oleh Dinas Kependudukan dan
                                            Pencatatan Sipil dengan tujuan untuk meningkatkan cakupan
                                            kepemilikan dokumen kependudukan.
                                        </p>
                                        <button class="btn btn-inovasi-selengkapnya">
                                            selengkapnya
                                        </button>
                                    </div>
                                </div>
                                <div class="card card-inovasi col p-0">
                                    <img src="{{ asset('assets/images/berita-utama.png') }}" class="card-img-top"
                                        alt="..."
                                        style="border-top-left-radius: 20px; border-top-right-radius: 20px">
                                    <div class="card-body">
                                        <p class="inovasi-card-title">DETAK (DESA TUNTAS ADMINISTRASI)</p>
                                        <p class="inovasi-card-text mb-1">
                                            Inovasi DETAK (Desa Tuntas Administrasi) adalah salah satu
                                            Inovasi yang dibangun oleh Dinas Kependudukan dan
                                            Pencatatan Sipil dengan tujuan untuk meningkatkan cakupan
                                            kepemilikan dokumen kependudukan.
                                        </p>
                                        <button class="btn btn-inovasi-selengkapnya">
                                            selengkapnya
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="youtube-section d-flex flex-column justify-content-center align-items-center py-5">
        <h5>Kabupaten Bogor Terinovatif</h5>
        <div class="" style="width: 75%">
            <div id="carouselYoutubeSection" class="carousel carousel-dark slide p-0 mt-2" data-bs-ride="carousel">
                <div class="carousel-inner p-0">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-3 mr-2">
                                <iframe src="https://www.youtube.com/embed/xapuPZrQ-zk" frameborder="0" class="p-0"></iframe>
                            </div>
                            <div class="col-3">
                                <iframe src="https://www.youtube.com/embed/xapuPZrQ-zk" frameborder="0" class="p-0"></iframe>
                            </div>
                            <div class="col-3">
                                <iframe src="https://www.youtube.com/embed/xapuPZrQ-zk" frameborder="0" class="p-0"></iframe>
                            </div>
                            <div class="col-3">
                                <iframe src="https://www.youtube.com/embed/xapuPZrQ-zk" frameborder="0" class="p-0"></iframe>
                            </div>
                        </div>                        
                    </div>
                    <div class="carousel-item">
                        <iframe src="https://www.youtube.com/embed/_JhLC29jeI4" frameborder="0" class="p-0"></iframe>
                        <iframe src="https://www.youtube.com/embed/_JhLC29jeI4" frameborder="0" class="p-0"></iframe>
                        <iframe src="https://www.youtube.com/embed/_JhLC29jeI4" frameborder="0" class="p-0"></iframe>
                        <iframe src="https://www.youtube.com/embed/_JhLC29jeI4" frameborder="0" class="p-0"></iframe>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselYoutubeSection"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselYoutubeSection"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
@endsection
