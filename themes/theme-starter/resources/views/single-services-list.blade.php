
@extends('layouts.app')


@php 

$StylingTitleUpper  = get_field('StylingTitleUpper');

$lead_Featured  = get_field('Featured');
$lead_Featured_two  = get_field('FeaturedGroup2');
$lead_Featured_three  = get_field('FeaturedGroup3');
$primary_button  = get_field('primary_button');

@endphp


@section('content')
  @while(have_posts()) @php(the_post())



<div class="container mx-auto ">

  <div class="grid grid-cols-3 gap-4">
   
    

      @if ($StylingTitleUpper['semiboldTitle'] || $StylingTitleUpper['bolder_title_style'])

      @if (!empty(array_filter($StylingTitleUpper)))

      <div class="col-span-2 gap-4 greybg p-3 mr-9 p-10">
        
      <h4 class="text-left h2-smaller"> {{ $StylingTitleUpper['semiboldTitle'] }} </h4>
      <h2 class="h3-heading-italic text-left">{{ $StylingTitleUpper['bolder_title_style'] }} </h2>
      @endif

      <p class="theexcerpt p-bold "><strong>{{ the_excerpt() }}</strong></p>
      <p class="mb-3 p-3 mb-6">{{ the_content() }}</p>

      
      
      <div class="primary-btn">@if ($primary_button['button_text'] || $primary_button['button_url'])
          <a href="{{ $primary_button['button_url'] }}" class="bg-teal-400 rounded-lg p-4 mt-10">{{ $primary_button['button_text'] }}</a>
      @endif </div>

      @endif
    </div>
    

  

    

      @if ($lead_Featured['title'] || $lead_Featured['upper_title'] || $lead_Featured['text'] || $lead_Featured['icons'])
        
      @if (!empty(array_filter($lead_Featured)))


      <div class="sidebar-featured gap-4">

        <div class="p-10"> <!---- group 1 / Instead of Repeater--->

      <div class="flex justify-center">
          @if(isset($lead_Featured['icons']['url']) && !empty($lead_Featured['icons']['url']))
          <img src="{{ $lead_Featured['icons']['url'] }}" alt="{{ $lead_Featured['title'] }}" class="mb-7 rounded-sm" />
        @endif
      </div>

        <h6 class="upper_title text-center pb-4 "> {{ $lead_Featured['upper_title'] }} </h6>
          <h2 class="h3-heading text-center pb-4">{{ $lead_Featured['title'] }} </h2>

        <p class="p-default text-center"> {{ $lead_Featured['text'] }}</p>
  
    @endif
    @endif


    </div><!---- group 1 / Instead of Repeater--->



    <div class="p-10"> <!---- group 3 / Instead of Repeater--->

      @if ($lead_Featured_three['title'] || $lead_Featured_three['upper_title'] || $lead_Featured_three['text'] || $lead_Featured_three['icons'])
        
      @if (!empty(array_filter($lead_Featured_three)))
      <div class="flex justify-center">
          @if(isset($lead_Featured_three['icons']['url']) && !empty($lead_Featured_three['icons']['url']))
          <img src="{{ $lead_Featured_three['icons']['url'] }}" alt="{{ $lead_Featured_three['title'] }}" class="mb-7 rounded-sm" />
        @endif
      </div>

        <h6 class="upper_title text-center pb-4"> {{ $lead_Featured_three['upper_title'] }} </h6>
          <h2 class="h3-heading text-center pb-4">{{ $lead_Featured_three['title'] }} </h2>

        <p class="p-default text-center "> {{ $lead_Featured_three['text'] }}</p>
  
    @endif

    @endif

    </div><!---- group 3 / Instead of Repeater--->



    <div class="p-10"> <!---- group 2 / Instead of Repeater--->

      @if ($lead_Featured_two['title'] || $lead_Featured_two['upper_title'] || $lead_Featured_two['icons-wto'] || $lead_Featured_two['text'])
        
     
      @if (!empty(array_filter($lead_Featured_two)))
      <div class="flex justify-center">
          @if(isset($lead_Featured_two['icons-wto']['url']) && !empty($lead_Featured_two['icons-wto']['url']))
          <img src="{{ $lead_Featured_two['icons-wto']['url'] }}" alt="{{ $lead_Featured_two['title'] }}" class="mb-7 rounded-sm"/>
          @endif
      </div>
      
      <h6 class="upper_title text-center pb-4">{{ $lead_Featured_two['upper_title'] }}</h6>
      <h2 class="h3-heading text-center pb-4">{{ $lead_Featured_two['title'] }}</h2>
      
      <p class="p-default text-center pb-4">{{ $lead_Featured_two['text'] }}</p>
      @endif
      

    @endif

    </div><!---- group 2 / Instead of Repeater--->




 
  </div>


</div>


<div class="container mx-auto mt-20 ">

  <h2 class="h2-related mb-4">Related Services</h2>


    @include('partials.service-listing')
    

</div>


     
  @endwhile
@endsection


