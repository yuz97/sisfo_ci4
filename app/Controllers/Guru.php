<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GuruModel;

class Guru extends BaseController
{


	public function __construct()
	{
		$this->GuruModel = new GuruModel();
	}

	public function index()
	{
		return view('guru/index', [
			'title' => 'Daftar Guru',
			'guru'	=> $this->GuruModel->findAll()
		]);
	}

	public function create()
	{
		return view('guru/create', [
			'title' => 'Tambah Data Guru'
		]);
	}
	public function store()
	{
		$data = [
			'nama' 		=> $this->request->getVar('nama'),
			'nip' 		=> $this->request->getVar('nip'),
			'jurusan' 	=> $this->request->getVar('jurusan'),
			'alamat' 	=> $this->request->getVar('alamat')
		];
		$this->GuruModel->insert($data);
		return redirect()->to(base_url('guru'));
	}

	public function edit($id)
	{
		$data = $this->GuruModel->where('id', $id)->first();
		return view('guru/edit', compact('data'));
	}

	public function update($id)
	{
		$data = [
			'nama' 		=> $this->request->getVar('nama'),
			'nip' 		=> $this->request->getVar('nip'),
			'jurusan' 	=> $this->request->getVar('jurusan'),
			'alamat' 	=> $this->request->getVar('alamat')
		];
		$this->GuruModel->update($id, $data);
		return redirect()->to(base_url('guru'));
	}
	public function destroy($id)
	{
		$this->GuruModel->where('id', $id)->delete();
		return redirect()->to(base_url('guru'));
	}
}
