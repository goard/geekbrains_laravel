<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">
          <span data-feather="home"></span>
          Главное
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="file"></span>
          Категории
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="list"></span>
          Новости
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if(request()->routeIs('admin.sources.*')) active @endif" href="{{ route('admin.sources.index') }}">
          <span data-feather="list"></span>
          Источники новостей
        </a>
      </li>
    </ul>

  </div>
</nav>