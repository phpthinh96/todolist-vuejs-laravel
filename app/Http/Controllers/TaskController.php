<?php

namespace App\Http\Controllers;

use App\Events\TaskCreated;
use App\Events\TaskRemoved;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function fetchAll()
    {
        $tasks = Task::all();
        //return response()->json($tasks);
        return $tasks;
    }

    public function store(Request $request)
    {
        $task = Task::create($request->all());
        broadcast(new TaskCreated($task));
        if ($task->save()) {

            return response()->json("added");
        }
    }

    public function delete($id)
    {
        $task = Task::find($id);
        broadcast(new TaskRemoved($task));
        if (Task::destroy($id)) {

            return response()->json("deleted");
        }
    }
}
