<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\BUMN;

use Session;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\BUMNExport;
use App\Imports\BUMNImport;

class BumnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bumns = BUMN::all();
        return view ('BUMN.DataBUMN', compact('bumns'));
    }
    public function olah()
    {
        $bumns = BUMN::all();

        $users = BUMN::select(DB::raw('month(created_at) as month'), DB::raw('count(*) as count'))
        ->whereYear('created_at',date('Y'))
        ->groupBy(DB::raw('Month(created_at)'))
        ->get();

        $month =BUMN::select(DB::raw('count(*) as count'))
                ->whereYear('created_at',date('Y'))
                ->groupBy(DB::raw('Month(created_at)'))
                ->get();

        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach ($users as $user)
        {
            $datas[$user->month - 1] = $user->count;
        }
        return view ('BUMN.OlahBUMN', compact('bumns','datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BUMN.InputBUMN');
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
            'nama_karyawan' => 'required',
            'nama_panggilan' => 'required',
            'NIK' => 'required',
            'bank' => 'required',
            'no_rekening' => 'required',
            'status_kartu' => 'required',
            'keterangan' => 'required',
        ]);
        BUMN::create($request->all());

        return redirect('/BUMN/OlahBUMN')->with('Informasi','Data Telah Masuk!');
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
    public function edit(BUMN $bumns)
    {
        return view('BUMN.EditBUMN',compact('bumns'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BUMN $bumns)
    {
        BUMN::WHERE('id', $bumns-id)
        ->update([
           'nama_karyawan'=>$request->nama_karyawan,
           'nama_panggilan'=>$request->nama_panggilan,
           'NIK'=>$request->NIK,
           'bank'=>$request->bank,
           'no_rekening'=>$request->no_rekening,
           'status_kartu'=>$request->status_kartu,
           'keterangan'=>$request->keterangan
        ]);

        return redirect('/BUMN/OlahBUMN')->with('Informasi','Data Telah Diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BUMN $bumns)
    {
        return redirect('/BUMN/OlahBUMN')->with('Informasi','Data Telah Di Hapus!');
    }

    public function export_excel()
    {
        return Excel::download(new BUMNExport, 'bumns.xlsx');
    }

    public function import_excel(Request $request)
    {
        $this->validate($request,
        [
        'csv_file' => 'required|mimes:csv,xls,xlsx'
        ]);
       
       //File Excel
       $csv_file = $request->file('csv_file');
       
       //Membuat file unik
       $nama_file = rand().$csv_file->getClientOriginalName();

       //Upload Ke Folder file_siswa
        $csv_file->move('bumns',$nama_file);

       //Import Data
       Excel::import(new BUMNImport, public_path('/bumns/'.$nama_file));
       
       //Notifikasi
       Session::flash('sukses','Data Siswa Berhasil Diimport!');

       //Halaman kembali
       return redirect('/BUMN/OlahBUMN')->with('sukses','Data Telah Masuk!');
    }
}
