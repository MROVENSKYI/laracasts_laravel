<?php


use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;



Route::get('/', function () {
return view ('posts', [
    'posts' => Post::all()
    ]);
});
// $document = YamlFrontMatter::parseFile(
//     resource_path('posts/my-fourth-post.html')
// );

Route::get('posts/{post}', function ($slug) {

    return view ('post', [
        'post' => Post::findOrFail($slug)
        ]);

});