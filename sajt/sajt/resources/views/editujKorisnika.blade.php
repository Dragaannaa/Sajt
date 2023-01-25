
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    
    
    <title>SAJT</title>
</head>
<style>
.naziv{
  font-family:cursive;
  font-size:25px;

}
</style>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="naziv"><i>Librery</i></li>
                    <li class="nav-item"><a class="nav-link"  href="{{ url('home') }}" >Home</a></li>

                    <li class="nav-item"><a class="nav-link"  href="{{ url('/contact') }}" >Contact</a></li>
                   
                    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Books
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ url('/action') }}">Action books</a></li>
            <li><a class="dropdown-item" href="{{ url('/romantic') }}">Romantic books</a></li>
            <li><a class="dropdown-item" href="{{ url('/comedy') }}">Comedy books</a></li>
            <li><a class="dropdown-item" href="{{ url('/history') }}">History books</a></li>
            <li><a class="dropdown-item" href="{{ url('/documentary') }}">Documentary books</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>

        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More..
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="{{ url('/kreirajKorisnika') }}">Add users</a></li>
          <li><a class="dropdown-item" href="{{ url('/korisnici') }}">Show all users</a></li>
          <li><hr class="dropdown-divider"></li>
          </ul>
        </div>
        

        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

        <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();"><button class="btn btn-outline-success">{{ __('Log Out') }}</button>               
        </x-responsive-nav-link>
        </form>
<form>
<button class="btn btn-outline-success" onclick="myFunction()">Click here</button>

<script>
function myFunction() {
  alert("Welcome on our page, you're logged in!");
}
</script>
</form>
</div>
</nav>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 komplet-spisak">


                    <form action="{{ url('/korisnici/update/') }}/{{ $korisnik->id }}" method="PUT">
                    @csrf <!-- csrf  Cros site security -->
                        <p>Ime:<br /><input name="name" type="text" placeholder="Naziv klijenta" value="{{ $korisnik->name }}"></p>
                        <p>e mail:<br /><input name="email"  type="text" placeholder="e-mail" value="{{ $korisnik->email }}"></p>
                        <p>Telefon:<br /><input name="telephone"  type="text" placeholder="Telefon" value="{{ $korisnik->telephone }}"></p>
                        <p>Knjiga:<br /><input name="comment"  type="text" placeholder="Opis..." value="{{ $korisnik->comment }}"></p>
                        <p><button type="submit" class="dugme">Snimi</button></p>
                    </form>

                    <!-- Ispisivanje poruke sa validacije -->

                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li style="background-color:red; list-style: none; padding: 10px">Poruka: {{ $error }}</li>
                            @endforeach

                        </ul>
                    @endif

                </div>
            </div>
        </div>
    </div>