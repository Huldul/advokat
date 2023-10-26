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
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">                
                <li class="">
                    <a class="" href="/admin/EditIndexPage">
                        <i class="icon_house_alt"></i>
                        <span>Изменить главную</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="/admin/EditAboutPage" class="">
                        <i class="icon_document_alt"></i>
                        <span>Изменить о мне</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="form_component.html">Form Elements</a></li>                          
                        <li><a class="" href="form_validation.html">Form Validation</a></li>
                    </ul>
                </li>    
                <li class="sub-menu">
                    <a href="/admin/EditPractickPage1" class="">
                        <i class="icon_desktop"></i>
                        <span>Изменить практики</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                </li>   
                <li class="sub-menu">
                    <a href="/admin/EditRewiewsPage1" class="">
                        <i class="icon_desktop"></i>
                        <span>Изменить отзывы</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                </li>
                <li>
                    <a class="" href="/admin/EditBlogPage1">
                        <i class="icon_genius"></i>
                        <span>Изменить блоги</span>
                    </a>
                </li>
                <li>                     
                    <a class="" href="/admin/EditServicePage1">
                        <i class="icon_piechart"></i>
                        <span>Изменить сервисы</span>
                        
                    </a>
                                       
                </li>
                <li>                     
                    <a class="" href="/admin/EditContactPage">
                        <i class="icon_piechart"></i>
                        <span>Изменить контактную информацию</span>
                        
                    </a>
                                       
                </li>
                <li>                     
                    <a class="" href="FormsPage1">
                        <i class="icon_piechart"></i>
                        <span>Заявки</span>
                        
                    </a>
                                       
                </li>
                <li>                     
                    <a class="" href="/admin/ChangePswd">
                        <i class="icon_piechart"></i>
                        <span>Изменить пароль</span>
                        
                    </a>
                                       
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>    

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
            <div class="accordion-item">
                <div class=" me-3 my-3">
                    <h3 class="page-header" >Блоги</h3>
                </div>
                <form action="/admin/EditBlogTitle" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Заголовок БЛОГА</label>
                        <div class="">
                            <input class="form-control" id="focusedInput" name="blogtitle" type="text"value="{{$title->blogtitle}}">
                        </div>
                        <button type="submit" class="btn btn-warning">Изменить</button>
                    </div></form>
                  <div class="accordion-body">
                      <div class="row">
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
                                              <td class="align-middle">
                                                  <div class="d-flex flex-column justify-content-center">
                                                      <h6 class="mb-0 text-sm">{{$blog->title}}</h6>
      
                                                  </div>
                                              </td>
                                              
                                              <td class="align-middle text-center">
                                                  <span class="text-secondary text-xs font-weight-bold">{{$blog->subtitle}}</span>
                                              </td>
                                              <td class="align-middle">
                                                  <a rel="tooltip" class="btn btn-warning"
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
