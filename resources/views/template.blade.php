<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Latest compiled and minified CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0-beta.2/slate/bootstrap.min.css" rel="stylesheet" integrity="sha384-nu0Rfs+Ud66mJzSLRuWBCMvk17+i5WBRPdLmS2djwI7YXUHlBLBsc1dHdgPyLsFO" crossorigin="anonymous">
        <!-- <link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0-beta.2/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-2Z7/vC4qa8c+Ie2wHTTl23UC/WUQvArGcavaBvCBwEfbQFA/NiQ7jp30yzfsa5+p" crossorigin="anonymous"> -->

        <title>Material IDs: @yield('title')</title>

        <style type="text/css">

            .material-id__preview {
                display: block;
                width: 2rem;
                height: 2rem;
            }

            .c-material-id {
                display: grid;
                grid-template-columns: 25vh auto;
                grid-template-rows: auto auto 25vh auto;
                grid-template-areas:
                    "header header"
                    "preview data"
            }

            .c-material-id__preview {
                grid-area: preview;
            }

            .c-material-id__data {
                grid-area: data;
            }

.c-material-id__name {
    grid-area: header;
}

        </style>

    </head>

    <body>
        @yield('content')
    </body>
</html>
