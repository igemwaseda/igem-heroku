<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{

  public function index ()
  {
    $activities = array(
      1 => array(
        'id' => 1,
        'title' => "第1回活動報告",
        'content' => "2019年4月よりWaseda iGEMのチームの活動が始まりました。現時点では週1回土曜に集まって活動しております。内容としてはチームの基盤づくり、各自が勉強した生物学の基本的な知識の共有、ホームページ作り、iGEMについての勉強(概要や過去の研究)等などを行ってきました。現時点のメンバーは学部1年~3年生が10人ほどいます。",
        'category' => "hogepiyo",
        'created' => '2019-7-1',
        'modified' => '2019-7-6',
      ),
    );

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
    $activities = array(
      1 => array(
        'id' => 1,
        'title' => "第1回活動報告",
        'content' => "2019年4月よりWaseda iGEMのチームの活動が始まりました。現時点では週1回土曜に集まって活動しております。内容としてはチームの基盤づくり、各自が勉強した生物学の基本的な知識の共有、ホームページ作り、iGEMについての勉強(概要や過去の研究)等などを行ってきました。現時点のメンバーは学部1年~3年生が10人ほどいます。",
        'anchor' => "https://miss-id.jp/nominee/4837",
        'category' => "hogepiyo",
        'created' => '2019-7-1',
        'modified' => '2019-7-6',
      ),
    );

    return view('activity',compact('activities'));
  }

  public function event ()
  {
    $events = array();

    return view('event',compact('events'));
  }

}
