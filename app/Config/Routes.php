<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Admin');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
// $routes->set404Override(function () {
// 	echo view('errors/html/error_exception');
// });
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */


$routes->get('/migrate', 'CommandController::index', ['filter' => 'role:admin']);
$routes->get('/rollback', 'CommandController::rollback', ['filter' => 'role:admin']);

$routes->get('/', 'Admin::index', ['filter' => 'role:admin']);
$routes->group('admin', ['filter' => 'role:admin'], function ($routes) {
	$routes->get('', 'Admin::index');
});
// MENU MANAGEMENT
$routes->group('menu-management', ['namespace' => '\App\Controllers\Menu'], function ($routes) {
	$routes->get('new', 'Menu::new');
	$routes->post('', 'Menu::create');
	$routes->get('', 'Menu::index');
	$routes->get('(:segment)/edit', 'Menu::edit/$1');
	$routes->put('(:segment)', 'Menu::update/$1');
	$routes->delete('(:segment)', 'Menu::delete/$1');
	// Submenu
	$routes->get('submenu-management', 'Submenu::index');
	$routes->get('submenu-management/new', 'Submenu::new');
	$routes->post('submenu-management', 'Submenu::create');
	$routes->get('submenu-management/(:num)/edit', 'Submenu::edit/$1');
	$routes->put('submenu-management/(:num)', 'Submenu::update/$1');
	$routes->delete('submenu-management/(:num)', 'Submenu::delete/$1');
});

// PROFIL WIlAYAH
$routes->group('profil-wilayah', ['namespace' => '\App\Controllers\ProfilWilayah', 'filter' => 'role:supervisor,admin'], function ($routes) {
	$routes->get('', 'DataWilayah::index', ['as' => 'profil_wilayah_data_wilayah']);
	$routes->get('new', 'DataWilayah::new', ['as' => 'profil_wilayah_data_wilayah_new']);
	$routes->post('', 'DataWilayah::create', ['as' => 'profil_wilayah_data_wilayah_create']);
	$routes->get('(:num)/edit', 'DataWilayah::edit/$1', ['as' => 'profil_wilayah_data_wilayah_edit']);
	$routes->put('(:num)', 'DataWilayah::update/$1', ['as' => 'profil_wilayah_data_wilayah_update']);
	$routes->delete('(:num)', 'DataWilayah::delete/$1', ['as' => 'profil_wilayah_data_wilayah_delete']);
	// Data Desa
	$routes->get('data-desa', 'DataDesa::index', ['as' => 'profil_wilayah_data_desa']);
	$routes->get('data-desa/new', 'DataDesa::new', ['as' => 'profil_wilayah_data_desa_new']);
	$routes->get('data-desa/(:num)', 'DataDesa::show/$1', ['as' => 'profil_wilayah_data_desa_show']);
	$routes->post('data-desa', 'DataDesa::create', ['as' => 'profil_wilayah_data_desa_create']);
	$routes->get('data-desa/(:num)/edit', 'DataDesa::edit/$1', ['as' => 'profil_wilayah_data_desa_edit']);
	$routes->put('data-desa/(:num)', 'DataDesa::update/$1', ['as' => 'profil_wilayah_data_desa_update']);
	$routes->delete('data-desa/(:num)', 'DataDesa::delete/$1', ['as' => 'profil_wilayah_data_desa_delete']);
	$routes->get('data-desa/new-penduduk/(:num)', 'DataDesa::new_penduduk/$1', ['as' => 'profil_wilayah_data_desa_new_penduduk']);
	// Data Perangkat
	$routes->get('data-perangkat', 'DataPerangkat::index', ['as' => 'profil_wilayah_data_perangkat']);
	$routes->get('data-perangkat/new', 'DataPerangkat::new', ['as' => 'profil_wilayah_data_perangkat_new']);
	$routes->get('data-perangkat/(:num)', 'DataPerangkat::show/$1', ['as' => 'profil_wilayah_data_perangkat_show']);
	$routes->post('data-perangkat', 'DataPerangkat::create', ['as' => 'profil_wilayah_data_perangkat_create']);
	$routes->get('data-perangkat/(:num)/edit', 'DataPerangkat::edit/$1', ['as' => 'profil_wilayah_data_perangkat_edit']);
	$routes->put('data-perangkat/(:num)', 'DataPerangkat::update/$1', ['as' => 'profil_wilayah_data_perangkat_update']);
	$routes->delete('data-perangkat/(:num)', 'DataPerangkat::delete/$1', ['as' => 'profil_wilayah_data_perangkat_delete']);
	// Data Potensi
	$routes->get('data-potensi', 'DataPotensi::index', ['as' => 'profil_wilayah_data_potensi']);
	$routes->get('data-potensi/new', 'DataPotensi::new', ['as' => 'profil_wilayah_data_potensi_new']);
	$routes->get('data-potensi/(:num)', 'DataPotensi::show/$1', ['as' => 'profil_wilayah_data_potensi_show']);
	$routes->post('data-potensi', 'DataPotensi::create', ['as' => 'profil_wilayah_data_potensi_create']);
	$routes->get('data-potensi/(:num)/edit', 'DataPotensi::edit/$1', ['as' => 'profil_wilayah_data_potensi_edit']);
	$routes->put('data-potensi/(:num)', 'DataPotensi::update/$1', ['as' => 'profil_wilayah_data_potensi_update']);
	$routes->delete('data-potensi/(:num)', 'DataPotensi::delete/$1', ['as' => 'profil_wilayah_data_potensi_delete']);
});

// KEPENDUDUKAN
$routes->group('kependudukan', ['namespace' => '\App\Controllers\Kependudukan', 'filter' => 'role:supervisor,admin'], function ($routes) {
	$routes->get('', 'Kependudukan::index', ['as' => 'kependudukan']);
	$routes->put('(:num)', 'Kependudukan::update/$1', ['as' => 'kependudukan_update']);
	$routes->get('new', 'Kependudukan::new', ['as' => 'kependudukan_new']);
	$routes->post('', 'Kependudukan::create', ['as' => 'kependudukan_create']);
	$routes->get('(:num)/edit', 'Kependudukan::edit/$1', ['as' => 'kependudukan_edit']);
	$routes->delete('(:num)', 'Kependudukan::delete/$1', ['as' => 'kependudukan_delete']);
	// Keluarga
	$routes->get('keluarga', 'Keluarga::index', ['as' => 'keluarga']);
	$routes->get('keluarga/new', 'Keluarga::new', ['as' => 'keluarga_new']);
	$routes->get('keluarga/(:num)', 'Keluarga::show/$1', ['as' => 'keluarga_show']);
	$routes->post('keluarga', 'Keluarga::create', ['as' => 'keluarga_create']);
	$routes->get('keluarga/(:num)/edit', 'Keluarga::edit/$1', ['as' => 'keluarga_edit']);
	$routes->put('keluarga/(:num)', 'Keluarga::update/$1', ['as' => 'keluarga_update']);
	$routes->delete('keluarga/(:num)', 'Keluarga::delete/$1', ['as' => 'keluarga_delete']);
	$routes->get('keluarga/new-penduduk/(:num)', 'Keluarga::new_penduduk/$1', ['as' => 'keluarga_new_penduduk']);
	// Data Peristiwa
	$routes->get('data-peristiwa', 'DataPeristiwa::index', ['as' => 'kependudukan_data_peristiwa']);
	$routes->get('data-peristiwa/new', 'DataPeristiwa::new', ['as' => 'kependudukan_data_peristiwa_new']);
	$routes->get('data-peristiwa/(:num)', 'DataPeristiwa::show/$1', ['as' => 'kependudukan_data_peristiwa_show']);
	$routes->post('data-peristiwa', 'DataPeristiwa::create', ['as' => 'kependudukan_data_peristiwa_create']);
	$routes->get('data-peristiwa/(:num)/edit', 'DataPeristiwa::edit/$1', ['as' => 'kependudukan_data_peristiwa_edit']);
	$routes->put('data-peristiwa/(:num)', 'DataPeristiwa::update/$1', ['as' => 'kependudukan_data_peristiwa_update']);
	$routes->delete('data-peristiwa/(:num)', 'DataPeristiwa::delete/$1', ['as' => 'kependudukan_data_peristiwa_delete']);
	// Dokumen Kependudukan
	$routes->get('dokumen-kependudukan', 'DokumenKependudukan::index', ['as' => 'kependudukan_dokumen_kependudukan']);
	$routes->get('dokumen-kependudukan/new', 'DokumenKependudukan::new', ['as' => 'kependudukan_dokumen_kependudukan_new']);
	$routes->get('dokumen-kependudukan/(:num)', 'DokumenKependudukan::show/$1', ['as' => 'kependudukan_dokumen_kependudukan_show']);
	$routes->post('dokumen-kependudukan', 'DokumenKependudukan::create', ['as' => 'kependudukan_dokumen_kependudukan_create']);
	$routes->get('dokumen-kependudukan/(:num)/edit', 'DokumenKependudukan::edit/$1', ['as' => 'kependudukan_dokumen_kependudukan_edit']);
	$routes->put('dokumen-kependudukan/(:num)', 'DokumenKependudukan::update/$1', ['as' => 'kependudukan_dokumen_kependudukan_update']);
	$routes->delete('dokumen-kependudukan/(:num)', 'DokumenKependudukan::delete/$1', ['as' => 'kependudukan_dokumen_kependudukan_delete']);
});

// VALIDASI
$routes->group('validasi', ['namespace' => '\App\Controllers\Validasi', 'filter' => 'role:supervisor,admin'], function ($routes) {
	$routes->get('', 'DataKependudukan::index', ['as' => 'validasi_data_kependudukan']);
	$routes->get('new', 'DataKependudukan::new', ['as' => 'validasi_data_kependudukan_new']);
	$routes->post('', 'DataKependudukan::create', ['as' => 'validasi_data_kependudukan_create']);
	$routes->get('(:num)/edit', 'DataKependudukan::edit/$1', ['as' => 'validasi_data_kependudukan_edit']);
	$routes->put('(:num)', 'DataKependudukan::update/$1', ['as' => 'validasi_data_kependudukan_update']);
	$routes->delete('(:num)', 'DataKependudukan::delete/$1', ['as' => 'validasi_data_kependudukan_delete']);
	// Pendidikan
	$routes->get('pendidikan', 'Pendidikan::index', ['as' => 'validasi_pendidikan']);
	$routes->get('pendidikan/new', 'Pendidikan::new', ['as' => 'validasi_pendidikan_new']);
	$routes->get('pendidikan/(:num)', 'Pendidikan::show/$1', ['as' => 'validasi_pendidikan_show']);
	$routes->post('pendidikan', 'Pendidikan::create', ['as' => 'validasi_pendidikan_create']);
	$routes->get('pendidikan/(:num)/edit', 'Pendidikan::edit/$1', ['as' => 'validasi_pendidikan_edit']);
	$routes->put('pendidikan/(:num)', 'Pendidikan::update/$1', ['as' => 'validasi_pendidikan_update']);
	$routes->delete('pendidikan/(:num)', 'Pendidikan::delete/$1', ['as' => 'validasi_pendidikan_delete']);
	// Kartu Keluarga
	$routes->get('kartu-keluarga', 'KartuKeluarga::index', ['as' => 'validasi_kartu_keluarga']);
	$routes->get('kartu-keluarga/new', 'KartuKeluarga::new', ['as' => 'validasi_kartu_keluarga_new']);
	$routes->get('kartu-keluarga/(:num)', 'KartuKeluarga::show/$1', ['as' => 'validasi_kartu_keluarga_show']);
	$routes->post('kartu-keluarga', 'KartuKeluarga::create', ['as' => 'validasi_kartu_keluarga_create']);
	$routes->get('kartu-keluarga/(:num)/edit', 'KartuKeluarga::edit/$1', ['as' => 'validasi_kartu_keluarga_edit']);
	$routes->put('kartu-keluarga/(:num)', 'KartuKeluarga::update/$1', ['as' => 'validasi_kartu_keluarga_update']);
	$routes->delete('kartu-keluarga/(:num)', 'KartuKeluarga::delete/$1', ['as' => 'validasi_kartu_keluarga_delete']);
	// DPT
	$routes->get('dpt', 'Dpt::index', ['as' => 'validasi_dpt']);
	$routes->get('dpt/new', 'Dpt::new', ['as' => 'validasi_dpt_new']);
	$routes->get('dpt/(:num)', 'Dpt::show/$1', ['as' => 'validasi_dpt_show']);
	$routes->post('dpt', 'Dpt::create', ['as' => 'validasi_dpt_create']);
	$routes->get('dpt/(:num)/edit', 'Dpt::edit/$1', ['as' => 'validasi_dpt_edit']);
	$routes->put('dpt/(:num)', 'Dpt::update/$1', ['as' => 'validasi_dpt_update']);
	$routes->delete('dpt/(:num)', 'Dpt::delete/$1', ['as' => 'validasi_dpt_delete']);
	// Usia
	$routes->get('usia', 'Usia::index', ['as' => 'validasi_usia']);
	$routes->get('usia/new', 'Usia::new', ['as' => 'validasi_usia_new']);
	$routes->get('usia/(:num)', 'Usia::show/$1', ['as' => 'validasi_usia_show']);
	$routes->post('usia', 'Usia::create', ['as' => 'validasi_usia_create']);
	$routes->get('usia/(:num)/edit', 'Usia::edit/$1', ['as' => 'validasi_usia_edit']);
	$routes->put('usia/(:num)', 'Usia::update/$1', ['as' => 'validasi_usia_update']);
	$routes->delete('usia/(:num)', 'Usia::delete/$1', ['as' => 'validasi_usia_delete']);
	// Pembaruan Data
	$routes->get('pembaruan-data', 'PembaruanData::index', ['as' => 'validasi_pembaruan_data']);
	$routes->get('pembaruan-data/new', 'PembaruanData::new', ['as' => 'validasi_pembaruan_data_new']);
	$routes->get('pembaruan-data/(:num)', 'PembaruanData::show/$1', ['as' => 'validasi_pembaruan_data_show']);
	$routes->post('pembaruan-data', 'PembaruanData::create', ['as' => 'validasi_pembaruan_data_create']);
	$routes->get('pembaruan-data/(:num)/edit', 'PembaruanData::edit/$1', ['as' => 'validasi_pembaruan_data_edit']);
	$routes->put('pembaruan-data/(:num)', 'PembaruanData::update/$1', ['as' => 'validasi_pembaruan_data_update']);
	$routes->delete('pembaruan-data/(:num)', 'PembaruanData::delete/$1', ['as' => 'validasi_pembaruan_data_delete']);
});

// DATA TERPADU
$routes->group('data-terpadu', ['namespace' => '\App\Controllers\DataTerpadu', 'filter' => 'role:supervisor,admin'], function ($routes) {
	$routes->get('', 'KelompokRentan::index', ['as' => 'data_terpadu_kelompok_rentan']);
	$routes->get('new', 'KelompokRentan::new', ['as' => 'data_terpadu_kelompok_rentan_new']);
	$routes->post('', 'KelompokRentan::create', ['as' => 'data_terpadu_kelompok_rentan_create']);
	$routes->get('(:num)/edit', 'KelompokRentan::edit/$1', ['as' => 'data_terpadu_kelompok_rentan_edit']);
	$routes->put('(:num)', 'KelompokRentan::update/$1', ['as' => 'data_terpadu_kelompok_rentan_update']);
	$routes->delete('(:num)', 'KelompokRentan::delete/$1', ['as' => 'data_terpadu_kelompok_rentan_delete']);
	// DTKS
	$routes->get('dtks', 'Dtks::index', ['as' => 'data_terpadu_dtks']);
	$routes->get('dtks/new', 'Dtks::new', ['as' => 'data_terpadu_dtks_new']);
	$routes->get('dtks/(:num)', 'Dtks::show/$1', ['as' => 'data_terpadu_dtks_show']);
	$routes->post('dtks', 'Dtks::create', ['as' => 'data_terpadu_dtks_create']);
	$routes->get('dtks/(:num)/edit', 'Dtks::edit/$1', ['as' => 'data_terpadu_dtks_edit']);
	$routes->put('dtks/(:num)', 'Dtks::update/$1', ['as' => 'data_terpadu_dtks_update']);
	$routes->delete('dtks/(:num)', 'Dtks::delete/$1', ['as' => 'data_terpadu_dtks_delete']);
	// Tuna Karya
	$routes->get('tuna-karya', 'TunaKarya::index', ['as' => 'data_terpadu_tuna_karya']);
	$routes->get('tuna-karya/new', 'TunaKarya::new', ['as' => 'data_terpadu_tuna_karya_new']);
	$routes->get('tuna-karya/(:num)', 'TunaKarya::show/$1', ['as' => 'data_terpadu_tuna_karya_show']);
	$routes->post('tuna-karya', 'TunaKarya::create', ['as' => 'data_terpadu_tuna_karya_create']);
	$routes->get('tuna-karya/(:num)/edit', 'TunaKarya::edit/$1', ['as' => 'data_terpadu_tuna_karya_edit']);
	$routes->put('tuna-karya/(:num)', 'TunaKarya::update/$1', ['as' => 'data_terpadu_tuna_karya_update']);
	$routes->delete('tuna-karya/(:num)', 'TunaKarya::delete/$1', ['as' => 'data_terpadu_tuna_karya_delete']);
	// Difabilitas
	$routes->get('difabilitas', 'Difabilitas::index', ['as' => 'data_terpadu_difabilitas']);
	$routes->get('difabilitas/new', 'Difabilitas::new', ['as' => 'data_terpadu_difabilitas_new']);
	$routes->get('difabilitas/(:num)', 'Difabilitas::show/$1', ['as' => 'data_terpadu_difabilitas_show']);
	$routes->post('difabilitas', 'Difabilitas::create', ['as' => 'data_terpadu_difabilitas_create']);
	$routes->get('difabilitas/(:num)/edit', 'Difabilitas::edit/$1', ['as' => 'data_terpadu_difabilitas_edit']);
	$routes->put('difabilitas/(:num)', 'Difabilitas::update/$1', ['as' => 'data_terpadu_difabilitas_update']);
	$routes->delete('difabilitas/(:num)', 'Difabilitas::delete/$1', ['as' => 'data_terpadu_difabilitas_delete']);
	// Ibu Hamil
	$routes->get('ibu-hamil', 'IbuHamil::index', ['as' => 'data_terpadu_ibu_hamil']);
	$routes->get('ibu-hamil/new', 'IbuHamil::new', ['as' => 'data_terpadu_ibu_hamil_new']);
	$routes->get('ibu-hamil/(:num)', 'IbuHamil::show/$1', ['as' => 'data_terpadu_ibu_hamil_show']);
	$routes->post('ibu-hamil', 'IbuHamil::create', ['as' => 'data_terpadu_ibu_hamil_create']);
	$routes->get('ibu-hamil/(:num)/edit', 'IbuHamil::edit/$1', ['as' => 'data_terpadu_ibu_hamil_edit']);
	$routes->put('ibu-hamil/(:num)', 'IbuHamil::update/$1', ['as' => 'data_terpadu_ibu_hamil_update']);
	$routes->delete('ibu-hamil/(:num)', 'IbuHamil::delete/$1', ['as' => 'data_terpadu_ibu_hamil_delete']);
	// Putus Sekolah
	$routes->get('putus-sekolah', 'PutusSekolah::index', ['as' => 'data_terpadu_putus_sekolah']);
	$routes->get('putus-sekolah/new', 'PutusSekolah::new', ['as' => 'data_terpadu_putus_sekolah_new']);
	$routes->get('putus-sekolah/(:num)', 'PutusSekolah::show/$1', ['as' => 'data_terpadu_putus_sekolah_show']);
	$routes->post('putus-sekolah', 'PutusSekolah::create', ['as' => 'data_terpadu_putus_sekolah_create']);
	$routes->get('putus-sekolah/(:num)/edit', 'PutusSekolah::edit/$1', ['as' => 'data_terpadu_putus_sekolah_edit']);
	$routes->put('putus-sekolah/(:num)', 'PutusSekolah::update/$1', ['as' => 'data_terpadu_putus_sekolah_update']);
	$routes->delete('putus-sekolah/(:num)', 'PutusSekolah::delete/$1', ['as' => 'data_terpadu_putus_sekolah_delete']);
	// Buta Huruf
	$routes->get('buta-huruf', 'ButaHuruf::index', ['as' => 'data_terpadu_buta_huruf']);
	$routes->get('buta-huruf/new', 'ButaHuruf::new', ['as' => 'data_terpadu_buta_huruf_new']);
	$routes->get('buta-huruf/(:num)', 'ButaHuruf::show/$1', ['as' => 'data_terpadu_buta_huruf_show']);
	$routes->post('buta-huruf', 'ButaHuruf::create', ['as' => 'data_terpadu_buta_huruf_create']);
	$routes->get('buta-huruf/(:num)/edit', 'ButaHuruf::edit/$1', ['as' => 'data_terpadu_buta_huruf_edit']);
	$routes->put('buta-huruf/(:num)', 'ButaHuruf::update/$1', ['as' => 'data_terpadu_buta_huruf_update']);
	$routes->delete('buta-huruf/(:num)', 'ButaHuruf::delete/$1', ['as' => 'data_terpadu_buta_huruf_delete']);
	// Bantuan Sosial
	$routes->get('bantuan-sosial', 'BantuanSosial::index', ['as' => 'data_terpadu_bantuan_sosial']);
	$routes->get('bantuan-sosial/new', 'BantuanSosial::new', ['as' => 'data_terpadu_bantuan_sosial_new']);
	$routes->get('bantuan-sosial/(:num)', 'BantuanSosial::show/$1', ['as' => 'data_terpadu_bantuan_sosial_show']);
	$routes->post('bantuan-sosial', 'BantuanSosial::create', ['as' => 'data_terpadu_bantuan_sosial_create']);
	$routes->get('bantuan-sosial/(:num)/edit', 'BantuanSosial::edit/$1', ['as' => 'data_terpadu_bantuan_sosial_edit']);
	$routes->put('bantuan-sosial/(:num)', 'BantuanSosial::update/$1', ['as' => 'data_terpadu_bantuan_sosial_update']);
	$routes->delete('bantuan-sosial/(:num)', 'BantuanSosial::delete/$1', ['as' => 'data_terpadu_bantuan_sosial_delete']);
});

// Administrasi
$routes->group('administrasi', ['namespace' => '\App\Controllers\Administrasi', 'filter' => 'role:supervisor,admin'], function ($routes) {
	$routes->get('', 'LayananAdministrasi::index', ['as' => 'administrasi_layanan_administrasi']);
	$routes->get('new', 'LayananAdministrasi::new', ['as' => 'administrasi_layanan_administrasi_new']);
	$routes->post('', 'LayananAdministrasi::create', ['as' => 'administrasi_layanan_administrasi_create']);
	$routes->get('(:num)/edit', 'LayananAdministrasi::edit/$1', ['as' => 'administrasi_layanan_administrasi_edit']);
	$routes->put('(:num)', 'LayananAdministrasi::update/$1', ['as' => 'administrasi_layanan_administrasi_update']);
	$routes->delete('(:num)', 'LayananAdministrasi::delete/$1', ['as' => 'administrasi_layanan_administrasi_delete']);
	// Inventaris
	$routes->get('inventaris', 'Inventaris::index', ['as' => 'administrasi_inventaris']);
	$routes->get('inventaris/new', 'Inventaris::new', ['as' => 'administrasi_inventaris_new']);
	$routes->get('inventaris/(:num)', 'Inventaris::show/$1', ['as' => 'administrasi_inventaris_show']);
	$routes->post('inventaris', 'Inventaris::create', ['as' => 'administrasi_inventaris_create']);
	$routes->get('inventaris/(:num)/edit', 'Inventaris::edit/$1', ['as' => 'administrasi_inventaris_edit']);
	$routes->put('inventaris/(:num)', 'Inventaris::update/$1', ['as' => 'administrasi_inventaris_update']);
	$routes->delete('inventaris/(:num)', 'Inventaris::delete/$1', ['as' => 'administrasi_inventaris_delete']);
	// Aspirasi
	$routes->get('aspirasi', 'Aspirasi::index', ['as' => 'administrasi_aspirasi']);
	$routes->get('aspirasi/new', 'Aspirasi::new', ['as' => 'administrasi_aspirasi_new']);
	$routes->get('aspirasi/(:num)', 'Aspirasi::show/$1', ['as' => 'administrasi_aspirasi_show']);
	$routes->post('aspirasi', 'Aspirasi::create', ['as' => 'administrasi_aspirasi_create']);
	$routes->get('aspirasi/(:num)/edit', 'Aspirasi::edit/$1', ['as' => 'administrasi_aspirasi_edit']);
	$routes->put('aspirasi/(:num)', 'Aspirasi::update/$1', ['as' => 'administrasi_aspirasi_update']);
	$routes->delete('aspirasi/(:num)', 'Aspirasi::delete/$1', ['as' => 'administrasi_aspirasi_delete']);

	// LAYANAN SURAT ELEKTRONIK
	$routes->group('surat-elektronik', ['namespace' => '\App\Controllers\Administrasi\SuratMenyurat', 'filter' => 'role:supervisor,admin'], function ($routes) {
		$routes->get('surat-meninggal', 'SuratMeninggal::index', ['as' => 'surat_elektronik_surat_meninggal']);
		$routes->get('surat-meninggal/new', 'SuratMeninggal::new', ['as' => 'surat_elektronik_surat_meninggal_new']);
		$routes->get('surat-meninggal/(:num)', 'SuratMeninggal::show/$1', ['as' => 'surat_elektronik_surat_meninggal_show']);
		$routes->post('surat-meninggal', 'SuratMeninggal::create', ['as' => 'surat_elektronik_surat_meninggal_create']);
		$routes->get('surat-meninggal/(:num)/edit', 'SuratMeninggal::edit/$1', ['as' => 'surat_elektronik_surat_meninggal_edit']);
		$routes->put('surat-meninggal/(:num)', 'SuratMeninggal::update/$1', ['as' => 'surat_elektronik_surat_meninggal_update']);
		$routes->delete('surat-meninggal/(:num)', 'SuratMeninggal::delete/$1', ['as' => 'surat_elektronik_surat_meninggal_delete']);
		// Tidak Mampu
		$routes->get('surat-tidak-mampu', 'SuratTidakMampu::index', ['as' => 'surat_elektronik_surat_tidak_mampu']);
		$routes->get('surat-tidak-mampu/new', 'SuratTidakMampu::new', ['as' => 'surat_elektronik_surat_tidak_mampu_new']);
		$routes->get('surat-tidak-mampu/(:num)', 'SuratTidakMampu::show/$1', ['as' => 'surat_elektronik_surat_tidak_mampu_show']);
		$routes->post('surat-tidak-mampu', 'SuratTidakMampu::create', ['as' => 'surat_elektronik_surat_tidak_mampu_create']);
		$routes->get('surat-tidak-mampu/(:num)/edit', 'SuratTidakMampu::edit/$1', ['as' => 'surat_elektronik_surat_tidak_mampu_edit']);
		$routes->put('surat-tidak-mampu/(:num)', 'SuratTidakMampu::update/$1', ['as' => 'surat_elektronik_surat_tidak_mampu_update']);
		$routes->delete('surat-tidak-mampu/(:num)', 'SuratTidakMampu::delete/$1', ['as' => 'surat_elektronik_surat_tidak_mampu_delete']);
		// Ahli Waris
		$routes->get('surat-ahli-waris', 'SuratAhliWaris::index', ['as' => 'surat_elektronik_surat_ahli_waris']);
		$routes->get('surat-ahli-waris/new', 'SuratAhliWaris::new', ['as' => 'surat_elektronik_surat_ahli_waris_new']);
		$routes->get('surat-ahli-waris/(:num)', 'SuratAhliWaris::show/$1', ['as' => 'surat_elektronik_surat_ahli_waris_show']);
		$routes->post('surat-ahli-waris', 'SuratAhliWaris::create', ['as' => 'surat_elektronik_surat_ahli_waris_create']);
		$routes->get('surat-ahli-waris/(:num)/edit', 'SuratAhliWaris::edit/$1', ['as' => 'surat_elektronik_surat_ahli_waris_edit']);
		$routes->put('surat-ahli-waris/(:num)', 'SuratAhliWaris::update/$1', ['as' => 'surat_elektronik_surat_ahli_waris_update']);
		$routes->delete('surat-ahli-waris/(:num)', 'SuratAhliWaris::delete/$1', ['as' => 'surat_elektronik_surat_ahli_waris_delete']);
		// Usaha
		$routes->get('surat-usaha', 'SuratUsaha::index', ['as' => 'surat_elektronik_surat_usaha']);
		$routes->get('surat-usaha/new', 'SuratUsaha::new', ['as' => 'surat_elektronik_surat_usaha_new']);
		$routes->get('surat-usaha/(:num)', 'SuratUsaha::show/$1', ['as' => 'surat_elektronik_surat_usaha_show']);
		$routes->post('surat-usaha', 'SuratUsaha::create', ['as' => 'surat_elektronik_surat_usaha_create']);
		$routes->get('surat-usaha/(:num)/edit', 'SuratUsaha::edit/$1', ['as' => 'surat_elektronik_surat_usaha_edit']);
		$routes->put('surat-usaha/(:num)', 'SuratUsaha::update/$1', ['as' => 'surat_elektronik_surat_usaha_update']);
		$routes->delete('surat-usaha/(:num)', 'SuratUsaha::delete/$1', ['as' => 'surat_elektronik_surat_usaha_delete']);
	});
});

// PEMERINTAHAN
$routes->group('pemerintahan', ['namespace' => '\App\Controllers\Pemerintahan', 'filter' => 'role:supervisor,admin'], function ($routes) {
	$routes->get('', 'KasUmum::index', ['as' => 'pemerintahan_kas_umum']);
	$routes->get('new', 'KasUmum::new', ['as' => 'pemerintahan_kas_umum_new']);
	$routes->post('', 'KasUmum::create', ['as' => 'pemerintahan_kas_umum_create']);
	$routes->get('(:num)/edit', 'KasUmum::edit/$1', ['as' => 'pemerintahan_kas_umum_edit']);
	$routes->put('(:num)', 'KasUmum::update/$1', ['as' => 'pemerintahan_kas_umum_update']);
	$routes->delete('(:num)', 'KasUmum::delete/$1', ['as' => 'pemerintahan_kas_umum_delete']);
	// Inventaris Desa/Kelurahan
	$routes->get('inventaris-desa', 'InventarisDesa::index', ['as' => 'pemerintahan_inventaris_desa']);
	$routes->get('inventaris-desa/new', 'InventarisDesa::new', ['as' => 'pemerintahan_inventaris_desa_new']);
	$routes->get('inventaris-desa/(:num)', 'InventarisDesa::show/$1', ['as' => 'pemerintahan_inventaris_desa_show']);
	$routes->post('inventaris-desa', 'InventarisDesa::create', ['as' => 'pemerintahan_inventaris_desa_create']);
	$routes->get('inventaris-desa/(:num)/edit', 'InventarisDesa::edit/$1', ['as' => 'pemerintahan_inventaris_desa_edit']);
	$routes->put('inventaris-desa/(:num)', 'InventarisDesa::update/$1', ['as' => 'pemerintahan_inventaris_desa_update']);
	$routes->delete('inventaris-desa/(:num)', 'InventarisDesa::delete/$1', ['as' => 'pemerintahan_inventaris_desa_delete']);
	// Tanah Warga
	$routes->get('tahan-warga', 'TanahWarga::index', ['as' => 'pemerintahan_tanah_warga']);
	$routes->get('tahan-warga/new', 'TanahWarga::new', ['as' => 'pemerintahan_tanah_warga_new']);
	$routes->get('tahan-warga/(:num)', 'TanahWarga::show/$1', ['as' => 'pemerintahan_tanah_warga_show']);
	$routes->post('tahan-warga', 'TanahWarga::create', ['as' => 'pemerintahan_tanah_warga_create']);
	$routes->get('tahan-warga/(:num)/edit', 'TanahWarga::edit/$1', ['as' => 'pemerintahan_tanah_warga_edit']);
	$routes->put('tahan-warga/(:num)', 'TanahWarga::update/$1', ['as' => 'pemerintahan_tanah_warga_update']);
	$routes->delete('tahan-warga/(:num)', 'TanahWarga::delete/$1', ['as' => 'pemerintahan_tanah_warga_delete']);
});

// DATA APBD DESA
$routes->group('data-apbd', ['namespace' => '\App\Controllers\Administrasi', 'filter' => 'role:supervisor,admin'], function ($routes) {
	$routes->get('', 'Pendatapan::index', ['as' => 'data_apbd_pendapatan']);
	$routes->get('new', 'Pendatapan::new', ['as' => 'data_apbd_pendapatan_new']);
	$routes->post('', 'Pendatapan::create', ['as' => 'data_apbd_pendapatan_create']);
	$routes->get('(:num)/edit', 'Pendatapan::edit/$1', ['as' => 'data_apbd_pendapatan_edit']);
	$routes->put('(:num)', 'Pendatapan::update/$1', ['as' => 'data_apbd_pendapatan_update']);
	$routes->delete('(:num)', 'Pendatapan::delete/$1', ['as' => 'data_apbd_pendapatan_delete']);
	// Data Anggaran Belanja
	$routes->get('belanja', 'Belanja::index', ['as' => 'data_apbd_belanja']);
	$routes->get('belanja/new', 'Belanja::new', ['as' => 'data_apbd_belanja_new']);
	$routes->get('belanja/(:num)', 'Belanja::show/$1', ['as' => 'data_apbd_belanja_show']);
	$routes->post('belanja', 'Belanja::create', ['as' => 'data_apbd_belanja_create']);
	$routes->get('belanja/(:num)/edit', 'Belanja::edit/$1', ['as' => 'data_apbd_belanja_edit']);
	$routes->put('belanja/(:num)', 'Belanja::update/$1', ['as' => 'data_apbd_belanja_update']);
	$routes->delete('belanja/(:num)', 'Belanja::delete/$1', ['as' => 'data_apbd_belanja_delete']);
	// Data Anggaran Pembiayaan
	$routes->get('pembiayaan', 'Pembiayaan::index', ['as' => 'data_apbd_pembiayaan']);
	$routes->get('pembiayaan/new', 'Pembiayaan::new', ['as' => 'data_apbd_pembiayaan_new']);
	$routes->get('pembiayaan/(:num)', 'Pembiayaan::show/$1', ['as' => 'data_apbd_pembiayaan_show']);
	$routes->post('pembiayaan', 'Pembiayaan::create', ['as' => 'data_apbd_pembiayaan_create']);
	$routes->get('pembiayaan/(:num)/edit', 'Pembiayaan::edit/$1', ['as' => 'data_apbd_pembiayaan_edit']);
	$routes->put('pembiayaan/(:num)', 'Pembiayaan::update/$1', ['as' => 'data_apbd_pembiayaan_update']);
	$routes->delete('pembiayaan/(:num)', 'Pembiayaan::delete/$1', ['as' => 'data_apbd_pembiayaan_delete']);

	// LAPORAN REALISASI
	$routes->group('laporan-realisasi', ['namespace' => '\App\Controllers\DataApbd\LaporanRealisasi', 'filter' => 'role:supervisor,admin'], function ($routes) {
		$routes->get('pendapatan', 'Pendapatan::index', ['as' => 'laporan_realisasi_pendapatan']);
		$routes->get('pendapatan/new', 'Pendapatan::new', ['as' => 'laporan_realisasi_pendapatan_new']);
		$routes->get('pendapatan/(:num)', 'Pendapatan::show/$1', ['as' => 'laporan_realisasi_pendapatan_show']);
		$routes->post('pendapatan', 'Pendapatan::create', ['as' => 'laporan_realisasi_pendapatan_create']);
		$routes->get('pendapatan/(:num)/edit', 'Pendapatan::edit/$1', ['as' => 'laporan_realisasi_pendapatan_edit']);
		$routes->put('pendapatan/(:num)', 'Pendapatan::update/$1', ['as' => 'laporan_realisasi_pendapatan_update']);
		$routes->delete('pendapatan/(:num)', 'Pendapatan::delete/$1', ['as' => 'laporan_realisasi_pendapatan_delete']);
		// Belanja
		$routes->get('belanja', 'Belanja::index', ['as' => 'laporan_realisasi_belanja']);
		$routes->get('belanja/new', 'Belanja::new', ['as' => 'laporan_realisasi_belanja_new']);
		$routes->get('belanja/(:num)', 'Belanja::show/$1', ['as' => 'laporan_realisasi_belanja_show']);
		$routes->post('belanja', 'Belanja::create', ['as' => 'laporan_realisasi_belanja_create']);
		$routes->get('belanja/(:num)/edit', 'Belanja::edit/$1', ['as' => 'laporan_realisasi_belanja_edit']);
		$routes->put('belanja/(:num)', 'Belanja::update/$1', ['as' => 'laporan_realisasi_belanja_update']);
		$routes->delete('belanja/(:num)', 'Belanja::delete/$1', ['as' => 'laporan_realisasi_belanja_delete']);
		// Belanja
		$routes->get('pembiayaan', 'Pembiayaan::index', ['as' => 'laporan_realisasi_pembiayaan']);
		$routes->get('pembiayaan/new', 'Pembiayaan::new', ['as' => 'laporan_realisasi_pembiayaan_new']);
		$routes->get('pembiayaan/(:num)', 'Pembiayaan::show/$1', ['as' => 'laporan_realisasi_pembiayaan_show']);
		$routes->post('pembiayaan', 'Pembiayaan::create', ['as' => 'laporan_realisasi_pembiayaan_create']);
		$routes->get('pembiayaan/(:num)/edit', 'Pembiayaan::edit/$1', ['as' => 'laporan_realisasi_pembiayaan_edit']);
		$routes->put('pembiayaan/(:num)', 'Pembiayaan::update/$1', ['as' => 'laporan_realisasi_pembiayaan_update']);
		$routes->delete('pembiayaan/(:num)', 'Pembiayaan::delete/$1', ['as' => 'laporan_realisasi_pembiayaan_delete']);
	});
});

// STATISTIK PINTAR
$routes->group('statistik', ['namespace' => '\App\Controllers\Statistik', 'filter' => 'role:supervisor,admin'], function ($routes) {
	$routes->get('', 'Lahan::index', ['as' => 'statistik_lahan']);
	$routes->get('new', 'Lahan::new', ['as' => 'statistik_lahan_new']);
	$routes->post('', 'Lahan::create', ['as' => 'statistik_lahan_create']);
	$routes->get('(:num)/edit', 'Lahan::edit/$1', ['as' => 'statistik_lahan_edit']);
	$routes->put('(:num)', 'Lahan::update/$1', ['as' => 'statistik_lahan_update']);
	$routes->delete('(:num)', 'Lahan::delete/$1', ['as' => 'statistik_lahan_delete']);
	// kependudukan
	$routes->get('kependudukan', 'Kependudukan::index', ['as' => 'statistik_kependudukan']);
	$routes->get('kependudukan/new', 'Kependudukan::new', ['as' => 'statistik_kependudukan_new']);
	$routes->get('kependudukan/(:num)', 'Kependudukan::show/$1', ['as' => 'statistik_kependudukan_show']);
	$routes->post('kependudukan', 'Kependudukan::create', ['as' => 'statistik_kependudukan_create']);
	$routes->get('kependudukan/(:num)/edit', 'Kependudukan::edit/$1', ['as' => 'statistik_kependudukan_edit']);
	$routes->put('kependudukan/(:num)', 'Kependudukan::update/$1', ['as' => 'statistik_kependudukan_update']);
	$routes->delete('kependudukan/(:num)', 'Kependudukan::delete/$1', ['as' => 'statistik_kependudukan_delete']);
	// Pendidikan
	$routes->get('pendidikan', 'Pendidikan::index', ['as' => 'statistik_pendidikan']);
	$routes->get('pendidikan/new', 'Pendidikan::new', ['as' => 'statistik_pendidikan_new']);
	$routes->get('pendidikan/(:num)', 'Pendidikan::show/$1', ['as' => 'statistik_pendidikan_show']);
	$routes->post('pendidikan', 'Pendidikan::create', ['as' => 'statistik_pendidikan_create']);
	$routes->get('pendidikan/(:num)/edit', 'Pendidikan::edit/$1', ['as' => 'statistik_pendidikan_edit']);
	$routes->put('pendidikan/(:num)', 'Pendidikan::update/$1', ['as' => 'statistik_pendidikan_update']);
	$routes->delete('pendidikan/(:num)', 'Pendidikan::delete/$1', ['as' => 'statistik_pendidikan_delete']);
	// Kesehatan
	$routes->get('kesehatan', 'Kesehatan::index', ['as' => 'statistik_kesehatan']);
	$routes->get('kesehatan/new', 'Kesehatan::new', ['as' => 'statistik_kesehatan_new']);
	$routes->get('kesehatan/(:num)', 'Kesehatan::show/$1', ['as' => 'statistik_kesehatan_show']);
	$routes->post('kesehatan', 'Kesehatan::create', ['as' => 'statistik_kesehatan_create']);
	$routes->get('kesehatan/(:num)/edit', 'Kesehatan::edit/$1', ['as' => 'statistik_kesehatan_edit']);
	$routes->put('kesehatan/(:num)', 'Kesehatan::update/$1', ['as' => 'statistik_kesehatan_update']);
	$routes->delete('kesehatan/(:num)', 'Kesehatan::delete/$1', ['as' => 'statistik_kesehatan_delete']);
	// Administrasi
	$routes->get('administrasi', 'Administrasi::index', ['as' => 'statistik_administrasi']);
	$routes->get('administrasi/new', 'Administrasi::new', ['as' => 'statistik_administrasi_new']);
	$routes->get('administrasi/(:num)', 'Administrasi::show/$1', ['as' => 'statistik_administrasi_show']);
	$routes->post('administrasi', 'Administrasi::create', ['as' => 'statistik_administrasi_create']);
	$routes->get('administrasi/(:num)/edit', 'Administrasi::edit/$1', ['as' => 'statistik_administrasi_edit']);
	$routes->put('administrasi/(:num)', 'Administrasi::update/$1', ['as' => 'statistik_administrasi_update']);
	$routes->delete('administrasi/(:num)', 'Administrasi::delete/$1', ['as' => 'statistik_administrasi_delete']);
	// Sarana dan Prasarana
	$routes->get('sarana-prasarana', 'SaranaPrasarana::index', ['as' => 'statistik_sarana_prasarana']);
	$routes->get('sarana-prasarana/new', 'SaranaPrasarana::new', ['as' => 'statistik_sarana_prasarana_new']);
	$routes->get('sarana-prasarana/(:num)', 'SaranaPrasarana::show/$1', ['as' => 'statistik_sarana_prasarana_show']);
	$routes->post('sarana-prasarana', 'SaranaPrasarana::create', ['as' => 'statistik_sarana_prasarana_create']);
	$routes->get('sarana-prasarana/(:num)/edit', 'SaranaPrasarana::edit/$1', ['as' => 'statistik_sarana_prasarana_edit']);
	$routes->put('sarana-prasarana/(:num)', 'SaranaPrasarana::update/$1', ['as' => 'statistik_sarana_prasarana_update']);
	$routes->delete('sarana-prasarana/(:num)', 'SaranaPrasarana::delete/$1', ['as' => 'statistik_sarana_prasarana_delete']);
	// APBD DESA
	$routes->get('apbd_desa', 'ApbdDesa::index', ['as' => 'statistik_apbd_desa']);
	$routes->get('apbd_desa/new', 'ApbdDesa::new', ['as' => 'statistik_apbd_desa_new']);
	$routes->get('apbd_desa/(:num)', 'ApbdDesa::show/$1', ['as' => 'statistik_apbd_desa_show']);
	$routes->post('apbd_desa', 'ApbdDesa::create', ['as' => 'statistik_apbd_desa_create']);
	$routes->get('apbd_desa/(:num)/edit', 'ApbdDesa::edit/$1', ['as' => 'statistik_apbd_desa_edit']);
	$routes->put('apbd_desa/(:num)', 'ApbdDesa::update/$1', ['as' => 'statistik_apbd_desa_update']);
	$routes->delete('apbd_desa/(:num)', 'ApbdDesa::delete/$1', ['as' => 'statistik_apbd_desa_delete']);
});
// ADMIN WEB
$routes->group('admin-web', ['namespace' => '\App\Controllers\AdminWeb', 'filter' => 'role:admin'], function ($routes) {
	$routes->get('', 'Artikel::index', ['as' => 'artikel']);
	$routes->get('new', 'Artikel::new', ['as' => 'artikel_new']);
	$routes->post('', 'Artikel::create', ['as' => 'artikel_create']);
	$routes->get('(:num)/edit', 'Artikel::edit/$1', ['as' => 'artikel_edit']);
	$routes->put('(:num)', 'Artikel::update/$1', ['as' => 'artikel_update']);
	$routes->delete('(:num)', 'Artikel::delete/$1', ['as' => 'artikel_delete']);
	// Menu Bar
	$routes->get('menu-bar', 'MenuBar::index', ['as' => 'admin_web_menu_bar']);
	$routes->get('menu-bar/new', 'MenuBar::new', ['as' => 'admin_web_menu_bar_new']);
	$routes->post('menu-bar/', 'MenuBar::create', ['as' => 'admin_web_menu_bar_create']);
	$routes->get('menu-bar/(:num)/edit', 'MenuBar::edit/$1', ['as' => 'admin_web_menu_bar_edit']);
	$routes->put('menu-bar/(:num)', 'MenuBar::update/$1', ['as' => 'admin_web_menu_bar_update']);
	$routes->delete('menu-bar/(:num)', 'MenuBar::delete/$1', ['as' => 'admin_web_menu_bar_delete']);
});



$routes->group('manage', ['filter' => 'role:admin'], function ($routes) {
	$routes->get('', 'Manage::index');
	$routes->get('newrecord/(:any)', 'Manage::newrecord/$1');
	$routes->delete('(:num)', 'Manage::delete/$1');
});

// ROLE MANAGEMENT
$routes->group('role-management', ['namespace' => '\App\Controllers\Role'], function ($routes) {
	$routes->get('', 'Role::index');
	$routes->get('role', 'Role::index');
});


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
