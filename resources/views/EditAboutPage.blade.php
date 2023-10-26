<!doctype html>
<html lang="en">

<head>
  <title>Изменение товара</title>
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
            <div class=" me-3 my-3">
                <h3 class="page-header" >О мне</h3>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
                        СЕРТИФИКАТЫ
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card my-4">
                                    <div class=" me-3 my-3 text-end">
                                      <a class="btn btn-success" href="/admin/addSertificate"><i
                                              class=" add material-icons text-sm"></i>&nbsp;&nbsp;Добавить сертификат</a>
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
                                                          ФОТО</th>
                                                      <th class="text-secondary opacity-7"></th>
                                                  </tr>
                                              </thead>
                                              @foreach ($sertificates as $sertificate)
                                              <tbody>
                                                  <tr> 
                                                      <td>
                                                          <div class="d-flex px-2 py-1">
                                                              <div class="d-flex flex-column justify-content-center">
                                                                  <p class="mb-0 text-sm">{{$sertificate->id}}</p>
                                                              </div>
                                                          </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex px-2 py-1">
                                                                <div>
                                                                    <img src="{{asset('images/'.$sertificate->image)}}"
                                                                        class="avatar avatar-sm me-3 border-radius-lg" style="width: 300px" alt="user1">
                                                                </div>
                
                                                            </div>
                                                        </td>
                                                      <td class="align-middle">
                                                          
                                                          <a rel="tooltip" class="btn btn-danger"
                                                              href="/admin/deleteSertificate/{{$sertificate->id}}" data-original-title=""
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
                <form action="/admin/editAbout" method="POST" class="form-horizontal " style="display: flex;
                flex-direction: column;" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ваше фото</label>
                        <div class="form-group">
                            <img src="{{ asset('images/' . $aboutPage->image1) }}" style="width: 200px" alt="Текущее изображение">
                            <label for="exampleInputFile">Изображение</label>
                            <input type="file" name="image4" id="exampleInputFile">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ваше фото 2</label>
                        <div class="form-group">
                            <img src="{{ asset('images/' . $aboutPage->image2) }}" style="width: 200px" alt="Текущее изображение">
                            <label for="exampleInputFile">Изображение</label>
                            <input type="file" name="image5" id="exampleInputFile">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Заголовок  (внутри span то, что будет выделенно)</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="focusedInput" type="text" name="title" value="{{$aboutPage->title}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Подзаголовок 1</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="focusedInput" style="height: 200px" type="text" name="subtitle">{{$aboutPage->subtitle}}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Подзаголовок 2</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="focusedInput" name="subtitle2" type="text">{{$aboutPage->subtitle2}}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning col-sm-10">Изменить</button>
                </form>
            </div>
        </section>
    </section>
  
</section>
</section>
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