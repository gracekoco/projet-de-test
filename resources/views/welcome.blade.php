
<!DOCTYPE html>
<html>
<head>

<meta charset='utf-8' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.css' rel='stylesheet' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.css' rel='stylesheet' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.min.css' rel='stylesheet' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/list/main.min.css' rel='stylesheet' />
<style>
  html, body {
    font-size: 14px;
    background: #f4f7f6;
  }
  #calendar{
    width: 80%;
    margin-left: 100px;
    box-shadow: 0px 0px 10px rgb(22, 22, 22);
    padding:15px;
    background: #fff;
  }
  #calendar-container {
    position: fixed;
    top: 0%;
    text-align: center;
    left: 10%;
    right: 10%;
    bottom: 20%;
  }
</style>
<style>

</style>
<div class="flex-center position-ref full-height">

    @if (Route::has('login') && Auth::check())
        <div class="top-right links">
            <a href="{{ url('/dashboard') }}">Dashboard</a>
        </div>
    @elseif (Route::has('login') && !Auth::check())
        <div class="top-right links">
          <p>
             <a href="{{ url('/login') }}"><button class="btn-primary">Login</button></a>
             <p>
             <a href="{{ url('/register') }}"><button class="btn-primary"> S'incrire</button></a>


            </div>
    @endif


@if (Route::has('login') )
<div class="top-right links">
    <div>
<a href="{{ route('admin') }}"><button class="btn-primary"> administrateur</button></a>
    </div>
</div>

@endif

</div>
</head>
<body>

  <div id='calendar-container'>

    <h1>{{__('creer une reunion')}}</legend></h1>
      <div id='calendar'></div>
    </div>


  
  </body>
  </html>
