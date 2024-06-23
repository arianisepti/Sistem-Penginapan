<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Profiler\Profile as ProfilerProfile;

class ProfileController extends Controller
{
    public function index() : View
    {
        //get all products
        $profiles = profile::latest()->paginate(20);

        //render view with products
        return view('profile.index', compact('profiles'));
    }

    public function create(): View
    {
        return view('profile.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'name'         => 'required|string|max:255',
            'email'   => 'required|string|max:100',
            'gender'         => 'required|string|max:50',
            'birth'         => 'required|date',
            'address'         => 'required|string|max:255',
            'phone'         => 'required|regex:/^[0-9]+$/|max:15',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/Reservasi', $image->hashName());

        //create product
        profile::create([
            'image'         => $image->hashName(),
            'name'          => $request->name,
            'email'         => $request->email,
            'gender'         => $request->gender,
            'birth'         => $request->birth,
            'address'         => $request->address,
            'phone'         => $request->phone,
        ]);

        //redirect to index
        return redirect()->route('profile.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    public function show(string $id): View
    {
        //get product by ID
        $profile = Profile::findOrFail($id);

        //render view with product
        return view('profile.show', compact('profile'));
    }

    public function edit(string $id): View
    {
        //get product by ID
        $profile = Profile::findOrFail($id);

        //render view with product
        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
           'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'name'         => 'required|string|max:255',
            'email'        => 'required|string|max:100',
            'gender'       => 'required|string|max:50',
            'birth'        => 'required|date',
            'address'      => 'required|string|max:255',
            'phone'        => 'required|regex:/^[0-9]+$/|max:15',
        ]);

        //get product by ID
        $profile = Profile::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/Reservasi/', $image->hashName());

            //delete old image
            Storage::delete('public/Reservasi/'.$profile->image);

            //update profile with new image
            $profile->update([
                'image'         => $image->hashName(),
                'name'          => $request->name,
                'email'         => $request->email,
                'gender'         => $request->gender,
                'birth'         => $request->birth,
                'address'         => $request->address,
                'phone'         => $request->phone,
            ]);

        } else {

            //update profile without image
            $profile->update([
                'name'          => $request->name,
                'email'         => $request->email,
                'gender'         => $request->gender,
                'birth'         => $request->birth,
                'address'         => $request->address,
                'phone'         => $request->address,
            ]);
        }

        //redirect to index
        return redirect()->back()->with(['success' => 'Data Berhasil Diubah!']);
    }
}
