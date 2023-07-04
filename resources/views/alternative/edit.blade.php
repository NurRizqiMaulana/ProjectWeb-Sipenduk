@extends('template.index')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit alternative</h1>
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
                            <form action="{{route('alternatives.update', $alternative->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nik">NIK :</label>
                                    <div class="input-group">
                                        <input id="nik" type="text" class="form-control" placeholder="e.g. Speed"
                                            name="nik" value="{{ $alternative->nik }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Name :</label>
                                    <div class="input-group">
                                        <input id="nama" type="text" class="form-control" placeholder="e.g. Speed"
                                            name="nama" value="{{ $alternative->nama }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir :</label>
                                    <div class="input-group">
                                        <input id="tempat_lahir" type="text" class="form-control" placeholder="e.g. Speed"
                                            name="tempat_lahir" value="{{ $alternative->tempat_lahir }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir :</label>
                                    <div class="input-group">
                                        <input id="tanggal_lahir" type="text" class="form-control" placeholder="e.g. Speed"
                                            name="tanggal_lahir" value="{{ $alternative->tanggal_lahir }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama :</label>
                                    <div class="input-group">
                                        <input id="agama" type="text" class="form-control" placeholder="e.g. Speed"
                                            name="agama" value="{{ $alternative->agama }}" >
                                    </div>
                                </div>

                               


                                <div class="form-group">
                                    <label for="tanggungan_anak">Tanggungan Anak :</label>
                                    <div class="input-group">
                                        <input id="tanggungan_anak" type="text" class="form-control" placeholder="e.g. Speed"
                                            name="tanggungan_anak" value="{{ $alternative->tanggungan_anak }}" required>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label for="penghasilan"> Penghasilan :</label>
                                    <div class="input-group">
                                        <input id="penghasilan" type="text" class="form-control" placeholder="e.g. Speed"
                                            name="penghasilan" value="{{ $alternative->penghasilan }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="luas_bangunan"> Luas Bangunan :</label>
                                    <div class="input-group">
                                        <input id="luas_bangunan" type="text" class="form-control" placeholder="e.g. Speed"
                                            name="luas_bangunan" value="{{ $alternative->luas_bangunan }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kelistrikan">Kelistrikan Rumah :</label>
                                    <div class="input-group">
                                        <input id="kelistrikan" type="text" class="form-control" placeholder="e.g. Speed"
                                            name="kelistrikan" value="{{ $alternative->kelistrikan }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kendaraan">Jumlah Kendaraan :</label>
                                    <div class="input-group">
                                        <input id="kendaraan" type="text" class="form-control" placeholder="e.g. Speed"
                                            name="kendaraan" value="{{ $alternative->kendaraan }}" required>
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="type">Type :</label>
                                    <select class="form-control" id="type" name="type">
                                        @if ($kriteria->type == "benefit")
                                        <option value="benefit" selected='selected'>Benefit</option>
                                        <option value="cost">Cost</option>
                                        @else
                                        <option value="benefit">Benefit</option>
                                        <option value="cost" selected='selected'>Cost</option>
                                        @endif
                                    </select>
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label for="bobot">Bobot :</label>
                                    <div class="input-group">
                                        <input id="bobot" type="text" class="form-control" placeholder="e.g. 2.5"
                                            name="bobot" value="{{ $kriteria->bobot }}" required>
                                    </div>
                                </div> --}}
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
