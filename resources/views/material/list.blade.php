<table class="table  table-striped">

    <thead>

        <tr>

            <th scope="col">Material</th>

            <th scope="col"></th>

            <th scope="col">HEX</th>

            <th scope="col">RGB</th>

            <th scope="col">HSV (360°)</th>

            <th scope="col">HSV (normalized)</th>

            <th scope="col"></th>

        </tr>

    </thead>

    <tbody>

        @foreach($materials->sortBy('name') as $material)

            @include('material.show', ['material' => $material])

        @endforeach

    </tbody>

</table>