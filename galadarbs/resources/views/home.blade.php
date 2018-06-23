@extends('layout.default')

@section('content')




<style>
body, html {
    height: 100%;
    margin: 0;
}

body {
    background-image: url("https://www.goodwillde.org/wp-content/uploads/2015/04/Header-vinyl_Ted.png");

    height: 100%; 



    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}


h1{
    background-color: rgba(0,0,0,0.75);
    text-align: center;
    color: orange;
    font-size: 150px;


}
h2{
    background-color: rgba(0,0,0,0.75);
    bottom:200px;
    text-align: center;

    font-style: italic;
    color: orange;
    font-size: 65px;

}

button{
    margin-left: 560px;
    font-size: 40px;
    border-radius: 8px;
    background-color: black;
    color:white;
    border:2px solid #ffa500;
    -webkit-transition-duration:0.4s;
}
button:hover {background-color: #ffa500;}



</style>
<div class="bg"></div>

<h1>Vinyl King</h1><br>
<h2>Best vinyl collection and store since 2018.</h2><br><br><br><br>
<div>
<a href="collection"><button> Go to collection</button></a>
</div>




@endsection