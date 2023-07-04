@extends('template.index')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-file"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Kriteria</span>
                  <span class="info-box-number">{{$kriteria}}</span>
                  <a href="{{ route('kriterias.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
  
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
  
            
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                  <span class="info-box-icon bg-info elevation-1"><a href="{{ url('penduduk/') }}"><i class="fas fa-users"></i></a></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text">Penduduk</span>
                    <span class="info-box-number">{{$penduduk}}</span>
                    </span>
                    <a href="{{ route('alternatives.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-newspaper" "></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Penilaian</span>
                  <span class="info-box-number">{{$penduduk}}</span>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- ./col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-cart"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Pengguna</span>
                  <span class="info-box-number">{{$pengguna}}</span>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Selamat Datang di Sistem Pendukung Keputusan :)</h3>
                            </div>
                        </div>
                        <div class="card-body">
                          Sistem ini dapat membantu seseorang untuk mengambil keputusan dengan menggunakan Simple Additive Weighting Algorithm.
                            <br> Cara Penggunaan:
                            <ol>
                                <li>Masuk ke menu Kriteria & Bobot untuk menambahkan kriteria keputusan beserta bobotnya (kepentingan kriteria).</li>
                                <li>Kemudian masuk ke menu Alternatif untuk menambahkan alternatif (kandidat) dan memberikan nilai pada masing-masing kriteria.</li>
                                <li>Lalu masuk ke menu Normalisasi Dan Rank untuk melihat hasilnya.</li>
                                
                            </ol>
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
