@extends('layouts.app')

@section('content')
    <h1>Form Page</h1>

    {{ Form::open(array('url' => '/submit', 'class'=>'form-horizontal', 'id' => 'feedbackForm')) }}

    @foreach ($fields as $field)
        {{$field->execute()}}
    @endforeach

    <div class="form-group">
        <div class="control-label col-sm-3">
            {{ Form::submit('Absenden', ['class' => 'btn btn-primary']) }}
        </div>
    </div>


    {{ Form::close() }}


@endsection

