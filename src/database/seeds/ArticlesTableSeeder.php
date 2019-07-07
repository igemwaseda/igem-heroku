<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();

        $articles = [
                     ['title' => '第1回活動報告',
                      'content' => '2019年4月よりWaseda iGEMのチームの活動が始まりました。現時点では週1回土曜に集まって活動しております。内容としてはチームの基盤づくり、各自が勉強した生物学の基本的な知識の共有、ホームページ作り、iGEMについての勉強(概要や過去の研究)等などを行ってきました。現時点のメンバーは学部1年~3年生が10人ほどいます。',
                      'anchor' => 'https://miss-id.jp/nominee/4837',
                      'category' => 'hogepiyo'
                     ]
                    ];
       foreach ($articles as $article) {
         \App\Article::create($article);
       }
    }
}
