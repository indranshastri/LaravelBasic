<?php
$router->get("","BooksController@index");
$router->post("books","BooksController@save");
$router->get("api/books","BooksController@booksApi");
$router->get("about","BooksController@about");
