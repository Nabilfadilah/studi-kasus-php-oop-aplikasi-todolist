<?php

// namespace view
namespace View {

    // ambil namesape service serta class TodoListService 
    use Service\TodolistService;
    use Helper\InputHelper;

    // langsung class, tidak harus interface
    class TodolistView
    {

        // ambil interface todolistservice, dan berikan var $todolistService 
        private TodolistService $todolistService;

        // construct untuk interface TodolistService, dan buat param $todolistService
        public function __construct(TodolistService $todolistService)
        {
            // maka ambil object todolistservice, sama dengan param $todolistService
            $this->todolistService = $todolistService;
        }

        // show, tidak perlu parameter, karena cuma ngerender tampilan saja
        function showTodolist(): void
        {
            while (true) {
                // variabel todolistService, ambil function todolist
                $this->todolistService->showTodolist();

                // tampilkan di terminal
                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

                $pilihan = InputHelper::input("Pilih");

                // pilihan dengan ketik nomor
                if ($pilihan == "1") {
                    $this->addTodolist(); // maka akan menambah todolist
                } else if ($pilihan == "2") {
                    $this->removeTodolist(); // maka akan remove todolist
                } else if ($pilihan == "x") { // makan akan keluar dari todolist
                    break;
                } else {
                    echo "Pilihan tidak dimengerti" . PHP_EOL; // kalau beda 
                }
            }

            echo "Sampai Jumpa Lagi" . PHP_EOL; // tampilkan ini jika keluar
        }

        // add, tidak perlu parameter
        function addTodolist(): void
        {
            // tampilkan pesan 
            echo "MENAMBAH TODO" . PHP_EOL;

            // variabel $todo, menyimpan class InputHelper, dan static function input
            $todo = InputHelper::input("Todo (x untuk batal)");

            // jika var todo adalah 'x'
            if ($todo == "x") {
                // tampilkan pesan
                echo "Batal menambah todo" . PHP_EOL;
            } else { // jika bukan 'x'
                // maka gunakan interface todolistService dari function addtodolist, tambah todolist
                $this->todolistService->addTodolist($todo);
            }
        }

        // remove, tidak perlu parameter
        function removeTodolist(): void
        {
            // tampilkan pesan
            echo "MENGHAPUS TODO" . PHP_EOL;

            // variabel $pilihan, menyimpan class InputHelper, dan static function input
            $pilihan = InputHelper::input("Nomor (x untuk batalkan)");

            // jika var pilihan adalah 'x'
            if ($pilihan == "x") {
                // tampilkan pesan
                echo "Batal menghapus todo" . PHP_EOL;
            } else { // jika bukan 'x'
                // maka gunakan interface todolistService dari function removeTodolist, remove todolist
                $this->todolistService->removeTodolist($pilihan);
            }
        }
    }
}
