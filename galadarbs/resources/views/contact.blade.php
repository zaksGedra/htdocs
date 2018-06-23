
@extends('layout/default')

@section('content')
<style>
body  {
	background-image: url("https://o.aolcdn.com/images/dims?quality=100&image_uri=https%3A%2F%2Fo.aolcdn.com%2Fimages%2Fdims%3Fcrop%3D5760%252C3840%252C0%252C0%26quality%3D85%26format%3Djpg%26resize%3D1600%252C1067%26image_uri%3Dhttp%253A%252F%252Fo.aolcdn.com%252Fhss%252Fstorage%252Fmidas%252F914ee1a3927ef21fe17a266a547c2613%252F205905504%252Fvinyl-records-closeup-picture-id641970822%26client%3Da1acac3e1b3290917d92%26signature%3D844bbc528fa5883e59391dae74da73cca4e8d1fd&client=cbc79c14efcebee57402&signature=3920b865b9b207218738a27f8338ea60744aa07c");
	color: white;	
}
div{
	text-align: center;

}




</style>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/lv_LV/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="container">
	<h2 style="background-color: rgba(0,0,0,0.75); margin-top: 20px">Name: Andris Gedra<br>
		Tel: +37129407548<br>
		E-pasts: VinylKingLv@gmail.com<br>
		<a href="mailto: VinylKingLv@gmail.com">Email</a></h2>



		<form>
			
				<h3 style="background-color: rgba(0,0,0,0.75);();">Our next sale location<br>
				<label for="comment">Location:</label>{{ $location->text}}.<div style="position: fixed; margin-left: 20px;" class="fb-like" data-href="https://www.facebook.com/VinylKingLv/" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div></h3>

				<!-- <textarea class="form-control" rows="10" id="comment"></textarea>
				<button class="btn btn-outline-light"><h5>Submit</h5></button> -->
			
		</form>

	</div>









	@endsection