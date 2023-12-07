@extends('layouts.layout')

@section('content')
<h1 class="mt-2"> espace create departement</h1>
<form method="POST" action="">
    <div class="card mt-4">
        <div class="card-header"style="background-color: black">
           <label for="" style="color: white"> departement</label>
        </div>
        <div class="card-body" style="height: 300px">
            <div>
                <label for="">departement</label>
                <input type="text" name="departement" class="form-control">
            </div>

            <div class="mt-3">
                <input type="submit"  value="enregistrement" name="departement" class="form-control btn btn-primary">
            </div>
        </div>
    </div>
</form>
@endsection
