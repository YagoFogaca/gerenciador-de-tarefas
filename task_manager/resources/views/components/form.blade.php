<section class="card card-variant">

    <form class="createTask" action={{ route($action) }} method="POST">
        @csrf
        <div class="input-group-task">
            <div class="input-group mb-3">
                <div class="mb-3">
                    <label for="time" class="form-label">Hora</label>
                    <input value={{ isset($data) ? $data['hora'] : '' }} required name="hora" type="time"
                        class="form-control" id="time">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="day">Dia</label>
                    <select required class="form-select" name="dia" id="day">
                        <option value="td" {{ isset($data['dia']) && $data['dia'] == 'td' ? 'selected' : '' }}>Todos
                            os dias</option>
                        <option value="seg" {{ isset($data['dia']) && $data['dia'] == 'seg' ? 'selected' : '' }}>
                            Segunda</option>
                        <option value="ter" {{ isset($data['dia']) && $data['dia'] == 'ter' ? 'selected' : '' }}>
                            Terça</option>
                        <option value="qua" {{ isset($data['dia']) && $data['dia'] == 'qua' ? 'selected' : '' }}>
                            Quarta</option>
                        <option value="qui" {{ isset($data['dia']) && $data['dia'] == 'qui' ? 'selected' : '' }}>
                            Quinta</option>
                        <option value="sex" {{ isset($data['dia']) && $data['dia'] == 'sex' ? 'selected' : '' }}>
                            Sexta</option>
                        <option value="sab" {{ isset($data['dia']) && $data['dia'] == 'sab' ? 'selected' : '' }}>
                            Sábado</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="task" class="form-label">Tarefa</label>
                <textarea required name="tarefa" class="form-control" id="task" rows="3">{{ isset($data) ? $data['tarefa'] : '' }}</textarea>
            </div>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-success" type="submit">Concluir</button>
            <button class="btn btn-danger" type="reset">Limpar</button>
        </div>
    </form>
</section>
