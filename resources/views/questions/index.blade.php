@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Filtrer les questions
                    </div>
                    <div class="panel-body">
                        {!! Form::open([
                        'method' => 'GET',
                        'class' => 'inline-block',
                        'id' => 'filter'
                        ]) !!}
                        <input type="hidden" name="filter_by" value="state"/>
                        {!! Form::select('id', $states, null, ['class' => 'form-control']) !!}
                        {!! Form::close() !!}

                        <form action="" method="get" id="reset"></form>

                        <div class="btn-group" style="margin-top: 15px">
                            <button type="submit" form="filter" class="btn btn-success">Valider</button>
                            <button type="submit" form="reset" class="btn btn-default">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                @foreach($questions as $question)
                    @include('questions.components.question-list')
                @endforeach
            </div>
        </div>
    </div>
@endsection