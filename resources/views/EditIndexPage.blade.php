<!doctype html>
<html lang="en">

<head>
  <title>Изменение главной</title>
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
            <form action="/admin/EditIndexTitle" method="POST">
                @csrf
                <div class="form-group">
                    <label class="col-sm-2 control-label">Заголовок ГЛАВНОЙ</label>
                    <div class="">
                        <input class="form-control" id="focusedInput" name="blogtitle" type="text"value="{{$title->indextitle}}">
                    </div>
                    <button type="submit" class="btn btn-warning ">Изменить</button>
                </div></form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class=" me-3 my-3">
                <h3 class="page-header" >Главная страница</h3>
            </div>
            <section class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        ПРИЕМУЩЕСТВА
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card my-4">
                                    <div class=" me-3 my-3 text-end">
                                      <a class="btn btn-success" href="/admin/addAdvantage"><i
                                              class=" add material-icons text-sm"></i>&nbsp;&nbsp;Добавить приемущество</a>
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
                                                          class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                          ПОДЗАГОЛОВОК</th>
                                                      <th class="text-secondary opacity-7"></th>
                                                  </tr>
                                              </thead>
                                              @foreach ($advantages as $advantage)
                                              <tbody>
                                                  <tr>
                                                      <td>
                                                          <div class="d-flex px-2 py-1">
                                                              <div class="d-flex flex-column justify-content-center">
                                                                  <p class="mb-0 text-sm">{{$advantage->id}}</p>
                                                              </div>
                                                          </div>
                                                        </td>
                                                      <td class="align-middle text-center">
                                                          <span class="text-secondary text-xs font-weight-bold">{{$advantage->subtitle}}</span>
                                                      </td>
                                                      <td class="align-middle">
                                                        <a rel="tooltip" class="btn btn-warning"
                                                        href="/admin/EditAdvPage/{{$advantage->id}}" data-original-title=""
                                                        title="">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                          <a rel="tooltip" class="btn btn-danger"
                                                              href="/admin/deleteAdvantage/{{$advantage->id}}" data-original-title=""
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
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
                        ПРИНЦИПЫ
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card my-4">
                                    <div class=" me-3 my-3 text-end">
                                      <a class="btn btn-success" href="/admin/addPrincipe"><i
                                              class=" add material-icons text-sm"></i>&nbsp;&nbsp;Добавить принцип</a>
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
                                                          class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                          ПОДЗАГОЛОВОК</th>
                                                      <th class="text-secondary opacity-7"></th>
                                                  </tr>
                                              </thead>
                                              @foreach ($principes as $principe)
                                              <tbody>
                                                  <tr>
                                                      <td>
                                                          <div class="d-flex px-2 py-1">
                                                              <div class="d-flex flex-column justify-content-center">
                                                                  <p class="mb-0 text-sm">{{$principe->id}}</p>
                                                              </div>
                                                          </div>
                                                        </td>
                                                      <td class="align-middle text-center">
                                                          <span class="text-secondary text-xs font-weight-bold">{{$principe->subtitle}}</span>
                                                      </td>
                                                      <td class="align-middle">
                                                        <a rel="tooltip" class="btn btn-warning"
                                                        href="/admin/EditPrincipePage/{{$principe->id}}" data-original-title=""
                                                        title="">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                      </a>
                                                          <a rel="tooltip" class="btn btn-danger"
                                                              href="/admin/deletePrincipe/{{$principe->id}}" data-original-title=""
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
        </div>
            <div class="panel-body">
                <form action="/admin/editIndex" method="POST" class="form-horizontal " style="display: flex;
                flex-direction: column;" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ваше фото</label>
                        <div class="form-group">
                            <img src="{{ asset('images/' . $product->image4) }}" style="width: 200px" alt="Текущее изображение">
                        </div>
                        <input type="file" name="image4" id="exampleInputFile">
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ваше фото 2</label>
                        <div class="form-group">
                            <img src="{{ asset('images/' . $product->image5) }}" style="width: 200px" alt="Текущее изображение">
                            
                        </div>
                        <input type="file" name="image5" id="exampleInputFile">
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Заголовок</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="focusedInput" type="text" name="title" value="{{$product->title}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">подзаголовок</label>
                        <div class="col-sm-10">
                                <section class="panel">
                                    <div class="panel-body">
                                        <div class="form">
                                            <form action="#" class="form-horizontal">
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control ckeditor" name="subtitle" rows="6">{!!$product->subtitle!!}</textarea>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                        </div>
                    </div>
                    <div class="form-group">
                        <h3 class="col-sm-2 control-label">Изображения для слайдера</h3>
                        <div class="form-group">
                            <img src="{{ asset('images/' . $product->image1) }}" style="width: 200px" alt="Текущее изображение">
                        </div>
                        <input type="file" name="image1" id="exampleInputFile">
                        <div class="form-group">
                            <img src="{{ asset('images/' . $product->image2) }}" style="width: 200px" alt="Текущее изображение">
                            
                        </div>
                        <input type="file" name="image2" id="exampleInputFile">
                        <div class="form-group">
                            <img src="{{ asset('images/' . $product->image3) }}" style="width: 200px" alt="Текущее изображение">
                            
                        </div>
                        <input type="file" name="image3" id="exampleInputFile">
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Имя</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="focusedInput" name="name" type="text"value="{{$product->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Описание</label>
                        <div class="col-sm-10">
                                <section class="panel">
                                    <div class="panel-body">
                                        <div class="form">
                                            <form action="#" class="form-horizontal">
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control ckeditor" name="description" rows="6">{!!$product->description!!}</textarea>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Заголовок для консультации</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="focusedInput" name="consultation" type="text" value="{{$product->consultation}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Описание для консультации</label>
                        <div class="col-sm-10">
                                <section class="panel">
                                    <div class="panel-body">
                                        <div class="form">
                                            <form action="#" class="form-horizontal">
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control ckeditor" name="subtitle2" rows="6">{!!$product->subtitle2!!}</textarea>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Цель</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="focusedInput" name="quote" type="text"value="{{$product->quote}}">
                        </div>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-warning col-sm-10">Изменить</button>
                </form>
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
                              <form action="/admin/EditSEOIndex" method="POST" class="form-horizontal " style="display: flex;
                              flex-direction: column;" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Мета заголовок</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="focusedInput" name="title" type="text"value="{{$product->metatitleindex}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Ключевые слова</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="focusedInput" name="key" type="text"value="{{$product->metakeyindex}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Описание</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="focusedInput" name="desc" type="text"value="{{$product->metadescriptionindex}}">
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
  </main>
  <footer>
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