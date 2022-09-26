@extends('master')
@section('content')

<div class="trending-items container">
    
   
    <h2>Book list</h2> 
    @foreach ($books as $item)
     <a href="/book/{{$item['id']}}">
         <div class="t-item">
             <img src="{{$item['image']}}">
             <p>{{$item['name']}}</p>
             <p>{{$item['category']}}</p>
             <p>Author: {{$item['author_name']}}</p>
             <p>published_date: {{$item['published_date']}}</p>
             <a href="/update/{{$item['id']}}" class="btn btn-primary">Edit</a>
             <a href="/delete/{{$item['id']}}" class="btn btn-danger">Delete</a>
             </div>
     </a>
   
    @endforeach
    </div>


@endsection