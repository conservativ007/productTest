<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <main>
      <table>
        <h2>{{$catName}}</h2>
        @foreach($cat as $item)
        <tr>
          <th>name</th>
          <th>price</th>
        </tr>
        <tr>
          <td>
            <a href="/product/{{$category_id}}/{{$loop->iteration}}">{{$item['name']}}</a>
          </td>
          <td>{{$item['cost']}}</td>
        </tr>
        @endforeach
      </table>
    </main>
  </body>
</html>
