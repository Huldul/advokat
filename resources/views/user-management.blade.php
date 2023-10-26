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
                        <span>Изменить Услуги</span>
                        
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

