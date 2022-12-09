@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="../../css/updateTask.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Edit Task Page</title>
@endsection

@section('content')
    <div class="container">
        <div class="form_container_header">
            <a href="/task/{{ $task['id'] }}"><button class="btn_leave"><i class="material-icons btn_leave_arrow">arrow_back</i></button></a>
            <h2 class="form_container_header_title">Edit Task</h2>
        </div>
        <form action="/task/edit/{{ $task['id'] }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form_container_input">
                <input type="text" name="title" class="update_task_input update_task_input_bold" placeholder="Enter your new title" value="{{ $task['title'] }}" required/> <br/>
                <input type="date" name="date" class="update_task_input" placeholder="Enter your new date" value="{{ $task['deadline'] }}" required/> <br/>
                <textarea name="task" class="update_task_input" id="" cols="30" rows="5" placeholder="Enter your new task" required>{{ $task['task'] }}</textarea>
                <input type="submit" class="btn_update_task_submit" value="update">
            </div>
        </form>
    </div>
@endsection