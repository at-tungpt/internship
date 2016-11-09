<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Today</title>
</head>
<body>
  <table border="1px">
    <tr>
      <th>
        id
      </th>
      <th>
        job
      </th>
      <th>
        time
      </th>
      <th>
        rate
      </th>
    </tr>
    <tr>
      <td>
        1
      </td>
      <td>
        install enviroment
      </td>
      <td>
        10:00am
      </td>
        {!! Form::open([]) !!}
    </tr>
    <tr>
      <td>
        {!!Form::label('email','Full name')!!}
        {!! Form::text('email', 'example@gmail.com') !!}
      </td>
      <td>
        {!!Form::label('email','E-Mail Address')!!}
        {!! Form::text('email', 'Ricardo KAKA') !!}
      </td>
      <td>
        {!!Form::checkbox('name', 'value')!!}
      </td>
    </tr>
    {!! Form::close()!!}
  </table>
</body>
</html>
