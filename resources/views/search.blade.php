@extends('layouts.app')
@section('content')

<section class="bg-dark-30 module p-0" style="padding: 0px" data-background="assets/images/installer1.jpg">
  <div class="titan-caption" style="margin-top: 50px; margin-bottom:-50px; padding-bottom:25px">
    <div class="caption-content">
      <div class="font-alt mb-30 titan-title-size-1">
          <div class="container">
              <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                  <h4 class="font-alt mb-0">Tile Quotation</h4>
                  <hr class="divider-w mt-10 mb-20">
                      @include('inc.searchform')
                </div>
              </div>
      </div>
    </div>
  </div>
</section>

<section class="module" style="padding: 50px 50px 30px 50px">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div class="row multi-columns-row post-columns">


<section class="module" style="padding: 50px 50px 30px 50px">
  <div class="container">
  <div class="row">
    <div class="col-sm-9">

      <div class="row post-masonry post-columns">
        @foreach ($qUsers as $qUser)
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="post shadow-sm">
              <div class="post-thumbnail"><a href="#"><img src="/storage/cover_image/{{$qUser->cover_image}}" alt="Blog-post Thumbnail"/></a></div>
              <div class="post-header font-alt" style="margin: -8px 5px 10px">
                <h2 class="post-title"><a href="#">{{$qUser->name}} {{$qUser->lastName}}</a></h2>
                <div class="post-meta">Ph: {{$qUser->movil}}</div>
                <div class="post-meta">{{$qUser->email}}</div>
                <div class="text-right"><h3>$ {{$qUser->quotation}}</h3></div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
  </div>
  <div class="col-sm-3">
      <div class="price-table font-alt">
        <h4>Important Info</h4>
        <div class="borderline"></div>

        {{-- <p class="price"><span>$</span>9
        </p> --}}
        <b>{{$qUser->heightTile}} x {{$qUser->widthTile}} @if ($qUser->placeInstall!="At...")
            in {{$qUser->placeInstall}}
        @endif  <b>
        <ul class="price-details">
          {{-- <li>Free Support</li> --}}
          <li># of pieces: {{$qUser->numberOfPiece}}</li> 
          {{-- <li><span>Newsletter</span></li>
          <li><span>Working Contact Form</span></li>
          <li><span>Unlimited Domains</span></li>
        </ul><a class="btn btn-d btn-round" href="#">Sign Up</a> --}}
      </div>
</div>
</section>
        
        
@endsection
