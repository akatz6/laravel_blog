@extends('main')

@section('title', '| Create new Post')

@section('content')

    <div class="row">
        <div class="clo-md-8 col-md-offset-2">
            <h1>Create new Post</h1>
            <hr>
            {!! Form::open(['route' => 'posts.store']) !!}
                {{Form::label('title', 'Title')}}
                {{Form::text('title', null, array('class' => 'form-control'))}}

                {{Form::label('slug', 'URL')}}
                {{Form::text('slug', null, array('class' => 'form-control'))}}

                {{Form::label('body', 'Post body')}}
                {{Form::textarea('body', null, array('class' => 'form-control'))}}

                {{Form::submit('Create Post', array('class' => 'btn btn-success btn-leg btn-block', 'style' => 'margin-top:20px'))}}

            {!! Form::close() !!}
        </div>
    </div>

@endsection

