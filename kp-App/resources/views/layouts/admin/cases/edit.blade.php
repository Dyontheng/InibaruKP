@extends('Master.masterEditCasesAdmin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7 mx-auto">
                <div class="card shadow mb-2">


                    <div class="card-header py-3">
                        <h1>Edit Cases</h1>
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

                        <form action="{{ route('casesAdmin.update', $case->id) }}" method="POST">
                            @csrf
                            @method('PUT') {{-- Method PUT untuk update --}}

                            <div class="form-group">
                                <label for="no_cases">No Cases</label>
                                <input type="text" class="form-control" name="no_cases" id="no_cases"
                                    value="{{ old('no_cases', $case->no_cases) }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="name_cases">Name Cases</label>
                                <input type="text" class="form-control" name="name_cases" id="name_cases"
                                    value="{{ old('name_cases', $case->name_cases) }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="date_cases">Date Cases</label>
                                <input type="date" class="form-control" id="date_cases" name="date_cases"
                                    value="{{ date('Y-m-d', strtotime($case->date_cases)) }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="site_cases">Site Cases</label>
                                <input type="text" class="form-control" name="site_cases" id="site_cases"
                                    value="{{ old('site_cases', $case->site_cases) }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="status_cases">Status Cases</label>
                                <select name="status_cases" class="form-control" id="status_cases">
                                    <option value="Active"
                                        {{ old('status_cases', $case->status_cases) == 'Active' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="Not Active"
                                        {{ old('status_cases', $case->status_cases) == 'Not Active' ? 'selected' : '' }}>Not
                                        Active</option>
                                    <option value="Pending"
                                        {{ old('status_cases', $case->status_cases) == 'Pending' ? 'selected' : '' }}>
                                        Pending
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="info_cases">Info Cases</label>
                                <input type="text" class="form-control" name="info_cases" id="info_cases"
                                    value="{{ old('info_cases', $case->info_cases) }}">
                            </div>

                            <div class="form-group">
                                <label for="doc_cases">Doc Cases</label>
                                <input type="file" class="form-control" name="doc_cases" id="doc_cases"
                                    value="{{ old('doc_cases', $case->doc_cases) }}" accept=".pdf">
                            </div>

                            <div class="form-group">
                                <label for="jenis_cases">Jenis Cases</label>
                                <input type="text" class="form-control" name="jenis_cases" id="jenis_cases"
                                    value="{{ old('jenis_cases', $case->jenis_cases) }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="departement">Departement</label>
                                <input type="text" class="form-control" name="departement" id="departement"
                                    value="{{ old('departement', $case->departement) }}" readonly>
                            </div>

                            <button type="submit" class="btn btn-success btn-primary shadow-sm bg-green"
                                style="background-color: green;">Update Cases</button>

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
