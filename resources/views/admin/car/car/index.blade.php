@extends('admin.layouts.main')
@section('title')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mobil</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <div class="container-fluid">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <a  href="{{ route('car.car.create') }}"><button type="submit" class="btn btn-primary">Tambah Data +</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Nama Mobil</th>
                      <th>Kategori</th>
                      <th>Harga</th>
                      <th>Fuel</th>
                      <th style="width: 10px">Transmition</th>
                      <th style="width: 10px">Seat</th>
                      <th>Keterangan</th>
                      <th>Gambar</th>
                      <th>Rent</th>
                      <th>Aksi</th>
                      <th>Available</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=0; ?>
                    
                    @foreach ($car as $row)
                    <?php  $i++; ?>
                    <?php $bg=($i%2==0?'#E1E5EA':'white'); ?>
                    <tr style="background-color: <?php echo $bg; ?>; border-style: solid; border-width: 1px;">
                      <td>{{$row->nama}}</td>
                      <td>{{$row->tipe_mobil}}</td>
                      <td>{{$row->harga}}</td>
                      <td>{{$row->fuel}}</td>
                      <td>{{$row->transmition}}</td>
                      <td>{{$row->seat}}</td>
                      <td>{{$row->keterangan}}</td>
                      <td>{{$row->gambar}}</td>
                      <td>{{$row->rent}}</td>

                      <td>
                        <form action="{{ route('car.car.delete', $row->id) }}"
                            method="GET"
                            onsubmit="return confirm('Apakah anda yakin menghapus data ini?')">
                            @csrf
                            @method('delete')
                            <a class="btn btn-sm btn-info"
                                href="{{ route('car.car.edit', $row->id) }}"><i
                                    class="far fa-edit"></i> Edit</a>
                            <button type="submit" class="btn btn-sm btn-outline-danger"><i
                                    class="far fa-trash-alt"></i> Hapus</button>
                        </form>
                      </td>
                      <td>
                        <?php if ($row->rent == 'no') : ?>
                            <a id="btn-{{$row->id}}" class="btn btn-warning" href="{{route ('car.car.rented', $row->id)}}">Available</a>
                        <?php else : ?>
                            <a id="btn-{{$row->id}}" class="btn btn-danger" href="{{route ('car.car.available', $row->id)}}">Rented</a>
                        <?php endif; ?>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
      </div>
</div>

@endsection
