@extends('layout')

@section('title','Our Personals')

@section('content')
<ul>
    @foreach ($persons as $person)

     <li>	{{ $person }} </li>

    @endforeach
</ul>

@section('footer')
<div class="footer">	
<h2>	ne istesem </h2>
</div>	

@stop
</body>
</html>