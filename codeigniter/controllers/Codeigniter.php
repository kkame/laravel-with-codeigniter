<?php


use App\Article;
use App\Http\Controllers\LaravelController;
use App\Services\Articles;

class Codeigniter extends CI_Controller
{

    public function _remap($method)
    {
        if (!method_exists($this, $method)) {
            show_404();
        }

        app()->call([$this,$method]);

    }

    public function index()
    {

        $this->load->view('inc/header');
        $this->load->view('codeigniter/index');
        $this->load->view('inc/footer');
    }


    public function controller(LaravelController $laravelController)
    {

        $return = app()->call([$laravelController,'index']);

        $this->output->set_output($return);
    }

    public function blade()
    {
        $ciValue = "Ci에서 주입하는 변수 입니다";

        $this->load->view('inc/header');
        $this->output->append_output(view('sample',compact('ciValue')));
        $this->load->view('inc/footer');
    }


    /**
     * Container를 이용하는 방식을 권장합니다
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function services()
    {

        // remap에 다른 설정을 하기 힘들게 되어 있는 경우
        $args = [
            'articles'=>app()->make(Articles::class)->getArticles(),
        ];
        $this->load->view('inc/header');
        $this->load->view('codeigniter/services', $args);
        $this->load->view('inc/footer');
    }

    public function container(Articles $articleService)
    {

        $args = [
            'articles'=>$articleService->getArticles(),
        ];
        $this->load->view('inc/header');
        $this->load->view('codeigniter/container', $args);
        $this->load->view('inc/footer');
    }


    public function event()
    {

        event(new \App\Events\ArticleAdded());

        $this->load->view('inc/header');
        $this->load->view('codeigniter/event');
        $this->load->view('inc/footer');
    }

    public function model()
    {


        $articles = Article::all();

        $this->load->view('inc/header');
        $this->load->view('codeigniter/model',compact('articles'));
        $this->load->view('inc/footer');
    }


}