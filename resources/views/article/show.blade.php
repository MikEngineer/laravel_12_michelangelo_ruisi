<x-layout>

    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <img class="img-fluid img-article rounded-4" src="{{Storage::url($article->img)}}" alt="Immagine articolo {{$article->title}}">
            </div>
        </div>
    </div>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center display-1">{{$article->title}}</h1>
                <h4 class="text-center">{{$article->subtitle}}</h4>
            </div>
        </div>
    </div>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12">
                <p class="text-center">{{$article->body}}</p>
            </div>
        </div>
    </div>

</x-layout>