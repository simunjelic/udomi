@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-between">
        <div class="col-10">
            <h1 class="float-left" >Korisnici</h1>
        </div>
        <div class="float-right col-2">
          <a class="float-right p-2 btn-sm btn-success text-white text-decoration-none" href="{{ route('admin.users.create') }}" role="button">Kreiraj korisnika</a>
        </div>
      </div>
    <div class="my-2">
        <div class="col-12 ">
            
            
        </div>
    </div>


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