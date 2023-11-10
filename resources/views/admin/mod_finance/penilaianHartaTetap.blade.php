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
                            Tambah Daftar Penilaian Harta Tetap
                        </button>
                        <a onclick="openWin()" target="_blank" href="{{ asset('CetakPenilaianHartaTetap') }}"
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
                        <table id="basic-datatables" class="display table table-striped table-hover" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Nama Barang</th>
                                    <th rowspan="2">Jumlah</th>
                                    <th rowspan="2">Nilai Perolehan Tahun Lalu</th>
                                    <th colspan="2" style="text-align: center">Mutasi</th>
                                    <th rowspan="2">Nilai Perolehan Tahun Ini</th>
                                    <th colspan="3" style="text-align: center">Akumulasi Penyusutan</th>
                                    <th rowspan="2">Nilai Buku Tahun Ini</th>
                                    <th rowspan="2">Keterangan</th>
                                    <th rowspan="2">Action</th>
                                </tr>
                                <tr>
                                    <th>+</th>
                                    <th>-</th>
                                    <th>Tahun Lalu</th>
                                    <th>Tahun Ini</th>
                                    <th>s/d Tahun Ini</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_barang }}</td>
                                        <td>{{ $item->jumlah }}</td>
                                        <td>Rp. {{ number_format($item->nilai_perolehan_th_lalu) }}</td>
                                        <td>Rp. {{ number_format($item->mutasi_plus) }}</td>
                                        <td>Rp. {{ number_format($item->mutasi_minus) }}</td>
                                        <td>Rp. {{ number_format($item->nilai_perolehan_th_ini) }}</td>
                                        <td>Rp. {{ number_format($item->tahun_lalu) }}</td>
                                        <td>Rp. {{ number_format($item->tahun_ini) }}</td>
                                        <td>Rp. {{ number_format($item->sd_tahun_ini) }}</td>
                                        <td>Rp. {{ number_format($item->nilai_buku_tahun_ini) }}</td>
                                        <td rowspan="2">{{ $item->keterangan }}</td>
                                        <td class="d-flex">
                                            <button type="button" title="" class="btn btn-link btn-primary btn-lg"
                                                data-toggle="modal" data-target="#editModal{{ $item->id }}"><i
                                                    class="fa fa-edit"></i>
                                            </button>
                                            <a href="{{ asset('/hapus-penilaianhartatetap/' . $item->id) }}" type="button"
                                                data-toggle="tooltip" title="" class="btn btn-link btn-danger mt-2"
                                                data-original-title="Remove" <?php echo "onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\" "; ?>>
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="3">Jumlah</th>
                                    <td>Rp.{{ number_format($item->sum('nilai_perolehan_th_lalu')) }}</td>
                                    <td>Rp.{{ number_format($item->sum('mutasi_plus')) }}</td>
                                    <td>Rp.{{ number_format($item->sum('mutasi_minus')) }}</td>
                                    <td>Rp.{{ number_format($item->sum('nilai_perolehan_th_ini')) }}</td>
                                    <td>Rp.{{ number_format($item->sum('tahun_lalu')) }}</td>
                                    <td>Rp.{{ number_format($item->sum('tahun_ini')) }}</td>
                                    <td>Rp.{{ number_format($item->sum('sd_tahun_ini')) }}</td>
                                    <td>Rp.{{ number_format($item->sum('nilai_buku_tahun_ini')) }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ asset('tambah-penilaianhartatetap') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Daftar Penilaian Harta Tetap</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <h4>Nama Barang</h4>
                            <input type="text" name="nama_barang" id="" class="form-control"
                                placeholder="Masukkan nama barang">
                        </div>

                        <div class="row form-group">
                            <div class="col">
                                <h4>Jumlah</h4>
                                <input type="number" name="jumlah" id="" class="form-control"
                                    placeholder="Masukkan jumlah barang">
                            </div>

                            <div class="col">
                                <h4>Nilai Perolehan Tahun Lalu</h4>
                                <input type="number" name="nilai_perolehan_th_lalu" id="" class="form-control"
                                    placeholder="Masukkan nilai perolehan tahun lalu">
                            </div>
                        </div>

                        <div class="form-group">
                            <h4>Mutasi</h4>
                            <span class="form-check-label my-auto">Pilih Tipe Mutasi :</span>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="mutasi_type" id="mutasi_plus"
                                    value="plus" onclick="changeMutasiName(this)">
                                <label class="form-check-label my-auto" for="mutasi_plus">Mutasi +</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="mutasi_type" id="mutasi_minus"
                                    value="minus" onclick="changeMutasiName(this)">
                                <label class="form-check-label my-auto" for="mutasi_minus">Mutasi -</label>
                            </div>
                            <input type="number" name="mutasi" id="mutasi" class="form-control"
                                placeholder="Masukkan jumlah mutasi">
                        </div>

                        <div class="row form-group">
                            <div class="col">
                                <h4>Akumulasi Penyusutan</h4>
                                <div class="row">
                                    <div class="col">
                                        <label>Tahun Lalu</label>
                                        <input type="number" name="tahun_lalu" id="" class="form-control"
                                            placeholder="Masukkan jumlah akumulasi penyusutan tahun lalu">
                                    </div>
                                    <div class="col">
                                        <label>Tahun Ini</label>
                                        <input type="number" name="tahun_ini" id="" class="form-control"
                                            placeholder="Masukkan jumlah akumulasi penyusutan tahun ini">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <h4>Keterangan</h4>
                            <textarea type="text" name="keterangan" id="" class="form-control" placeholder="Masukkan keterangan"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @foreach ($data as $item)
        <form action="{{ asset('edit-penilaianhartatetap/' . $item->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Daftar Penilaian Harta Tetap</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <h4>Nama Barang</h4>
                                <input type="text" name="nama_barang" id="" class="form-control"
                                    placeholder="{{ $item->nama_barang }}" value="{{ $item->nama_barang }}">
                            </div>

                            <div class="row form-group">
                                <div class="col">
                                    <h4>Jumlah</h4>
                                    <input type="number" name="jumlah" id="" class="form-control"
                                        placeholder="{{ $item->jumlah }}" value="{{ $item->jumlah }}">
                                </div>

                                <div class="col">
                                    <h4>Nilai Perolehan Tahun Lalu</h4>
                                    <input type="number" name="nilai_perolehan_th_lalu" id=""
                                        class="form-control"
                                        placeholder="Rp. {{ number_format($item->nilai_perolehan_th_lalu) }}"
                                        value="{{ $item->nilai_perolehan_th_lalu }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <h4>Mutasi</h4>
                                <span class="form-check-label my-auto">Pilih Tipe Mutasi :</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="mutasi_type{{ $item->id }}"
                                        id="mutasi_plus{{ $item->id }}" value="plus"
                                        onclick="EditMutasiButton(this, {{ $item->id }})">
                                    <label class="form-check-label my-auto" for="mutasi_plus{{ $item->id }}">Mutasi +
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="mutasi_type{{ $item->id }}"
                                        id="mutasi_minus{{ $item->id }}" value="minus"
                                        onclick="EditMutasiButton(this, {{ $item->id }})">
                                    <label class="form-check-label my-auto" for="mutasi_minus{{ $item->id }}">Mutasi
                                        -</label>
                                </div>
                                <input type="number" name="mutasiEdit" id="mutasiEdit{{ $item->id }}"
                                    class="form-control" placeholder="Masukkan jumlah mutasi">
                            </div>

                            <div class="row form-group">
                                <div class="col">
                                    <h4>Akumulasi Penyusutan</h4>
                                    <div class="row">
                                        <div class="col">
                                            <label>Tahun Lalu</label>
                                            <input type="number" name="tahun_lalu" id="" class="form-control"
                                                placeholder="Rp. {{ number_format($item->tahun_lalu) }}"
                                                value="{{ $item->tahun_lalu }}">
                                        </div>
                                        <div class="col">
                                            <label>Tahun Ini</label>
                                            <input type="number" name="tahun_ini" id="" class="form-control"
                                                placeholder="Rp. {{ number_format($item->tahun_ini) }}"
                                                value="{{ $item->tahun_ini }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <h4>Keterangan</h4>
                                <textarea type="text" name="keterangan" id="" class="form-control"
                                    placeholder="{{ $item->keterangan }}">{{ $item->keterangan }}</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endforeach

    <script>
        var myWindow;

        function openWin() {
            myWindow = window.open("{{ url('/cetak-laporan-penilaianhartatetap') }}", "myWindow", "width=200,height=100");
            setTimeout(closeWin, 1000)
        }

        function closeWin() {
            myWindow.close();
        }

        function changeMutasiName(radio) {
            if (radio.checked) {
                console.log('Radio Type = ' + radio.value);
                document.getElementById('mutasi').name = 'mutasi_' + radio.value;
            }
        }

        function EditMutasiButton(radioEdit, itemId) {
            if (radioEdit.checked) {
                console.log('Radio Type = ' + radioEdit.value);
                document.getElementById('mutasiEdit' + itemId).name = 'mutasiEdit_' + radioEdit.value;
            }
        }
    </script>
@endsection
