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
                            Tambah Laporan Keuangan
                        </button>
                        <a onclick="openWin()" target="_blank" href="{{ asset('cetaklaporankeuangan') }}" id="export-button"
                            class="btn btn-primary text-white">
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
                            <!-- Bagian header tabel -->
                            <thead>
                                <tr>
                                    <th>Keterangan</th>
                                    @php
                                        $bulanMap = [
                                            '01' => 'Januari',
                                            '02' => 'Februari',
                                            '03' => 'Maret',
                                            '04' => 'April',
                                            '05' => 'Mei',
                                            '06' => 'Juni',
                                            '07' => 'Juli',
                                            '08' => 'Agustus',
                                            '09' => 'September',
                                            '10' => 'Oktober',
                                            '11' => 'November',
                                            '12' => 'Desember',
                                        ];
                                    @endphp
                                    @foreach ($bulanMap as $bulanInggris => $bulanIndonesia)
                                        <th>{{ $bulanIndonesia }}</th>
                                    @endforeach
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <!-- Bagian body tabel -->

                            @php
                                $uniqueEntries = $laporanKeuangan->unique('keterangan', 'tahun');
                            @endphp
                            <tbody>
                                @foreach ($uniqueEntries as $entry)
                                    <tr>
                                        <td>{{ $entry->keterangan }}</td>
                                        @foreach ($bulanMap as $bulanInggris => $bulanIndonesia)
                                            @php
                                                // Ambil data jumlah berdasarkan bulan, tahun, dan keterangan yang sama
                                                $jumlah = $laporanKeuangan
                                                    ->where('bulan', $bulanInggris)
                                                    ->where('tahun', $entry->tahun)
                                                    ->where('keterangan', $entry->keterangan)
                                                    ->sum('jumlah');
                                            @endphp
                                            @if ($jumlah == 0)
                                                <td>-</td>
                                            @else
                                                <td>Rp.{{ number_format($jumlah) }}</td>
                                            @endif
                                        @endforeach
                                        <td class="d-flex">
                                            <button type="button" title="" class="btn btn-link btn-primary btn-lg"
                                                data-toggle="modal" data-target="#simpanananggota{{ $entry->id }}"><i
                                                    class="fa fa-edit"></i>
                                            </button>
                                            <a href="{{ asset('/hapus-laporankeuangan/' . $entry->id) }}" type="button"
                                                data-toggle="tooltip" title="" class="btn btn-link btn-danger mt-2"
                                                data-original-title="Remove" <?php echo "onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\" "; ?>>
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <!-- Bagian footer tabel -->
                            <tfoot>
                                <tr>
                                    <th>Jumlah</th>
                                    @foreach ($bulanMap as $bulanAngka => $bulanIndonesia)
                                        @php
                                            // Ambil total jumlah berdasarkan bulan
                                            $total = $laporanKeuangan->where('bulan', $bulanAngka)->sum('jumlah');
                                        @endphp
                                        <th>Rp.{{ number_format($total) }}</th>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th>Jumlah Beban</th>
                                    @foreach ($bulanMap as $bulanAngka => $bulanIndonesia)
                                        @php
                                            // Ambil total jumlah berdasarkan bulan, kecuali untuk keterangan "Belanja"
                                            $total = $laporanKeuangan
                                                ->where('bulan', $bulanAngka)
                                                ->where('keterangan', '!=', 'Belanja') // Exclude keterangan "Belanja"
                                                ->sum('jumlah');
                                        @endphp
                                        <th>Rp.{{ number_format($total) }}</th>
                                    @endforeach
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ asset('tambah-laporankeuangan') }}" method="post">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Laporan Keuangan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>Bulan</h4>
                        <input type="hidden" name="tahun" id="tahunInput" class="form-control">
                        <select name="bulan" class="form-select form-control" id="">
                            <option value="" selected disabled>-- Pilih Bulan --</option>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>

                        <h4>Keterangan</h4>
                        <textarea type="text" name="keterangan" id="" class="form-control"
                            placeholder="Masukkan keterangan laporan keuangan"></textarea>
                        <h4>Jumlah</h4>
                        <input type="number" name="jumlah" id="" class="form-control"
                            placeholder="Masukkan jumlah laporan keuangan" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @foreach ($laporanKeuangan as $item)
        <form action="{{ asset('edit-piutangunitphotocopy') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="simpanananggota{{ $item->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Laporan Keuangan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h4>Bulan</h4>
                            <input type="hidden" name="tahun" id="tahunInput" class="form-control">
                            @php
                                $bulanMap = [
                                    '01' => 'Januari',
                                    '02' => 'Februari',
                                    '03' => 'Maret',
                                    '04' => 'April',
                                    '05' => 'Mei',
                                    '06' => 'Juni',
                                    '07' => 'Juli',
                                    '08' => 'Agustus',
                                    '09' => 'September',
                                    '10' => 'Oktober',
                                    '11' => 'November',
                                    '12' => 'Desember',
                                ];
                            @endphp
                            <select name="bulan" class="form-select form-control" id="">
                                <option value="" selected disabled>-- {{ $bulanMap[$item->bulan] }} --</option>
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>

                            <h4>Keterangan</h4>
                            <textarea type="text" name="keterangan" id="" class="form-control"
                                placeholder="{{ $item->keterangan }}"> {{ $item->keterangan }}</textarea>
                            <h4>Jumlah</h4>
                            <input type="number" name="jumlah" id="" class="form-control"
                                placeholder="{{ $item->jumlah }}" value="{{ $item->jumlah }}" />
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
        // get current year
        function getCurrentYear() {
            const d = new Date();
            let year = d.getFullYear();
            document.getElementById("tahunInput").value = year; // Mengisi nilai input dengan tahun saat ini
        }

        // Panggil fungsi saat halaman dimuat
        window.onload = getCurrentYear;
    </script>

    <script>
        var myWindow;

        function openWin() {
            myWindow = window.open("{{ url('/cetaklaporankeuangan') }}", "myWindow", "width=200,height=100");
            setTimeout(closeWin, 1000)
        }

        function closeWin() {
            myWindow.close();
        }
    </script>
@endsection
