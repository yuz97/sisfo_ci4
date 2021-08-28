<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\{SiswaModel, GuruModel, JurusanModel};

class Dashboard extends BaseController
{

	public function __construct()
	{
		$this->SiswaModel   = new SiswaModel();
		$this->GuruModel 	= new GuruModel();
		$this->JurusanModel = new JurusanModel();
	}

	public function index()
	{

		return view('dashboard', [
			'siswa'   => $this->SiswaModel->countAll(),
			'guru' 	  => $this->GuruModel->countAll(),
			'jurusan' => $this->JurusanModel->countAll()
		]);
	}
}
