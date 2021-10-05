<!DOCTYPE html>
<html>
<head>

<style>
div {
  border: 1px solid gray;
  padding: 8px;
}

.button-center {
  text-align: center;
}

h1 {
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}

p {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
}

a {
  text-decoration: none;
  color: #008CBA;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("#form-tampil").hide();
  });
  $("#show").click(function(){
    $("#form-tampil").show();
  });
});
</script>
</head>
<body>

<div id="form-tampil">
  <h1>Menyembunyikan dan Menampilkan Text</h1>
  <p>Berikut ini adalah contoh hasil menampilkan dan menyembunyikan text dengan menggunakan Jquery 
     dan Bootstrap versi 4 by Juvensius Samuel Sindrome. Dan Paragraf ini diketik sedemikian rupa agar terlihat genap di UI.
  </p>
</div>

<div class="button-center">
<button type="button" id="hide"  class="btn btn-danger">Hide</button>
<button type="button" id="show" class="btn btn-success">Show</button>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>