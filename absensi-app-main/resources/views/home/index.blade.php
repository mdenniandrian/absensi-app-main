@extends('layouts.home')

@section('content')
    <div class="container py-5">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="row">
            <div class="col-md-8">
                <div class="card shadow-sm mb-2">
                    <div class="card-header text-center fw-bold">
                        Daftar Absensi Hari Ini
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($attendances as $attendance)
                                <a href="{{ route('home.show', $attendance->id) }}"
                                    class="list-group-item d-flex justify-content-between align-items-start py-3">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">{{ $attendance->title }}</div>
                                        <p class="mb-0">{{ $attendance->description }}</p>
                                    </div>
                                    @include('partials.attendance-badges')
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header text-center fw-bold">
                        Informasi Karyawan
                    </div>
                    <div class="card-body">
                        <ul class="ps-3">
                            <div class="mb-1 text-center">
                                @if (Auth::user()->gambar == null)
                                    <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}">
                                @else
                                    <img src="{{ asset('images/avatar/' . Auth::user()->gambar) }}" width="100px" class="rounded-5">
                                @endif
                            </div>
                            <div class="mb-3 text-center">
                                <span class="fw-bold text-decoration-underline">{{ auth()->user()->name }}</span>
                            </div>
                            <li class="mb-1">
                                <span class="fw-bold d-block">Username:</span>
                                <span class="">{{ auth()->user()->username }}</span>
                            </li>
                            <li class="mb-1">
                                <span class="fw-bold d-block">Email : </span>
                                <a href="mailto:{{ auth()->user()->email }}">{{ auth()->user()->email }}</a>
                            </li>
                            <li class="mb-1">
                                <span class="fw-bold d-block">No. Telp : </span>
                                <a href="tel:{{ auth()->user()->phone }}">{{ auth()->user()->phone }}</a>
                            </li>
                            <li class="mb-1">
                                <span class="fw-bold d-block">Bergabung Pada : </span>
                                <span>{{ auth()->user()->created_at->diffForHumans() }}
                                    ({{ auth()->user()->created_at->format('d M Y') }})</span>
                            </li>
                        </ul>
                        <form action="{{ route('home.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Change Password</label>
                                <input type="text" class="form-control" name="password"
                                    placeholder="Change Your Password ... ">
                            </div>
                            <div class="form-group">
                                <label for="">Upload Foto</label>
                                <input type="file" class="form-control" name="gambar" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
