
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
.tekst {
  font-family:Comic Sans MS;
  padding:20px;
  font-size:20px;

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

</br>
<div class="container">
  <div class="row">
    <div class="col-3 ">
      
    </div>
    <div class="col bg-light tekst">
      <hr>
    Welcome to our website. Here you can find everything you're interested in about books and reading. Our logged-in users can add new users, replace existing... You can also find many books to read, quotes and various interesting things...
  <hr>  
  </div>
    <div class="col-3 ">
      
    </div>
  </div>
</div>
</br>

<div class="container">
  <div class="row">
    <div class="col-8">
        <div class="card shadow mb-5 bg-body rounded" style="width: 35rem;">
            <img src="knjiga.jpg" class="card-img-top " alt="...">
               <div class="card-body">
                 <p class="card-text">Books are important for the mind, heart, and soul. But don’t take it from us: These quotes about reading speak for themselves.</p>

<p>By Stefanie Hargreaves</p>
              </div>
            </div>
        

          <div class="card shadow mb-5 bg-body rounded" style="width: 35rem;">
            <img src="book.jpg" class="card-img-top " alt="...">
               <div class="card-body">
                 <p class="card-text">The power to be found between the pages of a book is formidable, indeed. And these 50 inspiring quotes about books and reading are here to remind you of that. For, as author Anna Quindlen says, “Books are the plane, and the train, and the road. They are the destination, and the journey. They are home.”</p>
              </div>
            </div>
    
  
    </div>
    <div class="col-4 bg-light">
      <div class="card shadow mb-5 bg-body rounded" style="width: 22rem;">
            <img src="k2.jpg" class="card-img-top " alt="...">
               <div class="card-body">
                 <p class="card-text">One glance at a book and you hear the voice of another person, perhaps someone dead for 1,000 years. To read is to voyage through time.” </p><p> Carl Sagan</p>
              </div>
            </div>

            <div class="card shadow mb-5 bg-body rounded" style="width: 22rem;">
            <img src="k1.jpg" class="card-img-top " alt="...">
               <div class="card-body">
                 <p class="card-text">
“A book is a garden, an orchard, a storehouse, a party, a company by the way, a counselor, a multitude of counselors.” </p><p>Charles Baudelaire</p>
              </div>
            </div>
            



    </div>
  </div>
  <hr>
  <style>
    .citat{
      text-align:justify;
      margin:50px;
    }
    .tekst{
      font-family:Agency FB;
    }
  </style>

  <div class="container">
  <div class="row">
    <div class="col">
    <img src="prva.jpg" class="img-thumbnail" alt="...">
    </div>
    <div class="col">
    <p class="citat">Welcome to our site. Here you can find many different books and citats. Also you can make your own librery and add some books or delete it...Enjoy in our site. <br>“A great book should leave you with many experiences, and slightly exhausted at the end. You live several lives while reading.” <br>– William Styron </p>  </p>
    </div>
  </div>
</div>


</div>
       
</br>
  <hr>
  </br>
<div class="container tekst">
  <div class="row">
    <div class="col-sm-4 bg-light">
    <h2>  
    Librery
  </h2>
  </div>
  <div class="col-sm-2 bg-light">
  <p>Books</p>
  <p>Citats</p>
  <p>Fany things</p>
  <p>Library</p>
    </div>
    <div class="col-sm-2 bg-light">
  <p>Life</p>
  <p>Love</p>
  <p>Fantasy</p>
  <p>Action</p>
    </div>
    <div class="col-sm-2 bg-light">
  <p>Instagram</p>
  <p>Facebook</p>
  <p>Viber</p>
  <p>Twitter</p>
    </div>
  </div>
  </div>    
        
                
                    

</body>
</html>
</body>
</html>