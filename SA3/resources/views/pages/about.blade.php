@extends('layouts.app')

@section('title', 'About')

@section('content')
<section class="page-width about-page">
    <p class="eyebrow">ABOUT THIS PROJECT</p>
    <h1>Tasks for Today<br><span>Management System</span></h1>
    <div class="about-grid">
        <article class="content-card">
            <span class="card-kicker">THE APPLICATION</span>
            <h2>A small task manager built with Laravel.</h2>
            <p>This application recreates the Tasks for Today Management System using Laravel, database migrations, seeders, and Eloquent models. The Welcome page filters tasks to today, while the Task List page shows every task ordered by date.</p>
            <div class="tech-tags"><span>Laravel</span><span>Eloquent ORM</span><span>Blade</span><span>SQLite</span></div>
        </article>
        <article class="content-card developer-card">
            <span class="card-kicker">DEVELOPER</span>
            <div class="developer-avatar">CT</div>
            <h2>Christian Angelo Tamayo</h2>
            <p>IT0049 · Web System Technologies<br>Section TC36</p>
            <div class="developer-rule"></div>
            <small>Technical Summative Assessment 3</small>
        </article>
    </div>
</section>
@endsection
