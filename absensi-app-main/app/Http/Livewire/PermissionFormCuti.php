<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Permission;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class PermissionFormCuti extends Component
{
    use WithFileUploads;

    public $permission = [
        'title' => '',
        'description' => '',
    ];
    public $attendanceId;
    public $Note;
    public $startDate;
    public $endDate;

    protected $rules = [
        'permission.title' => 'required|string|min:4',
        'permission.description' => 'required|string|max:500',
        'startDate' => 'required|date',
        'endDate' => 'required|date|after_or_equal:startDate',
        'Note' => 'required|file|max:10240',
    ];

    public function save()
    {
        $this->validate();

        $permission = Permission::create([
            "user_id" => auth()->user()->id,
            "attendance_id" => $this->attendanceId,
            "jenis_izin" => 'cuti',
            "title" => $this->permission['title'],
            "description" => $this->permission['description'],
            "permission_date" => now()->toDateString(),
            "mulai_izin" => $this->startDate,
            "akhir_izin" => $this->endDate,
        ]);

        // CARA LAMA
        if ($this->Note) {
            $filePath = $this->Note->store('uploadFile', 'public');
            $permission->update([
                'uploadFile' => $filePath,
            ]);
        }



        return redirect()->route('home.show', $this->attendanceId)->with('success', 'Permintaan izin sedang diproses. Silahkan tunggu...');
    }

    public function render()
    {
        return view('livewire.permission-form-cuti');
    }
}
