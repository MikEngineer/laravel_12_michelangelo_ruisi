<x-layout>

    <h1 class="text-center my-5 pt-5">Tutti gli articoli</h1>

    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4 col-lg-3 my-3 d-flex align-items-center justify-content-center pt-5">
                    <div class="card card-custom" style="width: 18rem;">
                        <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="Immagine {{$article->title}}">
                        <div class="card-body">
                            <h3 class="card-title d-block text-truncate">{{$article->title}}</h3>
                            <h6 class="card-text d-block text-truncate">{{$article->subtitle}}</h6>
                            <p class="card-text d-block text-truncate">{{$article->body}}</p>
                            <a href="{{route('article.show', ['article' => $article->id])}}" class="btn btn-primary">Leggi l'articolo</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>