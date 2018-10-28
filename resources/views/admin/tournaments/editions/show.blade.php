@extends('layouts.admin')




@section('content')




    <h2>Create Tournamaent Edition</h2>


    <div class="row">


        <div class="col-sm-8">

            <div class="panel-body">

                {!! Form::open(['method'=>'POST', 'action'=> 'TournamentReferenceController@store','files'=>true]) !!}

                
                @for($i=0; $i< sizeof($clubs); $i++)
                
                <div class="form-group">
                    {!! Form::label('club_id', 'Clubs') !!}
                    {!! Form::checkbox('chcek', null, false) !!}
                    {!! Form::text('club_id', $clubs[$i]->name, ['class'=>'form-control', 'name'=>'club_id','id'=>'clubSelect', 'required' ])!!}
                    {!! Form::hidden('club_id', $clubs[$i]->name, ['class'=>'form-control', 'name'=>'club_id','id'=>'clubSelect', 'required' ])!!}
                </div>

                @endfor





                <div class="form-group">
                    {!! Form::submit('Add Tournament', ['class'=>'btn btn-primary col-sm-3']) !!}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>


    @include('includes.form_error')

@stop