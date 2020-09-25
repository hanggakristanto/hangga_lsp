@extends('layouts.user_template')

@section('title')
<title>Dashboard</title>
@endsection

@section('content-title')
<h1>Home</h1>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="card">
                    <h2>Selamat datang, {{ Auth::user()->name }}!</h2>

                    <hr>

                    <h4>Panduan Penggunaan Aplikasi</h4>
                    <p>Berikut adalah ptunjuk untuk menggunakan aplikasi ini.</p>

                    <h6>Melanjutkan Registrasi Sertifikasi di dalam akun peserta</h6>

                    <ul>
                        <li>A. Data pribadi.</li>
                        <li>B. Data pekerjaan sekarang.</li>
                        <li>C. Skema Kompetensi yang diajukan.</li>
                        <li>D. Setelah Mendaftar Online. Peserta diwajibkan Membayar Terlebih Dahulu. Untuk diupload bukti transfernya di menu Upload Berkas.</li>
                        <li>E. Upload berkas.</li>
                        <li>F. Mengisi Assesment Mandiri.</li>
                        <li>G. Peserta harus validasi data onlinenya.</li>
                        <li>H. LSP mengecek data. Jika sudah valid, Peserta akan dinyatakan sebagai Peserta Uji Sertifikasi yang muncul di email/akun peserta. </li>
                        <li>I. Peserta diharapkan menyiapkan diri dengan sebaik mungkin sebelum mengikuti uji kompetensi sesuai jadwal yang sudah ditentukan. </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection