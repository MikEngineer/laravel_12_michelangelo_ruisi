<x-layout>

    <h1 class="text-center p-5 my-5">Inserisci nuovo Tag</h1>

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
                <form action="{{route('tag.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Tag*</label>
                        <input value="" name="name" type="text" class="form-control" id="name"
                            placeholder="Attualità">
                    </div>
                    <button type="submit" class="btn btn-primary">Crea Tag</button>
                </form>
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