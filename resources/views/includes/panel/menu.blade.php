<h6 class="navbar-heading text-muted">

    Menú

</h6>
<ul class="navbar-nav">

  {{--<li class="nav-item">--}}
    {{--<a class="nav-link" href="/home">--}}
      {{--<i class="ni ni-tv-2 text-danger"></i> Dashboard--}}
    {{--</a>--}}
  {{--</li>--}}

  <li class="nav-item">
    <a class="nav-link" href="/agents">
      <i class="ni ni-single-02 text-red"></i> Agentes
    </a>
  </li>


</ul>

{{-- Divider --}}
{{--<hr class="my-3">--}}
{{-- Heading --}}
{{--<h6 class="navbar-heading text-muted">Cerrar sesión</h6>--}}
{{-- Navigation --}}
<ul class="navbar-nav mb-md-3">
  <li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
      <i class="ni ni-key-25"></i> Cerrar sesión
    </a>
    <form action="{{ route('logout') }}"  method="POST" style="display: none;" id="formLogout">
      {{--@csrf--}}
      {{ csrf_field() }}
    </form>
  </li>
</ul>
