<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        if(Gate::allows('is-admin')){
            return view('admin.users.index')->with([
                'users'=> User::paginate(10)
             ]);
        }else return redirect(route('posts.index'))->with('error','Niste admin.');
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create',
            ['roles'=> Role::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:199',
            'email' => 'required|max:199|unique:users',
            'password' => 'required|min:8|max:199'
        ]);
        $user = User::create($validatedData);

        $user->roles()->sync($request->roles);

        return redirect(route('admin.users.index'))->with('success','Stvorili ste korisnika.');

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.users.edit',
            ['roles'=> Role::all(),
            'user' => User::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if(!$user){
            return redirect(route('admin.users.index'))->with('message','Ne možete urediti ovog korisnika.');
        }

        $user->update($request->except(['_token', 'roles']));
        $user->roles()->sync($request->roles);

        return redirect(route('admin.users.index'))->with('success','Uredili ste korisnika.');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::where('user_id', $id)->get();
        $post->each->delete();
        User::destroy($id);

        return redirect(route('admin.users.index'))->with('success','Obrisali ste korisnika.');
    }
}
