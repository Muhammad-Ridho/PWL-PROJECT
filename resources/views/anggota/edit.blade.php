@extends('layouts.app')

@section('content')

<div class="content">
    <div class="row justify-content-center">
        <section class="content">
            <div class="container-fluid">
                    <h2>Edit Data Anggota</h2>
            </div>
        </section>
    </div>
</div>

<div class="content">
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-7">
                <section class="content">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama :</label>
              
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-at"></i></span>
                                  </div>
                                  <input type="text" class="form-control" data-mask placeholder="Masukkan Nama">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label>NIM :</label>
              
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-paperclip"></i></span>
                                  </div>
                                  <input type="text" class="form-control" data-mask disabled placeholder="NIM">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Tempat Lahir :</label>
              
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                  </div>
                                  <input type="text" class="form-control" data-mask placeholder="Masukkan Kota Lahir">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Tanggal Lahir:</label>
              
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-mask placeholder="dd/mm/yyyy">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label>Jenis Kelamin :</label>
              
                                <div class="input-group">
                                    <select class="form-control select2" >
                                        <option selected="selected">Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label>Program Studi :</label>
              
                                <div class="input-group">
                                  <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">D-4 Teknik Informatika</option>
                                    <option>D-3 Manajemen Informatika</option>
                                  </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ URL::previous() }}">
                                <button type="submit" class="btn btn-success btn-block">Simpan</button>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

@endsection