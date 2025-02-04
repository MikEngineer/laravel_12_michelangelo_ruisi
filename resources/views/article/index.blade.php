<x-layout>

    <div class="col-12 mt-5 pt-5">
        @if (session()->has('storeSuccess'))
            <div class="alert alert-success">
                {{session('storeSuccess')}}
            </div>
        @endif
    </div>

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
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-success">Leggi
                            </a>
                            <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning">Modifica
                            </a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                Elimina
                            </button>
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminazione articolo</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Questa azione eliminerà l'articolo definitivamente. Sei sicuro?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form method="post" action="{{route('article.destroy', compact('article'))}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    Elimina
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>