<?php

$db=mysqli_connect("localhost","root","","biblioteca_proiect",);
if(!$db)
{
    die("conectare esuata".mysqli_connect_error());
}

