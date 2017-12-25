@foreach($materials as $material)

    <li>

        @include('material.show', $material)

    </li>

@endforeach