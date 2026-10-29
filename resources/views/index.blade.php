<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>

    <form action="/mahasiswa" method="POST">
        @csrf
        <p>
            <label>Nama</label><br>
            <input type="text" name="nama" required>
        </p>
        <p>
            <label>Jenis Kelamin</label><br>
            <select name="jenis_kelamin" required>
                <option value="">-- Pilih --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </p>
        <p>
            <label>Alamat</label><br>
            <textarea name="alamat" required></textarea>
        </p>
        <p>
            <label>No HP</label><br>
            <input type="text" name="no_hp" required>
        </p>
        <button type="submit">Simpan</button>
    </form>

    <h2>Data Mahasiswa</h2>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
        @foreach ($mahasiswa as $m)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->jenis_kelamin }}</td>
            <td>{{ $m->alamat }}</td>
            <td>{{ $m->no_hp }}</td>
            <td>
                <a href="/mahasiswa/{{ $m->id }}/edit">Edit</a>
                <form action="/mahasiswa/{{ $m->id }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Hapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
