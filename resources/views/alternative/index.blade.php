@extends('template.index')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Alternative & Score</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            <a href="{{route('alternatives.create')}}" class='btn btn-primary'> <span
                                    class='fa fa-plus'></span> Add Alternative</a>
                            <br>
                            <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="example1" style="font-size: 14px;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        <th>Tanggungan Anak</th>
                                        
                                        <th>Penghasilan</th>
                                        <th>Luas Bangunan(m2)</th>
                                        <th>Kelistrikan Rumah</th>
                                        <th>Jumlah Kendaraan</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alternative as $a)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $a->nik}}</td>
                                        <td>{{ $a->nama}}</td>
                                        <td>{{ $a->tempat_lahir}}</td>
                                        <td>{{ $a->tanggal_lahir}}</td>
                                        <td>{{ $a->jk}}</td>
                                        <td>{{ $a->agama}}</td>
                                        <td>{{ $a->tanggungan_anak}}</td>
                                        
                                        <td>{{ $a->penghasilan}}</td>
                                        <td>{{ $a->luas_bangunan}}</td>
                                        <td>{{ $a->kelistrikan}}</td>
                                        <td>{{ $a->kendaraan}}</td>
                                        
                        
                                        <td>

                                            
                                            <form action="{{ route('alternatives.destroy',$a->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <span data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                                                    <a href="{{ route('alternatives.edit',$a->id) }}"
                                                        class="btn btn-primary"><span class="fa fa-edit"></span>
                                                    </a>
                                                </span>
                                                <span data-toggle="tooltip" data-placement="bottom" title="Delete Data">
                                                    <button type="submit" class="btn btn-danger">
                                                        <span class="fa fa-trash-alt"></span>
                                                    </button>
                                                </span>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col-md-6 -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('script')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()

        $('#mytable').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

</script>
@endsection
