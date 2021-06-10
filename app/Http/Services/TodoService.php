<?php


namespace App\Http\Services;


use App\Models\Todo\Todo;

class TodoService
{


    /**
     * @return array
     */
    public function getTodos(){
        return Todo::all()->toArray();
    }

    /**
     * @param $fields
     * @return bool
     */
    public function create($fields){
        $todo = Todo::create($fields);
        if(!$todo){
            return false;
        }
        return true;
    }

    /**
     * @param $fields
     * @return bool
     */
    public function update($fields, $todo){
        $todo = $todo->update($fields);
        if(!$todo){
            return false;
        }
        return true;
    }

    /**
     * @param Todo $todo
     * @return bool|null
     */
    public function delete(Todo $todo){
        $todo = $todo->delete();
        return $todo;
    }
}
