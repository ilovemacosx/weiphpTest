<?php
        	
namespace Addons\ShowSuggestions\Model;
use Home\Model\WeixinModel;
        	
/**
 * ShowSuggestions的微信模型
 */
class WeixinAddonModel extends WeixinModel{
	function reply($dataArr, $keywordArr = array()) {
		$param['token'] = get_token();
		$param['openid'] = get_openid();
		$url = addons_url('ShowSuggestions://ShowSuggestions/showlists',$param);
		$articles = array(
						array(
							'Title' => '显示建议意见',
							'Description' => '点击进入填写反馈内容',
							'PicUrl' => 'http://weiphp.cn/Public/Home/images/about/logo.jpg',
							'Url' => $url
							));
		$res = $this->replyNews($articles);
	}
}