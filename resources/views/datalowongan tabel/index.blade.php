@extends('datalowongan.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Lowongan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('datalowongan.create') }}"> Create New Lowongan</a>
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
            <th>No</th>
            <th>Gambar</th>
            <th>Lowongan</th>
            <th>Batas Akhir</th>
            <th>Jumlah Yang Dibutuhkan</th>
            <th>Deskripsi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($datalowongan as $lowongan)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $lowongan->image }}" width="100px"></td>
            <td>{{ $lowongan->nama_lowongan }}</td>
            <td>{{ $lowongan->tanggal_lowongan }}</td>
            <td>{{ $lowongan->jumlah_lowongan }}</td>
            <td>{{ $lowongan->deskripsi_lowongan }}</td>
            <td>
                <form action="{{ route('datalowongan.destroy',$lowongan->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('datalowongan.show',$lowongan->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('datalowongan.edit',$lowongan->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $datalowongan->links() !!}
        
@endsection