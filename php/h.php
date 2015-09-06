<?php
if( !is_callable('h') ){
	/**
	 * htmlspecialchars() のショートハンド
	 * 
	 * htmlspecialchars() と同じ引数を受け取ります。
	 * 
	 * @return string HTML特殊文字をエスケープした文字列
	 */
	function h(){
		return call_user_func_array( 'htmlspecialchars', func_get_args() );
	}
}
