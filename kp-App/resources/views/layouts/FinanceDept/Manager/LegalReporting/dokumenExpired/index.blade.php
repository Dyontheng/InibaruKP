@extends('Master.masterDokumenExpiredManagerFinance')
@section('content')
    <div class="container">
        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif
            <div class="card-body py-3">
                {{-- <h1>Anggota {{ $ukm->nama_ukm }}</h1> --}}
                <h1>Dokumen</h1>
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
                                    <th scope="col">Departement</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($expiredDocuments as $dokumen)
                                    <tr>
                                        <td>{{ $dokumen->no_document }}</td>
                                        <td>{{ $dokumen->name_document }}</td>
                                        <td>{{ $dokumen->document_type }}</td>
                                        <td>{{ $dokumen->location }}</td>
                                        <td>{{ $dokumen->effective_date }}</td>
                                        <td>{{ $dokumen->expired_date }}</td>
                                        <td>{{ $dokumen->reminder_days }}</td>
                                        <td>{{ $dokumen->departement }}</td>
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
