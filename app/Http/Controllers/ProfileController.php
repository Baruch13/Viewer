<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function perfil($id){
        
        $usuarios=User::findOrFail($id);
        $profiles = Profile::where("id_user", "=", $usuarios->id)->get();


        $usuarios=User::findOrFail($id);
        $posts = Post::where("id_user", "=", $usuarios->id)->get();
        return view('perfil',compact('posts','usuarios','profiles'));
    }

    public function storeperfil(Request $request){
        $datos = request()->except('_token');
        $datos ['id_user'] = auth()->user()->id;
        if($request->hasFile('photo')){
            $datos['photo']=$request->file('photo')->store('pdf','public');
        }
        Profile::insert($datos);
            return back();

    }
    public function editar(Request $request, $id){
        $posts = request()->except(['_token', '_method']);

        if ($request->hasFile('photo')) {
            $posts = Post::findOrFail($id);
            Storage::delete('public/' . $posts->photo);
            $posts['photo'] = $request->file('photo')->store('pdf', 'public');
        }

        Post::where('id', '=', $id)->update($posts);
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
