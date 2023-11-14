@extends('layouts.main')

@section('content')
 <h1>TOP 5 Perusahaan Terbesar Di Dunia</h1>

 <table class="table">
    <thead>
        <tr>
            <th scope="col">Nomor</th>
            <th scope="col">Nama</th>
            <th scope="col">Nilai Asset</th>
            <th scope="col">Pencipta</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach ($inter as $key => $item)
        <th scope="row">{{$key + 1 }}</th>
            <td>{{$item['nama']}}</td>
            <td>{{$item['nilai_aset']}}</td>
            <td>{{$item['pencipta']}}</td>
            <td class="text-center">
              <a href='international/{{ $item->id }}' class="btn btn-info btn-sm"><i class="fas fa-info"></i></a>
          </td>
        </tr>
        @endforeach
            
    </tbody>
</table>

  
@endsection