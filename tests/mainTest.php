<?php
/**
 * test for tomk79\h
 */

class mainTest extends PHPUnit_Framework_TestCase{

	/**
	 * setup
	 */
	public function setup(){
	}

	/**
	 * dataProvidor: テスト用文字列一覧
	 */
	public function testStringProvider(){
		return array(
			array('<a onclick="alert(\'test data\');return false;">test data &amp; data</a>') ,
			array('<div lang="ja">日本語文字列を含むコード</div>') ,
		);
	}

	/**
	 * h() のテスト
	 * @dataProvider testStringProvider
	 */
	public function testH( $str ){
		$this->assertEquals( h($str), htmlspecialchars($str) );
		$this->assertEquals( h($str, ENT_QUOTES), htmlspecialchars($str, ENT_QUOTES) );
		$this->assertEquals( h($str, ENT_COMPAT|ENT_HTML401, 'utf-8'), htmlspecialchars($str, ENT_COMPAT|ENT_HTML401, 'utf-8') );
		$this->assertEquals( h($str, ENT_COMPAT|ENT_HTML401, 'utf-8', false), htmlspecialchars($str, ENT_COMPAT|ENT_HTML401, 'utf-8', false) );
	}//testH()

}
