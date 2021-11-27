@extends('front.app')
@section('title','Mission')
@section('content')
@foreach(config('app.langlist') as $lg)
           <a href="{{URL('setlang/'.$lg)}}">{{$lg}}</a>
            @endforeach
<h1>{{__('appname.laravel')}}</h1>
<a class="btn btn-success" href="{{URL('export')}}">Execl</a>
<form action="{{URL('import')}}" method="POST" enctype='multipart/form-data'>
@csrf
<input type="file" , name="file">
<input type="submit" value="Submit">
</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Roll</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $d)
    <tr>
      <th scope="row">{{$d->id}}</th>
      <td>{{$d->studentName}}</td>
      <td>{{$d->class}}</td>
      <td>{{$d->roll}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection