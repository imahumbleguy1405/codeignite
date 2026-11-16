@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="hero">
    <div class="hero-copy">
        <p class="eyebrow"><span class="eyebrow-dot"></span> POINT OF SALE · FOUNDATIONS</p>
        <h1>Simple tools for<br><span>everyday retail.</span></h1>
        <p class="hero-text">A first look at the pages behind a point-of-sale system. Browse customer and staff account records in this Laravel demo.</p>
        <div class="hero-actions">
            <a class="button button-primary" href="{{ route('customers.index') }}">View customers <span aria-hidden="true">→</span></a>
            <a class="button button-quiet" href="{{ route('about') }}">About this project</a>
        </div>
        <div class="hero-note"><span class="note-icon">i</span> Sample records are stored in PHP arrays for this activity.</div>
    </div>
    <div class="hero-card" aria-label="POS dashboard preview">
        <div class="card-top"><div><span class="muted-label">TODAY'S OVERVIEW</span><h2>Store dashboard</h2></div><span class="status-pill"><i></i> Demo</span></div>
        <div class="dashboard-grid">
            <div class="metric-card"><span class="metric-icon violet">↗</span><span class="metric-label">CUSTOMERS</span><strong>05</strong><span class="metric-caption">Sample accounts</span></div>
            <div class="metric-card"><span class="metric-icon mint">◉</span><span class="metric-label">TEAM USERS</span><strong>05</strong><span class="metric-caption">Staff accounts</span></div>
        </div>
        <div class="preview-row"><span class="preview-avatar avatar-one">MS</span><span class="preview-name">Maria Santos<small>Customer account</small></span><span class="preview-tag">ACTIVE</span></div>
        <div class="preview-row"><span class="preview-avatar avatar-two">JD</span><span class="preview-name">Juan Dela Cruz<small>Cashier account</small></span><span class="preview-tag">ACTIVE</span></div>
        <div class="card-bottom"><span>Preview data</span><span>Static PHP arrays <b>↗</b></span></div>
    </div>
</section>

<section class="quick-links page-width">
    <div class="section-heading"><div><p class="eyebrow">EXPLORE THE APP</p><h2>Four pages, one starting point.</h2></div><p>Use the navigation to move between each section.</p></div>
    <div class="link-grid">
        <a class="link-card" href="{{ route('about') }}"><span class="link-icon icon-blue">01</span><span><strong>About</strong><small>How this app is organized</small></span><b>→</b></a>
        <a class="link-card" href="{{ route('customers.index') }}"><span class="link-icon icon-purple">02</span><span><strong>Customer Accounts</strong><small>Contact details for customers</small></span><b>→</b></a>
        <a class="link-card" href="{{ route('users.index') }}"><span class="link-icon icon-green">03</span><span><strong>User Accounts</strong><small>Staff usernames and roles</small></span><b>→</b></a>
    </div>
</section>
@endsection
