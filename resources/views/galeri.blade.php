@extends('layouts.app')
@section('content')
    <style>
        body {
            color: #009b1a;
        }
    </style>
    <div class="py-4 bg-white d-flex flex-column align-items-center">
        <div class="d-flex flex-row gap-3" style="width: 75%">
            <input type="text" class="form-control mb-2" placeholder="Masukkan kata/kalimat pencarian">
            <input type="text" class="form-control mb-2" placeholder="Bentuk inovasi">
            <select name="" id="" class="form-control mb-2">
                <option value="">Pilih Kategori SDG's</option>
                <option value="">Kategori 1</option>
                <option value="">Kategori 2</option>
                <option value="">Kategori 3</option>
            </select>
            <input type="text" class="form-control mb-2" placeholder="Instansi">
            <button class="btn btn-success mb-2" style="width: 120%">Cari</button>
        </div>
        <div class="mt-5" style="width: 70%">
            <h3>Sustainable Development Goals</h3>
            <hr class="gradient-hr" style="width: 30%;">
            <div class="d-flex flex-row justify-content-center gap-5">
                <img src="{{ asset('assets/images/icon-1.png') }}" alt="" style="width: 10%">
                <img src="{{ asset('assets/images/icon-2.png') }}" alt="" style="width: 10%">
                <img src="{{ asset('assets/images/icon-3.png') }}" alt="" style="width: 10%">
                <img src="{{ asset('assets/images/icon-4.png') }}" alt="" style="width: 10%">
                <img src="{{ asset('assets/images/icon-5.png') }}" alt="" style="width: 10%">
                <img src="{{ asset('assets/images/icon-6.png') }}" alt="" style="width: 10%">
            </div>
            <div class="d-flex flex-row justify-content-center gap-5">
                <img src="{{ asset('assets/images/icon-1.png') }}" alt="" style="width: 10%">
                <img src="{{ asset('assets/images/icon-2.png') }}" alt="" style="width: 10%">
                <img src="{{ asset('assets/images/icon-3.png') }}" alt="" style="width: 10%">
                <img src="{{ asset('assets/images/icon-4.png') }}" alt="" style="width: 10%">
                <img src="{{ asset('assets/images/icon-5.png') }}" alt="" style="width: 10%">
                <img src="{{ asset('assets/images/icon-6.png') }}" alt="" style="width: 10%">
            </div>
            <div class="d-flex flex-row justify-content-center gap-5">
                <img src="{{ asset('assets/images/icon-1.png') }}" alt="" style="width: 10%">
                <img src="{{ asset('assets/images/icon-2.png') }}" alt="" style="width: 10%">
                <img src="{{ asset('assets/images/icon-3.png') }}" alt="" style="width: 10%">
                <img src="{{ asset('assets/images/icon-4.png') }}" alt="" style="width: 10%">
                <img src="{{ asset('assets/images/icon-5.png') }}" alt="" style="width: 10%">
            </div>
        </div>
    </div>
    <div class="daftar-inovasi py-4 d-flex flex-column align-items-center">
        <div class="" style="width: 75%">
            <div class="d-flex flex-row justify-content-between">
                <div>
                    <h3>Daftar Inovasi</h3>
                    <hr class="gradient-hr" style="width: 80%;">
                </div>
                <div>
                    <button class="btn btn-success">Lihat Semua</button>
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel carousel-dark slide p-0" data-bs-ride="carousel">
                <div class="carousel-inner p-0">
                    <div class="carousel-item active">
                        <div class="card-wrapper container-sm d-flex justify-content-around p-0">
                            <div class="row w-100 gap-4">
                                <div class="card card-daftar-inovasi col p-0">
                                    <img src="{{ asset('assets/images/berita-utama.png') }}" class="card-img-top"
                                        alt="..." style="border-top-left-radius: 10px; border-top-right-radius: 10px">
                                    <div class="card-body">
                                        <p class="inovasi-card-title">Pelindo I</p>
                                    </div>
                                </div>
                                <div class="card card-daftar-inovasi col p-0">
                                    <img src="{{ asset('assets/images/berita-utama.png') }}" class="card-img-top"
                                        alt="..."
                                        style="border-top-left-radius: 10px; border-top-right-radius: 10px">
                                    <div class="card-body">
                                        <p class="inovasi-card-title">Pelindo II</p>
                                    </div>
                                </div>
                                <div class="card card-daftar-inovasi col p-0">
                                    <img src="{{ asset('assets/images/berita-utama.png') }}" class="card-img-top"
                                        alt="..."
                                        style="border-top-left-radius: 10px; border-top-right-radius: 10px">
                                    <div class="card-body">
                                        <p class="inovasi-card-title">Pelindo III</p>
                                    </div>
                                </div>
                                <div class="card card-daftar-inovasi col p-0">
                                    <img src="{{ asset('assets/images/berita-utama.png') }}" class="card-img-top"
                                        alt="..."
                                        style="border-top-left-radius: 10px; border-top-right-radius: 10px">
                                    <div class="card-body">
                                        <p class="inovasi-card-title">Pelindo IV</p>
                                    </div>
                                </div>
                                <div class="card card-daftar-inovasi col p-0">
                                    <img src="{{ asset('assets/images/berita-utama.png') }}" class="card-img-top"
                                        alt="..."
                                        style="border-top-left-radius: 10px; border-top-right-radius: 10px">
                                    <div class="card-body">
                                        <p class="inovasi-card-title">Pelindo V</p>
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
    <div class="inovasi-pelayanan bg-white d-flex flex-column justify-content-center align-items-center py-5">
        <div class="pl-2" style="width: 75%">
            <h4 class="text-start">Inovasi Pelayanan Publik</h4>
            <hr class="gradient-hr" style="width: 20%;">
            <div id="carouselExampleControls" class="carousel carousel-dark slide p-0" data-bs-ride="carousel">
                <div class="carousel-inner p-0">
                    <div class="carousel-item active">
                        <div class="card-wrapper container-sm d-flex justify-content-around p-0">
                            <div class="row w-100 gap-4">
                                <div class="card card-inovasi col p-0">
                                    <img src="{{ asset('assets/images/inovasi-pelayanan-1.png') }}" class="card-img-top"
                                        alt="..."
                                        style="border-top-left-radius: 20px; border-top-right-radius: 20px">
                                    <div class="card-body mb-3">
                                        <p class="inovasi-card-title">Pelayanan Kekonsuleran Terpadu</p>
                                        <div class="d-flex flex-row align-items-center gap-2">
                                            <svg width="11" height="13" viewBox="0 0 11 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.38125 6.45195C3.67559 6.45195 2.30625 5.08262 2.30625 3.37695C2.30625 1.69531 3.67559 0.301953 5.38125 0.301953C7.06289 0.301953 8.45625 1.69531 8.45625 3.37695C8.45625 5.08262 7.06289 6.45195 5.38125 6.45195ZM7.51934 7.2207C9.29707 7.2207 10.7625 8.68613 10.7625 10.4639V11.4488C10.7625 12.0975 10.234 12.602 9.60938 12.602H1.15313C0.504492 12.602 0 12.0975 0 11.4488V10.4639C0 8.68613 1.44141 7.2207 3.21914 7.2207H3.62754C4.15605 7.48496 4.75664 7.60508 5.38125 7.60508C6.00586 7.60508 6.58242 7.48496 7.11094 7.2207H7.51934Z"
                                                    fill="#2A2A2A" />
                                            </svg>
                                            <p class="inovasi-card-text mb-1">
                                                Dyah Lestari Asmarani
                                            </p>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="card card-inovasi col p-0">
                                    <img src="{{ asset('assets/images/inovasi-pelayanan-1.png') }}" class="card-img-top"
                                        alt="..."
                                        style="border-top-left-radius: 20px; border-top-right-radius: 20px">
                                    <div class="card-body mb-3">
                                        <p class="inovasi-card-title">Pelayanan Kekonsuleran Terpadu</p>
                                        <div class="d-flex flex-row align-items-center gap-2">
                                            <svg width="11" height="13" viewBox="0 0 11 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.38125 6.45195C3.67559 6.45195 2.30625 5.08262 2.30625 3.37695C2.30625 1.69531 3.67559 0.301953 5.38125 0.301953C7.06289 0.301953 8.45625 1.69531 8.45625 3.37695C8.45625 5.08262 7.06289 6.45195 5.38125 6.45195ZM7.51934 7.2207C9.29707 7.2207 10.7625 8.68613 10.7625 10.4639V11.4488C10.7625 12.0975 10.234 12.602 9.60938 12.602H1.15313C0.504492 12.602 0 12.0975 0 11.4488V10.4639C0 8.68613 1.44141 7.2207 3.21914 7.2207H3.62754C4.15605 7.48496 4.75664 7.60508 5.38125 7.60508C6.00586 7.60508 6.58242 7.48496 7.11094 7.2207H7.51934Z"
                                                    fill="#2A2A2A" />
                                            </svg>
                                            <p class="inovasi-card-text mb-1">
                                                Dyah Lestari Asmarani
                                            </p>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="card card-inovasi col p-0">
                                    <img src="{{ asset('assets/images/inovasi-pelayanan-1.png') }}" class="card-img-top"
                                        alt="..."
                                        style="border-top-left-radius: 20px; border-top-right-radius: 20px">
                                    <div class="card-body mb-3">
                                        <p class="inovasi-card-title">Pelayanan Kekonsuleran Terpadu</p>
                                        <div class="d-flex flex-row align-items-center gap-2">
                                            <svg width="11" height="13" viewBox="0 0 11 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.38125 6.45195C3.67559 6.45195 2.30625 5.08262 2.30625 3.37695C2.30625 1.69531 3.67559 0.301953 5.38125 0.301953C7.06289 0.301953 8.45625 1.69531 8.45625 3.37695C8.45625 5.08262 7.06289 6.45195 5.38125 6.45195ZM7.51934 7.2207C9.29707 7.2207 10.7625 8.68613 10.7625 10.4639V11.4488C10.7625 12.0975 10.234 12.602 9.60938 12.602H1.15313C0.504492 12.602 0 12.0975 0 11.4488V10.4639C0 8.68613 1.44141 7.2207 3.21914 7.2207H3.62754C4.15605 7.48496 4.75664 7.60508 5.38125 7.60508C6.00586 7.60508 6.58242 7.48496 7.11094 7.2207H7.51934Z"
                                                    fill="#2A2A2A" />
                                            </svg>
                                            <p class="inovasi-card-text mb-1">
                                                Dyah Lestari Asmarani
                                            </p>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>                    
                    <div class="carousel-item">
                        <div class="card-wrapper container-sm d-flex justify-content-around p-0">
                            <div class="row w-100 gap-4">
                                <div class="card card-inovasi col p-0">
                                    <img src="{{ asset('assets/images/inovasi-pelayanan-1.png') }}" class="card-img-top"
                                        alt="..."
                                        style="border-top-left-radius: 20px; border-top-right-radius: 20px">
                                    <div class="card-body mb-3">
                                        <p class="inovasi-card-title">Pelayanan Kekonsuleran Terpadu</p>
                                        <div class="d-flex flex-row align-items-center gap-2">
                                            <svg width="11" height="13" viewBox="0 0 11 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.38125 6.45195C3.67559 6.45195 2.30625 5.08262 2.30625 3.37695C2.30625 1.69531 3.67559 0.301953 5.38125 0.301953C7.06289 0.301953 8.45625 1.69531 8.45625 3.37695C8.45625 5.08262 7.06289 6.45195 5.38125 6.45195ZM7.51934 7.2207C9.29707 7.2207 10.7625 8.68613 10.7625 10.4639V11.4488C10.7625 12.0975 10.234 12.602 9.60938 12.602H1.15313C0.504492 12.602 0 12.0975 0 11.4488V10.4639C0 8.68613 1.44141 7.2207 3.21914 7.2207H3.62754C4.15605 7.48496 4.75664 7.60508 5.38125 7.60508C6.00586 7.60508 6.58242 7.48496 7.11094 7.2207H7.51934Z"
                                                    fill="#2A2A2A" />
                                            </svg>
                                            <p class="inovasi-card-text mb-1">
                                                Dyah Lestari Asmarani
                                            </p>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="card card-inovasi col p-0">
                                    <img src="{{ asset('assets/images/inovasi-pelayanan-1.png') }}" class="card-img-top"
                                        alt="..."
                                        style="border-top-left-radius: 20px; border-top-right-radius: 20px">
                                    <div class="card-body mb-3">
                                        <p class="inovasi-card-title">Pelayanan Kekonsuleran Terpadu</p>
                                        <div class="d-flex flex-row align-items-center gap-2">
                                            <svg width="11" height="13" viewBox="0 0 11 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.38125 6.45195C3.67559 6.45195 2.30625 5.08262 2.30625 3.37695C2.30625 1.69531 3.67559 0.301953 5.38125 0.301953C7.06289 0.301953 8.45625 1.69531 8.45625 3.37695C8.45625 5.08262 7.06289 6.45195 5.38125 6.45195ZM7.51934 7.2207C9.29707 7.2207 10.7625 8.68613 10.7625 10.4639V11.4488C10.7625 12.0975 10.234 12.602 9.60938 12.602H1.15313C0.504492 12.602 0 12.0975 0 11.4488V10.4639C0 8.68613 1.44141 7.2207 3.21914 7.2207H3.62754C4.15605 7.48496 4.75664 7.60508 5.38125 7.60508C6.00586 7.60508 6.58242 7.48496 7.11094 7.2207H7.51934Z"
                                                    fill="#2A2A2A" />
                                            </svg>
                                            <p class="inovasi-card-text mb-1">
                                                Dyah Lestari Asmarani
                                            </p>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="card card-inovasi col p-0">
                                    <img src="{{ asset('assets/images/inovasi-pelayanan-1.png') }}" class="card-img-top"
                                        alt="..."
                                        style="border-top-left-radius: 20px; border-top-right-radius: 20px">
                                    <div class="card-body mb-3">
                                        <p class="inovasi-card-title">Pelayanan Kekonsuleran Terpadu</p>
                                        <div class="d-flex flex-row align-items-center gap-2">
                                            <svg width="11" height="13" viewBox="0 0 11 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.38125 6.45195C3.67559 6.45195 2.30625 5.08262 2.30625 3.37695C2.30625 1.69531 3.67559 0.301953 5.38125 0.301953C7.06289 0.301953 8.45625 1.69531 8.45625 3.37695C8.45625 5.08262 7.06289 6.45195 5.38125 6.45195ZM7.51934 7.2207C9.29707 7.2207 10.7625 8.68613 10.7625 10.4639V11.4488C10.7625 12.0975 10.234 12.602 9.60938 12.602H1.15313C0.504492 12.602 0 12.0975 0 11.4488V10.4639C0 8.68613 1.44141 7.2207 3.21914 7.2207H3.62754C4.15605 7.48496 4.75664 7.60508 5.38125 7.60508C6.00586 7.60508 6.58242 7.48496 7.11094 7.2207H7.51934Z"
                                                    fill="#2A2A2A" />
                                            </svg>
                                            <p class="inovasi-card-text mb-1">
                                                Dyah Lestari Asmarani
                                            </p>
                                        </div>
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
    <div class="kategori-instansi py-4 d-flex flex-column align-items-center">
        <h4>Kategori Instansi</h4>
        <hr class="gradient-hr" style="width: 25%;">
        <div class="row d-flex flex-row justify-content-center gap-3" style="width: 75%;">
            <div class="col-3 bg-white p-5 d-flex flex-column justify-content-center align-items-center gap-2" style="border-radius:5px">
                <img src="{{ asset('assets/images/skpd.png') }}" alt="" style="height: 50%">
                <p>
                    SKPD
                </p>
            </div>            
            <div class="col-3 bg-white p-5 d-flex flex-column justify-content-center align-items-center gap-2" style="border-radius:5px">
                <img src="{{ asset('assets/images/kecamatan.png') }}" alt="" style="height: 50%">
                <p>
                    Kecamatan
                </p>
            </div>            
            <div class="col-3 bg-white p-5 d-flex flex-column justify-content-center align-items-center gap-2" style="border-radius:5px">
                <img src="{{ asset('assets/images/skpd.png') }}" alt="" style="height: 50%">
                <p>
                    Puskesmas
                </p>
            </div>            
        </div>
    </div>
@endsection
