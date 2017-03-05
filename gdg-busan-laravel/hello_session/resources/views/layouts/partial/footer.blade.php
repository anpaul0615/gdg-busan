<footer class="container footer__master">
  <div>
    &copy; {{ date('Y') }}
    <a href="{{ env('APP_URL') }}">
      {{ config('app.name') }} :: {{ config('app.description') }}
    </a>
  </div>
</footer>
