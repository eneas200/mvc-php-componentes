<?php 

namespace Source\App;
use League\Plates\Engine;
use Source\Models\User;

class Web {
	private $views;
	protected $data;

	public function __construct() {
		$this->views = new Engine(__DIR__.'/../../theme', 'php');
		$this->data = [];
	}

	public function home(): void
	{
		$this->data['users'] = (new User())->find()->fetch(true);
		$this->data['title'] = 'Home | '. SITE;
		echo $this->views->render('home', $this->data);
	}

	public function contact() : void
	{
		$this->data['title'] = 'Contato | '. SITE;
		echo $this->views->render('contact', $this->data);
	}

	public function error(array $data) : void
	{
		$this->data['title'] = 'Error | '. SITE;
		$this->data['error'] = $data['errcode'];
		echo $this->views->render('error', $this->data);
	}
}

 