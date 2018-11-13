<header class="banner sticky-top">
  <div class="container-fluid">
    <div class="d-flex justify-content-center">
      <a class="brand text-center" href="{{ home_url('/') }}"><img src="@asset('/images/Leblon-Logo-Blanco.svg')"></a>
      <nav class="nav-primary ml-auto ">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>
  </div>
</header>
<div class="overlay overlay-slidedown">
  <div class="menu-ti text-center mt-5"><img src="@asset('/images/Leblon-Logo-Negro.svg')"></div>

  <div class="menu-col mx-auto">
    <hr>
    <div class="serv text-center mt-5">@php echo __('SERVICIOS', 'leblontheme menu') @endphp</div>
		<nav class="mt-5">
			<div class="cols d-flex justify-content-between text-left">
        <div class="col1">
          <a href="#">@php echo __('MANICURA SPA', 'leblontheme menu') @endphp</a>
        </div>
				<div class="col2">
          <a href="#">@php echo __('PEDICURA SPA', 'leblontheme menu') @endphp</a>
        </div>
				<div class="col3">
          <a href="#">@php echo __('UÑAS ESCULPIDAS', 'leblontheme menu') @endphp</a>
				  <a href="#">@php echo __('MASAJES', 'leblontheme menu') @endphp</a>
        </div>
				<div class="col4">
          <a href="#">@php echo __('MAQUILLAJE', 'leblontheme menu') @endphp</a>
          <a href="#">@php echo __('LIMPIEZA FACIAL', 'leblontheme menu') @endphp</a>
          <a href="#">@php echo __('DEPILACIÓN FACIAL', 'leblontheme menu') @endphp</a>
        </div>

			</div>
		</nav>
    <hr>
    <div class="cerrar">
      <button type="button" class="overlay-close"></button>
      <span class="overlay-closes text-center">@php echo __('CERRAR', 'leblontheme menu') @endphp</span>
    </div>

  </div>

</div>
