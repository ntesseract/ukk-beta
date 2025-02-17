<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Lengkap</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 12px;
        }
        .table th {
            background-color: #f5f5f5;
            font-weight: bold;
        }
        .section-title {
            background-color: #f8f9fa;
            padding: 10px;
            margin: 20px 0;
            font-weight: bold;
            border-left: 4px solid #3b82f6;
        }
        .footer {
            margin-top: 30px;
            text-align: right;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Laporan DataBase SMK N 10 Semarang.</h2>
        <p>Tanggal: {{ date('d/m/Y') }}</p>
    </div>


    <div class="section-title">Data Guru</div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>NIP</th>
                <th>Nama Guru</th>
                <th>Jenis Kelamin</th>
                <th>Kontak</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gurus as $index => $guru)
            <tr>
                <td>{{ $index + 1 }}</td>             
                <td>{{ $guru->nis }}</td>
                <td>{{ $guru->nip }}</td>
                <td>{{ $guru->namaguru }}</td>
                <td>{{ $guru->jeniskelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                <td>{{ $guru->kontak }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <div class="section-title">Data Siswa</div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswas as $index => $siswa)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $siswa->nis }}</td>
                <td>{{ $siswa->namasiswa }}</td>
                <td>{{ $siswa->kelas }}</td>
                <td>{{ $siswa->jeniskelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                <td>{{ $siswa->alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="section-title">Data Produk</div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>NIS</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total Harga</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $index => $product)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $product->id }}</td>
                <td>{{ $product->nis }}</td>
                <td>{{ $product->nama }}</td>
                <td>{{ $product->jumlah }}</td>
                <td>Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($product->harga * $product->jumlah, 0, ',', '.') }}</td>
                <td>{{ date('d/m/Y', strtotime($product->tanggal)) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>Total Data:</p>
        <p>Guru: {{ $gurus->count() }} orang</p>
        <p>Siswa: {{ $siswas->count() }} orang</p>
        <p>Produk: {{ $products->count() }} produk</p>
        <p>Total Nilai Produk: Rp {{ number_format($products->sum(function($product) {
            return $product->harga * $product->jumlah;
        }), 0, ',', '.') }}</p>
        <p>Dicetak pada: {{ date('d/m/Y H:i:s') }}</p>
    </div>
</body>
</html>