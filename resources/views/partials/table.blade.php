<table id="example" class="table-auto w-full">
    <thead class="sticky top-0">
        <th scope="col" class="px-4 py-2">No</th>
        <th scope="col" class="px-4 py-2">Type</th>
        <th scope="col" class="px-4 py-2">Problem</th>
        <th scope="col" class="px-4 py-2">Cause</th>
        <th scope="col" class="px-4 py-2">Solved</th>
        <th scope="col" class="px-4 py-2">Location Jobs</th>
        <th scope="col" class="px-4 py-2">Status</th>
        <th scope="col" class="px-4 py-2">PIC</th>
        <th scope="col" class="px-4 py-2">Action</th>
    </thead>
    <tbody class="font-sans border-b border-separate">
        {{-- @foreach ($problems as $idx => $p)
            <tr class="">
                <th scope="row" class="text-sm font-medium text-center text-gray-900 whitespace-nowrap border">
                    {{ ++$idx }}</th>
                <td class="px-4 py-2 text-sm font-light text-gray-900 whitespace-nowrap border">{{ $p->type }}
                </td>
                <td class="px-4 py-2 text-sm font-light text-gray-900 whitespace-nowrap border">{{ $p->problems }}
                </td>
                <td class="px-4 py-2 text-sm font-light text-gray-900 whitespace-normal border">{{ $p->cause }}
                </td>
                <td class="px-4 py-2 text-sm font-light text-gray-900 whitespace-normal border">
                    {{ $p->solved }}
                </td>
                <td class="px-4 py-2 text-sm font-light text-gray-900 whitespace-nowrap border">{{ $p->loc_jobs }}
                </td>
                <td
                    class="text-center text-xs px-4 py-2 font-extrabold border
                    @if ($p->status === 'Success') text-green-500
                    @elseif($p->status === 'On Progress')
                        text-blue-500
                    @else
                        text-red-500 @endif">
                    {{ $p->status }}
                </td>
                <td class="px-4 py-2 text-sm font-light text-gray-900 whitespace-nowrap border">{{ $p->pic }}
                </td>
                <td class="text-center border-x">
                    <a href="#" class="" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 px-1 py-1 text-white bg-orange-500 rounded">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>

                    </a>
                    <a onclick="#" href="#" type="submit" class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 px-1 py-1 text-white bg-red-500 rounded">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                    </a>
                </td>
            </tr>
        @endforeach --}}
    </tbody>
</table>
{{-- <style>
    /* CSS */
    .font-sans.border-b.border-separate tr:nth-child(even) {
        background-color: rgb(240, 240, 240);
        /* Ganti dengan warna yang Anda inginkan */
    }

    .font-sans.border-b.border-separate tr:nth-child(odd) {
        background-color: white;
        /* Ganti dengan warna yang Anda inginkan */
    }
</style>

<script>
    const deleteLinks = document.querySelectorAll('.btn'); // Ambil semua elemen dengan kelas 'btn'

    deleteLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            const confirmation = confirm('Anda yakin ingin menghapus data ini? Data tidak akan bisa dikembalikan lagi setelah dihapus');
            if (!confirmation) {
                event.preventDefault(); // Hentikan aksi default jika pengguna membatalkan
                alert('Penghapusan dibatalkan');
            }
        });
    });
</script> --}}
