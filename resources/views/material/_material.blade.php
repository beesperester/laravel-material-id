<?php

$rgb = $material->getColor()->getRgb();
$r = $rgb->r;
$g = $rgb->g;
$b = $rgb->b;

$hsv = $material->getColor()->getHsv(false, env('PRECISION', 2));
$h = $hsv->h;
$s = $hsv->s;
$v = $hsv->v;

$hsvn = $material->getColor()->getHsv(true, env('PRECISION', 2));
$hn = $hsvn->h;
$sn = $hsvn->s;
$vn = $hsvn->v;

?>

<div class="c-material-id">

    <div class="c-material-id__name">

        <h1 class="mb-4">{{$material->name}}</h1>

    </div>

    <div class="c-material-id__preview" style="background-color:{{$material->getColor()->getHex()}};padding:.25rem .5rem;border-radius:.5rem;"></div>

    <div class="c-material-id__data pl-4">

        <table class="table table-striped table-sm">

            <thead class="thead-lightt">

                <tr>

                    <th scope="col" class="col-md-3">Representation</th>

                    <th scope="col">Value</th>

                </tr>

            </thead>

            <tbody>

                <tr>
            
                    <th scope="row">HEX</th>

                    <td>{{$material->getColor()->getHex()}}</td>
                    
                </tr>

                <tr>
                
                    <th>RGB</th>

                    <td>{{$r}}, {{$g}}, {{$b}}</td>
                    
                </tr>

                <tr>

                    <th>HSV (360°)</th>

                    <td>{{$h}}, {{$s}}, {{$v}}</td>
                    
                </tr>

                <tr>

                    <th>HSV (normalized)</th>

                    <td>{{$hn}}, {{$sn}}, {{$vn}}</td>
                    
                </tr>

            </tbody>

        </table>

    </div>

</div>