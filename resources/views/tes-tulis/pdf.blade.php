<html>
    <head>
        <title>Daftar Peserta Ujian Tes Tulis</title>
        <style>
            table {
                border-collapse: collapse;
            }

            table, th, td {
                border: 2px solid black;
                padding: 4px;
            }
        </style>
    </head>
    <body>
        <p style="text-align: center">
            <span style="font-size: 18px; font-weight: bold;">DAFTAR PESERTA UJIAN TES TULIS</span><br/>
            <span style="font-size: 18px; font-weight: bold;"> {{ strtoupper($institusi->nama) }}</span> <br/>
        </p>
        <table width="100%">
            <tr bgcolor="#d3d3d3" style="text-align: center;">
                <td>No.</td>
                <td>No Pendaftaran</td>
                <td>Nama Siswa</td>
                <td>Jurusan 1</td>
                <td>Jurusan 2</td>
            </tr>
            <tr>
            @php $no = 1; @endphp
            @foreach($pendaftaran as $key => $value)
                <td>{{ $no }}</td>
                <td>{{ $value->no_pendaftaran }}</td>
                <td>{{ $value->siswa->nama }}</td>
                <td>{{ $value->jurusan_1_label  }}</td>
                <td>{{ $value->jurusan_2_label  }}</td>
                @php $no++; @endphp
            @endforeach
            </tr>
        </table>
    </body>
</html>