@extends('layouts.app', ['skriveno'=> true])

@section('content')

<div class="container">

    <div class="row justify-content-between mb-2">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
            <h1 class="float-left" >Korisnici</h1>
        </div>
        <div class="float-right col-xs-12 col-sm-12 col-md-4 col-lg-4 text-md-end">
          <a class="float-right p-2 btn-sm btn-success text-white text-decoration-none" href="{{ route('admin.users.create') }}" role="button">Stvori korisnika</a>
        </div>
      </div>
    
      
      <form class="mt-3 row d-flex  form-inline" type="get" action="{{url('/admin/search')}}">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><input name="query" class="form-control mr-sm-2 col-4" type="search" placeholder="Traži korisnike" aria-label="Search"></div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><button class="btn btn-primary text-white my-2 my-sm-0 col-2" type="submit">Traži</button></div>
      </form>
    
     


<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#Id</th>
        <th scope="col">Ime</th>
        <th scope="col">email</th>
        <th scope="col">Akcija</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a class=" p-2 btn-sm btn-primary text-white text-decoration-none" href="{{ route('admin.users.edit', $user->id) }}" role="button">Uredi</a>

                <button type="button" class="btn-sm btn-danger text-white"
                    onclick="event.preventDefault();
                    document.getElementById('delete-user-form-{{$user->id}}').submit();
                    ">Obriši</button>

                <form id="delete-user-form-{{$user->id}}" action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: none" >
                    @csrf
                    @method("DELETE")
                </form>
            </td>
          </tr>
            
        @endforeach
      
      
    </tbody>
  </table>
  {{$users->links('pagination::bootstrap-4')}}

 
</div>

@endsection
