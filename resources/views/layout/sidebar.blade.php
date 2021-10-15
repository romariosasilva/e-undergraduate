      <div class="offcanvas offcanvas-navbar" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-dark" style="width: 100%;height: 100%;">
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-light text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://github.com/romariosasilva.png" alt="" width="32" height="32" class="rounded-circle me-2">
              <strong>{{ Str::before(Auth::user()->name, ' ') }} {{ Str::afterLast(Auth::user()->name, ' ') }}</strong>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
              <li>
                <a class="dropdown-item" href="{{ route('users.view', Auth::user()->id) }}">
                  <i class="fas fa-user-cog"></i>
                  Meu Perfil
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cog"></i>
                  Configurações
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="fas fa-power-off"></i>
                  Sair
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </li>
            </ul>
          </div>
          <hr style="color: white">
          <ul class="nav nav-pills flex-column mb-auto" id="side-menu">
            <li class="nav-item">
              <a href="{{ route('home.index') }}" class="nav-link {{ Helpers::isActiveRoute('home') }}">
                <i class="fas fa-home"></i>
                Home
              </a>
            </li>
            <li>
              <a href="{{ route('ideas.index') }}" class="nav-link {{ Helpers::isActiveRoute('ideas') }}">
                <i class="fas fa-lightbulb"></i>
                Mural de Ideias
              </a>
            </li>
            <li>
              <a href="{{ route('works.index') }}" class="nav-link {{ Helpers::isActiveRoute('works') }}">
                <i class="fas fa-graduation-cap"></i>
                Trabalhos
              </a>
            </li>
            <li>
              <a href="{{ route('calendar.index') }}" class="nav-link {{ Helpers::isActiveRoute('calendar') }}">
                <i class="fas fa-calendar-day"></i>
                Calendário
              </a>
            </li>
            <li>
              <a href="{{ route('users.index') }}" class="nav-link {{ Helpers::isActiveRoute('users') }}">
                <i class="fas fa-user"></i>
                Usuários
              </a>
            </li>
          </ul>
        </div>
      </div>