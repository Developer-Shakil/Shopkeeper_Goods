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
                        <label> Manage Category</label>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="POST"> @csrf
                            <label> Category</label> <br>
                            <input type="text" class="m-2 form-control @error('cat') is-invalid @enderror" name='cat' /><br>
                            <Button type="submit" name='Save' class="btn btn-outline-success m-2">Save</button>
                                @error('cat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </form>
                        <a href="{{ route('category.index') }}" class="m-2">
                                <button class="btn btn-success px-10">Back</button>
                            </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
