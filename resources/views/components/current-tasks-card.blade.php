<div class="card">
    <div class="card-header">
        {{ $header }}
    </div>
    <div class="card-body">
        <div id="current-tasks">
            @foreach ($tasks as $task)
                <div class="task">
                    <div class="task-title">{{$task['name']}}</div>

                    <form method="POST" action="{{ route('tasks.destroy', [ 'task' => $task['id'] ]) }}" class="task-done">
                        @csrf

                        <input type="hidden" name="_method" value="delete">
                        <button type="submit">Feito</button>
                    </form>
                </div>

                @unless ($loop->last)
                    <hr/>
                @endunless
            @endforeach
        </div>
    </div>
</div>