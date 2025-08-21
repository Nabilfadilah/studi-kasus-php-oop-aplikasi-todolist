<?php

// harus require dulu ke folder/file nya
require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodolistService.php';
require_once __DIR__ . '/../View/TodolistView.php';
require_once __DIR__ . '/../Helper/InputHelper.php';

// import/panggil namespace, class, interface
use \Entity\Todolist;
use \Repository\TodolistRepositoryImpl;
use \Service\TodolistServiceImpl;
use \View\TodolistView;

// function test menampilkan todolist
function testViewShowTodolist(): void
{
    // var todolistRepository, menyimpan data TodolistRepositoryImpl
    $todolistRepository = new TodolistRepositoryImpl();

    // var todolistService, menyimpan data TodolistServiceImpl, dan harus punya property dari var TodolistRepositoryImpl
    $todolistService = new TodolistServiceImpl($todolistRepository);

    // var todolistView, menyimpan data TodolistServiceImpl, dan harus punya property dari var todolistService
    $todolistView = new TodolistView($todolistService);

    // ambil function addTodolist dari service
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    // ambil function showTodolist dari todolistView
    $todolistView->showTodolist();
}

// function test add todolist
function testViewAddTodolist(): void
{
    // var todolistRepository, menyimpan data TodolistRepositoryImpl
    $todolistRepository = new TodolistRepositoryImpl();

    // var todolistService, menyimpan data TodolistServiceImpl, dan harus punya property dari var TodolistRepositoryImpl
    $todolistService = new TodolistServiceImpl($todolistRepository);

    // var todolistView, menyimpan data TodolistServiceImpl, dan harus punya property dari var todolistService
    $todolistView = new TodolistView($todolistService);

    // ambil function addTodolist dari service
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    // ambil function showTodolist dari todolistService
    $todolistService->showTodolist();

    // ambil function showTodolist dari todolistView
    $todolistView->addTodolist();

    // ambil function showTodolist dari todolistService
    $todolistService->showTodolist();

    // ambil function addTodolist dari todolistView
    $todolistView->addTodolist();

    $todolistService->showTodolist();
}

// function test remove todolist
function testViewRemoveTodolist(): void
{
    // var todolistRepository, menyimpan data TodolistRepositoryImpl
    $todolistRepository = new TodolistRepositoryImpl();

    // var todolistService, menyimpan data TodolistServiceImpl, dan harus punya property dari var TodolistRepositoryImpl
    $todolistService = new TodolistServiceImpl($todolistRepository);

    // var todolistView, menyimpan data TodolistServiceImpl, dan harus punya property dari var todolistService
    $todolistView = new TodolistView($todolistService);

    // ambil function addTodolist dari service
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    // ambil function showTodolist dari todolistService
    $todolistService->showTodolist();

    $todolistView->removeTodolist();

    $todolistService->showTodolist();

    $todolistView->removeTodolist();

    $todolistService->showTodolist();
}

testViewRemoveTodolist();
