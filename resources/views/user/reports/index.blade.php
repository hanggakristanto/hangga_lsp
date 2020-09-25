@extends('layouts.user_template')

@section('title')
<title>Riwayat Pendaftaran</title>
@endsection

@section('content-title')
<h1>Riwayat Pendaftaran</h1>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h4>Riwayat Pendaftaran</h4>
            </div>

            <div class="card-body">
                <div class="card">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tujuan</th>
                                <th scope="col">Provinsi</th>
                                <th scope="col">Kota/Kabupaten</th>
                                <th scope="col">Alasan</th>
                                <th scope="col">Nama</th>
                                <th scope="col">TTL</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Bangsa</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Kode Pos</th>
                                <th scope="col">Telpon</th>
                                <th scope="col">E mail</th>
                                <th scope="col">Pendidikan</th>
                                <th scope="col">Pekerjaan</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Kode Pos</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Email</th>
                                <th scope="col">Tanggal Daftar</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($reports as $report)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $report->user->name }}</td>
                                <td>
                                    @if ($report->request)
                                    <span class="badge badge-primary">Keluar Desa</span>
                                    @else
                                    <span class="badge badge-secondary">Masuk Desa</span>
                                    @endif
                                </td>
                                <td>{{ $report->province->name }}</td>
                                <td>{{ $report->city->name }}</td>
                                <td>{{ $report->description }}</td>
                                <td>{{ $report->nama }}</td>
                                {{-- <td>{{ $report->created_at->format("d-M-Y") }}</td> --}}
                                <td>{{ $report->ttl }}</td>
                                <td>{{ $report->jk }}</td>
                                <td>{{ $report->bangsa }}</td>
                                <td>{{ $report->alamat_1 }}</td>
                                <td>{{ $report->pos_1 }}</td>
                                <td>{{ $report->tlp_1 }}</td>
                                <td>{{ $report->mail_1 }}</td>
                                <td>{{ $report->pend }}</td>
                                <td>{{ $report->kerjaan }}</td>
                                <td>{{ $report->jabatan }}</td>
                                <td>{{ $report->alamat_2 }}</td>
                                <td>{{ $report->pos_2 }}</td>
                                <td>{{ $report->tlp_2 }}</td>
                                <td>{{ $report->mail_2 }}</td>
                                <td>{{ $report->created_at->format("d-M-Y") }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">Riwayat laporan kosong ...</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="row float-right">
                        <div class="col">
                            {{ $reports->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection