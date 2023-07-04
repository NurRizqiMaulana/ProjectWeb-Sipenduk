@extends('template.index')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Kriteria</h1>
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
                            <form action="{{route('kriterias.update', $kriteria->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="kode">Kode :</label>
                                    <div class="input-group">
                                        <input id="kode" type="text" class="form-control" placeholder="e.g. Speed"
                                            name="kode" value="{{ $kriteria->kode }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama :</label>
                                    <div class="input-group">
                                        <input id="nama" type="text" class="form-control" placeholder="e.g. Speed"
                                            name="nama" value="{{ $kriteria->nama }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
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
                                </div>
                                <div class="form-group">
                                    <label for="bobot">Bobot :</label>
                                    <div class="input-group">
                                        <input id="bobot" type="text" class="form-control" placeholder="e.g. 2.5"
                                            name="bobot" value="{{ $kriteria->bobot }}" required>
                                    </div>
                                </div>
                                
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
