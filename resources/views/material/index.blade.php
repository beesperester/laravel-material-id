@extends('template')

@section('title', 'Materials')

@section('content')

<div class="container mt-4">

    <h1>Create</h1>

    <form action="/material" method="post">

        @include('material._form')

        <button type="submit" class="btn btn-primary">

            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

            Create

        </button>

    </form>

</div>

<div class="container mt-4">

    <h1>Materials</h1>

    @include('material.list', ['materials' => $materials])

</div>

@endsection