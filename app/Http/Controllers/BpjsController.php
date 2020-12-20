<?php

namespace App\Http\Controllers;

use App\BPJS;

use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\BPJSExport;
use App\Imports\BPJSImport;

class BpjsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bpjss = BPJS::all();
        return view ('BPJS.DataBPJS', compact('bpjss'));
    }
    
    public function olah()
    {
        $bpjss = BPJS::all();
        
        $users = BPJS::select(DB::raw('keterangan'), DB::raw('count(*) as count'))
        ->whereYear('created_at',date('Y'))
        ->groupBy(DB::raw('keterangan'))
        ->get();

        $month =BPJS::select(DB::raw('count(*) as count'))
        ->whereYear('created_at',date('Y'))
        ->groupBy(DB::raw('keterangan'))
        ->get();
        
        $keterangan = $users->pluck('keterangan');

        $datas = [];
        foreach ($users as $i => $user)
        {   
            $datas[] = [
                'name' => $user->keterangan,
                'y' => $user->count
                ];
        }
        return view ('BPJS.OlahBPJS', compact('bpjss','datas','ketarangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('BPJS.InputBPJS');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'NIK'=>'required',
            'divisi'=>'required',
            'keterangan'=>'required',
        ]);
            BPJS::create($request->all());

            return redirect('/BPJS/OlahBPJS')->with('Informasi','Data Telah Masuk!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BPJS $bpjss)
    {
        return view('BPJS.EditBpjs',compact('bpjss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BPJS $bpjss)
    {
        $request->validate([
            'nama'=>'required',
            'NIK'=>'required',
            'divisi'=>'required',
            'keterangan'=>'required',
        ]);

        BPJS::WHERE('id',$bpjss->id)
        ->update([
            'nama'=> $request->nama,
            'NIK'=> $request->NIK,
            'divisi'=> $request->divisi,
            'keterangan'=> $request->keterangan
        ]);
        return redirect('/BPJS/OlahBPJS')->with('Informasi','Data Telah Diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BPJS $bpjss)
    {
        $bpjss->delete();
        return redirect('/BPJS/OlahBPJS')->with('Informasi','Data Telah Di Hapus!');
    }

    public function export_excel()
    {
        return Excel::download(new BPJSExport, 'bpjss.xlsx');
    }

    public function import_excel(Request $request)
    {
        //Validasi
        $this->validate($request,
        [
            'csv_file' => 'required|mimes:csv,xls,xlsx'
        ]);

        //File Excel
        $csv_file = $request->file('csv_file');

        //Membuat File Unik
        $nama_file = rand().$csv_file->getClientOriginalName();

        //Upload ke Folder File Siswa
        $csv_file->move('bpjss',$nama_file);

        //Import Data
        Excel::import(new BPJSImport, public_path('/bpjss/'.$nama_file)); 

        //Halaman Kembali
        return redirect('/BPJS/OlahBPJS')->with('sukses','Data Telah Masuk!');
    }
}
