<?php
namespace phgram\Objects;
class InlineQueryResultMpeg4Gif extends \phgram\Objects\Base {
	public function __construct($data, \phgram\Bot $Bot = null) {
		parent::__construct($data, $Bot);
		$this->arguments = [];
	}
}