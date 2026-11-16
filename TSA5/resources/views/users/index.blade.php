@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
<section class="page-width list-page">
    <div class="list-heading">
        <div><p class="eyebrow">POS DIRECTORY</p><h1>User Accounts</h1><p class="intro-text">Staff usernames, names, and roles in the sample account list.</p></div>
        <div class="record-count"><strong>{{ count($users) }}</strong><span>sample records</span></div>
    </div>
    <div class="table-card">
        <div class="table-toolbar"><div><span class="table-title">All users</span><span class="table-subtitle">Temporary static data</span></div><span class="data-badge"><i></i> PHP array</span></div>
        <div class="table-scroll"><table><thead><tr><th>USERNAME</th><th>FULL NAME</th><th>ROLE</th></tr></thead><tbody>
            @foreach ($users as $user)
                <tr><td><span class="username">{{ '@'.$user['username'] }}</span></td><td><span class="person-cell"><span class="table-avatar table-avatar-green">{{ collect(explode(' ', $user['full_name']))->map(fn ($part) => strtoupper(substr($part, 0, 1)))->take(2)->implode('') }}</span><strong>{{ $user['full_name'] }}</strong></span></td><td><span class="role-pill">{{ $user['role'] }}</span></td></tr>
            @endforeach
        </tbody></table></div>
        <div class="table-footer">Showing {{ count($users) }} sample staff accounts</div>
    </div>
    <a class="back-link" href="{{ route('customers.index') }}">← Back to Customer Accounts</a>
</section>
@endsection
