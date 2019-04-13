@extends('layouts.app')
@section('content')

<section class="bg-dark-30 showcase-page-header module parallax-bg" data-background="assets/images/installer1.jpg">
  <div class="titan-caption">
    <div class="caption-content">
      <div class="font-alt mb-30 titan-title-size-1">
          <div class="container">
              <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                  <h4 class="font-alt mb-0">Tile Quotation</h4>
                  <hr class="divider-w mt-10 mb-20">
                  <form class="form" role="form" action="/search" method="GET">
                    <div class="row">
                      <div class="form-group col-lg-3">
                        <select id="inputState" class="form-control" name="heightTile">
                          <option selected>Height...</option>
                          <option value="12">12</option>
                          <option value="24">24</option>
                          <option value="36">36</option>
                          <option value="48">48</option>
                        </select>
                      </div>
                      <div class="form-group col-lg-1 text-center">
                        <p>X</p>
                      </div>
                      <div class="form-group col-lg-3">
                        <select id="inputState" class="form-control" name="widthTile">
                          <option selected>Width...</option>
                          <option value="12">12</option>
                          <option value="24">24</option>
                          <option value="36">36</option>
                          <option value="48">48</option>
                        </select>
                      </div>
                      <div class="form-group col-lg-2">
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Sqf" name="sqfTile">
                      </div>
                      <div class="form-group col-lg-3">
                        <select id="inputState" class="form-control" name="placeInstall">
                          <option selected>At...</option>
                          <option value="bathroom">Bathroom</option>
                          <option value="exterior">Exterior</option>
                        </select>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col text-center">
                        <button type="submit" class="btn btn-dark">Quote</button>
                      </div>
                    </div>
                    </div>
                  </form>
                </div>
              </div>
      </div>
    </div>
  </div>
</section>




<section id="search" class="module">
    <div class="container">
        <div class="row multi-columns-row post-columns">
        @foreach ($qUsers as $qUser)
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="post">
                <div class="post-thumbnail"><a href="#"><img src="assets/images/post-1.jpg" alt="Blog-post Thumbnail"/></a></div>
                <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">{{$qUser->name}} {{$qUser->lastName}}</a></h2>
                    {{-- <div class="post-meta">By&nbsp;<a href="#">$ {{$qUser->quotation}}</a>&nbsp;| 23 November | 3 Comments</div> --}}
                </div>
                <div class="post-entry">
                    <h2>$ {{$qUser->quotation}}</h2>
                </div>
                {{-- <div class="post-more"><a class="more-link" href="#">Read more</a></div> --}}
                </div>
            </div>            
        @endforeach
    </div>
</section>

@endsection
