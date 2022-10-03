<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;

class GenerateSitemap extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $sitemap = Sitemap::create()->add('https://cronus.one/');

//        NewsItem::all()->each(function (NewsItem $newsItem) use ($sitemap) {
//            $sitemap->add(Url::create("/news/{$newsItem->slug}"));
//        });

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
