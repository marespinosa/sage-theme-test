<header class="banner bg-custom-purple">

<div class="container mx-auto px-4">

<div class="grid grid-cols-3 gap-3">
  <div>
    <a class="brand" href="{{ home_url('/') }}">
      <img src="{{ asset('images/logo.png') }}" alt="{!! $siteName !!}" class="w-16 md:w-32">
    </a>
  </div>
  <!-- ... -->
  <div>
    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary text-white middle-nav" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
    @endif

  </div>

  <div class="contact-us-cta">

    @if (has_nav_menu('contact_menu'))
    <nav class="nav-primary text-white w-36 pt-0" aria-label="{{ wp_get_nav_menu_name('contact_menu') }}">
        {!! wp_nav_menu(['theme_location' => 'contact_menu', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
@endif


      

  </div>
</div>


  




  
</div>

</header>
