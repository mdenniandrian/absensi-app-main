<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use App\Models\RProblem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Hash;

class ProblemController extends Controller
{
    // Menampilkan daftar problems
    public function index()
    {
        $problems = Problem::all(); //
        if ($problems->isEmpty()) {
            session()->flash('message', 'Tidak ada Problems!');
        }
        return view('problems.index', [
            "title" => "Problems"
        ], compact('problems'));
    }

    // Menampilkan form untuk membuat problem baru
    public function create()
    {
        return view('problems.create', [
            "title" => "Tambah Data Problems"
        ]);
    }

    // Menyimpan problem baru ke dalam database
    public function saveform(Request $p)
    {

        if ($p->file('gambar') != null) {
            $file = $p->file('gambar');
            $eks = $file->getClientOriginalExtension();
            $generate = Hash::make(time() .  $file->getClientOriginalName());
            $name = substr($generate, 0, 20);
            $nameFile = $name . '.' . $eks;
            $p->file('gambar')->move(public_path('images/problem'), $nameFile);
        } else {
            $nameFile = '';
        }

        Problem::create([
            'type' => $p->type,
            'problems' => $p->problems,
            'cause' => $p->cause,
            'solved' => $p->solved,
            'loc_jobs' => $p->loc_jobs,
            'status' => $p->status,
            'pic' => $p->pic,
            'gambar' => $nameFile,
            // 'updated_at' => $p->updated_at
        ]);
        if ($p->status == 'On Progress' || $p->status == 'Pending') {
            RProblem::create([
                'type' => $p->type,
                'problems' => $p->problems,
                'cause' => $p->cause,
                'solved' => $p->solved,
                'loc_jobs' => $p->loc_jobs,
                'status' => $p->status,
                'pic' => $p->pic,
                'date' => now()->format('Y-m-d') // Error
            ]);
            // dd($p->all());
        }
        return redirect('/problem?notification=success')->with('flash', 'Data Berhasil di Simpan',);
    }

    // Menampilkan form untuk mengedit problem
    public function edit($id)
    {
        $problems = Problem::find($id);
        return view('problems.edit', [
            "title" => "Edit Data Problems",
            "problems" => $problems
        ]);
    }

    // Memperbarui problem di dalam database
    public function update($id, Request $request)
    {
        $problems = Problem::find($id);
        if ($request->gambar == null) {

            $nameFile = $problems->gambar;
        } else {
            File::delete('images/problem/' . $problems->gambar);
            $file = $request->file('gambar');
            $eks = $file->getClientOriginalExtension();
            $generate = Hash::make(time() .  $file->getClientOriginalName());
            $name = substr($generate, 0, 20);
            $nameFile = $name . '.' . $eks;
            $request->file('gambar')->move(public_path('images/problem'), $nameFile);
        }
        $problems->type = $request->type;
        $problems->problems = $request->problems;
        $problems->cause = $request->cause;
        $problems->solved = $request->solved;
        $problems->loc_jobs = $request->loc_jobs;
        $problems->status = $request->status;
        $problems->gambar = $nameFile;
        $problems->pic = $request->pic;
        $problems->save();

        if ($request->status == 'On Progress' || $request->status == 'Pending') {
            RProblem::create([
                'type' => $request->type,
                'problems' => $request->problems,
                'cause' => $request->cause,
                'solved' => $request->solved,
                'loc_jobs' => $request->loc_jobs,
                'status' => $request->status,
                'pic' => $request->pic,
                'date' => now()->format('Y-m-d') // Error
            ]);
            // dd($p->all());
        }

        return redirect('/problem')->with('flash', 'Problem Berhasil di Ubah');
    }

    // Menghapus problem dari database
    public function delete($id)
    {
        $problems = Problem::findOrFail($id);
        $problems->delete();
        return redirect('/problem')->with('success', 'Problem berhasil dihapus.');
    }
}
