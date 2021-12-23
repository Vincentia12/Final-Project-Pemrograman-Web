@extends('layouts.master')

@section('content')
    <!-- SEARCH -->
    {{-- <div class="container">
      <form action="/" method="GET" class="form">
        <input
          type="search"
          placeholder="Search Article"
          class="search-field"
        />
        <button type="submit" class="search-button">
          <img src="{{asset('/layouts/img/loupe.png')}}" />
        </button>
      </form>
    </div> --}}
    <!-- AKHIR SEARCH -->

    <!-- ARTIKEL -->
    <div class="container text-right">
      
        {{-- <div class="row ">
          <form action="/article/search" method="get" class="form d-flex justify-content-end">
            <input type="search" placeholder="Search Article" class="search-field" name="search" />
            <button type="submit" class="search-button">
              <img src="{{asset('/layouts/img/loupe.png')}}" />
            </button>
          </form>
        </div> --}}

        <div class="row">
          <div class="col-12 mt-5">
            <div class="owl-carousel owl-theme">
              @foreach ($carousels as $carousel)
              <div class="item text-center" style="width:100%">
                <a href="/article/{{$carousel->id}}">
                  <img src="{{asset('img-upload/'.$carousel->picture)}}" class="d-block w-100"alt="..." />
                </a>
                  <div class="carousel-caption">
                    <h1 style="background: rgba(0,0,0, .2)">
                      {{$carousel->topic}}
                    </h1>
                    <h5>{{$carousel->created_at}}</h5>
                  </div>
              </div>
              @endforeach 
            </div>
          </div>
        </div>  
    
        
      <!-- akhir artikel carousel-->

      <!-- NEW ARTICLE -->

      <h2 class="text-center font-weight-bold m-5">New Article</h2>

      <div class="allcard">
        <div class="row mx-auto text-center">

          @foreach ($articles as $key=>$article)
          <div class="card ms-3 me-3 mt-4" style="width: 18rem" href="/article/{{$article->id}}">
            <img src="{{asset('img-upload/'.$article->picture)}}" class="card-img-top" alt="..." />
            <div class="card-body">
              <h4 class="card-title">
                {{$article->topic}}
              </h4>
              <h5>{{$article->name}} - {{$article->created_at}}</h5>
              <a href="/article/{{$article->id}}"
                >Read More <i class="bi bi-arrow-right"></i
              ></a>
            </div>
          </div>
          @endforeach 

        </div>
      </div>
      

      <!-- akhir card artikel-->

      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center pt-5">
          {{$articles->links()}}
        </ul>
      </nav>
    </div>
@endsection