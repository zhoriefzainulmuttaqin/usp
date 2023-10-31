<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Laporan Waserda KPRI Tunas Kencana</title>
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
                        @foreach ($laporanwaserda as $item)
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
                            <th id="deposit" style="display:none;">{{ $laporanwaserda->sum('deposit') }}</th>
                            <th id="warkop" style="display:none;">{{ $laporanwaserda->sum('warkop') }}</th>
                            <th id="pulsa" style="display:none;">{{ $laporanwaserda->sum('pulsa') }}</th>
                            <th id="kueh" style="display:none;">{{ $laporanwaserda->sum('kueh_titipan') }}</th>

                            <th>Rp. {{ number_format($laporanwaserda->sum('deposit')) }}</th>
                            <th>Rp. {{ number_format($laporanwaserda->sum('warkop')) }}</th>
                            <th>Rp. {{ number_format($laporanwaserda->sum('pulsa')) }}</th>
                            <th>Rp. {{ number_format($laporanwaserda->sum('kueh_titipan')) }}</th>
                            <th>Rp. {{ number_format($totalSum) }}</th>
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
