<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemain;
use Illuminate\Support\Facades\File; 
class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data['data_pemain']=Pemain::where('nama','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data['data_pemain']=Pemain::all();
        }
        return view('pemain',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahData');
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
            'gambar'=>'mimes:jpeg,png,jpg,gif,svg',
            'nama'=>'required',
            'negara'=>'required',
            'posisi'=>'required',
            'tim'=>'required',
            'gambar'=>'required'
        ]);

        $imgName=$request->gambar->getClientOriginalName(). '-' . time() 
                                   . '.' . $request->gambar->extension();
                
        $request->gambar->move(public_path('image'),$imgName);
        
        Pemain::create([
            'nama'=>$request->nama,
            'negara'=>$request->negara,
            'posisi'=>$request->posisi,
            'tim'=>$request->tim,
            'gambar'=>$imgName
        ]);

        return redirect('/pemain');
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
    public function edit($id)
    {
        $data['pemain']=Pemain::find($id);
        return view('ubahData',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'id'=>'required',
            'nama'=>'required',
            'negara'=>'required',
            'posisi'=>'required',
            'tim'=>'required'
        ]);     
        $pemain=Pemain::find($id);
        $imgName = $request->gambar;
        if (!empty($imgName)) {        
            $imgName = $request->gambar->getClientOriginalName() . '-' . time() . '.' . $request->gambar->extension();
            if (file::exists('image/'.$pemain->gambar)) { 
                File::delete(public_path('image/'.$pemain->gambar), $pemain->gambar);
            }
            $request->gambar->move(public_path('image'), $imgName);
            $pemain->gambar=$imgName; 
        }  
        $pemain->nama=$request->nama;
        $pemain->negara=$request->negara;
        $pemain->posisi=$request->posisi;
        $pemain->tim=$request->tim;
        $pemain->save();
        return redirect('/pemain');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Pemain::destroy($id);
        // return redirect('/pemain');
        $hapus=Pemain::findorfail($id);
        $file=public_path('/image/').$hapus->gambar;
        //Cek jika ada gambar
        if (file_exists($file)) {
            //Maka hapus file folder Public/image
            @unlink($file);
        }
        $hapus->delete();
        return redirect('/pemain');
    }
}
