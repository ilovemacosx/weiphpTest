<?php

namespace Addons\ShowSuggestions\Controller;
use Home\Controller\AddonsController;

class ShowSuggestionsController extends AddonsController{
	function showlists(){
		$data['a.uid'] = $this->mid;
		$suggestions = M('suggestions a')->where($data)
						->field("a.*,FROM_UNIXTIME(a.cTime,'%Y-%m-%d %H:%i') as add_time_name")
						->select();
		$this->assign('list',$suggestions);
		$this->display();
	}
}