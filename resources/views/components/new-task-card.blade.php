<div class="card">
    <div class="card-header">
        {{ $header }}
    </div>
    <div class="card-body">
        <div id="current-tasks">
            <form method="POST" action="{{ route('tasks.store') }}" autocomplete="off">
                @csrf

                <div class="form-group">
                    <label for="newTask">Título da tarefa</label>
                    <input type="text" name="task" class="form-control" id="newTask"> 
                    
                    <small id="error" class="form-text text-muted">
                        @if (count($errors) > 0)
                            Valor inválido!
                        @endif
                    </small>
                </div>
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </form>
        </div>
    </div>
</div>