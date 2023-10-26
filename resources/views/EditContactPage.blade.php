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
                <h3 class="page-header" >Отзывы</h3>
            </div>
            <div class="panel-body">
                <form action="/admin/editContact" method="POST" class="form-horizontal " style="display: flex;
                flex-direction: column;" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 control-label">АДРЕСС</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="focusedInput" type="text" name="adress" value="{{$product->adress}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">КОРОТКИЙ АДРЕСС</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="focusedInput" type="text" name="shortadress" value="{{$product->adress}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">НОМЕР</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="focusedInput" type="tel" name="number" value="{{$product->number}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">EMAIL</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="focusedInput" name="email" type="mail"value="{{$product->email}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">INSTAGRAM</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="focusedInput" name="inst" type="text"value="{{$product->instagram}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">FACEBOOK</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="focusedInput" name="face" type="text" value="{{$product->facebook}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">WHATSAPP</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="focusedInput" name="wa" type="text"value="{{$product->whatsapp}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ЗАГОЛОВОК НАД КАРТОЙ</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="focusedInput" name="title" type="text"value="{{$product->title}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ПОДЗАГАЛОВОК</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="focusedInput" name="subtitle" type="text"value="{{$product->subtitle}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ЗАГОЛОВОК ДЛЯ ИНСТАГРАММ</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="focusedInput" name="inst_title" type="text"value="{{$product->inst_title}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ПОДЗАГАЛОВОК</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="focusedInput" name="inst_subtitle" type="text"value="{{$product->inst_subtitle}}"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ИНОРМАЦИЯ О ЛИЦЕНЗИИ</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="focusedInput" name="licenze" type="text"value="{{$product->licenze}}"></textarea>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-warning col-sm-10">Изменить</button>
                </form>
            </div>
        </section>
    </section>
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