<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Latest compiled and minified CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0-beta.2/slate/bootstrap.min.css" rel="stylesheet" integrity="sha384-nu0Rfs+Ud66mJzSLRuWBCMvk17+i5WBRPdLmS2djwI7YXUHlBLBsc1dHdgPyLsFO" crossorigin="anonymous">
        <!-- <link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0-beta.2/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-2Z7/vC4qa8c+Ie2wHTTl23UC/WUQvArGcavaBvCBwEfbQFA/NiQ7jp30yzfsa5+p" crossorigin="anonymous"> -->

        <title>{{env('APP_NAME')}} - @yield('title')</title>

        <style type="text/css">

            .code {
                background-color: white;
                border-radius: .25rem;
                padding: .5rem 1rem;
                margin-bottom: 1rem;
            }

            .code pre {
                margin: 0;
                white-space: pre-wrap;
            }

            h1, h2, h3, h4, h5, h6 {
                text-shadow: none;
            }

            .btn {
                background-image: none;
            }

            kbd {
                white-space: nowrap;
            }

            .table td, .table th {
                padding: 0 .5rem 0 0;
            }

            td kbd, th, kbd {
                padding: 0;
            }

            table.borderless tbody td, table.borderless tbody th, table.borderless thead th {
                border: none;
            }

            .c-material-id {
                display: grid;
                grid-template-columns: 64px fit-content(100%);
            }

            .c-material-id__preview {
            }

            .c-material-id__swatch {
                border-radius:.25rem;
                display: block;
                width: 64px;
                height: 64px;
            }

            .c-material-id__data {
            }

            .c-material-id__name {
                grid-area: header;
            }

            html, body {
                height: 100%;
            }

            .grid {
                display: grid;
                grid-template-rows: fit-content(100%);
                height: 100%;
            }

        </style>

    </head>

    <body>

        <div class="grid">

            @include('header')

            <div class="content">

                @yield('content')

            </div>

            @include('footer')

        </div>

    </body>
</html>
