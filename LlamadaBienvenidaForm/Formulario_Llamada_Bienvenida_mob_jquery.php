
function scJQGeneralAdd() {
  scLoadScInput('input:text.sc-js-input');
  scLoadScInput('input:password.sc-js-input');
  scLoadScInput('input:checkbox.sc-js-input');
  scLoadScInput('input:radio.sc-js-input');
  scLoadScInput('select.sc-js-input');
  scLoadScInput('textarea.sc-js-input');

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if ($("#id_ac_" + sField).length > 0) {
    if ($oField.hasClass("select2-hidden-accessible")) {
      if (false == scSetFocusOnField($oField)) {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
    else {
      if (false == scSetFocusOnField($oField)) {
        if (false == scSetFocusOnField($("#id_ac_" + sField))) {
          setTimeout(function() { scSetFocusOnField($("#id_ac_" + sField)); }, 500);
        }
      }
      else {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
  }
  else {
    setTimeout(function() { scSetFocusOnField($oField); }, 500);
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["contratonumero" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nombreedv" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["supervisor" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fechaventa" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["grupofechainauguracion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nombreasociaso" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipodocumento1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["numerodocumento1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ubicacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["correopersonal1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["correolaboral1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf11" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf13" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf12" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf14" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf15" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf16" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf17" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf18" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf19" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nombreasociado2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipodocumento2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["numerodocumento2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ubicacion2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["correopersonal2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["correolaboral2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf21" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf22" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf23" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf24" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf25" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf26" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf27" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf28" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf29" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nombreasociado3" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipodocumento3" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["numerodocumento3" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ubicacion3" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["correopersonal3" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["correolaboral3" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf31" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf32" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf33" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf34" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf35" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf36" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf37" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf38" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tf39" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cantidadintentos" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["telefono" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["indicadorexitoconforme" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["motivo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["motivoc" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["comentario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["contratonumero" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["contratonumero" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nombreedv" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nombreedv" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["supervisor" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["supervisor" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fechaventa" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fechaventa" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["grupofechainauguracion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["grupofechainauguracion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nombreasociaso" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nombreasociaso" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipodocumento1" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipodocumento1" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["numerodocumento1" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["numerodocumento1" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ubicacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ubicacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["correopersonal1" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["correopersonal1" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["correolaboral1" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["correolaboral1" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf11" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf11" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf13" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf13" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf12" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf12" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf14" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf14" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf15" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf15" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf16" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf16" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf17" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf17" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf18" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf18" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf19" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf19" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nombreasociado2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nombreasociado2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipodocumento2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipodocumento2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["numerodocumento2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["numerodocumento2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ubicacion2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ubicacion2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["correopersonal2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["correopersonal2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["correolaboral2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["correolaboral2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf21" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf21" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf22" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf22" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf23" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf23" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf24" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf24" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf25" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf25" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf26" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf26" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf27" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf27" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf28" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf28" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf29" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf29" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nombreasociado3" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nombreasociado3" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipodocumento3" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipodocumento3" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["numerodocumento3" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["numerodocumento3" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ubicacion3" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ubicacion3" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["correopersonal3" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["correopersonal3" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["correolaboral3" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["correolaboral3" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf31" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf31" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf32" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf32" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf33" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf33" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf34" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf34" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf35" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf35" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf36" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf36" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf37" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf37" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf38" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf38" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tf39" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tf39" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cantidadintentos" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cantidadintentos" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["telefono" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["telefono" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["estado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["indicadorexitoconforme" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["indicadorexitoconforme" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["motivo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["motivo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["motivoc" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["motivoc" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["comentario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["comentario" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("motivo" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("motivoc" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val() || scEventControl_data[sFieldName]["calculated"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_contratonumero' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_contratonumero_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_contratonumero_onfocus(this, iSeqRow) });
  $('#id_sc_field_telefono' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_telefono_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_telefono_onfocus(this, iSeqRow) });
  $('#id_sc_field_nombreedv' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_nombreedv_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_nombreedv_onfocus(this, iSeqRow) });
  $('#id_sc_field_supervisor' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_supervisor_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_supervisor_onfocus(this, iSeqRow) });
  $('#id_sc_field_fechaventa' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_fechaventa_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_fechaventa_onfocus(this, iSeqRow) });
  $('#id_sc_field_estado' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_estado_onblur(this, iSeqRow) })
                                    .bind('click', function() { sc_Formulario_Llamada_Bienvenida_estado_onclick(this, iSeqRow) })
                                    .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_comentario' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_comentario_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_comentario_onfocus(this, iSeqRow) });
  $('#id_sc_field_nombreasociaso' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_nombreasociaso_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_nombreasociaso_onfocus(this, iSeqRow) });
  $('#id_sc_field_nombreasociado2' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_nombreasociado2_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_nombreasociado2_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf11' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf11_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf11_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf12' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf12_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf12_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf13' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf13_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf13_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf14' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf14_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf14_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf15' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf15_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf15_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf16' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf16_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf16_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf17' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf17_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf17_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf18' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf18_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf18_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf19' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf19_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf19_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf21' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf21_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf21_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf22' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf22_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf22_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf23' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf23_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf23_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf24' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf24_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf24_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf25' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf25_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf25_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf26' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf26_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf26_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf27' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf27_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf27_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf28' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf28_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf28_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf29' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf29_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf29_onfocus(this, iSeqRow) });
  $('#id_sc_field_motivo' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_motivo_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_motivo_onfocus(this, iSeqRow) });
  $('#id_sc_field_motivoc' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_motivoc_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_motivoc_onfocus(this, iSeqRow) });
  $('#id_sc_field_nombreasociado3' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_nombreasociado3_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_nombreasociado3_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf31' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf31_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf31_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf32' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf32_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf32_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf33' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf33_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf33_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf34' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf34_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf34_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf35' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf35_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf35_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf36' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf36_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf36_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf37' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf37_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf37_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf39' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf39_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf39_onfocus(this, iSeqRow) });
  $('#id_sc_field_tf38' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tf38_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tf38_onfocus(this, iSeqRow) });
  $('#id_sc_field_indicadorexitoconforme' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_indicadorexitoconforme_onblur(this, iSeqRow) })
                                                    .bind('click', function() { sc_Formulario_Llamada_Bienvenida_indicadorexitoconforme_onclick(this, iSeqRow) })
                                                    .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_indicadorexitoconforme_onfocus(this, iSeqRow) });
  $('#id_sc_field_cantidadintentos' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_cantidadintentos_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_cantidadintentos_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipodocumento1' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tipodocumento1_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tipodocumento1_onfocus(this, iSeqRow) });
  $('#id_sc_field_numerodocumento1' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_numerodocumento1_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_numerodocumento1_onfocus(this, iSeqRow) });
  $('#id_sc_field_correopersonal1' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_correopersonal1_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_correopersonal1_onfocus(this, iSeqRow) });
  $('#id_sc_field_correolaboral1' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_correolaboral1_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_correolaboral1_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipodocumento2' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tipodocumento2_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tipodocumento2_onfocus(this, iSeqRow) });
  $('#id_sc_field_numerodocumento2' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_numerodocumento2_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_numerodocumento2_onfocus(this, iSeqRow) });
  $('#id_sc_field_correopersonal2' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_correopersonal2_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_correopersonal2_onfocus(this, iSeqRow) });
  $('#id_sc_field_correolaboral2' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_correolaboral2_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_correolaboral2_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipodocumento3' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_tipodocumento3_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_tipodocumento3_onfocus(this, iSeqRow) });
  $('#id_sc_field_numerodocumento3' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_numerodocumento3_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_numerodocumento3_onfocus(this, iSeqRow) });
  $('#id_sc_field_correopersonal3' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_correopersonal3_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_correopersonal3_onfocus(this, iSeqRow) });
  $('#id_sc_field_correolaboral3' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_correolaboral3_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_correolaboral3_onfocus(this, iSeqRow) });
  $('#id_sc_field_grupofechainauguracion' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_grupofechainauguracion_onblur(this, iSeqRow) })
                                                    .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_grupofechainauguracion_onfocus(this, iSeqRow) });
  $('#id_sc_field_ubicacion' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_ubicacion_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_ubicacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_ubicacion2' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_ubicacion2_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_ubicacion2_onfocus(this, iSeqRow) });
  $('#id_sc_field_ubicacion3' + iSeqRow).bind('blur', function() { sc_Formulario_Llamada_Bienvenida_ubicacion3_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_Formulario_Llamada_Bienvenida_ubicacion3_onfocus(this, iSeqRow) });
  $('.sc-ui-radio-estado' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-radio-indicadorexitoconforme' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
} // scJQEventsAdd

function sc_Formulario_Llamada_Bienvenida_contratonumero_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_contratonumero();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_contratonumero_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_telefono_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_telefono();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_telefono_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_nombreedv_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_nombreedv();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_nombreedv_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_supervisor_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_supervisor();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_supervisor_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_fechaventa_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_fechaventa();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_fechaventa_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_estado_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_estado();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_estado_onclick(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_event_estado_onclick();
}

function sc_Formulario_Llamada_Bienvenida_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_comentario_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_comentario();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_comentario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_nombreasociaso_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_nombreasociaso();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_nombreasociaso_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_nombreasociado2_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_nombreasociado2();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_nombreasociado2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf11_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf11();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf11_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf12_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf12();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf12_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf13_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf13();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf13_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf14_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf14();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf14_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf15_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf15();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf15_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf16_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf16();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf16_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf17_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf17();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf17_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf18_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf18();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf18_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf19_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf19();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf19_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf21_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf21();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf21_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf22_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf22();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf22_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf23_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf23();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf23_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf24_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf24();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf24_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf25_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf25();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf25_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf26_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf26();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf26_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf27_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf27();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf27_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf28_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf28();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf28_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf29_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf29();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf29_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_motivo_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_motivo();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_motivo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_motivoc_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_motivoc();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_motivoc_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_nombreasociado3_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_nombreasociado3();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_nombreasociado3_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf31_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf31();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf31_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf32_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf32();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf32_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf33_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf33();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf33_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf34_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf34();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf34_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf35_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf35();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf35_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf36_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf36();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf36_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf37_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf37();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf37_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf39_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf39();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf39_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf38_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tf38();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tf38_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_indicadorexitoconforme_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_indicadorexitoconforme();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_indicadorexitoconforme_onclick(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_event_indicadorexitoconforme_onclick();
}

function sc_Formulario_Llamada_Bienvenida_indicadorexitoconforme_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_cantidadintentos_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_cantidadintentos();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_cantidadintentos_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tipodocumento1_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tipodocumento1();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tipodocumento1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_numerodocumento1_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_numerodocumento1();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_numerodocumento1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_correopersonal1_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_correopersonal1();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_correopersonal1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_correolaboral1_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_correolaboral1();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_correolaboral1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tipodocumento2_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tipodocumento2();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tipodocumento2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_numerodocumento2_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_numerodocumento2();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_numerodocumento2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_correopersonal2_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_correopersonal2();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_correopersonal2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_correolaboral2_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_correolaboral2();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_correolaboral2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tipodocumento3_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_tipodocumento3();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_tipodocumento3_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_numerodocumento3_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_numerodocumento3();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_numerodocumento3_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_correopersonal3_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_correopersonal3();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_correopersonal3_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_correolaboral3_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_correolaboral3();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_correolaboral3_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_grupofechainauguracion_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_grupofechainauguracion();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_grupofechainauguracion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_ubicacion_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_ubicacion();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_ubicacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_ubicacion2_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_ubicacion2();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_ubicacion2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_Formulario_Llamada_Bienvenida_ubicacion3_onblur(oThis, iSeqRow) {
  do_ajax_Formulario_Llamada_Bienvenida_mob_validate_ubicacion3();
  scCssBlur(oThis);
}

function sc_Formulario_Llamada_Bienvenida_ubicacion3_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
	if ("1" == block) {
		displayChange_block_1(status);
	}
	if ("2" == block) {
		displayChange_block_2(status);
	}
	if ("3" == block) {
		displayChange_block_3(status);
	}
	if ("4" == block) {
		displayChange_block_4(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("contratonumero", "", status);
	displayChange_field("nombreedv", "", status);
	displayChange_field("supervisor", "", status);
	displayChange_field("fechaventa", "", status);
	displayChange_field("grupofechainauguracion", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("nombreasociaso", "", status);
	displayChange_field("tipodocumento1", "", status);
	displayChange_field("numerodocumento1", "", status);
	displayChange_field("ubicacion", "", status);
	displayChange_field("correopersonal1", "", status);
	displayChange_field("correolaboral1", "", status);
	displayChange_field("tf11", "", status);
	displayChange_field("tf13", "", status);
	displayChange_field("tf12", "", status);
	displayChange_field("tf14", "", status);
	displayChange_field("tf15", "", status);
	displayChange_field("tf16", "", status);
	displayChange_field("tf17", "", status);
	displayChange_field("tf18", "", status);
	displayChange_field("tf19", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("nombreasociado2", "", status);
	displayChange_field("tipodocumento2", "", status);
	displayChange_field("numerodocumento2", "", status);
	displayChange_field("ubicacion2", "", status);
	displayChange_field("correopersonal2", "", status);
	displayChange_field("correolaboral2", "", status);
	displayChange_field("tf21", "", status);
	displayChange_field("tf22", "", status);
	displayChange_field("tf23", "", status);
	displayChange_field("tf24", "", status);
	displayChange_field("tf25", "", status);
	displayChange_field("tf26", "", status);
	displayChange_field("tf27", "", status);
	displayChange_field("tf28", "", status);
	displayChange_field("tf29", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("nombreasociado3", "", status);
	displayChange_field("tipodocumento3", "", status);
	displayChange_field("numerodocumento3", "", status);
	displayChange_field("ubicacion3", "", status);
	displayChange_field("correopersonal3", "", status);
	displayChange_field("correolaboral3", "", status);
	displayChange_field("tf31", "", status);
	displayChange_field("tf32", "", status);
	displayChange_field("tf33", "", status);
	displayChange_field("tf34", "", status);
	displayChange_field("tf35", "", status);
	displayChange_field("tf36", "", status);
	displayChange_field("tf37", "", status);
	displayChange_field("tf38", "", status);
	displayChange_field("tf39", "", status);
}

function displayChange_block_4(status) {
	displayChange_field("cantidadintentos", "", status);
	displayChange_field("telefono", "", status);
	displayChange_field("estado", "", status);
	displayChange_field("indicadorexitoconforme", "", status);
	displayChange_field("motivo", "", status);
	displayChange_field("motivoc", "", status);
	displayChange_field("comentario", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_contratonumero(row, status);
	displayChange_field_nombreedv(row, status);
	displayChange_field_supervisor(row, status);
	displayChange_field_fechaventa(row, status);
	displayChange_field_grupofechainauguracion(row, status);
	displayChange_field_nombreasociaso(row, status);
	displayChange_field_tipodocumento1(row, status);
	displayChange_field_numerodocumento1(row, status);
	displayChange_field_ubicacion(row, status);
	displayChange_field_correopersonal1(row, status);
	displayChange_field_correolaboral1(row, status);
	displayChange_field_tf11(row, status);
	displayChange_field_tf13(row, status);
	displayChange_field_tf12(row, status);
	displayChange_field_tf14(row, status);
	displayChange_field_tf15(row, status);
	displayChange_field_tf16(row, status);
	displayChange_field_tf17(row, status);
	displayChange_field_tf18(row, status);
	displayChange_field_tf19(row, status);
	displayChange_field_nombreasociado2(row, status);
	displayChange_field_tipodocumento2(row, status);
	displayChange_field_numerodocumento2(row, status);
	displayChange_field_ubicacion2(row, status);
	displayChange_field_correopersonal2(row, status);
	displayChange_field_correolaboral2(row, status);
	displayChange_field_tf21(row, status);
	displayChange_field_tf22(row, status);
	displayChange_field_tf23(row, status);
	displayChange_field_tf24(row, status);
	displayChange_field_tf25(row, status);
	displayChange_field_tf26(row, status);
	displayChange_field_tf27(row, status);
	displayChange_field_tf28(row, status);
	displayChange_field_tf29(row, status);
	displayChange_field_nombreasociado3(row, status);
	displayChange_field_tipodocumento3(row, status);
	displayChange_field_numerodocumento3(row, status);
	displayChange_field_ubicacion3(row, status);
	displayChange_field_correopersonal3(row, status);
	displayChange_field_correolaboral3(row, status);
	displayChange_field_tf31(row, status);
	displayChange_field_tf32(row, status);
	displayChange_field_tf33(row, status);
	displayChange_field_tf34(row, status);
	displayChange_field_tf35(row, status);
	displayChange_field_tf36(row, status);
	displayChange_field_tf37(row, status);
	displayChange_field_tf38(row, status);
	displayChange_field_tf39(row, status);
	displayChange_field_cantidadintentos(row, status);
	displayChange_field_telefono(row, status);
	displayChange_field_estado(row, status);
	displayChange_field_indicadorexitoconforme(row, status);
	displayChange_field_motivo(row, status);
	displayChange_field_motivoc(row, status);
	displayChange_field_comentario(row, status);
}

function displayChange_field(field, row, status) {
	if ("contratonumero" == field) {
		displayChange_field_contratonumero(row, status);
	}
	if ("nombreedv" == field) {
		displayChange_field_nombreedv(row, status);
	}
	if ("supervisor" == field) {
		displayChange_field_supervisor(row, status);
	}
	if ("fechaventa" == field) {
		displayChange_field_fechaventa(row, status);
	}
	if ("grupofechainauguracion" == field) {
		displayChange_field_grupofechainauguracion(row, status);
	}
	if ("nombreasociaso" == field) {
		displayChange_field_nombreasociaso(row, status);
	}
	if ("tipodocumento1" == field) {
		displayChange_field_tipodocumento1(row, status);
	}
	if ("numerodocumento1" == field) {
		displayChange_field_numerodocumento1(row, status);
	}
	if ("ubicacion" == field) {
		displayChange_field_ubicacion(row, status);
	}
	if ("correopersonal1" == field) {
		displayChange_field_correopersonal1(row, status);
	}
	if ("correolaboral1" == field) {
		displayChange_field_correolaboral1(row, status);
	}
	if ("tf11" == field) {
		displayChange_field_tf11(row, status);
	}
	if ("tf13" == field) {
		displayChange_field_tf13(row, status);
	}
	if ("tf12" == field) {
		displayChange_field_tf12(row, status);
	}
	if ("tf14" == field) {
		displayChange_field_tf14(row, status);
	}
	if ("tf15" == field) {
		displayChange_field_tf15(row, status);
	}
	if ("tf16" == field) {
		displayChange_field_tf16(row, status);
	}
	if ("tf17" == field) {
		displayChange_field_tf17(row, status);
	}
	if ("tf18" == field) {
		displayChange_field_tf18(row, status);
	}
	if ("tf19" == field) {
		displayChange_field_tf19(row, status);
	}
	if ("nombreasociado2" == field) {
		displayChange_field_nombreasociado2(row, status);
	}
	if ("tipodocumento2" == field) {
		displayChange_field_tipodocumento2(row, status);
	}
	if ("numerodocumento2" == field) {
		displayChange_field_numerodocumento2(row, status);
	}
	if ("ubicacion2" == field) {
		displayChange_field_ubicacion2(row, status);
	}
	if ("correopersonal2" == field) {
		displayChange_field_correopersonal2(row, status);
	}
	if ("correolaboral2" == field) {
		displayChange_field_correolaboral2(row, status);
	}
	if ("tf21" == field) {
		displayChange_field_tf21(row, status);
	}
	if ("tf22" == field) {
		displayChange_field_tf22(row, status);
	}
	if ("tf23" == field) {
		displayChange_field_tf23(row, status);
	}
	if ("tf24" == field) {
		displayChange_field_tf24(row, status);
	}
	if ("tf25" == field) {
		displayChange_field_tf25(row, status);
	}
	if ("tf26" == field) {
		displayChange_field_tf26(row, status);
	}
	if ("tf27" == field) {
		displayChange_field_tf27(row, status);
	}
	if ("tf28" == field) {
		displayChange_field_tf28(row, status);
	}
	if ("tf29" == field) {
		displayChange_field_tf29(row, status);
	}
	if ("nombreasociado3" == field) {
		displayChange_field_nombreasociado3(row, status);
	}
	if ("tipodocumento3" == field) {
		displayChange_field_tipodocumento3(row, status);
	}
	if ("numerodocumento3" == field) {
		displayChange_field_numerodocumento3(row, status);
	}
	if ("ubicacion3" == field) {
		displayChange_field_ubicacion3(row, status);
	}
	if ("correopersonal3" == field) {
		displayChange_field_correopersonal3(row, status);
	}
	if ("correolaboral3" == field) {
		displayChange_field_correolaboral3(row, status);
	}
	if ("tf31" == field) {
		displayChange_field_tf31(row, status);
	}
	if ("tf32" == field) {
		displayChange_field_tf32(row, status);
	}
	if ("tf33" == field) {
		displayChange_field_tf33(row, status);
	}
	if ("tf34" == field) {
		displayChange_field_tf34(row, status);
	}
	if ("tf35" == field) {
		displayChange_field_tf35(row, status);
	}
	if ("tf36" == field) {
		displayChange_field_tf36(row, status);
	}
	if ("tf37" == field) {
		displayChange_field_tf37(row, status);
	}
	if ("tf38" == field) {
		displayChange_field_tf38(row, status);
	}
	if ("tf39" == field) {
		displayChange_field_tf39(row, status);
	}
	if ("cantidadintentos" == field) {
		displayChange_field_cantidadintentos(row, status);
	}
	if ("telefono" == field) {
		displayChange_field_telefono(row, status);
	}
	if ("estado" == field) {
		displayChange_field_estado(row, status);
	}
	if ("indicadorexitoconforme" == field) {
		displayChange_field_indicadorexitoconforme(row, status);
	}
	if ("motivo" == field) {
		displayChange_field_motivo(row, status);
	}
	if ("motivoc" == field) {
		displayChange_field_motivoc(row, status);
	}
	if ("comentario" == field) {
		displayChange_field_comentario(row, status);
	}
}

function displayChange_field_contratonumero(row, status) {
}

function displayChange_field_nombreedv(row, status) {
}

function displayChange_field_supervisor(row, status) {
}

function displayChange_field_fechaventa(row, status) {
}

function displayChange_field_grupofechainauguracion(row, status) {
}

function displayChange_field_nombreasociaso(row, status) {
}

function displayChange_field_tipodocumento1(row, status) {
}

function displayChange_field_numerodocumento1(row, status) {
}

function displayChange_field_ubicacion(row, status) {
}

function displayChange_field_correopersonal1(row, status) {
}

function displayChange_field_correolaboral1(row, status) {
}

function displayChange_field_tf11(row, status) {
}

function displayChange_field_tf13(row, status) {
}

function displayChange_field_tf12(row, status) {
}

function displayChange_field_tf14(row, status) {
}

function displayChange_field_tf15(row, status) {
}

function displayChange_field_tf16(row, status) {
}

function displayChange_field_tf17(row, status) {
}

function displayChange_field_tf18(row, status) {
}

function displayChange_field_tf19(row, status) {
}

function displayChange_field_nombreasociado2(row, status) {
}

function displayChange_field_tipodocumento2(row, status) {
}

function displayChange_field_numerodocumento2(row, status) {
}

function displayChange_field_ubicacion2(row, status) {
}

function displayChange_field_correopersonal2(row, status) {
}

function displayChange_field_correolaboral2(row, status) {
}

function displayChange_field_tf21(row, status) {
}

function displayChange_field_tf22(row, status) {
}

function displayChange_field_tf23(row, status) {
}

function displayChange_field_tf24(row, status) {
}

function displayChange_field_tf25(row, status) {
}

function displayChange_field_tf26(row, status) {
}

function displayChange_field_tf27(row, status) {
}

function displayChange_field_tf28(row, status) {
}

function displayChange_field_tf29(row, status) {
}

function displayChange_field_nombreasociado3(row, status) {
}

function displayChange_field_tipodocumento3(row, status) {
}

function displayChange_field_numerodocumento3(row, status) {
}

function displayChange_field_ubicacion3(row, status) {
}

function displayChange_field_correopersonal3(row, status) {
}

function displayChange_field_correolaboral3(row, status) {
}

function displayChange_field_tf31(row, status) {
}

function displayChange_field_tf32(row, status) {
}

function displayChange_field_tf33(row, status) {
}

function displayChange_field_tf34(row, status) {
}

function displayChange_field_tf35(row, status) {
}

function displayChange_field_tf36(row, status) {
}

function displayChange_field_tf37(row, status) {
}

function displayChange_field_tf38(row, status) {
}

function displayChange_field_tf39(row, status) {
}

function displayChange_field_cantidadintentos(row, status) {
}

function displayChange_field_telefono(row, status) {
}

function displayChange_field_estado(row, status) {
}

function displayChange_field_indicadorexitoconforme(row, status) {
}

function displayChange_field_motivo(row, status) {
}

function displayChange_field_motivoc(row, status) {
}

function displayChange_field_comentario(row, status) {
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_Formulario_Llamada_Bienvenida_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(41);
		}
	}
}
function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd

var api_cache_requests = [];
function ajax_check_file(img_name, field  ,t, p, p_cache, iSeqRow, hasRun, img_before){
    setTimeout(function(){
        if(img_name == '') return;
        iSeqRow= iSeqRow !== undefined && iSeqRow !== null ? iSeqRow : '';
        var hasVar = p.indexOf('_@NM@_') > -1 || p_cache.indexOf('_@NM@_') > -1 ? true : false;

        p = p.split('_@NM@_');
        $.each(p, function(i,v){
            try{
                p[i] = $('[name='+v+iSeqRow+']').val();
            }
            catch(err){
                p[i] = v;
            }
        });
        p = p.join('');

        p_cache = p_cache.split('_@NM@_');
        $.each(p_cache, function(i,v){
            try{
                p_cache[i] = $('[name='+v+iSeqRow+']').val();
            }
            catch(err){
                p_cache[i] = v;
            }
        });
        p_cache = p_cache.join('');

        img_before = img_before !== undefined ? img_before : $(t).attr('src');
        var str_key_cache = '<?php echo $this->Ini->sc_page; ?>' + img_name+field+p+p_cache;
        if(api_cache_requests[ str_key_cache ] !== undefined && api_cache_requests[ str_key_cache ] !== null){
            if(api_cache_requests[ str_key_cache ] != false){
                do_ajax_check_file(api_cache_requests[ str_key_cache ], field  ,t, iSeqRow);
            }
            return;
        }
        //scAjaxProcOn();
        $(t).attr('src', '<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif');
        api_cache_requests[ str_key_cache ] = false;
        var rs =$.ajax({
                    type: "POST",
                    url: 'index.php?script_case_init=<?php echo $this->Ini->sc_page; ?>',
                    async: true,
                    data:'nmgp_opcao=ajax_check_file&AjaxCheckImg=' + encodeURI(img_name) +'&rsargs='+ field + '&p=' + p + '&p_cache=' + p_cache,
                    success: function (rs) {
                        if(rs.indexOf('</span>') != -1){
                            rs = rs.substr(rs.indexOf('</span>') + 7);
                        }
                        if(rs.indexOf('/') != -1 && rs.indexOf('/') != 0){
                            rs = rs.substr(rs.indexOf('/'));
                        }
                        rs = sc_trim(rs);

                        // if(rs == 0 && hasVar && hasRun === undefined){
                        //     delete window.api_cache_requests[ str_key_cache ];
                        //     ajax_check_file(img_name, field  ,t, p, p_cache, iSeqRow, 1, img_before);
                        //     return;
                        // }
                        window.api_cache_requests[ str_key_cache ] = rs;
                        do_ajax_check_file(rs, field  ,t, iSeqRow)
                        if(rs == 0){
                            delete window.api_cache_requests[ str_key_cache ];

                           // $(t).attr('src',img_before);
                            do_ajax_check_file(img_before+'_@@NM@@_' + img_before, field  ,t, iSeqRow)

                        }


                    }
        });
    },100);
}

function do_ajax_check_file(rs, field  ,t, iSeqRow){
    if (rs != 0) {
        rs_split = rs.split('_@@NM@@_');
        rs_orig = rs_split[0];
        rs2 = rs_split[1];
        try{
            if(!$(t).is('img')){

                if($('#id_read_on_'+field+iSeqRow).length > 0 ){
                                    var usa_read_only = false;

                switch(field){

                }
                     if(usa_read_only && $('a',$('#id_read_on_'+field+iSeqRow)).length == 0){
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'Formulario_Llamada_Bienvenida_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
                     }
                }
                if($('#id_ajax_doc_'+field+iSeqRow+' a').length > 0){
                    var target = $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href').split(',');
                    target[1] = "'"+rs2+"'";
                    $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href', target.join(','));
                }else{
                    var target = $(t).attr('href').split(',');
                     target[1] = "'"+rs2+"'";
                     $(t).attr('href', target.join(','));
                }
            }else{
                $(t).attr('src', rs2);
                $(t).css('display', '');
                if($('#id_ajax_doc_'+field+iSeqRow+' a').length > 0){
                    var target = $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href').split(',');
                    target[1] = "'"+rs2+"'";
                    $(t).attr('href', target.join(','));
                }else{
                     var t_link = $(t).parent('a');
                     var target = $(t_link).attr('href').split(',');
                     target[0] = "javascript:nm_mostra_img('"+rs_orig+"'";
                     $(t_link).attr('href', target.join(','));
                }

            }
            eval("window.var_ajax_img_"+field+iSeqRow+" = '"+rs_orig+"';");

        } catch(err){
                        eval("window.var_ajax_img_"+field+iSeqRow+" = '"+rs_orig+"';");

        }
    }
   /* hasFalseCacheRequest = false;
    $.each(api_cache_requests, function(i,v){
        if(v == false){
            hasFalseCacheRequest = true;
        }
    });
    if(hasFalseCacheRequest == false){
        scAjaxProcOff();
    }*/
}

$(document).ready(function(){
});
function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

function scGetFileExtension(fileName)
{
    fileNameParts = fileName.split(".");

    if (1 === fileNameParts.length || (2 === fileNameParts.length && "" == fileNameParts[0])) {
        return "";
    }

    return fileNameParts.pop().toLowerCase();
}

function scFormatExtensionSizeErrorMsg(errorMsg)
{
    var msgInfo = errorMsg.split("||"), returnMsg = "";

    if ("err_size" == msgInfo[0]) {
        returnMsg = "<?php echo $this->Ini->Nm_lang['lang_errm_file_size'] ?>. <?php echo $this->Ini->Nm_lang['lang_errm_file_size_extension'] ?>".replace("{SC_EXTENSION}", msgInfo[1]).replace("{SC_LIMIT}", msgInfo[2]);
    } else if ("err_extension" == msgInfo[0]) {
        returnMsg = "<?php echo $this->Ini->Nm_lang['lang_errm_file_invl'] ?>";
    }

    return returnMsg;
}

