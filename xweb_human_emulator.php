<?php
/////////////////////////////////////////////////////////////////// XHE WRAPER /////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////// Class's

if (!defined("___XHE___"))
{

// использовать PHP через хуман (используется для обмена через STDIN с хуманом)
if (!isset($PHP_Use_Trought_Shell))
	$PHP_Use_Trought_Shell=false; 
if (empty($xhe_host) or $xhe_host=="")
	$xhe_host ="127.0.0.1:7010";  

// получим настоящий порт
/*$real_port="";
if ($PHP_Use_Trought_Shell)
	$real_port=trim(fgets(STDIN));

// XWeb human emulator host
if (empty($xhe_host) or $xhe_host=="")
{
  if ($real_port=="")
  $xhe_host ="127.0.0.1:7010"; 
  else
	$xhe_host ="127.0.0.1:".$real_port; 
}
else
{
  if ($real_port!="")
	$xhe_host ="127.0.0.1:".$real_port; 	
}
echo $xhe_host;*/

// XWeb human emulator password
if (empty($server_password) or $server_password=="")
  $server_password="";

// базовый общий для всех
include("Objects/xhe_base.php");
// базовый список
include("Objects/xhe_base_list.php");
// позиция
include("Objects/xhe_position.php");


// базовый DOM
include("Objects/DOM/xhe_base_dom.php");
include("Objects/DOM/xhe_base_visual_dom.php");

// маленькие полезные функции
include("Tools/file_tools.php");
include("Tools/folder_tools.php");
include("Tools/harvest_tools.php");
include("Tools/string_tools.php");
include("Tools/update_tools.php");

// для совместимости с предыдущими версиями
include("Objects/DOM/Compatible/xhe_anchor_compatible.php");
include("Objects/DOM/Compatible/xhe_body_compatible.php");
include("Objects/DOM/Compatible/xhe_button_compatible.php");
include("Objects/DOM/Compatible/xhe_checkbutton_compatible.php");
include("Objects/DOM/Compatible/xhe_element_compatible.php");
include("Objects/DOM/Compatible/xhe_form_compatible.php");
include("Objects/DOM/Compatible/xhe_frame_compatible.php");
include("Objects/DOM/Compatible/xhe_image_compatible.php");
include("Objects/DOM/Compatible/xhe_input_compatible.php");
include("Objects/DOM/Compatible/xhe_inputbutton_compatible.php");
include("Objects/DOM/Compatible/xhe_inputfile_compatible.php");
include("Objects/DOM/Compatible/xhe_inputimage_compatible.php");
include("Objects/DOM/Compatible/xhe_radiobox_compatible.php");
include("Objects/DOM/Compatible/xhe_scriptelement_compatible.php");
include("Objects/DOM/Compatible/xhe_selectelement_compatible.php");
include("Objects/DOM/Compatible/xhe_table_compatible.php");
include("Objects/DOM/Compatible/xhe_textarea_compatible.php");
include("Objects/DOM/Compatible/xhe_interface_compatible.php");
include("Objects/Window/Compatible/xhe_windowinterface_compatible.php");
include("Objects/System/Compatible/xhe_folder_compatible.php");
include("Objects/System/Compatible/xhe_file_os_compatible.php");
include("Objects/Web/Compatible/xhe_ftp_compatible.php");
include("Objects/System/Compatible/xhe_keyboard_compatible.php");
include("Objects/Web/Compatible/xhe_webpage_compatible.php");
include("Objects/Web/Compatible/xhe_browser_compatible.php");

// DOM (output)
include("Objects/DOM/xhe_anchor.php");
include("Objects/DOM/xhe_image.php");
include("Objects/DOM/xhe_inputbutton.php");
include("Objects/DOM/xhe_button.php");
include("Objects/DOM/xhe_div.php");
include("Objects/DOM/xhe_span.php");
include("Objects/DOM/xhe_label.php");
include("Objects/DOM/xhe_flash.php");
include("Objects/DOM/xhe_th.php");
include("Objects/DOM/xhe_tr.php");
include("Objects/DOM/xhe_td.php");
include("Objects/DOM/xhe_style.php");
include("Objects/DOM/xhe_h.php");
include("Objects/DOM/xhe_selectelement.php");
include("Objects/DOM/xhe_frame.php");
include("Objects/DOM/xhe_form.php");
include("Objects/DOM/xhe_scriptelement.php");
//include("Objects/DOM/xhe_canvas.php");

// DOM (input)
include("Objects/DOM/xhe_input.php");
include("Objects/DOM/xhe_hiddeninput.php");
include("Objects/DOM/xhe_inputfile.php");
include("Objects/DOM/xhe_textarea.php");
include("Objects/DOM/xhe_checkbutton.php");
include("Objects/DOM/xhe_radiobox.php");
include("Objects/DOM/xhe_table.php");
include("Objects/DOM/xhe_body.php");
include("Objects/DOM/xhe_inputimage.php");
include("Objects/DOM/xhe_element.php");
include("Objects/DOM/xhe_embed.php");
include("Objects/DOM/xhe_object.php");
include("Objects/DOM/xhe_b.php");
include("Objects/DOM/xhe_blockquote.php");
include("Objects/DOM/xhe_code.php");
include("Objects/DOM/xhe_html.php");
include("Objects/DOM/xhe_i.php");
include("Objects/DOM/xhe_li.php");
include("Objects/DOM/xhe_option.php");
include("Objects/DOM/xhe_meta.php");
include("Objects/DOM/xhe_s.php");
include("Objects/DOM/xhe_strong.php");
include("Objects/DOM/xhe_p.php");
include("Objects/DOM/xhe_pre.php");
include("Objects/DOM/xhe_u.php");
include("Objects/DOM/xhe_head.php");
include("Objects/DOM/xhe_canvas.php");
include("Objects/DOM/xhe_video.php");
include("Objects/DOM/xhe_header.php");
include("Objects/DOM/xhe_footer.php");
include("Objects/DOM/xhe_section.php");


include("Objects/DOM/xhe_interface.php");
include("Objects/DOM/xhe_interfaces.php");

// System
include("Objects/System/xhe_mouse.php");
include("Objects/System/xhe_sound.php");
include("Objects/System/xhe_keyboard.php");
include("Objects/System/xhe_textfile.php");
include("Objects/System/xhe_file.php");
include("Objects/System/xhe_clipboard.php");
include("Objects/System/xhe_folder.php");

// Web
include("Objects/xhe_base_captcha_1.php");
include("Objects/Web/xhe_anticaptcha.php");
include("Objects/Web/xhe_rucaptcha.php");
include("Objects/Web/xhe_2captcha.php");
include("Objects/Web/xhe_ripcaptcha.php");
include("Objects/Web/xhe_bypasscaptcha.php");
include("Objects/Web/xhe_captcha24.php");
include("Objects/Web/xhe_browser.php");
include("Objects/Web/xhe_captchabot.php");
include("Objects/Web/xhe_webpage.php");
include("Objects/Web/xhe_harvestor.php");
include("Objects/Web/xhe_proxy_switcher.php");
include("Objects/Web/xhe_seo.php");
include("Objects/Web/xhe_raw.php");
include("Objects/xhe_mail_message.php");
include("Objects/Web/xhe_mail.php");
include("Objects/Web/xhe_connection.php");
include("Objects/Web/xhe_ftp.php");
include("Objects/Web/xhe_sftp.php");
include("Objects/Web/xhe_submitter.php");
include("Objects/Web/xhe_proxycheker.php");
include("Objects/Web/Anticaptcha2/anticaptcha.php");
include("Objects/Web/Anticaptcha2/imagetotext.php");
include("Objects/Web/Anticaptcha2/nocaptcha.php");
include("Objects/Web/Anticaptcha2/nocaptchaproxyless.php");
include("Objects/xhe_base_sms.php");
include("Objects/Web/xhe_onlinesim.php");
include("Objects/Web/xhe_smsactivate.php");
include("Objects/Web/xhe_5simnet.php");
include("Objects/Web/xhe_cheapsms.php");

// Window
include("Objects/Window/Compatible/xhe_application_compatible.php");
include("Objects/Window/Compatible/xhe_window_compatible.php");
include("Objects/Window/xhe_application.php");
include("Objects/Window/xhe_debug.php");
include("Objects/Window/xhe_scheduler.php");
include("Objects/Window/xhe_window_interface.php");
include("Objects/Window/xhe_window_interfaces.php");
include("Objects/Window/xhe_windowsshell.php");
include("Objects/Window/xhe_window.php");

// Plugins
include("Objects/Plugins/XHEPlugin_ObjectsSample.php");
include("Objects/Plugins/XHEPlugin_ProxyChecker.php");


/////////////////////////////////////////////////////////////////////////// Objects

$anticapcha= new XHEAnticapcha("antigate.com");

// capcha testing services
$anticaptcha  	= new XHEAnticapcha("antigate.com");
$captcha24  	= new XHECaptcha24("captcha24.com");
$rucaptcha  	= new XHERucapcha("rucaptcha.com");
$twocaptcha  	= new XHE2capcha("2captcha.com");
$ripcaptcha   	= new XHERipcaptcha("ripcaptcha.com");
$bypasscaptcha  = new XHEBypasscaptcha();
$captchabot   	= new XHECaptchabot();
$anticaptcha2   = new ImageToText();
$onlinesim      = new XHEOnlineSimRu();
$smsactivate    = new XHESmsActivate();
$simnet         = new XHE5Simnet();
$cheapsms       = new XHECheapsms();

// create Window objects
$app          = new XHEApplication($xhe_host,$server_password);
$windows      = new XHEWindowsShell($xhe_host,$server_password);
$scheduler    = new XHEScheduler($xhe_host,$server_password);
$window       = new XHEWindow($xhe_host,$server_password);
$mouse        = new XHEMouse($xhe_host,$server_password);

// create System objects
$sound        = new XHESound($xhe_host,$server_password);
$debug        = new XHEDebug($xhe_host,$server_password);
$keyboard     = new XHEKeyboard($xhe_host,$server_password);
$clipboard    = new XHEClipboard($xhe_host,$server_password);
$textfile     = new XHETextFile($xhe_host,$server_password);
$file_os      = new XHEFile_os($xhe_host,$server_password);
$folder       = new XHEFolder($xhe_host,$server_password);

// create Web objects
$browser      = new XHEBrowser($xhe_host,$server_password);
$webpage      = new XHEWebPage($xhe_host,$server_password);
$raw          = new XHERaw($xhe_host,$server_password);
$seo          = new XHESEO($xhe_host,$server_password);
$connection   = new XHEConnection($xhe_host,$server_password);
$ftp          = new XHEFTP($xhe_host,$server_password);
$sftp         = new XHESFTP($xhe_host,$server_password);
$submitter    = new XHESubmitter($xhe_host,$server_password);
$proxycheker  = new XHEProxyCheker($xhe_host,$server_password);
$harvestor    = new XHEHarvestor($xhe_host,$server_password);
$proxyswitcher = new XHEProxySwitcher($xhe_host,$server_password);
$mail    = new XHEMail($xhe_host,$server_password);

// create Dom (container) object
$frame        = new XHEFrame($xhe_host,$server_password);
$form         = new XHEForm($xhe_host,$server_password);
$body         = new XHEBody($xhe_host,$server_password);

// create Dom (output) objects
$anchor       = new XHEAnchor($xhe_host,$server_password);
$image        = new XHEImage($xhe_host,$server_password);
$button       = new XHEInputButton($xhe_host,$server_password);
$div          = new XHEDiv($xhe_host,$server_password);
$span         = new XHESpan($xhe_host,$server_password);
$label        = new XHELabel($xhe_host,$server_password);
$td           = new XHETD($xhe_host,$server_password);
$tr           = new XHETR($xhe_host,$server_password);
$th           = new XHETH($xhe_host,$server_password);
$style        = new XHEStyle($xhe_host,$server_password);
$btn          = new XHEButton($xhe_host,$server_password);
$listbox      = new XHESelectElement($xhe_host,$server_password);
$script       = new XHEScriptElement($xhe_host,$server_password);
$table        = new XHETable($xhe_host,$server_password);
//$canvas       = new XHECanvas($xhe_host,$server_password);
$h1           = new XHEH($xhe_host,1,$server_password);
$h2           = new XHEH($xhe_host,2,$server_password);
$h3           = new XHEH($xhe_host,3,$server_password);
$h4           = new XHEH($xhe_host,4,$server_password);
$h5           = new XHEH($xhe_host,5,$server_password);
$h6           = new XHEH($xhe_host,6,$server_password);

$b            = new XHEB($xhe_host,$server_password);
$blockquote   = new XHEBlockquote($xhe_host,$server_password);
$code         = new XHECode($xhe_host,$server_password);
$html         = new XHEHtml($xhe_host,$server_password);
$i            = new XHEI($xhe_host,$server_password);
$li           = new XHELi($xhe_host,$server_password);
$meta         = new XHEMeta($xhe_host,$server_password);
$option       = new XHEOption($xhe_host,$server_password);
$p            = new XHEP($xhe_host,$server_password);
$pre          = new XHEPre($xhe_host,$server_password);
$s            = new XHES($xhe_host,$server_password);
$strong       = new XHEStrong($xhe_host,$server_password);
$u            = new XHEU($xhe_host,$server_password);
$head         = new XHEHead($xhe_host,$server_password);
$canvas       = new XHECanvas($xhe_host,$server_password);
$video        = new XHEVideo($xhe_host,$server_password);
$header       = new XHEHeader($xhe_host,$server_password);
$footer       = new XHEFooter($xhe_host,$server_password);
$section      = new XHESection($xhe_host,$server_password);

// create Dom (input) objects
$input        = new XHEInput($xhe_host,$server_password);
$hiddeninput  = new XHEHiddenInput($xhe_host,$server_password);
$inputfile    = new XHEInputFile($xhe_host,$server_password);
$textarea     = new XHETextArea($xhe_host,$server_password);
$checkbox     = new XHECheckButton($xhe_host,$server_password);
$radiobox     = new XHERadioButton($xhe_host,$server_password);
$inputimage   = new XHEInputImage($xhe_host,$server_password);
$element      = new XHEElement($xhe_host,$server_password);
$embed        = new XHEEmbed($xhe_host,$server_password);
$object       = new XHEObject($xhe_host,$server_password);
$flash        = new XHEFlash($xhe_host,$server_password);

// for static call
include("xweb_workspace_dom.php");
include("xweb_workspace_system.php");
include("xweb_workspace_web.php");
include("xweb_workspace_window.php");

// Plugins
$sampleobject=new XHESampleObject($xhe_host,$server_password);

// run options
$bClosePHPIfNotConnected=false; // закрывать PHP если нет соединения с хуманом
$bWarningPHPIfNotConnected=true; // предупреждать в окне отладке если нет соединения с хуманом
$Wait_Try_Navigate_Second=15; // сколько секунд ждать успешность навигации 
$Wait_Try_Navigate_Count=1; // сколько раз пытаться осуществить навигацию
$bUTF8Ver=false; // юникод и не юникод версия хумана
$bWaitElementExistBeforeAction=false; // проверять есть ли заданный элемент на странице перед действием
$iSecondsWaitElementExistBeforeAction=15; // сколько секунд ждать появления элемента

// log option
$bShowInfoByPHPConfiguration=false;
if ($bShowInfoByPHPConfiguration)
{
  echo "==============&nbsp;&nbsp;&nbsp;&nbsp;Вспомогательная информация о конфигурации PHP шаблона&nbsp;&nbsp;&nbsp;&nbsp;================<br><br>";
  if ($bClosePHPIfNotConnected)                                                      
    echo "Установлен режим останавливать и закрывать скрипт, если нет связи с Human Emulator'ом<br>";
  if ($bWarningPHPIfNotConnected)                                                      
    echo "Предупреждать в окне отладки о потери связи с Human Emulator'ом<br>";
  echo "Максимальное время ожиданния успешности навигации : $Wait_Try_Navigate_Second секунд <br>";
  echo "Максимальное количество попыток осуществить навигацию : $Wait_Try_Navigate_Count раз(а) <br>";
  if ($PHP_Use_Trought_Shell)                                                      
    echo "PHP скрипты запускается из оболочки<br>";
  else
    echo "PHP скрипты запускается из коммандной строки<br>";
  if ($bUTF8Ver)                                                      
    echo "Используется UNICODE версия хумана<br>";
  if ($bWaitElementExistBeforeAction)                                                      
  {
    echo "Установлен режим ожидания появления элемента перед выполнением операций с ним<br>";
    echo "Максимальное время ожидания появления элемента перед выполнением операций с ним : $iSecondsWaitElementExistBeforeAction секунд<br>";
  }
  echo "<br>================================================================================<br><br>";
}

// defines
define ("___XHE___", "DEFINED");
// default timeout for keyboard input (milliseconds)
define ("INPUT_TIME", "0:2");
// defines
define ("_CONTENT_", "0");
define ("_EXACT_", "1");
define ("_REGULAR_", "2");
// default timeout for execute command (seconds)
XHEBaseObject::$COMMAND_TIME=100;
// default count of try execute command
XHEBaseObject::$COMMAND_TRY_COUNT=3;

}
// заздим текущий скрипт в программу
$debug->set_cur_script_path($_SERVER['PHP_SELF']);

////////////////////////////////////////////////////////////////////////////////////
?>
