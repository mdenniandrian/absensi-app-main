@extends('layouts.app')

@section('buttons')
    <div class="btn-toolbar mb-2 mb-md-0">
        <div>
            <a href="/problem" class="btn btn-sm btn-light">
                <span class="align-text-bottom">&#8592;</span>
                Kembali
            </a>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <form action="/problem/update/{{ $problems->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="type" class="form-label">Type</label>
                    <select name="type" class="form-select" required>
                        <option value="">--Pilih Type--</option>
                        <option value="Man" {{ $problems->type == 'Man' ? 'selected' : '' }}>Man</option>
                        <option value="Material" {{ $problems->type == 'Material' ? 'selected' : '' }}>Material</option>
                        <option value="Machine" {{ $problems->type == 'Machine' ? 'selected' : '' }}>Machine</option>
                        <option value="Method" {{ $problems->type == 'Method' ? 'selected' : '' }}>Method</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="problems" class="form-label">Problem</label>
                    <input type="text" name="problems" class="form-control" value="{{ $problems->problems }}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="cause" class="form-label">Cause/Who</label>
                    <input type="text" name="cause" class="form-control" value="{{ $problems->cause }}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="solved" class="form-label">Solved/Changed</label>
                    <input type="text" name="solved" class="form-control" value="{{ $problems->solved }}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="loc_jobs" class="form-label">Location Jobs</label>
                    <select name="loc_jobs" class="form-select">
                        <option value="">--Pilih Location Jobs--</option>
                        <option value="DOCK 48" {{ $problems->loc_jobs == 'DOCK 48' ? 'selected' : '' }}>DOCK 48</option>
                        <option value="ADM ASSY 1&2" {{ $problems->loc_jobs == 'ADM ASSY 1&2' ? 'selected' : '' }}>ADM ASSY
                            1&2</option>
                        <option value="ADM ASSY 3" {{ $problems->loc_jobs == 'ADM ASSY 3' ? 'selected' : '' }}>ADM ASSY 3
                        </option>
                        <option value="JUNBIKI 560B" {{ $problems->loc_jobs == 'JUNBIKI 560B' ? 'selected' : '' }}>JUNBIKI
                            560B</option>
                        <option value="JUNBIKI TMMIN 1" {{ $problems->loc_jobs == 'JUNBIKI TMMIN 1' ? 'selected' : '' }}>
                            JUNBIKI TMMIN 1</option>
                        <option value="HINO,DENSO,HPM" {{ $problems->loc_jobs == 'HINO,DENSO,HPM' ? 'selected' : '' }}>
                            HINO,DENSO,HPM</option>
                        <option value="DOORTRIM DEPO" {{ $problems->loc_jobs == 'DOORTRIM DEPO' ? 'selected' : '' }}>
                            DOORTRIM DEPO</option>
                        <option value="PRINT KANBAN" {{ $problems->loc_jobs == 'PRINT KANBAN' ? 'selected' : '' }}>PRINT
                            KANBAN</option>
                        <option value="JUNBIKI TMMIN 2" {{ $problems->loc_jobs == 'JUNBIKI TMMIN 2' ? 'selected' : '' }}>
                            JUNBIKI TMMIN 2</option>
                        <option value="TBINA" {{ $problems->loc_jobs == 'TBINA' ? 'selected' : '' }}>TBINA</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" class="form-select">
                        <option value="">--Pilih Status--</option>
                        <option value="OK" {{ $problems->status == 'OK' ? 'selected' : '' }}>OK</option>
                        <option value="On Progress" {{ $problems->status == 'On Progress' ? 'selected' : '' }}>On Progress
                        </option>
                        <option value="Pending" {{ $problems->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                    </select>
                </div>
                <div class="mb-3 form-group col-md-6">
                    <label for="pic" class="form-label">PIC</label>
                    <input type="text" name="pic" class="form-control" value="{{ $problems->pic }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="pic" class="form-label">Upload Image</label>
                    <input type="file" name="gambar" accept="image/*" class="form-control" placeholder="Input Image">
                </div>
            </div>
            <span>NB: <strong>HANYA DIPERBOLEHKAN MENGEDIT STATUS, APABILA SUDAH "SELESAI" GANTI STATUS MENJADI <span
                        class="text-success">"OK"</span></strong></span>

            <div class="py-5 mb-5">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
