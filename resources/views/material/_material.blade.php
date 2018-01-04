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

<div class="c-material-id mb-4">

    <div class="c-material-id__preview">

        <div class="c-material-id__swatch" style="background-color:{{$material->getColor()->getHex()}};"></div>

    </div>

    <div class="c-material-id__data pl-4">

        <div class="c-material-id__name mb-2">

            <strong class="mb-4">{{$material->name}}</strong>

        </div>

        <table class="table table-sm table-responsive borderless small">

            <thead>

                <tr>

                    <th>HEX</th>

                    <th>RGB</th>

                    <th>HSV (360°)</th>

                    <th>HSV (normalized)</th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td>
                    
                        <kbd>{{$material->getColor()->getHex()}}</kbd>
                        
                    </td>

                    <td>
                    
                        <kbd>{{$r}}, {{$g}}, {{$b}}</kbd>
                        
                    </td>

                    <td>
                    
                        <kbd>{{$h}}, {{$s}}, {{$v}}</kbd>
                        
                    </td>

                    <td>
                    
                        <kbd>{{$hn}}, {{$sn}}, {{$vn}}</kbd>
                        
                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>