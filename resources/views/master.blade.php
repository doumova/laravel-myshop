<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce project</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    {{--!Ajouter le header--}}
   {{View::make('header')}}
       {{--! ajouter le contenu de la page--}}
   @yield('content')
       {{--! ajouter le footer--}}
   {{View::make('footer')}}
</body>
<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    .custom-product-order{
        height: auto;
    }
    img.slider-img{
        height: 400px !important;
    }
    .descrip{
        color: rgb(122, 182, 103)
    }
    .trainding-image{
        height: 100px;
        border-radius: 5px;
    }
    .tr-thumbnail{
        height: 150px;
    }
    /* .trainding-image:hover{
        transform: scale(1.5);
    } */
    .trainding-image-myorders{
        height: 150px;
        border-radius: 10px;
    }
    .trainding-image-tr{
        height: 150px;
    }
   
    .trainding-item{
        float: left;
        width: 20%;
    }
    .detail-img{
        height: 200px;
        border-radius: 5px;
        transition: transform .2s; /* Animation */

    }
    .detail-img:hover{
          transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */

    }
    .container.details{
        height: 500px;
        
    }
    .search-box{
        width: 500px !important;
    }
    .cart-list-devider{
        border-bottom: 1px solid #cccccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
</style>
</html>