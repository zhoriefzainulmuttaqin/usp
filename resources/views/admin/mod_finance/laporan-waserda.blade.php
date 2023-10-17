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
                            Tambah Laporan Waserda
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
                                    <th>Keterangan</th>
                                    <th>Bulan</th>
                                    <th>Deposit</th>
                                    <th>Warkop</th>
                                    <th>Pulsa</th>
                                    <th>Kueh Titipan</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->keterangan }}</td>
                                        <td>{{ $item->bulan }}</td>
                                        <td>Rp. {{ number_format($item->deposit) }}</td>
                                        <td>Rp. {{ number_format($item->warkop) }}</td>
                                        <td>Rp. {{ number_format($item->pulsa) }}</td>
                                        <td>Rp. {{ number_format($item->kueh_titipan) }}</td>
                                        <td>Rp. {{ number_format($item->jumlah) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="3">Rugi Laba</th>
                                    <th id="deposit">Rp. {{ number_format($item->sum('deposit')) }}</th>
                                    <th id="warkop">Rp. {{ number_format($item->sum('warkop')) }}</th>
                                    <th id="pulsa">Rp. {{ number_format($item->sum('pulsa')) }}</th>
                                    <th id="kueh">Rp. {{ number_format($item->sum('kueh_titipan')) }}</th>
                                    <th id="totalSum">Rp. 0</th>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <th>Jumlah Penjualan Terdiri : </th>
                                    <td>Penjualan Tunai</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Rp. 1.000.000</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Penjualan Kredit</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Rp. 1.000.000</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ asset('tambah-laporanwaserda') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Laporan Waserda</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>Keterangan</h4>
                        <input type="text" name="keterangan" id="" class="form-control"
                            placeholder="Masukkan Keterangan">
                        <div class="row">
                            <div class="col">
                                <h4 class="mt-3">Deposit</h4>
                                <input type="number" name="deposit" id="" class="form-control"
                                    placeholder="Masukkan Jumlah Deposit">
                            </div>
                            <div class="col">
                                <h4 class="mt-3">Warkop</h4>
                                <input type="number" name="warkop" id="" class="form-control"
                                    placeholder="Masukkan Warkop">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4 class="mt-3">Pulsa</h4>
                                <input type="number" name="pulsa" id="" class="form-control"
                                    placeholder="Masukkan Pulsa">
                                <h4 class="mt-3">Kueh Titipan</h4>
                                <input type="number" name="kueh_titipan" id="" class="form-control"
                                    placeholder="Masukkan Kueh Titipan">
                            </div>
                        </div>
                        <h4 class="mt-3">Bulan</h4>
                        <select name="bulan" id="" class="form-control">
                            <option selected disabled>Pilih Bulan</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to update the total sum
            function updateTotalSum() {
                // Get the values from the respective columns and sum them
                var deposit = parseFloat(removeRp($("#deposit").text()));
                var warkop = parseFloat(removeRp($("#warkop").text()));
                var pulsa = parseFloat(removeRp($("#pulsa").text()));
                var kuehTitipan = parseFloat(removeRp($("#kueh").text()));

                // Calculate the total sum
                var totalSum = deposit + warkop + pulsa + kuehTitipan;

                // Update the total sum in the HTML
                document.getElementById("totalSum").textContent = "Rp. " + totalSum.toFixed(0).replace(
                    /\d(?=(\d{3})+$)/g, "$&,"); // Format the total sum
            }

            // Initial update when the page loads
            updateTotalSum();

            // Helper function to remove "Rp." and convert to float
            function removeRp(value) {
                return parseFloat(value.replace("Rp. ", "").replace(",", ""));
            }
        });
    </script>
@endsection
