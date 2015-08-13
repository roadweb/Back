@extends('admin.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                @if(count($fiches) > 0)
                    @include('admin.jobs.components.fiches', ['fiches' => $fiches])
                @else
                    <div class="alert alert-info">
                        Aucune fiche métier n'a encore été publié.
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection