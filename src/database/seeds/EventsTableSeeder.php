<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('events')->truncate();
			$events = [
				[
					'title' => '[学生向け] iGEM説明会',
					'content' => '2020年度のiGEM出場・上位進出を目指し活動しています。iGEMは生物の研究・理論的な計算機でのシミュレーション・社会とのコミュニケーションなどを総合して評価されます。そのため、文系・理系問わず、様々なメンバーに参加いただきたいと思っております。合成生物学などに興味がある方・EDGEなどのアントレプレナー教育に興味がある方は是非参加して欲しいです！この説明会にお気軽にご参加ください！皆様とお会いできるのを心よりお待ちしております！日時 : 11月5日(火)19時～ (1時間程度)場所 : 51号館3階第5会議室(51-3-09)',
					'anchor' => 'event',
					'category' => ''
				]
			];
			foreach($events as $event) {
				\App\Event::create($event);
			}
    }
}
