 @extends('layout/default')

 @section('content')




 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
 <!-- searchbars -->
<style type="text/css">
  p{
    margin-top: 20px;
    margin-left: 1050px;

  }
</style>

 <form class="form-inline my-2 my-lg-0 text-center">
<p> 
 <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  
  <button class="btn btn-outline-warning  my-2 my-sm-0" type="submit">Meklēt</button>
</p>
</form>


<style type="text/css">
  
body{
  background-color: black;
  color:orange;
}

h1{
  position: absolute;
  text-align: left;
  margin-top: -60px;
}


</style>

<h1>Want to buy something? <a href="mailto: VinylKingLv@gmail.com?subject=Buying">Email</a></h1>
 <table class="table table-striped">
            @if(isset($collections))
            <tr>
              <th>Id</th>
              <th>Izpildītājs</th>
              <th>Nosaukums</th>
              <th>Daudzums</th>
              <th>Cena(eur)</th>
              <th>Bilde</th>
            </tr>
                @foreach($collections as $c)
                    <tr>
                        <td>{{ $c->id}}</td>
                        <td>{{ $c->izpilditajs}}</td>
                        <td>{{ $c->nosaukums}}</td>
                        <td>
                          @if(Auth::user())
                         <form
                          method="post" action="{{route("edit.collection")}}">
                          @csrf
                          <input type="number" name="daudzums" value="{{$c->daudzums}}">
                          <input style="display: none" type="number" name="id" value="{{$c->id}}">
                          <button class="btn btn-primary">Submit</button>
                        </form>
                        @else{{$c->daudzums}}
                        @endif
                      </td>

                        <td>{{ $c->cena}}</td>
<td><img src="/galadarbs/public/img/collection-{{ $c->id }}.png" height="36" width="36" data-toggle="modal" data-target="#collection-{{$c->id}}"></td>


                    </tr>
                @endforeach
            @endif
        </table>
@foreach($collections as $c)
<div class="modal fade" id="collection-{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">{{$c->nosaukums}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="/galadarbs/public/img/collection-{{ $c->id }}.png" height="450" width="450">
      </div>
      </div>
    </div>
  </div>
</div>
@endforeach




@endsection



