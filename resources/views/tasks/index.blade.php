@extends('layouts.app')

@section('style')
    <style>
        #tasks-controller {
            height: 94vh;

            display: flex;
            justify-content: center;
            align-items: center;            
            flex-direction: column;
        }

        .card {
            width: 50%;
            margin-bottom: 30px;
        }

        div.task {
            display: flex;
            flex-direction: row;            

            margin-bottom: 15px;
        }

        div.task > .task-title {            
            width: 50%;
        }

        div.task > .task-done {
            text-align: center;
            width: 50%;
        }

        form.task-done button {
            background-color: Transparent;
            background-repeat:no-repeat;

            border: none;

            cursor:pointer;
            overflow: hidden;
            outline:none;

            color: #017BFF;
        }
    </style>
@endsection

@section('content')
    <div id="tasks-controller">
        @component('components.new-task-card')
            @slot('header')
                Nova tarefa
            @endslot
        @endcomponent

        @component('components.current-tasks-card', ['tasks' => $tasks])
            @slot('header')
                Tarefas atuais
            @endslot
        @endcomponent
    </div>
@endsection
