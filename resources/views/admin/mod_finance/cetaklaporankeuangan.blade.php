<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Laporan Keuangan KPRI Tunas Kencana</title>
    <style type="text/css">
        /* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            font-size: 6pt;
        }

        * {
            box-sizing: border-box;
        }

        .page {
            margin: 0;
            padding: 20mm;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .subpage {
            padding: .2cm;
            border: 1px #F8F8FF solid;
            height: 257mm;
            outline: 2.5cm #FFFFFF solid;
        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {

            html,
            body {
                width: 297mm;
                /* Lebarnya menjadi 297mm */
                height: 210mm;
                /* Tingginya menjadi 210mm */
            }

            .page {
                size: portrait;
                /* Ubah ke landscape */
                margin: 0;
                padding: 20mm;
                border: initial;
                border-radius: initial;
                box-shadow: initial;
                background: initial;
            }
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 6pt;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #000;
        }

        th,
        td {
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
            text-align: center;
        }

        .footer {
            text-align: left;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="book">
        <div class="page">
            <div class="subpage">
                <img src="koptuken.png" width="100%">
                <h2 style="color:black; font-family: Arial, sans-serif; text-transform: uppercase;" align="center">
                    Laporan Keuangan KPRI Tunas Kencana</h2>
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
                <div class="footer">
                    <p>Cirebon, {{ date('d F Y') }}</p>
                    <p><br><br><br></p>
                    <p>(__________________)</p>
                    <p>Koperasi</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
