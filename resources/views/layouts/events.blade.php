@extends('layouts.master')

@section('content')
<!-- Events -->

<section class="container" style="width: 90%; margin: 100px auto; text-align: center">
    <h4 class="mb-5"><strong>UPCOMING EVENTS</strong></h4>

    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="{{asset('/layouts/img/oprecsister.jpeg')}}" class="img-fluid" />
                </div>
                <div class="card-body">
                    <h4 class="card-title">Open Recruitment Sisterhoods</h4>
                    <p class="card-text">
                    </p>
                    <a href="/eventin" class="btn btn-primary" style="margin-top: 20px">Sign Up</a>
                </div>
            </div>
        </div>


    </div>
</section>

<!-- Last Events -->

<section class="container" style="width: 90%; margin: 100px auto; text-align: center">
    <h4 class="mb-5"><strong>OUR PAST EVENTS</strong></h4>

    <div class="row">

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="{{asset('/layouts/img/womenxfashioncamp.jpg')}}" class="img-fluid" />
                </div>
                <div class="card-body">
                    <h4 class="card-title">WomenXFashion : "Old But Gold"</h4>
                    <p class="card-text">
                        A campaign to encourage sisters to cultivate a culture of thrift shopping.
                    </p>
                    <a class="btn btn-primary" style="margin-top: 20px">Highlight Event</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="{{asset('/layouts/img/thriftshop.jpg')}}" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Open Booth Thrift Shop Owners</h4>
                    <p class="card-text">
                        Come and join us at Women X Fashion Campaign to promote your thrift shop🥳
                    </p>
                    <a class="btn btn-primary" style="margin-top: 20px">Highlight Event</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection