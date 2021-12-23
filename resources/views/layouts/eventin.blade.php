@extends('layouts.master')

@section('content')
<!-- Events -->

<section class="container" style="width: 90%; margin: 100px auto; text-align: center">

    <img src="{{asset('/layouts/img/oprecsister.jpeg')}}" class="" style="width: 60%;" />


    <ol class="list-group list-group-numbered" style="padding-top: 80px;">
        <h3 class="card-title">TIMELINE TEAM RECRUITMENT :</h3>
        <li class="list-group-item" style="background-color: #f59cb4">Registration : 12 December 2021 - 19 December 2021
        </li>
        <li class="list-group-item" style="background-color: #ccd6ee">Interview phase : 20 December 2021 - 23 December
            2021</li>
        <li class="list-group-item" style="background-color: #fcf6bd">Announcement : 25 December 2021</li>
    </ol>



    <ul class="list-group" style="padding-top: 80px;">

        <li class="list-group-item">
            <h4 class="divisi">GENERAL REQUIREMENTS :</h4>
            <div class="divisi">
                <p>
                    - Girls only, age 13-21 years old <br>
                    - Responsible and hard-worker <br>
                    - Fluent in English and Bahasa <br>
                    - Able to work in teams <br>
                    - Open to constructive criticism and inputs <br>
                    - Committed to your responsibility as long as you’re a part of
                    Sisterhoods.idn’s team <br>
                </p>
            </div>

        </li>
    </ul>




    <ul class="list-group">
        <h4 class="mb-5" style="margin-top: 80px"><strong>POSITIONS REQUIREMENTS :</strong></h4>

        <div class="row">

            <div class="col-lg-12 col-md-12 mb-4">
                <div class="card" style="height: 26rem; background-color: #ccd6ee;">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">IT</h4>
                        <p class="card-text">
                        <h5>
                            Frontend Dev : (Able using HTML, CSS, JS, using Framework Bootstrap & Library, point plus
                            can use react js/angular js ) <br>
                            Backend Dev : ( Able using framework bootstrap, using Laravel, PHP, MYSQL or other
                            databases) <br>
                        </h5>
                        <h5>Able to develop the Sisterhoods Website.</h5>
                        <h5>Fluent in speaking Bahasa and English.</h5>
                        <h5>Willing to work on other projects that require coding.</h5>
                        <h5>Have some portfolios about last project have been done.</h5>
                        <h5>Able to work with other member.</h5>
                        <h5>Have some good ideas to develop also promote Sisterhoods web.</h5>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </ul>
    <a href="https://forms.gle/C79wEWtcptFcVC3S7" target="_blank" class="btn btn-danger" style="margin-top: 20px">Apply
        Now</a>



    </div>
    </div>
</section>

<!-- Last Events -->

<section class="container" style="width: 90%; margin: 100px auto; text-align: center;">
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
                    <a target="_blank" class="btn btn-primary" style="margin-top: 20px">Highlight Event</a>
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
                    <a target="_blank" class="btn btn-primary" style="margin-top: 20px">Highlight Event</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection