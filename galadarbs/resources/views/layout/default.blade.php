<!DOCTYPE html>
<html>
<head>
    <title>{{config('app.name')}}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>

<body>


    <header class=" bg-dark text-light">




        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
          <a class="navbar-brand" href="#">Vinyl King Lv</a>
         
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <?php
                $navigation=[
                'Home'=> route('home'), 
                'Collection'=> route('collection'),
                'Create Collection'=> route('create.collection'), 
                'Contact'=> route('contact'),
                'Login'=> route('auth.login'),
                'Logout'=> route('auth.logout'),
                ];


                ?>

                @foreach($navigation as $name => $url)

                @if(
                ($name != 'Logout' && $name != 'Login' && $name!='Create Collection')  
                || (Auth::user() && $name=='Create Collection') 
                || (Auth::user() && $name=='Logout') 
                || (!Auth::user() && $name=='Login') 
                )


                <li class="nav-item">
                    <a 
                    class="nav-link {{ (
                    url()->current() == $url) ? 
                    'active'  : '' }}" 
                    href="{{$url}}">
                    {{$name}}
                </a>
            </li>


            @endif
            @endforeach
            



        </ul>
    </div>
</nav>


</header>

<!-- <main class="container bg-light"> -->

    @section('content')
    @show



</main>

<footer class="container-fluid bg-dark text-light text-right fixed-bottom">
    <a href="{{ route('report')}}" >Report a bug!</a>
</footer>






<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</body>

</html>