@extends('admin.layouts.main')
@section('title')
@section('content')



  <!-- /.navbar -->
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <a href="{{ route('admin.bike.index') }}" class="nav-link">
            <h1>Edit Data Bike </h1>
</a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">


            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="{{ route('admin.bike.update', $bike->id )}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                    <label for="exampleInputEmail1">Nama Motor</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nama Motor" value="{{ $bike->name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="number" name="harga" class="form-control" id="exampleInputEmail1" placeholder="100000" value="{{ $bike->harga }}">
                  </div>
                <div class="form-group">
                  <label>Bahan Bakar</label>
                  <select name="fuel" class="form-control select2" style="width: 100%;">
                  <option selected>{{ $bike->fuel }}</option>
                    <option value="Premium">Premium</option>
                    <option value="Pertalite">Pertalite</option>
                    <option value="Pertamax">Pertamax</option>
                    <option value="Pertamax Turbo">Pertamax Turbo</option>>
                  </select>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label for="tipe_mobil">Tipe Motor</label>
                    <select class="form-control" id="tipe_motor" name="tipe_motor">
                        <option value="" selected disabled>{{ $bike->tipe_motor }}</option>
                        @foreach ($bike_type as $bike_types)
                        <option>{{$bike_types->tipe_motor}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label>Transmisi</label>
                  <select name="transmition" class="form-control select2" style="width: 100%;">
                  <option selected>{{ $bike->transmition }}</option>
                    <option value="manual">manual</option>
                    <option value="automatic">automatic</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea name="keterangan" class="form-control" id="exampleInputEmail1" placeholder="Mobil" rows="3">
                     {{ old('keterangan') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Gambar Motor</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gambar" class="form-control" id="gambar"
                          accept="image/png,image/jpeg,image/jpg" value="{{ $bike->gambar }}">
                      </div>
                    </div>
                  </div>
              </div>
              <div class="mx-auto">
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <a class="btn btn-danger" href="{{ route('admin.bike.index') }}">cancel</a>
            </div>
              </form>
            </div>
              <!-- /.col -->
            </div>

              <!-- /.card-body -->
            </div>

            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
