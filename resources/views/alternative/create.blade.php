@extends('template.index')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add new alternative</h1>
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
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{route('alternatives.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nik">NIK :</label>
                                    <div class="input-group">
                                        <input id="nik" type="text" class="form-control"
                                            placeholder="Someone or Something" name="nik" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama :</label>
                                    <div class="input-group">
                                        <input id="nama" type="text" class="form-control"
                                            placeholder="Someone or Something" name="nama" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Tempat Lahir">Tempat Lahir :</label>
                                    <div class="input-group">
                                        <input id="tempat_lahir" type="text" class="form-control"
                                            placeholder="Someone or Something" name="tempat_lahir" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Tanggal Lahir">Tanggal Lahir :</label>
                                    <div class="input-group">
                                        <input id="tanggal_lahir" type="date" class="form-control"
                                            placeholder="Someone or Something" name="tanggal_lahir" required>
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="Jenis Kelamin">Jenis Kelamin :</label>
                                    <div class="input-group">
                                        <input id="jk" type="text" class="form-control"
                                            placeholder="Someone or Something" name="jk" required>
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label for="Jenis Kelamin">Jenis Kelamin :</label>
                                    <select class="form-control" id="jk" name="jk">
                                        <option value="laki-laki">Laki-Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Agama">Agama :</label>
                                    <div class="input-group">
                                        <input id="agama" type="text" class="form-control"
                                            placeholder="Someone or Something" name="agama" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tanggungan">Tanggungan Anak :</label>
                                    <div class="input-group">
                                        <input id="tanggungan" type="text" class="form-control"
                                            placeholder="Someone or Something" name="tanggungan" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="penghasilan">Penghasilan :</label>
                                    <div class="input-group">
                                        <input id="a" type="text" class="form-control"
                                            placeholder="Someone or Something" name="penghasilan" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="luas_bangunan">Luas Bangunan :</label>
                                    <div class="input-group">
                                        <input id="luas_bangunan" type="text" class="form-control"
                                            placeholder="Someone or Something" name="luas_bangunan" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kelistrikan">Kelistrikan Rumah :</label>
                                    <div class="input-group">
                                        <input id="kelistrikan" type="text" class="form-control"
                                            placeholder="Someone or Something" name="kelistrikan" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kendaraan">Jumlah Kendaraan :</label>
                                    <div class="input-group">
                                        <input id="kendaraan" type="text" class="form-control"
                                            placeholder="Someone or Something" name="kendaraan" required>
                                    </div>
                                </div>
                                {{-- @foreach ($kriteria as $cw)
                                <div class="form-group">
                                    <label for="criteria[{{$cw->id}}]">{{$cw->nama}} :</label>
                                    <select class="form-control" id="criteria[{{$cw->id}}]"
                                        name="criteria[{{$cw->id}}]">
                                        <!--
                                        @php
                                            $res = $subkriteria->where('id_kriteria', $cw->id)->all();
                                        @endphp
                                        -->
                                        @foreach ($res as $cr)
                                        <option value="{{$cr->id}}">{{$cr->nama_crips}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @endforeach --}}
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
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
