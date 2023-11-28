  <!-- Sidebar Start -->
  <div class="sidebar pe-4 pb-3">
      @if(Auth::user()->role == 1)
      @include('template.Menu.menuAdmin')
      @elseif(Auth::user()->role == 2)
      @include('template.Menu.menuPetugas')
      @endif
  </div>
  <!-- Sidebar End -->