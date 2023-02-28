<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>




</style>



<body>






   <form action="{{url('reservation')}}" method="get">

  <x-jet-authentication-card>
   <div class="w-full sm:max-w-md mt-12 px-6 py-4  shadow-md overflow-hidden sm:rounded-lg">
<div class="col-md-6">
      <label class="text-muted">titre de la reunion</label>
      <input type="name" id ="name" class="form-control" placeholder="Entrez une reunion">
    </div>
    <div class="col-md-6">
      <label class="text-muted">titre de la reunion</label>
      <input type="email" id ="email" class="form-control" placeholder="Entrez une reunion">
    </div>
    <div class="col-md-6">
      <label class="text-muted">titre de la reunion</label>
      <input type="password" id ="password" class="form-control" placeholder="Entrez une reunion">
    </div>

    <div class="col-md-6">
      <label class="text-muted">titre de la reunion</label>
      <input type="text" id ="name" class="form-control" placeholder="Entrez une reunion">
    </div>
    <div class="col-md-6">
      <label class="text-muted">date de debut</label>
      <input type="date" id="start_date" class="form-control" required autofocus>
    </div>
    <div class="col-md-6">
      <label class="text-muted">date de fin</label>
      <input type="date"  id="end_date" class="form-control" required autofocus>
    </div>
    <div class="col-md-6">

      <label class="text-muted">heure de debut</label>
      <input type="time" id="start_time"  class="form-control" required autofocus>
    </div>
    <div class="col-md-6">
      <label class="text-muted">heure de fin</label>
      <input type="time" id="end_time" class="form-control" required autofocus>
    </div>



          <div class="col-md-6">
            <label class="text-muted">choisir une salle</label>

            <select class="custom-select my-select">
              @foreach ($Salles as $key)
              <option>{{$key->name}}</option>
              @endforeach
            </select>

          </div>


    </div>
   <a href="{{route('reservation')}}"></a> <button class="btn btn primary">valider</button>
    </div>
  </x-jet-authentication-card>
  </form>


