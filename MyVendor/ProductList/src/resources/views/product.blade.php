<!DOCTYPE html>
    <html lang="en">
    <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          <title>Products</title>
    </head>
        <body>

          <div style="width: 500px; margin: 0 auto; margin-top: 90px;">
           

          <h3>Product List</h3>

          <table class="table table-striped">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Color</th>
                      <th>Speed</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($product as $row)
                  <tr>
                      <td>{{$row->id}}</td>
                      <td>{{$row->name}}</td>
                      <td>{{$row->price}}</td>
                      <td>{{$row->color}}</td>
                      <td>{{$row->speed}}</td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
    </body>
    </html>
