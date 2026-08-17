<x-layout>

<div class="container-fluid p-0">
<div class="row mb-4">
<div class="col-12">
<h2 class="text-center mt-5 pt-2 mb-5">Tutti gli articoli</h2>
</div>
<div class="col-12">
<div class="row justify-content-center mb-5">
    @foreach($articles as $article)
        <div class="col-12 col-md-4 d-flex justify-content-center">
           <x-card
           :articleName="$article['titolo']"
           :articleText="$article['testo']"
           ></x-card>
        </div>
        @endforeach
      </div>  
      </div>  
      </div>  
      </div>  


</x-layout>
