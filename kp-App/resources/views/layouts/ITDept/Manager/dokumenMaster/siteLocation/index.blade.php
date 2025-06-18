@extends('Master.masterSiteLocationManagerITDept')
@section('content')
<div class="container">
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <div class="card shadow col-xl-6 col-lg-7 mx-auto">
        {{-- <div class="card-header py-3">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-0">
                <a href="{{ route('siteLocationAdmin.create') }}" class="btn btn-auto  btn-primary shadow-sm">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus-square"></i>
                    </span>
                    <span class="text">Tambah Site Location</span>
                </a>

            </div>
        </div> --}}

        <div class="card-body py-3">
            {{-- <h1>Anggota {{ $ukm->nama_ukm }}</h1> --}}
            <h1>Site Location</h1>
            <div class="d-sm-flex align-items-center justify-content-between mb-0">

                <div class="table mt-3">
                    <table class="display" id="basic-1">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Site ID</th>
                                <th scope="col">Site Location</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($locations as $index => $location)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $location->site_id }}</td>
                                    <td>{{ $location->site_location }}</td>
                                    <td>
                                        <a href="{{ route('siteLocationAdmin.edit', $location->id) }}" class="btn btn-primary btn-sm mb-2">Edit</a>
                                        <form action="{{ route('siteLocationAdmin.destroy', $location->id) }}" method="POST" style="display:inline;">
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
                        </tbody>
                        
                    </table>
                    {{-- {{ $anggotas->links() }} --}}
                </div>


            </div>

        </div>
    </div>

</div>
    
@endsection