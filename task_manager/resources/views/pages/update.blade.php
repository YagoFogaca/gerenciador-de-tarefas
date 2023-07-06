@extends('layouts.index')

@section('content')
    @include('components.form', ['action' => 'updateTask', 'data' => $task])
@endsection
