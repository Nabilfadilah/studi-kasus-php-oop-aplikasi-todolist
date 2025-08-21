<?php

// require ke folder/file nya
require_once __DIR__ . '/Entity/Todolist.php';
require_once __DIR__ . '/Helper/InputHelper.php';
require_once __DIR__ . '/Repository/TodolistRepository.php';
require_once __DIR__ . '/Service/TodolistService.php';
require_once __DIR__ . '/View/TodolistView.php';

// import/panggil namespace, class, interface
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

// tampilkan pesan
echo "Aplikasi Todolist" . PHP_EOL;

// var todolistRepository, menyimpan data TodolistRepositoryImpl
$todolistRepository = new TodolistRepositoryImpl();

// var todolistService, menyimpan data TodolistServiceImpl, dan harus punya property dari var TodolistRepositoryImpl
$todolistService = new TodolistServiceImpl($todolistRepository);

// var todolistView, menyimpan data TodolistServiceImpl, dan harus punya property dari var todolistService
$todolistView = new TodolistView($todolistService);

// ambil function showTodolist dari todolistView
$todolistView->showTodolist();
