@extends('layout.main')
@section('title')
@section('content')
<section class="ftco-section ftco-car-details">
    <div class="container-fluid cardetails">
      <div class="container ">
      <div class="row pt-3">
      <div class="col align-item-center text-center heading-section ftco-animate title">
        <h2>BIKE DETAIL'S</h2>
      </div>
    </div>
    
    <div class="card cardetail_">
  <img src="{{asset('storage/images/bikes/'.$bike->gambar)}}" class="card-img-top" alt="...">
  <div class="card-body mx-auto">
      <h1 class="text-center ftco-animate name">{{$bike->name}}</h1>
  <p class="card-text ftco-animate"><span>{{$bike->harga}} K</span> / day</p>
    <div class="row">
    <div class="col-md col-6 d-flex align-self-stretch ms-auto ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon__ d-flex align-items-center justify-content-center"><i class="fa-solid fa-gas-pump"></i></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Fuel
		                	<span>Pertalite</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
        
          <div class="col-md col-6 d-flex align-self-stretch  ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon__ d-flex align-items-center justify-content-center"><i class="fa-solid fa-gear"></i></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Transmition
		                	<span>{{$bike->transmition}}</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          
          <!-- <div class="col-md col-6 d-flex align-self-stretch ms-auto ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon__ d-flex align-items-center justify-content-center"><i class="fa-solid fa-gear"></i></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Mileage
		                	<span>40,000</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div> -->
          <div class="d-grid gap-2 d-md-flex justify-content-center ftco-animate mb-5">
      <button type="button" class="btn btn-outline-primary">RENT NOW! <i class="fa-brands fa-whatsapp"></i></button>
    </div>
          
    </div>
  </div>
</div>
    </section>
          @endsection