<?php

namespace App\Services\Impl;

use App\Services\TodoListService;
use Illuminate\Support\Facades\Session;

class TodoListServiceImpl implements TodoListService
{


    public function saveTodo(string $id, string $todo):void
    {
        if(!Session::exists("todoList")){
            Session::put("todoList",[]);
        }

        Session::push("todoList",[
            "id" => $id,
            "todo" => $todo,
        ]);
    }

    public function getTodoList(): array
    {
        
        return Session::get("todoList",[]);
    }

    public function removeTodo(string $todoId)
    {
        $todolist = Session::get("todoList");

        foreach ($todolist as $key => $value) {
            if($value['id'] == $todoId){
                unset($todolist[$key]);
                break;
            }
        }

        Session::put("todoList", $todolist);
    }

}