<!DOCTYPE html>
<html lang="en">
<head>
  <title>laravel crud</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-6 pt-2">
      <form action="{{ isset($todo) ? route('update-todo',['todo'=>$todo->id]) : route('store-todo') }}" method="POST">
        @csrf
        @if(isset($todo))
          @method('PUT')
        @endif

        <div class="input-group mb-3">
       <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{ $todo->title ?? '' }}">
      <div class="input-group-append">
        <button class="btn btn-dark" type="submit">Save</button>
      </div>
    </div>



      </form>
      
      <table class="table table-bordered">
        <thead>
          <th>Sno.</th>
          <th>Title</th>
          <th>Action</th>
        </thead>

        <tbody>
          @foreach($todos as $todo)
          <tr>
            <td>{{ $loop->index+1}}</td>
            <td>{{ $todo->title }}</td>
            <td>
              <a href="/edit/{{$todo->id}}" class="btn btn-sm btn-dark">
            Edit</a></td>
          </tr>
          @endforeach
        </tbody>

      </table>






    </div>
  </div>

</div>

</body>
</html>
