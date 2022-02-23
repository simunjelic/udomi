@extends('layouts.app')

@section('content') 
<!-- Page content-->
<div class="container mt-2">
    <a href="{{url('posts')}}" class="btn btn-primary text-white mb-3">Vrati se nazad </a>
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">{{$post->title}}</h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Objavljeno: {{date('d.m.Y.', strtotime($post->created_at))}}</div>
                    <div class="text-muted fst-italic mb-2 fs-bold">Autor: {{$post->user->name}}</div>
                    <!-- Post categories-->
                    <a class="badge bg-secondary text-decoration-none link-light" href="{{ url('/posts') }}">{{$post->location}}</a>
                    <a class="badge bg-secondary text-decoration-none link-light" href="{{ url('/') }}">Spasi život</a>
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}" alt="..." /></figure>
                <!-- Post content-->
                <section class="mb-2">
                    <div class="fs-5 mb-4">
                        <b>Lokacija: </b><span>{{$post->location}}</span>
                    </div>
                    <div class="fs-5 mb-4">
                        <b>Kontakt broj: </b><span>{{$post->contact}}</span>
                    </div>
                    <p class="fs-5 mb-4"><b>Više informacija: </b><br>{{$post->body}}</p>
                    
                </section>
                @if(!Auth::guest())
       @if(Auth::user()->id == $post->user_id || Gate::check('delete-posts'))
       
       
     <div class="d-flex flex-row justify-content-md-between mb-3 ">
        
        <div class="p-2 "><a href="{{ route('posts.edit', $post->id)}}" class="btn btn-primary text-white btn-lg">Uredi</a></div>
        
        <div class="p-2">{!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'DELETE', 'class'=>'float-right']) !!}
            {{Form::submit('Obriši', ['class' => 'btn btn-danger bg-red text-white btn-lg'])}}
         {!!Form::close()!!}</div>
        
        
      </div>
      
        @endif
      @endif
      
            </article>
         
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
           
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Citat #1</div>
                <div class="card-body">
                    “Pas je jedino biće na zemlji koje te voli više nego što ti voliš sebe.” Josh Billings
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Citat #2</div>
                <div class="card-body">Mačka ima ljepotu bez taštine, snagu bez drskosti, hrabrost bez žestine, sve vrline čovjeka bez njegovih poroka. - Lord Byron</div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Namjena</div>
                <div class="card-body">Ova stranica namjenja je kako bismo smanjili broj pasa lutalica i vlasnicima koji nisu u mogućnosti da se iz nekog razloga brinu o svom psu omogućimo brz pronalazak novog vlasnika za svog ljubimca.</div>
            </div>
        </div>
    </div>
</div>





@endsection