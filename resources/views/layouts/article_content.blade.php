@extends('layouts.master')

@section('content')
        <!-- isi artikel -->
        <div class="container">
            <div class="card">
              <div class="card-body">
                <h1 class="card-text pt-5">
                  {{$article->topic}}
                </h1>
                <p class="card-text">
                  <small class="text-muted"> {{$article->name}} - {{$article->created_at}}</small>
                </p>
              </div>
              <img src="{{asset('img-upload/'.$article->picture)}}" class="card-img-bottom mb-4" alt="..." />
              <article class="px-4 pb-3">
                {!!$article->article!!}
              </article>
            </div>
          </div>
@endsection