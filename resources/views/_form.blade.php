<form action="/material" method="post">

    {{ csrf_field() }}

    <div class="row justify-content-center ml-0 mr-0">

        <div class="col-6">

            <label class="sr-only" for="name">Material Name</label>                
        
            <input type="text" class="form-control" id="name" name="name" placeholder="Material Name" required pattern="[a-zA-Z0-9\.\/\+\-]*">

        </div>

        <div class="col-auto">

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>
    
</form>