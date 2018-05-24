<?php

/*
 * 功能：会员中心－个人中心
 * author:资料空白
 * time:20180509
 */

class ProfilesController extends PcBasicController
{
    private $m_user;
	
	public function init()
    {
        parent::init();
		$this->m_user = $this->load('user');
    }

    public function indexAction()
    {
		$data = array();
		$uinfo = $this->m_user->SelectByID('nickname,email,qq,tag,createtime',$this->userid);
		$data['uinfo'] = $this->uinfo = array_merge($this->uinfo, $uinfo);
        $this->getView()->assign($data);
    }

	public function passwordAction(){
		$data = array();
        $this->getView()->assign($data);
	}
	
	public function thirdloginAction(){
		$data = array();
        $this->getView()->assign($data);
	}
}