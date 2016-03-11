<?php
        	
namespace Addons\Suggestions\Model;
use Home\Model\WeixinModel;
        	
/**
 * Suggestions的微信模型
 */
class WeixinAddonModel extends WeixinModel{
	function reply($dataArr, $keywordArr = array()) {
		/*$this->replyText ( '欢迎来到我的世界-_-' );
		
		$param['token'] = get_token();
		$param['openid'] = get_openid();
		$url = addons_url('Suggestions://Suggestions/suggest',$param);
				*/
		$articles = array(
						array(
							'Title' => '建议意见',
							'Description' => '点击进入填写反馈内容',
							'PicUrl' => 'http://weiphp.cn/Public/Home/images/about/logo.jpg',
							'Url' => 'http://www.bing.com'
							));
		$res = $this->replyNews($articles);
	}
}