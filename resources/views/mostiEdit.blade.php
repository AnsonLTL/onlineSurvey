<!-- Stored in resources/views/mostiall.blade.php -->

@extends('layouts.master')

@section('sidebar')
    <p><a class="btn btn-primary btn-lg" href="{{url('/mosti')}}">
            Take the survey now>>
        </a></p>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::model($forseo, [
                'method' => 'PATCH',
                'action' => ['ForseoController@update', $forseo->staffid],
                'class' => 'form-horizontal',
                'id' => 'form1'
                ]) !!}
            <div class="form-group">
                {!! Form::label('staff-id', "Staff ID", [
                    'class' => 'col-sm-3 control-label required'
                    ]) !!}
                <div class="col-sm-9">
                    {!! Form::text('staffid', null, [
                        'class' => 'form-control',
                        'id' => 'staff-id',
                        'title' => 'staff id',
                        'placeholder' => 'staff id',
                        'required' => 'required',
                        'readonly' => 'true'
                        ]) !!}
                </div>
            </div>
            <br/>

            <div class="form-group">
                {!! Form::label('author-names', "Author Names", [
                    'class' => 'col-sm-3 control-label required'
                    ]) !!}
                <div class="col-sm-9">
                    {!! Form::text('authornames', null, [
                        'class' => 'form-control',
                        'id' => 'author-names',
                        'title' => 'author name',
                        'placeholder' => 'author names',
                        'required' => 'required'
                        ]) !!}
                </div>
            </div>
            <br/>

            <div class="form-group">
                {!! Form::label('forarea', "Fields of Research (FOR)", [
                    'class' => 'col-sm-3 control-label required'
                    ]) !!}
                <div class="col-sm-9">
                    {!! Form::text('forarea', null, [
                        'class' => 'form-control',
                        'id' => 'forarea',
                        'title' => 'for',
                        'placeholder' => 'FOR',
                        'required' => 'required',
                        'readonly' => 'true'
                        ]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('seo', "Socio-economic Objectives (SEO)", [
                    'class' => 'col-sm-3 control-label'
                    ]) !!}
                <div class="col-sm-9">
                    {!! Form::text('seo', null, [
                        'class' => 'form-control',
                        'id' => 'seo',
                        'title' => 'SEO',
                        'placeholder' => 'SEO',
                        'readonly' => 'true'
                        ]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('comments', "Comments", [
                    'class' => 'col-sm-3 control-label'
                    ]) !!}
                <div class="col-sm-9">
                    {!! Form::text('comments', null, [
                        'class' => 'form-control',
                        'id' => 'comments',
                        'title' => 's id'
                        ]) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="message" class="col-sm-3 control-label"></label>
                <div class="col-sm-9">
                    {!! Form::submit('Update', [
                        'class' => 'btn btn-primary'
                        ]) !!}
                    {!! Form::reset('Restore to Original', [
                        'class' => 'btn btn-warning'
                        ]) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
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