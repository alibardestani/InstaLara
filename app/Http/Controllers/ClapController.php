<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ClapController extends Controller
{
    public function clap(Post $post)
    {
        $hasClaped = auth()->user()->hasClapped($post);

        if ($hasClaped) {
            $post->claps()->where('user_id', auth()->id())->delete();
            return response()->json(['clapsCount' => $post->claps()->count()]);
        }
        $post->claps()->create([
            'user_id' => auth()->id(),
        ]);

        return response()->json([
            'clapsCount' => $post->claps()->count(),
        ]);
    }
}
