<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Laporan Penilaian Harta Tetap KPRI Tunas Kencana</title>
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
                    Laporan Penilaian Harta Tetap KPRI Tunas Kencana</h2>
                <table id="basic-datatables" class="display table table-striped table-hover">
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
                                <td>{{ $item->keterangan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3">Jumlah</th>
                            <th>Rp.{{ number_format($item->sum('nilai_perolehan_th_lalu')) }}</th>
                            <th>Rp.{{ number_format($item->sum('mutasi_plus')) }}</th>
                            <th>Rp.{{ number_format($item->sum('mutasi_minus')) }}</th>
                            <th>Rp.{{ number_format($item->sum('nilai_perolehan_th_ini')) }}</th>
                            <th>Rp.{{ number_format($item->sum('tahun_lalu')) }}</th>
                            <th>Rp.{{ number_format($item->sum('tahun_ini')) }}</th>
                            <th>Rp.{{ number_format($item->sum('sd_tahun_ini')) }}</th>
                            <th colspan="2">Rp.{{ number_format($item->sum('nilai_buku_tahun_ini')) }}</th>
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
