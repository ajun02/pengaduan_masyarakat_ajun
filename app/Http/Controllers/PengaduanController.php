<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\pengaduan;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = Pengaduan::all();
        return view('pengaduan.index', compact('pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengaduan = Pengaduan::all();
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
        $this->validate($request,[
            // 'id_pengaduan'      => 'required',
            'tanggal_pengaduan' => 'required',
            'NIK'               => 'required',
            'isi_laporan'       => 'required',
            'foto'              => 'required',
            'status'            => 'required'
        ]);


        //$data = new Pengaduan;
        //$data->id_pengaduan = $request->id_pengaduan;
        //$data->tanggal_pengaduan = $request->tanggal_pengaduan;
        //$data->NIK = $request->NIK;
        //$data->isi_laporan = $request->isi_laporan;
        //$data->foto = $request->foto;
        //$data->status = $request->status;
        //$request->file('foto')->store('pengaduan');

        //$data->save();
        Pengaduan::create([
            // 'id_pengaduan' => $request->id_pengaduan,
            'tanggal_pengaduan' => $request->tanggal_pengaduan,
            'NIK' => $request->NIK,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $request->foto,
            'status' => $request->status
		]);
        // $pengaduan->save();
        return redirect('pengaduan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pengaduan.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengaduan = Pengaduan::where('id_pengaduan', $id)->first();
        return view('pengaduan.edit', compact('pengaduan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pengaduan)
    {
        $this->validate($request,[
            // 'id_pengaduan'      => 'required',
            'tanggal_pengaduan' => 'required',
            'NIK'               => 'required',
            'isi_laporan'       => 'required',
            'foto'              => 'required',
            'status'            => 'required'
        ]);

        $pengaduan = Pengaduan::find($id_pengaduan);
        $pengaduan -> tanggal_pengaduan = $request->tanggal_pengaduan;
        $pengaduan -> NIK = $request->NIK;
        $pengaduan -> isi_laporan = $request->isi_laporan;
        $pengaduan -> foto = $request->foto;
        $pengaduan -> status = $request->status;

        $pengaduan -> save();
        return redirect('/pengaduan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengaduan::where('id_pengaduan', $id)->delete();
        return redirect('/pengaduan');
    }
}
