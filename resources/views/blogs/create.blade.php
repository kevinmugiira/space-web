@extends('layout.masters')




@section('objects')


    <h1> Create Blog</h1>
    <br>
    <!--

    <form action="{{url('blogs')}}" method="post">

        <div class="col-md-6">
    <div class="form-group">
        <input type="text" name="Title" value="Title" onblur="this.value=!this.value?'Name':this.value;" onfocus="this.select()" onclick="this.value='';"><br>
    </div>

    <div class="form-group">
        <textarea name="body" cols="50" rows="7">Body</textarea>
    </div>

        <input type="submit" value="Add Blog" id="submit">

        </div>
    </form>  -->

{!! Form::open(array('url' => 'blogs')) !!}

    <div class="form-group">
    {!! Form::label('title', 'Blog Title') !!}
    {!! Form::label('title','Blog Title') !!}
    </div>
{!! Form::close() !!}


    @stop
