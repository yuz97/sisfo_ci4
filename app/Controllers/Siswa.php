<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel;
use App\Models\JurusanModel;

class Siswa extends BaseController
{
	public function __construct()
	{
		$this->SiswaModel = new SiswaModel();
		$this->JurusanModel = new JurusanModel();
	}


	public function index()
	{
		//page
		$currentPage = $this->request->getVar('page_siswa') ?? 1;
		return view('siswa/index', [
			'title'  	  => 'Daftar Siswa',
			'siswa'  	  => $this->SiswaModel->getSiswa()->orderBy('nama', 'ASC')->paginate(4, 'siswa'),
			'page'	 	  => $this->SiswaModel->pager,
			'currentPage' => $currentPage
		]);
		$o = $this->SiswaModel->getSiswa();
		dd($o);
	}
	public function create()
	{
		session();
		return view('siswa/create', [
			'title' 	 => 'Tambah Siswa',
			'validation' => \Config\Services::validation(),
			'jurusan'	 => $this->JurusanModel->findAll()
		]);
	}

	public function store()
	{

		if (!$this->validate([
			'nama'  => 'required',
			'nik'	=> 'required|is_unique[siswa.nik]',
			'kelas' => 'required',
			'jurusan_id' => 'required'
		])) {
			$validation = \Config\Services::validation();
			return redirect()->to(base_url('siswa/create'))->withInput()->with('validation', $validation);
		}

		$data = [
			'nama'  	 => $this->request->getPost('nama'),
			'nik'   	 => $this->request->getPost('nik'),
			'kelas' 	 => $this->request->getPost('kelas'),
			'jurusan_id' => $this->request->getPost('jurusan_id'),
			'created_at' => $this->request->getPost('created_at')
		];
		$this->SiswaModel->insert($data);
		return redirect()->to(base_url('siswa'));
	}

	public function edit($id)
	{
		$siswa = $this->SiswaModel->where(['id' => $id])->first();
		$title = 'Edit Siswa';
		return view('siswa/edit', compact('siswa', 'title'));
	}
	public function update($id)
	{
		$data = [
			'nama' 		 => $this->request->getVar('nama'),
			'nik'  		 => $this->request->getVar('nik'),
			'kelas' 	 => $this->request->getVar('kelas'),
			'updated_at' => $this->request->getVar('updated_at')
		];
		$this->SiswaModel->update(['id' => $id], $data);
		return redirect()->to('siswa');
	}
	public function show($id)
	{
		$siswa = $this->SiswaModel->where(['id' => $id])->first();
		return view('siswa/show', compact('siswa'));
	}
	public function destroy($id)
	{
		$this->SiswaModel->where(['id' => $id])->delete();
		return redirect()->to(base_url('siswa'));
	}

	public function search()
	{
		$keyword = $this->request->getVar('search');
		if ($keyword) {
			$this->SiswaModel->like('nama', $keyword)->orLike('nik', $keyword);
			$currentPage = $this->request->getVar('page_siswa') ?? 1;
			return view('siswa/index', [
				'title'  	  => 'Daftar Siswa',
				'siswa'  	  => $this->SiswaModel->getSiswa()->orderBy('nama', 'ASC')->paginate(4, 'siswa'),
				'page'	 	  => $this->SiswaModel->pager,
				'currentPage' => $currentPage
			]);
		} else {

			$currentPage = $this->request->getVar('page_siswa') ?? 1;
			return view('siswa/index', [
				'title'  	  => 'Daftar Siswa',
				'siswa'  	  => $this->SiswaModel->getSiswa()->orderBy('nama', 'ASC')->paginate(4, 'siswa'),
				'page'	 	  => $this->SiswaModel->pager,
				'currentPage' => $currentPage
			]);
		}
	}
}
