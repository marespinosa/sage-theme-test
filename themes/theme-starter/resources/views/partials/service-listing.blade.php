@php
    $servicesComposer = app(\App\View\Composers\Services::class);
    $servicesList = $servicesComposer->with()['servicesList'];


@endphp

<div class="grid grid-cols-3 gap-5">

    @if (!empty($servicesList))
    @foreach ($servicesList->posts as $service)

    <div>
       
        <div class="thumbnail-class-services">
        @if (has_post_thumbnail($service->ID))
            {!! get_the_post_thumbnail($service->ID) !!}
        @endif
        </div>

        <div class="p-10">

        <h3 class="p-small-font pb-2">@php
                $servicesComposer->displayCategoryNames($service);
            @endphp 
        </h3>

        <p class="pt-2">{{ $service->post_content }}</p>
        </div>

        
        <div class="nav-previous alignleft">@php previous_posts_link( 'Older posts' ); @endphp </div>
        <div class="nav-next alignright">@php next_posts_link( 'Newer posts' ); @endphp </div>


    </div>

    @endforeach
    @endif
    

   
  </div>





