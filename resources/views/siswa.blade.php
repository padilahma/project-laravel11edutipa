<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">📋 Data Siswa</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
            </tr>
        </thead>
        <tbody>
            @forelse($siswas as $siswa)
                <tr>
                    <td>{{ $siswa->id }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa->kelas }}</td>
                    <td>{{ $siswa->alamat }}</td>
                    <td>{{ $siswa->tanggal_lahir }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data siswa</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>
