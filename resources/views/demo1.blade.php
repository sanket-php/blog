<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Example</title>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <br><a href="blog"><button type="button" class="btn btn-success" id=''>Blog Module</button></a>
  <h2>Basic Table</h2>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Mobile</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($abc as $rec)
        <tr>
          <td>{{ $rec->id }}</td>
          <td>{{ $rec->name }}</td>
          <td>{{ $rec->address }}</td>
          <td>{{ $rec->mobile }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <h3><b>Insert Records :</b></h3>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Mobile</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="text" id='id'></td>
        <td><input type="text" id='name'></td>
        <td><input type="text" id='address'></td>
        <td><input type="text" id='mobile'></td>
      </tr>
    </tbody>
  </table>
  <button type="button" class="btn btn-success" id='submit'>Add Data</button>
  <h3><b>Delete Records :</b></h3>
  <input type="text" name="" id="deleteId" value="">
  <button type="button" class="btn btn-success" id='delete'>Delete Data</button>
</div>
  <script type="text/javascript" src="{{ URL::asset('assets/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/demo1.js') }}"></script>
</body>
</html>
