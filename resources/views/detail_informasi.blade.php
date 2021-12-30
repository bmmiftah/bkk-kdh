@extends('layouts.main1')

@section('container')

<div class="container lowongan align-item-center my-5 p-0">

    <div class="card shadow-sm">
     
        <article class="m-md-2">
            <div class="container">
                <div class="row py-5 px-0 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-10 col-xl-10">
                        <div class="header-informasi">

                            <h1 class="section-heading text-center">{{ $detail_informasi->title_informasi }}</h1>

                        </div>
                        
                        <br> <hr> <br>

                        <div class="body-informasi">

                            <p>{!! $detail_informasi->isi_informasi !!}</p>

                        </div>
                        

                    </div>
                </div>
            </div>
        </article>

    </div>
 
 </div>


@endsection