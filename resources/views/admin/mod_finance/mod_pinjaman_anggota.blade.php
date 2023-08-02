@extends('admin.template')
@section('style')
    <style>
        .autocomplete-items {
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 10;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }

        .autocomplete-items div {
            padding: 10px;
            display: block;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        .autocomplete-items div:hover {
            /*when hovering an item:*/
            background-color: #e9e9e9;
        }

        .autocomplete-active {
            /*when navigating through the items using the arrow keys:*/
            background-color: DodgerBlue !important;
            color: #ffffff;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="card-title"><button class="btn btn-secondary" data-toggle="modal" data-target="#tambah">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Tambah Data
                        </button></span>
                    <span class="card-title"><a class="btn btn-primary text-white" data-toggle="modal"
                            data-target="#laporan">
                            <span class="btn-label">
                                <i class="fa fa-file-alt"></i>
                            </span>
                            Cetak Laporan
                        </a></span>

                    <span class="card-title"><a class="btn btn-primary text-white" data-toggle="modal"
                            data-target="#importData">
                            <span class="btn-label">
                                <i class="fa fa-file-alt"></i>
                            </span>
                            Import Data
                        </a></span>

                    <form class="form-inline">
                        <div class="form-group mt-5">
                            <input type="text" class="form-control" id="search" placeholder="Cari">
                        </div>
                        <button type="button" class="btn btn-primary mt-5" id="btnCari">Cari</button>
                    </form>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover">

                            <!--<table class="display table table-striped table-hover">-->
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Anggota</th>
                                    <th>Tab. Manasuka Awal</th>
                                    <th>Tab. Manasuka Masuk</th>
                                    <th>Tab. Manasuka keluar</th>
                                    <th>Tab. Manasuka Akhir</th>
                                    <th>Jasa Tab. Manasuka Awal</th>
                                    <th>Jasa Tab. Manasuka Masuk</th>
                                    <th>Jasa Tab. Manasuka keluar</th>
                                    <th>Jasa Tab. Manasuka Akhir</th>
                                    <th>Jumlah</th>
                                    <th>Tab. MS Bln Depan</th>
                                    <th>Sospen Bulan Ini</th>
                                    <th>Sospen Bulan Depan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($pinjamanAnggota as $data)
                                    {{-- @if ($anggotaData->id == $data->anggota_id) --}}
                                    @php
                                        $manasuka_akhir = $data->manasuka_awal + $data->manasuka_masuk + $data->manasuka_keluar;

                                        $jasa_manasuka_akhir = $data->jasa_manasuka_awal + $data->jasa_manasuka_masuk + $data->jasa_manasuka_keluar;

                                        $jumlah = $manasuka_akhir + $jasa_manasuka_akhir;
                                    @endphp
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->anggota->nama_anggota }}</td>
                                        <td>{{ $data->manasuka_awal }}</td>
                                        <td>{{ $data->manasuka_masuk }}</td>
                                        <td>{{ $data->manasuka_keluar }}</td>
                                        <td>{{ $manasuka_akhir }}</td>
                                        <td>{{ $data->jasa_manasuka_awal }}</td>
                                        <td>{{ $data->jasa_manasuka_masuk }}</td>
                                        <td>{{ $data->jasa_manasuka_keluar }}</td>
                                        <td>{{ $jasa_manasuka_akhir }}</td>
                                        <td>{{ $jumlah }}</td>
                                        <td>{{ $data->manasuka_bln_dpn }}</td>
                                        <td>{{ $data->sospen_bln_ini }}</td>
                                        <td>{{ $data->sospen_bln_depan }}</td>
                                        <td class="d-flex"> <span class="card-title mr-2 mt-3"><button
                                                    class="btn btn-sm btn-secondary" data-toggle="modal"
                                                    data-target="#tambahNilai{{ $data->id }}">
                                                    <span class="btn-label">
                                                        <i class="fa fa-plus"></i>
                                                    </span>
                                                    Tambah
                                                </button></span>

                                            <a href="{{ asset('hapusPinjAnggota/' . $data->id) }}" button type="button"
                                                class="btn btn-sm btn-danger"
                                                onClick="return confirm('Yakin akan menghapus data ini?')"></button><i
                                                    class="fa fa-trash"></i>Hapus</a>

                                        </td>
                                    </tr>
                                    {{-- @endif --}}
                                @endforeach

                            </tbody>

                            {{-- <td class="d-flex"><button type="button" title=""
                                        class="btn btn-link btn-primary btn-lg" data-toggle="modal"
                                        data-target="#simpanananggota{{ $data->id_simpan }}">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <a href="/simpanan-anggota/laporan">
                                        <button type="button" title=""
                                            class="btn btn-link btn-primary btn-lg">
                                            <i class="fa fa-print"></i>
                                        </button>
                                    </a>
                                    <a href="{{ asset('/hapus-simpanananggota/' . $data->id_simpanan) }}"
                                        type="button" data-toggle="tooltip" title=""
                                        class="btn btn-link btn-danger mt-2" data-original-title="Remove"
                                        <?php echo "onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\" "; ?>>
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td> --}}
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    {{-- {{ $pinjamanAnggota->links('pagination::bootstrap-4') }} --}}
                </div>
            </div>
        </div>
    </div>



    {{-- MODAL Laporan --}}
    <div id="laporan" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="myForm" method="post" action="{{ asset('/laporanEntri') }}">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <h4>Tanggal Awal</h4>
                                <input type="date" class="form-control" name="TanggalAwal">
                            </div>
                            <div class="col mt-3 h1">s.d</div>
                            <div class="col">
                                <h4>Tanggal Akhir</h4>
                                <input type="date" class="form-control" name="TanggalAkhir">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Buat Laporan</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    {{-- MODAL TAMBAH DATA --}}
    <div id="tambah" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="tambahPinjAnggota" method="post" action="/tambahPinjAnggota">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <h4>Nama Anggota</h4>
                                <select class="form-control" name="id_anggota">
                                    @foreach ($anggota as $anggotaData)
                                        <option value="{{ $anggotaData->id_anggota }}">
                                            {{ $anggotaData->nama_anggota }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <h4>Tab. Manasuka Awal</h4>
                                <input type="number" class="form-control" name="manasuka_awal" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4>Tab. Manasuka Masuk</h4>
                                <input type="number" class="form-control" name="manasuka_masuk" value="">
                            </div>
                            <div class="col">
                                <h4>Tab. Manasuka Keluar</h4>
                                <input type="number" class="form-control" name="manasuka_keluar" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4>Jasa Tab. Manasuka Awal</h4>
                                <input type="number" class="form-control" name="jasa_manasuka_awal" value="">
                            </div>
                            <div class="col">
                                <h4>Jasa Tab. Manasuka Masuk</h4>
                                <input type="number" class="form-control" name="jasa_manasuka_masuk" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4>Jasa Tab. Manasuka Keluar</h4>
                                <input type="number" class="form-control" name="jasa_manasuka_keluar" value="">
                            </div>
                            <div class="col">
                                <h4>Tab. Manasuka Bulan Depan</h4>
                                <input type="number" class="form-control" name="manasuka_bln_dpn" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4>Sospen Bulan Ini</h4>
                                <input type="number" class="form-control" name="sospen_bln_ini" value="">
                            </div>
                            <div class="col">
                                <h4>Sospen Bulan Depan</h4>
                                <input type="number" class="form-control" name="sospen_bln_depan" value="">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL TAMBAH NILAI SIMPANAN --}}
    <form id="tambahpinjamanAnggota" method="post" action="/tambahpinjamanAnggota">
        @csrf
        @foreach ($pinjamanAnggota as $data)
            <div id="tambahNilai{{ $data->id }}" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Nilai Data {{ $data->anggota->nama_anggota }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            {{-- <input type="hidden" class="form-control" id="id" name="id"
                                value="{{ $data->id_anggota }}"> --}}

                            <div class="row">
                                <div class="col">
                                    <h4>Simpanan Wajib Awal</h4>
                                    <input type="number" class="form-control" name="sw_awal">
                                </div>
                                <div class="col">
                                    <h4>Simpanan Wajib Bulan Ini</h4>
                                    <input type="number" class="form-control" name="sw_bulan_ini">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4>Simpanan Wajib Akhir</h4>
                                    <input type="number" class="form-control" name="sw_akhir">
                                </div>
                                <div class="col">
                                    <h4>Saldo Awal Pinjaman</h4>
                                    <input type="number" class="form-control" name="saldo_awal_pinjaman">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4>Pemberian Pinjaman</h4>
                                    <input type="number" class="form-control" name="pemberian_pinjaman">
                                </div>
                                <div class="col">
                                    <h4>Angsuran Pinjaman Pokok</h4>
                                    <input type="number" class="form-control" name="angs_pinjaman_pokok">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4>Angsuran Pinjaman Asuransi</h4>
                                    <input type="number" class="form-control" name="angs_pinjaman_partisipasi">
                                </div>
                                <div class="col">
                                    <h4>Jumlah Partisipasi Bulan Ini</h4>
                                    <input type="number" class="form-control" name="jml_partisipasi_bulan_ini">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4>Jumlah Partisipasi Bulan Lalu </h4>
                                    <input type="number" class="form-control" name="jml_partisipasi_bulan_lalu">
                                </div>
                                <div class="col">
                                    <h4>Jumlah Partisipasi s/d Bulan Ini</h4>
                                    <input type="number" class="form-control" name="jml_partisipasi_sampai_bulan_ini">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4>Potongan Angsuran</h4>
                                    <input type="number" class="form-control" name="potongan_angsuran">
                                </div>
                                <div class="col">
                                    <h4>Potongan Partisipasi</h4>
                                    <input type="number" class="form-control" name="potongan_partisipasi">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4>Potongan (ke) Bulan Ini</h4>
                                    <input type="number" class="form-control" name="potongan_ke_bulan_ini">
                                </div>
                                <div class="col">
                                    <h4>Potongan (ke) Bulan Lalu</h4>
                                    <input type="number" class="form-control" name="potongan_ke_bulan_lalu">
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </form>

    <script src="/template/assets/js/core/jquery.3.2.1.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#btnCari").click(function() {
                let keyword = $("#search").val().toLowerCase();

                $("#tabelpinjamanAnggota tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(keyword) > -1);
                });
            });
        });
    </script>
    {{-- END MODAL TAMBAH NILAI SIMPANAN --}}
@endsection
