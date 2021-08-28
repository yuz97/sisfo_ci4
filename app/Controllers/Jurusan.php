<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JurusanModel;

class Jurusan extends BaseController
{
	public function __construct()
	{
		$this->JurusanModel = new JurusanModel();
	}

	public function index()
	{

		return view('jurusan/index', [
			'title' 	 => 'Daftar Jurusan',
			'jurusan' 	 => $this->JurusanModel->findAll(),
			'validation' => \Config\Services::validation()
		]);
	}
	public function create()
	{
		return view('jurusan/create', [
			'title' => 'Tambah Jurusan',
			'validation' => \Config\Services::validation()
		]);
	}
	public function store()
	{
		if (!$this->validate([
			'nama_jurusan' => 'required|is_unique[jurusan.nama_jurusan]'
		])) {
			$validation = \Config\Services::validation();
			return redirect()->to(base_url('jurusan'))->with('validation', $validation);
		}
		$data = [
			'nama_jurusan' => $this->request->getPost('nama_jurusan'),
			'created_at'	=> $this->request->getPost('created_at'),
			'updated_at'	=> $this->request->getPost('updated_at')
		];
		$this->JurusanModel->insert($data);
		return redirect()->to('jurusan');
	}
	public function edit($id)
	{
		return view('jurusan/edit', [
			'jurusan'    => $this->JurusanModel->where(['id' => $id])->first(),
		]);
	}

	public function update($id)
	{

		$data = [
			'nama_jurusan' => $this->request->getPost('nama_jurusan')
		];
		$this->JurusanModel->update(['id' => $id], $data);
		return redirect()->to(base_url('jurusan'));
	}

	public function destroy($id)
	{
		$this->JurusanModel->where(['id' => $id])->delete();
		return redirect()->to(base_url('jurusan'));
	}
}
