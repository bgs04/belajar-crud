<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> 
</head>

<body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
               <a class="navbar-brand" href="#">BLJR-CI</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                         <a class="nav-link active" href="<?= base_url(); ?>home">Home <span class="sr-only">(current)</span></a>
                         <a class="nav-link" href="<?= base_url(); ?>siswa">Siswa</a>
                         <a class="nav-link" href="<?= site_url('login/logout') ?>">Logout</a>
                    </div>
               </div>
          </div>
     </nav>