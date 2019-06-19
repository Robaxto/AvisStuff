<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
        @foreach ($categories as $c)
        <tr>
          <td><a href="#">{{$c->name}}</a></td>
          <td><a href="#">{{$c->cost}}</a></td>
        </tr>
        @endforeach
    </table>
  </body>
</html>
