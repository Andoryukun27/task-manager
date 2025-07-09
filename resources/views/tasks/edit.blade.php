@extends('layouts.app')

@section('content')
<h4>{{ isset($task) ? 'Edit Task' : 'Add New Task' }}</h4>

<form action="{{ isset($task) ? route('tasks.update', $task->id) : route('tasks.store') }}" method="POST">
    @csrf
    @if(isset($task)) @method('PUT') @endif
    <div class="mb-2">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $task->title ?? '') }}" required>
    </div>

    <div class="mb-2">
        <label>Description</label>
        <textarea name="description" class="form-control">{{ old('description', $task->description ?? '') }}</textarea>
    </div>

    <div class="mb-2">
        <label>Due Date</label>
        <input type="date" name="due_date" class="form-control" value="{{ old('due_date', $task->due_date ?? '') }}" required>
    </div>

    <button class="btn btn-success">{{ isset($task) ? 'Update' : 'Create' }}</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection