<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <!-- Tombol tambah data -->
    <div style="margin-bottom: 15px;">
        <a href="/mahasiswa/create">
            <button>Tambah Data</button>
        </a>
    </div>

    <table border="1" cellpadding="10">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>

        @foreach ($data as $m)
        <tr>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->nim }}</td>
            <td>{{ $m->jurusan }}</td>

            <td>
                <a href="/mahasiswa/edit/{{ $m->id }}">Edit</a>

                |

                <a href="/mahasiswa/delete/{{ $m->id }}"
                   onclick="return confirm('Yakin ingin hapus data?')">
                   Hapus
                </a>
            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>