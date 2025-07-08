@extends('layouts.app')

@section('content')
<a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Add Task</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th><th>Description</th><th>Due Date</th><th>Status</th><th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description }}</td>
            <td>{{ $task->due_date }}</td>
            <td>
                <form action="{{ route('tasks.toggle', $task->id) }}" method="POST">
                    @csrf @method('PATCH')
                    <button class="btn btn-sm {{ $task->is_completed ? 'btn-success' : 'btn-warning' }}">
                        {{ $task->is_completed ? 'Completed' : 'Pending' }}
                    </button>
                </form>
            </td>
            <td>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-info">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this task?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $tasks->links() }}
@endsection