@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="./css/index.css">
    <title>Index Page</title>
@endsection

@section('content')
    <div class="container">
        <div class="header_container">
            <h1 class="header_container_title">Tasks</h1>
            <a href="/task/create"><button class="header_container_btnAddTask">Add Task</button></a>
        </div>

        @if(session()->has('msg'))
            <div class="notification">
                <span class="material-symbols-outlined">
                    check_circle 
                </span>
                &nbsp;&nbsp;<span class="message">{{ session('msg') }}</span>
            </div>
        @endif
        
        <div class="content_container">

            @foreach($tasks as $task)
                <a href="/task/{{ $task['id'] }}">
                    <div class="content_container_task">
                        <div class="content_container_task_header">
                            <h2>{{ $task['title'] }}</h2>
                        </div>
                        <div class="content_container_task_content">
                            <div class="content_container_task_content_date">{{ $task['deadline'] }}</div>
                            <div class="content_container_task_content_task">{{ $task['task'] }}</div>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
    </div>
@endsection