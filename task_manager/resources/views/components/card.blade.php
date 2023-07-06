<section class="card">
    <div class="card-title">
        <h3>{{ $days }}</h3>
    </div>
    <table class="table">
        <tr>
            <th class="line-minor">Feito</th>
            <th class="line-minor">Hora</th>
            <th class="line">Tarefa</th>
            <th class="line-minor config">Editar</th>
            <th class="line-minor config">Apagar</th>
        </tr>

        @foreach ($tasks as $task)
            <tr class="task">
                <td class="line-minor">
                    <a href="#">
                        <i class="fa-solid fa-check"></i>
                    </a>
                </td>
                <td class="line-minor">{{ $task['hora'] }}</td>
                <td class="line">{{ $task['tarefa'] }}</td>
                <td class="line-minor config">
                    <a href="/update?id={{ $task['id'] }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
                <td class="line-minor config">
                    <a href={{ route('delete', ['id' => $task['id']]) }}>
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
</section>
