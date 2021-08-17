<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Profile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$Pro = User::all();
        $texto = $request->input('texto');
        $usuarios = User::all();

        $usuarios=User::findOrFail($request);
        $Posts = Post::query()
            ->orderBy('id','desc')
            ->where('name', 'LIKE', "%{$texto}%")
            ->Orwhere('description', 'LIKE', "%{$texto}%")
            ->paginate(6);
        
        return view('dashboard',compact('Posts','usuarios'));
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
    public function store(Request $request){

        $datosproductos = request()->except('_token');
        $datosproductos ['id_user'] = auth()->user()->id;
        if ($request->hasFile('archive')) {
            $datosproductos['archive'] = $request->file('archive')->store('foto', 'public');
        }
        Post::insert($datosproductos);

        return back();
    
        }
        public function vist($id){
            $usuarios=User::all();
            $Posts=Post::findOrFail($id);
            return view('vist-post', compact('Posts','usuarios'));
        }
        public function eliminar($id){
            $Posts = Post::findOrFail($id);
            Post::destroy($id);
            return redirect('dashboard');
        }

        public function tabla(){
            $users = User::withCount(['posts'])
            ->orderBy('posts_count','desc')
            ->orderBy('id','asc')
            ->get();
            return view('tabla',compact('users'));
        }

   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
