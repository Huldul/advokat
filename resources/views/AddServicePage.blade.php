<!doctype html>
<html lang="ru">

<head>
  <title>Добавление товара</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style1.css') }}">

</head>

<body>
  <header class="header dark-bg">
        

    <!--logo start-->
    <a class="logo" style="margin-right: 30px"> <span class="lite">Admin</span></a>
    <a href="/"class="logo"><span class="lite">На сайт</span></a>
</header>
@include('aside') 
  <main>
    <section id="main-content">
      <section class="wrapper">
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <div class="panel-body">
          <form action="/admin/addService" method="POST" class="form-horizontal " style="display: flex;
            flex-direction: column;" enctype="multipart/form-data" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label class="col-sm-2 control-label">НАЗВАНИЕ</label>
              <div class="col-sm-10">
                <input class="form-control" id="focusedInput" type="text" name="title" value="{{ old('title') }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">ОПИСАНИЕ</label>
              <div class="col-sm-10">
                <textarea class="form-control" style="height: 200px" name="subtitle"
                  type="text">{{ old('subtitle') }}</textarea>
              </div>
            </div>

            </div>
            <button type="submit" class="btn btn-warning col-sm-10">Добавить</button>
          </form>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
