@extends('layout')
@section('content')



<header class="masthead2">
    <div class="ps-4 pt-4" >
        <form method="post">

            <div class="card gri bg-transparent text-secondary " style="width: 28rem;">
                <div class="card-body">

                @foreach ($result as $row)
                <h6 class="card-subtitle mb-2  fs-1 fw-bold text-muted">{{$row->name}}</h6>
                <p class="card-text fw-bold">{{$row->bio}}</p>

                </div>
            </div>
                <div class="d-grid gap-2 d-md-block pt-4 mb-4">
                    <a href="/modositas" class="btn btn-outline-dark btn-secondary  px-5 py-3 fs-6 fw-bolder me-md-2">Profil Módosítás</a>
                </div>
            </div>

                <div class="col-md-8 ps-4 text-secondary">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab">



                            <div>
                                <div class="row">
                                    <div class="col-md-3 fw-bold fs-5">
                                        <label>Email:</label>
                                    </div>
                                    <div class="col-md-6 fw-bold">
                                        <p>{{$row->email}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 fw-bold fs-5">
                                        <label>Telefonszám:</label>
                                    </div>
                                    <div class="col-md-6 fw-bold">
                                        <p>{{$row->telszam}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 fw-bold fs-5">
                                        <label>Kedvenc Ételed:</label>
                                    </div>
                                    <div class="col-md-6 fw-bold">
                                        <p>{{$row->kedvetel}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 fw-bold fs-5">
                                        <label>Játékstílus:</label>
                                    </div>
                                    <div class="col-md-6 fw-bold">
                                        <p>{{$row->gender == 'm' ? 'Előretörő' : 'Biztonságos'}}</p>
                                    </div>
                                </div>


                            @endforeach





                        </div>
                    </div>
                </div>


            </div>
            <div class="text-center">
                <h1 class="text-secondary">Egy gameplay videó a játékunkról</h1>
                <video  autoplay  muted loop class="" width="700" height="400">
                    <source src="{{asset('assets/Video/zombivideo.mp4')}}" type="video/mp4">


                </video>
            </div>
        </form>
    </div>


</header>
@endsection
