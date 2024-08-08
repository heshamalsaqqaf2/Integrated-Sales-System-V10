<?php

function uploadImages($folder, $image)
{
    $extension = strtolower($image->extension());
    $fileName = time() . rand(100, 999) . '.' . $extension;
    $image->getClintOrignalName = $fileName;
    $image->move($folder, $fileName);
    return $fileName;
}
// function upload($request)
// {
//     if ($request->hasFile('photo')) {
//         $file = $request->file('photo');
//         $path = $file->store('assets/uploads/', ['disk' => 'public']);

//         return response()->json(['path' => $path], 200);
//     }

//     return response()->json(['error' => 'No file uploaded'], 400);
// }
