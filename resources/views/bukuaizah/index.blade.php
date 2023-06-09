@extends('bukuaizah.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>BUKU AIZAH</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('bukuaizah.create') }}"> Create New Buku Aizah</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>IDBuku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Jumlah Stok</th>
            <th>Denda Buku</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($bukuaizahs as $bukuaizah)
        <tr>
            {{-- <td>{{ ++$i }}</td> --}}
            <td>{{ ++$i }}</td>
            <td>{{ $bukuaizah->IDBuku }}</td>
            <td>{{ $bukuaizah->Judul }}</td>
            <td>{{ $bukuaizah->Penulis }}</td>
            <td>{{ $bukuaizah->Penerbit }}</td>
            <td>{{ $bukuaizah->TahunTerbit }}</td>
            <td>{{ $bukuaizah->JumlahStok }}</td>
            <td>{{ $bukuaizah->dendabuku }}</td>
            {{-- <td>
                @foreach ($namapeminjam as $item)
                @if ($item->id === $buku->namapeminjam)
                    {{ $item->nama }}
                @endif
                @endforeach
            </td> --}}
            <td>
                <form action="{{ route('bukuaizah.destroy',$bukuaizah->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('bukuaizah.show',$bukuaizah->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('bukuaizah.edit',$bukuaizah->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $bukuaizahs->links() !!}
        
@endsection