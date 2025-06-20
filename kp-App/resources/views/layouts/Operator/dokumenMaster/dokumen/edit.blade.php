@extends('Master.masterEditDokumenOperator')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7 mx-auto">
                <div class="card shadow mb-2">
                    <div class="card-header py-3">
                        <h1>Edit Document</h1>
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
                        <form action="{{ route('dokumenOperator.update', $documents->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <label>No Document:</label>
                            <input type="text" class="form-control" name="no_document" value="{{ $documents->no_document }}" required><br>

                            <label>Name Document:</label>
                            <input type="text" class="form-control" name="name_document" value="{{ $documents->name_document }}" required><br>

                            <label>Document File</label>
                            <input type="file" class="form-control" name="document_type" accept=".pdf"><br>

                            <label>Location:</label>
                            <input type="text" class="form-control" name="location" value="{{ $documents->location }}" required><br>

                            <label>Effective Date:</label>
                            <input type="date" class="form-control" name="effective_date" value="{{ $documents->effective_date }}"
                                required><br>

                            <label>Expired Date:</label>
                            <input type="date" class="form-control" name="expired_date" value="{{ $documents->expired_date }}" required><br>

                            <label>Reminder Days:</label>
                            <input type="number" class="form-control" name="reminder_days" value="{{ $documents->reminder_days }}" required><br>

                            <label>Departement:</label>
                            <select name="departement" class="form-control" required>
                                @foreach (['ITDept', 'FinanceDept', 'LegalDept', 'PurchDept', 'ExportDept', 'HRDept'] as $dept)
                                    <option value="{{ $dept }}"
                                        {{ $documents->departement == $dept ? 'selected' : '' }}>
                                        {{ $dept }}</option>
                                @endforeach
                            </select><br>

                            <label>Jenis Data:</label>
                            <select name="jenis_data" class="form-control" required>
                                @foreach (['Audit', 'Barang', 'Keuangan', 'Jadwal', 'IzinOperasional', 'Rapat'] as $jenis)
                                    <option value="{{ $jenis }}"
                                        {{ $documents->jenis_data == $jenis ? 'selected' : '' }}>
                                        {{ $jenis }}</option>
                                @endforeach
                            </select><br><br>

                            <button type="submit" class="btn btn-success btn-primary shadow-sm bg-green"
                                style="background-color: green;">Update Document</button>

                            <a href="{{ route('dokumenOperator.index') }}" class="btn btn-auto btn-primary shadow-sm">
                                <span class="text">Back</span>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
