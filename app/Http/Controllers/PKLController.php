<?php

namespace App\Http\Controllers;

use App\PKL;
use App\User;

use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\PKLExport;
use App\Imports\PKLImport;

class PKLController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pkls = PKL::all();
        return view('PKL.DataPKL', compact('pkls'));
    }

    public function kelola()
    {
        $pkls =PKL::all();
        
        // $chartPKL = PKL::query()
        //             ->selectRaw('MONTH(created_at) as bulan ,COUNT(id) as jumlah' )
        //             ->whereRaw('YEAR(created_at)','2020')
        //             ->groupBy('bulan')
        //             ->get();

        $users = PKL::select(DB::raw('jurusan'), DB::raw('count(*) as count'))
                ->whereYear('created_at',date('Y'))
                ->groupBy(DB::raw('jurusan'))
                ->get();

        $month =PKL::select(DB::raw('count(*) as count'))
                ->whereYear('created_at',date('Y'))
                ->groupBy(DB::raw('jurusan'))
                ->get();
        
        $jurusan = $users->pluck('jurusan');
        
        $datas =[];
        foreach ($users as $i => $user)
        {   
            $datas[] = [
                'name' => $user->jurusan,
                'y' => $user->count
                ];
        }
    
        return view('PKL.OlahPKL', compact('pkls','datas','jurusan'));

    }
    // SELECT month(created_at)
    // COUNT(id) FROM pkls where year(created_at) = 2020
    // group by month(created_at)

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('PKL.InputPKL');
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
            'nama' => 'required',
            'NIM' => 'required',
            'email' => 'required',
            'asal' => 'required',
            'universitas' => 'required',
            'jurusan' => 'required',
            'no_telefon' => 'required',
            'Status' => 'required',
        ]);
            PKL::create($request->all());

            return redirect('/PKL/OlahPKL')->with('Informasi','Data Telah Masuk!');
    
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
    public function edit(PKL $pkls)
    {
        return view('PKL.EditPKL',compact('pkls'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PKL $pkls)
    {
        $request->validate([
            'nama' => 'required',
            'NIM' => 'required',
            'email' => 'required',
            'asal' => 'required',
            'universitas' => 'required',
            'jurusan' => 'required',
            'no_telefon' => 'required',
            'Status' => 'required',
        ]);

        PKL::where('id',$pkls->id)->update([
            'nama' => $request->nama,
            'NIM' => $request->NIM,
            'email' => $request->email,
            'asal' => $request->asal,
            'universitas' => $request->universitas,
            'jurusan' => $request->jurusan,
            'no_telefon' => $request->no_telefon,
            'Status' => $request->Status
        ]);
        return redirect('/PKL/OlahPKL')->with('Informasi','Data telah diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PKL $pkls)
    {
        $pkls->delete($id);
        return redirect('/PKL/OlahPKL')->with('Informasi','Data Telah Di Hapus!');
    }

    public function export_excel()
    {
        return Excel::download(new PKLExport, 'pkls.xlsx');
    }
    
    public function import_excel(Request $request)
    {
        
        // //Validate
        $this->validate($request,
         [
             'csv_file' => 'required|mimes:csv,xls,xlsx'
             ]);
            
            //File Excel
            $csv_file = $request->file('csv_file');
            
            //Membuat file unik
            $nama_file = rand().$csv_file->getClientOriginalName();

            //Upload Ke Folder file_siswa
             $csv_file->move('pkls',$nama_file);

            //Import Data
            Excel::import(new PKLImport, public_path('/pkls/'.$nama_file));
            
            //Notifikasi
            Session::flash('sukses','Data Siswa Berhasil Diimport!');
 
            //Halaman kembali
            return redirect('/PKL/OlahPKL')->with('sukses','Data Telah Masuk!');
    }

    
}
