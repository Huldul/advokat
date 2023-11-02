<!doctype html>
<html lang="ru">

<head>
  <title>Админ панель</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/line-icons.css') }}">

</head>

<body>
    <header class="header dark-bg">
        

        <!--logo start-->
        <a class="logo" style="margin-right: 30px"> <span class="lite">Admin</span></a>
        <a href="/"class="logo"><span class="lite">На сайт</span></a>
    </header>
    @include('aside')

    <section id="main-content">
        <!-- Navbar -->
        <!-- End Navbar -->
        <section class="wrapper">
        <div class="container-fluid py-4">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form action="/admin/EditServiceTitle" method="POST">
                @csrf
                <div class="form-group">
                    <label class="col-sm-2 control-label">Заголовок УСЛУГ</label>
                    <div class="">
                        <input class="form-control" id="focusedInput" name="servicetitle" type="text"value="{{$title->servicetitle}}">
                    </div>
                    <button type="submit" class="btn btn-warning ">Изменить</button>
                </div></form>
            <div class=" me-3 my-3">
                <h3 class="page-header" >Сервисы</h3>
            </div>
            <div class="accordion-item">
                  <div class="accordion-body">
                      <div class="row">
                          <div class="col-12">
                              <div class="card my-4">
                                  <div class=" me-3 my-3 text-end">
                                    <a class="btn btn-success" href="/admin/addService"><i
                                            class=" add material-icons text-sm"></i>&nbsp;&nbsp;Добавить сервис</a>
                                            
                                </div>
                                <div class="card-body px-0 pb-2">
                                    <div class="table-responsive p-0">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        ID
                                                    </th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        НАЗВАНИЕ</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        ПОДЗАГОЛОВОК</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        ПОДСЕРВИСЫ</th>
                                                    <th class="text-secondary opacity-7"></th>
                                                </tr>
                                            </thead>
                                            @foreach ($services as $service)
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <p class="mb-0 text-sm">{{$service->id}}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{$service->title}}</h6>
            
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span class="text-secondary text-xs font-weight-bold">{{$service->subtitle}}</span>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        @foreach ($service->subServices as $subservice)
                                                        <span class="text-secondary text-xs font-weight-bold">{{$subservice->title}},</span>
                                                        @endforeach
                                                    </td>
                                                    <td class="align-middle">
                                                        <a rel="tooltip" class="btn btn-info btn-sm"
                                                            href="/admin/AddSubService/{{$service->id}}" data-original-title=""
                                                            title="">
                                                            <i class="material-icons">Добавить подсервис</i>
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                        <a rel="tooltip" class="btn btn-danger btn-sm"
                                                            href="/admin/deleteSubServicePage/{{$service->id}}" data-original-title=""
                                                            title="">
                                                            <i class="material-icons" style="color: white;">Удалить подсервис</i>
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                        <a rel="tooltip" class="btn btn-warning btn-sm"
                                                            href="/admin/editService/{{$service->id}}" data-original-title=""
                                                            title="">
                                                            <i class="material-icons">edit</i>
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                        
                                                        <a rel="tooltip" class="btn btn-danger btn-sm"
                                                            href="/admin/deleteService/{{$service->id}}" data-original-title=""
                                                            title="">
                                                            <i class="material-icons" style="color: white;">delete</i>
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                      </div>
                                </div>  
                              </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="accordion mt-5" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSEO" aria-expanded="false" aria-controls="collapseOne">
                      SEO
                  </button>
                </h2>
                <div id="collapseSEO" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      <form action="/admin/EditSEOService" method="POST" class="form-horizontal " style="display: flex;
                      flex-direction: column;" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Мета заголовок</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="focusedInput" name="title" type="text"value="{{$indexpage->metatitleservice}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ключевые слова</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="focusedInput" name="key" type="text"value="{{$indexpage->metakeyservice}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Описание</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="focusedInput" name="desc" type="text"value="{{$indexpage->metadescriptionservice}}">
                        </div>
                    </div>
                        <button type="submit" class="btn btn-warning col-sm-10">Изменить</button>
                    </form>
                  </div>
                </div>
              </div>
              </section>
    </section>
</section>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>

</html>
