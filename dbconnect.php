<?php
if(!mysql_connect("localhost","root","password"))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("starwars"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>