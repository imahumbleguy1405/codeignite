@extends('layouts.app')

@section('title', 'About')

@section('content')
<section class="page-intro page-width">
    <p class="eyebrow">ABOUT THE ACTIVITY</p>
    <h1>From zero to four pages,<br><span>again.</span></h1>
    <p class="intro-text">This small POS foundation rebuilds the TFA1 page structure in Laravel. It demonstrates how routes, controllers, and Blade views work together.</p>
</section>
<section class="page-width about-layout">
    <article class="content-card about-main">
        <span class="card-kicker">THE PROJECT</span>
        <h2>A simple POS app backed by Eloquent.</h2>
        <p>The Customer Accounts and User Accounts pages now retrieve records from the database through Laravel Eloquent models. Each controller passes its results to a Blade view, where <code>@foreach</code> renders each row.</p>
        <p>Laravel migrations create the customers and users tables, and the database seeder inserts five sample records into each table. The migration and seeder can be run again safely without duplicating those sample records.</p>
        <a class="text-link" href="{{ route('customers.index') }}">Browse customer accounts <span>→</span></a>
    </article>
    <aside class="content-card flow-card">
        <span class="card-kicker">LARAVEL MVC FLOW</span>
        <div class="flow-step"><span>01</span><div><strong>Route</strong><small>Matches the URL</small></div></div>
        <div class="flow-line"></div>
        <div class="flow-step"><span>02</span><div><strong>Controller</strong><small>Prepares page data</small></div></div>
        <div class="flow-line"></div>
        <div class="flow-step"><span>03</span><div><strong>Blade view</strong><small>Renders the page</small></div></div>
    </aside>
</section>
@endsection
