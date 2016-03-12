<?php

namespace Addons\ShowSuggestions\Controller;
use Home\Controller\AddonsController;

class ShowSuggestionsController extends AddonsController{
	function showlists(){
		$data['a.uid'] = $this->mid;
		$suggestions = M('suggestions a')->where($data)
						->field("a.*,FROM_UNIXTIME(a.add_time,'%Y-%m-%d %H:%i') as add_time_name")
						->select();
		dump($suggestions);
		$this->assign('list',$suggestions);
		$this->display();
	}
}