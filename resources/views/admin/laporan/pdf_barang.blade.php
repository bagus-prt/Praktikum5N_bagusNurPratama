<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Barang</title>
</head>

<body>
    <h1>laporan barang Gudang</h1>
    <table width="100%" cellpadding="10" cellspacing="0" border=1>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Stok</th>
        </tr>

        @foreach ($data as $key => $item)
        <tr>
            <td align="center">{{$key + 1}}</td>
            <td align="center">{{$item->kode}}</td>
            <td align="center">{{$item->nama}}</td>
            <td align="center">{{$item->stok}}</td>
        </tr>
        @endforeach
    </table>
    <br><br>
    <table width="100%">
        <tr>
            <td></td>
            <td width="300px" align="center">
                Banjarmasin, {{ date('d F Y') }}<br>
                Admin Gudang<br><br><br><br>
                <u><b>Bagus Nur Pratama</b></u>
            </td>
        </tr>
    </table>
</body>

</html>