<x-layout>

    <h1 class="text-center my-5">Inserisci nuovo prodotto</h1>

    <div class="container vh-100">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('product.storage')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome prodotto</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Smartphone">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione prodotto</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Qualche dettaglio..."></textarea>
                    </div>
                    <label for="price" class="form-label">Prezzo prodotto</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">€</span>
                        <input name="price" id="price" type="text" class="form-control" placeholder="520.99">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <div class="col-12 mt-3">
                    @if (session()->has('storeSuccess'))
                        <div class="alert alert-success">
                            {{session('storeSuccess')}}
                        </div>
                    @endif
                    @if (session()->has('storeError'))
                        <div class="alert alert-danger">
                            {{session('storeError')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>


</x-layout>