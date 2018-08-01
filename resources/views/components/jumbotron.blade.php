<div class="jumbotron">
  <h1 class="display-4">{{ $title }}</h1>
  <p class="lead">{{ $content }}</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-warning btn-lg signup-btn" href="{{ url('/signup') }}" role="button">Signup</a>
  <a class="btn btn-primary btn-lg" href="{{ url('/') }}" role="button">Back</a>
</div>
