@extends('template')
@section('title', 'Waseda-iGEM')
@include('head')
@include('header')

@section('content')
<div class="container">
  <div id="iGEM" class="section scrollspy">
    <h5>iGEM</h5>
    <div class="divider"></div>
    <p>
      iGEM( International Genetically Engineered Machine competition)とは合成生物学の世界大会のことです。この大会は年に一回ボストンで開催され、
      そこでは遺伝子組み換えによって自分たちで作り出した新たな生物システムをチームでプレゼンし、その機能、実現性、実用性などを競い合います。iGEMは2004年に米5大学間の大会として始まり、今では世界各国から約300チーム、4000人が集まる国際大会へと発展しました。iGEMはHighschool、Undergrad(23歳未満)、Overgrad(23歳以上が1人以上)の3カテゴリーに分かれています。評価方法は”メダル”と”トラック”の二種類があります。メダルでは金、銀、銅メダルそれぞれに要件が定められておりそれを満たすことで
      メダルを獲得できます。トラックでは各チームのプレゼンを、環境、エネルギー、医療、情報処理などの分野に分けその中で優勝を争います。どのトラックでエントリーするかは自分たちで決められます。このトラック制度のおかげで各チームは分野を絞ってより深い研究をすることができます。そしてテーマ、プレゼンなどを総合評価し各カテゴリーごとにGrand prizeが1チーム決まります。
    </p>
  </div>
  <div id="biology" class="section scrollspy">
    <h5>合成生物学</h5>
    <div class="divider"></div>
    <p>
      合成生物学とは生物(細胞)を自分たちで一から設計して動かしてみることでより生物に関する理解を深めようというものです。
      それには生物だけでなく、情報科学(プログラミング)、数学、制御工学などあらゆる分野の知識が求められるのでiGEMのチームは様々なバックグラウンドを持つ人たちが集まります。(須賀、途中）
    </p>
  </div>
</div>
@endsection
