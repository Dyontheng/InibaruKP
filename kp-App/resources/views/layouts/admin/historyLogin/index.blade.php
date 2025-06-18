@extends('Master.masterHistoryLogin')
@section('content')
    <div class="container">
        <h2>Riwayat Login</h2>

        @if ($histories->isEmpty())
            <p>Tidak ada riwayat login.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Tanggal & Waktu Login</th>
                        <th>IP Address</th>
                        <th>User Agent</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($histories as $history)
                        <tr>
                            <td>{{ $history->user->email ?? '-' }}</td>
                            <td>{{ $history->user->role ?? '-' }}</td>
                            <td> {{ $history->login_at}}</td>
                            <td>{{ $history->ip_address }}</td>
                            <td>{{ $history->user_agent }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
