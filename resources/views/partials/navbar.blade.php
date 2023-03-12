<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000;">
  <div class="container">
    <img class="image"  src="{{ asset('admin/images/icon/Library.png')}}"  width="42px" style="margin: 1px ;padding: 0px color:white;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ( $title === 'Home') ? 'active' : '' }} " aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $title === 'About') ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $title === 'Gallery') ? 'active' : '' }}" href="/gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $title === 'Contacts') ? 'active' : '' }}" href="{{route('contacts.create')}}">Contact Us</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
          <a class="nav-link" href="{{route ('login')}}">Login</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{route ('register') }}">Register</a>
      </ul>
    </div>
  </div>
</nav>