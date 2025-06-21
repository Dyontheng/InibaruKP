@extends('Master.masterCasesAdmin')
@section('content')
    <div class="container">
        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif
        <div class="card col-xl-11 col-lg-8 mx-auto">

            <div class="card-body py-3">
                <h1>Cases Type</h1>

                <form method="GET" action="{{ route('casesTypeAdmin.index') }}">
                    <div class="form-group mb-3">
                        <label for="filter">Filter berdasarkan Jenis Cases:</label>
                        <select name="filter" id="filter" class="form-control" onchange="this.form.submit()">
                            <option value="">-- Pilih Jenis Cases --</option>
                            <option value="Pengadilan" {{ request('filter') == 'Pengadilan' ? 'selected' : '' }}>Pengadilan
                            </option>
                            <option value="Lahan" {{ request('filter') == 'Lahan' ? 'selected' : '' }}>Lahan</option>
                            <option value="Operasional" {{ request('filter') == 'Operasional' ? 'selected' : '' }}>
                                Operasional
                            </option>
                            <option value="Rapat" {{ request('filter') == 'Rapat' ? 'selected' : '' }}>Rapat</option>
                        </select>
                    </div>
                </form>
                <div class="d-sm-flex align-items-center justify-content-between mb-0">

                    <div class="table mt-3">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>Cases No.</th>
                                    <th>Cases Names</th>
                                    <th>Cases Date</th>
                                    <th>Site Location</th>
                                    <th>Status Cases</th>
                                    <th>Info Cases</th>
                                    <th>Document</th>
                                    <th>Jenis Cases</th>
                                    <th>Departement</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($cases as $case)
                                    <tr>
                                        <td>{{ $case->no_cases }}</td>
                                        <td>{{ $case->name_cases }}</td>
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
                    </div>


                </div>

            </div>
        </div>

    </div>
@endsection
