@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<section class="hero page-width">
    <div class="hero-heading">
        <div>
            <p class="eyebrow"><span class="eyebrow-dot"></span> TASKS FOR TODAY</p>
            <h1>Welcome back.<br><span>Let’s make today count.</span></h1>
            <p class="hero-text">Your focus for {{ $today->format('l, F j, Y') }}. This page shows only tasks scheduled for today.</p>
        </div>
        <a class="button button-primary" href="{{ route('tasks.index') }}">View all tasks <span aria-hidden="true">→</span></a>
    </div>

    <div class="today-panel">
        <div class="panel-heading"><div><span class="muted-label">TODAY’S PLAN</span><h2>{{ $tasks->count() }} {{ $tasks->count() === 1 ? 'task' : 'tasks' }}</h2></div><span class="date-chip">{{ $today->format('M j') }}</span></div>
        @if ($tasks->isEmpty())
            <div class="empty-state"><span class="empty-icon">☀</span><strong>No tasks scheduled for today.</strong><p>Enjoy the open space or check the complete task list.</p></div>
        @else
            @foreach ($tasks as $task)
                <article class="task-row">
                    <span class="task-check {{ $task->status === 'completed' ? 'is-complete' : '' }}">{{ $task->status === 'completed' ? '✓' : '' }}</span>
                    <span class="task-copy"><strong>{{ $task->title }}</strong><small>{{ ucfirst($task->status) }}</small></span>
                    <span class="status-pill status-{{ str_replace(' ', '-', $task->status) }}">{{ ucfirst($task->status) }}</span>
                </article>
            @endforeach
        @endif
        <div class="panel-footer"><span>Showing today’s tasks only</span><a href="{{ route('tasks.index') }}">Open full task list →</a></div>
    </div>
</section>

<section class="page-width overview-strip">
    <a class="overview-card" href="{{ route('tasks.index') }}"><span class="overview-icon icon-purple">✓</span><span><strong>Task List</strong><small>Browse every task by date</small></span><b>→</b></a>
    <a class="overview-card" href="{{ route('profile') }}"><span class="overview-icon icon-blue">◎</span><span><strong>Your Profile</strong><small>View account information</small></span><b>→</b></a>
    <a class="overview-card" href="{{ route('about') }}"><span class="overview-icon icon-green">i</span><span><strong>About</strong><small>Learn about this project</small></span><b>→</b></a>
</section>
@endsection
