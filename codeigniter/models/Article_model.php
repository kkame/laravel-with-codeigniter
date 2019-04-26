<?php

class Article_model extends CI_Model
{

    public function write_article(array $args): int
    {

        //TODO 실제 모델링에 관한 내용이 들어갑니다

        return random_int(1, 10000);

    }

}