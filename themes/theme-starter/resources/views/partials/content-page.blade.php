<article @php(post_class('h-entry'))>
  <header>
    <h1 class="p-name">
      {!! $title !!}
    </h1>
  </header>

  <div class="e-content">
    @php(the_content())
  </div>

  
  @php(comments_template())
</article>
