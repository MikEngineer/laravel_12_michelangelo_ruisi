<x-layout>

    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
                @foreach ($products as $product)
            <div class="col-12 col-md-4 col-lg-3 my-3 d-flex align-items-center justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://picsum.photos/200?{{$product->id}}" class="card-img-top" alt="immagine {{$product->name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">{{$product->description}}</p>
                            <p class="card-text">{{$product->price}}€</p>
                        </div>
                    </div>
            </div>
                @endforeach
        </div>
    </div>

</x-layout>