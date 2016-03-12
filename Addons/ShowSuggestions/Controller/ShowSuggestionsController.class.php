<?php

namespace Addons\ShowSuggestions\Controller;
use Home\Controller\AddonsController;

class ShowSuggestionsController extends AddonsController{
	function showlists(){
		$data['uid'] = $this->mid;
		$suggestions = M('suggestions')->where($data)->find();
		$this->assign('suggestions',$suggestions);
		$this->display();
	}
}