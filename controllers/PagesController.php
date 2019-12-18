<?php

class PagesController {
  public function home()
  {
    $users = App::get('database')->selectAll('users');

    return view('index', [
      'users' => $users
    ]);
  }

  public function about()
  {
    $company = 'Laracast';
    return view('about', ['company' => $company]);
  }

  public function contact()
  {
    return view('contact');
  }
}