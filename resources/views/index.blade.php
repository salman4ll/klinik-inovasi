@extends('layouts.app')

@section('content')
    @include('components/carousel')
    <div class="etalase-inovasi flex flex-column py-5 text-center">
        <h1>Inovasi Kabupaten Bogor</h1>
        <p>*sampai saat ini</p>
        <div class="d-flex justify-content-center">
            <div class="row" style="width: 70%">
                <div class="col">
                    <img src="{{ asset('assets/images/etalase-1.png') }}" alt="" width="60" class="mb-2">
                    <h1>321</h1>
                    <h5>Instansi</h5>
                </div>
                <div class="col">
                    <img src="{{ asset('assets/images/etalase-1.png') }}" alt="" width="60" class="mb-2">
                    <h1>2929</h1>
                    <h5>Inovasi</h5>
                </div>
                <div class="col">
                    <img src="{{ asset('assets/images/etalase-1.png') }}" alt="" width="60" class="mb-2">
                    <h1>21012</h1>
                    <h5>SDG'S</h5>
                </div>
            </div>
        </div>
    </div>    
@endsection
