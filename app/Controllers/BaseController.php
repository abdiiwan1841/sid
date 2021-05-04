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
		// Data Terpadu
		$this->kelompokRentan = new \App\Models\DataTerpadu\KelompokRentan;
		$this->dtks = new \App\Models\DataTerpadu\Dtks;
		$this->tunaKarya = new \App\Models\DataTerpadu\TunaKarya;
		$this->difabilitas = new \App\Models\DataTerpadu\Difabilitas;
		$this->ibuHamil = new \App\Models\DataTerpadu\IbuHamil;
		$this->putusSekolah = new \App\Models\DataTerpadu\PutusSekolah;
		$this->butaHuruf = new \App\Models\DataTerpadu\ButaHuruf;
		$this->bantuanSosial = new \App\Models\DataTerpadu\BantuanSosial;
		// Administrasi
		$this->layananAdministrasi = new \App\Models\Administrasi\LayananAdministrasi;
		$this->inventaris = new \App\Models\Administrasi\Inventaris;
		$this->aspirasi = new \App\Models\Administrasi\Aspirasi;
		$this->suratMeninggal = new \App\Models\Administrasi\SuratMenyurat\SuratMeninggal;
		$this->suratTidakMampu = new \App\Models\Administrasi\SuratMenyurat\SuratTidakMampu;
		$this->suratAhliWaris = new \App\Models\Administrasi\SuratMenyurat\SuratAhliWaris;
		$this->suratUsaha = new \App\Models\Administrasi\SuratMenyurat\SuratUsaha;
		// Pemerintahan
		$this->kasUmum = new \App\Models\Pemerintahan\KasUmum;
		$this->inventarisDesa = new \App\Models\Pemerintahan\InventarisDesa;
		$this->tanahWarga = new \App\Models\Pemerintahan\TanahWarga;
		// Data APBD
		$this->pendapatan = new \App\Models\DataApbd\Pendapatan;
		$this->belanja = new \App\Models\DataApbd\Belanja;
		$this->pembiayaan = new \App\Models\DataApbd\Pembiayaan;
		$this->laporanRealisasiPendapatan = new \App\Models\DataApbd\LaporanRealisasi\Pendapatan;
		$this->laporanRealisasiBelanja = new \App\Models\DataApbd\LaporanRealisasi\Belanja;
		$this->laporanRealisasiPembiayaan = new \App\Models\DataApbd\LaporanRealisasi\Pembiayaan;
		// Statistik Pintar
		$this->statistikLahan = new \App\Models\Statistik\Lahan;
		$this->statistikKependudukan = new \App\Models\Statistik\Kependudukan;
		$this->statistikPendidikan = new \App\Models\Statistik\Pendidikan;
		$this->statistikKesehatan = new \App\Models\Statistik\Kesehatan;
		$this->statistikAdministrasi = new \App\Models\Statistik\Administrasi;
		$this->statistikSaranaPrasarana = new \App\Models\Statistik\SaranaPrasarana;
		$this->statistikApbdDesa = new \App\Models\Statistik\ApbdDesa;
		
	}
}
