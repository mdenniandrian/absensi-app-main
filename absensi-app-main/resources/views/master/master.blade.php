<!-- Statistics Cards -->
<div class="grid grid-cols-1 gap-10 ml-2 mr-2 sm:grid-cols-2 lg:grid-cols-5 bg-white">
    <div
        class="flex items-center justify-between p-3 mt-1 mb-1 ml-1 font-medium text-white bg-green-500 border-b-4 border-green-600 rounded-md shadow-lg group">
        <div
            class="flex items-center justify-center transition-all duration-300 transform rounded-full w-14 h-14 bg-lime-200 group-hover:rotate-12">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" widht="30" height="30"
                class="text-green-800 transition-transform duration-500 ease-in-out transform stroke-current dark:text-gray-800">>>>
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
            </svg>
        </div>
        <div class="text-right">
            <?php
            $dataHadirCount = $presences->count();
            $totalHadirCount = $permissions->count() + $presences->count();

            $percentageHadir = $totalHadirCount > 0 ? ($dataHadirCount/$totalHadirCount) * 100 : 0;
            ?>
            <p class="text-2xl">{{ round($percentageHadir) }}%</p>
            <p>HADIR</p>
        </div>
    </div>
    <div
        class="flex items-center justify-between p-3 mt-1 mb-1 font-medium text-white bg-red-500 border-b-4 border-red-600 rounded-md shadow-lg group">
        <div
            class="flex items-center justify-center transition-all duration-300 transform bg-white rounded-full w-14 h-14 group-hover:rotate-12">
            <svg class="w-8 h-8 text-red-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <line x1="3" y1="21" x2="21" y2="21" />
                <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                <line x1="10" y1="9" x2="14" y2="9" />
                <line x1="12" y1="7" x2="12" y2="11" />
            </svg>
        </div>
        <div class="text-right">
            <?php
            $dataSakitCount = $permissions->where('jenis_izin', 'sakit')->count();
            $totalDataCount = $permissions->count() + $presences->count();

            $percentageSakit = $totalDataCount > 0 ? ($dataSakitCount / $totalDataCount) * 100 : 0;
            ?>

            <p class="text-2xl">{{ round($percentageSakit) }}%</p>
            <p>SAKIT</p>
        </div>
    </div>
    <div
        class="flex items-center justify-between p-3 mt-1 mb-1 font-medium text-white bg-orange-500 border-b-4 border-orange-600 rounded-md shadow-lg group">
        <div
            class="flex items-center justify-center transition-all duration-300 transform bg-white rounded-full w-14 h-14 group-hover:rotate-12">
            <svg class="w-8 h-8 text-orange-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <circle cx="12" cy="5" r="2" />
                <path d="M10 22v-5l-1-1v-4a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4l-1 1v5" />
            </svg>
        </div>
        <div class="text-right">
            <?php
            $dataIzinCount = $permissions->where('jenis_izin', 'izin')->count();
            $totalIzinCount = $permissions->count() + $presences->count();

            $percentageIzin = $totalIzinCount > 0 ? ($dataIzinCount / $totalIzinCount) * 100 : 0;
            ?>

            <p class="text-2xl">{{ round($percentageIzin) }}%</p>
            <p>IZIN</p>
        </div>
    </div>
    <div
        class="flex items-center justify-between p-3 mt-1 mb-1 mr-1 font-medium text-white bg-blue-500 border-b-4 border-blue-600 rounded-md shadow-lg group">
        <div
            class="flex items-center justify-center transition-all duration-300 transform bg-white rounded-full w-14 h-14 group-hover:rotate-12">
            <svg class="w-8 h-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
            </svg>
        </div>
        <div class="text-right">
            <?php
            $dataCutiCount = $permissions->where('jenis_izin', 'cuti')->count();
            $totalCutiCount = $permissions->count() + $presences->count();

            $percentageCuti = $totalCutiCount > 0 ? ($dataCutiCount / $totalCutiCount) * 100 : 0;
            ?>

            <p class="text-2xl">{{ round($percentageCuti) }}%</p>
            <p>CUTI</p>
        </div>
    </div>
    <div class="flex items-center justify-center mr-1 font-medium bg-white rounded">
        <div>OVERALL JUDGE:
            <strong class="text-green-700">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                    class="bi bi-circle-fill mx-auto my-auto mt-1" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                    <text x="50%" y="50%" font-size="8px" text-anchor="middle" alignment-baseline="middle" fill="white">OK</text>
                </svg>
            </strong>
        </div>
    </div>


</div>
<!-- ./Statistics Cards -->
<div class="flex position-fixed">
    <div class="container flex-wrap w-1/3 m-2 bg-transparent shadow ">
        <div class="container mb-1 bg-white b">
            @include('master.partials.line-chart')
        </div>
        <div class="container bg-white">
            @include('master.partials.line-chart-2')
        </div>
    </div>


    <div class="w-1/2 bg-transparent shadow mb-2 mt-2"
        style="background-image: url('{{ asset('storage/LAYOUTT.png') }}');background-size:cover;background-position: center;">
        {{-- <img src="{{ asset('storage/sugitylogo.png') }}" alt="sugity logo"> --}}
        <table
            class="text-white text-left text-xs pt-6 border-separate border-spacing-4 border-slate-400 border-spacing-x-7">
            <thead>
                <tr>
                    <th class="bg-transparent text-black text-center"></th>
                    <th class="bg-transparent text-black"></th>

                    <th class="bg-transparent text-black"></th>
                    <th class="bg-transparent text-black"></th>
                    <th class="bg-transparent text-black text-center">LOC.JOBS</th>
                    <th class="bg-transparent text-black text-center">SHIFT A</th>
                    <th class="bg-transparent text-black text-center">SHIFT B</th>
                    <th class="bg-transparent text-black text-center">4M</th>
                    <th class="bg-transparent text-black text-center"></th>

                </tr>
                @php
                    $jobLocs = [
                        'TBINA' => 'TBINA',
                        'JUNBIKI TMMIN 2' => 'JBK TMMIN 2',
                        'DOORTRIM DEPO' => 'D/T. DEPO',
                        'HINO,DENSO,HPM' => 'HINO,DENSO,HPM',
                        'PRINT KANBAN' => 'PRINT KANBAN',
                        'JUNBIKI TMMIN 1' => 'JBK TMMIN1',
                        'JUNBIKI 560B' => 'JBK 560B',
                        'ADM ASSY 3' => 'ADM ASSY 3',
                        'ADM ASSY 1&2' => 'ADM ASSY 1&2',
                        'DOCK 48' => 'DOCK 48',
                    ];
                @endphp

                @foreach ($jobLocs as $locCode => $locName)
                    <tr>
                        <th class="bg-transparent"></th>
                        <th class="bg-transparent"></th>

                        <th class="bg-transparent"></th>
                        <th class="bg-transparent"></th>
                        @php
                            $hasProblem = $problems
                                ->where('loc_jobs', $locCode)
                                ->where('status', '!=', 'OK')
                                ->isNotEmpty();
                        @endphp

                        @if ($hasProblem)
                            @php
                                $tableCreated = false;
                            @endphp
                            @foreach ($problems as $problem)
                                @if ($problem->loc_jobs == $locCode && $problem->status == 'OK')
                                    @if (!$tableCreated)
                                        <th class="text-center" style="background-color: red">{{ $locName }}</th>
                                        @php $tableCreated = true; @endphp
                                    @endif
                                @else
                                    @if (!$tableCreated)
                                        <th class="bg-transparent white-space: nowrap blinkred text-center">
                                            {{ $locName }}
                                        </th>
                                        @php $tableCreated = true; @endphp
                                    @endif
                                @endif
                            @endforeach
                        @else
                            <th class="text-center" style="background-color: green">{{ $locName }}</th>
                        @endif
                        <th class="bg-transparent text-black text-center">-</th>
                        <th class="bg-transparent text-black text-center">-</th>
                        <th class="bg-transparent text-black text-center">-</th>
                        <th class="bg-transparent text-black"></th>
                    </tr>
                @endforeach

            </thead>
        </table>
    </div>
    <div class="container flex-wrap w-1/4 m-2 bg-transparent shadow">
        <div class="container mb-1 bg-white">
            @include('master.partials.bar-chart')
        </div>
        <div class="container inline-flex justify-center px-1 py-11 space-x-1 font-mono text-center bg-white">
            <div class="underline rounded bg-slate-100 card">MAN
                <div class="px-2 py-5 mt-2 text-xs bg-white rounded card-body">
                    <?php
                    $dataMan = $problems
                        ->where('type', 'Man')
                        ->where('status', '!=', 'OK')
                        ->count();
                    ?>
                    <span class="text-lg ">"{{ $dataMan }}"</span> Problem Found!
                </div>

            </div>
            <div class="underline rounded bg-slate-100 card">MATERIAL
                <div class="px-2 py-5 mt-2 text-xs bg-white rounded card-body">
                    <?php
                    $dataMaterial = $problems
                        ->where('type', 'Material')
                        ->where('status', '!=', 'OK')
                        ->count();
                    ?>
                    <span class="text-lg ">"{{ $dataMaterial }}"</span> Problem Found!
                </div>

            </div>
            <div class="underline rounded bg-slate-100 card">MACHINE
                <div class="px-2 py-5 mt-2 text-xs bg-white rounded card-body">
                    <?php
                    $dataMachine = $problems
                        ->where('type', 'Machine')
                        ->where('status', '!=', 'OK')
                        ->count();
                    ?>
                    <span class="text-lg ">"{{ $dataMachine }}"</span> Problem Found!
                </div>

            </div>
            <div class="underline rounded bg-slate-100 card">METHOD
                <div class="px-2 py-5 mt-2 text-xs bg-white rounded card-body">
                    <?php
                    $dataMethod = $problems
                        ->where('type', 'Method')
                        ->where('status', '!=', 'OK')
                        ->count();
                    ?>
                    <span class="text-lg ">"{{ $dataMethod }}"</span> Problem Found!
                </div>

            </div>
        </div>
    </div>
</div>
<div class="flex px-0 py-0 ml-2 mr-2 mb-1 shadow ">
    <div class="w-full px-0 py-0 text-center shadow bg-slate-50" style="height:90px; overflow-y: hidden"
        id="scroll2">
        <table class="w-full text-small font-mono border-black border-1 table-responsive">
            <thead class="sticky top-0 text-xs font-medium text-center text-gray-900 bg-blue-300">
                <th scope="col" class="px-3 py-1 text-sm font-medium text-gray-900 border-x ">NO</th>
                <th scope="col" class="px-4 py-1 text-sm font-medium text-gray-900 border-x">TYPE</th>
                <th scope="col" class="px-4 py-1 text-sm font-medium text-gray-900 border-x">PROBLEM</th>
                <th scope="col" class="px-4 py-1 text-sm font-medium text-gray-900 border-x">CAUSE</th>
                <th scope="col" class="px-4 py-1 text-sm font-medium text-gray-900 border-x">COUNTERMEASURE</th>
                <th scope="col" class="px-1 py-1 text-sm font-medium text-gray-900 border-x">LOCATION JOBS</th>
                <th scope="col" class="px-4 py-1 text-sm font-medium text-gray-900 border-x">STATUS</th>
                <th scope="col" class="px-4 py-1 text-sm font-medium text-gray-900 border-x">PIC</th>
                <th scope="col" class="px-4 py-1 text-sm font-medium text-gray-900 border-x">LAST MODIFIED</th>
            </thead>
            <tbody class="font-sans border-b border-separate ">
                @foreach ($problems as $idx => $pro)
                    <tr class="border-b">
                        <th scope="row"
                            class="px-1 py-1 text-xs font-light text-center text-gray-900 whitespace-nowrap border-x">
                            {{ ++$idx }}</th>
                        <td class="px-0 py-2 text-xs font-light text-center text-gray-900 whitespace-nowrap border-x ">
                            {{ $pro->type }}
                        </td>
                        <td class="px-1 py-2 text-xs font-light text-center text-gray-900 whitespace-nowrap border-x ">
                            {{ $pro->problems }}
                        </td>
                        <td class="px-1 py-2 text-xs font-light text-gray-900 whitespace-normal border-x">
                            {{ $pro->cause }}
                        </td>
                        <td class="px-1 py-2 text-xs font-light text-gray-900 whitespace-normal table-fixed border-x">
                            {{ $pro->solved }}
                        </td>
                        <td class="px-1 py-2 text-xs font-light text-center text-gray-900 whitespace-nowrap border-x ">
                            {{ $pro->loc_jobs }}
                        </td>
                        <td
                            class="text-center text-xs px-0 py-0 font-extrabold
                            @if ($pro->status === 'OK') text-green-500
                            @elseif($pro->status === 'On Progress')
                                text-blue-500
                            @else
                                text-red-500 @endif">
                            {{ $pro->status }}
                        </td>
                        <td class="px-1 py-2 text-xs font-light text-center text-gray-900 whitespace-nowrap border-x ">
                            {{ $pro->pic }}
                        </td>
                        <td class="px-1 py-2 text-xs font-light text-center text-gray-900 whitespace-nowrap border-x ">
                            {{ $pro->updated_at }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if (session('message'))
            <div class="pt-5 font-mono text-center alert alert-warning text-slate-400">
                {{ session('message') }}
            </div>
        @endif
    </div>
</div>
@include('master.partials.script-scroll')
</div>
<style>
    /* CSS */
    .font-sans.border-b.border-separate tr:nth-child(even) {
        background-color: rgb(226, 226, 226);
        /* Ganti dengan warna yang Anda inginkan */
    }

    .font-sans.border-b.border-separate tr:nth-child(odd) {
        background-color: white;
        /* Ganti dengan warna yang Anda inginkan */
    }
</style>
