<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @deprecated 用户
 * @version 1.0.0 12-10-22 下午9:31
 * @author 张浩
 */

class Index extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->config->load('common');
		$this->load->model('base_mdl', 'base');
		$this->_data['contType'] = $this->config->item('contType');
		$this->_data['service'] = $this->config->item('service');
		$this->_data['down'] = $this->config->item('down');
	}

	/**
	 * @deprecated 默认方法
	 */
	public function index() {
		$this->_data['qst'] = 'no';
		$this->_data['focus'] = $this->base->get_data('pics', array('place'=>1), '*', 0, 0, 'sort DESC')->result_array();
		$this->_data['news'] = $this->base->get_data('content', array('tid'=>1), '*', 5, 0, 'sort DESC, ctime DESC')->result_array();

		$this->_data['newer'] = $this->base->get_data('content', array('tid'=>5), '*', 3, 0, 'sort DESC')->result_array();
		$this->_data['sys'] = $this->base->get_data('content', array('tid'=>6), '*', 3, 0, 'sort DESC')->result_array();
		$this->_data['hig'] = $this->base->get_data('content', array('tid'=>7), '*', 3, 0, 'sort DESC')->result_array();
		$this->_data['tes'] = $this->base->get_data('content', array('tid'=>8), '*', 3, 0, 'sort DESC')->result_array();

		$this->_data['cuts'] = $this->base->get_data('pics', array('place'=>2), '*', 0, 0, 'sort DESC')->result_array();
		$this->load->view(THEME.'/index', $this->_data);
	}

	public function clists() {
		$tid = $this->input->get('tid');
		$tid = $tid ? $tid : 1;

		//分页配置
        $this->load->library('gpagination');
		$total_num = $this->base->get_data('content', array('tid'=>$tid))->num_rows();
		$page = $this->input->get('page') > 1 ? $this->input->get('page') : '1';
		$limit = 15;
		$offset = ($page - 1) * $limit;

		$this->gpagination->currentPage($page);
		$this->gpagination->items($total_num);
		$this->gpagination->limit($limit);
		$this->gpagination->target(site_url('index/clists?tid='.$tid));

		$this->_data['pagination'] = $this->gpagination->getOutput();
		$this->_data['tid'] = $tid;
		$this->_data['lists'] = $this->base->get_data('content', array('tid'=>$tid), '*', $limit, $offset, 'sort DESC, ctime DESC')->result_array();
		$this->load->view(THEME.'/clists', $this->_data);
	}

	public function cdetail() {
		$id = $this->input->get('id');
		$this->_data['row'] = $this->base->get_data('content', array('id'=>$id))->row_array();
		$this->load->view(THEME.'/cdetail', $this->_data);
	}

	public function qst() {
		$this->_data['tid'] = 3;
		$this->_data['lists'] = $this->base->get_data('content', array('tid'=>3), '*', 0, 0, 'sort DESC, id DESC')->result_array();
		$this->load->view(THEME.'/qst', $this->_data);
	}

	public function pay() {
		$this->load->view(THEME.'/pay', $this->_data);
	}
}