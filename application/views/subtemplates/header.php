<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <title><?php echo $title; ?></title>
    <style>
    * {
        font-family: 'Poppins', 'Helvetica';
    }
	.dataTables_length, .dataTables_filter, .dataTables_paginate{
		padding: 10px;
	}
	.dataTables_filter input {
		border: 1px solid rgb(166, 166, 166);
    	border-radius: 5px;
	}
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Zebra Teste</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo $title == 'Programadores' ? 'active':'' ?>" href="<?php echo site_url() ?>/programadores">Programadores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $title == 'Cargos' ? 'active':'' ?>" href="<?php echo site_url() ?>/cargos">Cargos</a>
                </li>
            </ul>
        </div>
    </nav>
