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
  .naslov{
    text-align:center;
    font-style: oblique;
    font-family:Freestyle Script;
  
  }
</style>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link"  href="{{ url('/home') }}" >Home</a></li>

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

<hr>
<h1 class="naslov bg-light">COMEDY BOOKS</h1>
<hr>

<div class="container ">
  <div class="row">
    <div class="col bg-light">    
    </div>


    <div class="col-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
           <img src="c4.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
        <h5 class="card-title">Is Everyone Hanging Out Without Me?</h5>
        <p class="card-text">Mindy Kaling has lived many lives: the obedient child of immigrant professionals, a timid chubster afraid of her own bike, a Ben Affleck - impersonating Off-Broadway performer and playwright...</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>

   
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
           <img src="c3.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
        <h5 class="card-title">Yes please</h5>
        <p class="card-text">In Amy Poehler’s highly anticipated first book, Yes Please, she offers up a big juicy stew of personal stories, funny bits on sex and love and friendship and parenthood and real life advice (some useful, some not so much), like when to be funny and when to be serious. Powered by Amy’s charming and ..</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
           <img src="c1.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
        <h5 class="card-title">Bossypants</h5>
        <p class="card-text">Before Liz Lemon, before "Weekend Update," before "Sarah Palin," Tina Fey was just a young girl with a dream: a recurring stress dream that she was being chased through a local airport by her middle-school gym teacher. She also had a dream that one day she would be a comedian...</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
           <img src="c2.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
        <h5 class="card-title">Good Omens</h5>
        <p class="card-text">Armageddon only happens once, you know. They don’t let you go around again until you get it right.’ People have been predicting the end of the world almost from its very beginning, ...</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
</div>


    <div class="col bg-light">    
    </div>
  </div>
<hr>