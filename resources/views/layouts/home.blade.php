@extends('layouts.master')

@section('content')
<!--JUMBOTRON-->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('/layouts/img/bannerhome.jpeg')}}" class="d-block w-100" alt="..." />
        </div>
    </div>
</div>
<!--END -->

<!-- Content section 1-->
<section id="sectionSatu">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-md-6">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" src="{{asset('/layouts/img/LOGO_SH_FIX.png')}}" alt="..." />
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-5">
                    <h2 class="display-4" style="color:black;">ABOUT US</h2>
                    <p>
                        Youth Organization Platform – a digital platform made as a
                        medium for Indonesian women to discuss about our issues and
                        problems in the society. We manage together to support
                        Indonesian women's voices, opinions, and aspirations in an
                        effort to be heard and accepted in a wider community.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- START ARTICLE -->
<section id="gallery">
    <div class="container">
        <h1 class="text-center font-weight-bold pt-5 pb-3">New Article</h1>
        <div class="row">

            @foreach ($articles as $article)
            <div class="col-md-4 mb-4">
                <div class="card" style="height: 25rem">
                    <img src="{{asset('img-upload/'.$article->picture)}}" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h4 class="card-title">
                            {{$article->topic}}
                        </h4>
                        <p>{{$article->name}} - {{$article->created_at}}</p>
                        <a href="/article/{{$article->id}}">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- END ARTICLE -->




<!-- content section 2-->
<section id="sectionDua">
    <div class="container">
        <div class="embedsocial-hashtag" data-ref="4449ef25218e0b5212d58a17b6dbe86138e1dcb5"></div>
        <script>
        (function(d, s, id) {
            var js;
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://embedsocial.com/cdn/ht.js";
            d.getElementsByTagName("head")[0].appendChild(js);
        }(document, "script", "EmbedSocialHashtagScript"));
        </script>
    </div>
</section>
<!--end-->
@endsection