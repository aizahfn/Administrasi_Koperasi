<?php

namespace App\Http\Controllers;

use App\Models\Penjadwalan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PenjadwalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return response()
     */
    public function index()
    {
    //     $datapenjadwalan = Penjadwalan::latest()->paginate(5);

    //     return view('datapenjadwalan.index',compact('datapenjadwalan'))
    //                 ->with('i', (request()->input('page', 1) - 1) * 5);
    $penjadwalans = penjadwalan::get();
    return view ('penjadwalans.index',compact('penjadwalans')) ;
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjadwalans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function saveJadwal(Request $request)
    {
        $saveJadwal = penjadwalan::create([
            'jadwal_rapat'=> $request->jadwal_rapat,
            'jadwal_shift'=> $request->jadwal_shift,
            'jadwal_lain'=> $request->jadwal_lain,
            'agenda_jadwal'=> $request->agenda_jadwal,
            'tanggal_jadwal'=> $request->tanggal_jadwal,
            'deskripsi_jadwal'=> $request->deskripsi_jadwal,
            'tujuan_jadwal'=> $request->tujuan_jadwal,
        ]);
        return redirect('/');
    }

    public function Delete($id)
    {
        $penjadwalan = penjadwalan::find($id);
        $penjadwalan->Delete();
        return redirect('/');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $penjadwalans = penjadwalan::find($id);
        return view('penjadwalans.edit', compact('penjadwalans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $storeJadwal = penjadwalan::find($id);
        $storeJadwal ->update([
            'jadwal_rapat'=> $request->jadwal_rapat,
            'jadwal_shift'=> $request->jadwal_shift,
            'jadwal_lain'=> $request->jadwal_lain,
            'agenda_jadwal'=> $request->agenda_jadwal,
            'tanggal_jadwal'=> $request->tanggal_jadwal,
            'deskripsi_jadwal'=> $request->deskripsi_jadwal,
            'tujuan_jadwal'=> $request->tujuan_jadwal,
        ]);
        return redirect('/');


    }


}
