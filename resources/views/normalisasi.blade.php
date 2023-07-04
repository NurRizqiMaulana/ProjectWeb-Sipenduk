@extends('template.index')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Normalisasi</h1>
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
                            <table id="mytable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Tanggungan Anak</th>
                                        
                                        <th>Penghasilan</th>
                                        <th>Luas Bangunan</th>
                                        <th>Kelistrikan Rumah</th>
                                        <th>Jumlah Kendaraan</th>
                                        {{-- @foreach ($criteria as $c)
                                        <th>{{$c->nama}}</th>
                                        @endforeach --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alternatif as $i => $a)
                                    <tr>
                                        <td>{{ $i+1 }}</td>
                                        <td>{{$a["nama"]}}</td>
                                        <td>{{$a["tanggungan_anak"]}}</td>
                                        
                                        <td>{{$a["penghasilan"]}}</td>
                                        <td>{{$a["luas_bangunan"]}}</td>
                                        <td>{{$a["kelistrikan"]}}</td>
                                        <td>{{$a["kendaraan"]}}</td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
