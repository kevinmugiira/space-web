

@extends('layout.masters')




@section('objects')
    <div class="container">
        <h1> The Latest Articlels</h1>

    @foreach($blog as $blo)

           <a href="/blogs/{{ $blo->id }}"><h3>  {{ $blo->title }} </h3></a>
           <p>    {{ $blo->body }}   </p>

    @endforeach


    </div>
@stop
