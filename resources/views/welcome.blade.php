@extends('template')

@section('title', 'Welcome')

@section('content')

<div class="bg-primary">

    <div class="container pt-4 pb-4">

        <h2 class="mb-4">What is this all about?</h2>

        <div class="row">

            <div class="col-md text-justify">

                <p>When working on large scale cg projects or small personal designs it is easy to get lost in the amount of materials and their corresponding color coded ids.</p>

                <p>You have your final comp setup, when suddenly you get renderings from a different software package and all your meticulously prepared material masks are useless.</p>

                <p>With {{env('APP_NAME')}} you can convert your material names into unique and consistent material id colors with ease. Simply enter the name of your material and get the corresponding id color.</p>             

            </div>

            <div class="col-md text-justify">                

                <p>By keeping your material names consistent across your software packages and projects you will get predictable and reproducible results for your color ids.</p>

                <p>When using {{env('APP_NAME')}} it is easy to reuse comp setups because generic materials will always have the same color id.</p>

                <p>When working with multiple assets in one scene, it is easy to create namespaces for asset specific materials by prefixing the material with a simple string e.g. spaceship-metal.</p>

            </div>

        </div>

    </div>

</div>

<div class="container-fluid">

    <div class="row">

        <div class="col-md pt-4">

            <h2 class="mb-4">Example material names</h2>

            @foreach($materials as $material)

                @include('material._material', ['material' => $material])

            @endforeach

        </div>

        <div class="col-md bg-secondary pt-4 text-primary">

            <h2 class="mb-4">Api Example</h2>

            <p>Use api calls to automate the process.</p>

            <p>Make a GET request to api/material/{name} where {name} is your requested material name.</p>

            <div class="code">

                <pre>$ curl {{env('APP_URL')}}/api/material/metal</pre>

            </div>

            <p>Example response</p>

            <div class="code">

                <pre>{{json_encode($materials[0]->toArray(), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)}}</pre>

            </div>

        </div>

    </div>

</div>

@endsection