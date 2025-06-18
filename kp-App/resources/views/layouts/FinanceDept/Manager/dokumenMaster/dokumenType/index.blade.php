@extends('Master.masterDokumenTypeManagerFinanceDept')
@section('content')
    <div class="container">
        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif
        <div class="card shadow m-4">

            <div class="card-body py-3">
                <h1>Dokumen Type</h1>

                <form method="GET" action="{{ route('TypeManagerFinanceDept.index') }}">
                    <div class="form-group mb-3">
                        <label for="filter">Filter berdasarkan Jenis Dokumen:</label>
                        <select name="filter" id="filter" class="form-control" onchange="this.form.submit()">
                            <option value="">-- Pilih Jenis Dokumen --</option>
                            <option value="Audit" {{ request('filter') == 'Audit' ? 'selected' : '' }}>Audit</option>
                            <option value="Barang" {{ request('filter') == 'Barang' ? 'selected' : '' }}>Barang</option>
                            <option value="Keuangan" {{ request('filter') == 'Keuangan' ? 'selected' : '' }}>Keuangan
                            </option>
                            <option value="Jadwal" {{ request('filter') == 'Jadwal' ? 'selected' : '' }}>Jadwal</option>
                            <option value="IzinOperasional" {{ request('filter') == 'IzinOperasional' ? 'selected' : '' }}>
                                Izin Operasional</option>
                            <option value="Rapat" {{ request('filter') == 'Rapat' ? 'selected' : '' }}>Rapat</option>
                        </select>
                    </div>
                </form>
                <div class="d-sm-flex align-items-center justify-content-between mb-0">

                    <div class="table mt-3">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th scope="col">Document No</th>
                                    <th scope="col">Document Name</th>
                                    <th scope="col">Type of Doc</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Effective Date</th>
                                    <th scope="col">Expired Date</th>
                                    <th scope="col">Reminder Day</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($documents as $dokumen)
                                    <tr>
                                        <td>{{ $dokumen->no_document }}</td>
                                        <td>{{ $dokumen->name_document }}</td>
                                       <td>
                                            <a href="{{ asset('storage/dokumen_tipe/' . $dokumen->document_type) }}"
                                                target="_blank">
                                                {{ basename($dokumen->document_type) }}
                                            </a>
                                        </td>
                                        <td>{{ $dokumen->location }}</td>
                                        <td>{{ $dokumen->effective_date }}</td>
                                        <td>{{ $dokumen->expired_date }}</td>
                                        <td>{{ $dokumen->reminder_days }}</td>
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
