@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Transaksi</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <br>
    @if(Auth::user()->level == 'admin')
    <div class="col-lg-2">
      <a href="{{ route('transaksi.create') }}" class="btn btn-outline-primary btn-block"><i class="fa fa-plus"></i> Tambah Transaksi</a>
    </div>
    <br>
    @endif

    <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table text-nowrap">
                  <thead>
                    <tr>
                      <th>Kode Transaksi</th>
                      <th>Nama Anggota</th>
                      <th>Nama Buku</th>
                      <th>Tanggal Pinjam</th>
                      <th>Tanggal Kembali</th>
                      <th>Status</th>
                      {{-- @if(Auth::user()->level == 'admin')
                      <th>Action</th>
                      @endif --}}
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($datas as $data)
                                <tr>
                                  <td class="py-1">
                                    {{$data->kode_transaksi}}
                                  </td>
                                  <td> 
                                    {{$data->anggota->nama}}
                                  </td>
                                  <td>
                                    {{$data->buku->judul}}
                                  </td>
                                  <td>
                                    {{date('d/m/y', strtotime($data->tgl_pinjam))}}
                                  </td>
                                  <td>
                                    {{date('d/m/y', strtotime($data->tgl_kembali))}}
                                  </td>
                                  <td>
                                    @if($data->status == 'pinjam')
                                        <label class="badge badge-warning">Pinjam</label>
                                    @else
                                        <label class="badge badge-success">Kembali</label>
                                    @endif
                                  </td>
                                  {{-- <td>
                                    @if(Auth::user()->level == 'admin')
                                    <div class="btn-group">
                                      <a class="dropdown-item"  href="{{route('transaksi.show', $data->id)}}">
                                        <button type="button" class="btn btn-info">Detail</button>
                                      </a>
                                      <a class="dropdown-item"  href="{{route('transak.edit', $data->id)}}">
                                        <button type="button" class="btn btn-success">Edit</button>
                                      </a>
                                      <a class="dropdown-item">
                                        <form action="{{ route('anggota.destroy', $data->id) }}" class="pull-left"  method="post">
                                          {{ csrf_field() }}
                                          {{ method_field('delete') }}
                                        </form>
                                        <button type="button" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                          Delete
                                        </button>
                                      </a>
                                    </div>
                                    @endif
                                  </td> --}}
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