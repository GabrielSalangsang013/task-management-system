@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="../css/info.css">
    <title>Info Page</title>
@endsection

@section('content')
    <div class="taskinfocontainer">
        <div class="taskinfocontainerheader">

            <a href="/" ><span class="material-symbols-outlined taskinfocontainertitleleft">arrow_back</span> </a>
            <a href="/task/edit/{{ $taskandcollab[0]['id'] }}"><span class="taskinfocontainertitle">Task Information</span></a>

            <form action="/task/delete/{{ $taskandcollab[0]['id'] }}" method="POST">
            @csrf
                <span class="btninfo">
                    <button class="deletebtn"> 
                        <span class="material-symbols-outlined btndelete">
                            delete
                        </span>
                        <span>Delete Task</span>
                    </button>
                </span>
            </form>
        </div>

        <div class="taskinfocontainermain">
            <br/>
            <h2 class="taskinfocontainermaintitle">{{ $taskandcollab[0]['title'] }}</h2>
            <h4 class="taskinfocontainermaindate">{{ $taskandcollab[0]['deadline'] }}</h4>
            <h4 class="taskinfocontainermaintask">{{ $taskandcollab[0]['task'] }}</h4>

            <br/>
            <h2 class="taskinfocontainermaintitle">Collaborators</h2>
            <br/>
            <div class="taskcollaboratormain">

                @foreach($taskandcollab[1] as $collab)
                    <form action="/task/{{ $taskandcollab[0]['id'] }}/collab/delete/{{ $collab['id'] }}" method="POST">
                        @csrf
                            <span class="taskcollaboratormainuser">
                                <span>{{ $collab['firstname'] }} {{ $collab['lastname'] }}</span>
                                <span>&nbsp;</span>
                                <button class="deletebtn"> 
                                    <span class="material-symbols-outlined btndelete">
                                        delete
                                    </span>
                                </button>
                            </span>    
                    </form>
                @endforeach

                <a href="/collab/create/{{ $taskandcollab[0]['id'] }}"><span class="readaddcollabbtn">Add Collab</span></a>
            </div>
        </div>
    </div>
@endsection