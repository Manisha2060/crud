<?php

class DatabaseConnection
{
     function getConnection()
     {
        return mysqli_connect('localhost','root','','student');
     }
}