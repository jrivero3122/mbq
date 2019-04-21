@extends('layouts.app')
@section('content')

<section class="home-section parallax-bg home-fade home-full-height bg-dark-30" data-background="assets/images/installer1.jpg">
  <div class="titan-caption">
    <div class="caption-content">
      <div class="font-alt mb-30 titan-title-size-1">
          <div class="container">
              <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                  <h4 class="font-alt mb-0">Miami Tile Quotation</h4>
                  <hr class="divider-w mt-10 mb-20">
                    
                      @include('inc.searchform')
                  
                </div>
              </div>
      </div>
    </div>
  </div>
</section>

<section class="module" id="about">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2 class="module-title font-alt">Welcome to Titan</h2>
        <div class="module-subtitle font-serif large-text">We’re an award winning London based digital agency, lovingly curating pixels for maximum impact. We don’t have a style — we have standards.</div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-2 col-sm-offset-5">
        <div class="large-text align-center"><a class="section-scroll" href="#services"><i class="fa fa-angle-down"></i></a></div>
      </div>
    </div>
  </div>
</section>
  
@endsection
