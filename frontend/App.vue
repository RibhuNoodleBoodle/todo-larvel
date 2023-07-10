<template>
    <div class="max-w-md mx-auto mt-4 p-4">
      <h1 class="text-2xl font-bold mb-4">Todo List</h1>
  
      <form @submit.prevent="addTodo">
        <input
          type="text"
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
        <li v-for="todo in todos" :key="todo.id" class="my-2">
          {{ todo.title }}
          <button
            @click="deleteTodo(todo.id)"
            class="ml-2 text-red-500 hover:text-red-600"
          >
            Delete
          </button>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        newTodo: '',
        todos: [],
      };
    },
    methods: {
      addTodo() {
        if (this.newTodo) {
          this.todos.push({ id: Date.now(), title: this.newTodo });
          this.newTodo = '';
        }
      },
      deleteTodo(id) {
        this.todos = this.todos.filter(todo => todo.id !== id);
      },
    },
  };
  </script>
  