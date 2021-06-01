@extends('layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<br>
<div class="col-lg-2">
    <a href="{{ route('anggota.create') }}" class="btn btn-outline-primary btn-block"><i class="fa fa-plus"></i> Tambah Anggota</a>
</div>
<br>
<!-- RESPONSIVE HOVER TABLE -->
<div class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Master Anggota</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table text-nowrap">
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
                              {{$data->prodi}}
                            </td>
                            <td>
                              {{$data->jk === "L" ? "Laki - Laki" : "Perempuan"}}
                            </td>
                            <td>
                              <div class="btn-group">
                                <a class="dropdown-item"  href="{{route('anggota.show', $data->id)}}">
                                  <button type="button" class="btn btn-info">Detail</button>
                                </a>
                                <a class="dropdown-item"  href="{{route('anggota.edit', $data->id)}}">
                                  <button type="button" class="btn btn-success">Edit</button>
                                </a>
                                <a class="dropdown-item"  href="{{route('anggota.show', $data->id)}}">
                                  <form action="{{ route('anggota.destroy', $data->id) }}" class="pull-left"  method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                  </form>
                                  <button type="button" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                    Delete
                                  </button>
                                </a>
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

@endsection