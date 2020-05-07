<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <main>
<table>
  <tr>
    <td><a href="/product/{{$cat_id}}">{{$cat}}</a></td>
    <td>{{$product['name']}}</td>
    <td>{{$product['inStock'] ? 'есть в наличии' : 'нет в наличии'}}</td>
    <td>{{$product['desc']}}</td>
  </tr>
</table>
  </main>
  </body>
</html>
