@extends('layouts.user_template')

@section('title')
<title>Buat Laporan</title>
@endsection

@section('content-title')
<h1>Buat Laporan</h1>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            {{-- <div class="card-header">
                <h4>Data Pribadi</h4>
            </div> --}}

            <div class="card-body">
                @if (session("success"))
                <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>

                        {{ session("success") }}
                    </div>
                </div>
                @endif

                <div class="card">
                    <form action="{{ route('user.reports.store') }}" method="POST">
                        @csrf
                        <h4>Data Pribadi</h4>
                        <input name="user_id" value="{{ Auth::user()->id }}" type="number" class="form-control" hidden>

                        <div class="form-group">
                            <label>Pilih Tujuan Laporan</label>

                            <select name="request" class="form-control" id="tujuanLaporan">
                                <option value="0">Masuk Desa</option>
                                <option value="1">Keluar Desa</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label id="labelProvinsi">Pilih Provinsi Asal</label>

                            <select name="province_id" class="form-control" id="province_id">
                                <option value="">Pilih Provinsi</option>

                                @foreach ($provinces as $province)
                                <option value="{{ $province->id }}">
                                    {{ $province->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label id="labelKabupatenKota">Pilih Kabupaten/Kota Asal</label>

                            <select name="city_id" class="form-control" id="city_id">
                                <option value="">Pilih Kabupaten/Kota</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label id="labelKabupatenKota">Masukkan Alasan</label>

                            <textarea name="description" class="form-control"
                                required="">Masukkan alasan anda ...</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                        </div>
                        {{-- mulai dari sini --}}
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tempat / Tgl. Lahir</label>
                            <input type="text" class="form-control" name="ttl" aria-describedby="emailHelp" placeholder="Tempat / Tgl. Lahir">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jk" aria-describedby="emailHelp" placeholder="Jenis Kelamin">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kebangsaan</label>
                            <input type="text" class="form-control" name="bangsa" aria-describedby="emailHelp" placeholder="Kebangsaan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat Rumah</label>
                            <input type="text" class="form-control" name="alamat_1" aria-describedby="emailHelp" placeholder="Alamat Rumah">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Pos</label>
                            <input type="text" class="form-control" name="pos_1" aria-describedby="emailHelp" placeholder="Kode Pos">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">No. Telepon/HP/WA</label>
                            <input type="text" class="form-control" name="tlp_1" aria-describedby="emailHelp" placeholder="No. Telepon/HP/WA">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="text" class="form-control" name="mail_1" aria-describedby="emailHelp" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pendidikan Terakhir</label>
                            <input type="text" class="form-control" name="pend" aria-describedby="emailHelp" placeholder="Pendidikan Terakhir">
                        </div>

                        <hr>

                        <h4>Data Pekerjaan Sekarang</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lembaga/Pesantren/Organisasi</label>
                            <input type="text" class="form-control" name="kerjaan" aria-describedby="emailHelp" placeholder="Nama Lembaga/Pesantren/Organisasi">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" aria-describedby="emailHelp" placeholder="Jabatan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" class="form-control" name="alamat_2" aria-describedby="emailHelp" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Pos</label>
                            <input type="text" class="form-control" name="pos_2" aria-describedby="emailHelp" placeholder="Kode Pos">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">No. Telp kantor/HP/WA</label>
                            <input type="text" class="form-control" name="tlp_2" aria-describedby="emailHelp" placeholder="No. Telp kantor/HP/WA">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="text" class="form-control" name="mail_2" aria-describedby="emailHelp" placeholder="E-mail">
                        </div>

                        <h4>Skema yang di ikuti</h4>
                        {{-- 
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">1. Guru Tahsin Mubtadi (Muda)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">2. Guru Tahsin Mutawassit (Madya)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">3. Guru Tahsin Mahir (Ahli)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">4. Guru Tahfizh Mubtadi (Muda)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">5. Guru Tahfizh Mutawassit (Madya)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">6. Guru Tahfizh Mahir (Ahli)</label>
                        </div> --}}
                        <br>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-js')
<script>
    const tujuanLaporan = document.getElementById("tujuanLaporan");
    const labelProvisi = document.getElementById("labelProvinsi"); 
    const labelKabupatenKota = document.getElementById("labelKabupatenKota");  

    tujuanLaporan.addEventListener("change", function() {
        if (parseInt(this.value)) {
            labelProvisi.innerHTML = "Pilih Provinsi Tujuan";
            labelKabupatenKota.innerHTML = "Pilih Kabupaten/Kota Tujuan";
        } else {
            labelProvisi.innerHTML = "Pilih Provinsi Asal";
            labelKabupatenKota.innerHTML = "Pilih Kabupaten/Kota Asal";
        }
    });

    //KETIKA SELECT BOX DENGAN ID province_id DIPILIH
    $('#province_id').on('change', function() {
        //MAKA AKAN MELAKUKAN REQUEST KE URL /API/CITY
        //DAN MENGIRIMKAN DATA PROVINCE_ID

        const _url = "/api/cities";

        $.ajax({
            dataType: "json",
            url: _url,
            type: "GET",
            data: { 
                province_id: $(this).val(),
            },
            success: function(html){
                //SETELAH DATA DITERIMA, SELEBOX DENGAN ID CITY_ID DI KOSONGKAN

                $('#city_id').empty()
                //KEMUDIAN APPEND DATA BARU YANG DIDAPATKAN DARI HASIL REQUEST VIA AJAX
                //UNTUK MENAMPILKAN DATA KABUPATEN / KOTA

                $('#city_id').append('<option value="">Pilih Kabupaten/Kota</option>')
                $.each(html.data, function(key, item) {
                    $('#city_id').append('<option value="'+item.id+'">'+item.name+'</option>')
                })
            },
            error: function(xhr) {
                console.log(xhr);
            }
        });
    });
</script>
@endsection