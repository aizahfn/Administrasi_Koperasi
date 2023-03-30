@extends('arsip\layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ARSIP</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('arsips.create') }}"> Create New arsip</a>
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
            <th>No Dokumen</th>
            <th>Nama Dokumen</th>
            <th>Kategori Dokumen</th>
            <th>Tanggal Dokumen</th>
            <th>Isi Dokumen</th>
            <th>Sumber Dokumen</th>
            <th>Penerima Dokumen</th>
            <th>Status Dokumen</th>
            <th>Aksesibilitas Dokumen</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($arsips as $arsip)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $arsip->image }}" width="100px"></td>
            <td>{{ $arsip->no_dokumen }}</td>
            <td>{{ $arsip->nama_dokumen }}</td>
            <td>{{ $arsip->kategori_dokumen }}</td>
            <td>{{ $arsip->tanggal_dokumen }}</td>
            <td>{{ $arsip->isi_dokumen }}</td>
            <td>{{ $arsip->sumber_dokumen }}</td>
            <td>{{ $arsip->penerima_dokumen }}</td>
            <td>{{ $arsip->status_dokumen }}</td>
            <td>{{ $arsip->aksesibilitas_dokumen }}</td>
            <td>
                <form action="{{ route('arsip\destroy',$arsip->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('arsips.show',$arsip->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('arsips.edit',$arsip->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $arsips->links() !!}
        
@endsection