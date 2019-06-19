<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="{{url('cars')}}" method="post">
      {{csrf_field()}}
      <h1>year</h1>
      <input id="year" type="text" name="" value="">
      <h1>model</h1>
      <input id="model" type="text" name="" value="">
      <h1>make</h1>
      <input id="make" type="text" name="" value="">
      <select>
       @foreach ($categories as $c)
       <option value="volvo">{{$c->Name}}</option>
       @endforeach
      </select>
      <br/>
      <br/>
      <button type="submit" name="button">Submit</button>
    </form>
  </body>
</html>
