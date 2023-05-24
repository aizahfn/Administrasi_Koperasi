<div class="card-body px-0 pb-2">
    <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th
                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        ID
                    </th>
                    <th
                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Nama Lengkap</th>
                    <th
                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                        No. Telepon</th>
                    <th
                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Email</th>
                    <th
                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Password</th>
                    <th
                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Alamat
                    </th>
                    {{-- <th class="text-secondary opacity-7"></th> --}}
                    <th
                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Jenis Kelamin
                    </th>
                    <th
                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Tanggal Lahir
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($user as $users)
                                    <tr>
                                        <td>{{ $users->id }}</td>
                                        <td>{{ $users->role }}</td>
                                        <td>{{ $users->nama_lengkap }}</td>
                                        <td>{{ $users->no_telp }}</td>
                                        <td>{{ $users->jabatan }}</td>
                                        <td>{{ $users->email }}</td>
                                        <td>{{ $users->password }}</td>
                                        <td>{{ $users->alamat }}</td>
                                        <td>{{ $users->jenis_kelamin }}</td>
                                        <td>{{ $users->tanggal_lahir }}</td>
                                        <td>
                                            <a href="{{ route('user.edit', $users->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            <form action="{{ route('user.destroy', $users->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="11">
                                            <div class="alert alert-danger">
                                                Data users belum Tersedia.
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                {{-- <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="mb-0 text-sm">1</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img src="{{ asset('assets') }}/img/team-2.jpg"
                                    class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                            </div>

                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">John</h6>

                        </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs text-secondary mb-0">john@creative-tim.com
                        </p>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Admin</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">22/03/18</span>
                    </td>
                    <td class="align-middle">
                        <a rel="tooltip" class="btn btn-success btn-link"
                            href="" data-original-title=""
                            title="">
                            <i class="material-icons">edit</i>
                            <div class="ripple-container"></div>
                        </a>

                        <button type="button" class="btn btn-danger btn-link"
                        data-original-title="" title="">
                        <i class="material-icons">close</i>
                        <div class="ripple-container"></div>
                    </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="mb-0 text-sm">2</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img src="{{ asset('assets') }}/img/team-3.jpg"
                                    class="avatar avatar-sm me-3 border-radius-lg" alt="user2">
                            </div>

                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Alexa</h6>

                        </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs text-secondary mb-0">
                            alexa@creative-tim.com</p>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Creator</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">16/06/18</span>
                    </td>
                    <td class="align-middle">
                        <a rel="tooltip" class="btn btn-success btn-link"
                        href="" data-original-title=""
                        title="">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                    </a>
                     <button type="button" class="btn btn-danger btn-link"
                            data-original-title="" title="">
                            <i class="material-icons">close</i>
                            <div class="ripple-container"></div>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="mb-0 text-sm">3</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img src="{{ asset('assets') }}/img/team-4.jpg"
                                    class="avatar avatar-sm me-3 border-radius-lg" alt="user3">
                            </div>

                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Laurent</h6>

                        </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs text-secondary mb-0">
                            laurent@creative-tim.com</p>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Member</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">30/06/18</span>
                    </td>
                    <td class="align-middle">
                        <a rel="tooltip" class="btn btn-success btn-link"
                            href="" data-original-title=""
                            title="">
                            <i class="material-icons">edit</i>
                            <div class="ripple-container"></div>
                        </a>
                        <button type="button" class="btn btn-danger btn-link"
                        data-original-title="" title="">
                        <i class="material-icons">close</i>
                        <div class="ripple-container"></div>
                    </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="mb-0 text-sm">4</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img src="{{ asset('assets') }}/img/team-3.jpg"
                                    class="avatar avatar-sm me-3 border-radius-lg" alt="user4">
                            </div>

                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Michael</h6>
                        </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs text-secondary mb-0">
                            michael@creative-tim.com</p>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Member</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">16/06/19</span>
                    </td>
                    <td class="align-middle">
                        <a rel="tooltip" class="btn btn-success btn-link"
                            href="" data-original-title=""
                            title="">
                            <i class="material-icons">edit</i>
                            <div class="ripple-container"></div>
                        </a>
                        <button type="button" class="btn btn-danger btn-link"
                        data-original-title="" title="">
                        <i class="material-icons">close</i>
                        <div class="ripple-container"></div>
                    </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="mb-0 text-sm">5</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img src="{{ asset('assets') }}/img/team-2.jpg"
                                    class="avatar avatar-sm me-3 border-radius-lg" alt="user5">
                            </div>

                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Richard</h6>
                        </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs text-secondary mb-0">
                            richard@creative-tim.com</p>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Creator</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">16/06/18</span>
                    </td>
                    <td class="align-middle">
                        <a rel="tooltip" class="btn btn-success btn-link"
                            href="" data-original-title=""
                            title="">
                            <i class="material-icons">edit</i>
                            <div class="ripple-container"></div>
                        </a>
                        <button type="button" class="btn btn-danger btn-link"
                        data-original-title="" title="">
                        <i class="material-icons">close</i>
                        <div class="ripple-container"></div>
                    </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="mb-0 text-sm">6</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img src="{{ asset('assets') }}/img/team-4.jpg"
                                    class="avatar avatar-sm me-3 border-radius-lg" alt="user6">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Miriam</h6>
                        </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs text-secondary mb-0">
                            miriam@creative-tim.com</p>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Creator</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">26/06/18</span>
                    </td>
                    <td class="align-middle">
                        <a rel="tooltip" class="btn btn-success btn-link"
                            href="" data-original-title=""
                            title="">
                            <i class="material-icons">edit</i>
                            <div class="ripple-container"></div>
                        </a>
                        <button type="button" class="btn btn-danger btn-link"
                            data-original-title="" title="">
                            <i class="material-icons">close</i>
                            <div class="ripple-container"></div>
                        </button>
                    </td>
                </tr> --}}
            </tbody>
        </table>
    </div>
</div>
