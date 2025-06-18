@extends('Master.masterCasesDirekturExportDept')
@section('content')
<div class="container">
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    {{-- <div class="card col-xl-11 col-lg-8 mx-auto">
        <div class="card-header py-3">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-0">
                <a href="{{ route('casesAdmin.create') }}" class="btn btn-auto  btn-primary shadow-sm">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus-square"></i>
                    </span>
                    <span class="text">Tambah Dokumen Cases</span>
                </a>

            </div>
        </div> --}}

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
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @forelse ($documents as $dokumen)
                                <tr>
                                    <td>{{ $dokumen->no_document }}</td>
                                    <td>{{ $dokumen->name_document }}</td>
                                    <td>{{ $dokumen->document_type }}</td>
                                    <td>{{ $dokumen->location }}</td>
                                    <td>{{ $dokumen->effective_date }}</td>
                                    <td>{{ $dokumen->expired_date }}</td>
                                    <td>{{ $dokumen->reminder_days }}</td>
                                    <td>{{ $dokumen->departement }}</td>
                                    <td>
                                        <a href="{{ route('dokumenAdmin.edit', $dokumen->id) }}" class="btn btn-primary btn-sm mb-2">Edit</a>
                                        <form action="{{ route('dokumenAdmin.destroy', $dokumen->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus dokumen ini?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">Tidak ada dokumen tersedia.</td>
                                </tr>
                            @endforelse
                        </tbody> --}}
                        
                    </table>
                    {{-- {{ $anggotas->links() }} --}}
                </div>


            </div>

        </div>
    </div>

</div>
@endsection