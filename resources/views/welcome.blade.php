<x-layout>
<div class="container-fluid header">
<div class="row justify-content-center align-items-center">
<div class="col-12">
<h1 class="text-center mt-5">
MONDO FITNESS
</h1>
<h2 class="text-center display-4 title h2-custom">
Iscriviti subito
</h2>
<div class="row mt-5 mb-5">
<div class="col-12">
<form class="box-bg form-shadow py-4 px-4 rounded" method="POST" action="{{route('registration.point')}}">
    @csrf
<div class="my-4">
<label for="email" class="form-label">Email</label>
<input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
</div>
<div class="mb-3">
<label for="username" class="form-label">Inserici il tuo nome completo</label>
<input type="username" class="form-control" id="username" name="username">
</div>
<div class="mb-3">
<label for="number" class="form-label">Inserici il tuo recapito telefonico</label>
<input type="number" class="form-control" id="number" name="number">
</div>
<div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-primary m-3">INVIA</button>

</div>
</form>
</div>
</div>
</div>
</div>
</div>


</x-layout>



