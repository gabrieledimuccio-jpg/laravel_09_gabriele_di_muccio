<!-- use Illuminate\Support\Str; -->
 <div class="card bg-dark text-white mb-5 pb-3" style="width: 20rem;">
                <a href="{{ route('article', ['title' => $articleName]) }}"><img src="https://www.picsum.photos/700/500" class="card-img-top" alt="immagine casuale"></a>
                <div class="card-body">
                    <h5 class="card-title">{{$articleName}}</h5>
                    <p class="card-text">{{$articleText}}</p>
                    <a href="{{route('article', ['title' => $articleName])}}" class="btn  btn-outline-light">Leggi questo articolo</a>
                </div>
            </div>