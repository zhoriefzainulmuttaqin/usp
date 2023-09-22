@extends('admin.template')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <button class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Tambah Piutang Unit Photo Copy
                        </button>
                        <a onclick="openWin()" target="_blank" href="{{ asset('cetakpiutangunitphotocopy') }}"
                            id="export-button" class="btn btn-primary text-white">
                            <span class="btn-label">
                                <i class="fa fa-file-alt"></i>
                            </span>
                            Cetak PDF
                        </a>
                    </h4>

                </div>
                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('failed'))
                    <div class="alert alert-danger mt-3">
                        {{ session('failed') }}
                    </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jumlah Bulan Lalu</th>
                                    <th>Di Bayar Bulan Ini</th>
                                    <th>Sisa</th>
                                    <th>Hutang Bulan Ini</th>
                                    <th>Jumlah s/d Bulan Ini</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($piutangfc as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>Rp.{{ number_format($item->jumlah_bulan_lalu) }}</td>
                                        <td>Rp.{{ number_format($item->dibayar_bulan_ini) }}</td>
                                        <td>Rp.{{ number_format($item->sisa) }}</td>
                                        <td>Rp.{{ number_format($item->hutang_bulan_ini) }}</td>
                                        <td>Rp.{{ number_format($item->jumlah_sd_bulan_ini) }}</td>
                                        <td>{{ $item->keterangan }}</td>
                                        <td class="d-flex">
                                            <button type="button" title="" class="btn btn-link btn-primary btn-lg"
                                                data-toggle="modal" data-target="#simpanananggota{{ $item->id }}"><i
                                                    class="fa fa-edit"></i>
                                            </button>
                                            <a href="{{ asset('/hapus-piutangunitphotocopy/' . $item->id) }}"
                                                type="button" data-toggle="tooltip" title=""
                                                class="btn btn-link btn-danger mt-2" data-original-title="Remove"
                                                <?php echo "onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\" "; ?>>
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="2">Total</th>
                                    <th>Rp.{{ number_format($piutangfc->sum('jumlah_bulan_lalu')) }}</th>
                                    <th>Rp.{{ number_format($piutangfc->sum('dibayar_bulan_ini')) }}</th>
                                    <th>Rp.{{ number_format($piutangfc->sum('sisa')) }}</th>
                                    <th>Rp.{{ number_format($piutangfc->sum('hutang_bulan_ini')) }}</th>
                                    <th colspan="3">Rp.{{ number_format($piutangfc->sum('jumlah_sd_bulan_ini')) }}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ asset('tambah-piutangunitphotocopy') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Piutang Photocopy</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>Nama</h4>
                        <input type="text" name="nama" id="" class="form-control">
                        <div class="row">
                            <div class="col">
                                <h4 class="mt-3">Jumlah Bulan Lalu</h4>
                                <input type="number" name="jumlah_bulan_lalu" id="" class="form-control">
                            </div>
                            <div class="col">
                                <h4 class="mt-3">Dibayar Bulan Ini</h4>
                                <input type="number" name="dibayar_bulan_ini" id="" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4 class="mt-3">Hutang Bulan Ini</h4>
                                <input type="number" name="hutang_bulan_ini" id="" class="form-control">
                                {{-- <h4 class="mt-3">Sisa</h4>
                                <input type="number" name="sisa" id="" class="form-control"> --}}
                            </div>
                        </div>
                        {{-- <h4>jumlah s/d Bulan Ini</h4>
                        <input type="text" name="jumlah_sd_bulan_ini" id="" class="form-control"> --}}
                        <h4>Keterangan</h4>
                        <textarea type="text" name="keterangan" id="" class="form-control"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @foreach ($piutangfc as $item)
        <form action="{{ asset('edit-piutangunitphotocopy') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="simpanananggota{{ $item->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Piutang Unit Photocopy</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <h4>Nama</h4>
                            <input type="text" name="nama" id="" value="{{ $item->nama }}"
                                class="form-control">
                            <div class="row">
                                <div class="col">
                                    <h4 class="mt-3">Jumlah Bulan Lalu</h4>
                                    <input type="number" name="jumlah_bulan_lalu"
                                        value="{{ $item->jumlah_bulan_lalu }}" id="" class="col form-control">
                                </div>
                                <div class="col">
                                    <h4 class="mt-3">Dibayar Bulan Ini</h4>
                                    <input type="number" name="dibayar_bulan_ini"
                                        value="{{ $item->dibayar_bulan_ini }}" id="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4 class="mt-3">Hutang Bulan Ini</h4>
                                    <input type="number" name="hutang_bulan_ini" value="{{ $item->hutang_bulan_ini }}"
                                        id="" class="form-control">
                                </div>
                            </div>
                            <h4>Keterangan</h4>
                            <textarea type="text" name="keterangan" id="" class="form-control"
                                placeholder="{{ $item->keterangan }}">{{ $item->keterangan }}</textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endforeach

    <script>
        var myWindow;

        function openWin() {
            myWindow = window.open("{{ url('/cetakpiutangunitphotocopy') }}", "myWindow", "width=200,height=100");
            setTimeout(closeWin, 1000)
        }

        function closeWin() {
            myWindow.close();
        }
    </script>
@endsection
