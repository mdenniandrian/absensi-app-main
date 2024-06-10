@extends('layouts.base')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endpush

@section('base')
    @include('partials.navbar')
    @if (auth()->user()->isAdmin() or
            auth()->user()->isOperator())
        <div class="container-fluid">
            <div class="row">
                @include('partials.sidebar')

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @else
                    <div class="container py-5">
    @endif

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $title }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div>
                <a href="{{ route('problem.create') }}" class="btn btn-sm btn-primary">
                    <span data-feather="plus-circle" class="align-text-bottom me-1"></span>
                    Tambah Data Problem
                </a>
            </div>
        </div>
    </div>

    <div class="">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th scope="col">NO</th>
                    <th scope="col">IMAGES</th>
                    <th scope="col">TYPE</th>
                    <th scope="col">PROBLEM</th>
                    <th scope="col">CAUSE</th>
                    <th scope="col">COUNTERMEASURE</th>
                    <th scope="col">LOCATION JOBS</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">PIC</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($problems as $idx => $pro)
                    <tr class="">
                        <th scope="row" class="text-center">{{ ++$idx }}</th>
                        <td> <img src="{{ asset('images/problem/' . $pro->gambar) }}" width="150px" alt="">
                        </td>
                        <td>{{ $pro->type }}</td>
                        <td>{{ $pro->problems }}</td>
                        <td>{{ $pro->cause }}</td>
                        <td>{{ $pro->solved }}</td>
                        <td>{{ $pro->loc_jobs }}</td>
                        <td
                            class="text-center text-xs px-4 py-2 font-extrabold border
                                        @if ($pro->status === 'OK') text-success
                                        @elseif($pro->status === 'On Progress')
                                            text-primary
                                        @else
                                            text-danger @endif">
                            {{ $pro->status }}
                        </td>

                        <td>{{ $pro->pic }}</td>
                        <td class="text-center">
                            <a href="/problem/edit/{{ $pro->id }}" class="" type="submit" class="btn-warning">
                                Edit
                            </a>
                            <a onclick="confirmDelete('{{ $pro->id }}')" href="/problem/delete/{{ $pro->id }}"
                                type="submit" class="btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </main>
    </div>
    </div>
@endsection
