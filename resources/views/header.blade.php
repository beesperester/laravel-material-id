<header class="bg-light p-5">

    <div class="container mb-4 text-center">

        <h1><a href="{{env('APP_URL')}}">{{env('APP_NAME')}}</a></h1>

        <p>Create unique, consistent material ids with ease.</p>

    </div>

    <div class="container">

        <div class="row">

            <div class="col">

                @include('_form')

            </div>

        </div>

    </div>

</header>