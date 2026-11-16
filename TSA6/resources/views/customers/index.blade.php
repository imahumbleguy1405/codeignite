@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')
<section class="page-width list-page">
    <div class="list-heading">
        <div><p class="eyebrow">POS DIRECTORY</p><h1>Customer Accounts</h1><p class="intro-text">Contact information for customers in the sample account list.</p></div>
        <div class="record-count"><strong>{{ count($customers) }}</strong><span>sample records</span></div>
    </div>
    <div class="table-card">
        <div class="table-toolbar"><div><span class="table-title">All customers</span><span class="table-subtitle">Records loaded through Eloquent</span></div><span class="data-badge"><i></i> Database</span></div>
        <div class="table-scroll"><table><thead><tr><th>FULL NAME</th><th>EMAIL ADDRESS</th><th>PHONE</th></tr></thead><tbody>
            @foreach ($customers as $customer)
                <tr><td><span class="person-cell"><span class="table-avatar">{{ collect(explode(' ', $customer->full_name))->map(fn ($part) => strtoupper(substr($part, 0, 1)))->take(2)->implode('') }}</span><strong>{{ $customer->full_name }}</strong></span></td><td>{{ $customer->email }}</td><td>{{ $customer->phone }}</td></tr>
            @endforeach
        </tbody></table></div>
        <div class="table-footer">Showing {{ count($customers) }} sample customer accounts</div>
    </div>
    <a class="back-link" href="{{ route('users.index') }}">Next: User Accounts <span>→</span></a>
</section>
@endsection
