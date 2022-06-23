<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return response()->json([
            'siswas' => Post::all()
        ]);
    }

    public function show(Post $siswa)
    {
        return response()->json([
            'siswa' => $siswa
        ]);
    }

    public function store(Request $request)
    {
        $siswa = Post::create($request->all());
        return response()->json([
            'siswa' => $siswa
        ]);
    }

    public function update(Request $request, Post $siswa)
    {
        $siswa->update($request->all());
        return response()->json([
            'siswa' => $siswa
        ]);
    }

    public function destroy(Post $siswa)
    {
        $siswa->delete();
        return response()->json([
            'success' => true
        ]);
    }

}