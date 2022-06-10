<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    body{
      font-size:16px;
      margin:5px;
    }
    h1 {
      font-size:20px;
      text-align: center;
    }
    .content {
      margin:10px; 
    }
    .form-item{
      overflow: hidden;
      margin-bottom: 20px;
    }
    .form-item-label{
      font-weight: bold;
      float: left;
      margin: 0 20px;
      width: 135px;
      padding: 20px 10px;
    }
    .form-btn{
      color: white;
      background-color: black;
      border-radius: 5px;
      padding: 10px 50px;
      margin-bottom: 30px;
    }
    .btn{
      text-align: center;
    }
  </style>
</head>
<body>
  <h1>@yield('title')</h1>
  <div class="content">
  @yield('content')
  </div>
</body>
</html>