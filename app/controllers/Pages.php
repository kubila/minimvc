<?php
//That is default page when you open /mvc, but if you open /mvc/posts the Posts.php takes action.
class Pages  extends Controller
{
  public function __construct()
  { }

  public function index()
  {
    // This array passes its properties to the index.php
    $data = [
      'title' => 'miniMVC',

    ];

    $this->view("pages/index", $data);
  }


  public function about()
  {
    $data = [
      'title' => 'About Us'
    ];
    $this->view("pages/about", $data);
  }
}
