@extends('layouts.app')
@section('title', 'mahasiswa')
@section('content')
    <div class="container">
        <h1>INI HALAMAN MAHASISWA</h1>

        <div class="row">
            <div class="col-sm-6">
                <h4>Tabel Mahasiswa</h4>
                <table class="table table-sm table-hover table-danger table-bordered text-center">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Jenis kelamin</th>
                            <th colspan="2">Tempat Tanggal lahir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < $jumlah; $i++)
                            <tr>
                                <td>{{ $npm[$i] }}</td>
                                <td>{{ $nama[$i] }}</td>
                                <td>Laki-laki</td>
                                <td>Kota Medan</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6">
                <h4>Form Mahasiswa</h4>
                <form action="" method="GET">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="">NPM</label>
                            <input type="number" name="npm" class="form-control" placeholder="Input NPM">
                        </div>
                        <div class="col-sm-6">
                            <label for="">Nama Mahasiswa</label>
                            <input type="text" name="nama_mahasiswa" class="form-control"
                                placeholder="Input Nama Mahasiswa">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label for="">Prodi</label>
                            <select name="prodi" class="form-select">
                                <option value="">Sistem Informasi</option>
                                <option value="">Teknik Informatika</option>
                                <option value="">Sains Data</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-12">
                            <button class="btn btn-primary" style="width: 100%" type="submit">Simpan</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
