<?php

// harus require dulu ke folder/file nya
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

// import/panggil namespace, class, interface
use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

// function test menampilkan todolist
function testShowTodolist(): void
{
    // var todolistRepository, menyimpan data TodolistRepositoryImpl
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = new Todolist("Belajar PHP");
    $todolistRepository->todolist[2] = new Todolist("Belajar PHP OOP");
    $todolistRepository->todolist[3] = new Todolist("Belajar PHP Database");

    // var todolistRepository, menyimpan data TodolistServiceImpl, dan harus punya property dari var TodolistRepositoryImpl
    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodolist();
}

// function testAddTodolist(): void
// {
//     $todolistRepository = new TodolistRepositoryImpl();

//     $todolistService = new TodolistServiceImpl($todolistRepository);
//     $todolistService->addTodolist("Belajar PHP");
//     $todolistService->addTodolist("Belajar PHP OOP");
//     $todolistService->addTodolist("Belajar PHP Database");

//     $todolistService->showTodolist();
// }

// function testRemoveTodolist(): void
// {
//     $todolistRepository = new TodolistRepositoryImpl();

//     $todolistService = new TodolistServiceImpl($todolistRepository);
//     $todolistService->addTodolist("Belajar PHP");
//     $todolistService->addTodolist("Belajar PHP OOP");
//     $todolistService->addTodolist("Belajar PHP Database");

//     $todolistService->showTodolist();

//     $todolistService->removeTodolist(1);
//     $todolistService->showTodolist();

//     $todolistService->removeTodolist(4);
//     $todolistService->showTodolist();

//     $todolistService->removeTodolist(2);
//     $todolistService->showTodolist();

//     $todolistService->removeTodolist(1);
//     $todolistService->showTodolist();
// }

// testRemoveTodolist();
