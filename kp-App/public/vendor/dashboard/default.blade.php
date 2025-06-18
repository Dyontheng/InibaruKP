{{-- filepath: c:\Users\Lenovo Ideapad 3\Documents\KP\Aplikasi\viho-1.0\Viho-Laravel-8\theme\resources\views\admin\dashboard\default.blade.php --}}
@extends('layouts.admin.master')

@section('title', 'Documents')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Documents</h5>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ route('dashboard') }}">
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <input type="text" name="document_name" class="form-control" placeholder="Document Name">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="type_of_doc" class="form-control" placeholder="Type of Doc">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="location" class="form-control" placeholder="Location">
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Document No</th>
                                <th>Document Name</th>
                                <th>Type of Doc</th>
                                <th>Location</th>
                                <th>Effective Date</th>
                                <th>Expired Date</th>
                                <th>Reminder Day</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($documents as $document)
                            <tr>
                                <td>{{ $document->document_no }}</td>
                                <td>{{ $document->document_name }}</td>
                                <td>{{ $document->type_of_doc }}</td>
                                <td>{{ $document->location }}</td>
                                <td>{{ $document->effective_date }}</td>
                                <td>{{ $document->expired_date }}</td>
                                <td>{{ $document->reminder_day }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">View</a>
                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $documents->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection