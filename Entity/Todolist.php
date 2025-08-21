<?php
// fokuskan dulu pertama buat entity dulu

// namespace Entity, agar mudah pemanggilan class nya
namespace Entity {

    // TodoList
    class Todolist
    {
        // property todo, yang hanya bisa dipakai di class Todolist
        private string $todo;

        // construct, parameter todo optional, karena saya kasih string kosong
        public function __construct(string $todo = "")
        {
            $this->todo = $todo;
        }

        // function get
        public function getTodo(): string
        {
            // kembalikan variabel todo
            return $this->todo;
        }

        // function set
        public function setTodo(string $todo): void
        {
            // kembalikan variabel todo
            $this->todo = $todo;
        }
    }
}
