<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fasilitas;


class CrudController extends Controller
{

    //untukumum
    //fasilitas

    public function tampilfasilitasumum() {
    	$datafasilitasumum = fasilitas::orderBy('nama', 'asc')->paginate(5);
    	return view('fasilitas/fasilitas', ['fasilitasumum' => $datafasilitasumum]);
    }



    //untuk admin
    //fasilitas

    public function tampilfasilitas() {
    	$datafasilitas = fasilitas::orderBy('nama', 'asc')->paginate(5);
    	return view('fasilitas/admin-fasilitas', ['datafasilitas' => $datafasilitas]);
    }

    public function tambahfasilitas(Request $req) {
        $this->validate($req, [
            'nama' => 'required',
            'jumlah' => 'required',
            'posisi' => 'required'
        ]);
        fasilitas::create([
            'nama' => $req->nama,
            'jumlah' => $req->jumlah,
            'posisi' => $req->posisi
        ]);
        return redirect()->back();
    }

    public function hapusfasilitas($id)
    {
        $fasilitas = fasilitas::find($id);
        $fasilitas->delete();
        return redirect()->back();
    } 

    //koleksi
    public function tampilkoleksi() {
    	$datakoleksi = koleksi::orderBy('nama', 'asc')->paginate(5);
    	return view('koleksis/admin-koleksi', ['datakoleksi' => $datakoleksi]);
    }

    public function tambahkoleksi(Request $req) {
        $this->validate($req, [
            'nama' => 'required',
            'jumlah' => 'required'   
        ]);
        fasilitas::create([
            'nama' => $req->nama,
            'jumlah' => $req->jumlah
        ]);
        return redirect()->back();
    }

    public function hapuskoleksi($id)
    {
        $koleksi = koleksi::find($id);
        $koleksi->delete();
        return redirect()->back();
    }
}
