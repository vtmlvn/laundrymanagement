<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class TaskController extends Controller
{

	public function index(){
		$tasks = \App\Task::whereNotNull('id');

		if(request()->has('owner'))
			$tasks->where('owner','like','%'.request('owner').'%');

        if(request()->has('status'))
            $tasks->whereStatus(request('status'));

        $tasks->orderBy(request('sortBy'),request('order'));

		return $tasks->paginate(request('pageLength'));
	}

    public function store(Request $request){
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln(json_encode($request->all()));
        $validation = Validator::make($request->all(), [
            'owner' => 'required',
            'type' => 'required',
            'start_date' => 'required|date_format:Y-m-d',
            'due_date' => 'required|date_format:Y-m-d|after:start_date'
        ]);

        if($validation->fails())
            
        	return response()->json(['message' => $validation->messages()->first()],422);

        $user = \JWTAuth::parseToken()->authenticate();
        $task = new \App\Task;
        $task->fill(request()->all());
        $task->uuid = generateUuid();
        $task->user_id = $user->id;
        $task->save();

        return response()->json(['message' => 'Task added!', 'data' => $task]);
    }

    public function destroy(Request $request, $id){
        $task = \App\Task::find($id);

        if(!$task)
            return response()->json(['message' => 'Couldnot find task!'],422);

        $task->delete();

        return response()->json(['message' => 'Task deleted!']);
    }

    public function show($id){
        $task = \App\Task::whereUuid($id)->first();

        if(!$task)
            return response()->json(['message' => 'Couldnot find task!'],422);

        return $task;
    }

    public function update(Request $request, $id){

        $task = \App\Task::whereUuid($id)->first();

        if(!$task)
            return response()->json(['message' => 'Couldnot find task!']);

        $validation = Validator::make($request->all(), [
            'title' => 'required|unique:tasks,title,'.$task->id.',id',
            'description' => 'required',
            'start_date' => 'required|date_format:Y-m-d',
            'due_date' => 'required|date_format:Y-m-d|after:start_date'
        ]);

        if($validation->fails())
            return response()->json(['message' => $validation->messages()->first()],422);

        $task->title = request('title');
        $task->description = request('description');
        $task->start_date = request('start_date');
        $task->due_date = request('due_date');
        $task->progress = request('progress');
        $task->save();

        return response()->json(['message' => 'Task updated!', 'data' => $task]);
    }

    public function toggleStatus(Request $request){
        $task = \App\Task::find($request->input('id'));

        if(!$task)
            return response()->json(['message' => 'Couldnot find task!'],422);

        $task->status = !$task->status;
        $task->save();

        return response()->json(['message' => 'Task updated!']);
    }
}
