<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $errors)
        <li>{{ $errors }}</li>
        @endforeach
    </ul>
</div>
@endif
    <form action="{{url('buku/save')}}" method="get">
    @csrf 
        <input type="hidden" name="id" value=""/>
        <input type="hidden" name="is_update" value="{{$is_update}}"/>
        judul : <input type="text" name="Judul" value="{{old('Judul')}}" size="50" maxlength="100"/>
        <br/><br/>Pengarang : <input type="text" name="Pengarang" value="{{old('Pengarang')}}" size="50" maxlength="150"/>
        <br/><br/>Kategori : 
        <select type="text" name="Kategori">
            @foreach ($optkategori as $key => $value)
                @if (old('Kategori')==$key)
                <option value="{{$key}}"selected>{{$value}}</option>
                @else
                <option value="{{$key}}">{{ $value }}</option>
                @endif
            @endforeach
        </select>
        <br/><br/><input type="submit" name="btn_simpan" value="Simpan"/>
    </form>
    <br/><a href="{{ url('buku') }}">kembali</a>
</body>
</html>