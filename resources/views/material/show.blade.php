@extends('template')

@section('title', $material->name)

@section('content')

    <div class="container">

        @include('material._material', ['material' => $material])

    </div>

@endsection