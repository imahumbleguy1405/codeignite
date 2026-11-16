@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<section class="page-width profile-page">
    <div class="page-title-block"><p class="eyebrow">ACCOUNT</p><h1>Profile</h1><p class="intro-text">The single user record stored for this task management system.</p></div>
    <article class="profile-card">
        <div class="profile-banner"></div>
        <div class="profile-content">
            <div class="profile-avatar">{{ collect(explode(' ', $user->full_name))->map(fn ($part) => strtoupper(substr($part, 0, 1)))->take(2)->implode('') }}</div>
            <span class="profile-label">SYSTEM USER</span>
            <h2>{{ $user->full_name }}</h2>
            <p class="profile-username">{{ '@'.$user->username }}</p>
            <div class="profile-details">
                <div><span>FULL NAME</span><strong>{{ $user->full_name }}</strong></div>
                <div><span>USERNAME</span><strong>{{ $user->username }}</strong></div>
                <div><span>EMAIL ADDRESS</span><strong>{{ $user->email }}</strong></div>
            </div>
        </div>
    </article>
    <a class="back-link" href="{{ route('welcome') }}">← Back to today</a>
</section>
@endsection
