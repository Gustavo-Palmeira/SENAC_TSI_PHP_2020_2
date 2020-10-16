<?php 

session_start();

require 'sessao.php';

session_destroy();

header('location: index.php');