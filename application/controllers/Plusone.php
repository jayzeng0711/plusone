<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager as DB;
use Orm\NewsModel;
use Orm\TestModel;


class Plusone extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
            $this->load->helper("eloquent");
	}

	public function index()
	{
        $this->load->view('home');

    }

    public function fastorder()
	{
        $this->load->view('fastorder');

    }


    public function skill()
	{
        $this->load->view('skill');

    }

    public function search()
	{
        $this->load->view('search');

    }

    public function myorder()
	{
        $this->load->view('myorder');

    }

    public function balance()
	{
        $this->load->view('balance');

    }

    public function cancoupon()
	{
        $this->load->view('cancoupon');

    }

    public function editdata()
	{
        $this->load->view('editdata');

    }

    public function account()
	{
        $this->load->view('account');

    }

    public function notify()
	{
        $this->load->view('notify');

    }

    public function block()
	{
        $this->load->view('block');

    }

    public function change_gcoin()
	{
        $this->load->view('change_gcoin');

    }

    public function trade()
	{
        $this->load->view('trade');

    }

    public function dramic()
	{
        $this->load->view('dramic');

    }
    
    public function person()
	{
        $this->load->view('person');
    }

    public function settle()
	{
        $this->load->view('settle');
    }

    public function settleform()
	{
        $this->load->view('settleform');
    }

    public function datacheck()
	{
        $this->load->view('Datacheck');
    }
    
    public function Storedvalue()
	{
        $this->load->view('storedvalue');
    }

    public function dataskill()
	{
        $this->load->view('dataskill');
    }
    
    public function report()
	{
        $this->load->view('report');
    }

    public function bankcard()
	{
        $this->load->view('bankcard');
    }

    public function getmoney()
	{
        $this->load->view('getmoney');
    }

    public function editskill()
	{
        $this->load->view('editskill');
    }

    public function playerlist()
	{
        $this->load->view('playerlist');
    }

    public function question()
	{
        $this->load->view('question');
    }

    public function privice()
	{
        $this->load->view('privice');
    }

    public function dialoag()
	{
        $this->load->view('dialoag');
    }

    public function singledialoag()
	{
        $this->load->view('singledialoag');
    }

    public function confirmorder()
	{
        $this->load->view('confirmorder');
    }

    public function rank()
	{
        $this->load->view('rank');
    }

	public function b()
	{
		$message = new TestModel;
        $message->event_id = $_POST['event_id'];
        $message->candidate_id = $_POST['candidate_id'];
        $message->fb = $_POST['fb'];
        $message->save();
	}

	public function setn(){
		//設定導頁cookie;
		$return_url = $this->input->get('u');
		$this->set_redirect_url_cookie($return_url);
		$this->oauth();
	}

	private function set_redirect_url_cookie($url =''){		
		$domain = $this->get_cookie_domain();
		if(!empty($url)){
			$referer_url = $url;
		}else{
			$referer_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $this->config->item ('vidol_url');	
		}
		

		if(!isset($_COOKIE['user_signed_in_redirect_to']) && empty($_COOKIE['user_signed_in_redirect_to'])){
			setcookie('user_signed_in_redirect_to', $referer_url, time() + 600, '/', $domain);	
		}
		return $referer_url;
	}

	private function oauth(){
		if(!session_id()) {
		    session_start();
		}
		$locale=isset($_COOKIE['locale']) ? $_COOKIE['locale']:'zh-TW';

		if($locale=="tw"){
			$locale='zh-TW';
		}
		$keycloak = [
		    'authServerUrl'         => "https://oauth-stag.setn.com/auth/",
		    // 'realm'                 => "SETGroup",
		    // 'clientId'              => "vidol_webclient",
		    // 'clientSecret'          => "87a17e19-519c-4697-8463-e2749eab4c30",
			// 'redirectUri'           => "http://127.0.0.1:8080/welcome/b",
			// 'kc_locale'             => $locale,

		    // 'encryptionAlgorithm'   => 'RS256',                             // optional
		    // 'encryptionKeyPath'     => '../key.pem',                         // optional
		    // 'encryptionKey'         => 'omH4rZpEW3FFF6uCl4XFpQ5-RUo5YST8f-Ei95pcJbo',     // optional
		];
		// print_r($keycloak);exit;
		$last_page=$this->session->userdata('last_page');
		$redirectUri=isset($last_page) ? $last_page:'https://'.$_SERVER['HTTP_HOST'];
		$redirectUri2=$this->config->item ('vidol_url')."/oauth_transfer/chk_oauth";
		$provider = new Stevenmaguire\OAuth2\Client\Provider\Keycloak($keycloak);
		if (!isset($_GET['code'])) {
			
		    // If we don't have an authorization code then get one
		    $authUrl = $provider->getAuthorizationUrl();
		    $_SESSION['oauth2state'] = $provider->getState();
		    header('Location: '.$authUrl.'&**kc_locale='.$locale.'**');
		    exit;

		// Check given state against previously stored one to mitigate CSRF attack
		} elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {

		    unset($_SESSION['oauth2state']);
		    //exit('Invalid state, make sure HTTP sessions are enabled.');
			header('Location: '.$redirectUri2);
		} else {

		    // Try to get an access token (using the authorization coe grant)
		    try {
		        $token = $provider->getAccessToken('authorization_code', [
		            'code' => $_GET['code']
		        ]);
		    } catch (Exception $e) {
				//exit('Failed to get access token: '.$e->getMessage());
				header('Location: '.$redirectUri);
		    }

		    // Optional: Now you have a token you can look up a users profile data
		    try {

		        // We got an access token, let's now get the user's details
		        $user = $provider->getResourceOwner($token);
		        $user = $user->toArray();
		        $user['access_token'] = $token->getToken();

		        return $user;

		    } catch (Exception $e) {
				//exit('Failed to get resource owner: '.$e->getMessage());
				header('Location: '.$redirectUri);
		    }


		    exit;
		}		
	}	

	private function get_cookie_domain(){
		$arr_domain = explode('.', $this->config->item ('server_domain'));
		$domain = "";
		if(count($arr_domain) >= 3){
			unset($arr_domain[0]);
		}
		$domain = "." . implode('.', $arr_domain);
		return $domain;
	}
}
