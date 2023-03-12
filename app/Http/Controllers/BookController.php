<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Buku;
use App\Exports\BukuExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $bukus = Buku::where('judulbuku', 'LIKE', '%' .$request->search. '%')
            ->orWhere('th_terbit', 'like', '%'.$request->search.'%')
            ->orWhere('pengarang', 'like', '%'.$request->search.'%')
                                ->orWhere('penerbit', 'like', '%'.$request->search.'%')->paginate(10);
        }else{
            $bukus = Buku::paginate(5);
        }
        return view('admin/bukus/index', compact('bukus'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('admin/bukus/create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $bukus = $request->all();
        $bukus['gambar'] = $request->file('gambar')->store('gambarbuku', 'public');
        Buku::create($bukus);
        return redirect()->route('bukus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $bukus = Buku::find($id);

        return view('detail', compact('bukus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('admin/bukus/edit', compact('buku'));
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
        $buku = Buku::findOrFail($id);
        $bukus = $request->all();
        if($request->hasFile('gambar')){
            $bukus['gambar'] = $request->file('gambar')->store('gambarbuku', 'public');
        } else {
            $bukus['gambar'] = $buku->gambar;
        }
        $buku->update($bukus);
        return redirect()->route('bukus.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return redirect()->route('bukus.index');
    }

    public function gallery()
    {
            $bukus = Buku::all();
            $title = Buku::all();
            $title = "Beranda";
            return view('gallery', [
                'bukus' => $bukus,
                'title' => $title,
            ]);
    }

    public function searchbook(Request $request)
    {
        if ($request->has('search')) {
            $bukus = Buku::where('judulbuku','LIKE','%'.$request->search.'%')
                        ->orWhere('th_terbit', 'like', '%'.$request->search.'%')
                                ->orWhere('pengarang', 'like', '%'.$request->search.'%')
                                ->orWhere('penerbit', 'like', '%'.$request->search.'%')->paginate(10);
                                
            Session::put('halaman_url',request()->fullUrl());
            // halaman_url manggil mana ya
        }else {
            
            $bukus = Buku::paginate(5);
            Session::put('halaman_url',request()->fullUrl());
        }

    //   menampilkan halaman databuku
        $title = "Search";
        return view('/gallery', [
          'bukus' => $bukus,
          'title' => $title,
        ]);
    }

    public function exportpdf(){
        $bukus = Buku::all();

        view()->share('bukus', $bukus);
        $pdf = PDF::loadview('databuku-pdf');
        return $pdf->download('booksdata.pdf');
    }

    public function exportexcel(){
      return Excel::download(new BukuExport, 'booksdata.xlsx');  
    }
}
