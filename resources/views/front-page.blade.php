@extends('layouts.app')

@section('content')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

<section class="banner-home d-flex justify-content-center align-items-center" style="background-image: url('{{ $banner->foto }}') ">
  <h3>{!! $banner->texto !!}</h3>
  <span class="arrow-down"></span>
</section>

<section class="promo">
  <div class="frase d-flex justify-content-center align-items-center">
    {!! $promo->frase !!}
  </div>
  <div class="box-promo">
    <div class="ti-pro">@php echo __('Promoción', 'leblontheme') @endphp</div>
    <div class="texto-promo">
      {!! $promo->textopromo !!}
        <div class="fecha">@php echo __('Del', 'leblontheme') @endphp
          {!! $promo->fecha_ini !!}
        @php echo __('al', 'leblontheme') @endphp
        {!! $promo->fecha_fin !!}</div>
    </div>
  </div>
</section>

<section class="box-reserva">
  <div class="color d-flex justify-content-center align-items-center">
    <div class="solapa">
     @php echo __('Reserva tu cita', 'leblontheme') @endphp
    </div>
    <div class="formulario">
      @include('partials.formulario-fake')
    </div>
    <div class="call">
      @php echo __('O llama al 93 2556 254 11', 'leblontheme') @endphp
    </div>
  </div>
</section>

<div class="row justify-content-center position-relative">
  <div class="solapa-servicios">
    @php echo __('Servicios', 'leblontheme') @endphp
  </div>
</div>
@php
  $args = array(
    'cat' => 2
  );
@endphp

<section class="servicios">
  @query($args)
    <div class="servicio">
      @if (has_post_thumbnail())
      <div class="foto">
        <a href="{{ get_permalink() }}">
          @php
            the_post_thumbnail('home-rounded', array('class'=>'img-fluid rounded-circle mx-auto d-block image'))
          @endphp
          <div class="middle mx-auto d-flex justify-content-center align-items-center">
              <div class="ver">@php echo __('Ver', 'leblontheme') @endphp</div>
          </div>
        </a>
      </div>
      @endif
      <h2 class="text-center">
        <a href="{{ get_permalink() }}">
          @title
        </a>
      </h2>
      <div class="intro text-center">
        {!! FrontPage::intro() !!}
      </div>

    </div>
  @endquery
</section>

@endsection
