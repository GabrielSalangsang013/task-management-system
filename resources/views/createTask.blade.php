@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="../../css/createTask.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Create Task Page</title>
@endsection

@section('content')
    <div class="container">
        <div class="form_container_header">
            <a href="/"><button class="btn_leave"><i class="material-icons btn_leave_arrow">arrow_back</i></button></a>
            <h2 class="form_container_header_title">Create Task</h2>
        </div>
        <form action="/task/create" method="POST">
            @csrf
            @method('POST')
            <div class="form_container_input">
                <input type="text" name="title" class="create_task_input create_task_input_bold" placeholder="Enter your title" required/> <br/>
                <input type="date" name="date" class="create_task_input" placeholder="Enter your date" required/> <br/>
                <textarea name="task" class="create_task_input" id="" cols="30" rows="5" placeholder="Enter your task" required></textarea>
                <input type="submit" class="btn_create_task_submit" value="Create">
            </div>
        </form>
    </div>
@endsection