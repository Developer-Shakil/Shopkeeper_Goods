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
                        <label> Edit Category</label>
                    </div>
                    <form action="{{ route('category.update', $cat->id) }}" method="post">
                        @csrf
                        @method('put')
                        <input type="text" name="name" value="{{ $cat->name }}"
                            class="m-2 form-control @error('name') is-invalid @enderror"/><br>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <button type="submit" class="btn btn-primary m-2">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
