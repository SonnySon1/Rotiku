{{--  head  --}}
@include('layouts.head')

<body>
    <div class="wrapper">
        @include('layouts.sidebar')

        <div class="main">

            {{--  navbar  --}}
            @include('layouts.navbar')
            {{--  endnavbar  --}}
            <main class="content">
                <div class="row">
                    <div>
                        {{-- {{ route('admin.dataroti.create') }} --}}
                        <a href="" class="btn btn-primary">Tambah Data Quotes</a>
                        <div class="card flex-fill  mt-2">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Daftar Data Quotes</h5>
                            </div>
                            <table class="table table-hover my-0">
                                <thead>
                                    <tr>
                                        <th class="d-none d-xl-table-cell">No</th>
                                        <th class="d-none d-xl-table-cell">Gambar</th>
                                        <th class="d-none d-xl-table-cell">Title</th>
                                        <th class="d-none d-xl-table-cell">Description</th>
                                        <th class="d-none d-md-table-cell">Edit</th>
                                        <th class="d-none d-md-table-cell">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roti as $d)
                                    <tr>

                                            {{-- {{ $d->roti }} --}}
                                            <td class="d-none d-xl-table-cell">1</td>

                                            <td>
                                                {{-- src:  {{ asset('gallery/' . $d->gambar) }} --}}
                                                {{-- alt="{{ $d->roti }} --}}
                                                <img class="img" width="100" height="100"
                                                src="" alt="">
                                            </td>

                                            {{-- {{ $d->title->title }} --}}
                                            <td class="d-none d-xl-table-cell">Judul</td>

                                            {{-- {{ $d->quotes }} --}}
                                            <td class="d-none d-xl-table-cell">Deskripsi</td>
                                                
                                            <td class="d-none d-md-table-cell">
                                                
                                                {{-- {{ route('admin.dataroti.edit', $d->id_roti) }} --}}
                                                <a
                                                    href=""
                                                    class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg></a></td>
                                            <td class="d-none d-md-table-cell">

                                            {{-- {{ route('admin.dataroti.destroy', $d->id_roti) }} --}}
                                                <a href=""
                                                    class="btn btn-danger" id="delete">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

            @include('layouts.footer')
