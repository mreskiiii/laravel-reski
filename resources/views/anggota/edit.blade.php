<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>
</head>
<body>
    <form action="{{url('anggota/save')}}"method="get">
    @csrf 
        <input type="hidden" name="id" value="{{$query->ID_Anggota}}"/>
        <input type="hidden" name="is_update"value="{{$is_update}}"/>
        NIM : <input type="text" name="NIM" value="{{$query->NIM}}"size='50'maxlength='150'/>
        <br/><br/>
        Nama : <input type="text" name="Nama" value="{{$query->Nama}}"size='50'maxlength='150'/>
        <br/><br/>
        Progdi <select name="Progdi">
            @foreach ($optprogdi as $key => $value)
                @if ($query->Progdi == $key)
                <option value="{{$key}}"selected>{{$value}}</option>
                @else
                <option value="{{$key}}">{{$value}}</option>
                @endif
            @endforeach
        </select>
        <br/><br/><input type="submit"name="btn_simpan"value="simpan"/>
    </form>
</body>
</html>