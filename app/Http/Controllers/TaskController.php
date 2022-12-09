<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Collab;

class TaskController extends Controller
{

    public function formIndex() {
        $tasks = Task::all();
        return view('index', ['tasks' => $tasks]);
    }

    public function formCreateTaskPage() {
        return view('createTask');
    }

    public function formEditTaskPage($id) {
        $task = Task::find($id);

        return view('editTask', ['task' => $task]);
    }

    public function formTaskInfo($id) {
        $task = Task::find($id);
        $collab = Collab::where('task_id', $id)->get();

        return view('info', ['taskandcollab' => [$task, $collab]]);
    }

    public function formContactPage() {
        return view('contact');
    }

    public function formAboutPage() {
        return view('about');
    }

    public function formCreateCollabPage($id) {
        $task = Task::find($id);
        return view('createCollab', ['task' => $task]);
    }

    public function createTask() {
        $task = new Task();
        $task->title = request('title');
        $task->deadline = request('date');
        $task->task = request('task');
        /* It saves the data to the database. */
        $task->save();
        return redirect('/')->with('msg', 'New Task Created!');
    }

    public function createCollab($id) {
        $collab = new Collab();
        $collab->firstname = request('fname');
        $collab->lastname = request('lname');
        $collab->task_id = $id;
        $collab->save();
        return redirect("/task" ."/" . $id)->with('msg', 'New Collaborator Added!');
    }

    public function deleteCollab($taskid, $collabid) {
        $collab = Collab::where([
            'task_id' => $taskid,
            'id' => $collabid
        ])->get();

        $collab[0]->delete();

        return redirect("/task" ."/" . $taskid)->with('msg', 'Collaborator Deleted!');
    }

    public function editTask($id) {
        $task = Task::find($id);
        $task->title = request('title');
        $task->deadline = request('date');
        $task->task = request('task');
        $task->save();
        return redirect("/task" ."/" . $id)->with('msg', 'Task Updated');
    } 

    public function deleteTask($id) {
        $task = Task::find($id);
        $task->delete();
        return redirect('/')->with('msg', 'Task Deleted!');
    }

}
