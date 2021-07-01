<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
</head>
<body>
		<center><h1>Table Data Export To PDF</h1></center>
	<a href="{{url('export-pdf')}}"><button>Export To PDF</button></a>
<table id="customers">

  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Mobile No</th>
    <th>Address</th>
  </tr>

  @foreach($students as $student)
		<tr>
			<td>
				{{$student->id}}
			</td>

			<td>
				{{$student->name}}
			</td>

			<td>
				{{$student->mobile_no}}
			</td>

			<td>
				{{$student->address}}
			</td>
		</tr>
		@endforeach
</table>

</body>
</html>
