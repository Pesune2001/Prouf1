<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
$dk-blue: #1E83AE;
$blue: #3D5B94;
$light-blue: #3DACDD;
$green: #6dcd9a;
$social-size: 1.2em;
$social-width: 20%;

* {
  margin: 0;
  padding: 0;
  @include box-sizing(border-box);
}

html, body {
  font-family: Raleway, sans-serif;  
  background-color: #fff;
}

footer {
  width: 100%;
  display: inline-block;
  margin: 2em 0;
  height: 70px;
  background-color: #999;
  .copyright {
    width: 50%;
    float: left;
    @media (max-width: 600px) {
      width: 100%;
    }
    p {
      padding-left: 10%;
      color: white;
      font-size: 0.7em;
      line-height: 70px;
      text-transform: capitalize;
      letter-spacing: 1px;
      @media (max-width: 600px) {
        text-align: center;
        padding: 0;
      }
    }
  }
  .social {
      width: 50%;
      float: right;
    @media (max-width: 600px) {
      width: 100%;
    }
     a {
      float: left;
      line-height: 70px;
      text-decoration: none;
      color: white;
      text-align: center;
      font-weight: bold; 
      @include transition(all, 0.3s);
       &:hover {
         background-color: #222;
         @include transition(all, .3s);
       }
    }
  }
}

.linked {
  background-color: $dk-blue;
  font-size: $social-size;
  width: $social-width;
}

.face {
  background-color: $blue;
  font-size: $social-size;
  width: $social-width;
}

.tweet {
  background-color: $light-blue;
  font-size: $social-size;
  width: $social-width;
}

.support {
  background-color: $green;
  font-size: 0.8em;
  width: 40%;
}


</style>
</head>
<footer>
  <div class="copyright">
    <p>&copy 2020 - Olga Martínez</p>
  </div>
  <div class="social">
    <a href="#" class="tweet">Enlace</a>
    <a href="#" class="linked">Enlace</a>
  </div>
</footer>
</html>
