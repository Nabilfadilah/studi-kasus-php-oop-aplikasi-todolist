<?php

// service untuk yang ngelakuin logic nya

// namespace service
namespace Service {

    // ambil namesape entity serta class TodoList 
    use Entity\Todolist;

    // ambil namesape repository serta interface TodolistRepository 
    use Repository\TodolistRepository;

    // interface TodolistServe, karena bisnis logic kita buat interface
    interface TodolistService
    {
        // action show/tampilkan todolist, tidak pake parameter
        function showTodolist(): void; // return nya : void

        // add todolist, parameter nama todolist nya
        function addTodolist(string $todo): void;  // return nya : void

        // remove todolist, param number tipe data int
        function removeTodolist(int $number): void;  // return nya : void
    }

    // class todolist implementasi, jadi akan implement interface TodolistService
    class TodolistServiceImpl implements TodolistService
    {
        // ambil interface TodolistRepository, atau ambil attribute
        private TodolistRepository $todolistRepository;

        // set sebagai construct, yang punya parameter TodolistRepository
        public function __construct(TodolistRepository $todolistRepository)
        {
            // set 
            $this->todolistRepository = $todolistRepository;
        }

        // show, menampilkan todolist datanya
        function showTodolist(): void
        {
            echo "TODOLIST" . PHP_EOL;

            // ambil todolist nya dengan findAll
            $todolist = $this->todolistRepository->findAll();
            foreach ($todolist as $number => $value) {
                echo "$number. " . $value->getTodo() . PHP_EOL;
            }
        }

        // add 
        function addTodolist(string $todo): void
        {
            $todolist = new Todolist($todo);
            $this->todolistRepository->save($todolist);
            echo "SUKSES MENAMBAH TODOLIST" . PHP_EOL;
        }

        // remove
        function removeTodolist(int $number): void
        {
            if ($this->todolistRepository->remove($number)) {
                echo "SUKSES MENGHAPUS TODOLIST" . PHP_EOL;
            } else {
                echo "GAGAL MENGHAPUS TODOLIST" . PHP_EOL;
            }
        }
    }
}
