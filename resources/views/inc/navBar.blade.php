
    <nav class="navbar navbar-expand navbar-dark bg-dark">
      <h1 class="navbar-brand">DZ AUTO</h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About </a>
          </li>
        </ul>
        @if(Auth::check())
        <span class="label label-success">Success Label</span>
        <span class="badge">{{Auth::user()->name}}</span>
        <a class="btn" id="logoutBtn" href="/logout">Logout</a>
        @endif
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>
    
    