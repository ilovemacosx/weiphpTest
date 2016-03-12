<?php

namespace Addons\ShowSuggestions;
use Common\Controller\Addon;

/**
 * 显示建议意见插件
 * @author 浪迹天涯
 */

    class ShowSuggestionsAddon extends Addon{

        public $info = array(
            'name'=>'ShowSuggestions',
            'title'=>'显示建议意见',
            'description'=>'这是一个临时描述',
            'status'=>1,
            'author'=>'浪迹天涯',
            'version'=>'0.1',
            'has_adminlist'=>0
        );

	public function install() {
		$install_sql = './Addons/ShowSuggestions/install.sql';
		if (file_exists ( $install_sql )) {
			execute_sql_file ( $install_sql );
		}
		return true;
	}
	public function uninstall() {
		$uninstall_sql = './Addons/ShowSuggestions/uninstall.sql';
		if (file_exists ( $uninstall_sql )) {
			execute_sql_file ( $uninstall_sql );
		}
		return true;
	}

        //实现的weixin钩子方法
        public function weixin($param){

        }
}