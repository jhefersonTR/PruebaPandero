<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

header("X-XSS-Protection: 1; mode=block");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . ""); } else { echo strip_tags("LLAMADA DE BIENVENIDA"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT" />
 <META http-equiv="Last-Modified" content="<?php echo gmdate('D, d M Y H:i:s') ?> GMT" />
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
 <META http-equiv="Pragma" content="no-cache" />
 <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_userSweetAlertDisplayed = false;
 </SCRIPT>
 <SCRIPT type="text/javascript">
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
  var sc_css_status_pwd_box = '<?php echo $this->Ini->Css_status_pwd_box; ?>';
  var sc_css_status_pwd_text = '<?php echo $this->Ini->Css_status_pwd_text; ?>';
 </SCRIPT>
        <SCRIPT type="text/javascript" src="../_lib/lib/js/jquery-3.6.0.min.js"></SCRIPT>
<input type="hidden" id="sc-mobile-lock" value='true' />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
<style type="text/css">
.sc-button-image.disabled {
	opacity: 0.25
}
.sc-button-image.disabled img {
	cursor: default !important
}
</style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
<style type="text/css">
	.sc.switch {
		position: relative;
		display: inline-flex;
	}

	.sc.switch span {
		display: inline-block;
		margin-right: 5px;
	}

	.sc.switch span {
		background: #DFDFDF;
		width: 22px;
		height: 14px;
		display: block;
		position: relative;
		top: 0px;
		left: 0;
		border-radius: 15px;
		padding: 0 3px;
		transition: all .2s linear;
		box-shadow: 0px 0px 2px rgba(164, 164, 164, 0.8) inset;
	}

	.sc.switch span:before {
		content: '\2713';
		display: inline-block;
		color: white;
		font-size: 10px;
		z-index: 0;
		position: absolute;
		top: 0;
		left: 4px;
	}

	.sc.switch span:after {
		content: '';
		background: white;
		width: 12px;
		height: 12px;
		display: block;
		position: absolute;
		top: 1px;
		left: 1px;
		border-radius: 15px;
		transition: all .2s linear;
		z-index: 1;
	}

	.sc.switch input {
		margin-right: 10px;
		cursor: pointer;
		z-index: 2;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		margin: 0;
		padding: 0;
	}

	.sc.switch input:disabled + span {
		opacity: 0.35;
	}

	.sc.switch input:checked + span {
		background: #66AFE9;
	}

	.sc.switch input:checked + span:after {
		left: calc(100% - 1px);
		transform: translateX(-100%);
	}

	.sc.radio {
		position: relative;
		display: inline-flex;
	}

	.sc.radio span {
		display: inline-block;
		margin-right: 5px;
	}

	.sc.radio span {
		background: #ffffff;
		border: 1px solid #66AFE9;
		width: 12px;
		height: 12px;
		display: block;
		position: relative;
		top: 0px;
		left: 0;
		border-radius: 15px;
		transition: all .2s;
		box-shadow: 0px 0px 2px rgba(164, 164, 164, 0.8) inset;
	}

	.sc.radio span:after {
		content: '';
		background: #66AFE9;
		width: 12px;
		height: 12px;
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		border-radius: 15px;
		transition: all .2s;
		z-index: 1;
		transform: scale(0);
	}

	.sc.radio input {
		cursor: pointer;
		z-index: 2;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		margin: 0;
		padding: 0;
	}

	.sc.radio input:disabled + span {
		opacity: 0.35;
	}

	.sc.radio input:checked + span {
		background: #66AFE9;
	}

	.sc.radio input:checked + span:after {
		transform: translateX(-100%);
		transform: scale(1);
	}
</style>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
  <?php 
  if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
  { 
  ?> 
  <link href="<?php echo $this->Ini->str_google_fonts ?>" rel="stylesheet" /> 
  <?php 
  } 
  ?> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>LlamadaBienvenidaForm/Formulario_Llamada_Bienvenida_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("Formulario_Llamada_Bienvenida_mob_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}

 function mensajeVacio() {
  
  sc_ajax_message ("Mensaje", "Título", "toast=Y&toasto_pos=center-start&type=success")
  
 } // mensajeVacio

 function nm_field_disabled(Fields, Opt) {
  opcao = "<?php if ($GLOBALS["erro_incl"] == 1) {echo "novo";} else {echo $this->nmgp_opcao;} ?>";
  if (opcao == "novo" && Opt == "U") {
      return;
  }
  if (opcao != "novo" && Opt == "I") {
      return;
  }
  Field = Fields.split(";");
  for (i=0; i < Field.length; i++)
  {
     F_temp = Field[i].split("=");
     F_name = F_temp[0];
     F_opc  = (F_temp[1] && ("disabled" == F_temp[1] || "true" == F_temp[1])) ? true : false;
     if (F_name == "contratonumero")
     {
        $('input[name="contratonumero"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="contratonumero"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="contratonumero"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "nombreedv")
     {
        $('input[name="nombreedv"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="nombreedv"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="nombreedv"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "supervisor")
     {
        $('input[name="supervisor"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="supervisor"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="supervisor"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fechaventa")
     {
        $('input[name="fechaventa"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fechaventa"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fechaventa"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "grupofechainauguracion")
     {
        $('input[name="grupofechainauguracion"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="grupofechainauguracion"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="grupofechainauguracion"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "nombreasociaso")
     {
        $('input[name="nombreasociaso"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="nombreasociaso"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="nombreasociaso"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tipodocumento1")
     {
        $('input[name="tipodocumento1"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tipodocumento1"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tipodocumento1"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "numerodocumento1")
     {
        $('input[name="numerodocumento1"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="numerodocumento1"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="numerodocumento1"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "ubicacion")
     {
        $('input[name="ubicacion"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="ubicacion"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="ubicacion"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "correopersonal1")
     {
        $('input[name="correopersonal1"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="correopersonal1"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="correopersonal1"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "correolaboral1")
     {
        $('input[name="correolaboral1"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="correolaboral1"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="correolaboral1"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf11")
     {
        $('input[name="tf11"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf11"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf11"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf13")
     {
        $('input[name="tf13"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf13"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf13"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf12")
     {
        $('input[name="tf12"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf12"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf12"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf14")
     {
        $('input[name="tf14"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf14"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf14"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf15")
     {
        $('input[name="tf15"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf15"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf15"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf16")
     {
        $('input[name="tf16"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf16"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf16"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf17")
     {
        $('input[name="tf17"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf17"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf17"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf18")
     {
        $('input[name="tf18"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf18"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf18"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf19")
     {
        $('input[name="tf19"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf19"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf19"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "nombreasociado2")
     {
        $('input[name="nombreasociado2"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="nombreasociado2"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="nombreasociado2"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tipodocumento2")
     {
        $('input[name="tipodocumento2"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tipodocumento2"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tipodocumento2"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "numerodocumento2")
     {
        $('input[name="numerodocumento2"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="numerodocumento2"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="numerodocumento2"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "ubicacion2")
     {
        $('input[name="ubicacion2"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="ubicacion2"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="ubicacion2"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "correopersonal2")
     {
        $('input[name="correopersonal2"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="correopersonal2"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="correopersonal2"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "correolaboral2")
     {
        $('input[name="correolaboral2"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="correolaboral2"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="correolaboral2"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf21")
     {
        $('input[name="tf21"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf21"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf21"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf22")
     {
        $('input[name="tf22"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf22"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf22"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf23")
     {
        $('input[name="tf23"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf23"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf23"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf24")
     {
        $('input[name="tf24"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf24"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf24"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf25")
     {
        $('input[name="tf25"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf25"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf25"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf26")
     {
        $('input[name="tf26"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf26"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf26"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf27")
     {
        $('input[name="tf27"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf27"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf27"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf28")
     {
        $('input[name="tf28"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf28"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf28"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf29")
     {
        $('input[name="tf29"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf29"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf29"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "nombreasociado3")
     {
        $('input[name="nombreasociado3"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="nombreasociado3"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="nombreasociado3"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tipodocumento3")
     {
        $('input[name="tipodocumento3"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tipodocumento3"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tipodocumento3"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "numerodocumento3")
     {
        $('input[name="numerodocumento3"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="numerodocumento3"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="numerodocumento3"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "ubicacion3")
     {
        $('input[name="ubicacion3"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="ubicacion3"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="ubicacion3"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "correopersonal3")
     {
        $('input[name="correopersonal3"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="correopersonal3"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="correopersonal3"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "correolaboral3")
     {
        $('input[name="correolaboral3"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="correolaboral3"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="correolaboral3"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf31")
     {
        $('input[name="tf31"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf31"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf31"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf32")
     {
        $('input[name="tf32"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf32"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf32"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf33")
     {
        $('input[name="tf33"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf33"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf33"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf34")
     {
        $('input[name="tf34"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf34"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf34"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf35")
     {
        $('input[name="tf35"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf35"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf35"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf36")
     {
        $('input[name="tf36"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf36"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf36"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf37")
     {
        $('input[name="tf37"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf37"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf37"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf38")
     {
        $('input[name="tf38"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf38"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf38"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tf39")
     {
        $('input[name="tf39"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tf39"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tf39"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "cantidadintentos")
     {
        $('input[name="cantidadintentos"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="cantidadintentos"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="cantidadintentos"]').removeClass("scFormInputDisabled");
        }
     }
  }
 } // nm_field_disabled
<?php

include_once('Formulario_Llamada_Bienvenida_mob_jquery.php');

?>

 var Dyn_Ini  = true;
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

  $("#hidden_bloco_1,#hidden_bloco_2,#hidden_bloco_3,#hidden_bloco_4").each(function() {
   $(this.rows[0]).bind("click", {block: this}, toggleBlock)
                  .mouseover(function() { $(this).css("cursor", "pointer"); })
                  .mouseout(function() { $(this).css("cursor", ""); });
  });

  sc_form_onload();

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  $(".scUiLabelWidthFix").css("width", "500px");
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).on('load', function() {
   });
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
    "hidden_bloco_1": true,
    "hidden_bloco_2": true,
    "hidden_bloco_3": true,
    "hidden_bloco_4": true
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    $vertical_center = '';
?>
<body class="scFormPage" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['error_buffer']) && '' != $_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['error_buffer'])
{
    echo $_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['error_buffer'];
}
elseif (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("Formulario_Llamada_Bienvenida_mob_js0.php");
?>
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
var scInsertFieldWithErrors = new Array();
<?php
foreach ($this->NM_ajax_info['fieldsWithErrors'] as $insertFieldName) {
?>
scInsertFieldWithErrors.push("<?php echo $insertFieldName; ?>");
<?php
}
?>
$(function() {
	scAjaxError_markFieldList(scInsertFieldWithErrors);
});
 </script>
<form  name="F1" method="post" 
               action="Formulario_Llamada_Bienvenida_mob.php" 
               target="_self">
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($nmgp_url_saida); ?>">
<input type="hidden" name="bok" value="OK">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['Formulario_Llamada_Bienvenida_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['Formulario_Llamada_Bienvenida_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable scFormToastTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle scFormToastTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage scFormToastMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<?php
$msgDefClose = isset($this->arr_buttons['bmessageclose']) ? $this->arr_buttons['bmessageclose']['value'] : 'Ok';
?>
<script type="text/javascript">
var scMsgDefTitle = "<?php if (isset($this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl'])) {echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl'];} ?>";
var scMsgDefButton = "Ok";
var scMsgDefClose = "<?php echo $msgDefClose; ?>";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<?php
if ($this->record_insert_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmi']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
if ($this->record_delete_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmd']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
?>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0  width="75%">
 <tr>
  <td>
  <div class="scFormBorder" style="<?php echo (isset($remove_border) ? $remove_border : ''); ?>">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['mostra_cab'] != "N") && (!$_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['dashboard_info']['under_dashboard'] || !$_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['dashboard_info']['compact_mode'] || $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['dashboard_info']['maximized']))
  {
?>
<tr><td>
<style>
    .scMenuTHeaderFont img, .scGridHeaderFont img , .scFormHeaderFont img , .scTabHeaderFont img , .scContainerHeaderFont img , .scFilterHeaderFont img { height:23px;}
</style>
<div class="scFormHeader" style="height: 54px; padding: 17px 15px; box-sizing: border-box;margin: -1px 0px 0px 0px;width: 100%;">
    <div class="scFormHeaderFont" style="float: left; text-transform: uppercase;"><?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . ""; } else { echo "LLAMADA DE BIENVENIDA"; } ?></div>
    <div class="scFormHeaderFont" style="float: right;"><?php echo date($this->dateDefaultFormat()); ?></div>
</div></td></tr>
<?php
  }
?>
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; text-align: center; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['contratonumero']))
    {
        $this->nm_new_label['contratonumero'] = "Número de Contrato ";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $contratonumero = $this->contratonumero;
   $sStyleHidden_contratonumero = '';
   if (isset($this->nmgp_cmp_hidden['contratonumero']) && $this->nmgp_cmp_hidden['contratonumero'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['contratonumero']);
       $sStyleHidden_contratonumero = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_contratonumero = 'display: none;';
   $sStyleReadInp_contratonumero = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['contratonumero']) && $this->nmgp_cmp_readonly['contratonumero'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['contratonumero']);
       $sStyleReadLab_contratonumero = '';
       $sStyleReadInp_contratonumero = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['contratonumero']) && $this->nmgp_cmp_hidden['contratonumero'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="contratonumero" value="<?php echo $this->form_encode_input($contratonumero) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_contratonumero_line" id="hidden_field_data_contratonumero" style="<?php echo $sStyleHidden_contratonumero; ?>"> <span class="scFormLabelOddFormat css_contratonumero_label" style=""><span id="id_label_contratonumero"><?php echo $this->nm_new_label['contratonumero']; ?></span></span><br><input type="hidden" name="contratonumero" value="<?php echo $this->form_encode_input($contratonumero); ?>"><span id="id_ajax_label_contratonumero"><?php echo nl2br($contratonumero); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nombreedv']))
    {
        $this->nm_new_label['nombreedv'] = "Nombre Ejecutivo de Ventas";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nombreedv = $this->nombreedv;
   $sStyleHidden_nombreedv = '';
   if (isset($this->nmgp_cmp_hidden['nombreedv']) && $this->nmgp_cmp_hidden['nombreedv'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nombreedv']);
       $sStyleHidden_nombreedv = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nombreedv = 'display: none;';
   $sStyleReadInp_nombreedv = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nombreedv']) && $this->nmgp_cmp_readonly['nombreedv'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nombreedv']);
       $sStyleReadLab_nombreedv = '';
       $sStyleReadInp_nombreedv = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nombreedv']) && $this->nmgp_cmp_hidden['nombreedv'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nombreedv" value="<?php echo $this->form_encode_input($nombreedv) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nombreedv_line" id="hidden_field_data_nombreedv" style="<?php echo $sStyleHidden_nombreedv; ?>"> <span class="scFormLabelOddFormat css_nombreedv_label" style=""><span id="id_label_nombreedv"><?php echo $this->nm_new_label['nombreedv']; ?></span></span><br><input type="hidden" name="nombreedv" value="<?php echo $this->form_encode_input($nombreedv); ?>"><span id="id_ajax_label_nombreedv"><?php echo nl2br($nombreedv); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['supervisor']))
    {
        $this->nm_new_label['supervisor'] = "Nombre del Supervisor";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $supervisor = $this->supervisor;
   $sStyleHidden_supervisor = '';
   if (isset($this->nmgp_cmp_hidden['supervisor']) && $this->nmgp_cmp_hidden['supervisor'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['supervisor']);
       $sStyleHidden_supervisor = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_supervisor = 'display: none;';
   $sStyleReadInp_supervisor = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['supervisor']) && $this->nmgp_cmp_readonly['supervisor'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['supervisor']);
       $sStyleReadLab_supervisor = '';
       $sStyleReadInp_supervisor = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['supervisor']) && $this->nmgp_cmp_hidden['supervisor'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="supervisor" value="<?php echo $this->form_encode_input($supervisor) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_supervisor_line" id="hidden_field_data_supervisor" style="<?php echo $sStyleHidden_supervisor; ?>"> <span class="scFormLabelOddFormat css_supervisor_label" style=""><span id="id_label_supervisor"><?php echo $this->nm_new_label['supervisor']; ?></span></span><br><input type="hidden" name="supervisor" value="<?php echo $this->form_encode_input($supervisor); ?>"><span id="id_ajax_label_supervisor"><?php echo nl2br($supervisor); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fechaventa']))
    {
        $this->nm_new_label['fechaventa'] = "Fecha de Venta";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fechaventa = $this->fechaventa;
   $sStyleHidden_fechaventa = '';
   if (isset($this->nmgp_cmp_hidden['fechaventa']) && $this->nmgp_cmp_hidden['fechaventa'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fechaventa']);
       $sStyleHidden_fechaventa = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fechaventa = 'display: none;';
   $sStyleReadInp_fechaventa = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fechaventa']) && $this->nmgp_cmp_readonly['fechaventa'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fechaventa']);
       $sStyleReadLab_fechaventa = '';
       $sStyleReadInp_fechaventa = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fechaventa']) && $this->nmgp_cmp_hidden['fechaventa'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fechaventa" value="<?php echo $this->form_encode_input($fechaventa) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fechaventa_line" id="hidden_field_data_fechaventa" style="<?php echo $sStyleHidden_fechaventa; ?>"> <span class="scFormLabelOddFormat css_fechaventa_label" style=""><span id="id_label_fechaventa"><?php echo $this->nm_new_label['fechaventa']; ?></span></span><br><input type="hidden" name="fechaventa" value="<?php echo $this->form_encode_input($fechaventa); ?>"><span id="id_ajax_label_fechaventa"><?php echo nl2br($fechaventa); ?></span>
<?php
$tmp_form_data = $this->field_config['fechaventa']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['grupofechainauguracion']))
    {
        $this->nm_new_label['grupofechainauguracion'] = "Grupo Fecha Inauguración";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $grupofechainauguracion = $this->grupofechainauguracion;
   $sStyleHidden_grupofechainauguracion = '';
   if (isset($this->nmgp_cmp_hidden['grupofechainauguracion']) && $this->nmgp_cmp_hidden['grupofechainauguracion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['grupofechainauguracion']);
       $sStyleHidden_grupofechainauguracion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_grupofechainauguracion = 'display: none;';
   $sStyleReadInp_grupofechainauguracion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['grupofechainauguracion']) && $this->nmgp_cmp_readonly['grupofechainauguracion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['grupofechainauguracion']);
       $sStyleReadLab_grupofechainauguracion = '';
       $sStyleReadInp_grupofechainauguracion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['grupofechainauguracion']) && $this->nmgp_cmp_hidden['grupofechainauguracion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="grupofechainauguracion" value="<?php echo $this->form_encode_input($grupofechainauguracion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_grupofechainauguracion_line" id="hidden_field_data_grupofechainauguracion" style="<?php echo $sStyleHidden_grupofechainauguracion; ?>"> <span class="scFormLabelOddFormat css_grupofechainauguracion_label" style=""><span id="id_label_grupofechainauguracion"><?php echo $this->nm_new_label['grupofechainauguracion']; ?></span></span><br><input type="hidden" name="grupofechainauguracion" value="<?php echo $this->form_encode_input($grupofechainauguracion); ?>"><span id="id_ajax_label_grupofechainauguracion"><?php echo nl2br($grupofechainauguracion); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_grupofechainauguracion_dumb = ('' == $sStyleHidden_grupofechainauguracion) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_grupofechainauguracion_dumb" style="<?php echo $sStyleHidden_grupofechainauguracion_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_1"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_1" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf1\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?>Titular N°1<?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nombreasociaso']))
    {
        $this->nm_new_label['nombreasociaso'] = "Nombre";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nombreasociaso = $this->nombreasociaso;
   $sStyleHidden_nombreasociaso = '';
   if (isset($this->nmgp_cmp_hidden['nombreasociaso']) && $this->nmgp_cmp_hidden['nombreasociaso'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nombreasociaso']);
       $sStyleHidden_nombreasociaso = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nombreasociaso = 'display: none;';
   $sStyleReadInp_nombreasociaso = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nombreasociaso']) && $this->nmgp_cmp_readonly['nombreasociaso'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nombreasociaso']);
       $sStyleReadLab_nombreasociaso = '';
       $sStyleReadInp_nombreasociaso = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nombreasociaso']) && $this->nmgp_cmp_hidden['nombreasociaso'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nombreasociaso" value="<?php echo $this->form_encode_input($nombreasociaso) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nombreasociaso_line" id="hidden_field_data_nombreasociaso" style="<?php echo $sStyleHidden_nombreasociaso; ?>"> <span class="scFormLabelOddFormat css_nombreasociaso_label" style=""><span id="id_label_nombreasociaso"><?php echo $this->nm_new_label['nombreasociaso']; ?></span></span><br><input type="hidden" name="nombreasociaso" value="<?php echo $this->form_encode_input($nombreasociaso); ?>"><span id="id_ajax_label_nombreasociaso"><?php echo nl2br($nombreasociaso); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tipodocumento1']))
    {
        $this->nm_new_label['tipodocumento1'] = "Tipo Documento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tipodocumento1 = $this->tipodocumento1;
   $sStyleHidden_tipodocumento1 = '';
   if (isset($this->nmgp_cmp_hidden['tipodocumento1']) && $this->nmgp_cmp_hidden['tipodocumento1'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tipodocumento1']);
       $sStyleHidden_tipodocumento1 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tipodocumento1 = 'display: none;';
   $sStyleReadInp_tipodocumento1 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tipodocumento1']) && $this->nmgp_cmp_readonly['tipodocumento1'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tipodocumento1']);
       $sStyleReadLab_tipodocumento1 = '';
       $sStyleReadInp_tipodocumento1 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tipodocumento1']) && $this->nmgp_cmp_hidden['tipodocumento1'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tipodocumento1" value="<?php echo $this->form_encode_input($tipodocumento1) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tipodocumento1_line" id="hidden_field_data_tipodocumento1" style="<?php echo $sStyleHidden_tipodocumento1; ?>"> <span class="scFormLabelOddFormat css_tipodocumento1_label" style=""><span id="id_label_tipodocumento1"><?php echo $this->nm_new_label['tipodocumento1']; ?></span></span><br><input type="hidden" name="tipodocumento1" value="<?php echo $this->form_encode_input($tipodocumento1); ?>"><span id="id_ajax_label_tipodocumento1"><?php echo nl2br($tipodocumento1); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['numerodocumento1']))
    {
        $this->nm_new_label['numerodocumento1'] = "Nro Documento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $numerodocumento1 = $this->numerodocumento1;
   $sStyleHidden_numerodocumento1 = '';
   if (isset($this->nmgp_cmp_hidden['numerodocumento1']) && $this->nmgp_cmp_hidden['numerodocumento1'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['numerodocumento1']);
       $sStyleHidden_numerodocumento1 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_numerodocumento1 = 'display: none;';
   $sStyleReadInp_numerodocumento1 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['numerodocumento1']) && $this->nmgp_cmp_readonly['numerodocumento1'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['numerodocumento1']);
       $sStyleReadLab_numerodocumento1 = '';
       $sStyleReadInp_numerodocumento1 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['numerodocumento1']) && $this->nmgp_cmp_hidden['numerodocumento1'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="numerodocumento1" value="<?php echo $this->form_encode_input($numerodocumento1) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_numerodocumento1_line" id="hidden_field_data_numerodocumento1" style="<?php echo $sStyleHidden_numerodocumento1; ?>"> <span class="scFormLabelOddFormat css_numerodocumento1_label" style=""><span id="id_label_numerodocumento1"><?php echo $this->nm_new_label['numerodocumento1']; ?></span></span><br><input type="hidden" name="numerodocumento1" value="<?php echo $this->form_encode_input($numerodocumento1); ?>"><span id="id_ajax_label_numerodocumento1"><?php echo nl2br($numerodocumento1); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ubicacion']))
    {
        $this->nm_new_label['ubicacion'] = "Ubicación";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ubicacion = $this->ubicacion;
   $sStyleHidden_ubicacion = '';
   if (isset($this->nmgp_cmp_hidden['ubicacion']) && $this->nmgp_cmp_hidden['ubicacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ubicacion']);
       $sStyleHidden_ubicacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ubicacion = 'display: none;';
   $sStyleReadInp_ubicacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ubicacion']) && $this->nmgp_cmp_readonly['ubicacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ubicacion']);
       $sStyleReadLab_ubicacion = '';
       $sStyleReadInp_ubicacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ubicacion']) && $this->nmgp_cmp_hidden['ubicacion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ubicacion" value="<?php echo $this->form_encode_input($ubicacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ubicacion_line" id="hidden_field_data_ubicacion" style="<?php echo $sStyleHidden_ubicacion; ?>"> <span class="scFormLabelOddFormat css_ubicacion_label" style=""><span id="id_label_ubicacion"><?php echo $this->nm_new_label['ubicacion']; ?></span></span><br><input type="hidden" name="ubicacion" value="<?php echo $this->form_encode_input($ubicacion); ?>"><span id="id_ajax_label_ubicacion"><?php echo nl2br($ubicacion); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['correopersonal1']))
    {
        $this->nm_new_label['correopersonal1'] = "Correo Personal";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $correopersonal1 = $this->correopersonal1;
   $sStyleHidden_correopersonal1 = '';
   if (isset($this->nmgp_cmp_hidden['correopersonal1']) && $this->nmgp_cmp_hidden['correopersonal1'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['correopersonal1']);
       $sStyleHidden_correopersonal1 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_correopersonal1 = 'display: none;';
   $sStyleReadInp_correopersonal1 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['correopersonal1']) && $this->nmgp_cmp_readonly['correopersonal1'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['correopersonal1']);
       $sStyleReadLab_correopersonal1 = '';
       $sStyleReadInp_correopersonal1 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['correopersonal1']) && $this->nmgp_cmp_hidden['correopersonal1'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="correopersonal1" value="<?php echo $this->form_encode_input($correopersonal1) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_correopersonal1_line" id="hidden_field_data_correopersonal1" style="<?php echo $sStyleHidden_correopersonal1; ?>"> <span class="scFormLabelOddFormat css_correopersonal1_label" style=""><span id="id_label_correopersonal1"><?php echo $this->nm_new_label['correopersonal1']; ?></span></span><br><input type="hidden" name="correopersonal1" value="<?php echo $this->form_encode_input($correopersonal1); ?>"><span id="id_ajax_label_correopersonal1"><?php echo nl2br($correopersonal1); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['correolaboral1']))
    {
        $this->nm_new_label['correolaboral1'] = "Correo Laboral";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $correolaboral1 = $this->correolaboral1;
   $sStyleHidden_correolaboral1 = '';
   if (isset($this->nmgp_cmp_hidden['correolaboral1']) && $this->nmgp_cmp_hidden['correolaboral1'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['correolaboral1']);
       $sStyleHidden_correolaboral1 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_correolaboral1 = 'display: none;';
   $sStyleReadInp_correolaboral1 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['correolaboral1']) && $this->nmgp_cmp_readonly['correolaboral1'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['correolaboral1']);
       $sStyleReadLab_correolaboral1 = '';
       $sStyleReadInp_correolaboral1 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['correolaboral1']) && $this->nmgp_cmp_hidden['correolaboral1'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="correolaboral1" value="<?php echo $this->form_encode_input($correolaboral1) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_correolaboral1_line" id="hidden_field_data_correolaboral1" style="<?php echo $sStyleHidden_correolaboral1; ?>"> <span class="scFormLabelOddFormat css_correolaboral1_label" style=""><span id="id_label_correolaboral1"><?php echo $this->nm_new_label['correolaboral1']; ?></span></span><br><input type="hidden" name="correolaboral1" value="<?php echo $this->form_encode_input($correolaboral1); ?>"><span id="id_ajax_label_correolaboral1"><?php echo nl2br($correolaboral1); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf11']))
    {
        $this->nm_new_label['tf11'] = "Teléfono de Contacto ";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf11 = $this->tf11;
   $sStyleHidden_tf11 = '';
   if (isset($this->nmgp_cmp_hidden['tf11']) && $this->nmgp_cmp_hidden['tf11'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf11']);
       $sStyleHidden_tf11 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf11 = 'display: none;';
   $sStyleReadInp_tf11 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf11']) && $this->nmgp_cmp_readonly['tf11'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf11']);
       $sStyleReadLab_tf11 = '';
       $sStyleReadInp_tf11 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf11']) && $this->nmgp_cmp_hidden['tf11'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf11" value="<?php echo $this->form_encode_input($tf11) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf11_line" id="hidden_field_data_tf11" style="<?php echo $sStyleHidden_tf11; ?>"> <span class="scFormLabelOddFormat css_tf11_label" style=""><span id="id_label_tf11"><?php echo $this->nm_new_label['tf11']; ?></span></span><br><input type="hidden" name="tf11" value="<?php echo $this->form_encode_input($tf11); ?>"><span id="id_ajax_label_tf11"><?php echo nl2br($tf11); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf13']))
    {
        $this->nm_new_label['tf13'] = "Teléfono Domicilio";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf13 = $this->tf13;
   $sStyleHidden_tf13 = '';
   if (isset($this->nmgp_cmp_hidden['tf13']) && $this->nmgp_cmp_hidden['tf13'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf13']);
       $sStyleHidden_tf13 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf13 = 'display: none;';
   $sStyleReadInp_tf13 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf13']) && $this->nmgp_cmp_readonly['tf13'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf13']);
       $sStyleReadLab_tf13 = '';
       $sStyleReadInp_tf13 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf13']) && $this->nmgp_cmp_hidden['tf13'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf13" value="<?php echo $this->form_encode_input($tf13) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf13_line" id="hidden_field_data_tf13" style="<?php echo $sStyleHidden_tf13; ?>"> <span class="scFormLabelOddFormat css_tf13_label" style=""><span id="id_label_tf13"><?php echo $this->nm_new_label['tf13']; ?></span></span><br><input type="hidden" name="tf13" value="<?php echo $this->form_encode_input($tf13); ?>"><span id="id_ajax_label_tf13"><?php echo nl2br($tf13); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf12']))
    {
        $this->nm_new_label['tf12'] = "Teléfono Personal";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf12 = $this->tf12;
   $sStyleHidden_tf12 = '';
   if (isset($this->nmgp_cmp_hidden['tf12']) && $this->nmgp_cmp_hidden['tf12'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf12']);
       $sStyleHidden_tf12 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf12 = 'display: none;';
   $sStyleReadInp_tf12 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf12']) && $this->nmgp_cmp_readonly['tf12'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf12']);
       $sStyleReadLab_tf12 = '';
       $sStyleReadInp_tf12 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf12']) && $this->nmgp_cmp_hidden['tf12'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf12" value="<?php echo $this->form_encode_input($tf12) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf12_line" id="hidden_field_data_tf12" style="<?php echo $sStyleHidden_tf12; ?>"> <span class="scFormLabelOddFormat css_tf12_label" style=""><span id="id_label_tf12"><?php echo $this->nm_new_label['tf12']; ?></span></span><br><input type="hidden" name="tf12" value="<?php echo $this->form_encode_input($tf12); ?>"><span id="id_ajax_label_tf12"><?php echo nl2br($tf12); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf14']))
    {
        $this->nm_new_label['tf14'] = "Teléfono Laboral";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf14 = $this->tf14;
   $sStyleHidden_tf14 = '';
   if (isset($this->nmgp_cmp_hidden['tf14']) && $this->nmgp_cmp_hidden['tf14'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf14']);
       $sStyleHidden_tf14 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf14 = 'display: none;';
   $sStyleReadInp_tf14 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf14']) && $this->nmgp_cmp_readonly['tf14'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf14']);
       $sStyleReadLab_tf14 = '';
       $sStyleReadInp_tf14 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf14']) && $this->nmgp_cmp_hidden['tf14'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf14" value="<?php echo $this->form_encode_input($tf14) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf14_line" id="hidden_field_data_tf14" style="<?php echo $sStyleHidden_tf14; ?>"> <span class="scFormLabelOddFormat css_tf14_label" style=""><span id="id_label_tf14"><?php echo $this->nm_new_label['tf14']; ?></span></span><br><input type="hidden" name="tf14" value="<?php echo $this->form_encode_input($tf14); ?>"><span id="id_ajax_label_tf14"><?php echo nl2br($tf14); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf15']))
    {
        $this->nm_new_label['tf15'] = "Teléfono Otros";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf15 = $this->tf15;
   $sStyleHidden_tf15 = '';
   if (isset($this->nmgp_cmp_hidden['tf15']) && $this->nmgp_cmp_hidden['tf15'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf15']);
       $sStyleHidden_tf15 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf15 = 'display: none;';
   $sStyleReadInp_tf15 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf15']) && $this->nmgp_cmp_readonly['tf15'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf15']);
       $sStyleReadLab_tf15 = '';
       $sStyleReadInp_tf15 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf15']) && $this->nmgp_cmp_hidden['tf15'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf15" value="<?php echo $this->form_encode_input($tf15) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf15_line" id="hidden_field_data_tf15" style="<?php echo $sStyleHidden_tf15; ?>"> <span class="scFormLabelOddFormat css_tf15_label" style=""><span id="id_label_tf15"><?php echo $this->nm_new_label['tf15']; ?></span></span><br><input type="hidden" name="tf15" value="<?php echo $this->form_encode_input($tf15); ?>"><span id="id_ajax_label_tf15"><?php echo nl2br($tf15); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf16']))
    {
        $this->nm_new_label['tf16'] = "Móvil ";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf16 = $this->tf16;
   $sStyleHidden_tf16 = '';
   if (isset($this->nmgp_cmp_hidden['tf16']) && $this->nmgp_cmp_hidden['tf16'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf16']);
       $sStyleHidden_tf16 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf16 = 'display: none;';
   $sStyleReadInp_tf16 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf16']) && $this->nmgp_cmp_readonly['tf16'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf16']);
       $sStyleReadLab_tf16 = '';
       $sStyleReadInp_tf16 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf16']) && $this->nmgp_cmp_hidden['tf16'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf16" value="<?php echo $this->form_encode_input($tf16) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf16_line" id="hidden_field_data_tf16" style="<?php echo $sStyleHidden_tf16; ?>"> <span class="scFormLabelOddFormat css_tf16_label" style=""><span id="id_label_tf16"><?php echo $this->nm_new_label['tf16']; ?></span></span><br><input type="hidden" name="tf16" value="<?php echo $this->form_encode_input($tf16); ?>"><span id="id_ajax_label_tf16"><?php echo nl2br($tf16); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf17']))
    {
        $this->nm_new_label['tf17'] = "Móvil Personal ";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf17 = $this->tf17;
   $sStyleHidden_tf17 = '';
   if (isset($this->nmgp_cmp_hidden['tf17']) && $this->nmgp_cmp_hidden['tf17'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf17']);
       $sStyleHidden_tf17 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf17 = 'display: none;';
   $sStyleReadInp_tf17 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf17']) && $this->nmgp_cmp_readonly['tf17'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf17']);
       $sStyleReadLab_tf17 = '';
       $sStyleReadInp_tf17 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf17']) && $this->nmgp_cmp_hidden['tf17'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf17" value="<?php echo $this->form_encode_input($tf17) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf17_line" id="hidden_field_data_tf17" style="<?php echo $sStyleHidden_tf17; ?>"> <span class="scFormLabelOddFormat css_tf17_label" style=""><span id="id_label_tf17"><?php echo $this->nm_new_label['tf17']; ?></span></span><br><input type="hidden" name="tf17" value="<?php echo $this->form_encode_input($tf17); ?>"><span id="id_ajax_label_tf17"><?php echo nl2br($tf17); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf18']))
    {
        $this->nm_new_label['tf18'] = "Móvil Extra";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf18 = $this->tf18;
   $sStyleHidden_tf18 = '';
   if (isset($this->nmgp_cmp_hidden['tf18']) && $this->nmgp_cmp_hidden['tf18'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf18']);
       $sStyleHidden_tf18 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf18 = 'display: none;';
   $sStyleReadInp_tf18 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf18']) && $this->nmgp_cmp_readonly['tf18'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf18']);
       $sStyleReadLab_tf18 = '';
       $sStyleReadInp_tf18 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf18']) && $this->nmgp_cmp_hidden['tf18'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf18" value="<?php echo $this->form_encode_input($tf18) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf18_line" id="hidden_field_data_tf18" style="<?php echo $sStyleHidden_tf18; ?>"> <span class="scFormLabelOddFormat css_tf18_label" style=""><span id="id_label_tf18"><?php echo $this->nm_new_label['tf18']; ?></span></span><br><input type="hidden" name="tf18" value="<?php echo $this->form_encode_input($tf18); ?>"><span id="id_ajax_label_tf18"><?php echo nl2br($tf18); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf19']))
    {
        $this->nm_new_label['tf19'] = "Móvil Contacto";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf19 = $this->tf19;
   $sStyleHidden_tf19 = '';
   if (isset($this->nmgp_cmp_hidden['tf19']) && $this->nmgp_cmp_hidden['tf19'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf19']);
       $sStyleHidden_tf19 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf19 = 'display: none;';
   $sStyleReadInp_tf19 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf19']) && $this->nmgp_cmp_readonly['tf19'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf19']);
       $sStyleReadLab_tf19 = '';
       $sStyleReadInp_tf19 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf19']) && $this->nmgp_cmp_hidden['tf19'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf19" value="<?php echo $this->form_encode_input($tf19) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf19_line" id="hidden_field_data_tf19" style="<?php echo $sStyleHidden_tf19; ?>"> <span class="scFormLabelOddFormat css_tf19_label" style=""><span id="id_label_tf19"><?php echo $this->nm_new_label['tf19']; ?></span></span><br><input type="hidden" name="tf19" value="<?php echo $this->form_encode_input($tf19); ?>"><span id="id_ajax_label_tf19"><?php echo nl2br($tf19); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_tf19_dumb = ('' == $sStyleHidden_tf19) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_tf19_dumb" style="<?php echo $sStyleHidden_tf19_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_2"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf2\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?>Titular N°2<?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nombreasociado2']))
    {
        $this->nm_new_label['nombreasociado2'] = "Asociado";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nombreasociado2 = $this->nombreasociado2;
   $sStyleHidden_nombreasociado2 = '';
   if (isset($this->nmgp_cmp_hidden['nombreasociado2']) && $this->nmgp_cmp_hidden['nombreasociado2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nombreasociado2']);
       $sStyleHidden_nombreasociado2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nombreasociado2 = 'display: none;';
   $sStyleReadInp_nombreasociado2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nombreasociado2']) && $this->nmgp_cmp_readonly['nombreasociado2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nombreasociado2']);
       $sStyleReadLab_nombreasociado2 = '';
       $sStyleReadInp_nombreasociado2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nombreasociado2']) && $this->nmgp_cmp_hidden['nombreasociado2'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nombreasociado2" value="<?php echo $this->form_encode_input($nombreasociado2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nombreasociado2_line" id="hidden_field_data_nombreasociado2" style="<?php echo $sStyleHidden_nombreasociado2; ?>"> <span class="scFormLabelOddFormat css_nombreasociado2_label" style=""><span id="id_label_nombreasociado2"><?php echo $this->nm_new_label['nombreasociado2']; ?></span></span><br><input type="hidden" name="nombreasociado2" value="<?php echo $this->form_encode_input($nombreasociado2); ?>"><span id="id_ajax_label_nombreasociado2"><?php echo nl2br($nombreasociado2); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tipodocumento2']))
    {
        $this->nm_new_label['tipodocumento2'] = "Tipo Documento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tipodocumento2 = $this->tipodocumento2;
   $sStyleHidden_tipodocumento2 = '';
   if (isset($this->nmgp_cmp_hidden['tipodocumento2']) && $this->nmgp_cmp_hidden['tipodocumento2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tipodocumento2']);
       $sStyleHidden_tipodocumento2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tipodocumento2 = 'display: none;';
   $sStyleReadInp_tipodocumento2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tipodocumento2']) && $this->nmgp_cmp_readonly['tipodocumento2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tipodocumento2']);
       $sStyleReadLab_tipodocumento2 = '';
       $sStyleReadInp_tipodocumento2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tipodocumento2']) && $this->nmgp_cmp_hidden['tipodocumento2'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tipodocumento2" value="<?php echo $this->form_encode_input($tipodocumento2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tipodocumento2_line" id="hidden_field_data_tipodocumento2" style="<?php echo $sStyleHidden_tipodocumento2; ?>"> <span class="scFormLabelOddFormat css_tipodocumento2_label" style=""><span id="id_label_tipodocumento2"><?php echo $this->nm_new_label['tipodocumento2']; ?></span></span><br><input type="hidden" name="tipodocumento2" value="<?php echo $this->form_encode_input($tipodocumento2); ?>"><span id="id_ajax_label_tipodocumento2"><?php echo nl2br($tipodocumento2); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['numerodocumento2']))
    {
        $this->nm_new_label['numerodocumento2'] = "Nro Documento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $numerodocumento2 = $this->numerodocumento2;
   $sStyleHidden_numerodocumento2 = '';
   if (isset($this->nmgp_cmp_hidden['numerodocumento2']) && $this->nmgp_cmp_hidden['numerodocumento2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['numerodocumento2']);
       $sStyleHidden_numerodocumento2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_numerodocumento2 = 'display: none;';
   $sStyleReadInp_numerodocumento2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['numerodocumento2']) && $this->nmgp_cmp_readonly['numerodocumento2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['numerodocumento2']);
       $sStyleReadLab_numerodocumento2 = '';
       $sStyleReadInp_numerodocumento2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['numerodocumento2']) && $this->nmgp_cmp_hidden['numerodocumento2'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="numerodocumento2" value="<?php echo $this->form_encode_input($numerodocumento2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_numerodocumento2_line" id="hidden_field_data_numerodocumento2" style="<?php echo $sStyleHidden_numerodocumento2; ?>"> <span class="scFormLabelOddFormat css_numerodocumento2_label" style=""><span id="id_label_numerodocumento2"><?php echo $this->nm_new_label['numerodocumento2']; ?></span></span><br><input type="hidden" name="numerodocumento2" value="<?php echo $this->form_encode_input($numerodocumento2); ?>"><span id="id_ajax_label_numerodocumento2"><?php echo nl2br($numerodocumento2); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ubicacion2']))
    {
        $this->nm_new_label['ubicacion2'] = "Ubicación";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ubicacion2 = $this->ubicacion2;
   $sStyleHidden_ubicacion2 = '';
   if (isset($this->nmgp_cmp_hidden['ubicacion2']) && $this->nmgp_cmp_hidden['ubicacion2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ubicacion2']);
       $sStyleHidden_ubicacion2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ubicacion2 = 'display: none;';
   $sStyleReadInp_ubicacion2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ubicacion2']) && $this->nmgp_cmp_readonly['ubicacion2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ubicacion2']);
       $sStyleReadLab_ubicacion2 = '';
       $sStyleReadInp_ubicacion2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ubicacion2']) && $this->nmgp_cmp_hidden['ubicacion2'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ubicacion2" value="<?php echo $this->form_encode_input($ubicacion2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ubicacion2_line" id="hidden_field_data_ubicacion2" style="<?php echo $sStyleHidden_ubicacion2; ?>"> <span class="scFormLabelOddFormat css_ubicacion2_label" style=""><span id="id_label_ubicacion2"><?php echo $this->nm_new_label['ubicacion2']; ?></span></span><br><input type="hidden" name="ubicacion2" value="<?php echo $this->form_encode_input($ubicacion2); ?>"><span id="id_ajax_label_ubicacion2"><?php echo nl2br($ubicacion2); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['correopersonal2']))
    {
        $this->nm_new_label['correopersonal2'] = "Correo Personal";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $correopersonal2 = $this->correopersonal2;
   $sStyleHidden_correopersonal2 = '';
   if (isset($this->nmgp_cmp_hidden['correopersonal2']) && $this->nmgp_cmp_hidden['correopersonal2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['correopersonal2']);
       $sStyleHidden_correopersonal2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_correopersonal2 = 'display: none;';
   $sStyleReadInp_correopersonal2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['correopersonal2']) && $this->nmgp_cmp_readonly['correopersonal2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['correopersonal2']);
       $sStyleReadLab_correopersonal2 = '';
       $sStyleReadInp_correopersonal2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['correopersonal2']) && $this->nmgp_cmp_hidden['correopersonal2'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="correopersonal2" value="<?php echo $this->form_encode_input($correopersonal2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_correopersonal2_line" id="hidden_field_data_correopersonal2" style="<?php echo $sStyleHidden_correopersonal2; ?>"> <span class="scFormLabelOddFormat css_correopersonal2_label" style=""><span id="id_label_correopersonal2"><?php echo $this->nm_new_label['correopersonal2']; ?></span></span><br><input type="hidden" name="correopersonal2" value="<?php echo $this->form_encode_input($correopersonal2); ?>"><span id="id_ajax_label_correopersonal2"><?php echo nl2br($correopersonal2); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['correolaboral2']))
    {
        $this->nm_new_label['correolaboral2'] = "Correo Laboral";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $correolaboral2 = $this->correolaboral2;
   $sStyleHidden_correolaboral2 = '';
   if (isset($this->nmgp_cmp_hidden['correolaboral2']) && $this->nmgp_cmp_hidden['correolaboral2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['correolaboral2']);
       $sStyleHidden_correolaboral2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_correolaboral2 = 'display: none;';
   $sStyleReadInp_correolaboral2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['correolaboral2']) && $this->nmgp_cmp_readonly['correolaboral2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['correolaboral2']);
       $sStyleReadLab_correolaboral2 = '';
       $sStyleReadInp_correolaboral2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['correolaboral2']) && $this->nmgp_cmp_hidden['correolaboral2'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="correolaboral2" value="<?php echo $this->form_encode_input($correolaboral2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_correolaboral2_line" id="hidden_field_data_correolaboral2" style="<?php echo $sStyleHidden_correolaboral2; ?>"> <span class="scFormLabelOddFormat css_correolaboral2_label" style=""><span id="id_label_correolaboral2"><?php echo $this->nm_new_label['correolaboral2']; ?></span></span><br><input type="hidden" name="correolaboral2" value="<?php echo $this->form_encode_input($correolaboral2); ?>"><span id="id_ajax_label_correolaboral2"><?php echo nl2br($correolaboral2); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf21']))
    {
        $this->nm_new_label['tf21'] = "Teléfono de Contacto ";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf21 = $this->tf21;
   $sStyleHidden_tf21 = '';
   if (isset($this->nmgp_cmp_hidden['tf21']) && $this->nmgp_cmp_hidden['tf21'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf21']);
       $sStyleHidden_tf21 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf21 = 'display: none;';
   $sStyleReadInp_tf21 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf21']) && $this->nmgp_cmp_readonly['tf21'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf21']);
       $sStyleReadLab_tf21 = '';
       $sStyleReadInp_tf21 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf21']) && $this->nmgp_cmp_hidden['tf21'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf21" value="<?php echo $this->form_encode_input($tf21) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf21_line" id="hidden_field_data_tf21" style="<?php echo $sStyleHidden_tf21; ?>"> <span class="scFormLabelOddFormat css_tf21_label" style=""><span id="id_label_tf21"><?php echo $this->nm_new_label['tf21']; ?></span></span><br><input type="hidden" name="tf21" value="<?php echo $this->form_encode_input($tf21); ?>"><span id="id_ajax_label_tf21"><?php echo nl2br($tf21); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf22']))
    {
        $this->nm_new_label['tf22'] = "Teléfono Personal";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf22 = $this->tf22;
   $sStyleHidden_tf22 = '';
   if (isset($this->nmgp_cmp_hidden['tf22']) && $this->nmgp_cmp_hidden['tf22'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf22']);
       $sStyleHidden_tf22 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf22 = 'display: none;';
   $sStyleReadInp_tf22 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf22']) && $this->nmgp_cmp_readonly['tf22'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf22']);
       $sStyleReadLab_tf22 = '';
       $sStyleReadInp_tf22 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf22']) && $this->nmgp_cmp_hidden['tf22'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf22" value="<?php echo $this->form_encode_input($tf22) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf22_line" id="hidden_field_data_tf22" style="<?php echo $sStyleHidden_tf22; ?>"> <span class="scFormLabelOddFormat css_tf22_label" style=""><span id="id_label_tf22"><?php echo $this->nm_new_label['tf22']; ?></span></span><br><input type="hidden" name="tf22" value="<?php echo $this->form_encode_input($tf22); ?>"><span id="id_ajax_label_tf22"><?php echo nl2br($tf22); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf23']))
    {
        $this->nm_new_label['tf23'] = "Teléfono Domicilio";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf23 = $this->tf23;
   $sStyleHidden_tf23 = '';
   if (isset($this->nmgp_cmp_hidden['tf23']) && $this->nmgp_cmp_hidden['tf23'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf23']);
       $sStyleHidden_tf23 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf23 = 'display: none;';
   $sStyleReadInp_tf23 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf23']) && $this->nmgp_cmp_readonly['tf23'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf23']);
       $sStyleReadLab_tf23 = '';
       $sStyleReadInp_tf23 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf23']) && $this->nmgp_cmp_hidden['tf23'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf23" value="<?php echo $this->form_encode_input($tf23) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf23_line" id="hidden_field_data_tf23" style="<?php echo $sStyleHidden_tf23; ?>"> <span class="scFormLabelOddFormat css_tf23_label" style=""><span id="id_label_tf23"><?php echo $this->nm_new_label['tf23']; ?></span></span><br><input type="hidden" name="tf23" value="<?php echo $this->form_encode_input($tf23); ?>"><span id="id_ajax_label_tf23"><?php echo nl2br($tf23); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf24']))
    {
        $this->nm_new_label['tf24'] = "Teléfono Laboral";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf24 = $this->tf24;
   $sStyleHidden_tf24 = '';
   if (isset($this->nmgp_cmp_hidden['tf24']) && $this->nmgp_cmp_hidden['tf24'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf24']);
       $sStyleHidden_tf24 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf24 = 'display: none;';
   $sStyleReadInp_tf24 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf24']) && $this->nmgp_cmp_readonly['tf24'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf24']);
       $sStyleReadLab_tf24 = '';
       $sStyleReadInp_tf24 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf24']) && $this->nmgp_cmp_hidden['tf24'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf24" value="<?php echo $this->form_encode_input($tf24) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf24_line" id="hidden_field_data_tf24" style="<?php echo $sStyleHidden_tf24; ?>"> <span class="scFormLabelOddFormat css_tf24_label" style=""><span id="id_label_tf24"><?php echo $this->nm_new_label['tf24']; ?></span></span><br><input type="hidden" name="tf24" value="<?php echo $this->form_encode_input($tf24); ?>"><span id="id_ajax_label_tf24"><?php echo nl2br($tf24); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf25']))
    {
        $this->nm_new_label['tf25'] = "Teléfono Otros";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf25 = $this->tf25;
   $sStyleHidden_tf25 = '';
   if (isset($this->nmgp_cmp_hidden['tf25']) && $this->nmgp_cmp_hidden['tf25'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf25']);
       $sStyleHidden_tf25 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf25 = 'display: none;';
   $sStyleReadInp_tf25 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf25']) && $this->nmgp_cmp_readonly['tf25'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf25']);
       $sStyleReadLab_tf25 = '';
       $sStyleReadInp_tf25 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf25']) && $this->nmgp_cmp_hidden['tf25'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf25" value="<?php echo $this->form_encode_input($tf25) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf25_line" id="hidden_field_data_tf25" style="<?php echo $sStyleHidden_tf25; ?>"> <span class="scFormLabelOddFormat css_tf25_label" style=""><span id="id_label_tf25"><?php echo $this->nm_new_label['tf25']; ?></span></span><br><input type="hidden" name="tf25" value="<?php echo $this->form_encode_input($tf25); ?>"><span id="id_ajax_label_tf25"><?php echo nl2br($tf25); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf26']))
    {
        $this->nm_new_label['tf26'] = "Móvil ";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf26 = $this->tf26;
   $sStyleHidden_tf26 = '';
   if (isset($this->nmgp_cmp_hidden['tf26']) && $this->nmgp_cmp_hidden['tf26'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf26']);
       $sStyleHidden_tf26 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf26 = 'display: none;';
   $sStyleReadInp_tf26 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf26']) && $this->nmgp_cmp_readonly['tf26'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf26']);
       $sStyleReadLab_tf26 = '';
       $sStyleReadInp_tf26 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf26']) && $this->nmgp_cmp_hidden['tf26'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf26" value="<?php echo $this->form_encode_input($tf26) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf26_line" id="hidden_field_data_tf26" style="<?php echo $sStyleHidden_tf26; ?>"> <span class="scFormLabelOddFormat css_tf26_label" style=""><span id="id_label_tf26"><?php echo $this->nm_new_label['tf26']; ?></span></span><br><input type="hidden" name="tf26" value="<?php echo $this->form_encode_input($tf26); ?>"><span id="id_ajax_label_tf26"><?php echo nl2br($tf26); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf27']))
    {
        $this->nm_new_label['tf27'] = "Móvil Personal";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf27 = $this->tf27;
   $sStyleHidden_tf27 = '';
   if (isset($this->nmgp_cmp_hidden['tf27']) && $this->nmgp_cmp_hidden['tf27'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf27']);
       $sStyleHidden_tf27 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf27 = 'display: none;';
   $sStyleReadInp_tf27 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf27']) && $this->nmgp_cmp_readonly['tf27'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf27']);
       $sStyleReadLab_tf27 = '';
       $sStyleReadInp_tf27 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf27']) && $this->nmgp_cmp_hidden['tf27'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf27" value="<?php echo $this->form_encode_input($tf27) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf27_line" id="hidden_field_data_tf27" style="<?php echo $sStyleHidden_tf27; ?>"> <span class="scFormLabelOddFormat css_tf27_label" style=""><span id="id_label_tf27"><?php echo $this->nm_new_label['tf27']; ?></span></span><br><input type="hidden" name="tf27" value="<?php echo $this->form_encode_input($tf27); ?>"><span id="id_ajax_label_tf27"><?php echo nl2br($tf27); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf28']))
    {
        $this->nm_new_label['tf28'] = "Móvil Extra";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf28 = $this->tf28;
   $sStyleHidden_tf28 = '';
   if (isset($this->nmgp_cmp_hidden['tf28']) && $this->nmgp_cmp_hidden['tf28'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf28']);
       $sStyleHidden_tf28 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf28 = 'display: none;';
   $sStyleReadInp_tf28 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf28']) && $this->nmgp_cmp_readonly['tf28'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf28']);
       $sStyleReadLab_tf28 = '';
       $sStyleReadInp_tf28 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf28']) && $this->nmgp_cmp_hidden['tf28'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf28" value="<?php echo $this->form_encode_input($tf28) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf28_line" id="hidden_field_data_tf28" style="<?php echo $sStyleHidden_tf28; ?>"> <span class="scFormLabelOddFormat css_tf28_label" style=""><span id="id_label_tf28"><?php echo $this->nm_new_label['tf28']; ?></span></span><br><input type="hidden" name="tf28" value="<?php echo $this->form_encode_input($tf28); ?>"><span id="id_ajax_label_tf28"><?php echo nl2br($tf28); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf29']))
    {
        $this->nm_new_label['tf29'] = "Móvil de Contacto ";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf29 = $this->tf29;
   $sStyleHidden_tf29 = '';
   if (isset($this->nmgp_cmp_hidden['tf29']) && $this->nmgp_cmp_hidden['tf29'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf29']);
       $sStyleHidden_tf29 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf29 = 'display: none;';
   $sStyleReadInp_tf29 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf29']) && $this->nmgp_cmp_readonly['tf29'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf29']);
       $sStyleReadLab_tf29 = '';
       $sStyleReadInp_tf29 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf29']) && $this->nmgp_cmp_hidden['tf29'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf29" value="<?php echo $this->form_encode_input($tf29) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf29_line" id="hidden_field_data_tf29" style="<?php echo $sStyleHidden_tf29; ?>"> <span class="scFormLabelOddFormat css_tf29_label" style=""><span id="id_label_tf29"><?php echo $this->nm_new_label['tf29']; ?></span></span><br><input type="hidden" name="tf29" value="<?php echo $this->form_encode_input($tf29); ?>"><span id="id_ajax_label_tf29"><?php echo nl2br($tf29); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_tf29_dumb = ('' == $sStyleHidden_tf29) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_tf29_dumb" style="<?php echo $sStyleHidden_tf29_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_3"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_3" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf3\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?>Titular N°3<?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nombreasociado3']))
    {
        $this->nm_new_label['nombreasociado3'] = "Asociado";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nombreasociado3 = $this->nombreasociado3;
   $sStyleHidden_nombreasociado3 = '';
   if (isset($this->nmgp_cmp_hidden['nombreasociado3']) && $this->nmgp_cmp_hidden['nombreasociado3'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nombreasociado3']);
       $sStyleHidden_nombreasociado3 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nombreasociado3 = 'display: none;';
   $sStyleReadInp_nombreasociado3 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nombreasociado3']) && $this->nmgp_cmp_readonly['nombreasociado3'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nombreasociado3']);
       $sStyleReadLab_nombreasociado3 = '';
       $sStyleReadInp_nombreasociado3 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nombreasociado3']) && $this->nmgp_cmp_hidden['nombreasociado3'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nombreasociado3" value="<?php echo $this->form_encode_input($nombreasociado3) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nombreasociado3_line" id="hidden_field_data_nombreasociado3" style="<?php echo $sStyleHidden_nombreasociado3; ?>"> <span class="scFormLabelOddFormat css_nombreasociado3_label" style=""><span id="id_label_nombreasociado3"><?php echo $this->nm_new_label['nombreasociado3']; ?></span></span><br><input type="hidden" name="nombreasociado3" value="<?php echo $this->form_encode_input($nombreasociado3); ?>"><span id="id_ajax_label_nombreasociado3"><?php echo nl2br($nombreasociado3); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tipodocumento3']))
    {
        $this->nm_new_label['tipodocumento3'] = "Tipo Documento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tipodocumento3 = $this->tipodocumento3;
   $sStyleHidden_tipodocumento3 = '';
   if (isset($this->nmgp_cmp_hidden['tipodocumento3']) && $this->nmgp_cmp_hidden['tipodocumento3'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tipodocumento3']);
       $sStyleHidden_tipodocumento3 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tipodocumento3 = 'display: none;';
   $sStyleReadInp_tipodocumento3 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tipodocumento3']) && $this->nmgp_cmp_readonly['tipodocumento3'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tipodocumento3']);
       $sStyleReadLab_tipodocumento3 = '';
       $sStyleReadInp_tipodocumento3 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tipodocumento3']) && $this->nmgp_cmp_hidden['tipodocumento3'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tipodocumento3" value="<?php echo $this->form_encode_input($tipodocumento3) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tipodocumento3_line" id="hidden_field_data_tipodocumento3" style="<?php echo $sStyleHidden_tipodocumento3; ?>"> <span class="scFormLabelOddFormat css_tipodocumento3_label" style=""><span id="id_label_tipodocumento3"><?php echo $this->nm_new_label['tipodocumento3']; ?></span></span><br><input type="hidden" name="tipodocumento3" value="<?php echo $this->form_encode_input($tipodocumento3); ?>"><span id="id_ajax_label_tipodocumento3"><?php echo nl2br($tipodocumento3); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['numerodocumento3']))
    {
        $this->nm_new_label['numerodocumento3'] = "Nro Documento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $numerodocumento3 = $this->numerodocumento3;
   $sStyleHidden_numerodocumento3 = '';
   if (isset($this->nmgp_cmp_hidden['numerodocumento3']) && $this->nmgp_cmp_hidden['numerodocumento3'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['numerodocumento3']);
       $sStyleHidden_numerodocumento3 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_numerodocumento3 = 'display: none;';
   $sStyleReadInp_numerodocumento3 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['numerodocumento3']) && $this->nmgp_cmp_readonly['numerodocumento3'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['numerodocumento3']);
       $sStyleReadLab_numerodocumento3 = '';
       $sStyleReadInp_numerodocumento3 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['numerodocumento3']) && $this->nmgp_cmp_hidden['numerodocumento3'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="numerodocumento3" value="<?php echo $this->form_encode_input($numerodocumento3) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_numerodocumento3_line" id="hidden_field_data_numerodocumento3" style="<?php echo $sStyleHidden_numerodocumento3; ?>"> <span class="scFormLabelOddFormat css_numerodocumento3_label" style=""><span id="id_label_numerodocumento3"><?php echo $this->nm_new_label['numerodocumento3']; ?></span></span><br><input type="hidden" name="numerodocumento3" value="<?php echo $this->form_encode_input($numerodocumento3); ?>"><span id="id_ajax_label_numerodocumento3"><?php echo nl2br($numerodocumento3); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ubicacion3']))
    {
        $this->nm_new_label['ubicacion3'] = "Ubicación";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ubicacion3 = $this->ubicacion3;
   $sStyleHidden_ubicacion3 = '';
   if (isset($this->nmgp_cmp_hidden['ubicacion3']) && $this->nmgp_cmp_hidden['ubicacion3'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ubicacion3']);
       $sStyleHidden_ubicacion3 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ubicacion3 = 'display: none;';
   $sStyleReadInp_ubicacion3 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ubicacion3']) && $this->nmgp_cmp_readonly['ubicacion3'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ubicacion3']);
       $sStyleReadLab_ubicacion3 = '';
       $sStyleReadInp_ubicacion3 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ubicacion3']) && $this->nmgp_cmp_hidden['ubicacion3'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ubicacion3" value="<?php echo $this->form_encode_input($ubicacion3) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ubicacion3_line" id="hidden_field_data_ubicacion3" style="<?php echo $sStyleHidden_ubicacion3; ?>"> <span class="scFormLabelOddFormat css_ubicacion3_label" style=""><span id="id_label_ubicacion3"><?php echo $this->nm_new_label['ubicacion3']; ?></span></span><br><input type="hidden" name="ubicacion3" value="<?php echo $this->form_encode_input($ubicacion3); ?>"><span id="id_ajax_label_ubicacion3"><?php echo nl2br($ubicacion3); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['correopersonal3']))
    {
        $this->nm_new_label['correopersonal3'] = "Correo Personal";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $correopersonal3 = $this->correopersonal3;
   $sStyleHidden_correopersonal3 = '';
   if (isset($this->nmgp_cmp_hidden['correopersonal3']) && $this->nmgp_cmp_hidden['correopersonal3'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['correopersonal3']);
       $sStyleHidden_correopersonal3 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_correopersonal3 = 'display: none;';
   $sStyleReadInp_correopersonal3 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['correopersonal3']) && $this->nmgp_cmp_readonly['correopersonal3'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['correopersonal3']);
       $sStyleReadLab_correopersonal3 = '';
       $sStyleReadInp_correopersonal3 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['correopersonal3']) && $this->nmgp_cmp_hidden['correopersonal3'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="correopersonal3" value="<?php echo $this->form_encode_input($correopersonal3) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_correopersonal3_line" id="hidden_field_data_correopersonal3" style="<?php echo $sStyleHidden_correopersonal3; ?>"> <span class="scFormLabelOddFormat css_correopersonal3_label" style=""><span id="id_label_correopersonal3"><?php echo $this->nm_new_label['correopersonal3']; ?></span></span><br><input type="hidden" name="correopersonal3" value="<?php echo $this->form_encode_input($correopersonal3); ?>"><span id="id_ajax_label_correopersonal3"><?php echo nl2br($correopersonal3); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['correolaboral3']))
    {
        $this->nm_new_label['correolaboral3'] = "Correo Laboral";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $correolaboral3 = $this->correolaboral3;
   $sStyleHidden_correolaboral3 = '';
   if (isset($this->nmgp_cmp_hidden['correolaboral3']) && $this->nmgp_cmp_hidden['correolaboral3'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['correolaboral3']);
       $sStyleHidden_correolaboral3 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_correolaboral3 = 'display: none;';
   $sStyleReadInp_correolaboral3 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['correolaboral3']) && $this->nmgp_cmp_readonly['correolaboral3'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['correolaboral3']);
       $sStyleReadLab_correolaboral3 = '';
       $sStyleReadInp_correolaboral3 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['correolaboral3']) && $this->nmgp_cmp_hidden['correolaboral3'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="correolaboral3" value="<?php echo $this->form_encode_input($correolaboral3) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_correolaboral3_line" id="hidden_field_data_correolaboral3" style="<?php echo $sStyleHidden_correolaboral3; ?>"> <span class="scFormLabelOddFormat css_correolaboral3_label" style=""><span id="id_label_correolaboral3"><?php echo $this->nm_new_label['correolaboral3']; ?></span></span><br><input type="hidden" name="correolaboral3" value="<?php echo $this->form_encode_input($correolaboral3); ?>"><span id="id_ajax_label_correolaboral3"><?php echo nl2br($correolaboral3); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf31']))
    {
        $this->nm_new_label['tf31'] = "Teléfono de Contacto";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf31 = $this->tf31;
   $sStyleHidden_tf31 = '';
   if (isset($this->nmgp_cmp_hidden['tf31']) && $this->nmgp_cmp_hidden['tf31'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf31']);
       $sStyleHidden_tf31 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf31 = 'display: none;';
   $sStyleReadInp_tf31 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf31']) && $this->nmgp_cmp_readonly['tf31'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf31']);
       $sStyleReadLab_tf31 = '';
       $sStyleReadInp_tf31 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf31']) && $this->nmgp_cmp_hidden['tf31'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf31" value="<?php echo $this->form_encode_input($tf31) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf31_line" id="hidden_field_data_tf31" style="<?php echo $sStyleHidden_tf31; ?>"> <span class="scFormLabelOddFormat css_tf31_label" style=""><span id="id_label_tf31"><?php echo $this->nm_new_label['tf31']; ?></span></span><br><input type="hidden" name="tf31" value="<?php echo $this->form_encode_input($tf31); ?>"><span id="id_ajax_label_tf31"><?php echo nl2br($tf31); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf32']))
    {
        $this->nm_new_label['tf32'] = "Teléfono Domicilio";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf32 = $this->tf32;
   $sStyleHidden_tf32 = '';
   if (isset($this->nmgp_cmp_hidden['tf32']) && $this->nmgp_cmp_hidden['tf32'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf32']);
       $sStyleHidden_tf32 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf32 = 'display: none;';
   $sStyleReadInp_tf32 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf32']) && $this->nmgp_cmp_readonly['tf32'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf32']);
       $sStyleReadLab_tf32 = '';
       $sStyleReadInp_tf32 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf32']) && $this->nmgp_cmp_hidden['tf32'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf32" value="<?php echo $this->form_encode_input($tf32) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf32_line" id="hidden_field_data_tf32" style="<?php echo $sStyleHidden_tf32; ?>"> <span class="scFormLabelOddFormat css_tf32_label" style=""><span id="id_label_tf32"><?php echo $this->nm_new_label['tf32']; ?></span></span><br><input type="hidden" name="tf32" value="<?php echo $this->form_encode_input($tf32); ?>"><span id="id_ajax_label_tf32"><?php echo nl2br($tf32); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf33']))
    {
        $this->nm_new_label['tf33'] = "Teléfono Personal";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf33 = $this->tf33;
   $sStyleHidden_tf33 = '';
   if (isset($this->nmgp_cmp_hidden['tf33']) && $this->nmgp_cmp_hidden['tf33'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf33']);
       $sStyleHidden_tf33 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf33 = 'display: none;';
   $sStyleReadInp_tf33 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf33']) && $this->nmgp_cmp_readonly['tf33'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf33']);
       $sStyleReadLab_tf33 = '';
       $sStyleReadInp_tf33 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf33']) && $this->nmgp_cmp_hidden['tf33'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf33" value="<?php echo $this->form_encode_input($tf33) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf33_line" id="hidden_field_data_tf33" style="<?php echo $sStyleHidden_tf33; ?>"> <span class="scFormLabelOddFormat css_tf33_label" style=""><span id="id_label_tf33"><?php echo $this->nm_new_label['tf33']; ?></span></span><br><input type="hidden" name="tf33" value="<?php echo $this->form_encode_input($tf33); ?>"><span id="id_ajax_label_tf33"><?php echo nl2br($tf33); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf34']))
    {
        $this->nm_new_label['tf34'] = "Teléfono Laboral";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf34 = $this->tf34;
   $sStyleHidden_tf34 = '';
   if (isset($this->nmgp_cmp_hidden['tf34']) && $this->nmgp_cmp_hidden['tf34'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf34']);
       $sStyleHidden_tf34 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf34 = 'display: none;';
   $sStyleReadInp_tf34 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf34']) && $this->nmgp_cmp_readonly['tf34'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf34']);
       $sStyleReadLab_tf34 = '';
       $sStyleReadInp_tf34 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf34']) && $this->nmgp_cmp_hidden['tf34'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf34" value="<?php echo $this->form_encode_input($tf34) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf34_line" id="hidden_field_data_tf34" style="<?php echo $sStyleHidden_tf34; ?>"> <span class="scFormLabelOddFormat css_tf34_label" style=""><span id="id_label_tf34"><?php echo $this->nm_new_label['tf34']; ?></span></span><br><input type="hidden" name="tf34" value="<?php echo $this->form_encode_input($tf34); ?>"><span id="id_ajax_label_tf34"><?php echo nl2br($tf34); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf35']))
    {
        $this->nm_new_label['tf35'] = "Teléfono Otros";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf35 = $this->tf35;
   $sStyleHidden_tf35 = '';
   if (isset($this->nmgp_cmp_hidden['tf35']) && $this->nmgp_cmp_hidden['tf35'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf35']);
       $sStyleHidden_tf35 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf35 = 'display: none;';
   $sStyleReadInp_tf35 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf35']) && $this->nmgp_cmp_readonly['tf35'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf35']);
       $sStyleReadLab_tf35 = '';
       $sStyleReadInp_tf35 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf35']) && $this->nmgp_cmp_hidden['tf35'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf35" value="<?php echo $this->form_encode_input($tf35) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf35_line" id="hidden_field_data_tf35" style="<?php echo $sStyleHidden_tf35; ?>"> <span class="scFormLabelOddFormat css_tf35_label" style=""><span id="id_label_tf35"><?php echo $this->nm_new_label['tf35']; ?></span></span><br><input type="hidden" name="tf35" value="<?php echo $this->form_encode_input($tf35); ?>"><span id="id_ajax_label_tf35"><?php echo nl2br($tf35); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf36']))
    {
        $this->nm_new_label['tf36'] = "Móvil";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf36 = $this->tf36;
   $sStyleHidden_tf36 = '';
   if (isset($this->nmgp_cmp_hidden['tf36']) && $this->nmgp_cmp_hidden['tf36'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf36']);
       $sStyleHidden_tf36 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf36 = 'display: none;';
   $sStyleReadInp_tf36 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf36']) && $this->nmgp_cmp_readonly['tf36'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf36']);
       $sStyleReadLab_tf36 = '';
       $sStyleReadInp_tf36 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf36']) && $this->nmgp_cmp_hidden['tf36'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf36" value="<?php echo $this->form_encode_input($tf36) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf36_line" id="hidden_field_data_tf36" style="<?php echo $sStyleHidden_tf36; ?>"> <span class="scFormLabelOddFormat css_tf36_label" style=""><span id="id_label_tf36"><?php echo $this->nm_new_label['tf36']; ?></span></span><br><input type="hidden" name="tf36" value="<?php echo $this->form_encode_input($tf36); ?>"><span id="id_ajax_label_tf36"><?php echo nl2br($tf36); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf37']))
    {
        $this->nm_new_label['tf37'] = "Móvil Personal";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf37 = $this->tf37;
   $sStyleHidden_tf37 = '';
   if (isset($this->nmgp_cmp_hidden['tf37']) && $this->nmgp_cmp_hidden['tf37'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf37']);
       $sStyleHidden_tf37 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf37 = 'display: none;';
   $sStyleReadInp_tf37 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf37']) && $this->nmgp_cmp_readonly['tf37'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf37']);
       $sStyleReadLab_tf37 = '';
       $sStyleReadInp_tf37 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf37']) && $this->nmgp_cmp_hidden['tf37'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf37" value="<?php echo $this->form_encode_input($tf37) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf37_line" id="hidden_field_data_tf37" style="<?php echo $sStyleHidden_tf37; ?>"> <span class="scFormLabelOddFormat css_tf37_label" style=""><span id="id_label_tf37"><?php echo $this->nm_new_label['tf37']; ?></span></span><br><input type="hidden" name="tf37" value="<?php echo $this->form_encode_input($tf37); ?>"><span id="id_ajax_label_tf37"><?php echo nl2br($tf37); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf38']))
    {
        $this->nm_new_label['tf38'] = "Móvil Extra";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf38 = $this->tf38;
   $sStyleHidden_tf38 = '';
   if (isset($this->nmgp_cmp_hidden['tf38']) && $this->nmgp_cmp_hidden['tf38'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf38']);
       $sStyleHidden_tf38 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf38 = 'display: none;';
   $sStyleReadInp_tf38 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf38']) && $this->nmgp_cmp_readonly['tf38'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf38']);
       $sStyleReadLab_tf38 = '';
       $sStyleReadInp_tf38 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf38']) && $this->nmgp_cmp_hidden['tf38'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf38" value="<?php echo $this->form_encode_input($tf38) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf38_line" id="hidden_field_data_tf38" style="<?php echo $sStyleHidden_tf38; ?>"> <span class="scFormLabelOddFormat css_tf38_label" style=""><span id="id_label_tf38"><?php echo $this->nm_new_label['tf38']; ?></span></span><br><input type="hidden" name="tf38" value="<?php echo $this->form_encode_input($tf38); ?>"><span id="id_ajax_label_tf38"><?php echo nl2br($tf38); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tf39']))
    {
        $this->nm_new_label['tf39'] = "Móvil Contacto";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tf39 = $this->tf39;
   $sStyleHidden_tf39 = '';
   if (isset($this->nmgp_cmp_hidden['tf39']) && $this->nmgp_cmp_hidden['tf39'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tf39']);
       $sStyleHidden_tf39 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tf39 = 'display: none;';
   $sStyleReadInp_tf39 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tf39']) && $this->nmgp_cmp_readonly['tf39'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tf39']);
       $sStyleReadLab_tf39 = '';
       $sStyleReadInp_tf39 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tf39']) && $this->nmgp_cmp_hidden['tf39'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tf39" value="<?php echo $this->form_encode_input($tf39) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tf39_line" id="hidden_field_data_tf39" style="<?php echo $sStyleHidden_tf39; ?>"> <span class="scFormLabelOddFormat css_tf39_label" style=""><span id="id_label_tf39"><?php echo $this->nm_new_label['tf39']; ?></span></span><br><input type="hidden" name="tf39" value="<?php echo $this->form_encode_input($tf39); ?>"><span id="id_ajax_label_tf39"><?php echo nl2br($tf39); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_tf39_dumb = ('' == $sStyleHidden_tf39) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_tf39_dumb" style="<?php echo $sStyleHidden_tf39_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_4"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_4"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_4" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf4\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?>Detalle de Llamada <?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cantidadintentos']))
    {
        $this->nm_new_label['cantidadintentos'] = "Nro de intentos";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cantidadintentos = $this->cantidadintentos;
   $sStyleHidden_cantidadintentos = '';
   if (isset($this->nmgp_cmp_hidden['cantidadintentos']) && $this->nmgp_cmp_hidden['cantidadintentos'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cantidadintentos']);
       $sStyleHidden_cantidadintentos = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cantidadintentos = 'display: none;';
   $sStyleReadInp_cantidadintentos = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cantidadintentos']) && $this->nmgp_cmp_readonly['cantidadintentos'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cantidadintentos']);
       $sStyleReadLab_cantidadintentos = '';
       $sStyleReadInp_cantidadintentos = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cantidadintentos']) && $this->nmgp_cmp_hidden['cantidadintentos'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cantidadintentos" value="<?php echo $this->form_encode_input($cantidadintentos) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cantidadintentos_line" id="hidden_field_data_cantidadintentos" style="<?php echo $sStyleHidden_cantidadintentos; ?>"> <span class="scFormLabelOddFormat css_cantidadintentos_label" style=""><span id="id_label_cantidadintentos"><?php echo $this->nm_new_label['cantidadintentos']; ?></span></span><br><input type="hidden" name="cantidadintentos" value="<?php echo $this->form_encode_input($cantidadintentos); ?>"><span id="id_ajax_label_cantidadintentos"><?php echo nl2br($cantidadintentos); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['telefono']))
    {
        $this->nm_new_label['telefono'] = "Teléfono *";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $telefono = $this->telefono;
   $sStyleHidden_telefono = '';
   if (isset($this->nmgp_cmp_hidden['telefono']) && $this->nmgp_cmp_hidden['telefono'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['telefono']);
       $sStyleHidden_telefono = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_telefono = 'display: none;';
   $sStyleReadInp_telefono = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['telefono']) && $this->nmgp_cmp_readonly['telefono'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['telefono']);
       $sStyleReadLab_telefono = '';
       $sStyleReadInp_telefono = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['telefono']) && $this->nmgp_cmp_hidden['telefono'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="telefono" value="<?php echo $this->form_encode_input($telefono) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_telefono_line" id="hidden_field_data_telefono" style="<?php echo $sStyleHidden_telefono; ?>"> <span class="scFormLabelOddFormat css_telefono_label" style=""><span id="id_label_telefono"><?php echo $this->nm_new_label['telefono']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["telefono"]) &&  $this->nmgp_cmp_readonly["telefono"] == "on") { 

 ?>
<input type="hidden" name="telefono" value="<?php echo $this->form_encode_input($telefono) . "\">" . $telefono . ""; ?>
<?php } else { ?>
<span id="id_read_on_telefono" class="sc-ui-readonly-telefono css_telefono_line" style="<?php echo $sStyleReadLab_telefono; ?>"><?php echo $this->form_format_readonly("telefono", $this->form_encode_input($this->telefono)); ?></span><span id="id_read_off_telefono" class="css_read_off_telefono<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_telefono; ?>">
 <input class="sc-js-input scFormObjectOdd css_telefono_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_telefono" type=text name="telefono" value="<?php echo $this->form_encode_input($telefono) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=12"; } ?> maxlength=12 alt="{datatype: 'text', maxLength: 12, allowedChars: '<?php echo $this->allowedCharsCharset("0123456789") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'Ingrese número', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['estado']))
    {
        $this->nm_new_label['estado'] = "Estado de Llamada *";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $estado = $this->estado;
   $sStyleHidden_estado = '';
   if (isset($this->nmgp_cmp_hidden['estado']) && $this->nmgp_cmp_hidden['estado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['estado']);
       $sStyleHidden_estado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_estado = 'display: none;';
   $sStyleReadInp_estado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['estado']) && $this->nmgp_cmp_readonly['estado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['estado']);
       $sStyleReadLab_estado = '';
       $sStyleReadInp_estado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['estado']) && $this->nmgp_cmp_hidden['estado'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="estado" value="<?php echo $this->form_encode_input($estado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_estado_line" id="hidden_field_data_estado" style="<?php echo $sStyleHidden_estado; ?>"> <span class="scFormLabelOddFormat css_estado_label" style=""><span id="id_label_estado"><?php echo $this->nm_new_label['estado']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["estado"]) &&  $this->nmgp_cmp_readonly["estado"] == "on") { 

 if ("1" == $this->estado) { $estado_look = "Exitosa";} 
 if ("0" == $this->estado) { $estado_look = "No exitosa";} 
?>
<input type="hidden" name="estado" value="<?php echo $this->form_encode_input($estado) . "\">" . $estado_look . ""; ?>
<?php } else { ?>

<?php

 if ("1" == $this->estado) { $estado_look = "Exitosa";} 
 if ("0" == $this->estado) { $estado_look = "No exitosa";} 
?>
<span id="id_read_on_estado"  class="css_estado_line" style="<?php echo $sStyleReadLab_estado; ?>"><?php echo $this->form_format_readonly("estado", $this->form_encode_input($estado_look)); ?></span><span id="id_read_off_estado" class="css_read_off_estado css_estado_line" style="<?php echo $sStyleReadInp_estado; ?>"><div id="idAjaxRadio_estado" style="display: inline-block"  class="css_estado_line">
<TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_estado_line"> <div class="sc radio">
<?php $tempOptionId = "id-opt-estado" . $sc_seq_vert . "-1"; ?>
    <input id="<?php echo $tempOptionId ?>"  class="sc-ui-radio-estado sc-ui-radio-estado" type=radio name="estado" value="1"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_estado'][] = '1'; ?>
<?php  if ("1" == $this->estado)  { echo " checked" ;} ?>  onClick="do_ajax_Formulario_Llamada_Bienvenida_mob_event_estado_onclick();" ><span></span>
<label for="<?php echo $tempOptionId ?>">Exitosa</label> </div>
</TD>
  <TD class="scFormDataFontOdd css_estado_line"> <div class="sc radio">
<?php $tempOptionId = "id-opt-estado" . $sc_seq_vert . "-2"; ?>
    <input id="<?php echo $tempOptionId ?>"  class="sc-ui-radio-estado sc-ui-radio-estado" type=radio name="estado" value="0"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_estado'][] = '0'; ?>
<?php  if ("0" == $this->estado)  { echo " checked" ;} ?>  onClick="do_ajax_Formulario_Llamada_Bienvenida_mob_event_estado_onclick();" ><span></span>
<label for="<?php echo $tempOptionId ?>">No exitosa</label> </div>
</TD>
</TR></TABLE>
</div>
</span><?php  }?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['indicadorexitoconforme']))
    {
        $this->nm_new_label['indicadorexitoconforme'] = "Asociado Conforme? *";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $indicadorexitoconforme = $this->indicadorexitoconforme;
   $sStyleHidden_indicadorexitoconforme = '';
   if (isset($this->nmgp_cmp_hidden['indicadorexitoconforme']) && $this->nmgp_cmp_hidden['indicadorexitoconforme'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['indicadorexitoconforme']);
       $sStyleHidden_indicadorexitoconforme = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_indicadorexitoconforme = 'display: none;';
   $sStyleReadInp_indicadorexitoconforme = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['indicadorexitoconforme']) && $this->nmgp_cmp_readonly['indicadorexitoconforme'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['indicadorexitoconforme']);
       $sStyleReadLab_indicadorexitoconforme = '';
       $sStyleReadInp_indicadorexitoconforme = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['indicadorexitoconforme']) && $this->nmgp_cmp_hidden['indicadorexitoconforme'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="indicadorexitoconforme" value="<?php echo $this->form_encode_input($indicadorexitoconforme) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_indicadorexitoconforme_line" id="hidden_field_data_indicadorexitoconforme" style="<?php echo $sStyleHidden_indicadorexitoconforme; ?>"> <span class="scFormLabelOddFormat css_indicadorexitoconforme_label" style=""><span id="id_label_indicadorexitoconforme"><?php echo $this->nm_new_label['indicadorexitoconforme']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["indicadorexitoconforme"]) &&  $this->nmgp_cmp_readonly["indicadorexitoconforme"] == "on") { 

 if ("1" == $this->indicadorexitoconforme) { $indicadorexitoconforme_look = "Conforme";} 
 if ("0" == $this->indicadorexitoconforme) { $indicadorexitoconforme_look = "No Conforme";} 
?>
<input type="hidden" name="indicadorexitoconforme" value="<?php echo $this->form_encode_input($indicadorexitoconforme) . "\">" . $indicadorexitoconforme_look . ""; ?>
<?php } else { ?>

<?php

 if ("1" == $this->indicadorexitoconforme) { $indicadorexitoconforme_look = "Conforme";} 
 if ("0" == $this->indicadorexitoconforme) { $indicadorexitoconforme_look = "No Conforme";} 
?>
<span id="id_read_on_indicadorexitoconforme"  class="css_indicadorexitoconforme_line" style="<?php echo $sStyleReadLab_indicadorexitoconforme; ?>"><?php echo $this->form_format_readonly("indicadorexitoconforme", $this->form_encode_input($indicadorexitoconforme_look)); ?></span><span id="id_read_off_indicadorexitoconforme" class="css_read_off_indicadorexitoconforme css_indicadorexitoconforme_line" style="<?php echo $sStyleReadInp_indicadorexitoconforme; ?>"><div id="idAjaxRadio_indicadorexitoconforme" style="display: inline-block"  class="css_indicadorexitoconforme_line">
<TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_indicadorexitoconforme_line"><?php $tempOptionId = "id-opt-indicadorexitoconforme" . $sc_seq_vert . "-1"; ?>
    <input id="<?php echo $tempOptionId ?>"  class="sc-ui-radio-indicadorexitoconforme sc-ui-radio-indicadorexitoconforme" type=radio name="indicadorexitoconforme" value="1"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_indicadorexitoconforme'][] = '1'; ?>
<?php  if ("1" == $this->indicadorexitoconforme)  { echo " checked" ;} ?>  onClick="do_ajax_Formulario_Llamada_Bienvenida_mob_event_indicadorexitoconforme_onclick();" ><label for="<?php echo $tempOptionId ?>">Conforme</label></TD>
  <TD class="scFormDataFontOdd css_indicadorexitoconforme_line"><?php $tempOptionId = "id-opt-indicadorexitoconforme" . $sc_seq_vert . "-2"; ?>
    <input id="<?php echo $tempOptionId ?>"  class="sc-ui-radio-indicadorexitoconforme sc-ui-radio-indicadorexitoconforme" type=radio name="indicadorexitoconforme" value="0"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_indicadorexitoconforme'][] = '0'; ?>
<?php  if ("0" == $this->indicadorexitoconforme)  { echo " checked" ;} ?>  onClick="do_ajax_Formulario_Llamada_Bienvenida_mob_event_indicadorexitoconforme_onclick();" ><label for="<?php echo $tempOptionId ?>">No Conforme</label></TD>
</TR></TABLE>
</div>
</span><?php  }?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['motivo']))
   {
       $this->nm_new_label['motivo'] = "Motivo *";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $motivo = $this->motivo;
   $sStyleHidden_motivo = '';
   if (isset($this->nmgp_cmp_hidden['motivo']) && $this->nmgp_cmp_hidden['motivo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['motivo']);
       $sStyleHidden_motivo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_motivo = 'display: none;';
   $sStyleReadInp_motivo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['motivo']) && $this->nmgp_cmp_readonly['motivo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['motivo']);
       $sStyleReadLab_motivo = '';
       $sStyleReadInp_motivo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['motivo']) && $this->nmgp_cmp_hidden['motivo'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="motivo" value="<?php echo $this->form_encode_input($this->motivo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_motivo_line" id="hidden_field_data_motivo" style="<?php echo $sStyleHidden_motivo; ?>"> <span class="scFormLabelOddFormat css_motivo_label" style=""><span id="id_label_motivo"><?php echo $this->nm_new_label['motivo']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["motivo"]) &&  $this->nmgp_cmp_readonly["motivo"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_motivo']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_motivo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_motivo']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_motivo'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_motivo']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_motivo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_motivo']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_motivo'] = array(); 
    }

   $old_value_fechaventa = $this->fechaventa;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fechaventa = $this->fechaventa;

   $nm_comando = "SELECT ListaID,  ListaNombre FROM dbo.GEN_Lista  where ListaTipo='LLamada no Exito' ORDER BY ListaID, ListaNombre";

   $this->fechaventa = $old_value_fechaventa;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_motivo'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $motivo_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->motivo_1))
          {
              foreach ($this->motivo_1 as $tmp_motivo)
              {
                  if (trim($tmp_motivo) === trim($cadaselect[1])) { $motivo_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->motivo) === trim($cadaselect[1])) { $motivo_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="motivo" value="<?php echo $this->form_encode_input($motivo) . "\">" . $motivo_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_motivo();
   $x = 0 ; 
   $motivo_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->motivo_1))
          {
              foreach ($this->motivo_1 as $tmp_motivo)
              {
                  if (trim($tmp_motivo) === trim($cadaselect[1])) { $motivo_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->motivo) === trim($cadaselect[1])) { $motivo_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($motivo_look))
          {
              $motivo_look = $this->motivo;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_motivo\" class=\"css_motivo_line\" style=\"" .  $sStyleReadLab_motivo . "\">" . $this->form_format_readonly("motivo", $this->form_encode_input($motivo_look)) . "</span><span id=\"id_read_off_motivo\" class=\"css_read_off_motivo" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_motivo . "\">";
   echo " <span id=\"idAjaxSelect_motivo\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_motivo_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_motivo\" name=\"motivo\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->motivo) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->motivo)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['motivoc']))
   {
       $this->nm_new_label['motivoc'] = "Motivo *";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $motivoc = $this->motivoc;
   $sStyleHidden_motivoc = '';
   if (isset($this->nmgp_cmp_hidden['motivoc']) && $this->nmgp_cmp_hidden['motivoc'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['motivoc']);
       $sStyleHidden_motivoc = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_motivoc = 'display: none;';
   $sStyleReadInp_motivoc = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['motivoc']) && $this->nmgp_cmp_readonly['motivoc'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['motivoc']);
       $sStyleReadLab_motivoc = '';
       $sStyleReadInp_motivoc = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['motivoc']) && $this->nmgp_cmp_hidden['motivoc'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="motivoc" value="<?php echo $this->form_encode_input($this->motivoc) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_motivoc_line" id="hidden_field_data_motivoc" style="<?php echo $sStyleHidden_motivoc; ?>"> <span class="scFormLabelOddFormat css_motivoc_label" style=""><span id="id_label_motivoc"><?php echo $this->nm_new_label['motivoc']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["motivoc"]) &&  $this->nmgp_cmp_readonly["motivoc"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_motivoc']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_motivoc'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_motivoc']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_motivoc'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_motivoc']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_motivoc'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_motivoc']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_motivoc'] = array(); 
    }

   $old_value_fechaventa = $this->fechaventa;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fechaventa = $this->fechaventa;

   $nm_comando = "SELECT ListaID,  ListaNombre FROM dbo.GEN_Lista  where ListaTipo='LLamada no Conforme' ORDER BY ListaID, ListaNombre";

   $this->fechaventa = $old_value_fechaventa;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['Lookup_motivoc'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $motivoc_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->motivoc_1))
          {
              foreach ($this->motivoc_1 as $tmp_motivoc)
              {
                  if (trim($tmp_motivoc) === trim($cadaselect[1])) { $motivoc_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->motivoc) === trim($cadaselect[1])) { $motivoc_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="motivoc" value="<?php echo $this->form_encode_input($motivoc) . "\">" . $motivoc_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_motivoc();
   $x = 0 ; 
   $motivoc_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->motivoc_1))
          {
              foreach ($this->motivoc_1 as $tmp_motivoc)
              {
                  if (trim($tmp_motivoc) === trim($cadaselect[1])) { $motivoc_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->motivoc) === trim($cadaselect[1])) { $motivoc_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($motivoc_look))
          {
              $motivoc_look = $this->motivoc;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_motivoc\" class=\"css_motivoc_line\" style=\"" .  $sStyleReadLab_motivoc . "\">" . $this->form_format_readonly("motivoc", $this->form_encode_input($motivoc_look)) . "</span><span id=\"id_read_off_motivoc\" class=\"css_read_off_motivoc" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_motivoc . "\">";
   echo " <span id=\"idAjaxSelect_motivoc\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_motivoc_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_motivoc\" name=\"motivoc\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->motivoc) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->motivoc)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['comentario']))
    {
        $this->nm_new_label['comentario'] = "Comentario *";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $comentario = $this->comentario;
   $sStyleHidden_comentario = '';
   if (isset($this->nmgp_cmp_hidden['comentario']) && $this->nmgp_cmp_hidden['comentario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['comentario']);
       $sStyleHidden_comentario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_comentario = 'display: none;';
   $sStyleReadInp_comentario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['comentario']) && $this->nmgp_cmp_readonly['comentario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['comentario']);
       $sStyleReadLab_comentario = '';
       $sStyleReadInp_comentario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['comentario']) && $this->nmgp_cmp_hidden['comentario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="comentario" value="<?php echo $this->form_encode_input($comentario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_comentario_line" id="hidden_field_data_comentario" style="<?php echo $sStyleHidden_comentario; ?>"> <span class="scFormLabelOddFormat css_comentario_label" style=""><span id="id_label_comentario"><?php echo $this->nm_new_label['comentario']; ?></span></span><br>
<?php
$comentario_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($comentario));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["comentario"]) &&  $this->nmgp_cmp_readonly["comentario"] == "on") { 

 ?>
<input type="hidden" name="comentario" value="<?php echo $this->form_encode_input($comentario) . "\">" . $comentario_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_comentario" class="sc-ui-readonly-comentario css_comentario_line" style="<?php echo $sStyleReadLab_comentario; ?>"><?php echo $this->form_format_readonly("comentario", $this->form_encode_input($comentario_val)); ?></span><span id="id_read_off_comentario" class="css_read_off_comentario<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_comentario; ?>">
 <textarea class="sc-js-input scFormObjectOdd css_comentario_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="white-space: pre-wrap;" name="comentario" id="id_sc_field_comentario" rows="2" cols="10"
 alt="{datatype: 'text', maxLength: 250, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'Comentario SAF', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >
<?php echo $comentario; ?>
</textarea>
</span><?php } ?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr> 
<tr><td>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
    $NM_btn = false;
?>
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
        $sCondStyle = ($this->nmgp_botoes['ok'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bok", "scBtnFn_sys_format_ok()", "scBtnFn_sys_format_ok()", "sub_form_b", "", "Guardar", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-2", "", "");?>
 
<?php
        $NM_btn = true;
?>
       
<?php
           if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['Volver'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "volver", "scBtnFn_Volver()", "scBtnFn_Volver()", "sc_Volver_bot", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?>
            </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0,1,2,3,4);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['masterValue']);
?>
}
<?php
    }
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("Formulario_Llamada_Bienvenida_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("Formulario_Llamada_Bienvenida_mob");
 parent.scAjaxDetailHeight("Formulario_Llamada_Bienvenida_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("Formulario_Llamada_Bienvenida_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("Formulario_Llamada_Bienvenida_mob", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
    }
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
    $isToast   = isset($this->NM_ajax_info['displayMsgToast']) && $this->NM_ajax_info['displayMsgToast'] ? 'true' : 'false';
    $toastType = $isToast && isset($this->NM_ajax_info['displayMsgToastType']) ? $this->NM_ajax_info['displayMsgToastType'] : '';
?>
<script type="text/javascript">
_scAjaxShowMessage({title: scMsgDefTitle, message: "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: <?php echo $isToast ?>, toastPos: "", type: "<?php echo $toastType ?>"});
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script type='text/javascript'>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<?php
if ($this->nmgp_form_empty) {
?>
<script type="text/javascript">
scAjax_displayEmptyForm();
</script>
<?php
}
?>
<script type="text/javascript">
	function scBtnFn_llamada() {
		if ($("#sc_llamada_top").length && $("#sc_llamada_top").is(":visible")) {
			sc_btn_llamada()
			 return;
		}
	}
	function scBtnFn_sys_format_ok() {
		if ($("#sub_form_b.sc-unique-btn-1").length && $("#sub_form_b.sc-unique-btn-1").is(":visible")) {
			nm_atualiza('alterar');
			 return;
		}
		if ($("#sub_form_b.sc-unique-btn-2").length && $("#sub_form_b.sc-unique-btn-2").is(":visible")) {
			nm_atualiza('alterar');
			 return;
		}
	}
	function scBtnFn_Volver() {
		if ($("#sc_Volver_bot").length && $("#sc_Volver_bot").is(":visible")) {
			sc_btn_Volver()
			 return;
		}
	}
	function scBtnFn_Whatsapp() {
		if ($("#sc_Whatsapp_bot").length && $("#sc_Whatsapp_bot").is(":visible")) {
			sc_btn_Whatsapp()
			 return;
		}
	}
	function scBtnFn_enviarCorreo() {
		if ($("#sc_enviarCorreo_bot").length && $("#sc_enviarCorreo_bot").is(":visible")) {
			sc_btn_enviarCorreo()
			 return;
		}
	}
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-out"><?php echo $this->Ini->Nm_lang['lang_version_web']; ?></span>
<?php
       }
?>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida_mob']['buttonStatus'] = $this->nmgp_botoes;
?>
<script type="text/javascript">
   function sc_session_redir(url_redir)
   {
       if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')
       {
           window.parent.sc_session_redir(url_redir);
       }
       else
       {
           if (window.opener && typeof window.opener.sc_session_redir === 'function')
           {
               window.close();
               window.opener.sc_session_redir(url_redir);
           }
           else
           {
               window.location = url_redir;
           }
       }
   }
</script>
</body> 
</html> 
