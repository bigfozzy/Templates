<?php

// for static call of all DOM objects example: DOM::$input->set_value_by_name("name",11);
class DOM
{
	// Dom (container) object
	public static $frame = null; 
	public static $form = null;
	public static $body = null;

	// Dom (output) objects
	public static $anchor = null;
	public static $image = null;
	public static $button = null;
	public static $div = null;
	public static $span = null;
	public static $label = null;
	public static $td = null;
	public static $tr = null;
	public static $th = null;
	public static $btn = null;
	public static $listbox = null;
	public static $script = null;
	public static $table = null;
	public static $h1 = null;
	public static $h2 = null;
	public static $h3 = null;
	public static $h4 = null;
	public static $h5 = null;
	public static $h6 = null;
	public static $b = null;
	public static $blockquote = null;
	public static $code = null;
	public static $head = null;
	public static $header = null;
	public static $footer = null;
	public static $section = null;
	public static $html = null;
	public static $i = null;
	public static $li = null;
	public static $meta = null;
	public static $option = null;
	public static $p = null;
	public static $pre = null;
	public static $s = null;
	public static $strong = null;
	public static $style = null;
	public static $u = null;
	public static $canvas = null;
	public static $video = null;

	// Dom (input) objects
	public static $input = null;
	public static $hiddeninput = null;
	public static $inputfile = null;
	public static $textarea = null;
	public static $checkbox = null;
	public static $radiobox = null;
	public static $inputimage = null;
	public static $element = null;
	public static $embed = null;
	public static $object = null;
};

// initialization
DOM::$frame = $frame;
DOM::$form = $form;
DOM::$body = $body;
DOM::$anchor = $anchor;
DOM::$image = $image;
DOM::$button = $button;
DOM::$div = $div;
DOM::$span = $span;
DOM::$label = $label;
DOM::$td = $td;
DOM::$tr = $tr;
DOM::$th = $th;
DOM::$btn = $btn;
DOM::$listbox = $listbox;
DOM::$script = $script;
DOM::$table = $table;
DOM::$input = $input;
DOM::$hiddeninput = $hiddeninput;
DOM::$inputfile = $inputfile;
DOM::$textarea = $textarea;
DOM::$checkbox = $checkbox;
DOM::$radiobox = $radiobox;
DOM::$inputimage = $inputimage;
DOM::$element = $element;
DOM::$embed = $embed;
DOM::$object = $object;
DOM::$h1 = $h1;
DOM::$h2 = $h2;
DOM::$h3 = $h3;
DOM::$h4 = $h4;
DOM::$h5 = $h5;
DOM::$h6 = $h6;
DOM::$b = $b;
DOM::$blockquote = $blockquote;
DOM::$code = $code;
DOM::$head = $head;
DOM::$header = $header;
DOM::$footer = $footer;
DOM::$section = $section;
DOM::$html = $html;
DOM::$i = $i;
DOM::$li = $li;
DOM::$meta = $meta;
DOM::$option = $option;
DOM::$p = $p;
DOM::$pre = $pre;
DOM::$s = $s;
DOM::$strong = $strong;
DOM::$style = $style;
DOM::$u = $u;
DOM::$canvas = $canvas;
DOM::$video = $video;

?>