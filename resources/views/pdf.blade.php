<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--style goes here-->
    <style>
        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
            position: absolute;
            top:170px;
            cursor: pointer;
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
      <!--style ends here-->
</head>
<body>
      <!--table goes here-->
    <table width="50%" border="1" style="border-collapse: collapse">
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Marks1</th>
            <th>Marks2</th>
        </tr>
          <!--loop goes here-->
        @foreach ($student as $s)
            <tr>
                <td>{{$s->id}}</td>
                <td>{{$s->first_name}}</td>
                <td>{{$s->last_name}}</td>
                <td>{{$s->marks1}}</td>
                <td>{{$s->marks2}}</td>
            </tr>
        @endforeach
          <!--loop ends here-->
    </table>
      <!--table  ends here-->
    <a href="{{url('pdf-generate')}}">Generate Pdf</a>
</body>
</html>