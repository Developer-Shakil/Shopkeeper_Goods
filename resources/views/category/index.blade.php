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
                        <a href="{{ route('category.create') }}" class="float-right">
                            <button class="btn btn-success px-10">Create</button>
                        </a>
                    </div>
                </div>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cat as $key => $cat)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $cat->name }}</td>
                                <td>
                                    <a href="{{ route('category.edit', $cat->id) }}">
                                        <button class="btn btn-outline-success">Edit</button>
                                    </a>
                                </td>
                                <td>

                                    <form action="{{ route('category.destroy', $cat->id) }}" method="POST" id="form-delete">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-outline-danger"
                                            onclick="event.preventDefault;
                                            if(confirm('Are you Sure'))
                                            {
                                             document.getElementById('form-delete').submit();
                                            }">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
