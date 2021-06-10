<?php

namespace App\Http\Controllers\Api\Todo;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Todo\CreateFormRequest;
use App\Http\Services\TodoService;
use App\Models\Todo\Todo;



class TodoController extends ApiController
{
    protected $service;

    public function __construct(TodoService $service)
    {
        $this->service = $service;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        $todos = $this->service->getTodos();
        if(count($todos) < 1){
            return $this->sendError('Нету задач', 404);
        }
        return $this->sendSuccess($todos, 'Вы успешно получили задачи',200);
    }


    /**
     * @param CreateFormRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(CreateFormRequest $request)
    {
        $fill = $request->only(Todo::API_FIELS);
        $todo = $this->service->create($fill);
        if(!$todo){
            return $this->sendError('Что-то пошло не так',404);
        }

        return $this->sendSuccess($todo,'Вы успешно создали задачу', 201);
    }

    /**
     * @param CreateFormRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CreateFormRequest $request, Todo $todo){
        $fill = $request->only(Todo::API_FIELS);
        $todo = $this->service->update($fill, $todo);
        if(!$todo){
            return $this->sendError('Что-то пошло не так',404);
        }

        return $this->sendSuccess($todo,'Вы успешно обновили задачу', 200);
    }

    /**
     * @param Todo $todo
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Todo $todo){
        $todo = $this->service->delete($todo);
        if(!$todo){
            return $this->sendError('Что-то пошло не так',404);
        }
        return $this->sendSuccess($todo,'Вы успешно удалили задачу', 200);
    }
}
