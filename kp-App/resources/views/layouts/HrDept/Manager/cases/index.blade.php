@extends('Master.masterCasesManagerHrDept')
@section('content')
<div class="container">
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
        <div class="card-body py-3">
            {{-- <h1>Anggota {{ $ukm->nama_ukm }}</h1> --}}
            <h1>Dokumen Cases</h1>
            <div class="d-sm-flex align-items-center justify-content-between mb-0">

                <div class="table-responsive mt-3">
                    <table class="display" id="basic-1">
                        <thead>
                            <tr>
                                <th>Cases No.</th>
                                <th>Cases Names</th>
                                <th>Cases Date</th>
                                <th>Cases Type</th>
                                <th>Remarks</th>
                                <th>Cases Hope</th>
                                <th>Document</th>
                                <th>Type Name</th>
                                <th>Departement</th>
                            </tr>
                        </thead>
                       <tbody>
                            @forelse ($cases as $case)
                                <tr>
                                    <td>{{ $case->no_cases }}</td>
                                    <td>{{ $case->name_cases}}</td>
                                    <td>{{ $case->date_cases }}</td>
                                    <td>{{ $case->site_cases }}</td>
                                    <td>{{ $case->status_cases }}</td>
                                    <td>{{ $case->info_cases }}</td>
                                    <td>
                                            <a href="{{ asset('storage/dokumen_cases/' . $case->doc_cases) }}"
                                                target="_blank">
                                                {{ basename($case->doc_cases) }}
                                            </a>
                                        </td>
                                    <td>{{ $case->jenis_cases }}</td>
                                    <td>{{ $case->departement }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">Tidak ada dokumen tersedia.</td>
                                </tr>
                            @endforelse
                        </tbody>
                        
                    </table>
                    {{-- {{ $anggotas->links() }} --}}
                </div>


            </div>

        </div>
    </div>

</div>
@endsection