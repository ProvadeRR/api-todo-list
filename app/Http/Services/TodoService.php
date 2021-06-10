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
     * @return null|Todo
     */
    public function create($fields)
    {
        $todo = new Todo();
        $todo->fill($fields);
        $todo->save();
        $todo->fresh();
        if(!$todo){
            return null;
        }
        return $todo;
    }

    /**
     * @param $fields
     * @param $todo
     * @return null|Todo
     */
    public function update($fields, $todo){
        $todo = $todo->fill($fields);
        if(!$todo){
            return null;
        }
        return $todo;
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
