@extends('layouts.index')

@section('content')
    @include('components.form', ['action' => 'create'])
@endsection
