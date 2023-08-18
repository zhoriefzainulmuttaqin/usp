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
                                    <th>Keterangan</th>
                                    <th>Deposit</th>
                                    <th>Warkop</th>
                                    <th>Pulsa</th>
                                    <th>Kueh Titipan</th>
                                    <th>Jumlah</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                {{-- @if ($anggotaData->id == $data->anggota_id) --}}
                                @php
                                    $no = 1;
                                    $jumlah = $warkop->deposit + $warkop->warkop + $warkop->pulsa + $warkop->kueh_titipan;
                                @endphp
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>Persediaan Awal</td>
                                    <td>{{ $warkop->deposit ?? '-' }}</td>
                                    <td>{{ $warkop->warkop ?? '-' }}</td>
                                    <td>{{ $warkop->pulsa ?? '-' }}</td>
                                    <td>{{ $warkop->kueh_titipan ?? '-' }}</td>
                                    <td>{{ $jumlah ?? '-' }}</td>

                                    <td class="d-flex"> <span class="card-title mr-2 mt-3"><button
                                                class="btn btn-sm btn-secondary" data-toggle="modal"
                                                data-target="#tambahNilai{{ $warkop->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                                Tambah
                                            </button></span>
                                        <a href="{{ asset('hapuskonsinyasi  /' . $warkop->id) }}" button type="button"
                                            class="btn btn-sm btn-danger"
                                            onClick="return confirm('Yakin akan menghapus data ini?')"></button><i
                                                class="fa fa-trash"></i>Hapus</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>Pembelian/Belanja Tunai</td>
                                    <td>{{ $warkop->deposit ?? '-' }}</td>
                                    <td>{{ $warkop->warkop ?? '-' }}</td>
                                    <td>{{ $warkop->pulsa ?? '-' }}</td>
                                    <td>{{ $warkop->kueh_titipan ?? '-' }}</td>
                                    <td>{{ $jumlah ?? '-' }}</td>

                                    <td class="d-flex"> <span class="card-title mr-2 mt-3"><button
                                                class="btn btn-sm btn-secondary" data-toggle="modal"
                                                data-target="#tambahNilai{{ $warkop->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                                Tambah
                                            </button></span>
                                        <a href="{{ asset('hapuskonsinyasi  /' . $warkop->id) }}" button type="button"
                                            class="btn btn-sm btn-danger"
                                            onClick="return confirm('Yakin akan menghapus data ini?')"></button><i
                                                class="fa fa-trash"></i>Hapus</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>Pembelian/Belanja Kredit</td>
                                    <td>{{ $warkop->deposit ?? '-' }}</td>
                                    <td>{{ $warkop->warkop ?? '-' }}</td>
                                    <td>{{ $warkop->pulsa ?? '-' }}</td>
                                    <td>{{ $warkop->kueh_titipan ?? '-' }}</td>
                                    <td>{{ $jumlah ?? '-' }}</td>

                                    <td class="d-flex"> <span class="card-title mr-2 mt-3"><button
                                                class="btn btn-sm btn-secondary" data-toggle="modal"
                                                data-target="#tambahNilai{{ $warkop->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                                Tambah
                                            </button></span>
                                        <a href="{{ asset('hapuskonsinyasi  /' . $warkop->id) }}" button type="button"
                                            class="btn btn-sm btn-danger"
                                            onClick="return confirm('Yakin akan menghapus data ini?')"></button><i
                                                class="fa fa-trash"></i>Hapus</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>Jumlah Persediaan Barang/Siap Jual</td>
                                    <td>{{ $warkop->deposit ?? '-' }}</td>
                                    <td>{{ $warkop->warkop ?? '-' }}</td>
                                    <td>{{ $warkop->pulsa ?? '-' }}</td>
                                    <td>{{ $warkop->kueh_titipan ?? '-' }}</td>
                                    <td>{{ $jumlah ?? '-' }}</td>

                                    <td class="d-flex"> <span class="card-title mr-2 mt-3"><button
                                                class="btn btn-sm btn-secondary" data-toggle="modal"
                                                data-target="#tambahNilai{{ $warkop->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                                Tambah
                                            </button></span>
                                        <a href="{{ asset('hapuskonsinyasi  /' . $warkop->id) }}" button type="button"
                                            class="btn btn-sm btn-danger"
                                            onClick="return confirm('Yakin akan menghapus data ini?')"></button><i
                                                class="fa fa-trash"></i>Hapus</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>Jumlah Penjualan Kredit dan Tunai</td>
                                    <td>{{ $warkop->deposit ?? '-' }}</td>
                                    <td>{{ $warkop->warkop ?? '-' }}</td>
                                    <td>{{ $warkop->pulsa ?? '-' }}</td>
                                    <td>{{ $warkop->kueh_titipan ?? '-' }}</td>
                                    <td>{{ $jumlah ?? '-' }}</td>

                                    <td class="d-flex"> <span class="card-title mr-2 mt-3"><button
                                                class="btn btn-sm btn-secondary" data-toggle="modal"
                                                data-target="#tambahNilai{{ $warkop->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                                Tambah
                                            </button></span>
                                        <a href="{{ asset('hapuskonsinyasi  /' . $warkop->id) }}" button type="button"
                                            class="btn btn-sm btn-danger"
                                            onClick="return confirm('Yakin akan menghapus data ini?')"></button><i
                                                class="fa fa-trash"></i>Hapus</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>Persediaan Akhir</td>
                                    <td>{{ $warkop->deposit ?? '-' }}</td>
                                    <td>{{ $warkop->warkop ?? '-' }}</td>
                                    <td>{{ $warkop->pulsa ?? '-' }}</td>
                                    <td>{{ $warkop->kueh_titipan ?? '-' }}</td>
                                    <td>{{ $jumlah ?? '-' }}</td>

                                    <td class="d-flex"> <span class="card-title mr-2 mt-3"><button
                                                class="btn btn-sm btn-secondary" data-toggle="modal"
                                                data-target="#tambahNilai{{ $warkop->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                                Tambah
                                            </button></span>
                                        <a href="{{ asset('hapuskonsinyasi  /' . $warkop->id) }}" button type="button"
                                            class="btn btn-sm btn-danger"
                                            onClick="return confirm('Yakin akan menghapus data ini?')"></button><i
                                                class="fa fa-trash"></i>Hapus</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>Harga Beli</td>
                                    <td>{{ $warkop->deposit ?? '-' }}</td>
                                    <td>{{ $warkop->warkop ?? '-' }}</td>
                                    <td>{{ $warkop->pulsa ?? '-' }}</td>
                                    <td>{{ $warkop->kueh_titipan ?? '-' }}</td>
                                    <td>{{ $jumlah ?? '-' }}</td>

                                    <td class="d-flex"> <span class="card-title mr-2 mt-3"><button
                                                class="btn btn-sm btn-secondary" data-toggle="modal"
                                                data-target="#tambahNilai{{ $warkop->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                                Tambah
                                            </button></span>
                                        <a href="{{ asset('hapuskonsinyasi  /' . $warkop->id) }}" button type="button"
                                            class="btn btn-sm btn-danger"
                                            onClick="return confirm('Yakin akan menghapus data ini?')"></button><i
                                                class="fa fa-trash"></i>Hapus</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>Barang Rusak/Hilang/Beban</td>
                                    <td>{{ $warkop->deposit ?? '-' }}</td>
                                    <td>{{ $warkop->warkop ?? '-' }}</td>
                                    <td>{{ $warkop->pulsa ?? '-' }}</td>
                                    <td>{{ $warkop->kueh_titipan ?? '-' }}</td>
                                    <td>{{ $jumlah ?? '-' }}</td>

                                    <td class="d-flex"> <span class="card-title mr-2 mt-3"><button
                                                class="btn btn-sm btn-secondary" data-toggle="modal"
                                                data-target="#tambahNilai{{ $warkop->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                                Tambah
                                            </button></span>
                                        <a href="{{ asset('hapuskonsinyasi  /' . $warkop->id) }}" button type="button"
                                            class="btn btn-sm btn-danger"
                                            onClick="return confirm('Yakin akan menghapus data ini?')"></button><i
                                                class="fa fa-trash"></i>Hapus</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>HPP</td>
                                    <td>{{ $warkop->deposit ?? '-' }}</td>
                                    <td>{{ $warkop->warkop ?? '-' }}</td>
                                    <td>{{ $warkop->pulsa ?? '-' }}</td>
                                    <td>{{ $warkop->kueh_titipan ?? '-' }}</td>
                                    <td>{{ $jumlah ?? '-' }}</td>

                                    <td class="d-flex"> <span class="card-title mr-2 mt-3"><button
                                                class="btn btn-sm btn-secondary" data-toggle="modal"
                                                data-target="#tambahNilai{{ $warkop->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                                Tambah
                                            </button></span>
                                        <a href="{{ asset('hapuskonsinyasi  /' . $warkop->id) }}" button type="button"
                                            class="btn btn-sm btn-danger"
                                            onClick="return confirm('Yakin akan menghapus data ini?')"></button><i
                                                class="fa fa-trash"></i>Hapus</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>Rugi/Laba</td>
                                    <td>{{ $warkop->deposit ?? '-' }}</td>
                                    <td>{{ $warkop->warkop ?? '-' }}</td>
                                    <td>{{ $warkop->pulsa ?? '-' }}</td>
                                    <td>{{ $warkop->kueh_titipan ?? '-' }}</td>
                                    <td>{{ $jumlah ?? '-' }}</td>

                                    <td class="d-flex"> <span class="card-title mr-2 mt-3"><button
                                                class="btn btn-sm btn-secondary" data-toggle="modal"
                                                data-target="#tambahNilai{{ $warkop->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                                Tambah
                                            </button></span>
                                        <a href="{{ asset('hapuskonsinyasi  /' . $warkop->id) }}" button type="button"
                                            class="btn btn-sm btn-danger"
                                            onClick="return confirm('Yakin akan menghapus data ini?')"></button><i
                                                class="fa fa-trash"></i>Hapus</a>

                                    </td>
                                </tr>
                                <tr style="background-color: white;">
                                    <td></td>
                                    <td>
                                        <h6>Keterangan:</h6>
                                    </td>
                                </tr>
                                <tr style="background-color: white;">
                                    <td></td>
                                    <td>
                                        <h6>Jumlah Penjualan Terdiri:</h6>
                                    </td>
                                    <td></td>
                                    <td>
                                        <h6>Penjualan Tunai</h6>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <h6>1234456789</h6>
                                    </td>
                                </tr>
                                <tr style="background-color: white;">
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <h6>Penjualan Kredit</h6>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <h6>0</h6>
                                    </td>
                                </tr>
                                {{-- @endif --}}
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


    {{-- MODAL TAMBAH NILAI  --}}
    <form id="tambahpinjamanAnggota" method="post" action="/tambahpinjamanAnggota">
        @csrf

        <div id="tambahNilai{{ $warkop->id }}" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Nilai Data </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        {{-- <input type="hidden" class="form-control" id="id" name="id"
                                value="{{ $data->id_anggota }}"> --}}

                        <div class="row">
                            <div class="col">
                                <h4>Deposit</h4>
                                <input type="number" class="form-control" name="sw_awal">
                            </div>
                            <div class="col">
                                <h4>Kueh Titipan</h4>
                                <input type="number" class="form-control" name="sw_bulan_ini">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
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
