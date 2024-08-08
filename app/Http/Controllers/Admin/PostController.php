<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\TemporaryFiles;

class PostController extends Controller
{
    public function post()
    {
        return view('admin.admin_panel_settings.post');
    }
    public function store(Request $request)
    {

        dd($request);
        $tmp_file = TemporaryFiles::where('folder_name', $request->photo)->first();
        if ($request->has('photo')) {
            // $request->validate(['photo' => 'required|mimes:png,jpg,jpeg|max:2000']);
            $photo = $request->file('photo');
            $file_names = $photo->getClientOriginalName();
            $folder = uniqid('post', true);
            $photo->storeAs('posts/tmp/' . $folder, $file_names);
        }
        if ($tmp_file) {

            Post::create([
                'name' => $request->name,
                'photo' => $folder . '/' . $file_names
            ]);
            return redirect('/')->with('success', ' تم تحديث البيانات بنجاح ');
        }
        return redirect('/')->with('error', ' عفوا حدث خطا ما في العملية ');
    }
    public function tmpUpload(Request $request)
    {
        if ($request->has('photo')) {

            $photo = $request->file('photo');
            $file_name = $photo->getClientOriginalName();
            $folder = uniqid('post', true);
            $photo->storeAs('posts/tmp/' . $folder, $file_name);
            TemporaryFiles::create([
                'folder_name' => $folder,
                'file_name' => $file_name,
            ]);
            return $folder;
        }
        return '';
    }
}
