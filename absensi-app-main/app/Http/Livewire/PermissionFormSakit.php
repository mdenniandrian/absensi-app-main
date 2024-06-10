<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Permission;

class PermissionFormSakit extends Component
{
    use WithFileUploads;

    public $permission = [
        'title' => '',
        'description' => '',
    ];
    public $attendanceId;
    public $doctorNote;

    protected $rules = [
        'permission.title' => 'required|string|min:4',
        'permission.description' => 'required|string|max:500',
        'doctorNote' => 'nullable|file|max:10240',
    ];

    public function save()
    {
        $this->validate();

        $permission = Permission::create([
            "user_id" => auth()->user()->id,
            "attendance_id" => $this->attendanceId,
            "jenis_izin" => 'sakit',
            "title" => $this->permission['title'],
            "description" => $this->permission['description'],
            "permission_date" => now()->toDateString()
        ]);

        if ($this->doctorNote) {
            $filePath = $this->doctorNote->store('uploadFile', 'public');

            $permission->update([
                'uploadFile' => $filePath,
            ]);
        }


        // if ($this->Note) {
        //     // Ambil nama keterangan dokter atau gunakan nama unik, sesuaikan sesuai kebutuhan
        //     $doctorNoteName = $permission->doctor->name ?? 'unknown_doctor';

        //     // Dapatkan ekstensi file
        //     $extension = $this->Note->getClientOriginalExtension();

        //     // Buat nama file dengan format: keterangan_dokter_tanggal_waktu.ekstensi
        //     $fileName = "{$doctorNoteName}_" . now()->format('Ymd_His') . ".{$extension}";

        //     // Pindahkan file ke folder public
        //     $filePath = $this->Note->move(public_path('uploadFile'), $fileName);

        //     $permission->update([
        //         'uploadFile' => $filePath,
        //     ]);
        // }

        return redirect()->route('home.show', $this->attendanceId)->with('success', 'Permintaan izin sedang diproses. Silahkan tunggu...');
    }

    public function render()
    {
        return view('livewire.permission-form-sakit');
    }
}
