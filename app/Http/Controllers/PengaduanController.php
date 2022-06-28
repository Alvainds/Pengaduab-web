<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:pengaduan-list|pengaduan-create|pengaduan-edit|pengaduan-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:pengaduan-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:pengaduan-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:pengaduan-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->roles->pluck('name')[0] === 'Admin') {
            $pengaduans =
                Pengaduan::latest()->paginate(5);
        } else {
            $pengaduans =
                Pengaduan::latest()->where('nik', Auth::user()->nik)->paginate(5);
        }

        return view('pengaduan.index', compact('pengaduans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'isi_laporan' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pengaduan_data = [
            'nik' => Auth::user()->nik,
            'isi_laporan' => $request->input('isi_laporan'),
            'foto' => $request->file('foto')->store('images'),
            'status' => 'belum proses',
        ];

        Pengaduan::create($pengaduan_data);

        return redirect()->route('pengaduan.index')
            ->with('success', 'Pengaduan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaduan $pengaduan)
    {
        return view('pengaduan.show', compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaduan $pengaduan)
    {
        return view('pengaduan.edit', compact('pengaduan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $pengaduan->update($request->all());

        return redirect()->route('pengaduan.index')
            ->with('success', 'Pengaduan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaduan $pengaduan)
    {
        $pengaduan->delete();

        return redirect()->route('pengaduan.index')
            ->with('success', 'Pengaduan deleted successfully');
    }
}
