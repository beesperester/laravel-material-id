<?php

$rgb = $material->color->getRgb();
$r = $rgb->r;
$g = $rgb->g;
$b = $rgb->b;

$hsv = $material->color->getHsv(false, env('PRECISION', 2));
$h = $hsv->h;
$s = $hsv->s;
$v = $hsv->v;

$hsvn = $material->color->getHsv(true, env('PRECISION', 2));
$hn = $hsvn->h;
$sn = $hsvn->s;
$vn = $hsvn->v;

?>

<tr>

    <th scope="row">{{$material->name}}</th>

    <td><span class="material-id__preview" style="background-color:{{$material->color->getHex()}};padding:.25rem .5rem;border-radius:.5rem;"></span></td>

    <td>{{$material->color->getHex()}}</td>

    <td>{{$r}}, {{$g}}, {{$b}}</td>

    <td>{{$h}}, {{$s}}, {{$v}}</td>

    <td>{{$hn}}, {{$sn}}, {{$vn}}</td>

    <td>

        <form action="/material/{{$material->id}}" method="post">

            {{ csrf_field() }}

            {{ method_field('DELETE') }}

            <button class="btn btn-danger btn-sm" type="submit">Delete</button>

        </form>
    
    </td>

</tr>