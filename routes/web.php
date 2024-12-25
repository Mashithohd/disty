<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;

Route::get('/login', function () {
    // Otherwise, show the login page.
    return view('login');
});

Route::get('sidebar', function () {
    // Otherwise, show the login page.
    return view('sidebar');
});

//DASHBOARD
Route::get('/dashboard', function () {
    // Otherwise, show the dashboard page.
    return view('dashboard');
});

//PROFIL
Route::get('profil', function () {
    // Otherwise, show the dashboard page.
    return view('profil.profil');
});

//PEMBAYARAN
Route::get('pembayaransiswa', function () {
    return view('pembayaran.pembayaransiswa');
});
Route::get('masukkannis', function () {
    return view('pembayaran.masukkannis');
});


//KEUANGAN
Route::get('setting_pos_bayar', function () {
    // Otherwise, show the login page.
    return view('keuangan.setting_pos_bayar');
});
Route::get('jenispembayaran', function () {
    // Otherwise, show the login page.
    return view('keuangan.jenispembayaran');
});
Route::get('edit', function () {
    // Otherwise, show the login page.
    return view('keuangan.edit');
});
Route::get('editpos', function () {
    // Otherwise, show the login page.
    return view('keuangan.editpos');
});

//JURNAL
Route::get('pemasukan', function () {
    // Otherwise, show the login page.
    return view('jurnal.pemasukan');
});
Route::get('pengeluaran', function () {
    // Otherwise, show the login page.
    return view('jurnal.pengeluaran');
});

//MANAGEMET DATA
Route::get('kelas', function () {
    // Otherwise, show the login page.
    return view('mandata.kelas');
});
Route::get('kelulusan', function () {
    // Otherwise, show the login page.
    return view('mandata.kelulusan');
});
Route::get('siswa', function () {
    // Otherwise, show the login page.
    return view('mandata.siswa');
});
Route::get('kenaikankelas', function () {
    // Otherwise, show the login page.
    return view('mandata.kenaikankelas');
});
Route::get('tahunajar', function () {
    // Otherwise, show the login page.
    return view('mandata.tahunajar');
});
Route::get('tambahsiswa', function () {
    // Otherwise, show the login page.
    return view('mandata.tambahsiswa');
});
Route::get('tambahtahunajar', function () {
    // Otherwise, show the login page.
    return view('mandata.tambahtahunajar');
});
Route::get('uploadsiswa', function () {
    // Otherwise, show the login page.
    return view('mandata.uploadsiswa');
});
Route::get('addsiswa', function () {
    // Otherwise, show the login page.
    return view('mandata.add.addsiswa');
});
Route::get('addsekolah', function () {
    // Otherwise, show the login page.
    return view('mandata.add.addsekolah');
});
Route::get('addkeluarga', function () {
    // Otherwise, show the login page.
    return view('mandata.add.addkeluarga');
});

//LAPORAN
Route::get('rekap', function () {
    // Otherwise, show the login page.
    return view('laporan.rekap');
});
Route::get('lapuang', function () {
    // Otherwise, show the login page.
    return view('laporan.lapuang');
});

//INFORMASI
Route::get('informasi', function () {
    // Otherwise, show the login page.
    return view('informasi.informasi');
});
Route::get('tambahinfo', function () {
    // Otherwise, show the login page.
    return view('informasi.tambahinfo');
});

//PENGATURAN
Route::get('sekolah', function () {
    return view('pengaturan.sekolah');
});
Route::post('/sekolah', [SekolahController::class, 'store'])->name('atursekolah.store');

Route::get('bulan', function () {
    return view('pengaturan.bulan');
});

//MANAGEMENT USER
Route::get('users', function () {
    return view('manjusers.users');
});
Route::get('tambah', function () {
    return view('manjusers.tambah');
});

