<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class WebsiteController extends Controller
{

  public function index ()
  {
    $activities = Article::all()->toArray();
    $events = array();

    return view('index',compact('activities', 'events'));
  }

  public function igem ()
  {
    return view('igem');
  }

  public function about ()
  {
    return view('about');
  }

  public function activity ()
  {
    $activities = Article::all()->toArray();

    return view('activity',compact('activities'));
  }

  public function event ()
  {
    $events = array();

    return view('event',compact('events'));
  }

}
