<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota</title>
</head>
<body>
    <a href="{{url('anggota/add')}}">Tambah Anggota</a><br/><br/>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Progdi</th>
            <th>Aksi</th>
        </tr>
    @php
        $no=0;
    @endphp
    @foreach($query as $row)
        @php
            $no++;
        @endphp
        <tr>
            <td>{{$no}}</td>
            <td>{{$row['NIM']}}</td>
            <td>{{$row['Nama']}}</td>
            <td>{{$row['Progdi']}}</td>
            <td><a href={{ url('anggota/edit/'.$row['ID_Anggota']) }} >Edit</a>
                <a href={{ url('anggota/delete/'.$row['ID_Anggota']) }}
                onclick="return confirm('Yakin?')">Delete</a>
            </td>
        </tr>
    @endforeach
    </table>
    <p>{{$query->links('vendor.pagination.mypage')}}</p>
    <a href="{{url('')}}">HOME</a>
</body>
</html>