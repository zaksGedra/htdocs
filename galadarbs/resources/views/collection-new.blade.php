 @extends('layout/default')

 @section('content')




<style type="text/css">



	stils {
		position: fixed;
		margin-top: 75px;
		margin-left: 35%;

	}

	body{
	/*	background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNL98h2BQ9CVJoKmKH-QZaFSYfVo24gXbxpmO8UbsJIju1GfSL);
		
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;*/
    background-color:black;

}
p{
	position:relative;
	left: 112px;

}
</style>

<!-- metode post -->
<!-- action root šeit store collection -->
<stils>
<form method="POST" action="{{Route('store.collection')}}" enctype="multipart/form-data">
	@csrf
	<!-- <input type="text" name="id" placeholder="id"> -->
<input type="text" name="izpilditajs" placeholder="Izpildītājs">
<input type="text" name="nosaukums" placeholder="Nosaukums"><br><br>
<input type="text" name="daudzums" placeholder="Daudzums">
<input type="text" name="cena" placeholder="Cena"><br>
<p>
<label class="btn btn-default btn-outline-warning btn-md center-block" style="margin-top: 10px">
    Bildes mekletājs <input  name="picture" type="file" hidden>
</label>

<button class="btn btn-outline-warning btn-md center-block" style=" margin-top: 4px">Pievienot</button>
</p>
</form>
<stils>





























@endsection