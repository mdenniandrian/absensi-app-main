@extends('layouts.auth')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endpush

@section('content')
<div class="w-100 d-flex justify-content-center" style="background-image:url('{{ asset('storage/cibitung-plant.png') }}')">

    <main class="card form-signin w-100 m-auto m-sm-auto m-lg-2 shadow">
        <form method="POST" action="{{ route('auth.login') }}" id="login-form">
            <div class="text-center mb-3">
                <img src="{{ asset('storage/sugitylogo.png') }}" alt="Sugity Logo" class="mx-auto d-block" style="width: 100px;">
            </div>
            <h3 class="mb-3 text-center">Selamat Datang</h3>
            <h1 class="h3 mb-3 text-center"><strong class="text-success">SUGITY <span class="text-warning">CREATIVES</span></strong></h1>
            <h6 class="text-center py-1 rounded">LOGIN</h6>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputName" name="username" placeholder="Cth: Muhammad Denni Andrian">
                <label for="floatingInputName">Username</label>
            </div>
            <div class="form-floating mt-2">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password (NIK Karyawan)</label>
            </div>

            {{-- <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="flexCheckRemember">
                <label class="form-check-label" for="flexCheckRemember">
                    Ingatkan Saya di Perangkat ini
                </label>
            </div> --}}

            <button class="w-100 btn btn-primary" type="submit" id="login-form-button">Masuk</button>
            <p class="mt-5 mb-3 text-muted text-center">&copy; {{ date ('Y') }}. PT Sugity Creatives. All Right Reserved.</p>
        </form>
    </main>

    <div class="my-auto mx-2">

    </div>

</div>

@endsection

@push('script')
    <script type="module" src="{{ asset('js/auth/login.js') }}"></script>
@endpush
