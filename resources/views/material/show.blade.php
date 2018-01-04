@extends('template')

@section('title', $material->name)

@section('content')

    <div class="container pt-4 pb-4">

        @include('material._material', ['material' => $material])

    </div>

@endsection