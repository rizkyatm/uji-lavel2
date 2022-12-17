@extends('layouts.tamplate')

@section('title', 'Edit Data Siswa')

@section('content')
<div class="col-9" style="margin: 0 auto">
    <div class="card">
        <div class="table-responsive">
            <div class="card-body">
                <h4 class="card-title">EDIT DATA SISWA</h4>
                <form action="/updatedatasiswa/{{$data->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12" >
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Siswa" value="{{$data->nama}}">
                                </div>
                                <div class="form-group">
                                    <label>Foto Profil</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" value="{{'fotosiswa/'.$data->foto}}" name="foto" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label"  for="inputGroupFile01">{{'fotosiswa/'.$data->foto}}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Kelas</label>
                                    <select name="kelas" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                        <option selected>{{$data->kelas}}</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nisn</label>
                                    <input type="number"  name="nisn" class="form-control" placeholder="Masukan Nomor Nisn" value="{{$data->nisn}}">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Jenis Kelamin</label>
                                    <select name="jeniskelamin" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                        <option selected>{{$data->jeniskelamin}}</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Handphone</label>
                                    <input type="number" name="notlp" class="form-control" placeholder="Masukan Nomor Handphone" value="{{$data->notlp}}">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Jurusan</label>
                                    <select name="jurusan" class="custom-select mr-sm-2" id="jurusan">
                                        <option selected>{{$data->jurusan}}</option>
                                        <option value="TJKT">TJKT</option>
                                        <option value="PPLG">PPLG</option>
                                        <option value="ANIMASI">ANIMASI</option>
                                        <option value="BROADCASTING">BROADCASTING</option>
                                        <option value="TE">TE</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Masukan Alamat Email" value="{{$data->email}}">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control" placeholder="Masukan Password" value="{{$data->password}}">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Wali Kelas</label>
                                    <select name="guru_id" id="guru_id" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                        <option value="{{$data->guru->id}}" hidden>{{$data->guru->namaguru}}</option>
                                       @foreach ($nmguru as $guru)
                                       <option value="{{$guru->id}}">{{$guru->namaguru}}</option>  
                                       @endforeach
                                    </select>
                                </div>
                            
                            </div>
                           
                        </div>
                       
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-dark">Reset</button>
                            </div>
                        </div>
                    </div>
                   
                   
                </form>
            </div>
        </div>
    </div>
</div>
@endsection