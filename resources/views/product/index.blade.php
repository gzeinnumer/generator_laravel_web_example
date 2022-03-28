<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

</head>

<body>
  <div class="container">
    <div class="row p-2">
      @include('product.add')
      @include('product.find')
      @include('product.edit')
      @include('product.delete')
    </div>
    <div class="row">
      @if(session('sukses'))
      <div class="alert alert-success" role="alert">
          {{session('sukses')}}
      </div>
      @endif
      <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <td>Name</td>
            <td>Id Type</td>
            <td>Created at</td>
            <td>Updated at</td>
            <td>Action</td>
          </tr>
        </thead>
        <tbody> 
          @foreach($data as $d) 
          <tr>
            <td>{{$d->name}}</td>
            <td>{{$d->id_type}}</td>
            <td>{{$d->created_at}}</td>
            <td>{{$d->updated_at}}</td>
            <td>
              <a href="/product/find/{{$d->id}}" class="btn btn-info btn-sm">Detail</a>
              <a href="/product/find_update/{{$d->id}}" class="btn btn-warning btn-sm">Edit</a>
              <a href="/product/find_delete/{{$d->id}}" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr> 
          @endforeach 
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>