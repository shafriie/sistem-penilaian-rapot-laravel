@extends('Layout/layout')


@section('title','Sistem Penilaian Raport')

@section('page-header','Add Kelas')

@section('content')

<form action="{{ url('kelas/insert') }}" method="POST">
{{ csrf_field() }}
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="nama_kelas">Nama Kelas</label>
        <input required type="text" id="nama_kelas" name="nama_kelas" class="form-control" placeholder="Nama Kelas" autofocus>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="wali_kelas">Wali Kelas</label>
        <input required type="text" id="wali_kelas" name="wali_kelas" class="form-control" placeholder="Wali Kelas">
      </div>
    </div>

  </div>
  
  <div class="form-group">
    <button class="btn mybutton btn-sm" type="submit"><i class="fa fa-save"></i> Save</button>
    <button class="btn mybutton btn-sm" onclick="location.href='{{ url('kelas') }}'" type="button"><i class="fa fa-caret-square-o-left"></i> Back</button>
  </div>

</form>

@endsection