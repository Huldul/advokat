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

</head>

<body>
  <main>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <!-- End Navbar -->
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
            <div class="row mb-2" style="display: flex;justify-content: center;">
                <a href="/" style="display: contents;"><button type="button" class="btn btn-success" >На главную</button></a>
              </div>
              <div class="row mb-2" style="display: flex;justify-content: center;">
                <a href="/admin/changePswd" style="display: contents;"><button type="button" class="btn btn-warning" >Изменить пароль</button></a>
              </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        ПРАКТИКА
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card my-4">
                                    <div class=" me-3 my-3 text-end">
                                      <a class="btn btn-success" href="/admin/addPractick"><i
                                              class=" add material-icons text-sm"></i>&nbsp;&nbsp;Добавить практику</a>
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
                                                          class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                          ФОТО</th>
                                                      <th
                                                          class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                          НАЗВАНИЕ</th>
                                                      <th
                                                          class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                          АВТОР </th>
                                                      <th
                                                          class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                          ПОДЗАГОЛОВОК</th>
                                                      <th class="text-secondary opacity-7"></th>
                                                  </tr>
                                              </thead>
                                              @foreach ($products as $product)
                                              <tbody>
                                                  <tr>
                                                      <td>
                                                          <div class="d-flex px-2 py-1">
                                                              <div class="d-flex flex-column justify-content-center">
                                                                  <p class="mb-0 text-sm">{{$product->id}}</p>
                                                              </div>
                                                          </div>
                                                      </td>
                                                      <td>
                                                          <div class="d-flex px-2 py-1">
                                                              <div>
                                                                  <img src="{{asset('images/'.$product->image)}}"
                                                                      class="avatar avatar-sm me-3 border-radius-lg" style="width: 300px" alt="user1">
                                                              </div>
              
                                                          </div>
                                                      </td>
                                                      <td>
                                                          <div class="d-flex flex-column justify-content-center">
                                                              <h6 class="mb-0 text-sm">{{$product->title}}</h6>
              
                                                          </div>
                                                      </td>
                                                      <td class="align-middle text-center text-sm">
                                                          <p class="text-xs text-secondary mb-0">{{$product->author}}
                                                          </p>
                                                      </td>
                                                      <td class="align-middle text-center">
                                                          <span class="text-secondary text-xs font-weight-bold">{{$product->subtitle}}</span>
                                                      </td>
                                                      <td class="align-middle">
                                                          <a rel="tooltip" class="btn btn-warning mb-2"
                                                              href="/admin/editPractick/{{$product->id}}" data-original-title=""
                                                              title="">
                                                              <i class="material-icons">edit</i>
                                                              <div class="ripple-container"></div>
                                                          </a>
                                                          
                                                          <a rel="tooltip" class="btn btn-danger"
                                                              href="/admin/deletePractick/{{$product->id}}" data-original-title=""
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
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      ОТЗЫВЫ
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card my-4">
                                    <div class=" me-3 my-3 text-end">
                                      <a class="btn btn-success" href="/admin/addRewiews"><i
                                              class=" add material-icons text-sm"></i>&nbsp;&nbsp;Добавить Отзыв</a>
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
                                                          class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                          ФОТО</th>
                                                      <th
                                                          class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                          НАЗВАНИЕ</th>
                                                      <th
                                                          class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                          АВТОР </th>
                                                      <th
                                                          class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                          ПОДЗАГОЛОВОК</th>
                                                      <th class="text-secondary opacity-7"></th>
                                                  </tr>
                                              </thead>
                                              @foreach ($rewiews as $rewiew)
                                              <tbody>
                                                  <tr>
                                                      <td>
                                                          <div class="d-flex px-2 py-1">
                                                              <div class="d-flex flex-column justify-content-center">
                                                                  <p class="mb-0 text-sm">{{$rewiew->id}}</p>
                                                              </div>
                                                          </div>
                                                      </td>
                                                      <td>
                                                          <div class="d-flex px-2 py-1">
                                                              <div>
                                                                  <img src="{{asset('images/'.$rewiew->image)}}"
                                                                      class="avatar avatar-sm me-3 border-radius-lg" style="width: 300px" alt="user1">
                                                              </div>
              
                                                          </div>
                                                      </td>
                                                      <td>
                                                          <div class="d-flex flex-column justify-content-center">
                                                              <h6 class="mb-0 text-sm">{{$rewiew->title}}</h6>
              
                                                          </div>
                                                      </td>
                                                      <td class="align-middle text-center text-sm">
                                                          <p class="text-xs text-secondary mb-0">{{$rewiew->author}}
                                                          </p>
                                                      </td>
                                                      <td class="align-middle text-center">
                                                          <span class="text-secondary text-xs font-weight-bold">{{$rewiew->subtitle}}</span>
                                                      </td>
                                                      <td class="align-middle">
                                                          <a rel="tooltip" class="btn btn-warning mb-2"
                                                              href="/admin/editRewiews/{{$rewiew->id}}" data-original-title=""
                                                              title="">
                                                              <i class="material-icons">edit</i>
                                                              <div class="ripple-container"></div>
                                                          </a>
                                                          
                                                          <a rel="tooltip" class="btn btn-danger"
                                                              href="/admin/deleteRewiews/{{$rewiew->id}}" data-original-title=""
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
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      БЛОГИ
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card my-4">
                                    <div class=" me-3 my-3 text-end">
                                      <a class="btn btn-success" href="/admin/addBlog"><i
                                              class=" add material-icons text-sm"></i>&nbsp;&nbsp;Добавить Блог</a>
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
                                                          class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                          ФОТО</th>
                                                      <th
                                                          class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                          НАЗВАНИЕ</th>
                                                      <th
                                                          class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                          АВТОР </th>
                                                      <th
                                                          class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                          ПОДЗАГОЛОВОК</th>
                                                      <th class="text-secondary opacity-7"></th>
                                                  </tr>
                                              </thead>
                                              @foreach ($blogs as $blog)
                                              <tbody>
                                                  <tr>
                                                      <td>
                                                          <div class="d-flex px-2 py-1">
                                                              <div class="d-flex flex-column justify-content-center">
                                                                  <p class="mb-0 text-sm">{{$blog->id}}</p>
                                                              </div>
                                                          </div>
                                                      </td>
                                                      <td>
                                                          <div class="d-flex px-2 py-1">
                                                              <div>
                                                                  <img src="{{asset('images/'.$blog->image)}}"
                                                                      class="avatar avatar-sm me-3 border-radius-lg" style="width: 300px" alt="user1">
                                                              </div>
              
                                                          </div>
                                                      </td>
                                                      <td>
                                                          <div class="d-flex flex-column justify-content-center">
                                                              <h6 class="mb-0 text-sm">{{$blog->title}}</h6>
              
                                                          </div>
                                                      </td>
                                                      <td class="align-middle text-center text-sm">
                                                          <p class="text-xs text-secondary mb-0">{{$blog->author}}
                                                          </p>
                                                      </td>
                                                      <td class="align-middle text-center">
                                                          <span class="text-secondary text-xs font-weight-bold">{{$blog->subtitle}}</span>
                                                      </td>
                                                      <td class="align-middle">
                                                          <a rel="tooltip" class="btn btn-warning mb-2"
                                                              href="/admin/editBlog/{{$blog->id}}" data-original-title=""
                                                              title="">
                                                              <i class="material-icons">edit</i>
                                                              <div class="ripple-container"></div>
                                                          </a>
                                                          
                                                          <a rel="tooltip" class="btn btn-danger"
                                                              href="/admin/deleteBlog/{{$blog->id}}" data-original-title=""
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
              <div class="row" style="display: flex;justify-content: center;">
                <a href="/admin/editContact" style="display: contents;"><button type="button" class="btn btn-info" >Изменить контактную информацию</button></a>
              </div>
          </div>
        </div>
    </main>
    
  </main>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

