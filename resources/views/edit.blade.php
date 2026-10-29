<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>

    <form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST">
        @csrf
        @method('PUT')
        <p>
            <label>Nama</label><br>
            <input type="text" name="nama" value="{{ $mahasiswa->nama }}" required>
        </p>
        <p>
            <label>Jenis Kelamin</label><br>
            <select name="jenis_kelamin" required>
                <option value="Laki-laki" {{ $mahasiswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $mahasiswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </p>
        <p>
            <label>Alamat</label><br>
            <textarea name="alamat" required>{{ $mahasiswa->alamat }}</textarea>
        </p>
        <p>
            <label>No HP</label><br>
            <input type="text" name="no_hp" value="{{ $mahasiswa->no_hp }}" required>
        </p>
        <button type="submit">Update</button>
        <a href="/mahasiswa">Kembali</a>
    </form>
</body>
</html>