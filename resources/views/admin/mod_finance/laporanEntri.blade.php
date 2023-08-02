<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Cetak Jurnal Umum</title>
</head>
<style type="text/css">
    /* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        font: 10pt "Tahoma";
    }

    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }

    .page {
        /* width: 230mm; */
        min-height: 297mm;
        /* padding: 20mm; */
        /* margin: 10mm auto; */
        margin-right: 1rem;
        margin-left: 1rem;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;

        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .subpage {
        padding: .2 cm;
        border: 1px #F8F8FF solid;
        height: 257mm;
        outline: 2.5cm #FFFFFF solid;
    }

    @page {
        size: A4;
        /* margin: 0; */
    }

    @media print {

        html,
        body {
            /* width: 200mm;
            height: 297mm; */
        }

        .page {
            margin: 0;
            margin-right: 1rem;
            margin-left: 1rem;
            border: initial;
            border-radius: initial;
            /* width: fit-content; */
            /* min-height: initial; */
            box-shadow: initial;
            background: initial;
            /* page-break-after: always; */
        }
    }

    .table,
    th,
    tr,
    td {
        /* padding-left: 2px; */
        margin-right: 2rem;
        border-collapse: collapse;
        border: 1px solid black;
        border-width: 1px;
        bg-color: black;
    }
</style>

<body>
    <div class="book">
        <div class="page">
            <div class="subpage">
                <img src="{{ asset('koptuken.png') }}" width="100%">
                <h3 style="color:black; font-family: sans;" align="center">LAPORAN ENTRI</h3>
                {{-- <p>Tanggal cetak : {{ date('d F Y', strtotime($awal)) }} &nbsp s.d
                    {{ date('d F Y', strtotime($akhir)) }} </p> --}}
                <div id="outtable">
                    <div class="table-responsive">
                        <table class="table" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun Menjadi Anggota</th>
                                    <th>Nama anggota</th>
                                    <th>Simpanan Wajib</th>
                                    <th>Simpanan Pokok</th>
                                    <th>Simpanan Awal</th>
                                    <th>Simpanan Bulan Ini</th>
                                    <th>Simpanan Akhir</th>
                                    <th>Jumlah</th>
                                    <th>Saldo Awal Pinjaman</th>
                                    <th>Pemberian Pinjaman</th>
                                    <th>Angsuran Pinjaman Pokok</th>
                                    <th>Angsuran Pinjaman Partisipasi</th>
                                    <th>Saldo Akhir Pinjaman</th>
                                    <th>Jumlah Partisipasi Bulan Ini</th>
                                    <th>Jumlah Partisipasi Bulan Lalu</th>
                                    <th>Jumlah Partisipasi s/d Bulan Ini</th>
                                    <th>Tanggal Pinjaman USP</th>
                                    <th>Potongan Angsuran Bulan Depan</th>
                                    <th>Potongan Partisipasi 1% Bulan Depan</th>
                                    <th>Potongan (Ke) bulan ini</th>
                                    <th>Potongan (Ke) bulan lalu </th>
                                    <th>Saldo Pinjaman s/d Bulan Depan</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataEntri as $data)
                                    {{-- @if ($anggotaData->id == $data->anggota_id) --}}
                                    @php
                                        $simp_akhir = $data->sw_awal + $data->sw_bulan_ini;

                                        $jumlah_simpanan = $data->simpanan_pokok + $simp_akhir;

                                        $saldo_akhir_pinjaman = $data->saldo_awal_pinjaman + $data->pemberian_pinjaman - $data->angs_pinjaman_pokok;

                                        $jumlah_partisipasi_bulan_sd_bulan_ini = $data->jml_partisipasi_bulan_ini + $data->jml_partisipasi_bulan_lalu;

                                        $potongan_partisipasi = $saldo_akhir_pinjaman * 0.01;

                                        $saldo_pinjaman_sd_bulan_depan = $saldo_akhir_pinjaman - $data->potongan_angsuran;
                                    @endphp
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->anggota->tgl_masuk }}</td>
                                        <td>{{ $data->anggota->nama_anggota }}</td>
                                        <td>{{ $data->simpanan_wajib }}</td>
                                        <td>{{ $data->simpanan_pokok }}</td>
                                        <td>{{ $data->sw_awal }}</td>
                                        <td>{{ $data->sw_bulan_ini }}</td>
                                        <td>{{ $simp_akhir }}</td> {{-- simpanan akhir --}}
                                        <td>{{ $jumlah_simpanan }}</td>
                                        {{-- simpanan pokok + simpanan akhir (jumlah) --}}
                                        <td>{{ $data->saldo_awal_pinjaman }}</td>
                                        <td>{{ $data->pemberian_pinjaman }}</td>
                                        <td>{{ $data->angs_pinjaman_pokok }}</td>
                                        <td>{{ $data->angs_pinjaman_partisipasi }}</td>
                                        <td>{{ $saldo_akhir_pinjaman }}
                                        </td> {{-- saldo akhir pinjaman --}}
                                        <td>{{ $data->angs_pinjaman_partisipasi }}</td> {{-- jumlah partisipasi bulan ini --}}
                                        <td>{{ $data->jml_partisipasi_bulan_lalu }}</td>
                                        <td>{{ $jumlah_partisipasi_bulan_sd_bulan_ini }}</td>
                                        {{-- jumlah partisipasi s/d bulan ini --}}
                                        <td></td>
                                        <td>{{ $data->potongan_angsuran }}</td>
                                        <td>{{ $potongan_partisipasi }}
                                        </td> {{-- partisipasi 1% --}}
                                        <td>{{ $data->potongan_ke_bulan_lalu }}</td>
                                        <td>{{ $data->potongan_ke_bulan_ini }}</td>
                                        <td>{{ $saldo_pinjaman_sd_bulan_depan }}
                                        </td>
                                @endforeach
                            </tbody>
                        </table>



                    </div>

                    <p>Cirebon, {{ date('d F Y') }} </p><br><br><br>
                    <p>(__________________)<br> &nbsp &nbsp Koperasi<br></p>

                </div>
            </div>
        </div>

        <script>
            window.print();
        </script>

    </div>
</body>

</html>
