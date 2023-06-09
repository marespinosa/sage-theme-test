{{--
  Template Name: Service List
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
       <div class="container mx-auto mt-10">

      @php(the_content())

    </div>


   

    @include('partials.service-listing')
    
  @endwhile
@endsection

