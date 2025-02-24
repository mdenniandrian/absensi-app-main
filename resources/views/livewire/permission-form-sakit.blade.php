<div>
    <form wire:submit.prevent="save" method="post" enctype="multipart/form-data" novalidate>
        @include('partials.alerts')

        <div class="w-100">
            <div class="mb-3">
                <x-form-label id="title" label='Alasan Utama Izin (Judul)' />
                <x-form-input id="title" name="title" wire:model.defer="permission.title" />
                <x-form-error key="permission.title" />
            </div>
            <div class="mb-3">
                <x-form-label id="description" label='Keterangan Izin (Alasan Lebih Lengkap)' />
                <textarea id="description" name="description" class="form-control" wire:model.defer="permission.description"></textarea>
                <x-form-error key="permission.description" />
            </div>
            <div class="mb-3">
                <x-form-label id="doctor_note" label='Keterangan Dokter (Unggah File)' />
                <input type="file" id="doctor_note" name="doctor_note" wire:model="doctorNote">
                <x-form-error key="doctorNote" />
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-5">
            <button class="btn btn-primary">
                Simpan
            </button>
        </div>
    </form>
</div>
