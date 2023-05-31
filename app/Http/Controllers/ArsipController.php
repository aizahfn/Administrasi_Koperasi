<?php

namespace App\Http\Controllers;

use App\Models\arsip;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ArsipController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return response()
    //  */
    public function index(): View
    {
        $arsips = arsip::latest()->paginate(5);

        return view('arsip.index',compact('arsips'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('arsip.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'no_dokumen' => 'required',
            'nama_dokumen' => 'required',
            'kategori_dokumen' => 'required',
            'tanggal_dokumen' => 'required',
            'isi_dokumen' => 'required',
            'sumber_dokumen' => 'required',
            'penerima_dokumen' => 'required',
            'status_dokumen' => 'required',
            'aksesibilitas_dokumen' => 'required',
        ]);

        $input = $request->all();

        // if ($image = $request->file('image')) {
        //     $destinationPath = 'images/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['image'] = "$profileImage";
        // }

        arsip::create($input);

        return redirect()->route('arsip.index')
                        ->with('Success!','Arsip Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(arsip $arsip): View
    {
        return view('arsip.show',compact('arsip'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(arsip $arsip): View
    {
        return view('arsip.edit',compact('arsip'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, arsip $arsip): RedirectResponse
    {
        $request->validate([
            'no_dokumen' => 'required',
            'nama_dokumen' => 'required',
            'kategori_dokumen' => 'required',
            'tanggal_dokumen' => 'required',
            'isi_dokumen' => 'required',
            'sumber_dokumen' => 'required',
            'penerima_dokumen' => 'required',
            'status_dokumen' => 'required',
            'aksesibilitas_dokumen' => 'required'
        ]);

        $input = $request->all();

        // if ($image = $request->file('image')) {
        //     $destinationPath = 'images/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['image'] = "$profileImage";
        // }else{
        //     unset($input['image']);
        // }

        $arsip->update($input);

        return redirect()->route('arsip.index')
                        ->with('Success!','Arsip Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(arsip $arsip): RedirectResponse
    {
        $arsip->delete();

        return redirect()->route('arsip.index')
                        ->with('Success!','Arsip Deleted Successfully');
    }
}
