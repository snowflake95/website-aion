@extends('_layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-12 text-center page-header">
                <h1>Editer sur la boutique</h1>
                <small>{{$item->name}}</small>
            </div>

            <!-- SUCCESS MESSAGE -->
            @if ($success)
                <div class="col col-md-6 col-md-offset-3 text-center">
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{$success}}
                    </div>
                </div>
            @endif

            <div class="col col-md-6 col-md-offset-3">
                {!! Form::open() !!}

                <div class="form-group">
                    {!! Form::label('id_item', "ID de l'item") !!}
                    {!! Form::input('number', 'id_item', $item->id_item, ['placeholder' => "100001684", 'class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('id_sub_category', "Nom de la sous-catégorie") !!}
                    {!! Form::select('id_sub_category', $subCategories, $item->id_sub_category, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('name', "Nom de l'item") !!}
                    {!! Form::text('name', $item->name, ['placeholder' => "Épée de gouverneur gardien", 'class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('price', "Prix à l'unité") !!}
                    {!! Form::input('number', 'price', $item->price, ['placeholder' => "200", 'class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('quantity', "Quantité") !!}
                    {!! Form::input('number', 'quantity', $item->quantity, ['placeholder' => "1", 'class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('level', "Level") !!}
                    {!! Form::input('number', 'level', $item->level, ['placeholder' => "0", 'class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <input type="submit" class="btn btn-danger" value="Editer l'item">

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop