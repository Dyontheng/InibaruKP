@extends('Master.masterCasesAdmin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7 mx-auto">
                <div class="card shadow mb-2">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h1>Tambah Dokumen Cases</h1>
                    </div>

                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('casesAdmin.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="no_cases">No Cases</label>
                                <input type="text" class="form-control" @error('no_cases') is-invalid @enderror"
                                    id="no_cases" name="no_cases" value="{{ old('no_cases') }}">
                                @error('no_cases')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name_cases">Name Cases</label>
                                <input type="text" class="form-control" @error('name_cases') is-invalid @enderror"
                                    id="name_cases" name="name_cases" value="{{ old('name_cases') }}">
                                @error('name_cases')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="date_cases">Date Cases</label>
                                <input type="date" class="form-control" @error('date_cases') is-invalid @enderror"
                                    id="date_cases" name="date_cases" value="{{ old('date_cases') }}">
                                @error('date_cases')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="site_cases">Site Location Cases</label>
                                <input type="text" class="form-control" @error('site_cases') is-invalid @enderror"
                                    id="site_cases" name="site_cases" value="{{ old('site_cases') }}">
                                @error('site_cases')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="status_cases" class="form-label">Status Cases</label> <br>
                                <select name="status_cases" class="form-control" required>
                                    <option value="Active" selected>Active</option>
                                    <option value="Not Active">Not Active</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="info_cases">Info Cases</label>
                                <input type="text" class="form-control" @error('info_cases') is-invalid @enderror"
                                    id="info_cases" name="info_cases" value="{{ old('info_cases') }}">
                                @error('info_cases')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="doc_cases">Cases Documents</label>
                                <input type="file" class="form-control" @error('doc_cases') is-invalid @enderror"
                                    id="doc_cases" name="doc_cases" value="{{ old('doc_cases') }}" accept=".pdf, .doc">
                                @error('doc_cases')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        <div class="mb-3">
                            <label for="jenis_cases" class="form-label">Jenis cases</label> <br>
                            <select name="jenis_cases" class="form-control" required>
                                <option value="Pengadilan" selected>Pengadilan</option>
                                <option value="Lahan">Lahan</option>
                                <option value="Operasional">Operasional</option>
                                <option value="Rapat">Rapat</option>
                            </select>
                        </div>

                         <div class="mb-3">
                            <label for="departement" class="form-label">Departement</label> <br>
                            <select name="departement" class="form-control" required>
                                <option value="ITDept" selected>IT Dept</option>
                                <option value="FinanceDept">Finance Dept</option>
                                <option value="LegalDept">Legal Dept</option>
                                <option value="PurchDept">Purch Dept</option>
                                <option value="ExportDept">Export Dept</option>
                                <option value="HRDept">HR Dept</option>
                            </select>
                        </div>

                            


                            <button type="submit" class="btn btn-success btn-primary shadow-sm bg-green"
                                style="background-color: green;">Add Cases</button>

                            <a href="{{ route('casesAdmin.index') }}" class="btn btn-auto btn-primary shadow-sm">
                                <span class="text">Back</span>
                            </a>

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
