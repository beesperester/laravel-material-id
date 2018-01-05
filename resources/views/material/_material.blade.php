<?php

$rgb = $material->getColor()->getRgb(false, env('PRECISION', 2));
$r = $rgb->r;
$g = $rgb->g;
$b = $rgb->b;

$rgbn = $material->getColor()->getRgb(true, env('PRECISION', 2));
$rn = $rgbn->r;
$gn = $rgbn->g;
$bn = $rgbn->b;

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

            <strong class="mb-4">{{$material->name}} (<kbd>{{$material->getColor()->getHex()}}</kbd>)</strong>

        </div>

        <table class="table table-sm table-responsive borderless small">

            <tbody>

                <tr>

                    <th>RGB</th>
                    
                    <td>
                        
                        <kbd>{{$r}}, {{$g}}, {{$b}}</kbd>
                        
                    </td>
                
                </tr>

                <tr>

                    <th>RGB (normalized)</th>
                    
                    <td>
                        
                        <kbd>{{$rn}}, {{$gn}}, {{$bn}}</kbd>
                        
                    </td>

                </tr>

                <tr>

                    <th>HSV (360°)</th>

                    <td>
                    
                        <kbd>{{$h}}, {{$s}}, {{$v}}</kbd>
                        
                    </td>

                </tr>

                <tr>

                    <th>HSV (normalized)</th>

                    <td>
                    
                        <kbd>{{$hn}}, {{$sn}}, {{$vn}}</kbd>
                        
                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>