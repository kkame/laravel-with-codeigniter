<?php

class Board_library
{


    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('board_model');
    }

    public function make_board(array $args): int
    {
        if(empty($args['admin_id']))
            throw new Exception("게시판 관리자의 아이디를 지정해야합니다");

        return $this->ci->board_model->make_board($args);
    }

}