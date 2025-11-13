@extends('layouts.app')
@section('title', 'pasien')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Pasien</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="table">
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama Pasien</th>
                        <th colspan="2">Tanggal lahir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pasien as $index => $item)
                        <tr>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->tanggal_lahir)->locale('id')->translatedFormat('d F Y') }}
                            <td></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
