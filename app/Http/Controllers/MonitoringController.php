<?php

namespace App\Http\Controllers;

use App\Monitoring;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\MonitoringExport;
use App\Imports\MonitoringImport;

class MonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monitorings = Monitoring::all();
        return view('Monitoring.DataMonitoring', compact('monitorings'));
    }

    public function olah()
    {
        $monitorings = Monitoring::all();
        $users = Monitoring::select(DB::raw('month(created_at) as month'), DB::raw('count(*) as count'))
        ->whereYear('created_at',date('Y'))
        ->groupBy(DB::raw('Month(created_at)'))
        ->get();

        $month =Monitoring::select(DB::raw('count(*) as count'))
                ->whereYear('created_at',date('Y'))
                ->groupBy(DB::raw('Month(created_at)'))
                ->get();

        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach ($users as $user)
        {
            $datas[$user->month - 1] = $user->count;
        }
        return view('Monitoring.OlahMonitoring',compact('monitorings','datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Monitoring.InputMonitoring');
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
            'detail_perihal'=>'required',
            'via_laporan'=>'required',
            'tanggal_lapor'=>'required',
            'penerima'=>'required',
            'kelengkapan'=>'required'
        ]);
        Monitoring::create($request->all());
        
        return redirect('/Monitoring/OlahMonitoring')->with('Informasi','Data Telah Masuk!');
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
    public function edit(Monitoring $monitorings)
    {
        return view ('Monitoring.EditMonitoring', compact('monitorings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monitoring $monitorings)
    {
        $request->validate([
            'nama'=>'required',
            'NIK'=>'required',
            'detail_perihal'=>'required',
            'via_laporan'=>'required',
            'tanggal_lapor'=>'required',
            'penerima'=>'required',
            'kelengkapan'=>'required'
        ]);

        Monitoring::where('id', $monitorings->id)
        ->update([
            'nama'=>$request->nama,
            'NIK'=>$request->NIK,
            'detail_perihal'=>$request->detail_perihal,
            'via_laporan'=>$request->via_laporan,
            'tanggal_lapor'=>$request->tanggal_lapor,
            'penerima'=>$request->penerima,
            'kelengkapan'=>$request->kelengkapan
        ]);

        return redirect('/Monitoring/OlahMonitoring')->with('Informasi','Data Telah Diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monitoring $monitorings)
    {
        $monitorings->delete();
        return redirect('/Monitoring/OlahMonitoring')->with('Informasi','Data Telah Di Hapus!');
    }

    public function export_excel()
    {
        return Excel::download(new MonitoringExport, 'monitorings.xlsx');
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
             $csv_file->move('monitorings',$nama_file);

            //Import Data
            Excel::import(new MonitoringImport, public_path('/monitorings/'.$nama_file));
            
            //Notifikasi
            Session::flash('sukses','Data Siswa Berhasil Diimport!');
 
            //Halaman kembali
            return redirect('/Monitoring/OlahMonitoring')->with('sukses','Data Telah Masuk!');
    }
}
