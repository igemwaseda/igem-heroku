@extends('template')
@section('title', 'Waseda-iGEM')
@include('head')
@include('header')

@section('content')
<div class="container">
  <div class="section">
    <h5>Activity</h5>
    <div class="divider"></div>
    <div class="row">
      @forelse ($activities as $activity)
        <a href="{{  $activity['anchor'] }}">
          <div class="col s12 m4 l3">
            <div class="card teal">
              <div class="card-content white-text">
                <h6>{{ $activity['title'] }}</h6>
                <img class="circle responsive-img" src="image/article.png">
                <p class="truncate">{{ $activity['content'] }}</p>
              </div>
            </div>
          </div>
        </a>
      @empty
        <div class="col s12">
          <h3 class="center-align">まだ記事は投稿されていません</h3>
        </div>
      @endforelse
    </div>
  </div>
</div>
@endsection
