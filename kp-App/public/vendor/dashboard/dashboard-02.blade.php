@extends('layouts.admin.master')

@section('title') Dashboard Legal @endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Document Expired</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="documentTable">
                        <thead>
                            <tr>
                                <th>Document No</th>
                                <th>Document Name</th>
                                <th>Document Type</th>
                                <th>Location</th>
                                <th>Effective Date</th>
                                <th>Expired Date</th>
                                <th>Reminder Day</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Data dinamis dari database --}}
                            @foreach($documents as $document)
                            <tr>
                                <td>{{ $document->document_no }}</td>
                                <td>{{ $document->document_name }}</td>
                                <td>{{ $document->document_type }}</td>
                                <td>{{ $document->location }}</td>
                                <td>{{ $document->effective_date }}</td>
                                <td>{{ $document->expired_date }}</td>
                                <td>{{ $document->reminder_day }}</td>
                                <td>{{ $document->remarks }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#documentTable').DataTable();
    });
</script>
@endpush