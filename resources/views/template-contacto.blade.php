{{--
  Template Name: Info y contacto
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  @if (has_post_thumbnail())
      @php the_post_thumbnail('full', array('class'=> 'img-fluid')) @endphp
  @endif
    @include('partials.page-header')
    @include('partials.content-page')
  <div class="galeria">
      @foreach ($galeria as $image)
      {{-- instalar slick y reemplazar clases, init js --}}
        <div class="swiper-slide">

          <div class="inner">
            <figure>
              {!! $image->foto !!}
              <div class="caption-single d-block d-lg-none text-center">{!! $image->caption !!}</div>
            </figure>

          </div>

          <div class="caption-single d-none d-lg-block text-center">{!! $image->caption !!}</div>
        </div>
      @endforeach
  </div>
  <div class="footer-contacto d-flex justify-content-between">
    <div class="box">
      {!! $box->box1!!}
    </div>
    <div class="box">
      {!! $box->box2!!}
    </div>
    <div class="box">
      {!! $box->box3!!}
    </div>
  </div>
  @endwhile
@endsection
