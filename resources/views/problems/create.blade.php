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
        <form action="/problem/save" method="POST" id="myForm" enctype="multipart/form-data">
            @csrf
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="type" class="form-label">Type <span style="color: red;">*</span></label>
                    <select name="type" class="form-select" required>
                        <option value="">--Pilih Type--</option>
                        <option value="Man">Man</option>
                        <option value="Material">Material</option>
                        <option value="Machine">Machine</option>
                        <option value="Method">Method</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="problems" class="form-label">Problem <span style="color: red;">*</span></label>
                    <input type="text" name="problems" class="form-control" placeholder="Input Problem" required>
                </div>
                <div class="col-md-6">
                    <label for="cause" class="form-label">Cause/Who <span style="color: red;">*</span></label>
                    <input type="text" name="cause" class="form-control" placeholder="Input Reason" required>
                </div>
                <div class="col-md-6">
                    <label for="solved" class="form-label">Solved/Changed <span style="color: red;">*</span></label>
                    <input type="text" name="solved" class="form-control" placeholder="Input Solved" required>
                </div>
                <div class="col-md-6">
                    <label for="loc_jobs" class="form-label">Location Jobs <span style="color: red;">*</span></label>
                    <select name="loc_jobs" class="form-select" required>
                        <option value="">--Pilih Location Jobs--</option>
                        <option value="DOCK 48">DOCK 48</option>
                        <option value="ADM ASSY 1&2">ADM ASSY 1&2</option>
                        <option value="ADM ASSY 3">ADM ASSY 3</option>
                        <option value="JUNBIKI 560B">JUNBIKI 560B</option>
                        <option value="JUNBIKI TMMIN 1">JUNBIKI TMMIN 1</option>
                        <option value="HINO,DENSO,HPM">HINO,DENSO,HPM</option>
                        <option value="DOORTRIM DEPO">DOORTRIM DEPO</option>
                        <option value="PRINT KANBAN">PRINT KANBAN</option>
                        <option value="JUNBIKI TMMIN 2">JUNBIKI TMMIN 2</option>
                        <option value="TBINA">TBINA</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="status" class="form-label">Status <span style="color: red;">*</span></label>
                    <select name="status" class="form-select" required>
                        <option value="">--Pilih Status--</option>
                        <option value="OK">OK</option>
                        <option value="On Progress">On Progress</option>
                        <option value="Pending">Pending</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="pic" class="form-label">PIC <span style="color: red;">*</span></label>
                <input type="text" name="pic" class="form-control" placeholder="Input PIC Section" required>
            </div>
            <div class="mb-3">
                <label for="pic" class="form-label">Upload Image<span style="color: black;">**</span></label>
                <input type="file" name="gambar" accept="image/*" class="form-control" placeholder="Input Image">
            </div>
            <p><span style="color: red;">*</span> Wajib diisi.</p>
            <p>**NB: Tambahkan foto kejadian bila diperlukan dan tidak wajib diisi.</p>
            <div class="py-5 mb-5">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
