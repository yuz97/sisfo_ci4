<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\{ProdiModel, JurusanModel};

class Prodi extends BaseController
{

	public function __construct()
	{
		$this->ProdiModel = new ProdiModel();
		$this->JurusanModel = new JurusanModel();
	}

	public function index()
	{
		return view('prodi/index', [
			'title' => 'Daftar Program Studi',
			'prodi' => $this->ProdiModel->getJurusan()
		]);
	}
	public function create()
	{
		return view('prodi/create', [
			'title' => 'Tambah Program Studi',
			'jurusan' => $this->JurusanModel->findAll()
		]);
	}

	public function store()
	{
		$data = [
			'nama_prodi' => $this->request->getVar('nama_prodi'),
			'kode_prodi' => $this->request->getVar('kode_prodi'),
			'fakultas'   => $this->request->getVar('fakultas')
		];
		$this->ProdiModel->insert($data);
		return redirect()->to(base_url('prodi'));
	}
}
