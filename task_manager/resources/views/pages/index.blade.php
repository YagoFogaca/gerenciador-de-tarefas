@extends('layouts.index')

@section('content')
    <section class="carrossel">
        <i class="fa-solid fa-arrow-left arrows left"></i>

        @foreach ($data as $days => $tasks)
            @include('components.card', ['days' => $days, 'tasks' => $tasks])
        @endforeach

        <i class="fa-solid fa-arrow-right arrows right"></i>
    </section>
@endsection
