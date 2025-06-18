@extends('Master.masterSiteLocation')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-8 col-lg-7 mx-auto">
            <div class="card shadow mb-2">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h1>Added Site Location</h1>
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

                    <form action="{{ route('siteLocationAdmin.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="site_id">Site ID</label>
                            <input type="text" class="form-control @error('site_id') is-invalid @enderror"
                                id="site_id" name="site_id" value="{{ old('site_id') }}">
                            @error('site_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="site_location">Site Location</label>
                            <input type="text" class="form-control @error('site_location') is-invalid @enderror"
                                id="site_location" name="site_location" value="{{ old('site_location') }}">
                            @error('site_location')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success btn-primary shadow-sm bg-green"
                            style="background-color: green;">Add Site Location</button>

                        <a href="{{ route('siteLocationAdmin.index') }}" class="btn btn-auto btn-primary shadow-sm">
                            <span class="text">Back</span>
                        </a>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection