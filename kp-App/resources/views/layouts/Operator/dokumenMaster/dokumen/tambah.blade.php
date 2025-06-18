@extends('Master.masterDokumen')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-8 col-lg-7 mx-auto">
            <div class="card shadow mb-2">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h1>Tambah Dokumen</h1>
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

                    <form action="{{ route('dokumenAdmin.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="no_document">Document No</label>
                            <input type="text" class="form-control @error('no_document') is-invalid @enderror" id="no_document"
                                name="no_document" value="{{ old('no_document') }}">
                            @error('no_document')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name_document">Document Name</label>
                            <input type="text" class="form-control @error('name_document') is-invalid @enderror"
                                id="name_document" name="name_document" value="{{ old('name_document') }}">
                            @error('name_document')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="document_type">Type of Document</label>
                            <input type="file" class="form-control @error('document_type') is-invalid @enderror"
                                id="document_type" name="document_type" value="{{ old('document_type') }}" accept=".pdf, .doc">
                            @error('document_type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control @error('location') is-invalid @enderror"
                                id="location" name="location" value="{{ old('location') }}">
                            @error('location')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="effective_date">Effective Date</label>
                            <input type="date" class="form-control @error('effective_date') is-invalid @enderror"
                                id="effective_date" name="effective_date" value="{{ old('effective_date') }}">
                            @error('effective_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="expired_date">Expired Date</label>
                            <input type="date" class="form-control @error('expired_date') is-invalid @enderror"
                                id="expired_date" name="expired_date" value="{{ old('expired_date') }}">
                            @error('expired_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="reminder_days">Reminder Days</label>
                            <input type="number" class="form-control @error('reminder_days') is-invalid @enderror"
                                id="reminder_days" name="reminder_days" value="{{ old('reminder_days') }}">
                            @error('reminder_days')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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

                        <div class="mb-3">
                            <label for="jenis_data" class="form-label">Jenis Data</label> <br>
                            <select name="jenis_data" class="form-control" required>
                                <option value="Audit" selected>Audit</option>
                                <option value="Barang">Barang</option>
                                <option value="Keuangan">Keuangan</option>
                                <option value="Jadwal">Jadwal</option>
                                <option value="IzinOperasional">Izin Operasional</option>
                                <option value="Rapat">Rapat</option>
                            </select>
                        </div>


                        <button type="submit" class="btn btn-success btn-primary shadow-sm bg-green"
                            style="background-color: green;">Add Document</button>

                        <a href="{{ route('dokumenAdmin.index') }}"
                            class="btn btn-auto btn-primary shadow-sm">
                            <span class="text">Back</span>
                        </a>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection