<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return response()
     */
    public function index(): View
    {
        $datalowongan = Lowongan::latest()->paginate(5);

        return view('datalowongan.index',compact('datalowongan'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('datalowongan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_lowongan' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal_lowongan' => 'required',
            'jumlah_lowongan' => 'required',
            'deskripsi_lowongan' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Lowongan::create($input);

        return redirect()->route('datalowongan.index')
                        ->with('success','Lowongan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lowongan $lowongan): View
    {
        return view('datalowongan.show',compact('lowongan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lowongan $lowongan): View
    {
        return view('datalowongan.edit',compact('lowongan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lowongan $lowongan): RedirectResponse
    {
        $request->validate([
            'nama_lowongan' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal_lowongan' => 'required',
            'jumlah_lowongan' => 'required',
            'deskripsi_lowongan' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $lowongan->update($input);

        return redirect()->route('datalowongan.index')
                        ->with('success','Lowongan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lowongan $lowongan): RedirectResponse
    {
        $lowongan->delete();

        return redirect()->route('datalowongan.index')
                        ->with('success','Lowongan deleted successfully');
    }
}
