<!-- resources/views/todos/index.blade.php -->
<h1>Todo List</h1>

<form action="{{ route('todos.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Add a new todo">
    <button type="submit">Add</button>
</form>

<ul>
    @foreach ($todos as $todo)
        <li>
            {{ $todo->title }}
            <form action="{{ route('todos.destroy', $todo) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
