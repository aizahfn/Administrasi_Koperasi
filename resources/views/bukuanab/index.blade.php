@extends('bukuanab.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>BUKU ANAB</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('bukuanab.create') }}"> Create New Buku Ahnaf</a>
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
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Jumlah Stok</th>
            <th>Denda Buku</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($buku_ahnafs as $bukuanab)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $bukuanab->judul }}</td>
            <td>{{ $bukuanab->penulis }}</td>
            <td>{{ $bukuanab->penerbit }}</td>
            <td>{{ $bukuanab->tahunterbit }}</td>
            <td>{{ $bukuanab->jumlahstok }}</td>
            <td>{{ $bukuanab->dendabuku }}</td>
            <td>
                <form action="{{ route('bukuanab.destroy',$bukuanab->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('bukuanab.show',$bukuanab->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('bukuanab.edit',$bukuanab->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $buku_ahnafs->links() !!}
        
@endsection