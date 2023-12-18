<!DOCTYPE html>
<html>

<head>
    <title>Galerie | Maborne</title>
    <meta charset="UTF-8">
    <meta name="description" content="Boto Photo Studio HTML Template">
    <meta name="keywords" content="photo, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <link rel="stylesheet" href="css/fresco.css" />
    <link rel="stylesheet" href="css/slick.css" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css" />


    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-md-3 order-2 order-sm-1">
                    <div class="header__social">

                    </div>
                </div>
                <div class="col-sm-4 col-md-6 order-1  order-md-2 text-center">
                    <a href="{{ route('index') }}" class="site-logo">
                        <img src="img/maborne/logo_black.png" width="210px" alt="">
                    </a>
                </div>
                <div class="col-sm-4 col-md-3 order-3 order-sm-3">
                    <div class="header__switches">
                        <a href="#" class="nav-switch"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
            </div>
            <nav class="main__menu">
                <ul class="nav__menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                    <li><a href="{{ route('images.index') }}">Upload</a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Header Section end -->

    <!-- Hero Section -->
    <div class="container mt-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="main">
            <div class=" text-center font-weight-bold mb-2">
                <h2 style="color:#e00b00;">Upload images</h2>
            </div>
            <form name="upload-multiple-image" method="POST" action="{{ route('images.store') }}"
                accept-charset="utf-8" enctype="multipart/form-data"
                style="background-color: #f3f3f3; padding: 10px 50px; margin-bottom: 50px;">
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label style="font-weight:bold;margin:12px 0px 5px 0px;">Images:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Télécharger</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="images" name="images[]"
                                        multiple="">
                                    <label class="custom-file-label" for="inputGroupFile01">Choisir les images</label>
                                </div>
                            </div>
                            <div>
                                <label for="category"
                                    style="font-weight:bold;margin:12px 0px 5px 0px;">Catégorie:</label>
                                <select class="form-control" name="category" id="category">
                                    <option value="Chocolate-Cake">Chocolate Cake</option>
                                    <option value="Vanilla-Cake">Vanilla Cake</option>
                                    <option value="Strawberry-Cake">Strawberry Cake</option>
                                    <option value="Lemon-Cake">Lemon Cake</option>
                                </select>
                            </div>
                        </div>
                        @error('images')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" id="submit"
                            style="background-color:#e00b00; float:right; border:0;">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <div class="container mt-5">
        <input class="form-control" id="myInput" type="text" placeholder="Search.."
            style="border:1px solid ; margin-bottom:20px;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Category</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach ($images as $image)
                    <tr>
                        <td><img src="{{ url('files/images/' . $image->image) }}" width="100px"></td>
                        <td>{{ $image->category }}</td>
                        <td><button type="button" class="btn btn-danger btn-rounded btn-icon"
                                onclick="document.getElementById('model-open-{{ $image->id }}').style.display='block'">
                                <i class="fa fa-trash"></i>
                            </button></td>
                        <form action="{{ route('images.delete', $image->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="modal" id="model-open-{{ $image->id }}">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">La suppression d'une image définitivement</h5>
                                            <button type="button" class="btn-close"
                                                data-bs-dismiss="modal"onclick="document.getElementById('model-open-{{ $image->id }}').style.display='none'"
                                                aria-label="Close">
                                                <span aria-hidden="true"></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Etes-vous sùr de vouloir supprimer cette image?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger">Oui</button>
                                            <button type="button" class="btn btn-secondary"
                                                onclick="document.getElementById('model-open-{{ $image->id }}').style.display='none'"
                                                data-bs-dismiss="modal">Annuler</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </tr>
                @endforeach
                @foreach ($videos as $video)
                    <tr>
                        <td>
                            <video width="200" controls>
                                <source src="{{ url('files/images/' . $video->image) }}" type="video/mp4">
                            </video>
                        </td>
                        <td>{{ $video->category }}</td>
                        <td><button type="button" class="btn btn-danger btn-rounded btn-icon"
                                onclick="document.getElementById('model-open-{{ $video->id }}').style.display='block'">
                                <i class="fa fa-trash"></i>
                            </button></td>
                        <form action="{{ route('images.delete', $video->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="modal" id="model-open-{{ $video->id }}">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">La suppression d'une video définitivement</h5>
                                            <button type="button" class="btn-close"
                                                data-bs-dismiss="modal"onclick="document.getElementById('model-open-{{ $video->id }}').style.display='none'"
                                                aria-label="Close">
                                                <span aria-hidden="true"></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Etes-vous sùr de vouloir supprimer cette video?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger">Oui</button>
                                            <button type="button" class="btn btn-secondary"
                                                onclick="document.getElementById('model-open-{{ $video->id }}').style.display='none'"
                                                data-bs-dismiss="modal">Annuler</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    <!--====== Javascripts & Jquery ======-->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/fresco.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

</body>

</html>
