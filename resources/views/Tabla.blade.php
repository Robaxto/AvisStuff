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
          <td>{{$c->name}}</td>
        </tr>
      @endforeach
    </table>
    {{!!$categories->render()!!}}
  </body>
</html>
