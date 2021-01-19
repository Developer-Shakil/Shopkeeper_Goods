@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       @foreach($categories as $category)
        <div class="col-md-12">
            <h2 style="color: rgb(0, 0, 0);">{{$category->name}}</h2>
            <div class="jumbotron">
                 <div class="row">
                @foreach(App\Models\Food::where('cat_id',$category->id)->get() as $food)
                <div class="col-md-3">

                    <img src="{{ asset('image') }}/{{ $food->image }}" width="200" height="155">
                    <p class="text-center">
                    	{{$food->name}}
                        <span>${{$food->price}}</span>
                    </p>
                       <p class="text-center">

                        <a href="{{ route('food.display',$food->id) }}" id="item-price">
                        <button class="btn btn-outline-danger" onclick="event.preventDefault; document.getElementById('item-price').click();">
                          View
                        </button>
                        </a>
                     </p>
                </div>

                @endforeach
            </div>
            </div>

        </div>
     @endforeach
    </div>
</div>
@endsection
