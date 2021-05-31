@extends('layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->

<div class="col-lg-2">
    <a href="{{ route('anggota.create') }}" class="btn btn-outline-primary btn-block"><i class="fa fa-plus"></i> Tambah Anggota</a>
</div>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Anggota</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <!-- SEARCH FORM -->
                <form class="form-inline ml-0 ml-md-3">
                    <div class="input-group input-group-sm">
                      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                      <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                </form>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Prodi</th>
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($datas as $data)
                        <tr>
                          <td class="py-1">
                          {{-- @if($data->user->gambar)
                            <img src="{{url('images/user', $data->user->gambar)}}" alt="image" style="margin-right: 10px;" />
                          @else
                            <img src="{{url('images/user/default.png')}}" alt="image" style="margin-right: 10px;" />
                          @endif --}}
                            {{$data->nama}}
                          </td>
                          <td> 
                            {{$data->nim}}
                          </a>
                          </td>
                          <td>
                            @if($data->prodi == 'TI')
                                Teknik Informatika
                            @elseif($data->prodi == 'MI')
                                Manajemen Informatika
                            @else
                                Teknik Sipil
                            @endif
                          </td>
                          <td>
                            {{$data->jk === "L" ? "Laki - Laki" : "Perempuan"}}
                          </td>
                          <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">Action</button>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                  <a class="dropdown-item"  href="{{route('anggota.show', $data->id)}}">Show</a><a>
                                  <a class="dropdown-item" href="{{route('anggota.edit', $data->id)}}">Edit</a>
                                  <a class="dropdown-item" href="#">
                                      Delete
                                      <form action="{{ route('anggota.destroy', $data->id) }}" class="pull-left"  method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                  </a>
                                </div>
                              </div>
                          </td>
                        </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
</div>

@endsection