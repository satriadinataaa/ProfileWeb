<?php  

class Auth extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		//redirect to admin function
		$this->data['account_id']	= $this->session->userdata('account_id');
		$this->data['role']	= $this->session->userdata('role');
		if (isset($this->data['account_id']))
		{
			if($this->data['role'] == '1'){
				redirect('Admin');
			}
		
        }
	}

	public function login()
	{
		if ($this->POST('submit'))
		{
			$this->load->model('M_Users');

			$account = M_Users::where('username', $this->POST('username'))
						->where('password', md5($this->POST('password')))
						->first();

			if (isset($account))
			{
				$this->flashmsg('Login Sukses');
				$this->session->set_userdata([
					'account_id'	=> $account->id,				
					'username'		=> $account->username,
					'name'			=> $account->name,
					'role'			=> $account->role
					
				]);

				redirect('Auth/login');
			}
			else
			{
				$this->flashmsg('Wrong username or password', 'danger');
				$this->go_back(-1);
			}

			exit;
		}
		
        $this->load->view('login');
	}
}