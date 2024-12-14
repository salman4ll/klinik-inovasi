@extends('layouts.app')
@section('content')
    <style>
        .card-body {
            font-size: 14px;
            /* Atur ukuran font body secara keseluruhan */
        }

        a.card-title {
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            color: #2A2A2A
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
        }

        a.card-title:hover {
            text-decoration: underline;
        }

        .date {
            font-size: 12px;            
            color: #6c757d;
        }

        .bg-green-700 {
            background-color: #008000;
        }

        .text-white {
            color: #ffffff;
        }

        .py-6 {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .flex {
            display: flex;
        }

        .items-center {
            align-items: center;
        }

        .justify-between {
            justify-content: space-between;
        }

        .mr-4 {
            margin-right: 1rem;
        }

        .space-x-4 {
            margin-right: 1rem;
        }

        .hover\:text-gray-300:hover {
            color: #d1d5db;
        }
    </style>
    <div class="rangkuman-berita d-flex flex-column justify-content-center align-items-center py-5">
        <div class="row gap-md-0 gap-3" style="width: 75%">
            <div class="col-md-8 col-12">
                <h1 class="text-center">Rangkuman Berita</h1>
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
            <!-- Berita Lainnya -->
            <div class="col-md-4 col-12">
                <h5 class="text-success">Berita lainnya</h5>
                <hr>
                <div class="card mb-4">
                    <div class="card-body">
                        <a href="https://jippnas.menpan.go.id/profile/berita/16" class="card-title">Telemedicine #SayDOC (Isu Utama negara dan Dunia)</a>
                        <p class="card-text">23 December 2023 | 03:12</p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <a href="https://menpan.go.id/site/berita-terkini/kementerian-panrb-akan-serahkan-anugerah-pelayanan-publik-luncurkan-jippnas-dan-resmikan-12-mpp" class="card-title">Kementerian PANRB Akan Sertakan Anggaran Pelayanan Publik
                            Lunusudan JIPPNB,
                            dan Realisasi 12 MPP</a>
                        <p class="card-text date">22 November 2023 | 06:11</p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <a href="https://jippnas.menpan.go.id/profile/berita/9" class="card-title">Pacu Reformasi Birokrasi Berdampak, Kementerian PANRB Lakukan
                            Pembinaan
                            Kepada Pelayanan Publik</a>
                        <p class="card-text date">15 November 2023 | 12:11</p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <a href="https://menpan.go.id/site/berita-terkini/optimalkan-layanan-publik-untuk-wni-kementerian-panrb-tinjau-kbri-wellington" class="card-title">Optimalkan Layanan Publik untuk WNI, Kementerian PANRB Terjag
                            KBRI</a>
                        <p class="card-text date">09 November 2023 | 11:11</p>
                    </div>
                </div>
            </div>
            {{-- <div class="inovasi-unggulan d-flex flex-column justify-content-center align-items-center py-5">
            <div class="pl-2" style="width: 75%">
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
                                            <div class="card-body">
                                                <h5 class="card-title">Telemedicine #SayDOC (Isu Utama negara dan Dunia)
                                                </h5>
                                                <p class="card-text date">23 December 2023 | 03:12</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-inovasi col p-0">
                                        <img src="{{ asset('assets/images/berita-utama.png') }}" class="card-img-top"
                                            alt="..."
                                            style="border-top-left-radius: 20px; border-top-right-radius: 20px">
                                        <div class="card-body">
                                            <h5 class="card-title">Kementerian PANRB Akan Sertakan Anggaran Pelayanan
                                                Publik Lunusudan JIPPNB,
                                                dan Realisasi 12 MPP</h5>
                                            <p class="card-text date">22 November 2023 | 06:11</p>
                                        </div>
                                    </div>
                                    <div class="card card-inovasi col p-0">
                                        <img src="{{ asset('assets/images/berita-utama.png') }}" class="card-img-top"
                                            alt="..."
                                            style="border-top-left-radius: 20px; border-top-right-radius: 20px">
                                        <div class="card-body">
                                            <h5 class="card-title">Pacu Reformasi Birokrasi Berdampak, Kementerian PANRB
                                                Lakukan Pembinaan
                                                Kepada Pelayanan Publik</h5>
                                            <p class="card-text date">15 November 2023 | 12:11</p>
                                        </div>
                                    </div>
                                    <div class="card card-inovasi col p-0">
                                        <img src="{{ asset('assets/images/berita-utama.png') }}" class="card-img-top"
                                            alt="..."
                                            style="border-top-left-radius: 20px; border-top-right-radius: 20px">
                                        <div class="card-body">
                                            <h5 class="card-title">Optimalkan Layanan Publik untuk WNI, Kementerian
                                                PANRB Terjag KBRI</h5>
                                            <p class="card-text date">09 November 2023 | 11:11</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inovasi-unggulan d-flex flex-column justify-content-center align-items-center py-5">
                        <div class="pl-2" style="width: 75%">
                            <div id="carouselExampleControls" class="carousel carousel-dark slide p-0"
                                data-bs-ride="carousel">
                                <div class="carousel-inner p-0">
                                    <div class="carousel-item active">
                                        <div class="card-wrapper container-sm d-flex justify-content-around p-0">
                                            <div class="row w-100 gap-4">
                                                <div class="card card-inovasi col p-0">
                                                    <img src="{{ asset('assets/images/berita-utama.png') }}"
                                                        class="card-img-top" alt="..."
                                                        style="border-top-left-radius: 20px; border-top-right-radius: 20px">
                                                    <div class="card-body">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Telemedicine #SayDOC (Isu Utama
                                                                negara dan Dunia)
                                                            </h5>
                                                            <p class="card-text date">23 December 2023 | 03:12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-inovasi col p-0">
                                                    <img src="{{ asset('assets/images/berita-utama.png') }}"
                                                        class="card-img-top" alt="..."
                                                        style="border-top-left-radius: 20px; border-top-right-radius: 20px">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Kementerian PANRB Akan Sertakan Anggaran
                                                            Pelayanan
                                                            Publik Lunusudan JIPPNB,
                                                            dan Realisasi 12 MPP</h5>
                                                        <p class="card-text date">22 November 2023 | 06:11</p>
                                                    </div>
                                                </div>
                                                <div class="card card-inovasi col p-0">
                                                    <img src="{{ asset('assets/images/berita-utama.png') }}"
                                                        class="card-img-top" alt="..."
                                                        style="border-top-left-radius: 20px; border-top-right-radius: 20px">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Pacu Reformasi Birokrasi Berdampak,
                                                            Kementerian PANRB
                                                            Lakukan Pembinaan
                                                            Kepada Pelayanan Publik</h5>
                                                        <p class="card-text date">15 November 2023 | 12:11</p>
                                                    </div>
                                                </div>
                                                <div class="card card-inovasi col p-0">
                                                    <img src="{{ asset('assets/images/berita-utama.png') }}"
                                                        class="card-img-top" alt="..."
                                                        style="border-top-left-radius: 20px; border-top-right-radius: 20px">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Optimalkan Layanan Publik untuk WNI,
                                                            Kementerian
                                                            PANRB Terjag KBRI</h5>
                                                        <p class="card-text date">09 November 2023 | 11:11</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        </div>
    </div>
    <div class="berita d-flex flex-column justify-content-center align-items-center py-5">
        <div class="" style="width: 75%">
            <div class="row row-gap-3">
                <div class="col-md-3 col-sm-4 col-12">
                    <div class="card">
                        <img src="{{ asset('assets/images/berita-utama.png') }}" class="card-img-top w-100 p-0"
                            alt="...">
                        <div class="card-body">
                            <p class="m-0">
                                <i>#umum</i>
                            </p>
                            <a href="https://jippnas.menpan.go.id/profile/berita/16" class="card-title">Telemedicine #SayDOC (Satu Layar Ngobrol dengan Dokter)</a>
                            <p class="card-text date">09 November 2023 | 11:11</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-12">
                    <div class="card">
                        <img src="{{ asset('assets/images/berita-2.png') }}" class="card-img-top w-100 p-0"
                            alt="...">
                        <div class="card-body">
                            <p class="m-0">
                                <i>#umum</i>
                            </p>
                            <a href="https://menpan.go.id/site/berita-terkini/kementerian-panrb-akan-serahkan-anugerah-pelayanan-publik-luncurkan-jippnas-dan-resmikan-12-mpp" class="card-title">Kementerian PANRB Akan Serahkan Anugerah Pelayanan Publik, Luncurkan JIPPNas, dan Resmikan 12 MPP</a>
                            <p class="card-text date">09 November 2023 | 11:11</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-12">
                    <div class="card">
                        <img src="{{ asset('assets/images/berita-3.png') }}" class="card-img-top w-100 p-0"
                            alt="...">
                        <div class="card-body">
                            <p class="m-0">
                                <i>#umum</i>
                            </p>
                            <a href="https://jippnas.menpan.go.id/profile/berita/9" class="card-title">Pacu Reformasi Birokrasi Berdampak, Kementerian PANRB Lakukan Pembinaan Inovasi Pelayanan Publik</a>
                            <p class="card-text date">09 November 2023 | 11:11</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-12">
                    <div class="card">
                        <img src="{{ asset('assets/images/berita-4.png') }}" class="card-img-top w-100 p-0"
                            alt="...">
                        <div class="card-body">
                            <p class="m-0">
                                <i>#umum</i>
                            </p>
                            <a href="https://menpan.go.id/site/berita-terkini/optimalkan-layanan-publik-untuk-wni-kementerian-panrb-tinjau-kbri-wellington" class="card-title">Optimalkan Layanan Publik untuk WNI, Kementerian PANRB Tinjau KBRI Wellington</a>
                            <p class="card-text date">09 November 2023 | 11:11</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-12">
                    <div class="card">
                        <img src="{{ asset('assets/images/berita-5.png') }}" class="card-img-top w-100 p-0"
                            alt="...">
                        <div class="card-body">
                            <p class="m-0">
                                <i>#umum</i>
                            </p>
                            <a href="https://jippnas.menpan.go.id/profile/berita/7" class="card-title">Anugerah Layanan Investasi 2023</a>
                            <p class="card-text date">09 November 2023 | 11:11</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-12">
                    <div class="card">
                        <img src="{{ asset('assets/images/berita-6.png') }}" class="card-img-top w-100 p-0"
                            alt="...">
                        <div class="card-body">
                            <p class="m-0">
                                <i>#umum</i>
                            </p>
                            <a href="https://jippnas.menpan.go.id/profile/berita/6" class="card-title">Rapat Penataan Organisasi Lembaga Administrasi Negara</a>
                            <p class="card-text date">09 November 2023 | 11:11</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-12">
                    <div class="card">
                        <img src="{{ asset('assets/images/berita-7.png') }}" class="card-img-top w-100 p-0"
                            alt="...">
                        <div class="card-body">
                            <p class="m-0">
                                <i>#umum</i>
                            </p>
                            <a href="https://jippnas.menpan.go.id/profile/berita/5" class="card-title">Rapat Penetapan Rancangan Perpres Kementerian Hukum dan HAM</a>
                            <p class="card-text date">09 November 2023 | 11:11</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-12">
                    <div class="card">
                        <img src="{{ asset('assets/images/berita-8.png') }}" class="card-img-top w-100 p-0"
                            alt="...">
                        <div class="card-body">
                            <p class="m-0">
                                <i>#umum</i>
                            </p>
                            <a href="https://jippnas.menpan.go.id/profile/berita/4" class="card-title">Lepas Ekspor Tuna dan Pemberian Bantuan untuk Nelayan Biak Numfor</a>
                            <p class="card-text date">09 November 2023 | 11:11</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-md-row flex-column justify-content-between align-items-center mt-4">
                <p style="color: #6C757D">
                    Showing 1 to 8 of 2 result
                </p>
                <div>
                    <nav aria-label="" class="paginate">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item" aria-current="page">
                                <span class="page-link">2</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
