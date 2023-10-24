@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="alert alert-info text-center">Create new Watch</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('watches.store') }}" method="post" class="row">
                    @csrf
                    <div class="col-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}" @error('name') is-invalid @enderror>
                    </div>
                    <div class="col-6">

                        <label for="description" class="form-label">description</label>
                        <input type="text" class="form-control" id="description" name="description"
                            placeholder="description" value="{{ old('description') }}" @error('description') is-invalid @enderror>
                    </div>
                    <div class="col-6">

                        <label for="price" class="form-label">price</label>
                        <input type="text" class="form-control" id="price" name="price"
                            placeholder="price" value="{{ old('price') }}" @error('price') is-invalid @enderror>                  
                    
                            <div class="col-6">
                        <label for="purchase_date" class="form-label">Purchase_Date</label>
                        <input type="date" class="form-control" id="purchase_date" name="purchase_date"
                            placeholder="purchase_date" value="{{ old('purchase_date') }}" @error('purchase_date') is-invalid @enderror>
                    </div>
                    <div class="col-6">
                        <label for="color" class="form-label">color</label>
                        <input type="text" class="form-control" id="color" name="color"
                            placeholder="color" value="{{ old('color') }}" @error('color') is-invalid @enderror>
                    </div>
                    <div class="col-6">
                        <label for="brand" class="form-label">brand</label>
                        <input type="text" class="form-control" id="brand" name="brand"
                            placeholder="brand" value="{{ old('brand') }}" @error('brand') is-invalid @enderror>
                    </div>
                    <div class="col-6">
                        <label for="material" class="form-label">material</label>
                        <input type="text" class="form-control" id="material" name="material"
                            placeholder="material" value="{{ old('material') }}" @error('material') is-invalid @enderror>
                    </div>
                    <div class="col-6">
                        <label for="movement" class="form-label">movement</label>
                        <input type="text" class="form-control" id="movement" name="movement"
                            placeholder="movement" value="{{ old('movement') }}" @error('movement') is-invalid @enderror>

                    </div>
                    <div class="col-12 my-4">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>
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
            <div class="col-12 mb-4">
                <div class="d-grid gap-2">
                    <a href="{{ route('watches.index') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection {{-- @endsection --}}
