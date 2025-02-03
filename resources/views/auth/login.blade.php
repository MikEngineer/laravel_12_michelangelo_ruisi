<x-layout>

    <h1 class="text-center p-5 my-5">Accedi</h1>

    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

    <div class="container vh-100">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('login')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email*</label>
                        <input value="{{old('email')}}" type="email" name="email" id="email" class="form-control"
                            placeholder="mario.rossi@email.it">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password*</label>
                        <input value="{{old('password')}}" type="password" name="password" id="password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
                <div class="col-12 mt-3">
                    {{-- @if (session()->has('storeSuccess'))
                        <div class="alert alert-success">
                            {{session('storeSuccess')}}
                        </div>
                    @endif
                    @if (session()->has('storeError'))
                        <div class="alert alert-danger">
                            {{session('storeError')}}
                        </div>
                    @endif --}}
                </div>
            </div>
        </div>
    </div>


</x-layout>