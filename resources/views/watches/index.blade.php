@extends('layouts.base')
@section('content')
    <div class="container">
        <h1 class="alert alert-info text-center">Watches</h1>
        
        <!-- Formulario de filtro -->
        <form action="{{ route('watches.index') }}" method="GET">
            <div class="row mb-3">
                <div class="col-6">
                    <select name="column" class="form-select">
                        <option value="name">Name</option>
                        <option value="description">Description</option>
                        <option value="color">Color</option>
                        <!-- Agrega más opciones según las columnas disponibles -->
                    </select>
                </div>
                <div class="col-4">
                    <input type="text" name="search" class="form-control" placeholder="Search...">
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>

        <div class="row">
            @foreach ($watches as $watch)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card mb-3 custom-card" style=" background-color: #F8E1A6; /* Cambia este color al que prefieras */
                    border-radius: 10px; /* Borde redondeado para las tarjetas (opcional) */
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra (opcional) */">
                    
                        <img src="{{ $watch->image_url }}" class="card-img-top" alt="{{ $watch->name }}">
                        <div class="card-body">
                            <h5 class="card-title custom-title">{{ $watch->name }}</h5>
                            <p class="card-text">{{ $watch->description }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>ID:</strong> {{ $watch->id }}</li>
                            <li class="list-group-item"><strong>Price:</strong> {{ $watch->price }}</li>
                            <li class="list-group-item"><strong>Purchase Date:</strong> {{ $watch->purchase_date }}</li>
                            <li class="list-group-item"><strong>Color:</strong> {{ $watch->color }}</li>
                            <li class="list-group-item"><strong>Brand:</strong> {{ $watch->brand }}</li>
                            <li class="list-group-item"><strong>Material:</strong> {{ $watch->material }}</li>
                            <li class="list-group-item"><strong>Movement:</strong> {{ $watch->movement }}</li>
                        </ul>
                        <div class="card-body custom-footer">
                            <a class="btn btn-primary custom-button" href="{{ route('watches.edit', $watch) }}">Edit</a>
                            <form action="{{ route('watches.destroy', $watch) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger custom-button">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            <a href="{{ route('watches.create') }}" class="btn btn-success">Add watch</a>
        </div>
    </div>
</div>
@endsection
