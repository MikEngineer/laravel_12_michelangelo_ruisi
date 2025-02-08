<x-layout>

    @auth
        <h1 class="text-center p-5 my-5">Modifica articolo</h1>
    @endauth

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container vh-100">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-12 col-md-8">
                @auth
                    <form action="{{route('article.update', compact('article'))}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo*</label>
                            <input value="{{$article->title}}" name="title" type="text" class="form-control" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Sottotitolo*</label>
                            <input value="{{$article->subtitle}}" name="subtitle" type="text" class="form-control"
                                id="subtitle">
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Testo articolo*</label>
                            <textarea name="body" id="body" class="form-control">{{$article->body}}</textarea>
                        </div>
                        <span>Tag:</span>
                        @foreach ($tags as $tag)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="tags[]" value="{{$tag->id}}" @if ($article->tags->contains($tag)) checked @endif
                                    id="{{$tag->id}}">
                                <label class="form-check-label" for="{{$tag->id}}">
                                    {{$tag->name}}
                                </label>
                            </div>
                        @endforeach
                        <div class="mb-3">
                            <label for="img" class="form-label">Aggiungi un'immagine</label>
                            <input name="img" type="file" class="form-control" id="img">
                        </div>
                        <button type="submit" class="btn btn-primary">Modifica articolo</button>
                    </form>
                @endauth
                <div class="col-12 mt-3">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>


</x-layout>