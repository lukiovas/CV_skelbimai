<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advert;

class AdsController extends Controller
{
    public function index()
    {   
        $adverts = Advert::orderBy('created_at','dsc')->paginate(10);
        return view('home')->with('adverts', $adverts);
    }

    public function create()
    {
        return view('adverts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'file' => 'required|max:10000'
        ]);

        // Create new product
        $advert = New Advert();
        
            $advert->name = $request->input('name');
            $advert->email = $request->input('email');
            $advert->job_category = $request->input('job_category');

            if($request->hasFile('file')) {
                // Filename with extension
                $fileNameWithExt = $request->file('file')->getClientOriginalName();
                // Just file name
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                // Just extension
                $extension = $request->file('file')->getClientOriginalExtension();
                // File store name
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;
                // Upload file
                $path = $request->file('file')->storeAs('public/upload', $fileNameToStore);
            } else {
                $fileNameToStore = 'nofile.txt';
            }
            $advert->file = $fileNameToStore;
            $advert->save();

            return redirect('/')->with('success' , 'Skelbimas sukurtas');
    }

    public function show($id)
    {
        $advert = Advert::find($id);
        return view('adverts.show')->with('advert', $advert);
    }
}
