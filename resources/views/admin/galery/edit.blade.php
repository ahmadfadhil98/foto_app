@extends('home')

@section('title')
	Packages
@endsection

@section('extra-css')

@endsection

@section('index')
    <div class="content">
        <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Tambah Penanggung Jawab</h5>
              </div>
              <div class="card-body">
                <form id="form_validation" method="POST" action="{{ route('galleries.update',$galery->kode_foto) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <input name="_method" type="hidden" value="PUT">
                            <div class="form-line">
                                <label class="form-label">Kode Foto</label>
                                <input type="text" class="form-control @error('kode_foto') is-invalid @enderror" name="kode_foto" value="{{$galery->kode_foto}}" required readonly>
                                @error('kode_foto')
                                    <label id="name-error" class="error" for="kode_foto">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="form-line">
                                <label class="form-label">Nama Paket</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{$galery->nama}}" required>
                                @error('nama')
                                    <label id="name-error" class="error" for="nama">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="form-line">
                                <label class="form-label">Foto Paket</label><br>
                                <img src="{{url('storage/'.$galery->foto)}}" alt="">
                                <input type="file" name="foto" id="foto" class="form-control">
                            </div>
                            
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-script')

@endsection
