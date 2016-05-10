<!-- Stored in resources/views/mostiall.blade.php -->

@extends('layouts.master')

@section('sidebar')
    <p><a class="btn btn-primary btn-lg" href="{{url('/mosti')}}">
            Take the survey now>>
        </a></p>
@endsection

@section('content')
    @if (count($forseos) > 0)
        @foreach ($forseos as $key=>$forseo)
            Entry {{ ++$key }} :<br/>
            <div class="form-group">
                {!! Form::label('staff-id', "Staff ID", [
                    'class' => 'col-sm-3 control-label'
                    ]) !!}
                <div class="col-sm-9">
                    {!! Form::label('staff-id-value', "$forseo->staffid") !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('author-names', "Author Names", [
                    'class' => 'col-sm-3 control-label'
                    ]) !!}
                <div class="col-sm-9">
                    {!! Form::label('author-names-value', "$forseo->authornames") !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('forarea', "Fields of Research (FOR)", [
                    'class' => 'col-sm-3 control-label'
                    ]) !!}
                <div class="col-sm-9">
                    {!! Form::label('forarea-value', "$forseo->forarea") !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('seo', "Socio-economic Objectives (SEO)", [
                    'class' => 'col-sm-3 control-label'
                    ]) !!}
                <div class="col-sm-9">
                    {!! Form::label('seo-value', "$forseo->seo") !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('comments', "Staff ID", [
                    'class' => 'col-sm-3 control-label'
                    ]) !!}
                <div class="col-sm-9">
                    {!! Form::label('comments-value', "$forseo->comments") !!}
                </div>
            </div>
            .<br/>.<br/>
        @endforeach
    @endif
@endsection
@section('script')
    <script>
        /*
         &nbsp&nbsp {{ $forseo->staffid }} <br/>
         &nbsp&nbsp AuthorNames: {{ $forseo->authornames }} <br/>
         &nbsp&nbsp ForArea: {{ $forseo->forarea }}<br/>
         &nbsp&nbsp Seo: {{ $forseo->seo }}<br/>
         &nbsp&nbsp Comments: {{ $forseo->comments }}<br/>
         */
    </script>
@endsection