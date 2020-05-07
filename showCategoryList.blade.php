<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      @foreach($cat as $item)
      <tr>
        <td>
          <a href="/product/{{$loop->iteration}}">{{$item['name']}}</a>
        </td>
      </tr>
      @endforeach
    </table>
  </body>
</html>
