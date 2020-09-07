<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class='container'>
    <a class="navbar-brand" href="{{ route('blogs_path') }}">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-md-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('blogs_path') }}">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
            <a href="{{ route('create_blog_path')}}" class="nav-link">Create Blog </a>
          </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
    </div>
</nav>