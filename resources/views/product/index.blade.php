<x-layout>
<div class="container-fluid header">
<div class="row justify-content-center align-items-center">
<div class="col-12">
<h1 class="text-center mt-5">
ISCRIZIONI
</h1>

<div class="container-fluid d-flex  justify-content-center align-items-center">
<div class="row">
@foreach($people as $person)
<div class="col-12 col-md-6">
<div class="card mx-4 mb-5 pb-5" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title">{{$person->email}}</h5>
<h6 class="card-subtitle mb-2 text-body-secondary">{{$person->username}}</h6>
<p class="card-text">{{$person->number}}</p>
</div>
</div>
</div>
@endforeach
</div>
</div>



</x-layout>