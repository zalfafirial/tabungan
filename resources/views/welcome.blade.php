<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="bg-success bg-opacity-50">
<div class="text-center">
<h3>Tabungan</h3>
</div>

<div class="container">
<form class="card shadow p-5 mt-3 mb-5 bg-primary bg-opacity-25" action="{{ route('store') }}" method="POST">
@csrf
<label for="fname">NIS</label>
<input class="form-control" type="text" id="fname" name="nis" placeholder="Masukkan nis disini">

<label for="lname">Nama Lengkap</label>
<input class="form-control" type="text" id="lname" name="nama" placeholder="Masukkan nama disini">

<label for="rayon">Rayon</label>
<select class="form-control" id="rayon" name="rayon">


<option value="Cic 1">Cic 1</option>
<option value="Cic 2">Cic 2</option>
<option value="Cic 3">Cic 3</option>
</select>
<div class="text-center">
<input class="btn btn-success mt-2" style="width: 250px;" type="submit" value="Submit">
</div>
</form>
</div>

<div class="row">
<div class="col-md-12">
<div class="card bg-primary bg-opacity-25">
<div class="card-header">

<table class="table table-stripped">
<tr>
<th>No</th>
<th>NIS</th>
<th>Nama Lengkap</th>
<th>Rayon</th>
<th>Jumlah Uang</th>
</tr>
<?php $i = 1; ?>
@foreach($data as $dt)
<tr>
<td>{{$i++}}</td>
<td>{{$dt->nis}}</td>
<td>{{$dt->nama}}</td>
<td>{{$dt->rayon}}</td>
<td>{{$dt->jumlah_uang}}</td>
<td>

<form action="{{route('indexEditTabungan', $dt->id)}}" method="POST">
@csrf
<button>edit</button>
</form>

</td>
</tr>
@endforeach
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>



