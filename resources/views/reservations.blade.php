<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="{{url('reservations/available')}}" method="get">
      {{csrf_field()}}
      <h1>Reservation date</h1>
      <input id="reservation_date" type="text" name="reservation" value="" required>
      <h1>Return date</h1>
      <input id="return_date" type="text" name="return" value="" required>
      <h1>Locations</h1>
      <select name="loc" required>
       @foreach ($locations as $l)
       <option value="volvo">{{$l->address}}</option>
       @endforeach
      </select>
      <br/>
      <br/>
      <button type="submit" name="button">Submit</button>
    </form>
  </body>
</html>
