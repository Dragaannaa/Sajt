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
    padding: 20px;
    background-color: lightgrey;
    
  }
  .slika {
    opacity: 0.5;

  }
  .row {
    margin:60px;
  }
  .tekst{
    text-align:justify;
    padding:30px;
  }
  .spiner {
    margin-left:70px;
  }
  .slajder{

  }
  
.naziv{
  font-family:cursive;
  font-size:25px;

}
.tekst1{
      font-family:Agency FB;
    }
  </style>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="naziv"><i>Librery</i></li>           
    @if (Route::has('login'))
                      @auth
                      @else
                      <li class="nav-item"><a class="nav-link"  href="{{ route('login') }}">Log in</a></li>
                        @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link"  href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
            @endif
            
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
</div>




<form class="d-flex">
        <input class="form-control me-2" type="search"  placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
</div>
</nav>

<div class="card bg-dark text-white">
  <img src="knjiga2.jpg" class="slika" alt="..."  height="450">
  <div class="card-img-overlay">
    <h5 class="card-title">Imagination...Books...</h5>
    <p class="card-text"> By reading, you are exposed to so many wonderful things. This helps your imagination when it comes to creating and thinking.</p>
    <p class="card-text">Last updated 3 mins ago</p>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-6" >
      <h1 class="tekst">Why is reading good?</h1>
      <p class="tekst">People who read books live for around two years longer than those who don’t, irrespective of gender, wealth, education or health, according to a Yale University study. While a similar association was found among readers of newspapers, it was weaker.
“Book reading contributed to a survival advantage that was significantly greater than that observed for reading newspapers or magazines,” the authors of the study wrote. “Compared to non-book readers, book readers had a 23-month survival advantage,” they noted.
Deep reading promotes empathy and emotional intelligence - cognitive processes that can lead to greater chance of survival, the report explained.</p>
    </div>
    <div class="col-3">
      <img src="knjiga1.jpg" height="450" width="550">
    </div>
  </div>
</div>
<hr>
<br>
<div class="card-group">
  <div class="card">
    <img src="book.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Focus and Concentration</h5>
      <p class="card-text">When you are reading, you are focusing and concentrating on one thing.  By sitting still and reading, you are training your body/mind and your child’s too slow down, relax, and focus on what you are reading. This helps you/your child focus and concentrate on other activities because you are used to doing it.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="book2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Reading Improves your memory</h5>
      <p class="card-text">When you read a book, you are taking in all that the book is about. People, places, things… When you read you are using your memory muscle which lies in the Cerebrum part of your brain. Using this muscle helps your memory long term. I’m sure you’ve probably heard of muscle memory 😉 Same kind of thing.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="book1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Reading helps with communication</h5>
      <p class="card-text">Reading to your children helps build a bond and open up communication. It’s always important to be able to talk with your kids especially when they get into their teenage years. Start reading to them and communicating when they are young so they have that connection and comfort with talking to you.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
<br>
<hr>
<br>

<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="knjiga.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="knjiga2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="knjiga1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card">
      <img src="knjiga.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>


</br>
  <hr>
  </br>
<div class="container tekst1">
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
    <p>Copyright 2022</p>
  </div>
  </div>
</body>
</html>