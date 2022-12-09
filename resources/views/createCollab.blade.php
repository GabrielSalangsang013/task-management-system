@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="../../css/createCollab.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Create Collaborator Page</title>
@endsection

@section('content')
    <div class="container">
        <div class="form_container_header">
            <a href="/task/{{ $task['id'] }}"><button class="btn_leave"><i class="material-icons btn_leave_arrow">arrow_back</i></button></a>
            <h2 class="form_container_header_title">Create Collaborator</h2>
        </div>
        <form action="/task/{{ $task['id'] }}/collab/create" method="POST">
            @csrf
            <div class="cover_form_container_input">
            
                <div class="form_container_input">
                    <label for="fname" class="create_task_input_label">First Name</label><br/>
                    <input type="text" name="fname" id="fname" class="create_task_input" placeholder="Enter your first name" required/> <br/>
                </div>

                <div class="form_container_input">
                    <label for="lname" class="create_task_input_label">Last Name</label><br/>
                    <input type="text" name="lname" id="lname" class="create_task_input" placeholder="Enter your last name" required/> <br/>
                </div>
                

                <input type="submit" class="btn_create_task_submit" value="Create">
            </div>
        </form>
    </div>
@endsection