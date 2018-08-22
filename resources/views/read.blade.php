@include('inc.header')
<div class="container">
      <div class="row">
          <legend>Laravel Crud Application</legend>
          <p class="lead">{{ $articles->title }}</p><br>
          <p>{{ $articles->description }}</p>
    </div>
    </div>
@include('inc.footer')