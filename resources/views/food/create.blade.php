@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="alart alert-success">
                        @if (Session::has('message'))
                            {{ Session::get('message') }}
                        @endif
                    </div>
                    <div class="card-header">
                        <label> Manage Food</label>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('food.store') }}" method="POST" enctype="multipart/form-data">@csrf
                            <label for="name"> Name</label>
                            <div class="form-group  @error('name') is-invalid @enderror">
                                <input type="text" name="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="Decs"> Description</label>
                            <div class="form-group">
                                <input type="textarea" name="Desc">
                            </div>
                            <label for="price"> Price</label>
                            <div class="form-group  @error('price') is-invalid @enderror">
                                <input type="text" name="price">
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="name"> Image</label>
                            <div class="form-group  @error('image') is-invalid @enderror">
                                <input type="file" name="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="cat"> Category</label>
                            <div class="form-group">
                                <select name="category" class="form-control">
                                    @foreach (App\Models\Category::all() as $cat)
                                        <option value="{{ $cat->id }}">
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-outline-secondary m-2" type="submit">Submit</button>
                            </div>
                        </form>
                        <a href="{{ route('food.index') }}" class="m-2">
                            <button class="btn btn-success">Back</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
