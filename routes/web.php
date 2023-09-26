<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\App;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Finance;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\SettingController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::middleware(['admin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('admin/dashboard', "dashboard");
        Route::get("dataUser", "dataUser");
        Route::post("addUser", "addUser");
        Route::get('/grafikTransaksi', "grafikTransaksi");
        Route::post('/laporanTransaksi', "laporanTransaksi");
        Route::post('/laporanSimpanan', "laporanSimpanan");
        Route::get('/laporanTabungan', "laporanTabungan");
        Route::post('/laporanEntri', "laporanEntri");
        Route::get('/cetakPinjaman', "cetakPinjaman");
        Route::get('/userOnline', "userOnline");
        Route::get('terima-peminjaman', "terimaPeminjaman");
        Route::get('update-status-pengajuan/{id}', "updateStatusPengajuan");
        Route::get("pinjaman-pendis", "pinjaman_pendis");
        Route::get("pinjaman-bimnas", "pinjaman_bimnas");
        Route::get("pinjaman-sementara", "pinjaman_sementara");
        Route::get("pinjaman-langsung", "pinjaman_langsung");
        Route::post("tambahSementara", "tambahSementara");
        Route::post("tambahPendis", "tambahPendis");
        Route::post("tambahBimnas", "tambahBimnas");
        Route::post("tambahLangsung", "tambahLangsung");
    });
    Route::controller(App::class)->group(function () {
        Route::get('privacy-policy', "privacyPolicy");
        Route::get('/jenis-pinjaman',  "jenispinjaman");
        Route::post('/simpan-jenispinjaman',  "sim_jenispinjaman");
        Route::post('/edit-jenispinjaman',  "ed_jenispinjaman");
        Route::get('/hapus-jenispinjaman/{id}',  "hap_jenispinjaman");
        Route::get('/jenis-simpanan',  "jenissimpanan");
        Route::post('/simpan-jenissimpanan',  "sim_jenissimpanan");
        Route::post('/edit-jenissimpanan',  "ed_jenissimpanan");
        Route::get('/hapus-jenissimpanan/{id}',  "hap_jenissimpanan");
        Route::get('/anggota',  "anggota");
        Route::post('/simpan-anggota',  "sim_anggota");
        Route::post('/edit-anggota',  "ed_anggota");
        Route::get('/hapus-anggota/{id}',  "hap_anggota");
        Route::get('/informasi',  "informasi");
        Route::post('/edit-informasi',  "edit_informasi");
        Route::post('/tambah-informasi',  "tambah_informasi");
        Route::get('/hapus-informasi/{id}',  "hapus_informasi");
        Route::get("/logout",  "logout");
        Route::get('/panduan',  "panduan");
        Route::get('jenis-bank',  "jenisBank");
        Route::post('tambahBank',  "tambahBank");
        Route::get('deleteBank/{id}',  "deleteBank");
        Route::get('jenis-transaksi',  "jenisTransaksi");
        Route::post('tambahJenisTransaksi',  "tambahJenisTransaksi");
        Route::get('kategori-transaksi',  "kategoriTransaksi");
        Route::post('tambahKategoriTransaksi',  "tambahKategoriTransaksi");
        Route::get('updateBanner/{id}/{val}',  "updateBanner");
        Route::post("upload-anggota",  "uploadAnggota");
        Route::post("upload-peminjaman",  "uploadPengajuan");
        Route::post("upload-simpanan",  "uploadSimpanan");
    });
    Route::controller(Finance::class)->group(function () {
        Route::get('/getAnggota/{keyword}', "searchAnggota");
        Route::get('/getRiwayat/{id}', "getRiwayat");
        Route::get('/entri', "entri");
        Route::post('/tambahEntri', "tambahEntri");
        Route::post('/tambahDataEntri', "tambahDataEntri");
        Route::get('hapusEntri/{id}', "hapusEntri");
        Route::get('/kreditmotor', "kreditmotor"); //Kredit motor
        Route::post('/tambahkrdmotor', "tambahkrdmotor");
        Route::get('hapusKrdMtr/{id}', "hapusKrdMtr");
        Route::get('/modalpinjaman', "modalpinjaman"); //Modal Pinjaman per anggota
        Route::post('/tambahPinjAnggota', "tambahPinjAnggota");
        Route::get('hapusPinjAnggota/{id}', "hapusPinjAnggota");
        Route::get('/konsinyasiwarkop', "konsinyasiWarkop"); //Konsinyasi Warkop
        Route::post('/tambahkonsinyasi', "tambahKonsinyasi");
        Route::get('hapuskonsinyasi/{id}', "hapuskonsinyasi");
        Route::get('/warkop', "warkop"); //Laporan Warkop
        Route::post('/tambahNilaiWarkop', "tambahWarkop");
        Route::get('/sisahasilusaha', "sisahasilusaha"); //SHU
        Route::get('/simpanan-anggota', "simpanananggota");
        Route::get('/simpanan-anggota/laporan', "laporansimpanananggota");
        Route::post('/simpan-simpanananggota', "sim_simpanananggota");
        Route::post('/edit-simpanananggota', "ed_simpanananggota");
        Route::get('/hapus-simpanananggota/{id}', "hap_simpanananggota");
        Route::get('/tabungan-anggota', "tabungananggota");
        Route::post('/simpan-tabungananggota', "sim_tabungananggota");
        Route::post('/edit-tabungananggota', "ed_tabungananggota");
        Route::get('/hapus-tabungananggota/{id}', "hap_tabungananggota");
        Route::get('/pengajuan-anggota', "pengajuan");
        Route::post('/simpan-pengajuan', "sim_pengajuan");
        Route::post('/edit-pengajuan', "ed_pengajuan");
        Route::get('/hapus-pengajuan/{id}', "hap_pengajuan");
        Route::get('/pengambilan-tabungan', "pengambilan");
        Route::post('/simpan-pengambilan', "sim_pengambilan");
        Route::post('/edit-pengambilan', "ed_pengambilan");
        Route::get('/hapus-pengambilan/{id}', "hap_pengambilan");
        Route::get('/konfirmasi-tabungan', "konfirmasi_tabungan");
        Route::get('/konfirmasi/{id}', "konfirmasi");
        Route::get('/transfer', "transfer");
        Route::get('/konfirmasi-pengajuan/{id}', "konfirmasi_pengajuan");
        Route::get('/shu', "shu");
        Route::post('/tambah-shu', "tambah_shu");
        Route::post('/tambah-detailshu', "tambah_detailshu");
        Route::get('/hapus-detailshu/{id}', "hapus_detailshu");
        Route::get('/transaksi-keuangan', "transaksi_keuangan");
        Route::get('/requestTransaksi', "requestTransaksi");
        Route::post('/tambah-transaksi', "tambahTransaksi");
        Route::post("requestTenor", "requestTenor");
        Route::post("addPeminjaman", "addPeminjaman");
        Route::get("update-status/{id}", "updateStatus");
        Route::get('/printKeuangan/{id}', "printKeuangan");
        Route::get('addBankNominal/{id}', "addBankNominal");
        Route::post('tambah-nominal-bank', "tambahNominalBank");
        Route::get('detailPeminjaman/{id}', "detailPeminjaman");
        Route::get("tenor-pinjaman", "tenorPinjaman");
        Route::post("tambah_tenor_pinjaman", "tambahTenorPinjaman");
        Route::get("hapus_tenor_pinjaman/{id}", "hapusTenorPinjaman");
        Route::post("update_tenor_pinjaman", "updateTenorPinjaman");
        Route::get('piutangunitphotocopy', "piutangunitphotocopy");
        Route::post('/tambah-piutangunitphotocopy', "tambahPiutangUnitPhotocopy");
        Route::post('/edit-piutangunitphotocopy', "editPiutangUnitPhotocopy");
        Route::get('/hapus-piutangunitphotocopy/{id}', 'hapusPiutangUnitPhotocopy');
        Route::get('/cetakpiutangunitphotocopy', 'cetakPiutangUnitPhotocopy');
        Route::get('/laporan-keuangan', 'laporanKeuangan');
        Route::post('/tambah-laporankeuangan', 'tambahLaporanKeuangan');
        Route::get('/cetaklaporankeuangan', 'cetakLaporanKeuangan');
        Route::get('/hapus-laporankeuangan/{id}', 'hapusLaporanKeuangan');

    });
    Route::controller(SettingController::class)->group(function () {
        Route::get('/profileSettings', "profileSettings");
    });
    Route::controller(MobileController::class)->group(function () {
        Route::get('/mobileBanner', "mobileBanner");
        Route::post('/tambahBanner', "tambahBanner");
    });
    Route::controller(MenuController::class)->group(function () {
        Route::get("manageMenu", "manageMenu");
        Route::post("addSubmenu", "addSubmenu");
        Route::post("editSubmenu", "editSubmenu");
        Route::post("addMenu", "addMenu");
        Route::get("deleteSubmenu/{id}", "deleteSubmenu");
    });
});
Route::controller(AuthController::class)->group(function () {
    Route::post('postLogin', "postLogin");
});
Route::controller(App::class)->group(function () {
    Route::get('privacy-policy', "privacyPolicy");
});
