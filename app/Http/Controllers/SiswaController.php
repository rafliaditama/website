<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Siswa;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_siswa = \App\Siswa::where('nama_lengkap','LIKE','%'.$request->cari.'%')->paginate(20);
    	}else{
    		$data_siswa = \App\Siswa::all();
    	}
    	$data_siswa = \App\Siswa::all();
    	return view('siswa.index',['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
    	//dd($request->all());
    	$this->validate($request,[
    		'nama_lengkap' => 'min:8',
    		'email' => 'required|email|unique:users',
    		'jenis_kelamin' => 'required',
    		'agama' => 'required',
    		'avatar' => 'mimes:jpeg,png',


    	]);
    	//insert ke table user
    	$user = new \App\User;
    	$user->role = 'siswa';
    	$user->name = $request->nama_lengkap;
    	$user->email = $request->email;
    	$user->password = bcrypt ('afisgege');
    	$user->remember_token = Str::random(60);
    	$user->save();

    	//insert ke table siswa
    	$request->request->add(['user_id' => $user->id]);
    	$siswa = \App\Siswa::create($request->all());	
    	if ($request->hasFile('avatar')) {
			$request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
			$siswa->avatar = $request->file('avatar')->getClientOriginalName();
			$siswa->save();
		}
    	return redirect('/siswa')->with('sukses','Data berhasil ditambahkan');
    }


	public function edit(Siswa $siswa)
	{		
		return view('siswa/edit',['siswa' => $siswa]);
	}

	public function update(Request $request,Siswa $siswa)
	{		
		$siswa->update($request->all());
		if ($request->hasFile('avatar')) {
			$request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
			$siswa->avatar = $request->file('avatar')->getClientOriginalName();
			$siswa->save();
		}
		return redirect ('/siswa')->with('sukses','Data berhasil diupdate');
	}
	public function delete(Siswa $siswa)
	{		
		$siswa->delete();
		return redirect('/siswa')->with('sukses','Data berhasil dihapus');
	}
	public function profile(Siswa $siswa)
    {		
		$matapelajaran = \App\Mapel::all();

		//Menyiapkan data untuk chart
        $categories = [];
        $data = [];

        foreach($matapelajaran as $mp){
            if ($siswa->mapel()->wherePivot('mapel_id',$mp->id)->first()) {
                $categories[] = $mp->nama;
                 $data[] = $siswa->mapel()->wherePivot('mapel_id',$mp->id)->first()->pivot->nilai;    
            }                       
                    }
        //dd($data);
        //dd(json_encode($categories));
		return view('siswa.profile',['siswa' => $siswa,'matapelajaran' => $matapelajaran,'categories' => $categories,'data' => $data]);  
	}

    public function addnilai(Request $request,$idsiswa)
    {        
        $siswa = \App\Siswa::find($idsiswa);
        if ($siswa->mapel()->where('mapel_id',$request->mapel)->exists()) {
            return redirect('siswa/'.$idsiswa.'/profile')->with('error','Data Mata Pelajaran Sudah Ada !');
        }
        $siswa->mapel()->attach($request->mapel,['nilai' => $request->nilai]);

        return redirect('siswa/'.$idsiswa.'/profile')->with('sukses','Data Nilai Berhasil Dimasukan');
    }

    public function deletenilai($idsiswa,$idmapel){
          $siswa = \App\Siswa::find($idsiswa);
          $siswa->mapel()->detach($idmapel);
          return redirect()->back()->with('sukses','Data nilai berhasil dihapus');

    }
    public function exportExcel() 
    {
        return Excel::download(new SiswaExport, 'Siswa.xlsx');
    }

    public function exportPdf(){
        $siswa = \App\Siswa::all();
        $pdf = PDF::loadView('export.siswapdf',['siswa' => $siswa]);
        return $pdf->download('siswa.pdf');
    }

    public function getdatasiswa(){
        $siswa = Siswa::select('siswa.*');
        
        return \DataTables::eloquent($siswa)
        ->addColumn('rata2_nilai',function($s){
            return $s->rataRataNilai();
        })
         ->addColumn('id', function ($s) {
        return '<h6><a href="/siswa/'. $s->id .'"</a></h6>';
         })
   
        ->addColumn('aksi',function($s){
            return '<a href="/siswa/'.$s->id.'/profile/" class="btn btn-warning">Profile</a>';
        })
        ->rawColumns(['rata2_nilai','id','aksi'])
        // ->make(true);
        ->toJson();
    }
    public function profilsaya(){
        $siswa = auth()->user()->siswa;
        return view('siswa.profilsaya',compact(['siswa']));
    }


}