<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/dist/style.css" />
    <title>Todo List</title>
  </head>
  <body>
    <div id="app">
      <h1 class="text-2xl font-bold mb-4">Todo List</h1>

      <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <input
          type="text"
          name="title"
          v-model="newTodo"
          placeholder="Add a new todo"
          class="p-2 border border-gray-300 rounded w-full mb-4"
        />
        <button
          type="submit"
          class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded"
        >
          Add
        </button>
      </form>

      <ul class="list-disc pl-6">
        @foreach ($todos as $todo)
          <li class="my-2">
            {{ $todo->title }}
            <form action="{{ route('todos.destroy', $todo) }}" method="POST" class="inline">
              @csrf
              @method('DELETE')
              <button
                type="submit"
                class="ml-2 text-red-500 hover:text-red-600"
              >
                Delete
              </button>
            </form>
          </li>
        @endforeach
      </ul>
    </div>
    <script type="module" src="/dist/main.js"></script>
  </body>
</html>
