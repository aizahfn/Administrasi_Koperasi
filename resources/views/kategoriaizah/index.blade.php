@extends('kategoriaizah.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>KATEGORI AIZAH</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kategoriaizah.create') }}"> Create New Kategori</a>
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
            <th>IDKategori</th>
            <th>NamaKategori</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kategoriaizahs as $kategoriaizah)
        <tr>
            {{-- <td>{{ ++$i }}</td> --}}
            <td>{{ ++$i }}</td>
            <td>{{ $kategoriaizah->IDKategori }}</td>
            <td>{{ $kategoriaizah->NamaKategori }}</td>
            <td>
                <form action="{{ route('kategoriaizah.destroy',$kategoriaizah->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('kategoriaizah.show',$kategoriaizah->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('kategoriaizah.edit',$kategoriaizah->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $kategoriaizahs->links() !!}
        
@endsection