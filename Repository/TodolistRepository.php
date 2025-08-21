<?php

// namespace repository
namespace Repository {

    // ambil namesape entity serta class TodoList 
    use Entity\Todolist;

    // prototype
    interface TodolistRepository
    {
        // menyimpan semua manipulasi data todoList
        // ambil dari class TodoList dan definisikan parameter todolist
        function save(Todolist $todolist): void;

        // hapus, dengan parameter number tipe data int
        function remove(int $number): bool; // : bool = boolean

        // find all, dalam array
        function findAll(): array;
    }

    // class todolist implementasi, jadi akan implement interface TodolistRepository
    class TodolistRepositoryImpl implements TodolistRepository
    {
        // variabel todolist, menggunakan array
        public array $todolist = array();

        // function save yang mengambil parameter class todolist
        function save(Todolist $todolist): void
        {
            $number = sizeof($this->todolist) + 1;
            $this->todolist[$number] = $todolist;
        }

        // function remove, dengan parameter no datanya
        function remove(int $number): bool
        {
            if ($number > sizeof($this->todolist)) {
                return false;
            }

            for ($i = $number; $i < sizeof($this->todolist); $i++) {
                $this->todolist[$i] = $this->todolist[$i + 1];
            }

            unset($this->todolist[sizeof($this->todolist)]);

            return true;
        }

        // function ambil semua data
        function findAll(): array
        {
            return $this->todolist;
        }
    }
}
