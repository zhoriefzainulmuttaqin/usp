<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Report Order | PDF</title>

    <style>
        .title {
            /* display: grid; */
            /* place-items: center; */
        }

        .invoice-box {
            max-width: 100%;
            margin: auto;
            /* padding: 30px; */
            /* border: 1px solid #eee; */
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.15); */
            font-size: 8px;
            /* line-height: 24px; */
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
            border: none;
            width: 100%;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            /* padding-bottom: 20px; */
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            /* line-height: 45px; */
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
            display: grid;
            text-align: center;

        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: none;
            font-weight: bold;
            text-align: center;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
            text-align: center;
        }

        .invoice-box table tr.item td {
            border-bottom: none;
        }

        .invoice-box table tr.item.last td {
            border: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            /* border-top: 2px solid #eee; */
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }
/*
        .invoice-box.rtl table {
            text-align: right;
        } */

        /* .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        } */

        .bawah {
        border: 1px solid black;
        margin: auto;
        width: 100%;
    }
    </style>
</head>

<body onload="window.print();">
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title" style="display: flex; align-items: center; justify-content: center; text-align: center; margin-right: 30px;">
                                <img src="{{ asset('tunas.png') }}" style="width: 50px; height: 50px" />
                                <div>
                                    <h1 style="font-size: 16px; font-weight: 900;">KPRI TUNAS KENCANA DINAS PPKB3A <br>
                                   KABUPATEN CIREBON </h1>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="text-decoration: underline; align-items: center; justify-content: center; text-align: center; font-size: 8px;">
                               Bukti Pembayaran Bulan Mei 2023
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table cellpadding="0" cellspacing="0" border="0" style="border-color: #ffff;">
            <tr class="heading"  >
                <td style="text-align: left;">Sudah diterima dari a/n :</td>
                <td>46</td>
                <td>1995</td>
            </tr>
            <tr class="heading">
                <td style="text-align: left;">Nomor / Th menjadi anggota</td>
                <td style="font-weight: bold;">Dede Aries L</td>
                <td></td>
            </tr>
            <tr class="heading">
                <td style="text-align: left;">Uang Sejumlah</td>
                <td> __________________________</td>
                <td style="font-weight: bold;">Rp5.437.700</td>
            </tr>
            <tr class="heading">
                <td style="text-align: left;">Untuk Pembayaran :</td>
            </tr>
            <tr class="heading">
                <td style="text-align: left;">- Simpanan Wajib</td>
                <td style="font-weight: bold;">Rp5.437.700</td>
            </tr>
            </tr>
            <tr class="heading">
                <td style="text-align: left;">- Tabungan Sekolah</td>
                <td style="font-weight: bold;">Rp5.437.700</td>
            </tr>
            </tr>
            <tr class="heading">
                <td style="text-align: left;">- Angsuran USP</td>
                <td style="font-weight: bold;">Rp5.437.700</td>
            </tr>
            </tr>
            <tr class="heading">
                <td style="text-align: left;">- Partisipasi Pembiayaan</td>
                <td style="font-weight: bold;">Rp5.437.700</td>
            </tr>
            </tr>
            <tr class="heading">
                <td style="text-align: left;">- Ke</td>
                <td style="font-weight: bold;"></td>
            </tr>
            </tr>
            <tr class="heading">
                <td style="text-align: left;">- Tabungan Manasuka</td>
                <td style="font-weight: bold;">Rp5.437.700</td>
            </tr>
            </tr>
            <tr class="heading">
                <td style="text-align: left;">- Warkop</td>
                <td style="font-weight: bold;">Rp5.437.700</td>
            </tr>
            </tr>
            <tr class="heading">
                <td style="text-align: left;">- Simpanan Wajib</td>
                <td style="font-weight: bold;">Rp5.437.700</td>
            </tr>
            </tr>
            <tr class="heading">
                <td style="text-align: left;">- Simpanan Wajib</td>
                <td style="font-weight: bold;">Rp5.437.700</td>
            </tr>
            </tr>
            <tr class="heading">
                <td style="text-align: left;">- Angs. Konsiyansi Warkop</td>
                <td style="font-weight: bold;">Rp5.437.700</td>
            </tr>
            </tr>
            <tr class="heading">
                <td style="text-align: left;">- Angsuran Motor/SIM</td>
                <td style="font-weight: bold;">Rp5.437.700</td>
            </tr>
            <tr class="heading">
                <td style="text-align: left;">- Dana Sosial & Pensiun</td>
                <td style="font-weight: bold;">Rp5.437.700</td>
            </tr>
            <tr class="heading">
                <td style="text-align: left;">- Asuransi Generally</td>
                <td style="font-weight: bold;">Rp5.437.700</td>
            </tr>
            <tr class="heading">
                <td></td>
                <td style="text-align: right;">Sumber,</td>
                <td style="font-weight: bold; text-align: left;">12 Mei 2023</td>
            </tr>
            <tr class="">
                <td></td>
                <td style=""></td>
                <td style="font-weight: bold; text-align: center;">Yang menerima</td>
            </tr>
            <tr class="">
                <td></td>
                <td style=""></td>
                <td style="font-weight: bold; text-align: center;">ttd</td>
            </tr>
            <tr class="">
                <td></td>
                <td style=""></td>
                <td style="font-weight: bold; text-align: center;">Bendahara</td>
            </tr>
        </table>
        <table>
            <tr class="heading">
                <td style="text-align: left; text-decoration: underline;">Keterangan</td>
                <td>Jumlah Simpanan & Hak = </td>
                <td style="font-weight: bold;">Rp45.782.026</td>
            </tr>
        </table>
        <table class="bawah">
            <tr>
            <th>Jml Kewajiban</th>
            <th>motor,sim,wrk</th>
            <th>USP</th>
            <th>KW</th>
        </tr>
        <tr>
            <td>Saldo bln lalu</td>
            <td>34.000</td>
            <td>74.468.500</td>
            <td style="text-align: right;">-</td>
        </tr>
        <tr>
            <td>Saldo bln lalu</td>
            <td>34.000</td>
            <td>74.468.500</td>
            <td style="text-align: right;">-</td>
        </tr>
        <tr>
            <td>Saldo bln lalu</td>
            <td>34.000</td>
            <td>74.468.500</td>
            <td style="text-align: right;">-</td>
        </tr>
        <tr>
            <td>Saldo bln lalu</td>
            <td>34.000</td>
            <td>74.468.500</td>
            <td style="text-align: right;">-</td>
        </tr>
        </table>

    </div>



</body>

</html>
