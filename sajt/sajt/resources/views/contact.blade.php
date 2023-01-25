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
            <li><a class="dropdown-item" href="{{ url('/home') }}">Action books</a></li>
            <li><a class="dropdown-item" href="{{ url('/home') }}">Romantic books</a></li>
            <li><a class="dropdown-item" href="{{ url('/home') }}">Comedy books</a></li>
            <li><a class="dropdown-item" href="{{ url('/home') }}">History books</a></li>
            <li><a class="dropdown-item" href="{{ url('/home') }}">Documentary books</a></li>
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
@csrf
<button class="btn btn-outline-success" onclick="myFunction()">Click here</button>

<script>
function myFunction() {
  alert("Welcome on our page, you're logged in!");
}
</script>
</form>
</div>
</nav>
<hr>

<div class="container ">
  <div class="row">
    <div class="col bg-light">
     
    </div>
    <div class="col-6">
      <h2>About us..</h2>
      <br>
      <hr>
      <p> City: Prijedor</p>
      <p> Adress: Blevara Srpakog Vojvode</p>
      <p> E-mail: prijedor@gmail.com</p>
      <p> Phone: 066/878-845</p>
      <p> Manager: Filip Markovic</p>
      <div class="card shadow mb-5 bg-body rounded" >
            <img src="mapa.jpg" class="card-img-top " alt="...">
               <div class="card-body">
                 <p class="card-text">Maps.</p>
              </div>
            </div>






    </div>
    <div class="col bg-light">
      
    </div>
  </div>
        
  <hr>  
        
                
                    

</body>
</html>