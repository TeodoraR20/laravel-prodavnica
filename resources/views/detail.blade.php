
@extends('master')
@section("content")

<div class=" container">

<div class="row">

<div class="col-sm-6">

<img  class="detail-img"src="{{$product['gallery']}}" alt="">
</div>

<div class="col-sm-6">

<a href="/">Nazad</a>
<h2>{{$product['name']}}</h2>
<h3>Price : {{$product['price']}}</h3>
<h4>Details : {{$product['description']}}</h4>
<h4>Category : {{$product['category']}}</h4>

<br><br>

<button class="btn btn-primary">Dodaj u korpu</button>

<br><br>

<button class="btn btn-success">Kupi</button>


</div>

</div>

</div>

@endsection