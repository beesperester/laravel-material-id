@if ($errors->any())
<div class="alert alert-danger" role="alert">

    <ul>
    @foreach ($errors->all() as $error)

        <li>{{$error}}</li>

    @endforeach
    </ul>

</div>
@endif

{{ csrf_field() }}

<div class="form-group">

    <label for="name">Name</label>

    <input type="text" name="name" class="form-control" value="{{old('name')}}" />

</div>