
 <form name="form_ajax_redir_1" method="post" style="display: none">
  <input type="hidden" name="nmgp_parms">
  <input type="hidden" name="nmgp_outra_jan">
  <input type="hidden" name="script_case_session" value="<?php echo session_id() ?>">
 </form>
 <form name="form_ajax_redir_2" method="post" style="display: none">
  <input type="hidden" name="nmgp_parms">
  <input type="hidden" name="nmgp_url_saida">
  <input type="hidden" name="script_case_init">
  <input type="hidden" name="script_case_session" value="<?php echo session_id() ?>">
 </form>

 <SCRIPT>
<?php
sajax_show_javascript();
?>

  function scCenterElement(oElem)
  {
    var $oElem    = $(oElem),
        $oWindow  = $(this),
        iElemTop  = Math.round(($oWindow.height() - $oElem.height()) / 2),
        iElemLeft = Math.round(($oWindow.width()  - $oElem.width())  / 2);

    $oElem.offset({top: iElemTop, left: iElemLeft});
  } // scCenterElement

  function scAjaxHideAutocomp(sFrameId)
  {
    if (document.getElementById("id_ac_frame_" + sFrameId))
    {
      document.getElementById("id_ac_frame_" + sFrameId).style.display = "none";
    }
  } // scAjaxHideAutocomp

  function scAjaxShowAutocomp(sFrameId)
  {
    if (document.getElementById("id_ac_frame_" + sFrameId))
    {
      document.getElementById("id_ac_frame_" + sFrameId).style.display = "";
      document.getElementById("id_ac_" + sFrameId).focus();
    }
  } // scAjaxShowAutocomp

  function scAjaxHideDebug()
  {
    if (document.getElementById("id_debug_window"))
    {
      document.getElementById("id_debug_window").style.display = "none";
      document.getElementById("id_debug_text").innerHTML = "";
    }
  } // scAjaxHideDebug

  function scAjaxShowDebug(oTemp)
  {
    if (!document.getElementById("id_debug_window"))
    {
      return;
    }
    if (oTemp && oTemp != null)
    {
        oResp = oTemp;
    }
    if (oResp["htmOutput"] && "" != oResp["htmOutput"])
    {
      document.getElementById("id_debug_window").style.display = "";
      document.getElementById("id_debug_text").innerHTML = scAjaxFormatDebug(oResp["htmOutput"]) + document.getElementById("id_debug_text").innerHTML;
      scCenterElement(document.getElementById("id_debug_window"));
    }
  } // scAjaxShowDebug

  function scAjaxFormatDebug(sDebugMsg)
  {
    return "<table class=\"scFormMessageTable\" style=\"margin: 1px; width: 100%\"><tr><td class=\"scFormMessageMessage\">" + scAjaxSpecCharParser(sDebugMsg) + "</td></tr></table>";
  } // scAjaxFormatDebug

  function scAjaxHideErrorDisplay_default(sErrorId, bForce)
  {
    if (document.getElementById("id_error_display_" + sErrorId + "_frame"))
    {
        document.getElementById("id_error_display_" + sErrorId + "_frame").style.display = "none";
        document.getElementById("id_error_display_" + sErrorId + "_text").innerHTML = "";
        if (null == bForce)
        {
            bForce = true;
        }
        if (bForce)
        {
            var $oField = $('#id_sc_field_' + sErrorId);
            if (0 < $oField.length)
            {
                scAjax_removeFieldErrorStyle($oField);
            }
        }
    }
    if (document.getElementById("id_error_display_fixed"))
    {
        document.getElementById("id_error_display_fixed").style.display = "none";
    }
  } // scAjaxHideErrorDisplay_default

  function scAjaxShowErrorDisplay_default(sErrorId, sErrorMsg)
  {
    if (oResp && oResp['redirExitInfo'])
    {
      sErrorMsg += "<br /><input type=\"button\" onClick=\"window.location='" + oResp['redirExitInfo']['action'] + "'\" value=\"Ok\">";
    }
    sErrorMsg = scAjaxErrorSql(sErrorMsg);
    if (document.getElementById("id_error_display_" + sErrorId + "_frame"))
    {
      document.getElementById("id_error_display_" + sErrorId + "_frame").style.display = "";
      document.getElementById("id_error_display_" + sErrorId + "_text").innerHTML = sErrorMsg;
      if ("table" == sErrorId)
      {
        scCenterElement(document.getElementById("id_error_display_" + sErrorId + "_frame"));
      }
      var $oField = $('#id_sc_field_' + sErrorId);
      if (0 < $oField.length)
      {
        scAjax_applyFieldErrorStyle($oField);
      }
    }
    if (ajax_error_list && ajax_error_list[sErrorId] && ajax_error_list[sErrorId]["timeout"] && 0 < ajax_error_list[sErrorId]["timeout"])
    {
      setTimeout("scAjaxHideErrorDisplay('" + sErrorId + "', false)", ajax_error_list[sErrorId]["timeout"] * 1000);
    }
  } // scAjaxShowErrorDisplay_default

  var iErrorSqlId = 1;

  function scAjaxErrorSql(sErrorMsg)
  {
    var iTmpPos = sErrorMsg.indexOf("{SC_DB_ERROR_INI}"),
        sTmpId;
    while (-1 < iTmpPos)
    {
      sTmpId    = "sc_id_error_sql_" + iErrorSqlId;
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "<br /><span style=\"text-decoration: underline\" onClick=\"$('#" + sTmpId + "').show(); scCenterElement(document.getElementById('" + sTmpId + "'))\">" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_MID}");
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "</span><table class=\"scFormErrorTable\" id=\"" + sTmpId + "\" style=\"display: none; position: absolute\"><tr><td>" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_CLS}");
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "<br /><br /><span onClick=\"$('#" + sTmpId + "').hide()\">" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_END}");
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "</span></td></tr></table>" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_INI}");
      iErrorSqlId++;
    }
    return sErrorMsg;
  } // scAjaxErrorSql

  function scAjaxHideMessage_default()
  {
    if (document.getElementById("id_message_display_frame"))
    {
      document.getElementById("id_message_display_frame").style.display = "none";
      document.getElementById("id_message_display_text").innerHTML = "";
    }
  } // scAjaxHideMessage

  function scAjaxShowMessage_default()
  {
    if (!oResp["msgDisplay"] || !oResp["msgDisplay"]["msgText"])
    {
      return;
    }
    _scAjaxShowMessage_default({title: scMsgDefTitle, message: oResp["msgDisplay"]["msgText"], isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: false, toastPos: ""});
  } // scAjaxShowMessage

  var scMsgDefClose = "";

  function _scAjaxShowMessage_default(params) {
	var sTitle = params["title"],
		sMessage = params["message"],
		bModal = params["isModal"],
		iTimeout = params["timeout"],
		bButton = params["showButton"],
		sButton = params["buttonLabel"],
		iTop = params["topPos"],
		iLeft = params["leftPos"],
		iWidth = params["width"],
		iHeight = params["height"],
		sRedir = params["redirUrl"],
		sTarget = params["redirTarget"],
		sParam = params["redirParam"],
		bClose = params["showClose"],
		bBodyIcon = params["showBodyIcon"],
		bToast = params["isToast"],
		sToastPos = params["toastPos"];
    if ("" == sMessage) {
      if (bModal) {
        scMsgDefClick = "close_modal";
      }
      else {
        scMsgDefClick = "close";
      }
      _scAjaxMessageBtnClick();
      document.getElementById("id_message_display_title").innerHTML = scMsgDefTitle;
      document.getElementById("id_message_display_text").innerHTML = "";
      document.getElementById("id_message_display_buttone").value = scMsgDefButton;
      document.getElementById("id_message_display_buttond").style.display = "none";
    }
    else {
      document.getElementById("id_message_display_title").innerHTML = scAjaxSpecCharParser(sTitle);
      document.getElementById("id_message_display_text").innerHTML = scAjaxSpecCharParser(sMessage);
      document.getElementById("id_message_display_buttone").value = sButton;
      document.getElementById("id_message_display_buttond").style.display = bButton ? "" : "none";
      document.getElementById("id_message_display_buttond").style.display = bButton ? "" : "none";
      document.getElementById("id_message_display_title_line").style.display = (bClose || "" != sTitle) ? "" : "none";
      document.getElementById("id_message_display_close_icon").style.display = bClose ? "" : "none";
      if (document.getElementById("id_message_display_body_icon")) {
        document.getElementById("id_message_display_body_icon").style.display = bBodyIcon ? "" : "none";
      }
      $("#id_message_display_content").css('width', (0 < iWidth ? iWidth + 'px' : ''));
      $("#id_message_display_content").css('height', (0 < iHeight ? iHeight + 'px' : ''));
      if (bModal) {
        iWidth = iWidth || 250;
        iHeight = iHeight || 200;
        scMsgDefClose = "close_modal";
        tb_show('', '#TB_inline?height=' + (iHeight + 6) + '&width=' + (iWidth + 4) + '&inlineId=id_message_display_frame&modal=true', '');
        if (bButton) {
          if ("" != sRedir && "" != sTarget) {
            scMsgDefClick = "redir2_modal";
            document.form_ajax_redir_2.action = sRedir;
            document.form_ajax_redir_2.target = sTarget;
            document.form_ajax_redir_2.nmgp_parms.value = sParam;
            document.form_ajax_redir_2.script_case_init.value = scMsgDefScInit;
          }
          else if ("" != sRedir && "" == sTarget) {
            scMsgDefClick = "redir1";
            document.form_ajax_redir_1.action = sRedir;
            document.form_ajax_redir_1.nmgp_parms.value = sParam;
          }
          else {
            scMsgDefClick = "close_modal";
          }
        }
        else if (null != iTimeout && 0 < iTimeout) {
          scMsgDefClick = "close_modal";
          setTimeout("_scAjaxMessageBtnClick()", iTimeout * 1000);
        }
      }
      else
      {
        scMsgDefClose = "close";
        $("#id_message_display_frame").css('top', (0 < iTop ? iTop + 'px' : ''));
        $("#id_message_display_frame").css('left', (0 < iLeft ? iLeft + 'px' : ''));
        document.getElementById("id_message_display_frame").style.display = "";
        if (0 == iTop && 0 == iLeft) {
          scCenterElement(document.getElementById("id_message_display_frame"));
        }
        if (bButton) {
          if ("" != sRedir && "" != sTarget) {
            scMsgDefClick = "redir2";
            document.form_ajax_redir_2.action = sRedir;
            document.form_ajax_redir_2.target = sTarget;
            document.form_ajax_redir_2.nmgp_parms.value = sParam;
            document.form_ajax_redir_2.script_case_init.value = scMsgDefScInit;
          }
          else if ("" != sRedir && "" == sTarget) {
            scMsgDefClick = "redir1";
            document.form_ajax_redir_1.action = sRedir;
            document.form_ajax_redir_1.nmgp_parms.value = sParam;
          }
          else {
            scMsgDefClick = "close";
          }
        }
        else if (null != iTimeout && 0 < iTimeout) {
          scMsgDefClick = "close";
          setTimeout("_scAjaxMessageBtnClick()", iTimeout * 1000);
        }
      }
    }
  } // _scAjaxShowMessage_default

  function _scAjaxMessageBtnClose() {
    switch (scMsgDefClose) {
      case "close":
        document.getElementById("id_message_display_frame").style.display = "none";
        break;
      case "close_modal":
        tb_remove();
        break;
    }
  } // _scAjaxMessageBtnClick

  function _scAjaxMessageBtnClick() {
    switch (scMsgDefClick) {
      case "close":
        document.getElementById("id_message_display_frame").style.display = "none";
        break;
      case "close_modal":
        tb_remove();
        break;
      case "dismiss":
        scAjaxHideMessage();
        break;
      case "redir1":
        document.form_ajax_redir_1.submit();
        break;
      case "redir2":
        document.form_ajax_redir_2.submit();
        document.getElementById("id_message_display_frame").style.display = "none";
        break;
      case "redir2_modal":
        document.form_ajax_redir_2.submit();
        tb_remove();
        break;
    }
  } // _scAjaxMessageBtnClick

  function scAjaxHasError()
  {
    if (!oResp["result"])
    {
      return false;
    }
    return "ERROR" == oResp["result"];
  } // scAjaxHasError

  function scAjaxIsOk()
  {
    if (!oResp["result"])
    {
      return false;
    }
    return "OK" == oResp["result"] || "SET" == oResp["result"];
  } // scAjaxIsOk

  function scAjaxIsSet()
  {
    if (!oResp["result"])
    {
      return false;
    }
    return "SET" == oResp["result"];
  } // scAjaxIsSet

  function scAjaxCalendarReload()
  {
    if (oResp["calendarReload"] && "OK" == oResp["calendarReload"])
    {
      self.parent.calendar_reload();
      self.parent.tb_remove();
    }
  } // scCalendarReload

  function scAjaxUpdateErrors(sType)
  {
    ajax_error_geral = "";
    oFieldErrors     = {};
    if (oResp["errList"])
    {
      for (iFieldErrors = 0; iFieldErrors < oResp["errList"].length; iFieldErrors++)
      {
        sTestField = oResp["errList"][iFieldErrors]["fldName"];
        if ("geral_Formulario_Llamada_Bienvenida" == sTestField)
        {
          if (ajax_error_geral != '') { ajax_error_geral += '<br>';}
          ajax_error_geral += scAjaxSpecCharParser(oResp["errList"][iFieldErrors]["msgText"]);
        }
        else
        {
          if (scFocusFirstErrorField && '' == scFocusFirstErrorName)
          {
            scFocusFirstErrorName = sTestField;
          }
          if (oResp["errList"][iFieldErrors]["numLinha"])
          {
            sTestField += oResp["errList"][iFieldErrors]["numLinha"];
          }
          if (!oFieldErrors[sTestField])
          {
            oFieldErrors[sTestField] = new Array();
          }
          oFieldErrors[sTestField][oFieldErrors[sTestField].length] = scAjaxSpecCharParser(oResp["errList"][iFieldErrors]["msgText"]);
        }
      }
    }
    for (iUpdateErrors = 0; iUpdateErrors < ajax_field_list.length; iUpdateErrors++)
    {
      sTestField = ajax_field_list[iUpdateErrors];
      if (oFieldErrors[sTestField])
      {
        ajax_error_list[sTestField][sType] = oFieldErrors[sTestField];
      }
    }
  } // scAjaxUpdateErrors

  function scAjaxUpdateFieldErrors(sField, sType)
  {
    aFieldErrors = new Array();
    if (oResp["errList"])
    {
      iErrorPos  = 0;
      for (iFieldErrors = 0; iFieldErrors < oResp["errList"].length; iFieldErrors++)
      {
        sTestField = oResp["errList"][iFieldErrors]["fldName"];
        if (oResp["errList"][iFieldErrors]["numLinha"])
        {
          sTestField += oResp["errList"][iFieldErrors]["numLinha"];
        }
        if (sField == sTestField)
        {
          aFieldErrors[iErrorPos] = scAjaxSpecCharParser(oResp["errList"][iFieldErrors]["msgText"]);
          iErrorPos++;
        }
      }
    }
        if (ajax_error_list[sField])
        {
        ajax_error_list[sField][sType] = aFieldErrors;
        }
  } // scAjaxUpdateFieldErrors

  function scAjaxListErrors(bLabel)
  {
    bFirst        = false;
    sAppErrorText = "";
    if ("" != ajax_error_geral)
    {
      bFirst         = true;
      sAppErrorText += ajax_error_geral;
    }
    for (iFieldList = 0; iFieldList < ajax_field_list.length; iFieldList++)
    {
      sFieldError = scAjaxListFieldErrors(ajax_field_list[iFieldList], bLabel);
      if ("" != sFieldError)
      {
        if (bFirst)
        {
          bFirst         = false
          sAppErrorText += "<hr size=\"1\" width=\"80%\" />";
        }
        sAppErrorText += sFieldError;
      }
    }
    return sAppErrorText;
  } // scAjaxListErrors

  function scAjaxListFieldErrors(sField, bLabel)
  {
    sErrorText = "";
    for (iErrorType = 0; iErrorType < ajax_error_type.length; iErrorType++)
    {
      if (ajax_error_list[sField])
      {
        for (iListErrors = 0; iListErrors < ajax_error_list[sField][ajax_error_type[iErrorType]].length; iListErrors++)
        {
          if (bLabel)
          {
            sErrorText += ajax_error_list[sField]["label"] + ": ";
          }
          sErrorText += ajax_error_list[sField][ajax_error_type[iErrorType]][iListErrors] + "<br />";
        }
      }
    }
    return sErrorText;
  } // scAjaxListFieldErrors

	function scAjaxClearErrors() {
		var fieldName;

		for (fieldName in ajax_error_list) {
            if (null != ajax_error_list[fieldName]) {
                ajax_error_list[fieldName]["valid"] = new Array();
                ajax_error_list[fieldName]["onblur"] = new Array();
                ajax_error_list[fieldName]["onchange"] = new Array();
                ajax_error_list[fieldName]["onclick"] = new Array();
                ajax_error_list[fieldName]["onfocus"] = new Array();
            }
		}
	} // scAjaxClearErrors

  function scAjaxSetVariables()
  {
    if (!oResp["varList"])
    {
      return true;
    }
    for (var iVarFields = 0; iVarFields < oResp["varList"].length; iVarFields++)
    {
      var sVarName  = oResp["varList"][iVarFields]["index"];
      var sVarValue = oResp["varList"][iVarFields]["value"];
	  eval(sVarName + " = \"" + sVarValue + "\";");
	}
  } // scAjaxSetVariables

  function scAjaxSetFields()
  {
    if (!oResp["fldList"])
    {
      return true;
    }
    for (iSetFields = 0; iSetFields < oResp["fldList"].length; iSetFields++)
    {
      var sFieldName = oResp["fldList"][iSetFields]["fldName"];
      var sFieldType = oResp["fldList"][iSetFields]["fldType"];

      if ("selectdd" == sFieldType)
      {
        var bSelectDD = true;
        sFieldType = "select";
      }
      else
      {
        var bSelectDD = false;
      }
      if ("select2_ac" == sFieldType)
      {
        var bSelect2AC = true;
        sFieldType = "select";
      }
      else
      {
        var bSelect2AC = false;
      }
      if (oResp["fldList"][iSetFields]["valList"])
      {
        var oFieldValues = oResp["fldList"][iSetFields]["valList"];
        if (0 == oFieldValues.length)
        {
          oFieldValues = null;
        }
      }
      else
      {
        var oFieldValues = null;
      }
      if (oResp["fldList"][iSetFields]["optList"])
      {
        var oFieldOptions = oResp["fldList"][iSetFields]["optList"];
      }
      else
      {
        var oFieldOptions = null;
      }
/*
      if ("_autocomp" == sFieldName.substr(sFieldName.length - 9) &&
          iSetFields > 0 &&
          sFieldName.substr(0, sFieldName.length - 9) == oResp["fldList"][iSetFields - 1]["fldName"] &&
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)) &&
          oFieldValues[0]['value'])
      {
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)).innerHTML = oFieldValues[0]['value'];
      }
*/

      if ("corhtml" == sFieldType)
      {
        sFieldType = 'text';

        /*sCor = (oFieldValues[0]['value']) ? oFieldValues[0]['value'] : "";
        setaCorPaleta(sFieldName, sCor);*/
      }

      if ("_autocomp" == sFieldName.substr(sFieldName.length - 9) &&
          iSetFields > 0 &&
          sFieldName.substr(0, sFieldName.length - 9) == oResp["fldList"][iSetFields - 1]["fldName"] &&
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)))
      {
          sLabel_auto_Comp = (oFieldValues[0]['value']) ? oFieldValues[0]['value'] : "";
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)).innerHTML = sLabel_auto_Comp;
      }


      if (oResp["fldList"][iSetFields]["colNum"])
      {
        var iColNum = oResp["fldList"][iSetFields]["colNum"];
      }
      else
      {
        var iColNum = 1;
      }
      if (oResp["fldList"][iSetFields]["row"])
      {
        var iRow = oResp["fldList"][iSetFields]["row"];
		var thisRow = oResp["fldList"][iSetFields]["row"];
      }
      else
      {
        var iRow = 1;
		var thisRow = "";
      }
      if (oResp["fldList"][iSetFields]["htmComp"])
      {
        var sHtmComp = oResp["fldList"][iSetFields]["htmComp"];
        sHtmComp     = sHtmComp.replace(/__AD__/gi, '"');
        sHtmComp     = sHtmComp.replace(/__AS__/gi, "'");
      }
      else
      {
        var sHtmComp = null;
      }
      if (oResp["fldList"][iSetFields]["imgFile"])
      {
        var sImgFile = oResp["fldList"][iSetFields]["imgFile"];
      }
      else
      {
        var sImgFile = "";
      }
      if (oResp["fldList"][iSetFields]["imgOrig"])
      {
        var sImgOrig = oResp["fldList"][iSetFields]["imgOrig"];
      }
      else
      {
        var sImgOrig = "";
      }
      if (oResp["fldList"][iSetFields]["keepImg"])
      {
        var sKeepImg = oResp["fldList"][iSetFields]["keepImg"];
      }
      else
      {
        var sKeepImg = "N";
      }
      if (oResp["fldList"][iSetFields]["hideName"])
      {
        var sHideName = oResp["fldList"][iSetFields]["hideName"];
      }
      else
      {
        var sHideName = "N";
      }
      if (oResp["fldList"][iSetFields]["imgLink"])
      {
        var sImgLink = oResp["fldList"][iSetFields]["imgLink"];
      }
      else
      {
        var sImgLink = null;
      }
      if (oResp["fldList"][iSetFields]["docLink"])
      {
        var sDocLink = oResp["fldList"][iSetFields]["docLink"];
      }
      else
      {
        var sDocLink = "";
      }
      if (oResp["fldList"][iSetFields]["docIcon"])
      {
        var sDocIcon = oResp["fldList"][iSetFields]["docIcon"];
      }
      else
      {
        var sDocIcon = "";
      }

      if (oResp["fldList"][iSetFields]["docReadonly"])
      {
        var sDocReadonly = oResp["fldList"][iSetFields]["docReadonly"];
      }
      else
      {
        var sDocReadonly = "";
      }

      if (oResp["fldList"][iSetFields]["optComp"])
      {
        var sOptComp = oResp["fldList"][iSetFields]["optComp"];
      }
      else
      {
        var sOptComp = "";
      }
      if (oResp["fldList"][iSetFields]["optClass"])
      {
        var sOptClass = oResp["fldList"][iSetFields]["optClass"];
      }
      else
      {
        var sOptClass = "";
      }
      if (oResp["fldList"][iSetFields]["optMulti"])
      {
        var sOptMulti = oResp["fldList"][iSetFields]["optMulti"];
      }
      else
      {
        var sOptMulti = "";
      }
      if (oResp["fldList"][iSetFields]["imgHtml"])
      {
        var sImgHtml = oResp["fldList"][iSetFields]["imgHtml"];
      }
      else
      {
        var sImgHtml = "";
      }
      if (oResp["fldList"][iSetFields]["mulHtml"])
      {
        var sMULHtml = oResp["fldList"][iSetFields]["mulHtml"];
      }
      else
      {
        var sMULHtml = "";
      }
      if (oResp["fldList"][iSetFields]["updInnerHtml"])
      {
        var sInnerHtml = scAjaxSpecCharParser(oResp["fldList"][iSetFields]["updInnerHtml"]);
      }
      else
      {
        var sInnerHtml = null;
      }
      if (oResp["fldList"][iSetFields]["lookupCons"])
      {
        var sLookupCons = scAjaxSpecCharParser(oResp["fldList"][iSetFields]["lookupCons"]);
      }
      else
      {
        var sLookupCons = "";
      }
      if (oResp["clearUpload"])
      {
        var sClearUpload = scAjaxSpecCharParser(oResp["clearUpload"]);
      }
      else
      {
        var sClearUpload = "N";
      }
      if (oResp["eventField"])
      {
        var sEventField = scAjaxSpecCharParser(oResp["eventField"]);
      }
      else
      {
        var sEventField = "__SC_NO_FIELD";
      }
      if (oResp["fldList"][iSetFields]["switch"])
      {
        var bSwitch = true == oResp["fldList"][iSetFields]["switch"];
      }
      else
      {
        var bSwitch = false;
      }
      if ("checkbox" == sFieldType)
      {
        scAjaxSetFieldCheckbox(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sInnerHtml, sOptComp, sOptClass, sOptMulti, bSwitch, sEventField);
      }
      else if ("duplosel" == sFieldType)
      {
        scAjaxSetFieldDuplosel(sFieldName, oFieldValues, oFieldOptions);
      }
      else if ("imagem" == sFieldType)
      {
        scAjaxSetFieldImage(sFieldName, oFieldValues, sImgFile, sImgOrig, sImgLink, sKeepImg, sHideName);
      }
      else if ("documento" == sFieldType)
      {
        scAjaxSetFieldDocument(sFieldName, oFieldValues, sDocLink, sDocIcon, sClearUpload, sDocReadonly);
      }
      else if ("label" == sFieldType)
      {
        scAjaxSetFieldLabel(sFieldName, oFieldValues, oFieldOptions, sLookupCons);
      }
      else if ("radio" == sFieldType)
      {
        scAjaxSetFieldRadio(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, bSwitch, sEventField);
      }
      else if ("select" == sFieldType)
      {
        scAjaxSetFieldSelect(sFieldName, oFieldValues, oFieldOptions, bSelectDD, bSelect2AC, iRow, sEventField, thisRow);
      }
      else if ("text" == sFieldType)
      {
        scAjaxSetFieldText(sFieldName, oFieldValues, sLookupCons, thisRow, sEventField);
      }
      else if ("color_palette" == sFieldType)
      {
        scAjaxSetFieldColorPalette(sFieldName, oFieldValues);
      }
      else if ("editor_html" == sFieldType)
      {
        scAjaxSetFieldEditorHtml(sFieldName, oFieldValues);
      }
      else if ("imagehtml" == sFieldType)
      {
        scAjaxSetFieldImageHtml(sFieldName, oFieldValues, sImgHtml);
      }
      else if ("innerhtml" == sFieldType)
      {
        scAjaxSetFieldInnerHtml(sFieldName, oFieldValues);
      }
      else if ("multi_upload" == sFieldType)
      {
        scAjaxSetFieldMultiUpload(sFieldName, sMULHtml);
      }
      else if ("recur_info" == sFieldType)
      {
        scAjaxSetFieldRecurInfo(sFieldName, sMULHtml);
      }
      else if ("signature" == sFieldType)
      {
        scAjaxSetFieldSignature(sFieldName, oFieldValues);
      }
      else if ("rating" == sFieldType)
      {
        scAjaxSetFieldRating(sFieldName, oFieldValues, thisRow);
      }
      scAjaxUpdateHeaderFooter(sFieldName, oFieldValues);
    }
  } // scAjaxSetFields

  function scAjaxUpdateHeaderFooter(sFieldName, oFieldValues)
  {
    if (self.updateHeaderFooter)
    {
      if (null == oFieldValues)
      {
        sNewValue = '';
      }
      else if (oFieldValues[0]["label"])
      {
        sNewValue = oFieldValues[0]["label"];
      }
      else
      {
        sNewValue = oFieldValues[0]["value"];
      }
      updateHeaderFooter(sFieldName, scAjaxSpecCharParser(sNewValue));
    }
  } // scAjaxUpdateHeaderFooter

  function scAjaxSetFieldText(sFieldName, oFieldValues, sLookupCons, thisRow, sEventField)
  {
    if (document.F1.elements[sFieldName])
    {
      var jqField = $("#id_sc_field_" + sFieldName),
          Temp_text = scAjaxReturnBreakLine(scAjaxSpecCharParser(scAjaxProtectBreakLine(oFieldValues[0]['value'])));
      if (jqField.length)
      {
        jqField.val(Temp_text);
        if (sEventField != sFieldName && sEventField != "__SC_NO_FIELD" && sEventField != "")
        {
          //jqField.trigger("change");
        }
      }
      else
      {
        eval("document.F1." + sFieldName + ".value = Temp_text");
      }
      if (scEventControl_data[sFieldName]) {
        scEventControl_data[sFieldName]["calculated"] = Temp_text;
      }
    }
    if (document.getElementById("id_lookup_" + sFieldName))
    {
      document.getElementById("id_lookup_" + sFieldName).innerHTML = sLookupCons;
    }
    if (oFieldValues[0]['label'])
    {
      scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues);
    }
    else
    {
      oFieldValues[0]['value'] = scAjaxBreakLine(oFieldValues[0]['value']);
      scAjaxSetReadonlyValue(sFieldName, oFieldValues[0]['value']);
    }
	scAjaxSetSliderValue(sFieldName, thisRow);
  } // scAjaxSetFieldText

  function scAjaxSetSliderValue(fieldName, thisRow)
  {
	  var sliderObject = $("#sc-ui-slide-" + fieldName);
	  if (!sliderObject.length) {
		  return;
	  }
	  scJQSlideValue(fieldName, thisRow);
  } // scAjaxSetSliderValue

  function scAjaxSetFieldColorPalette(sFieldName, oFieldValues)
  {
    if (document.F1.elements[sFieldName])
    {
        var Temp_text = scAjaxReturnBreakLine(scAjaxSpecCharParser(scAjaxProtectBreakLine(oFieldValues[0]['value'])));
        eval ("document.F1." + sFieldName + ".value = Temp_text");
    }
    if (oFieldValues[0]['label'])
    {
      scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues);
    }
    else
    {
      oFieldValues[0]['value'] = scAjaxBreakLine(oFieldValues[0]['value']);
	  setaCorPaleta(sFieldName, oFieldValues[0]['value']);
      scAjaxSetReadonlyValue(sFieldName, oFieldValues[0]['value']);
    }
  } // scAjaxSetFieldColorPalette

  function scAjaxSetFieldSelect(sFieldName, oFieldValues, oFieldOptions, bSelectDD, bSelect2AC, iRow, sEventField, thisRow)
  {
    sFieldNameHtml = sFieldName;
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    if (bSelectDD)
    {
        $("#id_sc_field_" + sFieldName).dropdownchecklist("destroy");
    }
    if (!document.F1.elements[sFieldName] && document.F1.elements[sFieldName + "[]"])
    {
      sFieldNameHtml += "[]";
    }
    if ("hidden" == document.F1.elements[sFieldNameHtml].type)
    {
      scAjaxSetFieldText(sFieldNameHtml, oFieldValues, "", "", sEventField);
      return;
    }

    if (null != oFieldOptions)
    {
      $("#id_sc_field_" + sFieldName).children().remove()
      if ("<select" != oFieldOptions.substr(0, 7))
      {
        var $oField = $("#id_sc_field_" + sFieldName);
        if (0 < $oField.length)
        {
          $oField.html(oFieldOptions);
        }
        else
        {
          document.getElementById("idAjaxSelect_" + sFieldName).innerHTML = oFieldOptions;
        }
      }
      else
      {
        document.getElementById("idAjaxSelect_" + sFieldName).innerHTML = oFieldOptions;
      }
    }
    var aValues = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        aValues[iFieldSelect] = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
      }
    }
    var oFormField = $("#id_sc_field_" + sFieldName);
    for (iFieldSelect = 0; iFieldSelect < oFormField[0].length; iFieldSelect++)
    {
      if (scAjaxInArray(oFormField[0].options[iFieldSelect].value, aValues))
      {
        oFormField[0].options[iFieldSelect].selected = true;
      }
      else
      {
        oFormField[0].options[iFieldSelect].selected = false;
      }
    }
	scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
    if (bSelectDD)
    {
        scJQDDCheckBoxAdd(thisRow, true);
    }
	if (bSelect2AC)
	{
		var newOption = new Option(oFieldValues[0]["label"], oFieldValues[0]["value"], true, true);
		$("#id_ac_" + sFieldName).append(newOption);
		$("#id_sc_field_" + sFieldName).val(oFieldValues[0]["value"]);
	}
	else if (oFormField.hasClass("select2-hidden-accessible"))
	{
        $("#id_sc_field_" + sFieldName).select2("destroy");
		var select2Field = sFieldName;
		if ("" != thisRow) {
			select2Field = select2Field.substr(0, select2Field.length - thisRow.toString().length);
		}
        scJQSelect2Add(thisRow, select2Field);
	}
  } // scAjaxSetFieldSelect

  function scAjaxSetFieldDuplosel(sFieldName, oFieldValues, oFieldOptions)
  {
    var sFieldNameOrig = sFieldName + "_orig";
    var sFieldNameDest = sFieldName + "_dest";
    var oFormFieldOrig = document.F1.elements[sFieldNameOrig];
    var oFormFieldDest = document.F1.elements[sFieldNameDest];

    if (null != oFieldOptions)
    {
      scAjaxClearSelect(sFieldNameOrig);
      for (iFieldSelect = 0; iFieldSelect < oFieldOptions.length; iFieldSelect++)
      {
        oFormFieldOrig.options[iFieldSelect] = new Option(scAjaxSpecCharParser(oFieldOptions[iFieldSelect]["label"]), scAjaxSpecCharParser(oFieldOptions[iFieldSelect]["value"]));
      }
    }
    while (oFormFieldDest.length > 0)
    {
      oFormFieldDest.options[0] = null;
    }
    var aValues = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        sNewOptionLabel = oFieldValues[iFieldSelect]["label"] ? scAjaxSpecCharParser(oFieldValues[iFieldSelect]["label"]) : scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
        sNewOptionValue = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
        if (sNewOptionValue.substr(0, 8) == "@NMorder")
        {
           sNewOptionValue                      = sNewOptionValue.substr(8);
           oFormFieldDest.options[iFieldSelect] = new Option(scAjaxSpecCharParser(sNewOptionLabel), sNewOptionValue);
           sNewOptionValue                      = sNewOptionValue.substr(1);
           aValues[iFieldSelect]                = sNewOptionValue;
        }
        else
        {
           aValues[iFieldSelect]                = sNewOptionValue;
           oFormFieldDest.options[iFieldSelect] = new Option(scAjaxSpecCharParser(sNewOptionLabel), sNewOptionValue);
        }
      }
    }
    for (iFieldSelect = 0; iFieldSelect < oFormFieldOrig.length; iFieldSelect++)
    {
      oFormFieldOrig.options[iFieldSelect].selected = false;
      if (scAjaxInArray(oFormFieldOrig.options[iFieldSelect].value, aValues))
      {
        oFormFieldOrig.options[iFieldSelect].disabled    = true;
        oFormFieldOrig.options[iFieldSelect].style.color = "#A0A0A0";
      }
      else
      {
        oFormFieldOrig.options[iFieldSelect].disabled = false;
      }
    }
    scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
  } // scAjaxSetFieldDuplosel

  function scAjaxSetFieldCheckbox(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sInnerHtml, sOptComp, sOptClass, sOptMulti, bSwitch, sEventField)
  {
	if (null == bSwitch)
	{
	  bSwitch = false;
	}
    if (document.getElementById("idAjaxCheckbox_" + sFieldName) && null != sInnerHtml)
    {
      document.getElementById("idAjaxCheckbox_" + sFieldName).innerHTML = sInnerHtml;
      return;
    }
    if (null != oFieldOptions)
    {
        scAjaxClearCheckbox(sFieldName);
    }
    if (document.F1.elements[sFieldName] && "hidden" == document.F1.elements[sFieldName].type)
    {
      scAjaxSetFieldText(sFieldName, oFieldValues, "", "", sEventField);
      return;
    }
    if (null != oFieldOptions && "" != oFieldOptions)
    {
/*      scAjaxClearCheckbox(sFieldName); */
      scAjaxRecreateOptions("Checkbox", "checkbox", sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, sOptClass, sOptMulti, bSwitch);
    }
    else
    {
      scAjaxSetCheckboxOptions(sFieldName, oFieldValues);
    }
	scAjaxSetSwitchOptions(sFieldName, "checkbox");
    scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
  } // scAjaxSetFieldCheckbox

  function scAjaxSetFieldRadio(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, bSwitch, sEventField)
  {
	if (null == bSwitch)
	{
	  bSwitch = false;
	}
    if (document.F1.elements[sFieldName] && "hidden" == document.F1.elements[sFieldName].type)
    {
      scAjaxSetFieldText(sFieldName, oFieldValues, "", "", sEventField);
      return;
    }
    if (null != oFieldOptions)
    {
        scAjaxClearRadio(sFieldName);
    }
    if (null != oFieldOptions && "" != oFieldOptions)
    {
/*      scAjaxClearRadio(sFieldName); */
      scAjaxRecreateOptions("Radio", "radio", sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, "", "", bSwitch);
    }
    else
    {
      scAjaxSetRadioOptions(sFieldName, oFieldValues);
    }
	scAjaxSetSwitchOptions(sFieldName, "radio");
    scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
  } // scAjaxSetFieldRadio

  function scAjaxSetSwitchOptions(fieldName, fieldType)
  {
	var fieldOptions = $(".sc-ui-" + fieldType + "-" + fieldName + ".lc-switch");
	if (!fieldOptions.length) {
		return;
	}
	for (var i = 0; i < fieldOptions.length; i++) {
		if ($(fieldOptions[i]).prop("checked")) {
			$(fieldOptions[i]).lcs_on();
		}
		else {
			$(fieldOptions[i]).lcs_off();
		}
	}
  }

  function scAjaxSetFieldLabel(sFieldName, oFieldValues, oFieldOptions, sLookupCons)
  {
    sFieldValue = oFieldValues[0]["value"];
    if ("undefined" == typeof oFieldValues[0]["label"]) {
      sFieldLabel = oFieldValues[0]["value"];
    } else {
      sFieldLabel = oFieldValues[0]["label"];
    }
    sFieldLabel = scAjaxBreakLine(sFieldLabel);
    if (null != oFieldOptions)
    {
      for (iRecreate = 0; iRecreate < oFieldOptions.length; iRecreate++)
      {
        sOptText  = scAjaxSpecCharParser(oFieldOptions[iRecreate]["value"]);
        sOptValue = scAjaxSpecCharParser(oFieldOptions[iRecreate]["label"]);
        if (sFieldValue == sOptText)
        {
          sFieldLabel = sOptValue;
        }
      }
    }
    if (document.getElementById("id_ajax_label_" + sFieldName))
    {
      document.getElementById("id_ajax_label_" + sFieldName).innerHTML = scAjaxSpecCharParser(sFieldLabel);
    }
    if (document.F1.elements[sFieldName])
    {
//      document.F1.elements[sFieldName].value = scAjaxSpecCharParser(sFieldValue);
        Temp_text = scAjaxProtectBreakLine(sFieldValue);
        Temp_text = scAjaxSpecCharParser(Temp_text);
        document.F1.elements[sFieldName].value = scAjaxReturnBreakLine(Temp_text);

    }
    if (document.getElementById("id_lookup_" + sFieldName))
    {
      document.getElementById("id_lookup_" + sFieldName).innerHTML = sLookupCons;
    }
    scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(sFieldLabel));
  } // scAjaxSetFieldLabel

  function scAjaxSetFieldImage(sFieldName, oFieldValues, sImgFile, sImgOrig, sImgLink, sKeepImg, sHideName)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    if ("N" == sKeepImg && document.getElementById("id_ajax_img_"  + sFieldName))
    {
      document.getElementById("id_ajax_img_"  + sFieldName).src           = scAjaxSpecCharParser(sImgFile);
      document.getElementById("id_ajax_img_"  + sFieldName).style.display = ("" == sImgFile) ? "none" : "";
    }
    if (document.getElementById("id_ajax_link_" + sFieldName) && null != sImgLink)
    {
      document.getElementById("id_ajax_link_" + sFieldName).innerHTML = oFieldValues[0]["value"];
      document.getElementById("id_ajax_link_" + sFieldName).href      = scAjaxSpecCharParser(sImgLink);
    }
    if (document.getElementById("chk_ajax_img_" + sFieldName))
    {
      document.getElementById("chk_ajax_img_" + sFieldName).style.display = ("" == oFieldValues[0]["value"]) ? "none" : "";
    }
    if ("" == oFieldValues[0]["value"] && document.F1.elements[sFieldName + "_limpa"])
    {
      document.F1.elements[sFieldName + "_limpa"].checked = false;
    }
    if ("N" == sKeepImg && document.getElementById("txt_ajax_img_" + sFieldName))
    {
      document.getElementById("txt_ajax_img_" + sFieldName).innerHTML     = oFieldValues[0]["value"];
      document.getElementById("txt_ajax_img_" + sFieldName).style.display = ("" == oFieldValues[0]["value"] || "S" == sHideName) ? "none" : "";
    }
    if ("" != sImgOrig)
    {
      eval("if (var_ajax_img_" + sFieldName + ") var_ajax_img_" + sFieldName + " = '" + sImgOrig + "';");
      if (document.F1.elements["temp_out1_" + sFieldName])
      {
        document.F1.elements["temp_out_" + sFieldName].value = sImgFile;
        document.F1.elements["temp_out1_" + sFieldName].value = sImgOrig;
      }
      else if (document.F1.elements["temp_out_" + sFieldName])
      {
        document.F1.elements["temp_out_" + sFieldName].value = sImgOrig;
      }
    }
    if ("" != oFieldValues[0]["value"])
    {
      if (document.F1.elements[sFieldName + "_salva"]) document.F1.elements[sFieldName + "_salva"].value = oFieldValues[0]["value"];
    }
    else if (oResp && oResp["ajaxRequest"] && "navigate_form" == oResp["ajaxRequest"])
    {
      if (document.F1.elements[sFieldName + "_salva"]) document.F1.elements[sFieldName + "_salva"].value = "";
    }
    scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(oFieldValues[0]["value"]));
  } // scAjaxSetFieldImage

  function scAjaxSetFieldDocument(sFieldName, oFieldValues, sDocLink, sDocIcon, sClearUpload, sDocReadonly)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    document.getElementById("id_ajax_doc_"  + sFieldName).innerHTML = scAjaxSpecCharParser(sDocLink);
    if (document.getElementById("id_ajax_doc_icon_"  + sFieldName))
    {
      document.getElementById("id_ajax_doc_icon_"  + sFieldName).src = scAjaxSpecCharParser(sDocIcon);
    }
    if ("" == oFieldValues[0]["value"])
    {
      document.getElementById("chk_ajax_img_" + sFieldName).style.display = "none";
      document.getElementById("id_ajax_doc_" + sFieldName).style.display = "none";
    }
    else
    {
      document.getElementById("chk_ajax_img_" + sFieldName).style.display = "";
      document.getElementById("id_ajax_doc_" + sFieldName).style.display = "";
    }
    if ("" == oFieldValues[0]["value"] && document.F1.elements[sFieldName + "_limpa"])
    {
      document.F1.elements[sFieldName + "_limpa"].checked = false;
    }
    if ("S" == sClearUpload && document.F1.elements[sFieldName + "_ul_name"])
    {
      document.F1.elements[sFieldName + "_ul_name"].value = "";
    }
    if ("" != sDocLink && sDocReadonly == "S")
    {
      scAjaxSetReadonlyValue(sFieldName, sDocLink);
    }
    else
    {
      scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(oFieldValues[0]["value"]));
    }
  } // scAjaxSetFieldDocument

  function scAjaxSetFieldInnerHtml(sFieldName, oFieldValues)
  {
    if (document.getElementById(sFieldName))
    {
      document.getElementById(sFieldName).innerHTML = scAjaxSpecCharParser(oFieldValues[0]["value"]);
    }
  } // scAjaxSetFieldInnerHtml

  function scAjaxSetFieldMultiUpload(sFieldName, sMULHtml)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    $("#id_sc_loaded_" + sFieldName).html(scAjaxSpecCharParser(sMULHtml));
  } // scAjaxSetFieldMultiUpload

  function scAjaxExecFieldEditorHtml(strOption, bolUI, oField)
  {
	  	if(tinymce.majorVersion > 3)
		{
			if(strOption == 'mceAddControl')
			{
				tinymce.execCommand('mceAddEditor', bolUI, oField);
			}else
			if(strOption == 'mceRemoveControl')
			{
				tinymce.execCommand('mceRemoveEditor', bolUI, oField);
			}
		}
		else
		{
			tinyMCE.execCommand(strOption, bolUI, oField);
		}
  }

  function scAjaxSetFieldEditorHtml(sFieldName, oFieldValues)
  {
    if (!document.F1.elements[sFieldName])
    {
      return;
    }
	if(tinymce.majorVersion > 3)
	{
		var oFormField = tinyMCE.get(sFieldName);
	}
	else
	{
		var oFormField = tinyMCE.getInstanceById(sFieldName);
	}
    oFormField.setContent(scAjaxSpecCharParser(oFieldValues[0]["value"]));
    scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(oFieldValues[0]["value"]));
  } // scAjaxSetFieldEditorHtml

  function scAjaxSetFieldImageHtml(sFieldName, oFieldValues, sImgHtml)
  {
    if (document.getElementById("id_imghtml_" + sFieldName))
    {
      document.getElementById("id_imghtml_" + sFieldName).innerHTML = scAjaxSpecCharParser(sImgHtml);
    }
  } // scAjaxSetFieldEditorHtml

  function scAjaxSetFieldRecurInfo(sFieldName, oFieldValues)
  {
	  var jsonData = "" != oFieldValues[0]["value"]
	               ? JSON.parse(oFieldValues[0]["value"])
				   : { repeat: "1", endon: "E", endafter: "", endin: ""};
	  $("#id_rinf_repeat_" + sFieldName).val(jsonData.repeat);
	  $(".cl_rinf_endon_" + sFieldName).filter(function(index) {return $(this).val() == jsonData.endon}).prop("checked", true),
	  $("#id_rinf_endafter_" + sFieldName).val(jsonData.endafter);
	  $("#id_rinf_endin_" + sFieldName).val(jsonData.endin);
	  scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(oFieldValues[0]["value"]));
  } // scAjaxSetFieldRecurInfo

  function scAjaxSetFieldSignature(sFieldName, oFieldValues)
  {
	var fieldValue = scAjaxSpecCharParser(oFieldValues[0]['value']);
	if ("data:image/png;base64," != fieldValue.substr(0, 22) && "data:image/jsignature;base30," != fieldValue.substr(0, 29))
	{
		scJQSignatureClear(sFieldName);
		return;
	}
	$("#id_sc_field_" + sFieldName).val(fieldValue);
	scJQSignatureRedraw(sFieldName);
  } // scAjaxSetFieldSignature

  function scAjaxSetFieldRating(sFieldName, oFieldValues, thisRow)
  {
	$("#id_sc_field_" + sFieldName).val(oFieldValues[0]['value']);
	if ("" != thisRow) {
      sFieldName = sFieldName.substr(0, sFieldName.lastIndexOf("_") + 1);
	}
	scJQRatingRedraw(sFieldName, thisRow);
  } // scAjaxSetFieldRating

  function scAjaxSetCheckboxOptions(sFieldName, oFieldValues)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"] && !document.F1.elements[sFieldName + "[0]"])
    {
      return;
    }
    var aValues    = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        aValues[iFieldSelect] = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
      }
    }
    if (document.F1.elements[sFieldName + "[]"])
    {
      var oFormField = document.F1.elements[sFieldName + "[]"];
      if (oFormField.length)
      {
        for (iFieldCheckbox = 0; iFieldCheckbox < oFormField.length; iFieldCheckbox++)
        {
          if (scAjaxInArray(oFormField[iFieldCheckbox].value, aValues))
          {
            oFormField[iFieldCheckbox].checked = true;
          }
          else
          {
            oFormField[iFieldCheckbox].checked = false;
          }
        }
      }
      else
      {
        if (scAjaxInArray(oFormField.value, aValues))
        {
          oFormField.checked = true;
        }
        else
        {
          oFormField.checked = false;
        }
      }
    }
    else if (document.F1.elements[sFieldName + "[0]"])
    {
      for (iFieldCheckbox = 0; iFieldCheckbox < document.F1.elements.length; iFieldCheckbox++)
      {
        oFormElement = document.F1.elements[iFieldCheckbox];
        if (sFieldName + "[" == oFormElement.name.substr(0, sFieldName.length + 1) && scAjaxInArray(oFormElement.value, aValues))
        {
          oFormElement.checked = true;
        }
        else if (sFieldName + "[" == oFormElement.name.substr(0, sFieldName.length + 1))
        {
          oFormElement.checked = false;
        }
      }
    }
    else
    {
      oFormElement = document.F1.elements[sFieldName];
      if (scAjaxInArray(oFormElement.value, aValues))
      {
        oFormElement.checked = true;
      }
      else
      {
        oFormElement.checked = false;
      }
    }
  } // scAjaxSetCheckboxOptions

  function scAjaxSetRadioOptions(sFieldName, oFieldValues)
  {
    if (!document.F1.elements[sFieldName])
    {
      return;
    }
    var oFormField = document.F1.elements[sFieldName];
    var aValues    = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        aValues[iFieldSelect] = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
      }
    }
    for (iFieldRadio = 0; iFieldRadio < oFormField.length; iFieldRadio++)
    {
      oFormField[iFieldRadio].checked = false;
    }
    for (iFieldRadio = 0; iFieldRadio < oFormField.length; iFieldRadio++)
    {
      if (scAjaxInArray(oFormField[iFieldRadio].value, aValues))
      {
        oFormField[iFieldRadio].checked = true;
      }
    }
  } // scAjaxSetRadioOptions

  function scAjaxSetReadonlyValue(sFieldName, sFieldValue)
  {
    if (document.getElementById("id_read_on_" + sFieldName))
    {
      document.getElementById("id_read_on_" + sFieldName).innerHTML = sFieldValue;
    }
  } // scAjaxSetReadonlyValue

  function scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, sDelim)
  {
    if (null == oFieldValues)
    {
      return;
    }
    if (null == sDelim)
    {
      sDelim = " ";
    }
    sReadLabel = "";
    for (iReadArray = 0; iReadArray < oFieldValues.length; iReadArray++)
    {
      if (oFieldValues[iReadArray]["label"])
      {
        if ("" != sReadLabel)
        {
          sReadLabel += sDelim;
        }
        sReadLabel += oFieldValues[iReadArray]["label"];
      }
      else if (oFieldValues[iReadArray]["value"])
      {
        if ("" != sReadLabel)
        {
          sReadLabel += sDelim;
        }
        sReadLabel += oFieldValues[iReadArray]["value"];
      }
    }
    scAjaxSetReadonlyValue(sFieldName, sReadLabel);
  } // scAjaxSetReadonlyArrayValue

  function scAjaxGetFieldValue(sFieldGet)
  {
    sValue = "";
    if (!oResp["fldList"])
    {
      return sValue;
    }
    for (iFieldValue = 0; iFieldValue < oResp["fldList"].length; iFieldValue++)
    {
      var sFieldName  = oResp["fldList"][iFieldValue]["fldName"];
      if (oResp["fldList"][iFieldValue]["valList"])
      {
        var oFieldValues = oResp["fldList"][iFieldValue]["valList"];
        if (0 == oFieldValues.length)
        {
          oFieldValues = null;
        }
      }
      else
      {
        var oFieldValues = null;
      }
      if (sFieldGet == sFieldName && null != oFieldValues)
      {
        if (1 == oFieldValues.length)
        {
          sValue = scAjaxSpecCharParser(oFieldValues[0]["value"]);
        }
        else
        {
          sValue = new Array();
          for (jFieldValue = 0; jFieldValue < oFieldValues.length; jFieldValue++)
          {
            sValue[jFieldValue] = scAjaxSpecCharParser(oFieldValues[jFieldValue]["value"]);
          }
        }
      }
    }
    return sValue;
  } // scAjaxGetFieldValue

  function scAjaxGetKeyValue(sFieldGet)
  {
    sValue = "";
    if (!oResp["fldList"])
    {
      return sValue;
    }
    for (iKeyValue = 0; iKeyValue < oResp["fldList"].length; iKeyValue++)
    {
      var sFieldName = oResp["fldList"][iKeyValue]["fldName"];
      if (sFieldGet == sFieldName)
      {
        if (oResp["fldList"][iKeyValue]["keyVal"])
        {
          return scAjaxSpecCharParser(oResp["fldList"][iKeyValue]["keyVal"]);
        }
        else
        {
          return scAjaxGetFieldValue(sFieldGet);
        }
      }
    }
    return sValue;
  } // scAjaxGetKeyValue

  function scAjaxGetLineNumber()
  {
    sLineNumber = "";
    if (oResp["errList"])
    {
      for (iLineNumber = 0; iLineNumber < oResp["errList"].length; iLineNumber++)
      {
        if (oResp["errList"][iLineNumber]["numLinha"])
        {
          sLineNumber = oResp["errList"][iLineNumber]["numLinha"];
        }
      }
      return sLineNumber;
    }
    if (oResp["fldList"])
    {
      return oResp["fldList"][0]["numLinha"];
    }
    if (oResp["msgDisplay"])
    {
      return oResp["msgDisplay"]["numLinha"];
    }
    return sLineNumber;
  } // scAjaxGetLineNumber

  function scAjaxFieldExists(sFieldGet)
  {
    bExists = false;
    if (!oResp["fldList"])
    {
      return bExists;
    }
    for (iFieldValue = 0; iFieldValue < oResp["fldList"].length; iFieldValue++)
    {
      var sFieldName  = oResp["fldList"][iFieldValue]["fldName"];
      if (oResp["fldList"][iFieldValue]["valList"])
      {
        var oFieldValues = oResp["fldList"][iFieldValue]["valList"];
        if (0 == oFieldValues.length)
        {
          oFieldValues = null;
        }
      }
      else
      {
        var oFieldValues = null;
      }
      if (sFieldGet == sFieldName && null != oFieldValues)
      {
        bExists = true;
      }
    }
    return bExists;
  } // scAjaxFieldExists

  function scAjaxGetFieldText(sFieldName)
  {
    $oHidden = $("input[name='" + sFieldName + "']");
    if (!$oHidden.length)
    {
      $oHidden = $("input[name='" + sFieldName + "_']");
    }
    if ($oHidden.length)
    {
      for (var i = 0; i < $oHidden.length; i++)
      {
        if ("hidden" == $oHidden[i].type && $oHidden[i].form && $oHidden[i].form.name && "F1" == $oHidden[i].form.name)
        {
          return scAjaxSpecCharProtect($oHidden[i].value);//.replace(/[+]/g, "__NM_PLUS__");
        }
      }
    }
    $oField = $("#id_sc_field_" + sFieldName);
    if(!$oField.length)
    {
      $oField = $("#id_sc_field_" + sFieldName + "_");
    }
    if ($oField.length && "select" != $oField[0].type.substr(0, 6))
    {
      return scAjaxSpecCharProtect($oField.val());//.replace(/[+]/g, "__NM_PLUS__");
    }
    else if (document.F1.elements[sFieldName])
    {
      return scAjaxSpecCharProtect(document.F1.elements[sFieldName].value);//.replace(/[+]/g, "__NM_PLUS__");
    }
    else if (document.F1.elements[sFieldName + '_'])
    {
      return scAjaxSpecCharProtect(document.F1.elements[sFieldName + '_'].value);//.replace(/[+]/g, "__NM_PLUS__");
    }
    else
    {
      return '';
    }
  } // scAjaxGetFieldText

  function scAjaxGetFieldHidden(sFieldName)
  {
    for( i= 0; i < document.F1.elements.length; i++)
    {
       if (document.F1.elements[i].name == sFieldName)
       {
          return scAjaxSpecCharProtect(document.F1.elements[i].value);//.replace(/[+]/g, "__NM_PLUS__");
       }
    }
//    return document.F1.elements[sFieldName].value.replace(/[+]/g, "__NM_PLUS__");
  } // scAjaxGetFieldHidden

  function scAjaxGetFieldSelect(sFieldName)
  {
    sFieldNameHtml = sFieldName;
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return "";
    }
    if (!document.F1.elements[sFieldName] && document.F1.elements[sFieldName + "[]"])
    {
      sFieldNameHtml += "[]";
    }
    if ("hidden" == document.F1.elements[sFieldNameHtml].type)
    {
      return scAjaxGetFieldHidden(sFieldNameHtml);
    }
    var oFormField = document.F1.elements[sFieldNameHtml];
    var iSelected  = oFormField.selectedIndex;
    if (-1 < iSelected)
    {
      return scAjaxSpecCharProtect(oFormField.options[iSelected].value);//.replace(/[+]/g, "__NM_PLUS__");
    }
    else
    {
      return "";
    }
  } // scAjaxGetFieldSelect

  function scAjaxGetFieldSelectMult(sFieldName, sFieldDelim)
  {
    sFieldNameHtml = sFieldName;
    if (!document.F1.elements[sFieldName] && document.F1.elements[sFieldName + "[]"])
    {
      sFieldNameHtml += "[]";
    }
    if ("hidden" == document.F1.elements[sFieldNameHtml].type)
    {
      return scAjaxGetFieldHidden(sFieldNameHtml);
    }
    var oFormField = document.F1.elements[sFieldNameHtml];
    var sFieldVals = "";
    for (iFieldSelect = 0; iFieldSelect < oFormField.length; iFieldSelect++)
    {
      if (oFormField[iFieldSelect].selected)
      {
        if ("" != sFieldVals)
        {
          sFieldVals += sFieldDelim;
        }
        sFieldVals += scAjaxSpecCharProtect(oFormField[iFieldSelect].value);//.replace(/[+]/g, "__NM_PLUS__");
      }
    }
    return sFieldVals;
  } // scAjaxGetFieldSelectMult

  function scAjaxGetFieldCheckbox(sFieldName, sDelim)
  {
    var aValues = new Array();
    var sValue  = "";
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"] && !document.F1.elements[sFieldName + "[0]"])
    {
      return sValue;
    }
    if (document.F1.elements[sFieldName + "[]"] && "hidden" == document.F1.elements[sFieldName + "[]"].type)
    {
      return scAjaxGetFieldHidden(sFieldName + "[]");
    }
    if (document.F1.elements[sFieldName] && "hidden" == document.F1.elements[sFieldName].type)
    {
      return scAjaxGetFieldHidden(sFieldName);
    }
    if (document.F1.elements[sFieldName + "[]"])
    {
      var oFormField = document.F1.elements[sFieldName + "[]"];
      if (oFormField.length)
      {
        for (iFieldCheck = 0; iFieldCheck < oFormField.length; iFieldCheck++)
        {
          if (oFormField[iFieldCheck].checked)
          {
            aValues[aValues.length] = oFormField[iFieldCheck].value;
          }
        }
      }
      else
      {
        if (oFormField.checked)
        {
          aValues[aValues.length] = oFormField.value;
        }
      }
    }
    else
    {
      for (iFieldCheck = 0; iFieldCheck < document.F1.elements.length; iFieldCheck++)
      {
        oFormElement = document.F1.elements[iFieldCheck];
        if (sFieldName + "[" == oFormElement.name.substr(0, sFieldName.length + 1) && oFormElement.checked)
        {
          aValues[aValues.length] = oFormElement.value;
        }
        else if (sFieldName == oFormElement.name && oFormElement.checked)
        {
          aValues[aValues.length] = oFormElement.value;
        }
      }
    }
    for (iFieldCheck = 0; iFieldCheck < aValues.length; iFieldCheck++)
    {
      sValue += scAjaxSpecCharProtect(aValues[iFieldCheck]);//.replace(/[+]/g, "__NM_PLUS__");
      if (iFieldCheck + 1 != aValues.length)
      {
        sValue += sDelim;
      }
    }
    return sValue;
  } // scAjaxGetFieldCheckbox

  function scAjaxGetFieldRadio(sFieldName)
  {
    if ("hidden" == document.F1.elements[sFieldName].type)
    {
      return scAjaxGetFieldHidden(sFieldName);
    }
    var sValue = "";
    if (!document.F1.elements[sFieldName])
    {
      return sValue;
    }
    var oFormField = document.F1.elements[sFieldName];
    if (!oFormField.length)
    {
        var sc_cmp_radio = eval("document.F1." + sFieldName);
        if (sc_cmp_radio.checked)
        {
           sValue = scAjaxSpecCharProtect(sc_cmp_radio.value);//.replace(/[+]/g, "__NM_PLUS__");
        }
    }
    else
    {
      for (iFieldRadio = 0; iFieldRadio < oFormField.length; iFieldRadio++)
      {
        if (oFormField[iFieldRadio].checked)
        {
          sValue = scAjaxSpecCharProtect(oFormField[iFieldRadio].value);//.replace(/[+]/g, "__NM_PLUS__");
        }
      }
    }
    return sValue;
  } // scAjaxGetFieldRadio

  function scAjaxGetFieldEditorHtml(sFieldName)
  {
    if ("hidden" == document.F1.elements[sFieldName].type)
    {
      return scAjaxGetFieldHidden(sFieldName);
    }
    var sValue = "";
    if (!document.F1.elements[sFieldName])
    {
      return sValue;
    }

	if(tinymce.majorVersion > 3)
	{
		var oFormField = tinyMCE.get(sFieldName);
	}
	else
	{
		var oFormField = tinyMCE.getInstanceById(sFieldName);
	}
    return scAjaxSpecCharParser(scAjaxSpecCharProtect(oFormField.getContent()));//.replace(/[+]/g, "__NM_PLUS__"));
  } // scAjaxGetFieldEditorHtml

  function scAjaxGetFieldSignature(sFieldName)
  {
    var signatureData = $("#sc-id-sign-" + sFieldName).jSignature("getData", "base30");
	$("#id_sc_field_" + sFieldName).val("data:" + signatureData[0] + "," + signatureData[1]);
	return $("#id_sc_field_" + sFieldName).val();
  } // scAjaxGetFieldEditorHtml

  function scAjaxGetFieldRecurInfo(sFieldName)
  {
	  var repeatInList = $(".cl_rinf_repeatin_" + sFieldName).filter(":checked"), repeatInValues = [], jsonData, i;
	  for (i = 0; i < repeatInList.length; i++) {
		  repeatInValues.push($(repeatInList[i]).val());
	  }
	  jsonData = {
		  repeat: $("#id_rinf_repeat_" + sFieldName).val(),
		  repeatin: repeatInValues.join(";"),
		  endon: $(".cl_rinf_endon_" + sFieldName).filter(":checked").val(),
		  endafter: $("#id_rinf_endafter_" + sFieldName).val(),
		  endin: $("#id_rinf_endin_" + sFieldName).val()
	  };
	  return JSON.stringify(jsonData);
  } // scAjaxGetFieldRecurInfo

  function scAjaxDoNothing(e)
  {
  } // scAjaxDoNothing

  function scAjaxInArray(mVal, aList)
  {
    for (iInArray = 0; iInArray < aList.length; iInArray++)
    {
      if (aList[iInArray] == mVal)
      {
        return true;
      }
    }
    return false;
  } // scAjaxInArray

  function scAjaxSpecCharParser(sParseString)
  {
    if (null == sParseString) {
      return "";
    }
    var ta = document.createElement("textarea");
    ta.innerHTML = sParseString.replace(/</g, "&lt;").replace(/>/g, "&gt;");
    return ta.value;
  } // scAjaxSpecCharParser

  function scAjaxSpecCharProtect(sOriginal)
  {
        var sProtected;
        sProtected = sOriginal.replace(/[+]/g, "__NM_PLUS__");
        sProtected = sProtected.replace(/[%]/g, "__NM_PERC__");
        return sProtected;
  } // scAjaxSpecCharProtect

  function scAjaxRecreateOptions(sFieldType, sHtmlType, sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, sOptClass, sOptMulti, bSwitch)
  {
    var sSuffix  = ("checkbox" == sHtmlType) ? "[]" : "";
    var sDivName = "idAjax" + sFieldType + "_" + sFieldName;
    var sDivText = "";
    var iCntLine = 0;
    var aValues  = new Array();
    var sClass;
    var markChangedClass;
    if (null != oFieldValues)
    {
      for (iRecreate = 0; iRecreate < oFieldValues.length; iRecreate++)
      {
        aValues[iRecreate] = scAjaxSpecCharParser(oFieldValues[iRecreate]["value"]);
      }
    }
    sDivText += "<table border=0>";
    if ("checkbox" == sHtmlType)
    {
        markChangedClass = "sc-ui-checkbox-" + sFieldName;
    }
    if ("radio" == sHtmlType)
    {
        markChangedClass = "sc-ui-radio-" + sFieldName;
    }
    for (iRecreate = 0; iRecreate < oFieldOptions.length; iRecreate++)
    {
        sOptText  = scAjaxSpecCharParser(oFieldOptions[iRecreate]["label"]);
        sOptValue = scAjaxSpecCharParser(oFieldOptions[iRecreate]["value"]);
        if (0 == iCntLine)
        {
            sDivText += "<tr>";
        }
        iCntLine++;
        if ("" != sOptClass)
        {
            sClass = " class=\"" + sOptClass;
            if ("" != sOptMulti)
            {
                sClass += " " + sOptClass + sOptMulti;
            }
            if ("" != markChangedClass)
            {
                sClass += " " + markChangedClass;
            }
            sClass += "\"";
        }
        else
        {
            sClass = " class=\"";
            if ("" != markChangedClass)
            {
                sClass += " " + markChangedClass;
            }
            sClass += "\"";
        }
        if (sHtmComp == null)
        {
            sHtmComp = "";
        }
        sChecked  = (scAjaxInArray(sOptValue, aValues)) ? " checked" : "";
        sDivText += "<td class=\"scFormDataFontOdd\">";
		if (bSwitch)
		{
			sDivText += "<div class=\"sc ";
			if ("Checkbox" == sFieldType)
			{
				sDivText += "switch";
			}
			else
			{
				sDivText += "radio";
			}
			sDivText += "\">";
		}
        sDivText += "<input id=\"id-opt-" + sFieldName + "-"  + iRecreate + "\" type=\"" + sHtmlType + "\" name=\"" + sFieldName + sSuffix + "\" value=\"" + sOptValue + "\"" + sChecked + " " + sHtmComp + " " + sOptComp + sClass + ">";
		if (bSwitch)
		{
			sDivText += "<span></span>";
		}
        sDivText += "<label for=\"id-opt-" + sFieldName + "-"  + iRecreate + "\">" + sOptText + "</label>";
		if (bSwitch)
		{
			sDivText += "</div>";
		}
        sDivText += "</td>";
        if (iColNum == iCntLine)
        {
            sDivText += "</tr>";
            iCntLine  = 0;
        }
    }
    sDivText += "</table>";
    document.getElementById(sDivName).innerHTML = sDivText;
    if ("" != markChangedClass)
    {
      $("." + markChangedClass).on("click", function() { scMarkFormAsChanged(); });
    }
  } // scAjaxRecreateOptions

  function scAjaxProcOn(bForce)
  {
    if (null == bForce)
    {
      bForce = false;
    }
    if (document.getElementById("id_div_process"))
    {
      if ($ && $.blockUI && !bForce)
      {
        $.blockUI({
          message: $("#id_div_process_block"),
          overlayCSS: { backgroundColor: sc_ajaxBg },
          css: {
            borderColor: sc_ajaxBordC,
            borderStyle: sc_ajaxBordS,
            borderWidth: sc_ajaxBordW
          }
        });
      }
      else
      {
        document.getElementById("id_div_process").style.display = "";
        document.getElementById("id_fatal_error").style.display = "none";
        if (null != scCenterElement)
        {
          scCenterElement(document.getElementById("id_div_process"));
        }
      }
    }
  } // scAjaxProcOn

  function scAjaxProcOff(bForce)
  {
    if (null == bForce)
    {
      bForce = false;
    }
    if (document.getElementById("id_div_process"))
    {
      if ($ && $.unblockUI && !bForce)
      {
        $.unblockUI();
      }
      else
      {
        document.getElementById("id_div_process").style.display = "none";
      }
    }
  } // scAjaxProcOff

  function scAjaxSetMaster()
  {
    if (!oResp["masterValue"])
    {
      return;
    }
	if (scMasterDetailParentIframe && "" != scMasterDetailParentIframe)
	{
      var dbParentFrame = $(parent.document).find("[name='" + scMasterDetailParentIframe + "']");
	  if (!dbParentFrame || !dbParentFrame[0] || !dbParentFrame[0].contentWindow.scAjaxDetailValue)
	  {
		return;
	  }
      for (iMaster = 0; iMaster < oResp["masterValue"].length; iMaster++)
      {
        dbParentFrame[0].contentWindow.scAjaxDetailValue(oResp["masterValue"][iMaster]["index"], oResp["masterValue"][iMaster]["value"]);
      }
	}
    if (!parent || !parent.scAjaxDetailValue)
    {
      return;
    }
    for (iMaster = 0; iMaster < oResp["masterValue"].length; iMaster++)
    {
      parent.scAjaxDetailValue(oResp["masterValue"][iMaster]["index"], oResp["masterValue"][iMaster]["value"]);
    }
  } // scAjaxSetMaster

  function scAjaxSetFocus()
  {
    if (!oResp["setFocus"] && '' == scFocusFirstErrorName)
    {
      return;
    }
    sFieldName = oResp["setFocus"];
    if (document.F1.elements[sFieldName])
    {
        scFocusField(sFieldName);
    }
    scAjaxFocusError();
  } // scAjaxSetFocus

  function scAjaxFocusError()
  {
    if ('' != scFocusFirstErrorName)
    {
      scFocusField(scFocusFirstErrorName);
      scFocusFirstErrorName = '';
    }
  } // scAjaxFocusError

  function scAjaxSetNavStatus(sBarPos)
  {
    if (!oResp["navStatus"])
    {
      return;
    }
    sNavRet = "S";
    sNavAva = "S";
    if (oResp["navStatus"]["ret"])
    {
      sNavRet = oResp["navStatus"]["ret"];
    }
    if (oResp["navStatus"]["ava"])
    {
      sNavAva = oResp["navStatus"]["ava"];
    }
    if ("S" != sNavRet && "N" != sNavRet)
    {
      sNavRet = "S";
    }
    if ("S" != sNavAva && "N" != sNavAva)
    {
      sNavAva = "S";
    }
    Nav_permite_ret = sNavRet;
    Nav_permite_ava = sNavAva;
    nav_atualiza(Nav_permite_ret, Nav_permite_ava, sBarPos);
  } // scAjaxSetNavStatus

  function scAjaxSetSummary()
  {
    if (!oResp["navSummary"])
    {
      return;
    }
    sreg_ini = oResp["navSummary"].reg_ini;
    sreg_qtd = oResp["navSummary"].reg_qtd;
    sreg_tot = oResp["navSummary"].reg_tot;
    summary_atualiza(sreg_ini, sreg_qtd, sreg_tot);
  } // scAjaxSetSummary

  function scAjaxSetNavpage()
  {
    navpage_atualiza(oResp["navPage"]);
  } // scAjaxSetNavpage


  function scAjaxRedir(oTemp)
  {
    if (oTemp && oTemp != null)
    {
        oResp = oTemp;
    }
    if (!oResp["redirInfo"])
    {
      return;
    }
    sMetodo = oResp["redirInfo"]["metodo"];
    sAction = oResp["redirInfo"]["action"];
    if ("location" == sMetodo)
    {
      if ("parent.parent" == oResp["redirInfo"]["target"])
      {
        parent.parent.location = sAction;
      }
      else if ("parent" == oResp["redirInfo"]["target"])
      {
        parent.location = sAction;
      }
      else if ("_blank" == oResp["redirInfo"]["target"])
      {
        window.open(sAction, "_blank");
      }
      else
      {
        document.location = sAction;
      }
    }
    else if ("html" == sMetodo)
    {
        document.write(scAjaxSpecCharParser(oResp["redirInfo"]["action"]));
    }
    else
    {
      if (oResp["redirInfo"]["target"] == "modal")
      {
          tb_show('', sAction + '?script_case_init=' +  oResp["redirInfo"]["script_case_init"] + '&script_case_session=<?php echo session_id() ?>&nmgp_parms=' + oResp["redirInfo"]["nmgp_parms"] + '&nmgp_outra_jan=true&nmgp_url_saida=modal&NMSC_modal=ok&TB_iframe=true&modal=true&height=' +  oResp["redirInfo"]["h_modal"] + '&width=' + oResp["redirInfo"]["w_modal"], '');
          return;
      }
      sFormRedir = (oResp["redirInfo"]["nmgp_outra_jan"]) ? "form_ajax_redir_1" : "form_ajax_redir_2";
      document.forms[sFormRedir].action           = sAction;
      document.forms[sFormRedir].target           = oResp["redirInfo"]["target"];
      document.forms[sFormRedir].nmgp_parms.value = oResp["redirInfo"]["nmgp_parms"];
      if ("form_ajax_redir_1" == sFormRedir)
      {
        document.forms[sFormRedir].nmgp_outra_jan.value = oResp["redirInfo"]["nmgp_outra_jan"];
      }
      else
      {
        document.forms[sFormRedir].nmgp_url_saida.value   = oResp["redirInfo"]["nmgp_url_saida"];
        document.forms[sFormRedir].script_case_init.value = oResp["redirInfo"]["script_case_init"];
      }
      document.forms[sFormRedir].submit();
    }
  } // scAjaxRedir

  function scAjaxSetDisplay(bReset)
  {
    if (null == bReset)
    {
      bReset = false;
    }
    var aDispData = new Array();
    var aDispCont = {};
    var vertButton;
    if (bReset)
    {
      for (iDisplay = 0; iDisplay < ajax_block_list.length; iDisplay++)
      {
        aDispCont[ajax_block_list[iDisplay]] = aDispData.length;
        aDispData[aDispData.length] = new Array(ajax_block_id[ajax_block_list[iDisplay]], "on");
      }
      for (iDisplay = 0; iDisplay < ajax_field_list.length; iDisplay++)
      {
        if (ajax_field_id[ajax_field_list[iDisplay]])
        {
          aFieldIds = ajax_field_id[ajax_field_list[iDisplay]];
          for (iDisplay2 = 0; iDisplay2 < aFieldIds.length; iDisplay2++)
          {
            aDispCont[aFieldIds[iDisplay2]] = aDispData.length;
            aDispData[aDispData.length] = new Array(aFieldIds[iDisplay2], "on");
          }
        }
      }
    }
	var blockDisplay = {};
    if (oResp["blockDisplay"])
    {
      for (iDisplay = 0; iDisplay < oResp["blockDisplay"].length; iDisplay++)
      {
        if (bReset)
        {
          aDispData[ aDispCont[ oResp["blockDisplay"][iDisplay][0] ] ][1] = oResp["blockDisplay"][iDisplay][1];
        }
        else
        {
          aDispData[aDispData.length] = new Array(ajax_block_id[ oResp["blockDisplay"][iDisplay][0] ], oResp["blockDisplay"][iDisplay][1]);
        }
		blockDisplay[ oResp["blockDisplay"][iDisplay][0] ] = oResp["blockDisplay"][iDisplay][1];
      }
	  //scCheckPagesWithoutBlock();
    }
	var fieldDisplay = {};
    if (oResp["fieldDisplay"])
    {
      for (iDisplay = 0; iDisplay < oResp["fieldDisplay"].length; iDisplay++)
      {
        for (iDisplay2 = 1; iDisplay2 < ajax_field_mult[ oResp["fieldDisplay"][iDisplay][0] ].length; iDisplay2++)
        {
          aFieldIds = ajax_field_id[ ajax_field_mult[ oResp["fieldDisplay"][iDisplay][0] ][iDisplay2] ];
          for (iDisplay3 = 0; iDisplay3 < aFieldIds.length; iDisplay3++)
          {
            if (bReset)
            {
              aDispData[ aDispCont[ aFieldIds[iDisplay3] ] ][1] = oResp["fieldDisplay"][iDisplay][1];
            }
            else
            {
              aDispData[aDispData.length] = new Array(aFieldIds[iDisplay3], oResp["fieldDisplay"][iDisplay][1]);
            }
			if ("hidden_field_data_" == aFieldIds[iDisplay3].substr(0, 18)) {
			  fieldDisplay[ aFieldIds[iDisplay3].substr(18) ] = oResp["fieldDisplay"][iDisplay][1];
			}
          }
        }
      }
    }
    if (oResp["buttonDisplay"])
    {
      for (iDisplay = 0; iDisplay < oResp["buttonDisplay"].length; iDisplay++)
      {
        var sBtnName2 = "";
        switch (oResp["buttonDisplay"][iDisplay][0])
        {
          case "first": var sBtnName = "sc_b_ini"; break;
          case "back": var sBtnName = "sc_b_ret"; break;
          case "forward": var sBtnName = "sc_b_avc"; break;
          case "last": var sBtnName = "sc_b_fim"; break;
          case "insert": var sBtnName = "sc_b_ins"; break;
          case "update": var sBtnName = "sc_b_upd"; break;
          case "delete": var sBtnName = "sc_b_del"; break;
          default: var sBtnName = "sc_b_" + oResp["buttonDisplay"][iDisplay][0]; sBtnName2 = "sc_" + oResp["buttonDisplay"][iDisplay][0]; sBtnName3 = "gbl_sc_" + oResp["buttonDisplay"][iDisplay][0]; break;
        }
        if ("sc_b_ini" == sBtnName || "sc_b_ret" == sBtnName || "sc_b_avc" == sBtnName || "sc_b_fim" == sBtnName)
        {
          scAjaxNavigateButtonDisplay(sBtnName, oResp["buttonDisplay"][iDisplay][1]);
        }
        else
        {
          aDispData[aDispData.length] = new Array(sBtnName, oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName + "_t", oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName + "_b", oResp["buttonDisplay"][iDisplay][1]);
        }
        if ("" != sBtnName2)
        {
          aDispData[aDispData.length] = new Array(sBtnName2, oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName2 + "_top", oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName2 + "_bot", oResp["buttonDisplay"][iDisplay][1]);
        }
        if ("" != sBtnName3)
        {
          aDispData[aDispData.length] = new Array(sBtnName3, oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName3 + "_top", oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName3 + "_bot", oResp["buttonDisplay"][iDisplay][1]);
        }
      }
    }
    if (oResp["buttonDisplayVert"])
    {
      for (iDisplay = 0; iDisplay < oResp["buttonDisplayVert"].length; iDisplay++)
      {
        vertButton = oResp["buttonDisplayVert"][iDisplay];
        aDispData[aDispData.length] = new Array("sc_exc_line_" + vertButton.seq, vertButton.delete);
        if (vertButton.gridView)
        {
          aDispData[aDispData.length] = new Array("sc_open_line_" + vertButton.seq, vertButton.update);
        }
        else
        {
          aDispData[aDispData.length] = new Array("sc_upd_line_" + vertButton.seq, vertButton.update);
        }
      }
    }
    for (iDisplay = 0; iDisplay < aDispData.length; iDisplay++)
    {
      scAjaxElementDisplay(aDispData[iDisplay][0], aDispData[iDisplay][1]);
    }
	for (var blockId in blockDisplay) {
		displayChange_block(blockId, blockDisplay[blockId]);
	}
	for (var fieldId in fieldDisplay) {
		displayChange_field(fieldId, "", fieldDisplay[fieldId]);
	}
  } // scAjaxSetDisplay

  function scAjaxNavigateButtonDisplay(sButton, sStatus)
  {
    sButton2 = sButton + "_off";

    if ("off" == sStatus)
    {
      sStatus2 = "off";
    }
    else
    {
      if ("sc_b_ini" == sButton || "sc_b_ret" == sButton)
      {
        if ("S" == Nav_permite_ret)
        {
          sStatus  = "on";
          sStatus2 = "off";
        }
        else
        {
          sStatus  = "off";
          sStatus2 = "on";
        }
      }
      else
      {
        if ("S" == Nav_permite_ava)
        {
          sStatus  = "on";
          sStatus2 = "off";
        }
        else
        {
          sStatus  = "off";
          sStatus2 = "on";
        }
      }
    }

    scAjaxElementDisplay(sButton        , sStatus);
    scAjaxElementDisplay(sButton + "_t" , sStatus);
    scAjaxElementDisplay(sButton + "_b" , sStatus);
    scAjaxElementDisplay(sButton2       , sStatus2);
    scAjaxElementDisplay(sButton2 + "_t", sStatus2);
    scAjaxElementDisplay(sButton2 + "_b", sStatus2);
  } // scAjaxNavigateButtonDisplay

  function scAjaxElementDisplay(sElement, sAction)
  {
    if (ajax_block_tab && ajax_block_tab[sElement] && "" != ajax_block_tab[sElement])
    {
      scAjaxElementDisplay(ajax_block_tab[sElement], sAction);
    }
    if (document.getElementById(sElement))
    {

      if("off" == sAction)
      {
        $('#' + sElement).hide();
      }
      else
      {
        $('#' + sElement).show();
      }
      if (document.getElementById(sElement + "_dumb"))
      {
        if("off" == sAction)
        {
          $('#' + sElement + "_dumb").show();
        }
        else
        {
          $('#' + sElement + "_dumb").hide();
        }
      }
    }
  } // scAjaxElementDisplay

  function scAjaxSetLabel(bReset)
  {
    if (null == bReset)
    {
      bReset = false;
    }
    if (bReset)
    {
      for (iLabel = 0; iLabel < ajax_field_list.length; iLabel++)
      {
        if (ajax_field_list[iLabel] && ajax_error_list[ajax_field_list[iLabel]])
        {
          scAjaxFieldLabel(ajax_field_list[iLabel], ajax_error_list[ajax_field_list[iLabel]]["label"]);
        }
      }
    }
    if (oResp["fieldLabel"])
    {
      for (iLabel = 0; iLabel < oResp["fieldLabel"].length; iLabel++)
      {
        scAjaxFieldLabel(oResp["fieldLabel"][iLabel][0], scAjaxSpecCharParser(oResp["fieldLabel"][iLabel][1]));
      }
    }
  } // scAjaxSetLabel

  function scAjaxFieldLabel(sField, sLabel)
  {
    if (document.getElementById("id_label_" + sField))
    {
      if (document.getElementById("id_label_" + sField).innerHTML != sLabel)
      {
        document.getElementById("id_label_" + sField).innerHTML = sLabel;
      }
    }
    else if (document.getElementById("hidden_field_label_" + sField) && document.getElementById("hidden_field_label_" + sField).innerHTML != sLabel)
    {
      document.getElementById("hidden_field_label_" + sField).innerHTML = sLabel;
    }
  } // scAjaxFieldLabel

  function scAjaxSetReadonly(bReset)
  {
    if (null == bReset)
    {
      bReset = false;
    }
    if (bReset)
    {
      for (iRead = 0; iRead < ajax_field_list.length; iRead++)
      {
        scAjaxFieldRead(ajax_field_list[iRead], ajax_read_only[ajax_field_list[iRead]]);
      }
      for (iRead = 0; iRead < ajax_field_Dt_Hr.length; iRead++)
      {
        scAjaxFieldRead(ajax_field_Dt_Hr[iRead], ajax_read_only[ajax_field_Dt_Hr[iRead]]);
      }
    }
    if (oResp["readOnly"])
    {
      for (iRead = 0; iRead < oResp["readOnly"].length; iRead++)
      {
        if (ajax_read_only[ oResp["readOnly"][iRead][0] ])
        {
          scAjaxFieldRead(oResp["readOnly"][iRead][0], oResp["readOnly"][iRead][1]);
        }
        else if (oResp["rsSize"])
        {
          for (var i = 0; i <= oResp["rsSize"]; i++)
          {
            if (ajax_read_only[ oResp["readOnly"][iRead][0] + i ])
            {
              scAjaxFieldRead(oResp["readOnly"][iRead][0] + i, oResp["readOnly"][iRead][1]);
            }
          }
        }
      }
    }
  } // scAjaxSetReadonly

  function scAjaxFieldRead(sField, sStatus)
  {
    if ("on" == sStatus)
    {
      var sDisplayOff = "none";
      var sDisplayOn  = "";
    }
    else
    {
      var sDisplayOff = "";
      var sDisplayOn  = "none";
    }
    if (document.getElementById("id_read_off_" + sField))
    {
      document.getElementById("id_read_off_" + sField).style.display = sDisplayOff;
    }
    if (document.getElementById("id_sc_dragdrop_" + sField))
    {
      document.getElementById("id_sc_dragdrop_" + sField).style.display = sDisplayOff;
    }
    if (document.getElementById("id_read_on_" + sField))
    {
      document.getElementById("id_read_on_" + sField).style.display = sDisplayOn;
    }
  } // scAjaxFieldRead

  function scAjaxSetBtnVars()
  {
    if (oResp["btnVars"])
    {
      for (iBtn = 0; iBtn < oResp["btnVars"].length; iBtn++)
      {
        eval(oResp["btnVars"][iBtn][0] + " = scAjaxSpecCharParser('" + oResp["btnVars"][iBtn][1] + "');");
      }
    }
  } // scAjaxSetBtnVars

  function scAjaxClearText(sFormField)
  {
    document.F1.elements[sFormField].value = "";
  } // scAjaxClearText

  function scAjaxClearLabel(sFormField)
  {
    document.getElementById("id_ajax_label_" + sFormField).innerHTML = "";
  } // scAjaxClearLabel

  function scAjaxClearSelect(sFormField)
  {
    document.F1.elements[sFormField].length = 0;
  } // scAjaxClearSelect

  function scAjaxClearCheckbox(sFormField)
  {
    document.getElementById("idAjaxCheckbox_" + sFormField).innerHTML = "";
  } // scAjaxClearCheckbox

  function scAjaxClearRadio(sFormField)
  {
    document.getElementById("idAjaxRadio_" + sFormField).innerHTML = "";
  } // scAjaxClearRadio

  function scAjaxClearEditorHtml(sFormField)
  {
    if(tinymce.majorVersion > 3)
        {
                var oFormField = tinyMCE.get(sFieldName);
        }
        else
        {
                var oFormField = tinyMCE.getInstanceById(sFieldName);
        }
    oFormField.setContent("");
  } // scAjaxClearEditorHtml

  function scCheckPagesWithoutBlock()
  {
	var page_id, block_id, has_block_shown;
    for (page_id in ajax_page_blocks) {
	  has_block_shown = false;
      for (block_id in ajax_page_blocks[page_id]) {
		console.log(page_id + ' ' + ajax_page_blocks[page_id][block_id]);
		console.log($("#div_" + ajax_block_id[ajax_page_blocks[page_id][block_id]]).css('display'));
        //$("#div_" + ajax_block_id[block_id]);
      }
    }
  }

  function scAjaxJavascript()
  {
    if (oResp["ajaxJavascript"])
    {
      var sJsFunc = "";
      for (var i = 0; i < oResp["ajaxJavascript"].length; i++)
      {
        sJsFunc = scAjaxSpecCharParser(oResp["ajaxJavascript"][i][0]);
        if ("" != sJsFunc)
        {
          var aParam = new Array();
          if (oResp["ajaxJavascript"][i][1] && 0 < oResp["ajaxJavascript"][i][1].length)
          {
            for (var j = 0; j < oResp["ajaxJavascript"][i][1].length; j++)
            {
              aParam.push("'" + oResp["ajaxJavascript"][i][1][j] + "'");
            }
          }
          eval("if (" + sJsFunc + ") { " + sJsFunc + "(" + aParam.join(", ") + ") }");
        }
      }
    }
  } // scAjaxJavascript

  function scAjaxAlert(callbackOk)
  {
    if (oResp["ajaxAlert"] && oResp["ajaxAlert"]["message"] && "" != oResp["ajaxAlert"]["message"])
    {
      scJs_alert(oResp["ajaxAlert"]["message"], callbackOk, oResp["ajaxAlert"]["params"]);
    }
    else
    {
      callbackOk();
    }
  } // scAjaxAlert

	function scJs_alert_default(message, callbackOk) {
		alert(message);
		if (typeof callbackOk == "function") {
			callbackOk();
		}
	} // scJs_alert_default

	function scJs_confirm_default(message, callbackOk, callbackCancel) {
		if (confirm(message)) {
			callbackOk();
		}
		else {
			callbackCancel();
		}
	} // scJs_confirm_default

  function scAjaxMessage(oTemp)
  {
    if (oTemp && oTemp != null)
    {
        oResp = oTemp;
    }
    if (oResp["ajaxMessage"] && oResp["ajaxMessage"]["message"] && "" != oResp["ajaxMessage"]["message"])
    {
      var sTitle    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["title"])        ? oResp["ajaxMessage"]["title"]               : scMsgDefTitle,
          bModal    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["modal"])        ? ("Y" == oResp["ajaxMessage"]["modal"])      : false,
          iTimeout  = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["timeout"])      ? parseInt(oResp["ajaxMessage"]["timeout"])   : 0,
          bButton   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["button"])       ? ("Y" == oResp["ajaxMessage"]["button"])     : false,
          sButton   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["button_label"]) ? oResp["ajaxMessage"]["button_label"]        : "Ok",
          iTop      = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["top"])          ? parseInt(oResp["ajaxMessage"]["top"])       : 0,
          iLeft     = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["left"])         ? parseInt(oResp["ajaxMessage"]["left"])      : 0,
          iWidth    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["width"])        ? parseInt(oResp["ajaxMessage"]["width"])     : 0,
          iHeight   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["height"])       ? parseInt(oResp["ajaxMessage"]["height"])    : 0,
          bClose    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["show_close"])   ? ("Y" == oResp["ajaxMessage"]["show_close"]) : true,
          bBodyIcon = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["body_icon"])    ? ("Y" == oResp["ajaxMessage"]["body_icon"])  : true,
          sRedir    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["redir"])        ? oResp["ajaxMessage"]["redir"]               : "",
          sTarget   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["redir_target"]) ? oResp["ajaxMessage"]["redir_target"]        : "",
          sParam    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["redir_par"])    ? oResp["ajaxMessage"]["redir_par"]           : "",
          bToast    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["toast"])        ? ("Y" == oResp["ajaxMessage"]["toast"])      : false,
          sToastPos = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["toast_pos"])    ? oResp["ajaxMessage"]["toast_pos"]           : "",
          sType     = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["type"])         ? oResp["ajaxMessage"]["type"]                : "";
      if (typeof scDisplayUserMessage == "function") {
        scDisplayUserMessage(oResp["ajaxMessage"]["message"]);
      }
      else {
		  var params = {
			  title: sTitle,
			  message: oResp["ajaxMessage"]["message"],
			  isModal: bModal,
			  timeout: iTimeout,
			  showButton: bButton,
			  buttonLabel: sButton,
			  topPos: iTop,
			  leftPos: iLeft,
			  width: iWidth,
			  height: iHeight,
			  redirUrl: sRedir,
			  redirTarget: sTarget,
			  redirParam: sParam,
			  showClose: bClose,
			  showBodyIcon: bBodyIcon,
			  isToast: bToast,
			  toastPos: sToastPos,
			  type: sType
		  };
        _scAjaxShowMessage(params);
      }
    }
  } // scAjaxMessage

  function scAjaxResponse(sResp)
  {
    eval("var oResp = " + sResp);
    return oResp;
  } // scAjaxResponse

  function scAjaxBreakLine(input)
  {
      if (null == input)
      {
          return "";
      }
      input += "";
      while (input.lastIndexOf(String.fromCharCode(10)) > -1)
      {
         input = input.replace(String.fromCharCode(10), '<br>');
      }
      return input;
  } // scAjaxBreakLine

  function scAjaxProtectBreakLine(input)
  {
      if (null == input)
      {
          return "";
      }
      var input1 = input + "";
      while (input1.lastIndexOf(String.fromCharCode(10)) > -1)
      {
         input1 = input1.replace(String.fromCharCode(10), '#@NM#@');
      }
      return input1;
  } // scAjaxProtectBreakLine

  function scAjaxReturnBreakLine(input)
  {
      if (null == input)
      {
          return "";
      }
      while (input.lastIndexOf('#@NM#@') > -1)
      {
         input = input.replace('#@NM#@', String.fromCharCode(10));
      }
      return input;
  } // scAjaxReturnBreakLine

  function scOpenMasterDetail(widget, url)
  {
	  var iframe = $(parent.document).find("[name='" +  widget+ "']");
	  iframe.attr("src", url);
  } // scOpenMasterDetail

  function scMoveMasterDetail(widget)
  {
	  var iframe = $(parent.document).find("[name='" +  widget+ "']");
	  iframe[0].contentWindow.nm_move("apl_detalhe", true);
  } // scMoveMasterDetail

	function scAjaxError_markList() {
	    if ('undefined' == typeof oResp.errList) {
	        return;
	    }
		var i, fieldName, fieldList = new Array();
		for (i = 0; i < oResp.errList.length; i++) {
			fieldName = oResp.errList[i]["fldName"];
			if (oResp.errList[i]["numLinha"]) {
				fieldName += oResp.errList[i]["numLinha"];
			}
            fieldList.push(fieldName);
		}
		scAjaxError_markFieldList(fieldList);
	} // scAjaxError_markList

	function scAjaxError_markFieldList(fieldList) {
		var i;
		for (i = 0; i < fieldList.length; i++) {
            scAjaxError_markField(fieldList[i]);
		}
	} // scAjaxError_markFieldList

	function scAjaxError_unmarkList() {
		var i;
		for (i = 0; i < ajax_field_list.length; i++) {
            scAjaxError_unmarkField(ajax_field_list[i]);
		}
	} // scAjaxError_unmarkList

	function scAjaxError_markField(fieldName) {
		var $oField = $("#id_sc_field_" + fieldName);
		if (0 < $oField.length) {
			scAjax_applyFieldErrorStyle($oField);
		}
	} // scAjaxError_markField

	function scAjaxError_unmarkField(fieldName) {
		var $oField = $("#id_sc_field_" + fieldName);
		if (0 < $oField.length) {
			scAjax_removeFieldErrorStyle($oField);
		}
	} // scAjaxError_unmarkField

	function scAjax_displayEmptyForm() {
        $("#sc-ui-empty-form").show();
        $(".sc-ui-page-tab-line").hide();
        $("#sc-id-required-row").hide();
        sc_hide_Formulario_Llamada_Bienvenida_form();
	}

  function scAjax_applyFieldErrorStyle(fieldObj) {
    if (fieldObj.hasClass("sc-ui-pwd-toggle")) {
        fieldObj.addClass(sc_css_status_pwd_text);
        fieldObj.parent().addClass(sc_css_status_pwd_box);
      } else {
        fieldObj.addClass(sc_css_status);
      }
  }

  function scAjax_removeFieldErrorStyle(fieldObj) {
    if (fieldObj.hasClass("sc-ui-pwd-toggle")) {
        fieldObj.removeClass(sc_css_status_pwd_text);
        fieldObj.parent().removeClass(sc_css_status_pwd_box);
      } else {
        fieldObj.removeClass(sc_css_status);
      }
  }

  function scAjax_formReload() {
    nm_move('igual');
  }

  var scFormHasChanged = false;

  function scMarkFormAsChanged() {
    scFormHasChanged = true;
  }

  function scResetFormChanges() {
    scFormHasChanged = false;
  }

  var isRunning_scFormClose_F5 = false;
  function scFormClose_F5(exitUrl) {
    if (isRunning_scFormClose_F5) {
      return;
    }
    isRunning_scFormClose_F5 = true;
    setTimeout(function() { isRunning_scFormClose_F5 = false; }, 3000);

    document.F5.action = exitUrl;
    document.F5.submit();

  }

  var isRunning_scFormClose_F6 = false;
  function scFormClose_F6(exitUrl) {
    if (isRunning_scFormClose_F6) {
      return;
    }
    isRunning_scFormClose_F6 = true;
    setTimeout(function() { isRunning_scFormClose_F6 = false; }, 3000);

    document.F6.action = exitUrl;
    document.F6.submit();

  }

  // ---------- Validate contratonumero
  function do_ajax_Formulario_Llamada_Bienvenida_validate_contratonumero()
  {
    var nomeCampo_contratonumero = "contratonumero";
    var var_contratonumero = scAjaxGetFieldHidden(nomeCampo_contratonumero);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_contratonumero(var_contratonumero, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_contratonumero_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_contratonumero

  function do_ajax_Formulario_Llamada_Bienvenida_validate_contratonumero_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "contratonumero";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_contratonumero_cb

  // ---------- Validate nombreedv
  function do_ajax_Formulario_Llamada_Bienvenida_validate_nombreedv()
  {
    var nomeCampo_nombreedv = "nombreedv";
    var var_nombreedv = scAjaxGetFieldHidden(nomeCampo_nombreedv);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_nombreedv(var_nombreedv, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_nombreedv_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_nombreedv

  function do_ajax_Formulario_Llamada_Bienvenida_validate_nombreedv_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "nombreedv";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_nombreedv_cb

  // ---------- Validate supervisor
  function do_ajax_Formulario_Llamada_Bienvenida_validate_supervisor()
  {
    var nomeCampo_supervisor = "supervisor";
    var var_supervisor = scAjaxGetFieldHidden(nomeCampo_supervisor);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_supervisor(var_supervisor, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_supervisor_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_supervisor

  function do_ajax_Formulario_Llamada_Bienvenida_validate_supervisor_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "supervisor";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_supervisor_cb

  // ---------- Validate fechaventa
  function do_ajax_Formulario_Llamada_Bienvenida_validate_fechaventa()
  {
    var nomeCampo_fechaventa = "fechaventa";
    var var_fechaventa = scAjaxGetFieldHidden(nomeCampo_fechaventa);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_fechaventa(var_fechaventa, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_fechaventa_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_fechaventa

  function do_ajax_Formulario_Llamada_Bienvenida_validate_fechaventa_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "fechaventa";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_fechaventa_cb

  // ---------- Validate grupofechainauguracion
  function do_ajax_Formulario_Llamada_Bienvenida_validate_grupofechainauguracion()
  {
    var nomeCampo_grupofechainauguracion = "grupofechainauguracion";
    var var_grupofechainauguracion = scAjaxGetFieldHidden(nomeCampo_grupofechainauguracion);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_grupofechainauguracion(var_grupofechainauguracion, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_grupofechainauguracion_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_grupofechainauguracion

  function do_ajax_Formulario_Llamada_Bienvenida_validate_grupofechainauguracion_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "grupofechainauguracion";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_grupofechainauguracion_cb

  // ---------- Validate nombreasociaso
  function do_ajax_Formulario_Llamada_Bienvenida_validate_nombreasociaso()
  {
    var nomeCampo_nombreasociaso = "nombreasociaso";
    var var_nombreasociaso = scAjaxGetFieldHidden(nomeCampo_nombreasociaso);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_nombreasociaso(var_nombreasociaso, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_nombreasociaso_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_nombreasociaso

  function do_ajax_Formulario_Llamada_Bienvenida_validate_nombreasociaso_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "nombreasociaso";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_nombreasociaso_cb

  // ---------- Validate tipodocumento1
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tipodocumento1()
  {
    var nomeCampo_tipodocumento1 = "tipodocumento1";
    var var_tipodocumento1 = scAjaxGetFieldHidden(nomeCampo_tipodocumento1);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tipodocumento1(var_tipodocumento1, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tipodocumento1_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tipodocumento1

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tipodocumento1_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tipodocumento1";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tipodocumento1_cb

  // ---------- Validate numerodocumento1
  function do_ajax_Formulario_Llamada_Bienvenida_validate_numerodocumento1()
  {
    var nomeCampo_numerodocumento1 = "numerodocumento1";
    var var_numerodocumento1 = scAjaxGetFieldHidden(nomeCampo_numerodocumento1);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_numerodocumento1(var_numerodocumento1, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_numerodocumento1_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_numerodocumento1

  function do_ajax_Formulario_Llamada_Bienvenida_validate_numerodocumento1_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "numerodocumento1";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_numerodocumento1_cb

  // ---------- Validate ubicacion
  function do_ajax_Formulario_Llamada_Bienvenida_validate_ubicacion()
  {
    var nomeCampo_ubicacion = "ubicacion";
    var var_ubicacion = scAjaxGetFieldHidden(nomeCampo_ubicacion);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_ubicacion(var_ubicacion, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_ubicacion_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_ubicacion

  function do_ajax_Formulario_Llamada_Bienvenida_validate_ubicacion_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "ubicacion";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_ubicacion_cb

  // ---------- Validate correopersonal1
  function do_ajax_Formulario_Llamada_Bienvenida_validate_correopersonal1()
  {
    var nomeCampo_correopersonal1 = "correopersonal1";
    var var_correopersonal1 = scAjaxGetFieldHidden(nomeCampo_correopersonal1);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_correopersonal1(var_correopersonal1, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_correopersonal1_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_correopersonal1

  function do_ajax_Formulario_Llamada_Bienvenida_validate_correopersonal1_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "correopersonal1";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_correopersonal1_cb

  // ---------- Validate correolaboral1
  function do_ajax_Formulario_Llamada_Bienvenida_validate_correolaboral1()
  {
    var nomeCampo_correolaboral1 = "correolaboral1";
    var var_correolaboral1 = scAjaxGetFieldHidden(nomeCampo_correolaboral1);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_correolaboral1(var_correolaboral1, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_correolaboral1_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_correolaboral1

  function do_ajax_Formulario_Llamada_Bienvenida_validate_correolaboral1_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "correolaboral1";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_correolaboral1_cb

  // ---------- Validate tf11
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf11()
  {
    var nomeCampo_tf11 = "tf11";
    var var_tf11 = scAjaxGetFieldHidden(nomeCampo_tf11);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf11(var_tf11, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf11_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf11

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf11_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf11";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf11_cb

  // ---------- Validate tf13
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf13()
  {
    var nomeCampo_tf13 = "tf13";
    var var_tf13 = scAjaxGetFieldHidden(nomeCampo_tf13);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf13(var_tf13, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf13_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf13

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf13_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf13";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf13_cb

  // ---------- Validate tf12
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf12()
  {
    var nomeCampo_tf12 = "tf12";
    var var_tf12 = scAjaxGetFieldHidden(nomeCampo_tf12);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf12(var_tf12, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf12_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf12

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf12_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf12";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf12_cb

  // ---------- Validate tf14
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf14()
  {
    var nomeCampo_tf14 = "tf14";
    var var_tf14 = scAjaxGetFieldHidden(nomeCampo_tf14);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf14(var_tf14, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf14_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf14

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf14_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf14";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf14_cb

  // ---------- Validate tf15
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf15()
  {
    var nomeCampo_tf15 = "tf15";
    var var_tf15 = scAjaxGetFieldHidden(nomeCampo_tf15);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf15(var_tf15, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf15_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf15

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf15_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf15";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf15_cb

  // ---------- Validate tf16
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf16()
  {
    var nomeCampo_tf16 = "tf16";
    var var_tf16 = scAjaxGetFieldHidden(nomeCampo_tf16);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf16(var_tf16, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf16_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf16

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf16_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf16";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf16_cb

  // ---------- Validate tf17
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf17()
  {
    var nomeCampo_tf17 = "tf17";
    var var_tf17 = scAjaxGetFieldHidden(nomeCampo_tf17);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf17(var_tf17, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf17_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf17

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf17_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf17";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf17_cb

  // ---------- Validate tf18
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf18()
  {
    var nomeCampo_tf18 = "tf18";
    var var_tf18 = scAjaxGetFieldHidden(nomeCampo_tf18);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf18(var_tf18, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf18_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf18

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf18_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf18";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf18_cb

  // ---------- Validate tf19
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf19()
  {
    var nomeCampo_tf19 = "tf19";
    var var_tf19 = scAjaxGetFieldHidden(nomeCampo_tf19);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf19(var_tf19, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf19_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf19

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf19_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf19";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf19_cb

  // ---------- Validate nombreasociado2
  function do_ajax_Formulario_Llamada_Bienvenida_validate_nombreasociado2()
  {
    var nomeCampo_nombreasociado2 = "nombreasociado2";
    var var_nombreasociado2 = scAjaxGetFieldHidden(nomeCampo_nombreasociado2);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_nombreasociado2(var_nombreasociado2, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_nombreasociado2_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_nombreasociado2

  function do_ajax_Formulario_Llamada_Bienvenida_validate_nombreasociado2_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "nombreasociado2";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_nombreasociado2_cb

  // ---------- Validate tipodocumento2
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tipodocumento2()
  {
    var nomeCampo_tipodocumento2 = "tipodocumento2";
    var var_tipodocumento2 = scAjaxGetFieldHidden(nomeCampo_tipodocumento2);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tipodocumento2(var_tipodocumento2, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tipodocumento2_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tipodocumento2

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tipodocumento2_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tipodocumento2";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tipodocumento2_cb

  // ---------- Validate numerodocumento2
  function do_ajax_Formulario_Llamada_Bienvenida_validate_numerodocumento2()
  {
    var nomeCampo_numerodocumento2 = "numerodocumento2";
    var var_numerodocumento2 = scAjaxGetFieldHidden(nomeCampo_numerodocumento2);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_numerodocumento2(var_numerodocumento2, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_numerodocumento2_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_numerodocumento2

  function do_ajax_Formulario_Llamada_Bienvenida_validate_numerodocumento2_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "numerodocumento2";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_numerodocumento2_cb

  // ---------- Validate ubicacion2
  function do_ajax_Formulario_Llamada_Bienvenida_validate_ubicacion2()
  {
    var nomeCampo_ubicacion2 = "ubicacion2";
    var var_ubicacion2 = scAjaxGetFieldHidden(nomeCampo_ubicacion2);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_ubicacion2(var_ubicacion2, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_ubicacion2_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_ubicacion2

  function do_ajax_Formulario_Llamada_Bienvenida_validate_ubicacion2_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "ubicacion2";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_ubicacion2_cb

  // ---------- Validate correopersonal2
  function do_ajax_Formulario_Llamada_Bienvenida_validate_correopersonal2()
  {
    var nomeCampo_correopersonal2 = "correopersonal2";
    var var_correopersonal2 = scAjaxGetFieldHidden(nomeCampo_correopersonal2);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_correopersonal2(var_correopersonal2, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_correopersonal2_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_correopersonal2

  function do_ajax_Formulario_Llamada_Bienvenida_validate_correopersonal2_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "correopersonal2";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_correopersonal2_cb

  // ---------- Validate correolaboral2
  function do_ajax_Formulario_Llamada_Bienvenida_validate_correolaboral2()
  {
    var nomeCampo_correolaboral2 = "correolaboral2";
    var var_correolaboral2 = scAjaxGetFieldHidden(nomeCampo_correolaboral2);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_correolaboral2(var_correolaboral2, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_correolaboral2_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_correolaboral2

  function do_ajax_Formulario_Llamada_Bienvenida_validate_correolaboral2_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "correolaboral2";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_correolaboral2_cb

  // ---------- Validate tf21
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf21()
  {
    var nomeCampo_tf21 = "tf21";
    var var_tf21 = scAjaxGetFieldHidden(nomeCampo_tf21);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf21(var_tf21, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf21_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf21

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf21_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf21";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf21_cb

  // ---------- Validate tf22
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf22()
  {
    var nomeCampo_tf22 = "tf22";
    var var_tf22 = scAjaxGetFieldHidden(nomeCampo_tf22);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf22(var_tf22, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf22_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf22

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf22_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf22";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf22_cb

  // ---------- Validate tf23
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf23()
  {
    var nomeCampo_tf23 = "tf23";
    var var_tf23 = scAjaxGetFieldHidden(nomeCampo_tf23);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf23(var_tf23, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf23_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf23

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf23_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf23";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf23_cb

  // ---------- Validate tf24
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf24()
  {
    var nomeCampo_tf24 = "tf24";
    var var_tf24 = scAjaxGetFieldHidden(nomeCampo_tf24);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf24(var_tf24, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf24_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf24

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf24_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf24";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf24_cb

  // ---------- Validate tf25
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf25()
  {
    var nomeCampo_tf25 = "tf25";
    var var_tf25 = scAjaxGetFieldHidden(nomeCampo_tf25);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf25(var_tf25, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf25_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf25

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf25_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf25";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf25_cb

  // ---------- Validate tf26
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf26()
  {
    var nomeCampo_tf26 = "tf26";
    var var_tf26 = scAjaxGetFieldHidden(nomeCampo_tf26);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf26(var_tf26, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf26_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf26

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf26_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf26";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf26_cb

  // ---------- Validate tf27
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf27()
  {
    var nomeCampo_tf27 = "tf27";
    var var_tf27 = scAjaxGetFieldHidden(nomeCampo_tf27);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf27(var_tf27, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf27_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf27

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf27_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf27";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf27_cb

  // ---------- Validate tf28
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf28()
  {
    var nomeCampo_tf28 = "tf28";
    var var_tf28 = scAjaxGetFieldHidden(nomeCampo_tf28);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf28(var_tf28, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf28_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf28

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf28_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf28";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf28_cb

  // ---------- Validate tf29
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf29()
  {
    var nomeCampo_tf29 = "tf29";
    var var_tf29 = scAjaxGetFieldHidden(nomeCampo_tf29);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf29(var_tf29, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf29_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf29

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf29_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf29";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf29_cb

  // ---------- Validate nombreasociado3
  function do_ajax_Formulario_Llamada_Bienvenida_validate_nombreasociado3()
  {
    var nomeCampo_nombreasociado3 = "nombreasociado3";
    var var_nombreasociado3 = scAjaxGetFieldHidden(nomeCampo_nombreasociado3);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_nombreasociado3(var_nombreasociado3, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_nombreasociado3_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_nombreasociado3

  function do_ajax_Formulario_Llamada_Bienvenida_validate_nombreasociado3_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "nombreasociado3";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_nombreasociado3_cb

  // ---------- Validate tipodocumento3
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tipodocumento3()
  {
    var nomeCampo_tipodocumento3 = "tipodocumento3";
    var var_tipodocumento3 = scAjaxGetFieldHidden(nomeCampo_tipodocumento3);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tipodocumento3(var_tipodocumento3, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tipodocumento3_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tipodocumento3

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tipodocumento3_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tipodocumento3";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tipodocumento3_cb

  // ---------- Validate numerodocumento3
  function do_ajax_Formulario_Llamada_Bienvenida_validate_numerodocumento3()
  {
    var nomeCampo_numerodocumento3 = "numerodocumento3";
    var var_numerodocumento3 = scAjaxGetFieldHidden(nomeCampo_numerodocumento3);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_numerodocumento3(var_numerodocumento3, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_numerodocumento3_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_numerodocumento3

  function do_ajax_Formulario_Llamada_Bienvenida_validate_numerodocumento3_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "numerodocumento3";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_numerodocumento3_cb

  // ---------- Validate ubicacion3
  function do_ajax_Formulario_Llamada_Bienvenida_validate_ubicacion3()
  {
    var nomeCampo_ubicacion3 = "ubicacion3";
    var var_ubicacion3 = scAjaxGetFieldHidden(nomeCampo_ubicacion3);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_ubicacion3(var_ubicacion3, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_ubicacion3_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_ubicacion3

  function do_ajax_Formulario_Llamada_Bienvenida_validate_ubicacion3_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "ubicacion3";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_ubicacion3_cb

  // ---------- Validate correopersonal3
  function do_ajax_Formulario_Llamada_Bienvenida_validate_correopersonal3()
  {
    var nomeCampo_correopersonal3 = "correopersonal3";
    var var_correopersonal3 = scAjaxGetFieldHidden(nomeCampo_correopersonal3);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_correopersonal3(var_correopersonal3, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_correopersonal3_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_correopersonal3

  function do_ajax_Formulario_Llamada_Bienvenida_validate_correopersonal3_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "correopersonal3";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_correopersonal3_cb

  // ---------- Validate correolaboral3
  function do_ajax_Formulario_Llamada_Bienvenida_validate_correolaboral3()
  {
    var nomeCampo_correolaboral3 = "correolaboral3";
    var var_correolaboral3 = scAjaxGetFieldHidden(nomeCampo_correolaboral3);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_correolaboral3(var_correolaboral3, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_correolaboral3_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_correolaboral3

  function do_ajax_Formulario_Llamada_Bienvenida_validate_correolaboral3_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "correolaboral3";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_correolaboral3_cb

  // ---------- Validate tf31
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf31()
  {
    var nomeCampo_tf31 = "tf31";
    var var_tf31 = scAjaxGetFieldHidden(nomeCampo_tf31);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf31(var_tf31, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf31_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf31

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf31_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf31";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf31_cb

  // ---------- Validate tf32
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf32()
  {
    var nomeCampo_tf32 = "tf32";
    var var_tf32 = scAjaxGetFieldHidden(nomeCampo_tf32);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf32(var_tf32, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf32_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf32

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf32_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf32";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf32_cb

  // ---------- Validate tf33
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf33()
  {
    var nomeCampo_tf33 = "tf33";
    var var_tf33 = scAjaxGetFieldHidden(nomeCampo_tf33);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf33(var_tf33, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf33_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf33

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf33_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf33";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf33_cb

  // ---------- Validate tf34
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf34()
  {
    var nomeCampo_tf34 = "tf34";
    var var_tf34 = scAjaxGetFieldHidden(nomeCampo_tf34);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf34(var_tf34, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf34_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf34

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf34_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf34";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf34_cb

  // ---------- Validate tf35
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf35()
  {
    var nomeCampo_tf35 = "tf35";
    var var_tf35 = scAjaxGetFieldHidden(nomeCampo_tf35);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf35(var_tf35, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf35_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf35

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf35_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf35";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf35_cb

  // ---------- Validate tf36
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf36()
  {
    var nomeCampo_tf36 = "tf36";
    var var_tf36 = scAjaxGetFieldHidden(nomeCampo_tf36);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf36(var_tf36, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf36_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf36

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf36_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf36";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf36_cb

  // ---------- Validate tf37
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf37()
  {
    var nomeCampo_tf37 = "tf37";
    var var_tf37 = scAjaxGetFieldHidden(nomeCampo_tf37);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf37(var_tf37, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf37_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf37

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf37_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf37";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf37_cb

  // ---------- Validate tf38
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf38()
  {
    var nomeCampo_tf38 = "tf38";
    var var_tf38 = scAjaxGetFieldHidden(nomeCampo_tf38);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf38(var_tf38, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf38_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf38

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf38_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf38";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf38_cb

  // ---------- Validate tf39
  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf39()
  {
    var nomeCampo_tf39 = "tf39";
    var var_tf39 = scAjaxGetFieldHidden(nomeCampo_tf39);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_tf39(var_tf39, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_tf39_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf39

  function do_ajax_Formulario_Llamada_Bienvenida_validate_tf39_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tf39";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_tf39_cb

  // ---------- Validate cantidadintentos
  function do_ajax_Formulario_Llamada_Bienvenida_validate_cantidadintentos()
  {
    var nomeCampo_cantidadintentos = "cantidadintentos";
    var var_cantidadintentos = scAjaxGetFieldHidden(nomeCampo_cantidadintentos);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_cantidadintentos(var_cantidadintentos, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_cantidadintentos_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_cantidadintentos

  function do_ajax_Formulario_Llamada_Bienvenida_validate_cantidadintentos_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "cantidadintentos";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_cantidadintentos_cb

  // ---------- Validate telefono
  function do_ajax_Formulario_Llamada_Bienvenida_validate_telefono()
  {
    var nomeCampo_telefono = "telefono";
    var var_telefono = scAjaxGetFieldText(nomeCampo_telefono);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_telefono(var_telefono, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_telefono_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_telefono

  function do_ajax_Formulario_Llamada_Bienvenida_validate_telefono_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "telefono";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_telefono_cb

  // ---------- Validate estado
  function do_ajax_Formulario_Llamada_Bienvenida_validate_estado()
  {
    var nomeCampo_estado = "estado";
    var var_estado = scAjaxGetFieldRadio(nomeCampo_estado);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_estado(var_estado, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_estado_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_estado

  function do_ajax_Formulario_Llamada_Bienvenida_validate_estado_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "estado";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_estado_cb

  // ---------- Validate indicadorexitoconforme
  function do_ajax_Formulario_Llamada_Bienvenida_validate_indicadorexitoconforme()
  {
    var nomeCampo_indicadorexitoconforme = "indicadorexitoconforme";
    var var_indicadorexitoconforme = scAjaxGetFieldRadio(nomeCampo_indicadorexitoconforme);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_indicadorexitoconforme(var_indicadorexitoconforme, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_indicadorexitoconforme_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_indicadorexitoconforme

  function do_ajax_Formulario_Llamada_Bienvenida_validate_indicadorexitoconforme_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "indicadorexitoconforme";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_indicadorexitoconforme_cb

  // ---------- Validate motivo
  function do_ajax_Formulario_Llamada_Bienvenida_validate_motivo()
  {
    var nomeCampo_motivo = "motivo";
    var var_motivo = scAjaxGetFieldSelect(nomeCampo_motivo);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_motivo(var_motivo, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_motivo_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_motivo

  function do_ajax_Formulario_Llamada_Bienvenida_validate_motivo_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "motivo";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_motivo_cb

  // ---------- Validate motivoc
  function do_ajax_Formulario_Llamada_Bienvenida_validate_motivoc()
  {
    var nomeCampo_motivoc = "motivoc";
    var var_motivoc = scAjaxGetFieldSelect(nomeCampo_motivoc);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_motivoc(var_motivoc, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_motivoc_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_motivoc

  function do_ajax_Formulario_Llamada_Bienvenida_validate_motivoc_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "motivoc";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_motivoc_cb

  // ---------- Validate comentario
  function do_ajax_Formulario_Llamada_Bienvenida_validate_comentario()
  {
    var nomeCampo_comentario = "comentario";
    var var_comentario = scAjaxGetFieldText(nomeCampo_comentario);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_Formulario_Llamada_Bienvenida_validate_comentario(var_comentario, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_validate_comentario_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_comentario

  function do_ajax_Formulario_Llamada_Bienvenida_validate_comentario_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "comentario";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_Formulario_Llamada_Bienvenida_validate_comentario_cb

  // ---------- Event onclick estado
  function do_ajax_Formulario_Llamada_Bienvenida_event_estado_onclick()
  {
    var var_estado = scAjaxGetFieldRadio("estado");
    var var_script_case_init = document.F2.script_case_init.value;
    scAjaxProcOn(true);
    x_ajax_Formulario_Llamada_Bienvenida_event_estado_onclick(var_estado, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_event_estado_onclick_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_event_estado_onclick

  function do_ajax_Formulario_Llamada_Bienvenida_event_estado_onclick_cb(sResp)
  {
    scAjaxProcOff(true);
    oResp = scAjaxResponse(sResp);
    sFieldValid = "estado";
    scAjaxUpdateFieldErrors(sFieldValid, "onclick");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    if (!scAjaxHasError())
    {
      scAjaxSetFields();
      scAjaxSetVariables();
    }
    scAjaxShowDebug();
    scAjaxSetDisplay();
    scAjaxSetLabel();
    scAjaxSetReadonly();
    scAjaxSetMaster();
    scAjaxAlert(do_ajax_Formulario_Llamada_Bienvenida_event_estado_onclick_cb_after_alert);
  } // do_ajax_Formulario_Llamada_Bienvenida_event_estado_onclick_cb
  function do_ajax_Formulario_Llamada_Bienvenida_event_estado_onclick_cb_after_alert() {
    scAjaxMessage();
    scAjaxJavascript();
    scAjaxSetFocus();
    scAjaxRedir();
  } // do_ajax_Formulario_Llamada_Bienvenida_event_estado_onclick_cb_after_alert

  // ---------- Event onclick indicadorexitoconforme
  function do_ajax_Formulario_Llamada_Bienvenida_event_indicadorexitoconforme_onclick()
  {
    var var_indicadorexitoconforme = scAjaxGetFieldRadio("indicadorexitoconforme");
    var var_script_case_init = document.F2.script_case_init.value;
    scAjaxProcOn(true);
    x_ajax_Formulario_Llamada_Bienvenida_event_indicadorexitoconforme_onclick(var_indicadorexitoconforme, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_event_indicadorexitoconforme_onclick_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_event_indicadorexitoconforme_onclick

  function do_ajax_Formulario_Llamada_Bienvenida_event_indicadorexitoconforme_onclick_cb(sResp)
  {
    scAjaxProcOff(true);
    oResp = scAjaxResponse(sResp);
    sFieldValid = "indicadorexitoconforme";
    scAjaxUpdateFieldErrors(sFieldValid, "onclick");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    if (!scAjaxHasError())
    {
      scAjaxSetFields();
      scAjaxSetVariables();
    }
    scAjaxShowDebug();
    scAjaxSetDisplay();
    scAjaxSetLabel();
    scAjaxSetReadonly();
    scAjaxSetMaster();
    scAjaxAlert(do_ajax_Formulario_Llamada_Bienvenida_event_indicadorexitoconforme_onclick_cb_after_alert);
  } // do_ajax_Formulario_Llamada_Bienvenida_event_indicadorexitoconforme_onclick_cb
  function do_ajax_Formulario_Llamada_Bienvenida_event_indicadorexitoconforme_onclick_cb_after_alert() {
    scAjaxMessage();
    scAjaxJavascript();
    scAjaxSetFocus();
    scAjaxRedir();
  } // do_ajax_Formulario_Llamada_Bienvenida_event_indicadorexitoconforme_onclick_cb_after_alert

  // ---------- Event onclick scajaxbutton_volver
  function do_ajax_Formulario_Llamada_Bienvenida_event_scajaxbutton_volver_onclick()
  {
    var var_script_case_init = document.F2.script_case_init.value;
    scAjaxProcOn(true);
    x_ajax_Formulario_Llamada_Bienvenida_event_scajaxbutton_volver_onclick(var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_event_scajaxbutton_volver_onclick_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_event_scajaxbutton_volver_onclick

  function do_ajax_Formulario_Llamada_Bienvenida_event_scajaxbutton_volver_onclick_cb(sResp)
  {
    scAjaxProcOff(true);
    oResp = scAjaxResponse(sResp);
    sFieldValid = "scajaxbutton_volver";
    scAjaxUpdateFieldErrors(sFieldValid, "onclick");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    if (!scAjaxHasError())
    {
      scAjaxSetFields();
      scAjaxSetVariables();
    }
    scAjaxShowDebug();
    scAjaxSetDisplay();
    scAjaxSetLabel();
    scAjaxSetReadonly();
    scAjaxSetMaster();
    scAjaxAlert(do_ajax_Formulario_Llamada_Bienvenida_event_scajaxbutton_volver_onclick_cb_after_alert);
  } // do_ajax_Formulario_Llamada_Bienvenida_event_scajaxbutton_volver_onclick_cb
  function do_ajax_Formulario_Llamada_Bienvenida_event_scajaxbutton_volver_onclick_cb_after_alert() {
    scAjaxMessage();
    scAjaxJavascript();
    scAjaxSetFocus();
    scAjaxRedir();
  } // do_ajax_Formulario_Llamada_Bienvenida_event_scajaxbutton_volver_onclick_cb_after_alert

  // ---------- Event onclick scajaxbutton_guardar
  function do_ajax_Formulario_Llamada_Bienvenida_event_scajaxbutton_guardar_onclick()
  {
    var var_estado = scAjaxGetFieldRadio("estado");
    var var_indicadorexitoconforme = scAjaxGetFieldRadio("indicadorexitoconforme");
    var var_motivoc = scAjaxGetFieldSelect("motivoc");
    var var_telefono = scAjaxGetFieldText("telefono");
    var var_comentario = scAjaxGetFieldText("comentario");
    var var_motivo = scAjaxGetFieldSelect("motivo");
    var var_script_case_init = document.F2.script_case_init.value;
    scAjaxProcOn(true);
    x_ajax_Formulario_Llamada_Bienvenida_event_scajaxbutton_guardar_onclick(var_estado, var_indicadorexitoconforme, var_motivoc, var_telefono, var_comentario, var_motivo, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_event_scajaxbutton_guardar_onclick_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_event_scajaxbutton_guardar_onclick

  function do_ajax_Formulario_Llamada_Bienvenida_event_scajaxbutton_guardar_onclick_cb(sResp)
  {
    scAjaxProcOff(true);
    oResp = scAjaxResponse(sResp);
    sFieldValid = "scajaxbutton_guardar";
    scAjaxUpdateFieldErrors(sFieldValid, "onclick");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    if (!scAjaxHasError())
    {
      scAjaxSetFields();
      scAjaxSetVariables();
    }
    scAjaxShowDebug();
    scAjaxSetDisplay();
    scAjaxSetLabel();
    scAjaxSetReadonly();
    scAjaxSetMaster();
    scAjaxAlert(do_ajax_Formulario_Llamada_Bienvenida_event_scajaxbutton_guardar_onclick_cb_after_alert);
  } // do_ajax_Formulario_Llamada_Bienvenida_event_scajaxbutton_guardar_onclick_cb
  function do_ajax_Formulario_Llamada_Bienvenida_event_scajaxbutton_guardar_onclick_cb_after_alert() {
    scAjaxMessage();
    scAjaxJavascript();
    scAjaxSetFocus();
    scAjaxRedir();
  } // do_ajax_Formulario_Llamada_Bienvenida_event_scajaxbutton_guardar_onclick_cb_after_alert
function scAjaxShowErrorDisplay(sErrorId, sErrorMsg) {
	scAjaxShowErrorDisplay_default(sErrorId, sErrorMsg);
}

function scAjaxHideErrorDisplay(sErrorId, sErrorMsg) {
	scAjaxHideErrorDisplay_default(sErrorId, sErrorMsg);
}

function scAjaxShowMessage(messageType) {
	scAjaxShowMessage_default();
}

function scAjaxHideMessage() {
	scAjaxHideMessage_default();
}

function _scAjaxShowMessage(params) {
	_scAjaxShowMessage_default(params);
} // _scAjaxShowMessage

function scJs_alert(message, callbackOk, params) {
    message = message.replace(/<!--SC_NL-->/gi, "\n");
	scJs_alert_default(message, callbackOk);
} // scJs_alert

function scJs_confirm(message, callbackOk, callbackCancel) {
	scJs_confirm_default(message, callbackOk, callbackCancel);
} // scJs_confirm

  // ---------- Form
  function do_ajax_Formulario_Llamada_Bienvenida_submit_form()
  {
    if (scEventControl_active("")) {
      setTimeout(function() { do_ajax_Formulario_Llamada_Bienvenida_submit_form(); }, 500);
      return;
    }
    scAjaxHideMessage();
    var var_contratonumero = scAjaxGetFieldHidden("contratonumero");
    var var_nombreedv = scAjaxGetFieldHidden("nombreedv");
    var var_supervisor = scAjaxGetFieldHidden("supervisor");
    var var_fechaventa = scAjaxGetFieldHidden("fechaventa");
    var var_grupofechainauguracion = scAjaxGetFieldHidden("grupofechainauguracion");
    var var_nombreasociaso = scAjaxGetFieldHidden("nombreasociaso");
    var var_tipodocumento1 = scAjaxGetFieldHidden("tipodocumento1");
    var var_numerodocumento1 = scAjaxGetFieldHidden("numerodocumento1");
    var var_ubicacion = scAjaxGetFieldHidden("ubicacion");
    var var_correopersonal1 = scAjaxGetFieldHidden("correopersonal1");
    var var_correolaboral1 = scAjaxGetFieldHidden("correolaboral1");
    var var_tf11 = scAjaxGetFieldHidden("tf11");
    var var_tf13 = scAjaxGetFieldHidden("tf13");
    var var_tf12 = scAjaxGetFieldHidden("tf12");
    var var_tf14 = scAjaxGetFieldHidden("tf14");
    var var_tf15 = scAjaxGetFieldHidden("tf15");
    var var_tf16 = scAjaxGetFieldHidden("tf16");
    var var_tf17 = scAjaxGetFieldHidden("tf17");
    var var_tf18 = scAjaxGetFieldHidden("tf18");
    var var_tf19 = scAjaxGetFieldHidden("tf19");
    var var_nombreasociado2 = scAjaxGetFieldHidden("nombreasociado2");
    var var_tipodocumento2 = scAjaxGetFieldHidden("tipodocumento2");
    var var_numerodocumento2 = scAjaxGetFieldHidden("numerodocumento2");
    var var_ubicacion2 = scAjaxGetFieldHidden("ubicacion2");
    var var_correopersonal2 = scAjaxGetFieldHidden("correopersonal2");
    var var_correolaboral2 = scAjaxGetFieldHidden("correolaboral2");
    var var_tf21 = scAjaxGetFieldHidden("tf21");
    var var_tf22 = scAjaxGetFieldHidden("tf22");
    var var_tf23 = scAjaxGetFieldHidden("tf23");
    var var_tf24 = scAjaxGetFieldHidden("tf24");
    var var_tf25 = scAjaxGetFieldHidden("tf25");
    var var_tf26 = scAjaxGetFieldHidden("tf26");
    var var_tf27 = scAjaxGetFieldHidden("tf27");
    var var_tf28 = scAjaxGetFieldHidden("tf28");
    var var_tf29 = scAjaxGetFieldHidden("tf29");
    var var_nombreasociado3 = scAjaxGetFieldHidden("nombreasociado3");
    var var_tipodocumento3 = scAjaxGetFieldHidden("tipodocumento3");
    var var_numerodocumento3 = scAjaxGetFieldHidden("numerodocumento3");
    var var_ubicacion3 = scAjaxGetFieldHidden("ubicacion3");
    var var_correopersonal3 = scAjaxGetFieldHidden("correopersonal3");
    var var_correolaboral3 = scAjaxGetFieldHidden("correolaboral3");
    var var_tf31 = scAjaxGetFieldHidden("tf31");
    var var_tf32 = scAjaxGetFieldHidden("tf32");
    var var_tf33 = scAjaxGetFieldHidden("tf33");
    var var_tf34 = scAjaxGetFieldHidden("tf34");
    var var_tf35 = scAjaxGetFieldHidden("tf35");
    var var_tf36 = scAjaxGetFieldHidden("tf36");
    var var_tf37 = scAjaxGetFieldHidden("tf37");
    var var_tf38 = scAjaxGetFieldHidden("tf38");
    var var_tf39 = scAjaxGetFieldHidden("tf39");
    var var_cantidadintentos = scAjaxGetFieldHidden("cantidadintentos");
    var var_telefono = scAjaxGetFieldText("telefono");
    var var_estado = scAjaxGetFieldRadio("estado");
    var var_indicadorexitoconforme = scAjaxGetFieldRadio("indicadorexitoconforme");
    var var_motivo = scAjaxGetFieldSelect("motivo");
    var var_motivoc = scAjaxGetFieldSelect("motivoc");
    var var_comentario = scAjaxGetFieldText("comentario");
    var var_nm_form_submit = document.F1.nm_form_submit.value;
    var var_nmgp_url_saida = document.F1.nmgp_url_saida.value;
    var var_nmgp_opcao = document.F1.nmgp_opcao.value;
    var var_nmgp_ancora = document.F1.nmgp_ancora.value;
    var var_nmgp_num_form = document.F1.nmgp_num_form.value;
    var var_nmgp_parms = document.F1.nmgp_parms.value;
    var var_script_case_init = document.F1.script_case_init.value;
    scAjaxProcOn();
    x_ajax_Formulario_Llamada_Bienvenida_submit_form(var_contratonumero, var_nombreedv, var_supervisor, var_fechaventa, var_grupofechainauguracion, var_nombreasociaso, var_tipodocumento1, var_numerodocumento1, var_ubicacion, var_correopersonal1, var_correolaboral1, var_tf11, var_tf13, var_tf12, var_tf14, var_tf15, var_tf16, var_tf17, var_tf18, var_tf19, var_nombreasociado2, var_tipodocumento2, var_numerodocumento2, var_ubicacion2, var_correopersonal2, var_correolaboral2, var_tf21, var_tf22, var_tf23, var_tf24, var_tf25, var_tf26, var_tf27, var_tf28, var_tf29, var_nombreasociado3, var_tipodocumento3, var_numerodocumento3, var_ubicacion3, var_correopersonal3, var_correolaboral3, var_tf31, var_tf32, var_tf33, var_tf34, var_tf35, var_tf36, var_tf37, var_tf38, var_tf39, var_cantidadintentos, var_telefono, var_estado, var_indicadorexitoconforme, var_motivo, var_motivoc, var_comentario, var_nm_form_submit, var_nmgp_url_saida, var_nmgp_opcao, var_nmgp_ancora, var_nmgp_num_form, var_nmgp_parms, var_script_case_init, do_ajax_Formulario_Llamada_Bienvenida_submit_form_cb);
  } // do_ajax_Formulario_Llamada_Bienvenida_submit_form

  function do_ajax_Formulario_Llamada_Bienvenida_submit_form_cb(sResp)
  {
    scAjaxProcOff();
    oResp = scAjaxResponse(sResp);
    scAjaxCalendarReload();
    scAjaxUpdateErrors("valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors || "menu_link" == document.F1.nmgp_opcao.value)
    {
      $('.sc-js-ui-statusimg').css('display', 'none');
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      scAjaxError_markList();
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    if (scAjaxIsOk())
    {
      scResetFormChanges();
      scAjaxShowMessage("success");
      scAjaxHideErrorDisplay("table");
      scLigEditLookupCall();
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dashboard_info']['under_dashboard']) {
?>
      var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dashboard_info']['parent_widget']; ?>']");
      if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.nm_gp_move) {
        dbParentFrame[0].contentWindow.nm_gp_move("igual");
      }
<?php
}
?>
    }
    Nm_Proc_Atualiz = false;
    if (!scAjaxHasError())
    {
      scAjaxSetFields(false);
      scAjaxSetVariables();
      scAjaxSetMaster();
      if (scInlineFormSend())
      {
        self.parent.tb_remove();
        return;
      }
    }
    scAjaxShowDebug();
    scAjaxSetDisplay();
    scAjaxSetLabel();
    scAjaxSetReadonly();
    scAjaxAlert(do_ajax_Formulario_Llamada_Bienvenida_submit_form_cb_after_alert);
  } // do_ajax_Formulario_Llamada_Bienvenida_submit_form_cb
  function do_ajax_Formulario_Llamada_Bienvenida_submit_form_cb_after_alert() {
    scAjaxMessage();
    scAjaxJavascript();
    scAjaxSetFocus();
    scAjaxRedir();
    if (hasJsFormOnload)
    {
      sc_form_onload();
    }
  } // do_ajax_Formulario_Llamada_Bienvenida_submit_form_cb_after_alert

  var scStatusDetail = {};

  function do_ajax_Formulario_Llamada_Bienvenida_navigate_form()
  {
    perform_ajax_Formulario_Llamada_Bienvenida_navigate_form();
  }

  function perform_ajax_Formulario_Llamada_Bienvenida_navigate_form()
  {
    if (scRefreshTable())
    {
      return;
    }
  } // do_ajax_Formulario_Llamada_Bienvenida_navigate_form

  var scMasterDetailParentIframe = "<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dashboard_info']['parent_widget'] ?>";
  var scMasterDetailIframe = {};
<?php
foreach ($this->Ini->sc_lig_iframe as $tmp_i => $tmp_v)
{
?>
  scMasterDetailIframe["<?php echo $tmp_i; ?>"] = "<?php echo $tmp_v; ?>";
<?php
}
?>
  function do_ajax_Formulario_Llamada_Bienvenida_navigate_form_cb(sResp)
  {
    scAjaxProcOff();
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    if (oResp['empty_filter'] && oResp['empty_filter'] == "ok")
    {
        document.F5.nmgp_opcao.value = "inicio";
        document.F5.nmgp_parms.value = "";
        document.F5.submit();
    }
    scAjaxClearErrors()
    scResetFormChanges()
    sc_mupload_ok = true;
    scAjaxSetFields(false);
    scAjaxSetVariables();
    scAjaxShowDebug();
    scAjaxSetLabel(true);
    scAjaxSetReadonly(true);
    scAjaxSetMaster();
    scAjaxSetNavStatus("t");
    scAjaxSetNavStatus("b");
    scAjaxSetDisplay(true);
    scAjaxSetBtnVars();
    $('.sc-js-ui-statusimg').css('display', 'none');
    scAjaxAlert(do_ajax_Formulario_Llamada_Bienvenida_navigate_form_cb_after_alert);
  } // do_ajax_Formulario_Llamada_Bienvenida_navigate_form_cb
  function do_ajax_Formulario_Llamada_Bienvenida_navigate_form_cb_after_alert() {
    scAjaxMessage();
    scAjaxJavascript();
    scAjaxSetFocus();
<?php
if ($this->Embutida_form)
{
?>
    do_ajax_Formulario_Llamada_Bienvenida_restore_buttons();
<?php
}
?>
    if (hasJsFormOnload)
    {
      sc_form_onload();
    }
  } // do_ajax_Formulario_Llamada_Bienvenida_navigate_form_cb_after_alert
  function sc_hide_Formulario_Llamada_Bienvenida_form()
  {
    for (var block_id in ajax_block_id) {
      $("#div_" + ajax_block_id[block_id]).hide();
    }
  } // sc_hide_Formulario_Llamada_Bienvenida_form


  function scAjaxDetailProc()
  {
    return true;
  } // scAjaxDetailProc


  var ajax_error_geral = "";

  var ajax_error_type = new Array("valid", "onblur", "onchange", "onclick", "onfocus");

  var ajax_field_list = new Array();
  var ajax_field_Dt_Hr = new Array();
  ajax_field_list[0] = "contratonumero";
  ajax_field_list[1] = "nombreedv";
  ajax_field_list[2] = "supervisor";
  ajax_field_list[3] = "fechaventa";
  ajax_field_list[4] = "grupofechainauguracion";
  ajax_field_list[5] = "nombreasociaso";
  ajax_field_list[6] = "tipodocumento1";
  ajax_field_list[7] = "numerodocumento1";
  ajax_field_list[8] = "ubicacion";
  ajax_field_list[9] = "correopersonal1";
  ajax_field_list[10] = "correolaboral1";
  ajax_field_list[11] = "tf11";
  ajax_field_list[12] = "tf13";
  ajax_field_list[13] = "tf12";
  ajax_field_list[14] = "tf14";
  ajax_field_list[15] = "tf15";
  ajax_field_list[16] = "tf16";
  ajax_field_list[17] = "tf17";
  ajax_field_list[18] = "tf18";
  ajax_field_list[19] = "tf19";
  ajax_field_list[20] = "nombreasociado2";
  ajax_field_list[21] = "tipodocumento2";
  ajax_field_list[22] = "numerodocumento2";
  ajax_field_list[23] = "ubicacion2";
  ajax_field_list[24] = "correopersonal2";
  ajax_field_list[25] = "correolaboral2";
  ajax_field_list[26] = "tf21";
  ajax_field_list[27] = "tf22";
  ajax_field_list[28] = "tf23";
  ajax_field_list[29] = "tf24";
  ajax_field_list[30] = "tf25";
  ajax_field_list[31] = "tf26";
  ajax_field_list[32] = "tf27";
  ajax_field_list[33] = "tf28";
  ajax_field_list[34] = "tf29";
  ajax_field_list[35] = "nombreasociado3";
  ajax_field_list[36] = "tipodocumento3";
  ajax_field_list[37] = "numerodocumento3";
  ajax_field_list[38] = "ubicacion3";
  ajax_field_list[39] = "correopersonal3";
  ajax_field_list[40] = "correolaboral3";
  ajax_field_list[41] = "tf31";
  ajax_field_list[42] = "tf32";
  ajax_field_list[43] = "tf33";
  ajax_field_list[44] = "tf34";
  ajax_field_list[45] = "tf35";
  ajax_field_list[46] = "tf36";
  ajax_field_list[47] = "tf37";
  ajax_field_list[48] = "tf38";
  ajax_field_list[49] = "tf39";
  ajax_field_list[50] = "cantidadintentos";
  ajax_field_list[51] = "telefono";
  ajax_field_list[52] = "estado";
  ajax_field_list[53] = "indicadorexitoconforme";
  ajax_field_list[54] = "motivo";
  ajax_field_list[55] = "motivoc";
  ajax_field_list[56] = "comentario";

  var ajax_block_list = new Array();
  ajax_block_list[0] = "0";
  ajax_block_list[1] = "1";
  ajax_block_list[2] = "2";
  ajax_block_list[3] = "3";
  ajax_block_list[4] = "4";

  var ajax_error_list = {
    "contratonumero": {"label": "Número de Contrato ", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "nombreedv": {"label": "Nombre Ejecutivo de Ventas", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "supervisor": {"label": "Nombre del Supervisor", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "fechaventa": {"label": "Fecha de Venta", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "grupofechainauguracion": {"label": "Grupo Fecha Inauguración", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "nombreasociaso": {"label": "Nombre", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tipodocumento1": {"label": "Tipo Documento", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "numerodocumento1": {"label": "Nro Documento", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "ubicacion": {"label": "Ubicación", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "correopersonal1": {"label": "Correo Personal", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "correolaboral1": {"label": "Correo Laboral", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf11": {"label": "Teléfono de Contacto ", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf13": {"label": "Teléfono Domicilio", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf12": {"label": "Teléfono Personal", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf14": {"label": "Teléfono Laboral", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf15": {"label": "Teléfono Otros", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf16": {"label": "Móvil ", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf17": {"label": "Móvil Personal ", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf18": {"label": "Móvil Extra", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf19": {"label": "Móvil Contacto", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "nombreasociado2": {"label": "Asociado", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tipodocumento2": {"label": "Tipo Documento", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "numerodocumento2": {"label": "Nro Documento", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "ubicacion2": {"label": "Ubicación", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "correopersonal2": {"label": "Correo Personal", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "correolaboral2": {"label": "Correo Laboral", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf21": {"label": "Teléfono de Contacto ", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf22": {"label": "Teléfono Personal", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf23": {"label": "Teléfono Domicilio", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf24": {"label": "Teléfono Laboral", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf25": {"label": "Teléfono Otros", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf26": {"label": "Móvil ", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf27": {"label": "Móvil Personal", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf28": {"label": "Móvil Extra", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf29": {"label": "Móvil de Contacto ", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "nombreasociado3": {"label": "Asociado", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tipodocumento3": {"label": "Tipo Documento", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "numerodocumento3": {"label": "Nro Documento", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "ubicacion3": {"label": "Ubicación", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "correopersonal3": {"label": "Correo Personal", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "correolaboral3": {"label": "Correo Laboral", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf31": {"label": "Teléfono de Contacto", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf32": {"label": "Teléfono Domicilio", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf33": {"label": "Teléfono Personal", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf34": {"label": "Teléfono Laboral", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf35": {"label": "Teléfono Otros", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf36": {"label": "Móvil", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf37": {"label": "Móvil Personal", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf38": {"label": "Móvil Extra", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tf39": {"label": "Móvil Contacto", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cantidadintentos": {"label": "Nro de intentos", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "telefono": {"label": "Teléfono *", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "estado": {"label": "Estado de Llamada *", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "indicadorexitoconforme": {"label": "Asociado Conforme? *", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "motivo": {"label": "Motivo *", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "motivoc": {"label": "Motivo *", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "comentario": {"label": "Comentario *", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5}
  };
  var ajax_error_timeout = 5;

  var ajax_block_id = {
    "0": "hidden_bloco_0",
    "1": "hidden_bloco_1",
    "2": "hidden_bloco_2",
    "3": "hidden_bloco_3",
    "4": "hidden_bloco_4"
  };

  var ajax_block_tab = {
    "hidden_bloco_0": "",
    "hidden_bloco_1": "",
    "hidden_bloco_2": "",
    "hidden_bloco_3": "",
    "hidden_bloco_4": ""
  };

  var ajax_field_mult = {
    "contratonumero": new Array(),
    "nombreedv": new Array(),
    "supervisor": new Array(),
    "fechaventa": new Array(),
    "grupofechainauguracion": new Array(),
    "nombreasociaso": new Array(),
    "tipodocumento1": new Array(),
    "numerodocumento1": new Array(),
    "ubicacion": new Array(),
    "correopersonal1": new Array(),
    "correolaboral1": new Array(),
    "tf11": new Array(),
    "tf13": new Array(),
    "tf12": new Array(),
    "tf14": new Array(),
    "tf15": new Array(),
    "tf16": new Array(),
    "tf17": new Array(),
    "tf18": new Array(),
    "tf19": new Array(),
    "nombreasociado2": new Array(),
    "tipodocumento2": new Array(),
    "numerodocumento2": new Array(),
    "ubicacion2": new Array(),
    "correopersonal2": new Array(),
    "correolaboral2": new Array(),
    "tf21": new Array(),
    "tf22": new Array(),
    "tf23": new Array(),
    "tf24": new Array(),
    "tf25": new Array(),
    "tf26": new Array(),
    "tf27": new Array(),
    "tf28": new Array(),
    "tf29": new Array(),
    "nombreasociado3": new Array(),
    "tipodocumento3": new Array(),
    "numerodocumento3": new Array(),
    "ubicacion3": new Array(),
    "correopersonal3": new Array(),
    "correolaboral3": new Array(),
    "tf31": new Array(),
    "tf32": new Array(),
    "tf33": new Array(),
    "tf34": new Array(),
    "tf35": new Array(),
    "tf36": new Array(),
    "tf37": new Array(),
    "tf38": new Array(),
    "tf39": new Array(),
    "cantidadintentos": new Array(),
    "telefono": new Array(),
    "estado": new Array(),
    "indicadorexitoconforme": new Array(),
    "motivo": new Array(),
    "motivoc": new Array(),
    "comentario": new Array()
  };
  ajax_field_mult["contratonumero"][1] = "contratonumero";
  ajax_field_mult["nombreedv"][1] = "nombreedv";
  ajax_field_mult["supervisor"][1] = "supervisor";
  ajax_field_mult["fechaventa"][1] = "fechaventa";
  ajax_field_mult["grupofechainauguracion"][1] = "grupofechainauguracion";
  ajax_field_mult["nombreasociaso"][1] = "nombreasociaso";
  ajax_field_mult["tipodocumento1"][1] = "tipodocumento1";
  ajax_field_mult["numerodocumento1"][1] = "numerodocumento1";
  ajax_field_mult["ubicacion"][1] = "ubicacion";
  ajax_field_mult["correopersonal1"][1] = "correopersonal1";
  ajax_field_mult["correolaboral1"][1] = "correolaboral1";
  ajax_field_mult["tf11"][1] = "tf11";
  ajax_field_mult["tf13"][1] = "tf13";
  ajax_field_mult["tf12"][1] = "tf12";
  ajax_field_mult["tf14"][1] = "tf14";
  ajax_field_mult["tf15"][1] = "tf15";
  ajax_field_mult["tf16"][1] = "tf16";
  ajax_field_mult["tf17"][1] = "tf17";
  ajax_field_mult["tf18"][1] = "tf18";
  ajax_field_mult["tf19"][1] = "tf19";
  ajax_field_mult["nombreasociado2"][1] = "nombreasociado2";
  ajax_field_mult["tipodocumento2"][1] = "tipodocumento2";
  ajax_field_mult["numerodocumento2"][1] = "numerodocumento2";
  ajax_field_mult["ubicacion2"][1] = "ubicacion2";
  ajax_field_mult["correopersonal2"][1] = "correopersonal2";
  ajax_field_mult["correolaboral2"][1] = "correolaboral2";
  ajax_field_mult["tf21"][1] = "tf21";
  ajax_field_mult["tf22"][1] = "tf22";
  ajax_field_mult["tf23"][1] = "tf23";
  ajax_field_mult["tf24"][1] = "tf24";
  ajax_field_mult["tf25"][1] = "tf25";
  ajax_field_mult["tf26"][1] = "tf26";
  ajax_field_mult["tf27"][1] = "tf27";
  ajax_field_mult["tf28"][1] = "tf28";
  ajax_field_mult["tf29"][1] = "tf29";
  ajax_field_mult["nombreasociado3"][1] = "nombreasociado3";
  ajax_field_mult["tipodocumento3"][1] = "tipodocumento3";
  ajax_field_mult["numerodocumento3"][1] = "numerodocumento3";
  ajax_field_mult["ubicacion3"][1] = "ubicacion3";
  ajax_field_mult["correopersonal3"][1] = "correopersonal3";
  ajax_field_mult["correolaboral3"][1] = "correolaboral3";
  ajax_field_mult["tf31"][1] = "tf31";
  ajax_field_mult["tf32"][1] = "tf32";
  ajax_field_mult["tf33"][1] = "tf33";
  ajax_field_mult["tf34"][1] = "tf34";
  ajax_field_mult["tf35"][1] = "tf35";
  ajax_field_mult["tf36"][1] = "tf36";
  ajax_field_mult["tf37"][1] = "tf37";
  ajax_field_mult["tf38"][1] = "tf38";
  ajax_field_mult["tf39"][1] = "tf39";
  ajax_field_mult["cantidadintentos"][1] = "cantidadintentos";
  ajax_field_mult["telefono"][1] = "telefono";
  ajax_field_mult["estado"][1] = "estado";
  ajax_field_mult["indicadorexitoconforme"][1] = "indicadorexitoconforme";
  ajax_field_mult["motivo"][1] = "motivo";
  ajax_field_mult["motivoc"][1] = "motivoc";
  ajax_field_mult["comentario"][1] = "comentario";

  var ajax_field_id = {
    "contratonumero": new Array("hidden_field_label_contratonumero", "hidden_field_data_contratonumero"),
    "nombreedv": new Array("hidden_field_label_nombreedv", "hidden_field_data_nombreedv"),
    "supervisor": new Array("hidden_field_label_supervisor", "hidden_field_data_supervisor"),
    "fechaventa": new Array("hidden_field_label_fechaventa", "hidden_field_data_fechaventa"),
    "grupofechainauguracion": new Array("hidden_field_label_grupofechainauguracion", "hidden_field_data_grupofechainauguracion"),
    "nombreasociaso": new Array("hidden_field_label_nombreasociaso", "hidden_field_data_nombreasociaso"),
    "tipodocumento1": new Array("hidden_field_label_tipodocumento1", "hidden_field_data_tipodocumento1"),
    "numerodocumento1": new Array("hidden_field_label_numerodocumento1", "hidden_field_data_numerodocumento1"),
    "ubicacion": new Array("hidden_field_label_ubicacion", "hidden_field_data_ubicacion"),
    "correopersonal1": new Array("hidden_field_label_correopersonal1", "hidden_field_data_correopersonal1"),
    "correolaboral1": new Array("hidden_field_label_correolaboral1", "hidden_field_data_correolaboral1"),
    "tf11": new Array("hidden_field_label_tf11", "hidden_field_data_tf11"),
    "tf13": new Array("hidden_field_label_tf13", "hidden_field_data_tf13"),
    "tf12": new Array("hidden_field_label_tf12", "hidden_field_data_tf12"),
    "tf14": new Array("hidden_field_label_tf14", "hidden_field_data_tf14"),
    "tf15": new Array("hidden_field_label_tf15", "hidden_field_data_tf15"),
    "tf16": new Array("hidden_field_label_tf16", "hidden_field_data_tf16"),
    "tf17": new Array("hidden_field_label_tf17", "hidden_field_data_tf17"),
    "tf18": new Array("hidden_field_label_tf18", "hidden_field_data_tf18"),
    "tf19": new Array("hidden_field_label_tf19", "hidden_field_data_tf19"),
    "nombreasociado2": new Array("hidden_field_label_nombreasociado2", "hidden_field_data_nombreasociado2"),
    "tipodocumento2": new Array("hidden_field_label_tipodocumento2", "hidden_field_data_tipodocumento2"),
    "numerodocumento2": new Array("hidden_field_label_numerodocumento2", "hidden_field_data_numerodocumento2"),
    "ubicacion2": new Array("hidden_field_label_ubicacion2", "hidden_field_data_ubicacion2"),
    "correopersonal2": new Array("hidden_field_label_correopersonal2", "hidden_field_data_correopersonal2"),
    "correolaboral2": new Array("hidden_field_label_correolaboral2", "hidden_field_data_correolaboral2"),
    "tf21": new Array("hidden_field_label_tf21", "hidden_field_data_tf21"),
    "tf22": new Array("hidden_field_label_tf22", "hidden_field_data_tf22"),
    "tf23": new Array("hidden_field_label_tf23", "hidden_field_data_tf23"),
    "tf24": new Array("hidden_field_label_tf24", "hidden_field_data_tf24"),
    "tf25": new Array("hidden_field_label_tf25", "hidden_field_data_tf25"),
    "tf26": new Array("hidden_field_label_tf26", "hidden_field_data_tf26"),
    "tf27": new Array("hidden_field_label_tf27", "hidden_field_data_tf27"),
    "tf28": new Array("hidden_field_label_tf28", "hidden_field_data_tf28"),
    "tf29": new Array("hidden_field_label_tf29", "hidden_field_data_tf29"),
    "nombreasociado3": new Array("hidden_field_label_nombreasociado3", "hidden_field_data_nombreasociado3"),
    "tipodocumento3": new Array("hidden_field_label_tipodocumento3", "hidden_field_data_tipodocumento3"),
    "numerodocumento3": new Array("hidden_field_label_numerodocumento3", "hidden_field_data_numerodocumento3"),
    "ubicacion3": new Array("hidden_field_label_ubicacion3", "hidden_field_data_ubicacion3"),
    "correopersonal3": new Array("hidden_field_label_correopersonal3", "hidden_field_data_correopersonal3"),
    "correolaboral3": new Array("hidden_field_label_correolaboral3", "hidden_field_data_correolaboral3"),
    "tf31": new Array("hidden_field_label_tf31", "hidden_field_data_tf31"),
    "tf32": new Array("hidden_field_label_tf32", "hidden_field_data_tf32"),
    "tf33": new Array("hidden_field_label_tf33", "hidden_field_data_tf33"),
    "tf34": new Array("hidden_field_label_tf34", "hidden_field_data_tf34"),
    "tf35": new Array("hidden_field_label_tf35", "hidden_field_data_tf35"),
    "tf36": new Array("hidden_field_label_tf36", "hidden_field_data_tf36"),
    "tf37": new Array("hidden_field_label_tf37", "hidden_field_data_tf37"),
    "tf38": new Array("hidden_field_label_tf38", "hidden_field_data_tf38"),
    "tf39": new Array("hidden_field_label_tf39", "hidden_field_data_tf39"),
    "cantidadintentos": new Array("hidden_field_label_cantidadintentos", "hidden_field_data_cantidadintentos"),
    "telefono": new Array("hidden_field_label_telefono", "hidden_field_data_telefono"),
    "estado": new Array("hidden_field_label_estado", "hidden_field_data_estado"),
    "indicadorexitoconforme": new Array("hidden_field_label_indicadorexitoconforme", "hidden_field_data_indicadorexitoconforme"),
    "motivo": new Array("hidden_field_label_motivo", "hidden_field_data_motivo"),
    "motivoc": new Array("hidden_field_label_motivoc", "hidden_field_data_motivoc"),
    "comentario": new Array("hidden_field_label_comentario", "hidden_field_data_comentario")
  };

  var ajax_read_only = {
    "contratonumero": "off",
    "nombreedv": "off",
    "supervisor": "off",
    "fechaventa": "off",
    "grupofechainauguracion": "off",
    "nombreasociaso": "off",
    "tipodocumento1": "off",
    "numerodocumento1": "off",
    "ubicacion": "off",
    "correopersonal1": "off",
    "correolaboral1": "off",
    "tf11": "off",
    "tf13": "off",
    "tf12": "off",
    "tf14": "off",
    "tf15": "off",
    "tf16": "off",
    "tf17": "off",
    "tf18": "off",
    "tf19": "off",
    "nombreasociado2": "off",
    "tipodocumento2": "off",
    "numerodocumento2": "off",
    "ubicacion2": "off",
    "correopersonal2": "off",
    "correolaboral2": "off",
    "tf21": "off",
    "tf22": "off",
    "tf23": "off",
    "tf24": "off",
    "tf25": "off",
    "tf26": "off",
    "tf27": "off",
    "tf28": "off",
    "tf29": "off",
    "nombreasociado3": "off",
    "tipodocumento3": "off",
    "numerodocumento3": "off",
    "ubicacion3": "off",
    "correopersonal3": "off",
    "correolaboral3": "off",
    "tf31": "off",
    "tf32": "off",
    "tf33": "off",
    "tf34": "off",
    "tf35": "off",
    "tf36": "off",
    "tf37": "off",
    "tf38": "off",
    "tf39": "off",
    "cantidadintentos": "off",
    "telefono": "off",
    "estado": "off",
    "indicadorexitoconforme": "off",
    "motivo": "off",
    "motivoc": "off",
    "comentario": "off"
  };
  var bRefreshTable = false;
  function scRefreshTable()
  {
    return false;
  }

  function scAjaxDetailValue(sIndex, sValue)
  {
    var aValue = new Array();
    aValue[0] = {"value" : sValue};
    if ("contratonumero" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("nombreedv" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("supervisor" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("fechaventa" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("grupofechainauguracion" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("nombreasociaso" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tipodocumento1" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("numerodocumento1" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("ubicacion" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("correopersonal1" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("correolaboral1" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf11" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf13" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf12" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf14" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf15" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf16" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf17" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf18" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf19" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("nombreasociado2" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tipodocumento2" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("numerodocumento2" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("ubicacion2" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("correopersonal2" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("correolaboral2" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf21" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf22" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf23" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf24" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf25" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf26" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf27" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf28" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf29" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("nombreasociado3" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tipodocumento3" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("numerodocumento3" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("ubicacion3" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("correopersonal3" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("correolaboral3" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf31" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf32" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf33" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf34" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf35" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf36" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf37" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf38" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tf39" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("cantidadintentos" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("telefono" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("estado" == sIndex)
    {
      scAjaxSetFieldRadio(sIndex, aValue, null, 1, null, "", false, true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("indicadorexitoconforme" == sIndex)
    {
      scAjaxSetFieldRadio(sIndex, aValue, null, 1, null, "", false, true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("motivo" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("motivoc" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("comentario" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    scAjaxSetFieldInnerHtml(sIndex, aValue);
  }
 </SCRIPT>
