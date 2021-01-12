<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Rules;
use App\Task;
use Validator;

class Todocontroller extends Controller
{
    public function index(){
        return view('welcome', ['tasks'=>Task::all()]);
    }
    public function create(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:25',
            'description' => 'required|max:1000'
        ]);
        if ($validator->fails()) {
            return redirect('')
                        ->withErrors($validator)
                        ->withInput();
        }
        else{
            //make new task
            $task = new Task;
            //fill the data
            $task->title = $request->title;
            $task->description = $request->description;
            //save
            $task->save();
            //redirect
            return redirect('');
        }
    }
    public function delete($id){
        //find the task with ID
        $task = Task::find($id);
        //delete the task
        $task->delete();
        //redirect
        return redirect('');
    }
    public function updaten($id){
        //find the task with ID
        $task = Task::find($id);
        //change status
        $task->done = !$task->done;
        //save new status
        $task->save();
        //redirect
        return redirect('');
    }
}
