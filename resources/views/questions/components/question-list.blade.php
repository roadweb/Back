<div class="col-sm-12">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                {{ $question->question }}
                <span class="pull-right label label-success">{{ $question->state->name }}</span>
                <span class="pull-right label label-default">Créer le : {{ $question->created_at }}</span>
            </div>
            <div class="panel-body">
                {!! Form::open([
                'url' => route('questions.update', $question->id),
                'method' => 'PUT',
                'class' => 'form-inline inline-block'
                ]) !!}
                {!! Form::select('state_id', $states, null, ['class' => 'form-control']) !!}
                <button type="submit" class="btn btn-success">Valider</button>
                {!! Form::close() !!}
                <div class="pull-right">
                    <span class="glyphicon glyphicon-heart"></span> {{ $question->likes }}
                </div>
            </div>
        </div>
    </div>
</div>