<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Laporan Piutang Unit Photocopy</title>
    <style type="text/css">
        /* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            font-size: 8pt;
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
                width: 210mm;
                height: 297mm;
            }

            .page {
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
            font-size: 8pt;
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
                    Laporan Piutang Unit Photocopy</h2>
                <table>
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
                            <th colspan="1">Rp.{{ number_format($piutangfc->sum('jumlah_sd_bulan_ini')) }}</th>
                            <th></th>
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
