<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keluarga;
use App\Telefon;
use App\Stating;
use App\Alamat;
use App\Bansos;
use App\Http\Requests\rtRequest;
use Storage;

class rtController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function homepage() {
		$halaman='homepage';
		return view('homepage', compact('halaman'));
	}

	public function about() {
		$halaman='about';
		return view('about', compact('halaman'));
	}

	public function index() {
		$keluargalist=Keluarga::orderBy('namakpk', 'asc')->paginate(3);
		$jumlahkeluarga=Keluarga::count();
		return view('index', compact('keluargalist', 'jumlahkeluarga'));
	}

	public function create() {
		return view('create');
	}

	public function show(Keluarga $keluarga) {
		return view('show', compact('keluarga'));
	}

	public function store(rtRequest $request) {
		$input=$request->all();

		if ($request->hasFile('foto')) {
			$input['foto']=$this->uploadFoto($request);
		}
		$keluarga=Keluarga::create($input);

		if ($request->filled('notelefon')) {
			$this->insertTelefon($keluarga, $request);
		}
		$keluarga->Bansos()->attach($request->input('bansos'));
		return redirect('keluarga');
	}

	public function edit(Keluarga $keluarga) {
		if (!empty($keluarga->telefon->notelefon)) {
			$keluarga->notelefon=$keluarga->telefon->notelefon;
		}
		return view ('edit', compact('keluarga'));
	}

	public function update(Keluarga $keluarga, rtRequest $request) {
		$input=$request->all();

		if ($request->hasFile('foto')) {
			$input['foto']=$this->updateFoto($keluarga, $request);
		}
		$keluarga->update($input);
		$this->updateTelefon($keluarga, $request);
		$keluarga->Bansos()->sync($request->input('bansos'));
		return redirect('keluarga');
	}

	public function delete(Keluarga $keluarga) {
		$this->hapusFoto($keluarga);

        $keluarga->delete();
        return redirect('keluarga');
	}

	private function insertTelefon(Keluarga $keluarga, rtRequest $request){
		$telefon=new Telefon;
		$telefon->notelefon=$request->input('notelefon');
		$keluarga->telefon()->save($telefon);
	}

	private function updateTelefon(Keluarga $keluarga, rtRequest $request){
	//update jika sudah ada sebelumnya
		if ($keluarga->telefon) {
			//jika nomor tidak diubah
			if ($request->filled('notelefon')==$keluarga->telefon->notelefon) {
				$keluarga->telefon()->delete();
				$telefon=new Telefon;
				$telefon->notelefon=$request->input('notelefon');
				$keluarga->telefon()->save($telefon);
			}
			//jika telefon diubah, update
			else if ($request->filled('notelefon')) {
				$telefon=Telefon::where('idtelefon', $keluarga->id)->update(['notelefon'=>$request->input('notelefon')]);
			}
			//jika telefon dihapus
			else {
				$keluarga->telefon()->delete();
			}
		}
		//buat entry baru jika sebelumnya tidak pernah ada
		else {
			if ($request->filled('notelefon')) {
				$telefon=new Telefon;
				$telefon->notelefon=$request->input('notelefon');
				$keluarga->telefon()->save($telefon);
			}
		}
	}

	private function uploadFoto(rtRequest $request){
		$foto=$request->file('foto');
		$ext=$foto->getClientOriginalExtension();
		
		if ($request->file('foto')->isValid())
		{
			$fotoname=date('YmdHis').".$ext";
			$request->file('foto')->move('fotoupload', $fotoname);
			return $fotoname;
		}
		return false;
	}

	private function updateFoto(Keluarga $keluarga, rtRequest $request){
		if ($request->hasFile('foto')) {
			$exist=Storage::disk('foto')->exists($keluarga->foto);

			if (isset($keluarga->foto) && $exist) {
				$delete = Storage::disk('foto')->delete($keluarga->foto);
			}

			$foto=$request->file('foto');
			$ext=$foto->getClientOriginalExtension();
			if ($request->file('foto')->isValid())
			{
				$fotoname=date('YmdHis').".$ext";
				$uploadpath='fotoupload';
				$request->file('foto')->move($uploadpath, $fotoname);
				return $fotoname;
			}
		}
	}

	private function hapusFoto(Keluarga $keluarga){
		$isfotoexist=Storage::disk('foto')->exists($keluarga->foto);
		if ($isfotoexist) {
			Storage::disk('foto')->delete($keluarga->foto);
		}
	}
}
?>