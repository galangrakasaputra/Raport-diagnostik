@extends('guru.template.main')
@section('content')
  <div class="container py-4">
    <h1 class="h3 mb-2" style="color: #682773;">Selamat Datang,</h1>
 <h5 class="h5 mb-2 text-gray-800">{{ auth()->user()->nama }}</h5>
 <hr>
    <div class="card-deck-wrapper">
        <div class="card-deck">
            <div class="card p-2">
                <a class="card-block stretched-link text-decoration-none" href="/guru/mapel_komponen/{{auth()->user()->kode_mapel}}/komponen">
                    <center><h4 class="card-title"><i class="fa fa-th-list" aria-hidden="true"></i></h4>
                    <p class="card-text">Komponen</p></center>
                </a>
            </div>
            <div class="card p-2">
                <a class="card-block stretched-link text-decoration-none" href="/guru/kelas_siswa">
                     <center><h4 class="card-title"><i class="fa-solid fa-award"></i></h4>
                    <p class="card-text">Penilaian</p></center>
                </a>
            </div>
            <div class="card p-2">
                <a class="card-block stretched-link text-decoration-none" href="/guru/aktivitas">
                     <center><h4 class="card-title"><i class="fa fa-users"></i></h4>
                    <p class="card-text">Aktivitas</p></center>
                </a>
            </div>
        </div>
    </div>
      <center><img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('template/img/undraw_educator_re_ju47 (1).svg')}}" alt="ilustrasi"></center> 
</div>
                 

@endsection