<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['auth'];

	/**
	 * Constructor.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.: $this->session = \Config\Services::session();
		session();
		$this->db = \Config\Database::connect();
		$this->validation = \Config\Services::validation();
		$this->user = new \App\Models\User;
		$this->submenu = new \App\Models\Menu\Submenu;
		$this->menu = new \App\Models\Menu\Menu;
		$this->userAccessMenu = new \App\Models\Menu\UserAccessMenu;
		$this->group = new \Myth\Auth\Authorization\GroupModel;
		// Kependudukan Model
		$this->kependudukan = new \App\Models\kependudukan\kependudukan;
		$this->keluarga = new \App\Models\kependudukan\Keluarga;
		$this->dokumenKependudukan = new \App\Models\kependudukan\DokumenKependudukan;
		$this->dataPeristiwa = new \App\Models\kependudukan\DataPeristiwa;
		// Profil Wilayah Model
		$this->dataWilayah = new \App\Models\ProfilWilayah\DataWilayah;
		$this->dataDesa = new \App\Models\ProfilWilayah\DataDesa;
		$this->dataPotensi = new \App\Models\ProfilWilayah\DataPotensi;
		$this->dataPerangkat = new \App\Models\ProfilWilayah\DataPerangkat;
		// Validasi
		$this->dataKependudukan = new \App\Models\Validasi\DataKependudukan;
		$this->pendidikan = new \App\Models\Validasi\Pendidikan;
		$this->usia = new \App\Models\Validasi\Usia;
		$this->dpt = new \App\Models\Validasi\Dpt;
		$this->kartuKeluarga = new \App\Models\Validasi\KartuKeluarga;
		$this->pembaruanData = new \App\Models\Validasi\PembaruanData;
		
	}
}
