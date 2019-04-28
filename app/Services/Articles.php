<?php


namespace App\Services;


class Articles
{

    public function getArticles()
    {
        return collect([
            (object)['title'=>'게시글 서비스 제목1','body'=>'본문1'],
            (object)['title'=>'게시글 서비스 제목2','body'=>'본문2'],
        ]);
    }
}