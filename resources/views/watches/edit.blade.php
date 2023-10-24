@extends('layouts.base')
@section('content')

  

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="alert alert-info text-center">Edit watch {{ $watch->name }}</h1>
                </div>
                <div class="col-12">
                    <form action="{{ route('watches.update', $watch) }}" method="post" class="row">
                        @csrf
                        @method('PUT')
                        <div class="col-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{old('name', $watch->name)}}" placeholder="Name">
                        </div>
                        <div class="col-6">
                            <label for="description" class="form-label">description</label>
                            <input type="text" class="form-control" id="description" name="description"
                                value="{{ old('description', $watch->description) }}" placeholder="description">
                        </div>
                        <div class="col-6">
                            <label for="price" class="form-label">price</label>
                            <input type="text" class="form-control" id="price" name="price"
                                value="{{ old('price', $watch->price) }}" placeholder="price">
                        </div>
                        <div class="col-6">
                            <label for="purchase_date" class="form-label">purchase_date</label>
                            <input type="date" class="form-control" id="purchase_date" name="purchase_date"
                                value="{{ old('purchase_date', $watch->purchase_date) }}" placeholder="purchase_date">
                        </div>
                        <div class="col-6">
                            <label for="color" class="form-label">color</label>
                            <input type="text" class="form-control" id="color" name="color"
                                value="{{ old('color', $watch->color) }}" placeholder="color">
                        </div>
                        <div class="col-6">
                            <label for="brand" class="form-label">brand</label>
                            <input type="text" class="form-control" id="brand" name="brand"
                                value="{{ old('brand', $watch->brand) }}" placeholder="brand">
                        </div>
                        <div class="col-6">
                            <label for="material" class="form-label">material</label>
                            <input type="text" class="form-control" id="material" name="material"
                                value="{{ old('material', $watch->material) }}" placeholder="material">
                        </div>
                        <div class="col-6">
                            <label for="movement" class="form-label">movement</label>
                            <input type="text" class="form-control" id="movement" name="movement"
                                value="{{ old('movement', $watch->movement) }}" placeholder="movement">
                        </div>                                                                   
                            
                                          
                       
                        @if ($errors->any())
                        <div class="alert alert-danger col-12 mt-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <div class="col-12 my-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 mb-4">
                    <div class="d-grid gap-2">
                        <a href="{{ route('watches.index') }}" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection {{-- @endsection --}}
