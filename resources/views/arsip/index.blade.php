<x-layout bodyClass="g-sidenav-show bg-gray-150">
    <x-navbars.sidebar activePage="user-management"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <div class="container-fluid py-3">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>ARSIP</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('arsips.create') }}">Create New Arsip</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-2">
            <div class="row">
                <div class="col-12">
                    <div class="card my-1">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <div class="card-body px-0 pb-0">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Dokumen</th>
                                                <th>Kategori Dokumen</th>
                                                <th>Tanggal Dokumen</th>
                                                <th>Isi Dokumen</th>
                                                <th>Sumber Dokumen</th>
                                                <th>Penerima Dokumen</th>
                                                <th>Status Dokumen</th>
                                                <th>Aksesibilitas Dokumen</th>
                                                <th width="200px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($arsips as $arsip)
                                                <tr>
                                                    <!-- <td>{{ ++$i }}</td> -->
                                                    <!-- <td><img src="/images/{{ $arsip->image }}" width="100px"></td> -->
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
                                                        <form action="{{ route('arsip.destroy', $arsip->id) }}" method="POST">
                                                            <a class="btn btn-info" href="{{ route('arsip.show', $arsip->id) }}">Show</a>
                                                            <a class="btn btn-primary" href="{{ route('arsip.edit', $arsip->id) }}">Edit</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-plugins></x-plugins>
</x-layout>
