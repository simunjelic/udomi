@extends('layouts.app')

@section('content') 
<div class="container">
    <h1 class="text-grey">Dodaj svog ili pronađenog ljubimca</h1>

    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    
        <div class="form-group">
            {{Form::label('title','Unesite ime vaseg psa(Lutalica, ako ste vidjeli neku napuštenu životinju):')}}
            {{Form::text('title','',['class' => 'form-control', 'placeholder'=>'Lutalica'])}}
        </div>
        <div class="form-group">
            {{Form::label('location','Lokacija:')}}
            {{Form::text('location','',['class' => 'form-control', 'placeholder'=>'Mostar'])}}
        </div>
        <div class="form-group">
            {{Form::label('contact','Kontakt:')}}
            {{Form::text('contact','',['class' => 'form-control', 'placeholder'=>'063/111-222'])}}
        </div>
        
        <div class="form-group">
            {{Form::label('body','Unesite sve potrebne informacije o vašem psu/mački:')}}
            {{Form::textarea('body','',['class' => 'form-control', 'placeholder'=>'Sve o psu/mački'])}}
        </div>
        <div class="form-group">
            {{Form::label('cover_image','Slika:')}}
            {{Form::file('cover_image')}}
        </div>
    

        {{Form::submit('Potvrdi',['class' =>'btn btn-primary text-white mt-5'])}}
    {!! Form::close() !!}
</div>

@endsection