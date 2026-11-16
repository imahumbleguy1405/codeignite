@extends('layouts.app')

@section('title', 'Task List')

@section('content')
<section class="page-width list-page">
    <div class="list-heading">
        <div><p class="eyebrow">YOUR SCHEDULE</p><h1>Task List</h1><p class="intro-text">Every task, ordered by its scheduled date.</p></div>
        <div class="record-count"><strong>{{ $tasks->count() }}</strong><span>{{ $tasks->count() === 1 ? 'task' : 'tasks' }}</span></div>
    </div>
    <div class="table-card">
        <div class="table-toolbar"><div><span class="table-title">All tasks</span><span class="table-subtitle">Sorted by task date</span></div><span class="data-badge"><i></i> Eloquent records</span></div>
        @if ($tasks->isEmpty())
            <div class="empty-state"><span class="empty-icon">☀</span><strong>No tasks yet.</strong><p>Seed the database to add the sample tasks.</p></div>
        @else
            @foreach ($tasks as $task)
                <div class="all-task-row">
                    <span class="date-block"><strong>{{ $task->task_date->format('d') }}</strong><small>{{ $task->task_date->format('M Y') }}</small></span>
                    <div class="all-task-copy"><strong>{{ $task->title }}</strong><small>{{ $task->task_date->format('l') }}</small></div>
                    <span class="status-pill status-{{ str_replace(' ', '-', $task->status) }}">{{ ucfirst($task->status) }}</span>
                </div>
            @endforeach
        @endif
        <div class="table-footer">All tasks are retrieved from the database with the Task Eloquent model.</div>
    </div>
    <a class="back-link" href="{{ route('welcome') }}">← Back to today</a>
</section>
@endsection
