<?php
//
class Formulario_Llamada_Bienvenida_apl
{
   var $has_where_params = false;
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $formatado = false;
   var $use_100perc_fields = false;
   var $classes_100perc_fields = array();
   var $NM_ajax_flag    = false;
   var $NM_ajax_opcao   = '';
   var $NM_ajax_retorno = '';
   var $NM_ajax_info    = array('result'            => '',
                                'param'             => array(),
                                'autoComp'          => '',
                                'rsSize'            => '',
                                'msgDisplay'        => '',
                                'errList'           => array(),
                                'fldList'           => array(),
                                'varList'           => array(),
                                'focus'             => '',
                                'navStatus'         => array(),
                                'redir'             => array(),
                                'blockDisplay'      => array(),
                                'fieldDisplay'      => array(),
                                'fieldLabel'        => array(),
                                'readOnly'          => array(),
                                'btnVars'           => array(),
                                'ajaxAlert'         => array(),
                                'ajaxMessage'       => array(),
                                'ajaxJavascript'    => array(),
                                'buttonDisplay'     => array(),
                                'buttonDisplayVert' => array(),
                                'calendarReload'    => false,
                                'quickSearchRes'    => false,
                                'displayMsg'        => false,
                                'displayMsgTxt'     => '',
                                'dyn_search'        => array(),
                                'empty_filter'      => '',
                                'event_field'       => '',
                                'fieldsWithErrors'  => array(),
                               );
   var $NM_ajax_force_values = false;
   var $Nav_permite_ava     = true;
   var $Nav_permite_ret     = true;
   var $Apl_com_erro        = false;
   var $app_is_initializing = false;
   var $Ini;
   var $Erro;
   var $Db;
   var $contratonumero;
   var $telefono;
   var $nombreedv;
   var $supervisor;
   var $fechaventa;
   var $estado;
   var $comentario;
   var $contratoid;
   var $nombreasociaso;
   var $nombreasociado2;
   var $tf11;
   var $tf12;
   var $tf13;
   var $tf14;
   var $tf15;
   var $tf16;
   var $tf17;
   var $tf18;
   var $tf19;
   var $tf21;
   var $tf22;
   var $tf23;
   var $tf24;
   var $tf25;
   var $tf26;
   var $tf27;
   var $tf28;
   var $tf29;
   var $motivo;
   var $motivo_1;
   var $motivoc;
   var $motivoc_1;
   var $nombreasociado3;
   var $tf31;
   var $tf32;
   var $tf33;
   var $tf34;
   var $tf35;
   var $tf36;
   var $tf37;
   var $tf39;
   var $tf38;
   var $indicadorexitoconforme;
   var $cantidadintentos;
   var $tipodocumento1;
   var $numerodocumento1;
   var $correopersonal1;
   var $correolaboral1;
   var $tipodocumento2;
   var $numerodocumento2;
   var $correopersonal2;
   var $correolaboral2;
   var $tipodocumento3;
   var $numerodocumento3;
   var $correopersonal3;
   var $correolaboral3;
   var $grupofechainauguracion;
   var $ubicacion;
   var $ubicacion2;
   var $ubicacion3;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $nmgp_clone;
   var $nmgp_return_img = array();
   var $nmgp_dados_form = array();
   var $nmgp_dados_select = array();
   var $nm_location;
   var $nm_flag_iframe;
   var $nm_flag_saida_novo;
   var $nmgp_botoes = array();
   var $nmgp_url_saida;
   var $nmgp_form_show;
   var $nmgp_form_empty;
   var $nmgp_cmp_readonly = array();
   var $nmgp_cmp_hidden = array();
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = false;
   var $Grid_editavel  = false;
   var $url_webhelp = '';
   var $nm_todas_criticas;
   var $Campos_Mens_erro;
   var $nm_new_label = array();
   var $record_insert_ok = false;
   var $record_delete_ok = false;
//
//----- 
   function ini_controle()
   {
        global $nm_url_saida, $teste_validade, $script_case_init, 
            $glo_senha_protect, $bok, $nm_apl_dependente, $nm_form_submit, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup, $nmgp_redir;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['cantidadintentos']))
          {
              $this->cantidadintentos = $this->NM_ajax_info['param']['cantidadintentos'];
          }
          if (isset($this->NM_ajax_info['param']['comentario']))
          {
              $this->comentario = $this->NM_ajax_info['param']['comentario'];
          }
          if (isset($this->NM_ajax_info['param']['contratonumero']))
          {
              $this->contratonumero = $this->NM_ajax_info['param']['contratonumero'];
          }
          if (isset($this->NM_ajax_info['param']['correolaboral1']))
          {
              $this->correolaboral1 = $this->NM_ajax_info['param']['correolaboral1'];
          }
          if (isset($this->NM_ajax_info['param']['correolaboral2']))
          {
              $this->correolaboral2 = $this->NM_ajax_info['param']['correolaboral2'];
          }
          if (isset($this->NM_ajax_info['param']['correolaboral3']))
          {
              $this->correolaboral3 = $this->NM_ajax_info['param']['correolaboral3'];
          }
          if (isset($this->NM_ajax_info['param']['correopersonal1']))
          {
              $this->correopersonal1 = $this->NM_ajax_info['param']['correopersonal1'];
          }
          if (isset($this->NM_ajax_info['param']['correopersonal2']))
          {
              $this->correopersonal2 = $this->NM_ajax_info['param']['correopersonal2'];
          }
          if (isset($this->NM_ajax_info['param']['correopersonal3']))
          {
              $this->correopersonal3 = $this->NM_ajax_info['param']['correopersonal3'];
          }
          if (isset($this->NM_ajax_info['param']['estado']))
          {
              $this->estado = $this->NM_ajax_info['param']['estado'];
          }
          if (isset($this->NM_ajax_info['param']['fechaventa']))
          {
              $this->fechaventa = $this->NM_ajax_info['param']['fechaventa'];
          }
          if (isset($this->NM_ajax_info['param']['grupofechainauguracion']))
          {
              $this->grupofechainauguracion = $this->NM_ajax_info['param']['grupofechainauguracion'];
          }
          if (isset($this->NM_ajax_info['param']['indicadorexitoconforme']))
          {
              $this->indicadorexitoconforme = $this->NM_ajax_info['param']['indicadorexitoconforme'];
          }
          if (isset($this->NM_ajax_info['param']['motivo']))
          {
              $this->motivo = $this->NM_ajax_info['param']['motivo'];
          }
          if (isset($this->NM_ajax_info['param']['motivoc']))
          {
              $this->motivoc = $this->NM_ajax_info['param']['motivoc'];
          }
          if (isset($this->NM_ajax_info['param']['nm_form_submit']))
          {
              $this->nm_form_submit = $this->NM_ajax_info['param']['nm_form_submit'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ancora']))
          {
              $this->nmgp_ancora = $this->NM_ajax_info['param']['nmgp_ancora'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_dyn_search']))
          {
              $this->nmgp_arg_dyn_search = $this->NM_ajax_info['param']['nmgp_arg_dyn_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_num_form']))
          {
              $this->nmgp_num_form = $this->NM_ajax_info['param']['nmgp_num_form'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_opcao']))
          {
              $this->nmgp_opcao = $this->NM_ajax_info['param']['nmgp_opcao'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ordem']))
          {
              $this->nmgp_ordem = $this->NM_ajax_info['param']['nmgp_ordem'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_parms']))
          {
              $this->nmgp_parms = $this->NM_ajax_info['param']['nmgp_parms'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['nombreasociado2']))
          {
              $this->nombreasociado2 = $this->NM_ajax_info['param']['nombreasociado2'];
          }
          if (isset($this->NM_ajax_info['param']['nombreasociado3']))
          {
              $this->nombreasociado3 = $this->NM_ajax_info['param']['nombreasociado3'];
          }
          if (isset($this->NM_ajax_info['param']['nombreasociaso']))
          {
              $this->nombreasociaso = $this->NM_ajax_info['param']['nombreasociaso'];
          }
          if (isset($this->NM_ajax_info['param']['nombreedv']))
          {
              $this->nombreedv = $this->NM_ajax_info['param']['nombreedv'];
          }
          if (isset($this->NM_ajax_info['param']['numerodocumento1']))
          {
              $this->numerodocumento1 = $this->NM_ajax_info['param']['numerodocumento1'];
          }
          if (isset($this->NM_ajax_info['param']['numerodocumento2']))
          {
              $this->numerodocumento2 = $this->NM_ajax_info['param']['numerodocumento2'];
          }
          if (isset($this->NM_ajax_info['param']['numerodocumento3']))
          {
              $this->numerodocumento3 = $this->NM_ajax_info['param']['numerodocumento3'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['supervisor']))
          {
              $this->supervisor = $this->NM_ajax_info['param']['supervisor'];
          }
          if (isset($this->NM_ajax_info['param']['telefono']))
          {
              $this->telefono = $this->NM_ajax_info['param']['telefono'];
          }
          if (isset($this->NM_ajax_info['param']['tf11']))
          {
              $this->tf11 = $this->NM_ajax_info['param']['tf11'];
          }
          if (isset($this->NM_ajax_info['param']['tf12']))
          {
              $this->tf12 = $this->NM_ajax_info['param']['tf12'];
          }
          if (isset($this->NM_ajax_info['param']['tf13']))
          {
              $this->tf13 = $this->NM_ajax_info['param']['tf13'];
          }
          if (isset($this->NM_ajax_info['param']['tf14']))
          {
              $this->tf14 = $this->NM_ajax_info['param']['tf14'];
          }
          if (isset($this->NM_ajax_info['param']['tf15']))
          {
              $this->tf15 = $this->NM_ajax_info['param']['tf15'];
          }
          if (isset($this->NM_ajax_info['param']['tf16']))
          {
              $this->tf16 = $this->NM_ajax_info['param']['tf16'];
          }
          if (isset($this->NM_ajax_info['param']['tf17']))
          {
              $this->tf17 = $this->NM_ajax_info['param']['tf17'];
          }
          if (isset($this->NM_ajax_info['param']['tf18']))
          {
              $this->tf18 = $this->NM_ajax_info['param']['tf18'];
          }
          if (isset($this->NM_ajax_info['param']['tf19']))
          {
              $this->tf19 = $this->NM_ajax_info['param']['tf19'];
          }
          if (isset($this->NM_ajax_info['param']['tf21']))
          {
              $this->tf21 = $this->NM_ajax_info['param']['tf21'];
          }
          if (isset($this->NM_ajax_info['param']['tf22']))
          {
              $this->tf22 = $this->NM_ajax_info['param']['tf22'];
          }
          if (isset($this->NM_ajax_info['param']['tf23']))
          {
              $this->tf23 = $this->NM_ajax_info['param']['tf23'];
          }
          if (isset($this->NM_ajax_info['param']['tf24']))
          {
              $this->tf24 = $this->NM_ajax_info['param']['tf24'];
          }
          if (isset($this->NM_ajax_info['param']['tf25']))
          {
              $this->tf25 = $this->NM_ajax_info['param']['tf25'];
          }
          if (isset($this->NM_ajax_info['param']['tf26']))
          {
              $this->tf26 = $this->NM_ajax_info['param']['tf26'];
          }
          if (isset($this->NM_ajax_info['param']['tf27']))
          {
              $this->tf27 = $this->NM_ajax_info['param']['tf27'];
          }
          if (isset($this->NM_ajax_info['param']['tf28']))
          {
              $this->tf28 = $this->NM_ajax_info['param']['tf28'];
          }
          if (isset($this->NM_ajax_info['param']['tf29']))
          {
              $this->tf29 = $this->NM_ajax_info['param']['tf29'];
          }
          if (isset($this->NM_ajax_info['param']['tf31']))
          {
              $this->tf31 = $this->NM_ajax_info['param']['tf31'];
          }
          if (isset($this->NM_ajax_info['param']['tf32']))
          {
              $this->tf32 = $this->NM_ajax_info['param']['tf32'];
          }
          if (isset($this->NM_ajax_info['param']['tf33']))
          {
              $this->tf33 = $this->NM_ajax_info['param']['tf33'];
          }
          if (isset($this->NM_ajax_info['param']['tf34']))
          {
              $this->tf34 = $this->NM_ajax_info['param']['tf34'];
          }
          if (isset($this->NM_ajax_info['param']['tf35']))
          {
              $this->tf35 = $this->NM_ajax_info['param']['tf35'];
          }
          if (isset($this->NM_ajax_info['param']['tf36']))
          {
              $this->tf36 = $this->NM_ajax_info['param']['tf36'];
          }
          if (isset($this->NM_ajax_info['param']['tf37']))
          {
              $this->tf37 = $this->NM_ajax_info['param']['tf37'];
          }
          if (isset($this->NM_ajax_info['param']['tf38']))
          {
              $this->tf38 = $this->NM_ajax_info['param']['tf38'];
          }
          if (isset($this->NM_ajax_info['param']['tf39']))
          {
              $this->tf39 = $this->NM_ajax_info['param']['tf39'];
          }
          if (isset($this->NM_ajax_info['param']['tipodocumento1']))
          {
              $this->tipodocumento1 = $this->NM_ajax_info['param']['tipodocumento1'];
          }
          if (isset($this->NM_ajax_info['param']['tipodocumento2']))
          {
              $this->tipodocumento2 = $this->NM_ajax_info['param']['tipodocumento2'];
          }
          if (isset($this->NM_ajax_info['param']['tipodocumento3']))
          {
              $this->tipodocumento3 = $this->NM_ajax_info['param']['tipodocumento3'];
          }
          if (isset($this->NM_ajax_info['param']['ubicacion']))
          {
              $this->ubicacion = $this->NM_ajax_info['param']['ubicacion'];
          }
          if (isset($this->NM_ajax_info['param']['ubicacion2']))
          {
              $this->ubicacion2 = $this->NM_ajax_info['param']['ubicacion2'];
          }
          if (isset($this->NM_ajax_info['param']['ubicacion3']))
          {
              $this->ubicacion3 = $this->NM_ajax_info['param']['ubicacion3'];
          }
          if (isset($this->nmgp_refresh_fields))
          {
              $this->nmgp_refresh_fields = explode('_#fld#_', $this->nmgp_refresh_fields);
              $this->nmgp_opcao          = 'recarga';
          }
          if (!isset($this->nmgp_refresh_row))
          {
              $this->nmgp_refresh_row = '';
          }
      }

      $this->sc_conv_var = array();
      if (!empty($_FILES))
      {
          foreach ($_FILES as $nmgp_campo => $nmgp_valores)
          {
               if (isset($this->sc_conv_var[$nmgp_campo]))
               {
                   $nmgp_campo = $this->sc_conv_var[$nmgp_campo];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_campo)]))
               {
                   $nmgp_campo = $this->sc_conv_var[strtolower($nmgp_campo)];
               }
               $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
               $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
               $this->$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
               $this->$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
               $this->$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
          }
      }
      $Sc_lig_md5 = false;
      if (!empty($_POST))
      {
          foreach ($_POST as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                      $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (!empty($_GET))
      {
          foreach ($_GET as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                       $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (isset($SC_lig_apl_orig) && !$Sc_lig_md5 && (!isset($nmgp_parms) || ($nmgp_parms != "SC_null" && substr($nmgp_parms, 0, 8) != "OrScLink")))
      {
          $_SESSION['sc_session']['SC_parm_violation'] = true;
      }
      if (isset($nmgp_parms) && $nmgp_parms == "SC_null")
      {
          $nmgp_parms = "";
      }
      if (isset($this->ContratoNum) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['ContratoNum'] = $this->ContratoNum;
      }
      if (isset($this->contratoID) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['contratoID'] = $this->contratoID;
      }
      if (isset($this->ContratoID) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['ContratoID'] = $this->ContratoID;
      }
      if (isset($this->Asociado) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['Asociado'] = $this->Asociado;
      }
      if (isset($this->id) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['id'] = $this->id;
      }
      if (isset($this->probando_prueba1) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['probando_prueba1'] = $this->probando_prueba1;
      }
      if (isset($this->estadoMensaje) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['estadoMensaje'] = $this->estadoMensaje;
      }
      if (isset($_POST["ContratoNum"]) && isset($this->ContratoNum)) 
      {
          $_SESSION['ContratoNum'] = $this->ContratoNum;
      }
      if (!isset($_POST["ContratoNum"]) && isset($_POST["contratonum"])) 
      {
          $_SESSION['ContratoNum'] = $_POST["contratonum"];
      }
      if (isset($_POST["contratoID"]) && isset($this->contratoID)) 
      {
          $_SESSION['contratoID'] = $this->contratoID;
      }
      if (!isset($_POST["contratoID"]) && isset($_POST["contratoid"])) 
      {
          $_SESSION['contratoID'] = $_POST["contratoid"];
      }
      if (isset($_POST["ContratoID"]) && isset($this->ContratoID)) 
      {
          $_SESSION['ContratoID'] = $this->ContratoID;
      }
      if (!isset($_POST["ContratoID"]) && isset($_POST["contratoid"])) 
      {
          $_SESSION['ContratoID'] = $_POST["contratoid"];
      }
      if (isset($_POST["Asociado"]) && isset($this->Asociado)) 
      {
          $_SESSION['Asociado'] = $this->Asociado;
      }
      if (!isset($_POST["Asociado"]) && isset($_POST["asociado"])) 
      {
          $_SESSION['Asociado'] = $_POST["asociado"];
      }
      if (isset($_POST["id"]) && isset($this->id)) 
      {
          $_SESSION['id'] = $this->id;
      }
      if (isset($_POST["probando_prueba1"]) && isset($this->probando_prueba1)) 
      {
          $_SESSION['probando_prueba1'] = $this->probando_prueba1;
      }
      if (isset($_POST["estadoMensaje"]) && isset($this->estadoMensaje)) 
      {
          $_SESSION['estadoMensaje'] = $this->estadoMensaje;
      }
      if (!isset($_POST["estadoMensaje"]) && isset($_POST["estadomensaje"])) 
      {
          $_SESSION['estadoMensaje'] = $_POST["estadomensaje"];
      }
      if (isset($_GET["ContratoNum"]) && isset($this->ContratoNum)) 
      {
          $_SESSION['ContratoNum'] = $this->ContratoNum;
      }
      if (!isset($_GET["ContratoNum"]) && isset($_GET["contratonum"])) 
      {
          $_SESSION['ContratoNum'] = $_GET["contratonum"];
      }
      if (isset($_GET["contratoID"]) && isset($this->contratoID)) 
      {
          $_SESSION['contratoID'] = $this->contratoID;
      }
      if (!isset($_GET["contratoID"]) && isset($_GET["contratoid"])) 
      {
          $_SESSION['contratoID'] = $_GET["contratoid"];
      }
      if (isset($_GET["ContratoID"]) && isset($this->ContratoID)) 
      {
          $_SESSION['ContratoID'] = $this->ContratoID;
      }
      if (!isset($_GET["ContratoID"]) && isset($_GET["contratoid"])) 
      {
          $_SESSION['ContratoID'] = $_GET["contratoid"];
      }
      if (isset($_GET["Asociado"]) && isset($this->Asociado)) 
      {
          $_SESSION['Asociado'] = $this->Asociado;
      }
      if (!isset($_GET["Asociado"]) && isset($_GET["asociado"])) 
      {
          $_SESSION['Asociado'] = $_GET["asociado"];
      }
      if (isset($_GET["id"]) && isset($this->id)) 
      {
          $_SESSION['id'] = $this->id;
      }
      if (isset($_GET["probando_prueba1"]) && isset($this->probando_prueba1)) 
      {
          $_SESSION['probando_prueba1'] = $this->probando_prueba1;
      }
      if (isset($_GET["estadoMensaje"]) && isset($this->estadoMensaje)) 
      {
          $_SESSION['estadoMensaje'] = $this->estadoMensaje;
      }
      if (!isset($_GET["estadoMensaje"]) && isset($_GET["estadomensaje"])) 
      {
          $_SESSION['estadoMensaje'] = $_GET["estadomensaje"];
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['Formulario_Llamada_Bienvenida']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['Formulario_Llamada_Bienvenida']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['Formulario_Llamada_Bienvenida']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $nmgp_parms = NM_decode_input($nmgp_parms);
          $nmgp_parms = str_replace("@aspass@", "'", $this->nmgp_parms);
          $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
          $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
          $todox = str_replace("?#?@?@?", "?#?@ ?@?", $nmgp_parms);
          $todo  = explode("?@?", $todox);
          $ix = 0;
          while (!empty($todo[$ix]))
          {
             $cadapar = explode("?#?", $todo[$ix]);
             if (1 < sizeof($cadapar))
             {
                if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                {
                    $cadapar[0] = substr($cadapar[0], 11);
                    $cadapar[1] = $_SESSION[$cadapar[1]];
                }
                 if (isset($this->sc_conv_var[$cadapar[0]]))
                 {
                     $cadapar[0] = $this->sc_conv_var[$cadapar[0]];
                 }
                 elseif (isset($this->sc_conv_var[strtolower($cadapar[0])]))
                 {
                     $cadapar[0] = $this->sc_conv_var[strtolower($cadapar[0])];
                 }
                 nm_limpa_str_Formulario_Llamada_Bienvenida($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (!isset($this->ContratoNum) && isset($this->contratonum)) 
          {
              $this->ContratoNum = $this->contratonum;
          }
          if (isset($this->ContratoNum)) 
          {
              $_SESSION['ContratoNum'] = $this->ContratoNum;
          }
          if (!isset($this->contratoID) && isset($this->contratoid)) 
          {
              $this->contratoID = $this->contratoid;
          }
          if (isset($this->contratoID)) 
          {
              $_SESSION['contratoID'] = $this->contratoID;
          }
          if (!isset($this->ContratoID) && isset($this->contratoid)) 
          {
              $this->ContratoID = $this->contratoid;
          }
          if (isset($this->ContratoID)) 
          {
              $_SESSION['ContratoID'] = $this->ContratoID;
          }
          if (!isset($this->Asociado) && isset($this->asociado)) 
          {
              $this->Asociado = $this->asociado;
          }
          if (isset($this->Asociado)) 
          {
              $_SESSION['Asociado'] = $this->Asociado;
          }
          if (isset($this->id)) 
          {
              $_SESSION['id'] = $this->id;
          }
          if (isset($this->probando_prueba1)) 
          {
              $_SESSION['probando_prueba1'] = $this->probando_prueba1;
          }
          if (!isset($this->estadoMensaje) && isset($this->estadomensaje)) 
          {
              $this->estadoMensaje = $this->estadomensaje;
          }
          if (isset($this->estadoMensaje)) 
          {
              $_SESSION['estadoMensaje'] = $this->estadoMensaje;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['Formulario_Llamada_Bienvenida']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['Formulario_Llamada_Bienvenida']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['Formulario_Llamada_Bienvenida']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['Formulario_Llamada_Bienvenida']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (!isset($this->ContratoNum) && isset($this->contratonum)) 
          {
              $this->ContratoNum = $this->contratonum;
          }
          if (isset($this->ContratoNum)) 
          {
              $_SESSION['ContratoNum'] = $this->ContratoNum;
          }
          if (!isset($this->contratoID) && isset($this->contratoid)) 
          {
              $this->contratoID = $this->contratoid;
          }
          if (isset($this->contratoID)) 
          {
              $_SESSION['contratoID'] = $this->contratoID;
          }
          if (!isset($this->ContratoID) && isset($this->contratoid)) 
          {
              $this->ContratoID = $this->contratoid;
          }
          if (isset($this->ContratoID)) 
          {
              $_SESSION['ContratoID'] = $this->ContratoID;
          }
          if (!isset($this->Asociado) && isset($this->asociado)) 
          {
              $this->Asociado = $this->asociado;
          }
          if (isset($this->Asociado)) 
          {
              $_SESSION['Asociado'] = $this->Asociado;
          }
          if (isset($this->id)) 
          {
              $_SESSION['id'] = $this->id;
          }
          if (isset($this->probando_prueba1)) 
          {
              $_SESSION['probando_prueba1'] = $this->probando_prueba1;
          }
          if (!isset($this->estadoMensaje) && isset($this->estadomensaje)) 
          {
              $this->estadoMensaje = $this->estadomensaje;
          }
          if (isset($this->estadoMensaje)) 
          {
              $_SESSION['estadoMensaje'] = $this->estadoMensaje;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['Formulario_Llamada_Bienvenida']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['Formulario_Llamada_Bienvenida']['parms']);
              $todo  = explode("?@?", $todox);
              $ix = 0;
              while (!empty($todo[$ix]))
              {
                 $cadapar = explode("?#?", $todo[$ix]);
                 if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                 {
                     $cadapar[0] = substr($cadapar[0], 11);
                     $cadapar[1] = $_SESSION[$cadapar[1]];
                 }
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
                 $ix++;
              }
          }
      } 

      if (isset($this->nm_run_menu) && $this->nm_run_menu == 1)
      { 
          $_SESSION['sc_session'][$script_case_init]['Formulario_Llamada_Bienvenida']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['Formulario_Llamada_Bienvenida']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['Formulario_Llamada_Bienvenida']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['Formulario_Llamada_Bienvenida']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['Formulario_Llamada_Bienvenida']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['Formulario_Llamada_Bienvenida']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['Formulario_Llamada_Bienvenida']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['Formulario_Llamada_Bienvenida']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new Formulario_Llamada_Bienvenida_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['Formulario_Llamada_Bienvenida']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['Formulario_Llamada_Bienvenida']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['Formulario_Llamada_Bienvenida'];
          }
          elseif (isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']]))
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']] as $init => $resto)
              {
                  if ($this->Ini->sc_page == $init)
                  {
                      $this->sc_init_menu = $init;
                      break;
                  }
              }
          }
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['Formulario_Llamada_Bienvenida']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['Formulario_Llamada_Bienvenida']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('Formulario_Llamada_Bienvenida') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['Formulario_Llamada_Bienvenida']['label'] = "LLAMADA DE BIENVENIDA";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "Formulario_Llamada_Bienvenida")
                  {
                      $achou = true;
                  }
                  elseif ($achou)
                  {
                      unset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu][$apl]);
                      $this->Change_Menu = true;
                  }
              }
          }
      }
      if (!function_exists("nmButtonOutput"))
      {
          include_once($this->Ini->path_lib_php . "nm_gp_config_btn.php");
      }
      include("../_lib/css/" . $this->Ini->str_schema_all . "_form.php");
      $this->Ini->Str_btn_form    = trim($str_button);
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . $_SESSION['scriptcase']['reg_conf']['css_dir'] . '.php');
      $_SESSION['scriptcase']['css_form_help'] = '../_lib/css/' . $this->Ini->str_schema_all . "_form.css";
      $_SESSION['scriptcase']['css_form_help_dir'] = '../_lib/css/' . $this->Ini->str_schema_all . "_form" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css";
      $this->Db = $this->Ini->Db; 
      if ($this->NM_ajax_flag && (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'] || 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9)))
      {
      $this->Db->debug = false;
      }
      $this->Ini->str_google_fonts = isset($str_google_fonts)?$str_google_fonts:'';
      $this->Ini->Img_sep_form    = "/" . trim($str_toolbar_separator);
      $this->Ini->Color_bg_ajax   = "" == trim($str_ajax_bg)         ? "#000" : $str_ajax_bg;
      $this->Ini->Border_c_ajax   = "" == trim($str_ajax_border_c)   ? ""     : $str_ajax_border_c;
      $this->Ini->Border_s_ajax   = "" == trim($str_ajax_border_s)   ? ""     : $str_ajax_border_s;
      $this->Ini->Border_w_ajax   = "" == trim($str_ajax_border_w)   ? ""     : $str_ajax_border_w;
      $this->Ini->Block_img_exp   = "" == trim($str_block_exp)       ? ""     : $str_block_exp;
      $this->Ini->Block_img_col   = "" == trim($str_block_col)       ? ""     : $str_block_col;
      $this->Ini->Msg_ico_title   = "" == trim($str_msg_ico_title)   ? ""     : $str_msg_ico_title;
      $this->Ini->Msg_ico_body    = "" == trim($str_msg_ico_body)    ? ""     : $str_msg_ico_body;
      $this->Ini->Err_ico_title   = "" == trim($str_err_ico_title)   ? ""     : $str_err_ico_title;
      $this->Ini->Err_ico_body    = "" == trim($str_err_ico_body)    ? ""     : $str_err_ico_body;
      $this->Ini->Cal_ico_back    = "" == trim($str_cal_ico_back)    ? ""     : $str_cal_ico_back;
      $this->Ini->Cal_ico_for     = "" == trim($str_cal_ico_for)     ? ""     : $str_cal_ico_for;
      $this->Ini->Cal_ico_close   = "" == trim($str_cal_ico_close)   ? ""     : $str_cal_ico_close;
      $this->Ini->Tab_space       = "" == trim($str_tab_space)       ? ""     : $str_tab_space;
      $this->Ini->Bubble_tail     = "" == trim($str_bubble_tail)     ? ""     : $str_bubble_tail;
      $this->Ini->Label_sort_pos  = "" == trim($str_label_sort_pos)  ? ""     : $str_label_sort_pos;
      $this->Ini->Label_sort      = "" == trim($str_label_sort)      ? ""     : $str_label_sort;
      $this->Ini->Label_sort_asc  = "" == trim($str_label_sort_asc)  ? ""     : $str_label_sort_asc;
      $this->Ini->Label_sort_desc = "" == trim($str_label_sort_desc) ? ""     : $str_label_sort_desc;
      $this->Ini->Img_status_ok       = "" == trim($str_img_status_ok)   ? ""     : $str_img_status_ok;
      $this->Ini->Img_status_err      = "" == trim($str_img_status_err)  ? ""     : $str_img_status_err;
      $this->Ini->Css_status          = "scFormInputError";
      $this->Ini->Css_status_pwd_box  = "scFormInputErrorPwdBox";
      $this->Ini->Css_status_pwd_text = "scFormInputErrorPwdText";
      $this->Ini->Error_icon_span = "" == trim($str_error_icon_span) ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;
      $this->Ini->App_div_tree_img_col = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp = trim($app_div_str_tree_exp);
      $this->Ini->form_table_width     = isset($str_form_table_width) && '' != trim($str_form_table_width) ? $str_form_table_width : '';

        $this->classes_100perc_fields['table'] = '';
        $this->classes_100perc_fields['input'] = '';
        $this->classes_100perc_fields['span_input'] = '';
        $this->classes_100perc_fields['span_select'] = '';
        $this->classes_100perc_fields['style_category'] = '';
        $this->classes_100perc_fields['keep_field_size'] = true;


      $this->arr_buttons['volver']['hint']             = "";
      $this->arr_buttons['volver']['type']             = "button";
      $this->arr_buttons['volver']['value']            = "Volver";
      $this->arr_buttons['volver']['display']          = "only_text";
      $this->arr_buttons['volver']['display_position'] = "text_right";
      $this->arr_buttons['volver']['style']            = "default";
      $this->arr_buttons['volver']['image']            = "";

      $this->arr_buttons['guardar']['hint']             = "";
      $this->arr_buttons['guardar']['type']             = "button";
      $this->arr_buttons['guardar']['value']            = "Guardar";
      $this->arr_buttons['guardar']['display']          = "only_text";
      $this->arr_buttons['guardar']['display_position'] = "text_right";
      $this->arr_buttons['guardar']['style']            = "default";
      $this->arr_buttons['guardar']['image']            = "";

      $this->arr_buttons['enviarcorreo']['hint']             = "";
      $this->arr_buttons['enviarcorreo']['type']             = "button";
      $this->arr_buttons['enviarcorreo']['value']            = "enviarCorreo";
      $this->arr_buttons['enviarcorreo']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['enviarcorreo']['display_position'] = "text_right";
      $this->arr_buttons['enviarcorreo']['style']            = "default";
      $this->arr_buttons['enviarcorreo']['image']            = "";
      $this->arr_buttons['enviarcorreo']['has_fa']            = "true";
      $this->arr_buttons['enviarcorreo']['fontawesomeicon']            = "";

      $this->arr_buttons['llamada']['hint']             = "";
      $this->arr_buttons['llamada']['type']             = "button";
      $this->arr_buttons['llamada']['value']            = "llamada";
      $this->arr_buttons['llamada']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['llamada']['display_position'] = "text_right";
      $this->arr_buttons['llamada']['style']            = "default";
      $this->arr_buttons['llamada']['image']            = "";
      $this->arr_buttons['llamada']['has_fa']            = "true";
      $this->arr_buttons['llamada']['fontawesomeicon']            = "fas fa-mobile-alt";

      $this->arr_buttons['whatsapp']['hint']             = "";
      $this->arr_buttons['whatsapp']['type']             = "button";
      $this->arr_buttons['whatsapp']['value']            = "Whatsapp";
      $this->arr_buttons['whatsapp']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['whatsapp']['display_position'] = "text_right";
      $this->arr_buttons['whatsapp']['style']            = "default";
      $this->arr_buttons['whatsapp']['image']            = "";
      $this->arr_buttons['whatsapp']['has_fa']            = "true";
      $this->arr_buttons['whatsapp']['fontawesomeicon']            = "fab fa-whatsapp";


      $_SESSION['scriptcase']['error_icon']['Formulario_Llamada_Bienvenida']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['Formulario_Llamada_Bienvenida'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "off";
      $this->nmgp_botoes['ok'] = "on";
      $this->nmgp_botoes['facebook'] = "off";
      $this->nmgp_botoes['google'] = "off";
      $this->nmgp_botoes['twitter'] = "off";
      $this->nmgp_botoes['paypal'] = "off";
      $this->nmgp_botoes['Volver'] = "on";
      $this->nmgp_botoes['Guardar'] = "on";
      $this->nmgp_botoes['enviarCorreo'] = "on";
      $this->nmgp_botoes['llamada'] = "on";
      $this->nmgp_botoes['Whatsapp'] = "on";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['Formulario_Llamada_Bienvenida']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['Formulario_Llamada_Bienvenida'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['Formulario_Llamada_Bienvenida'];

              $this->nmgp_botoes['update']     = $tmpDashboardButtons['form_update']    ? 'on' : 'off';
              $this->nmgp_botoes['new']        = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['insert']     = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['delete']     = $tmpDashboardButtons['form_delete']    ? 'on' : 'off';
              $this->nmgp_botoes['copy']       = $tmpDashboardButtons['form_copy']      ? 'on' : 'off';
              $this->nmgp_botoes['first']      = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['back']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['last']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['forward']    = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['navpage']    = $tmpDashboardButtons['form_navpage']   ? 'on' : 'off';
              $this->nmgp_botoes['goto']       = $tmpDashboardButtons['form_goto']      ? 'on' : 'off';
              $this->nmgp_botoes['qtline']     = $tmpDashboardButtons['form_lineqty']   ? 'on' : 'off';
              $this->nmgp_botoes['summary']    = $tmpDashboardButtons['form_summary']   ? 'on' : 'off';
              $this->nmgp_botoes['qsearch']    = $tmpDashboardButtons['form_qsearch']   ? 'on' : 'off';
              $this->nmgp_botoes['dynsearch']  = $tmpDashboardButtons['form_dynsearch'] ? 'on' : 'off';
              $this->nmgp_botoes['reload']     = $tmpDashboardButtons['form_reload']    ? 'on' : 'off';
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_form'];
          if (!isset($this->contratoid)){$this->contratoid = $this->nmgp_dados_form['contratoid'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("Formulario_Llamada_Bienvenida", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      $_SESSION['scriptcase']['sc_tab_meses']['int'] = array(
                                      $this->Ini->Nm_lang['lang_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_mnth_june'],
                                      $this->Ini->Nm_lang['lang_mnth_july'],
                                      $this->Ini->Nm_lang['lang_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_meses']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_june'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_july'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_dias']['int'] = array(
                                      $this->Ini->Nm_lang['lang_days_sund'],
                                      $this->Ini->Nm_lang['lang_days_mond'],
                                      $this->Ini->Nm_lang['lang_days_tued'],
                                      $this->Ini->Nm_lang['lang_days_wend'],
                                      $this->Ini->Nm_lang['lang_days_thud'],
                                      $this->Ini->Nm_lang['lang_days_frid'],
                                      $this->Ini->Nm_lang['lang_days_satd']);
      $_SESSION['scriptcase']['sc_tab_dias']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_days_sund'],
                                      $this->Ini->Nm_lang['lang_shrt_days_mond'],
                                      $this->Ini->Nm_lang['lang_shrt_days_tued'],
                                      $this->Ini->Nm_lang['lang_shrt_days_wend'],
                                      $this->Ini->Nm_lang['lang_shrt_days_thud'],
                                      $this->Ini->Nm_lang['lang_shrt_days_frid'],
                                      $this->Ini->Nm_lang['lang_shrt_days_satd']);
      nm_gc($this->Ini->path_libs);
      $this->Ini->Gd_missing  = true;
      if(function_exists("getProdVersion"))
      {
         $_SESSION['scriptcase']['sc_prod_Version'] = str_replace(".", "", getProdVersion($this->Ini->path_libs));
         if(function_exists("gd_info"))
         {
            $this->Ini->Gd_missing = false;
         }
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_trata_img.php", "C", "nm_trata_img") ; 

      if (is_file($this->Ini->path_aplicacao . 'Formulario_Llamada_Bienvenida_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'Formulario_Llamada_Bienvenida_help.txt');
          if ($arr_link_webhelp)
          {
              foreach ($arr_link_webhelp as $str_link_webhelp)
              {
                  $str_link_webhelp = trim($str_link_webhelp);
                  if ('contr:' == substr($str_link_webhelp, 0, 6))
                  {
                      $arr_link_parts = explode(':', $str_link_webhelp);
                      if ('' != $arr_link_parts[1] && is_file($this->Ini->root . $this->Ini->path_help . $arr_link_parts[1]))
                      {
                          $this->url_webhelp = $this->Ini->path_help . $arr_link_parts[1];
                      }
                  }
              }
          }
      }

      if (is_dir($this->Ini->path_aplicacao . 'img'))
      {
          $Res_dir_img = @opendir($this->Ini->path_aplicacao . 'img');
          if ($Res_dir_img)
          {
              while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
              {
                 if (@is_file($this->Ini->path_aplicacao . 'img/' . $Str_arquivo) && '.' != $Str_arquivo && '..' != $this->Ini->path_aplicacao . 'img/' . $Str_arquivo)
                 {
                     @unlink($this->Ini->path_aplicacao . 'img/' . $Str_arquivo);
                 }
              }
          }
          @closedir($Res_dir_img);
          rmdir($this->Ini->path_aplicacao . 'img');
      }

      if ($this->Embutida_proc)
      { 
          require_once($this->Ini->path_embutida . 'LlamadaBienvenidaForm/Formulario_Llamada_Bienvenida_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "Formulario_Llamada_Bienvenida_erro.class.php"); 
      }
      $this->Erro      = new Formulario_Llamada_Bienvenida_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['Formulario_Llamada_Bienvenida']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "novo")  
      {
          $this->nmgp_botoes['Volver'] = "off";
          $this->nmgp_botoes['Guardar'] = "off";
          $this->nmgp_botoes['enviarCorreo'] = "off";
          $this->nmgp_botoes['llamada'] = "off";
          $this->nmgp_botoes['Whatsapp'] = "off";
      }
      elseif ($this->nmgp_opcao == "incluir")  
      {
          $this->nmgp_botoes['Volver'] = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['botoes']['Volver'];
          $this->nmgp_botoes['Guardar'] = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['botoes']['Guardar'];
          $this->nmgp_botoes['enviarCorreo'] = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['botoes']['enviarCorreo'];
          $this->nmgp_botoes['llamada'] = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['botoes']['llamada'];
          $this->nmgp_botoes['Whatsapp'] = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['botoes']['Whatsapp'];
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->NM_case_insensitive = false;
      $this->sc_evento = $this->nmgp_opcao;
      if (!isset($this->NM_ajax_flag) || ('validate_' != substr($this->NM_ajax_opcao, 0, 9) && 'add_new_line' != $this->NM_ajax_opcao && 'autocomp_' != substr($this->NM_ajax_opcao, 0, 9)))
      {
      $_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'on';
if (!isset($this->sc_temp_ContratoNum)) {$this->sc_temp_ContratoNum = (isset($_SESSION['ContratoNum'])) ? $_SESSION['ContratoNum'] : "";}
if (!isset($this->sc_temp_ContratoID)) {$this->sc_temp_ContratoID = (isset($_SESSION['ContratoID'])) ? $_SESSION['ContratoID'] : "";}
  if(!empty($this->sc_temp_ContratoID)){

}else{

 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "Error al cargar Informacion. Contactese con el área de soporte";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_Formulario_Llamada_Bienvenida' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "Error al cargar Informacion. Contactese con el área de soporte";
 }
;
$this->NM_ajax_info['buttonDisplay']['ok'] = $this->nmgp_botoes["ok"] = "off";;
}
$this->sc_master_value('ContratoNumero',  trim($this->sc_temp_ContratoNum));

$this->LlamarInformacion();
if (isset($this->sc_temp_ContratoID)) { $_SESSION['ContratoID'] = $this->sc_temp_ContratoID;}
if (isset($this->sc_temp_ContratoNum)) { $_SESSION['ContratoNum'] = $this->sc_temp_ContratoNum;}
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off'; 
      }
            if ('ajax_check_file' == $this->nmgp_opcao ){
                 ob_start(); 
                 include_once("../_lib/lib/php/nm_api.php"); 
            switch( $_POST['rsargs'] ){
               default:
                   echo 0;exit;
               break;
               }

            $out1_img_cache = $_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['glo_nm_path_imag_temp'] . $file_name;
            $orig_img = $_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['glo_nm_path_imag_temp']. '/sc_'.md5(date('YmdHis').basename($_POST['AjaxCheckImg'])).'.gif';
            copy($__file_download, $_SERVER['DOCUMENT_ROOT'].$orig_img);
            echo $orig_img . '_@@NM@@_';

            if(file_exists($out1_img_cache)){
                echo $out1_img_cache;
                exit;
            }
            copy($__file_download, $_SERVER['DOCUMENT_ROOT'].$out1_img_cache);
            $sc_obj_img = new nm_trata_img($_SERVER['DOCUMENT_ROOT'].$out1_img_cache, true);

            if(!empty($img_width) && !empty($img_height)){
                $sc_obj_img->setWidth($img_width);
                $sc_obj_img->setHeight($img_height);
            }            $sc_obj_img->createImg($_SERVER['DOCUMENT_ROOT'].$out1_img_cache);
            echo $out1_img_cache;
               exit;
            }
      if ($nm_opc_form_php == "formphp")
      { 
          if ($nm_call_php == "Volver")
          { 
              $this->sc_btn_Volver();
          } 
          if ($nm_call_php == "Guardar")
          { 
              $this->sc_btn_Guardar();
          } 
          if ($nm_call_php == "enviarCorreo")
          { 
              $this->sc_btn_enviarCorreo();
          } 
          if ($nm_call_php == "Whatsapp")
          { 
              $this->sc_btn_Whatsapp();
          } 
          $this->NM_close_db(); 
          exit;
      } 
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- fechaventa
      $this->field_config['fechaventa']                 = array();
      $this->field_config['fechaventa']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['fechaventa']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fechaventa']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'fechaventa');
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
            $glo_senha_protect, $bok, $nm_apl_dependente, $nm_form_submit, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup, $nmgp_redir;


      $this->ini_controle();

      if ('' != $_SESSION['scriptcase']['change_regional_old'])
      {
          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_old'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $this->nm_tira_formatacao();

          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_new'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $guarda_formatado = $this->formatado;
          $this->nm_formatar_campos();
          $this->formatado = $guarda_formatado;

          $_SESSION['scriptcase']['change_regional_old'] = '';
          $_SESSION['scriptcase']['change_regional_new'] = '';
      }

      if ($nm_form_submit == 1 && ($this->nmgp_opcao == 'inicio' || $this->nmgp_opcao == 'igual'))
      {
          $this->nm_tira_formatacao();
      }
      if (!$this->NM_ajax_flag || 'alterar' != $this->nmgp_opcao || 'submit_form' != $this->NM_ajax_opcao)
      {
      }
//
//-----> 
//
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          if ('validate_contratonumero' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'contratonumero');
          }
          if ('validate_nombreedv' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nombreedv');
          }
          if ('validate_supervisor' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'supervisor');
          }
          if ('validate_fechaventa' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fechaventa');
          }
          if ('validate_grupofechainauguracion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'grupofechainauguracion');
          }
          if ('validate_nombreasociaso' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nombreasociaso');
          }
          if ('validate_tipodocumento1' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tipodocumento1');
          }
          if ('validate_numerodocumento1' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'numerodocumento1');
          }
          if ('validate_ubicacion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ubicacion');
          }
          if ('validate_correopersonal1' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'correopersonal1');
          }
          if ('validate_correolaboral1' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'correolaboral1');
          }
          if ('validate_tf11' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf11');
          }
          if ('validate_tf13' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf13');
          }
          if ('validate_tf12' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf12');
          }
          if ('validate_tf14' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf14');
          }
          if ('validate_tf15' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf15');
          }
          if ('validate_tf16' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf16');
          }
          if ('validate_tf17' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf17');
          }
          if ('validate_tf18' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf18');
          }
          if ('validate_tf19' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf19');
          }
          if ('validate_nombreasociado2' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nombreasociado2');
          }
          if ('validate_tipodocumento2' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tipodocumento2');
          }
          if ('validate_numerodocumento2' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'numerodocumento2');
          }
          if ('validate_ubicacion2' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ubicacion2');
          }
          if ('validate_correopersonal2' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'correopersonal2');
          }
          if ('validate_correolaboral2' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'correolaboral2');
          }
          if ('validate_tf21' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf21');
          }
          if ('validate_tf22' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf22');
          }
          if ('validate_tf23' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf23');
          }
          if ('validate_tf24' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf24');
          }
          if ('validate_tf25' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf25');
          }
          if ('validate_tf26' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf26');
          }
          if ('validate_tf27' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf27');
          }
          if ('validate_tf28' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf28');
          }
          if ('validate_tf29' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf29');
          }
          if ('validate_nombreasociado3' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nombreasociado3');
          }
          if ('validate_tipodocumento3' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tipodocumento3');
          }
          if ('validate_numerodocumento3' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'numerodocumento3');
          }
          if ('validate_ubicacion3' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ubicacion3');
          }
          if ('validate_correopersonal3' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'correopersonal3');
          }
          if ('validate_correolaboral3' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'correolaboral3');
          }
          if ('validate_tf31' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf31');
          }
          if ('validate_tf32' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf32');
          }
          if ('validate_tf33' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf33');
          }
          if ('validate_tf34' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf34');
          }
          if ('validate_tf35' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf35');
          }
          if ('validate_tf36' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf36');
          }
          if ('validate_tf37' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf37');
          }
          if ('validate_tf38' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf38');
          }
          if ('validate_tf39' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tf39');
          }
          if ('validate_cantidadintentos' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cantidadintentos');
          }
          if ('validate_telefono' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'telefono');
          }
          if ('validate_estado' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'estado');
          }
          if ('validate_indicadorexitoconforme' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'indicadorexitoconforme');
          }
          if ('validate_motivo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'motivo');
          }
          if ('validate_motivoc' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'motivoc');
          }
          if ('validate_comentario' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'comentario');
          }
          Formulario_Llamada_Bienvenida_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if ('event_estado_onclick' == $this->NM_ajax_opcao)
          {
              $this->Estado_onClick();
          }
          if ('event_indicadorexitoconforme_onclick' == $this->NM_ajax_opcao)
          {
              $this->indicadorExitoConforme_onClick();
          }
          if ('event_scajaxbutton_volver_onclick' == $this->NM_ajax_opcao)
          {
              $this->scajaxbutton_Volver_onClick();
          }
          if ('event_scajaxbutton_guardar_onclick' == $this->NM_ajax_opcao)
          {
              $this->scajaxbutton_Guardar_onClick();
          }
          Formulario_Llamada_Bienvenida_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['contratonumero']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->contratonumero = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['contratonumero'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['nombreedv']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nombreedv = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['nombreedv'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['supervisor']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->supervisor = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['supervisor'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['fechaventa']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fechaventa = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['fechaventa'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['grupofechainauguracion']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->grupofechainauguracion = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['grupofechainauguracion'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['nombreasociaso']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nombreasociaso = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['nombreasociaso'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tipodocumento1']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tipodocumento1 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tipodocumento1'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['numerodocumento1']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->numerodocumento1 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['numerodocumento1'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['ubicacion']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->ubicacion = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['ubicacion'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['correopersonal1']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->correopersonal1 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['correopersonal1'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['correolaboral1']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->correolaboral1 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['correolaboral1'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf11']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf11 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf11'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf13']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf13 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf13'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf12']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf12 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf12'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf14']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf14 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf14'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf15']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf15 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf15'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf16']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf16 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf16'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf17']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf17 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf17'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf18']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf18 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf18'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf19']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf19 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf19'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['nombreasociado2']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nombreasociado2 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['nombreasociado2'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tipodocumento2']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tipodocumento2 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tipodocumento2'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['numerodocumento2']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->numerodocumento2 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['numerodocumento2'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['ubicacion2']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->ubicacion2 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['ubicacion2'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['correopersonal2']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->correopersonal2 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['correopersonal2'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['correolaboral2']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->correolaboral2 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['correolaboral2'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf21']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf21 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf21'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf22']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf22 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf22'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf23']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf23 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf23'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf24']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf24 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf24'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf25']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf25 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf25'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf26']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf26 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf26'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf27']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf27 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf27'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf28']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf28 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf28'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf29']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf29 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf29'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['nombreasociado3']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nombreasociado3 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['nombreasociado3'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tipodocumento3']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tipodocumento3 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tipodocumento3'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['numerodocumento3']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->numerodocumento3 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['numerodocumento3'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['ubicacion3']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->ubicacion3 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['ubicacion3'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['correopersonal3']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->correopersonal3 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['correopersonal3'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['correolaboral3']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->correolaboral3 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['correolaboral3'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf31']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf31 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf31'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf32']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf32 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf32'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf33']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf33 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf33'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf34']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf34 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf34'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf35']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf35 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf35'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf36']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf36 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf36'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf37']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf37 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf37'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf38']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf38 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf38'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf39']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tf39 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['tf39'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['cantidadintentos']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->cantidadintentos = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_select']['cantidadintentos'];
          } 
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              Formulario_Llamada_Bienvenida_pack_ajax_response();
              exit;
          }
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          $this->nm_gera_html();
          $this->NM_close_db(); 
          $this->nmgp_opcao = ""; 
          exit; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  Formulario_Llamada_Bienvenida_pack_ajax_response();
                  exit;
              }
              $campos_erro = $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros);
              $this->Campos_Mens_erro = ""; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $campos_erro); 
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir" && $nm_apl_dependente == 1) 
              { 
                  $this->nm_flag_saida_novo = "S";; 
              }
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
      elseif (isset($nm_form_submit) && 1 == $nm_form_submit && $this->nmgp_opcao != "menu_link" && $this->nmgp_opcao != "recarga_mobile")
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  Formulario_Llamada_Bienvenida_pack_ajax_response();
                  exit;
              }
              $campos_erro = $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros);
              $this->Campos_Mens_erro = ""; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $campos_erro); 
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
//
      if (!isset($nm_form_submit) && $this->nmgp_opcao != "nada")
      {
          $this->contratonumero = "" . $_SESSION['ContratoNum'] . "" ;  
          $this->telefono = "" ;  
          $this->nombreedv = "" ;  
          $this->supervisor = "" ;  
          $this->fechaventa = "" ;  
          $this->estado = "" ;  
          $this->comentario = "" ;  
          $this->contratoid = "" . $_SESSION['ContratoID'] . "" ;  
          $this->nombreasociaso = "" . $_SESSION['Asociado'] . "" ;  
          $this->nombreasociado2 = "" ;  
          $this->tf11 = "" ;  
          $this->tf12 = "" ;  
          $this->tf13 = "" ;  
          $this->tf14 = "" ;  
          $this->tf15 = "" ;  
          $this->tf16 = "" ;  
          $this->tf17 = "" ;  
          $this->tf18 = "" ;  
          $this->tf19 = "" ;  
          $this->tf21 = "" ;  
          $this->tf22 = "" ;  
          $this->tf23 = "" ;  
          $this->tf24 = "" ;  
          $this->tf25 = "" ;  
          $this->tf26 = "" ;  
          $this->tf27 = "" ;  
          $this->tf28 = "" ;  
          $this->tf29 = "" ;  
          $this->motivo = "" ;  
          $this->motivoc = "" ;  
          $this->nombreasociado3 = "" ;  
          $this->tf31 = "" ;  
          $this->tf32 = "" ;  
          $this->tf33 = "" ;  
          $this->tf34 = "" ;  
          $this->tf35 = "" ;  
          $this->tf36 = "" ;  
          $this->tf37 = "" ;  
          $this->tf39 = "" ;  
          $this->tf38 = "" ;  
          $this->indicadorexitoconforme = "" ;  
          $this->cantidadintentos = "" ;  
          $this->tipodocumento1 = "" ;  
          $this->numerodocumento1 = "" ;  
          $this->correopersonal1 = "" ;  
          $this->correolaboral1 = "" ;  
          $this->tipodocumento2 = "" ;  
          $this->numerodocumento2 = "" ;  
          $this->correopersonal2 = "" ;  
          $this->correolaboral2 = "" ;  
          $this->tipodocumento3 = "" ;  
          $this->numerodocumento3 = "" ;  
          $this->correopersonal3 = "" ;  
          $this->correolaboral3 = "" ;  
          $this->grupofechainauguracion = "" ;  
          $this->ubicacion = "" ;  
          $this->ubicacion2 = "" ;  
          $this->ubicacion3 = "" ;  
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_form']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_form']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_form'] as $NM_campo => $NM_valor)
              {
                  $$NM_campo = $NM_valor;
              }
          }
      }
      else
      {
           if ($this->nmgp_opcao != "nada")
           {
           }
           if ($this->nmgp_opc_ant == "incluir") 
           { 
               $this->nm_proc_onload(false);
           }
           else
           { 
              $this->nm_guardar_campos();
           }
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['recarga'] = $this->nmgp_opcao;
      }
      if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "" || $campos_erro != "" || !isset($this->bok) || $this->bok != "OK" || $this->nmgp_opcao == "recarga")
      {
          if ($Campos_Crit == "" && empty($Campos_Falta) && $this->Campos_Mens_erro == "" && !isset($this->bok) && $this->nmgp_opcao != "recarga")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos']))
              { 
                  $contratonumero = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][0]; 
                  $nombreedv = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][1]; 
                  $supervisor = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][2]; 
                  $fechaventa = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][3]; 
                  $grupofechainauguracion = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][4]; 
                  $nombreasociaso = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][5]; 
                  $tipodocumento1 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][6]; 
                  $numerodocumento1 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][7]; 
                  $ubicacion = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][8]; 
                  $correopersonal1 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][9]; 
                  $correolaboral1 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][10]; 
                  $tf11 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][11]; 
                  $tf13 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][12]; 
                  $tf12 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][13]; 
                  $tf14 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][14]; 
                  $tf15 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][15]; 
                  $tf16 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][16]; 
                  $tf17 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][17]; 
                  $tf18 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][18]; 
                  $tf19 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][19]; 
                  $nombreasociado2 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][20]; 
                  $tipodocumento2 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][21]; 
                  $numerodocumento2 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][22]; 
                  $ubicacion2 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][23]; 
                  $correopersonal2 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][24]; 
                  $correolaboral2 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][25]; 
                  $tf21 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][26]; 
                  $tf22 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][27]; 
                  $tf23 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][28]; 
                  $tf24 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][29]; 
                  $tf25 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][30]; 
                  $tf26 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][31]; 
                  $tf27 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][32]; 
                  $tf28 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][33]; 
                  $tf29 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][34]; 
                  $nombreasociado3 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][35]; 
                  $tipodocumento3 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][36]; 
                  $numerodocumento3 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][37]; 
                  $ubicacion3 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][38]; 
                  $correopersonal3 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][39]; 
                  $correolaboral3 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][40]; 
                  $tf31 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][41]; 
                  $tf32 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][42]; 
                  $tf33 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][43]; 
                  $tf34 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][44]; 
                  $tf35 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][45]; 
                  $tf36 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][46]; 
                  $tf37 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][47]; 
                  $tf38 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][48]; 
                  $tf39 = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][49]; 
                  $cantidadintentos = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][50]; 
                  $telefono = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][51]; 
                  $estado = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][52]; 
                  $indicadorexitoconforme = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][53]; 
                  $motivo = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][54]; 
                  $motivoc = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][55]; 
                  $comentario = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][56]; 
              } 
          }
          $this->nm_gera_html();
          $this->NM_close_db(); 
      }
      elseif (isset($this->bok) && $this->bok == "OK")
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'] = array(); 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][0] = $this->contratonumero; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][1] = $this->nombreedv; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][2] = $this->supervisor; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][3] = $this->fechaventa; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][4] = $this->grupofechainauguracion; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][5] = $this->nombreasociaso; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][6] = $this->tipodocumento1; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][7] = $this->numerodocumento1; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][8] = $this->ubicacion; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][9] = $this->correopersonal1; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][10] = $this->correolaboral1; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][11] = $this->tf11; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][12] = $this->tf13; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][13] = $this->tf12; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][14] = $this->tf14; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][15] = $this->tf15; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][16] = $this->tf16; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][17] = $this->tf17; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][18] = $this->tf18; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][19] = $this->tf19; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][20] = $this->nombreasociado2; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][21] = $this->tipodocumento2; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][22] = $this->numerodocumento2; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][23] = $this->ubicacion2; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][24] = $this->correopersonal2; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][25] = $this->correolaboral2; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][26] = $this->tf21; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][27] = $this->tf22; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][28] = $this->tf23; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][29] = $this->tf24; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][30] = $this->tf25; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][31] = $this->tf26; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][32] = $this->tf27; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][33] = $this->tf28; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][34] = $this->tf29; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][35] = $this->nombreasociado3; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][36] = $this->tipodocumento3; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][37] = $this->numerodocumento3; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][38] = $this->ubicacion3; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][39] = $this->correopersonal3; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][40] = $this->correolaboral3; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][41] = $this->tf31; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][42] = $this->tf32; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][43] = $this->tf33; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][44] = $this->tf34; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][45] = $this->tf35; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][46] = $this->tf36; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][47] = $this->tf37; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][48] = $this->tf38; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][49] = $this->tf39; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][50] = $this->cantidadintentos; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][51] = $this->telefono; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][52] = $this->estado; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][53] = $this->indicadorexitoconforme; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][54] = $this->motivo; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][55] = $this->motivoc; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['campos'][56] = $this->comentario; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['redir'] == "redir")
          {
              $this->nmgp_redireciona(); 
          }
          else
          {
              $contr_menu = "";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['iframe_menu'])
              {
                  $contr_menu = "glo_menu";
              }
              if (isset($_SESSION['scriptcase']['sc_ult_apl_menu']) && in_array("Formulario_Llamada_Bienvenida", $_SESSION['scriptcase']['sc_ult_apl_menu']))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona_form("Formulario_Llamada_Bienvenida_fim.php", $this->nm_location, $contr_menu); 
              }
              else
              {
                  $this->nm_gera_html();
                  if (!$_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['embutida_proc'])
                  { 
                      $this->NM_close_db(); 
                  } 
              }
          }
          $this->NM_close_db(); 
          if ($this->NM_ajax_flag)
          {
              Formulario_Llamada_Bienvenida_pack_ajax_response();
              exit;
          }
      }
      $this->nmgp_opcao = ""; 
      if ($this->Change_Menu)
      {
          $apl_menu  = $_SESSION['scriptcase']['menu_atual'];
          $Arr_rastro = array();
          if (isset($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) && count($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) > 1)
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu] as $menu => $apls)
              {
                 $Arr_rastro[] = "'<a href=\"" . $apls['link'] . "?script_case_init=" . $this->sc_init_menu . "\" target=\"#NMIframe#\">" . $apls['label'] . "</a>'";
              }
              $ult_apl = count($Arr_rastro) - 1;
              unset($Arr_rastro[$ult_apl]);
              $rastro = implode(",", $Arr_rastro);
?>
  <script type="text/javascript">
     link_atual = new Array (<?php echo $rastro ?>);
     parent.writeFastMenu(link_atual);
  </script>
<?php
          }
          else
          {
?>
  <script type="text/javascript">
     parent.clearFastMenu();
  </script>
<?php
          }
      }
   }
  function html_export_print($nm_arquivo_html, $nmgp_password)
  {
      $Html_password = "";
          $Arq_base  = $this->Ini->root . $this->Ini->path_imag_temp . $nm_arquivo_html;
          $Parm_pass = ($Html_password != "") ? " -p" : "";
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "Formulario_Llamada_Bienvenida.zip";
          $Arq_htm = $this->Ini->path_imag_temp . "/" . $Zip_name;
          $Arq_zip = $this->Ini->root . $Arq_htm;
          $Zip_f     = (FALSE !== strpos($Arq_zip, ' ')) ? " \"" . $Arq_zip . "\"" :  $Arq_zip;
          $Arq_input = (FALSE !== strpos($Arq_base, ' ')) ? " \"" . $Arq_base . "\"" :  $Arq_base;
           if (is_file($Arq_zip)) {
               unlink($Arq_zip);
           }
           $str_zip = "";
           if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
           {
               chdir($this->Ini->path_third . "/zip/windows");
               $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j " . $Html_password . " " . $Zip_f . " " . $Arq_input;
           }
           elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
           {
                if (FALSE !== strpos(strtolower(php_uname()), 'i686')) 
                {
                    chdir($this->Ini->path_third . "/zip/linux-i386/bin");
                }
                else
                {
                    chdir($this->Ini->path_third . "/zip/linux-amd64/bin");
                }
               $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $Arq_input;
           }
           elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
           {
               chdir($this->Ini->path_third . "/zip/mac/bin");
               $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $Arq_input;
           }
           if (!empty($str_zip)) {
               exec($str_zip);
           }
           // ----- ZIP log
           $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'w');
           if ($fp)
           {
               @fwrite($fp, $str_zip . "\r\n\r\n");
               @fclose($fp);
           }
           foreach ($this->Ini->Img_export_zip as $cada_img_zip)
           {
               $str_zip      = "";
              $cada_img_zip = '"' . $cada_img_zip . '"';
               if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
               {
                   $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j -u " . $Html_password . " " . $Zip_f . " " . $cada_img_zip;
               }
               elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
               {
                   $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $cada_img_zip;
               }
               elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
               {
                   $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $cada_img_zip;
               }
               if (!empty($str_zip)) {
                   exec($str_zip);
               }
               // ----- ZIP log
               $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'a');
               if ($fp)
               {
                   @fwrite($fp, $str_zip . "\r\n\r\n");
                   @fclose($fp);
               }
           }
           if (is_file($Arq_zip)) {
               unlink($Arq_base);
           } 
          $path_doc_md5 = md5($Arq_htm);
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("LLAMADA DE BIENVENIDA") ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" /> 
  <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
</HEAD>
<BODY class="scExportPage">
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: top">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">PRINT</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
   <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

   <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

   <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo  $this->form_encode_input($Arq_htm) ?>" target="_self" style="display: none"> 
</form>
<form name="Fdown" method="get" action="Formulario_Llamada_Bienvenida_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="Formulario_Llamada_Bienvenida"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="./" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nmgp_opcao" value="<?php echo $this->nmgp_opcao ?>"> 
</form> 
         </BODY>
         </HTML>
<?php
          exit;
  }
//
//--------------------------------------------------------------------------------------
   function NM_has_trans()
   {
       return !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access);
   }
//
//--------------------------------------------------------------------------------------
   function NM_commit_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->CommitTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_rollback_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->RollbackTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_close_db()
   {
       if ($this->Db && !$this->Embutida_proc)
       { 
           $this->Db->Close(); 
           $this->Ini->nm_db_ds_saf_rep->Close(); 
       } 
   }
   function sc_btn_enviarCorreo() 
   {
        global $nm_url_saida, $teste_validade, 
            $glo_senha_protect, $bok, $nm_apl_dependente, $nm_form_submit, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup, $nmgp_redir;
 
     ob_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
 <head>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

      if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
      {
?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
      }

?>
        <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
    <SCRIPT type="text/javascript">
      var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
      var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
      var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
      var sc_userSweetAlertDisplayed = false;
    </SCRIPT>
    <SCRIPT type="text/javascript" src="../_lib/lib/js/jquery-3.6.0.min.js"></SCRIPT>
    <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
    <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
<?php
include_once("Formulario_Llamada_Bienvenida_sajax_js.php");
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="../_lib/lib/js/frameControl.js"></script>
    <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
    <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
  <?php 
  if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
  { 
  ?> 
  <link href="<?php echo $this->Ini->str_google_fonts ?>" rel="stylesheet" /> 
  <?php 
  } 
  ?> 
 </head>
  <body class="scFormPage">
      <table class="scFormTabela" align="center"><tr><td>
<?php
      $nmgp_opcao_saida_php = "igual";
      $nmgp_opc_ant_saida_php = "";
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['opc_ant'] == "novo" || $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['opc_ant'] == "incluir")
      {
          $nmgp_opc_ant_saida_php = "novo";
          $nmgp_opcao_saida_php   = "recarga";
      }
      $nm_f_saida = "./";
      nm_limpa_data($this->fechaventa, $this->field_config['fechaventa']['date_sep']) ; 
      $this->nm_converte_datas();
      $_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'on';
  $this->ConsultarData(316992,exitoso);














$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off'; 
    echo ob_get_clean();
?>
      </td></tr><tr><td align="center">
      <form name="FPHP" method="post" 
                        action="<?php echo $nm_f_saida ?>" 
                        target="_self">
      <input type=hidden name="nmgp_opcao" value=""/>
      <input type=hidden name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>"/>
      <input type=hidden name="ubicacion3" value="<?php echo $this->form_encode_input($this->ubicacion3) ?>"/>
      <input type=hidden name="nmgp_opcao" value="<?php echo $this->form_encode_input($nmgp_opcao_saida_php); ?>"/>
      <input type=hidden name="nmgp_opc_ant" value="<?php echo $this->form_encode_input($nmgp_opc_ant_saida_php); ?>"/>
      <input type=submit name="nmgp_bok" value="<?php echo $this->Ini->Nm_lang['lang_btns_cfrm'] ?>"/>
      </form>
      </td></tr></table>
      </body>
      </html>
<?php
       if (isset($this->redir_modal) && !empty($this->redir_modal))
       {
           echo "<script type=\"text/javascript\">" . $this->redir_modal . "</script>";
           $this->redir_modal = "";
       }
   }
   function sc_btn_Whatsapp() 
   {
        global $nm_url_saida, $teste_validade, 
            $glo_senha_protect, $bok, $nm_apl_dependente, $nm_form_submit, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup, $nmgp_redir;
 
     ob_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
 <head>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

      if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
      {
?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
      }

?>
        <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
    <SCRIPT type="text/javascript">
      var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
      var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
      var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
      var sc_userSweetAlertDisplayed = false;
    </SCRIPT>
    <SCRIPT type="text/javascript" src="../_lib/lib/js/jquery-3.6.0.min.js"></SCRIPT>
    <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
    <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
<?php
include_once("Formulario_Llamada_Bienvenida_sajax_js.php");
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="../_lib/lib/js/frameControl.js"></script>
    <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
    <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
  <?php 
  if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
  { 
  ?> 
  <link href="<?php echo $this->Ini->str_google_fonts ?>" rel="stylesheet" /> 
  <?php 
  } 
  ?> 
 </head>
  <body class="scFormPage">
      <table class="scFormTabela" align="center"><tr><td>
<?php
      $nmgp_opcao_saida_php = "igual";
      $nmgp_opc_ant_saida_php = "";
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['opc_ant'] == "novo" || $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['opc_ant'] == "incluir")
      {
          $nmgp_opc_ant_saida_php = "novo";
          $nmgp_opcao_saida_php   = "recarga";
      }
      $nm_f_saida = "./";
      nm_limpa_data($this->fechaventa, $this->field_config['fechaventa']['date_sep']) ; 
      $this->nm_converte_datas();
      $_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'on';
if (!isset($this->sc_temp_probando_prueba1)) {$this->sc_temp_probando_prueba1 = (isset($_SESSION['probando_prueba1'])) ? $_SESSION['probando_prueba1'] : "";}
  echo "prueba".$this->sc_temp_probando_prueba1;

$urlWhatsApp = "https://api.whatsapp.com/send?phone=51".$this->sc_temp_probando_prueba1;
 if (isset($this->sc_temp_probando_prueba1)) { $_SESSION['probando_prueba1'] = $this->sc_temp_probando_prueba1;}
 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 {
$this->nmgp_redireciona_form($urlWhatsApp, $this->nm_location, "_blank?#?" . NM_encode_input("") . "?@?","_self", '', 440, 630);
 };
if (isset($this->sc_temp_probando_prueba1)) { $_SESSION['probando_prueba1'] = $this->sc_temp_probando_prueba1;}
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off'; 
    echo ob_get_clean();
?>
      </td></tr><tr><td align="center">
      <form name="FPHP" method="post" 
                        action="<?php echo $nm_f_saida ?>" 
                        target="_self">
      <input type=hidden name="nmgp_opcao" value=""/>
      <input type=hidden name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>"/>
      <input type=hidden name="ubicacion3" value="<?php echo $this->form_encode_input($this->ubicacion3) ?>"/>
      <input type=hidden name="nmgp_opcao" value="<?php echo $this->form_encode_input($nmgp_opcao_saida_php); ?>"/>
      <input type=hidden name="nmgp_opc_ant" value="<?php echo $this->form_encode_input($nmgp_opc_ant_saida_php); ?>"/>
      <input type=submit name="nmgp_bok" value="<?php echo $this->Ini->Nm_lang['lang_btns_cfrm'] ?>"/>
      </form>
      </td></tr></table>
      </body>
      </html>
<?php
       if (isset($this->redir_modal) && !empty($this->redir_modal))
       {
           echo "<script type=\"text/javascript\">" . $this->redir_modal . "</script>";
           $this->redir_modal = "";
       }
   }
//
//--------------------------------------------------------------------------------------
   function Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, $mode = 3) 
   {
       switch ($mode)
       {
           case 1:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 2:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta, true);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 3:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;

           case 4:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros_SweetAlert($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;
       }
   }

   function Formata_Campos_Falta($Campos_Falta, $table = false) 
   {
       $Campos_Falta = array_unique($Campos_Falta);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_reqd'] . ' ' . implode('; ', $Campos_Falta);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Falta);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Falta as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_reqd'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Crit($Campos_Crit, $table = false) 
   {
       $Campos_Crit = array_unique($Campos_Crit);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . implode('; ', $Campos_Crit);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Crit);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Crit as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_flds'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros($Campos_Erros) 
   {
       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= '<tr>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Recupera_Nome_Campo($campo) . ':</td>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', array_unique($erros)) . '</td>';
           $sError .= '</tr>';
       }

       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros_SweetAlert($Campos_Erros) 
   {
       $sError  = '';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= $this->Recupera_Nome_Campo($campo) . ': ' . implode('<br />', array_unique($erros)) . '<br />';
       }

       return $sError;
   }

   function Recupera_Nome_Campo($campo) 
   {
       switch($campo)
       {
           case 'contratonumero':
               return "Número de Contrato ";
               break;
           case 'nombreedv':
               return "Nombre Ejecutivo de Ventas";
               break;
           case 'supervisor':
               return "Nombre del Supervisor";
               break;
           case 'fechaventa':
               return "Fecha de Venta";
               break;
           case 'grupofechainauguracion':
               return "Grupo Fecha Inauguración";
               break;
           case 'nombreasociaso':
               return "Nombre";
               break;
           case 'tipodocumento1':
               return "Tipo Documento";
               break;
           case 'numerodocumento1':
               return "Nro Documento";
               break;
           case 'ubicacion':
               return "Ubicación";
               break;
           case 'correopersonal1':
               return "Correo Personal";
               break;
           case 'correolaboral1':
               return "Correo Laboral";
               break;
           case 'tf11':
               return "Teléfono de Contacto ";
               break;
           case 'tf13':
               return "Teléfono Domicilio";
               break;
           case 'tf12':
               return "Teléfono Personal";
               break;
           case 'tf14':
               return "Teléfono Laboral";
               break;
           case 'tf15':
               return "Teléfono Otros";
               break;
           case 'tf16':
               return "Móvil ";
               break;
           case 'tf17':
               return "Móvil Personal ";
               break;
           case 'tf18':
               return "Móvil Extra";
               break;
           case 'tf19':
               return "Móvil Contacto";
               break;
           case 'nombreasociado2':
               return "Asociado";
               break;
           case 'tipodocumento2':
               return "Tipo Documento";
               break;
           case 'numerodocumento2':
               return "Nro Documento";
               break;
           case 'ubicacion2':
               return "Ubicación";
               break;
           case 'correopersonal2':
               return "Correo Personal";
               break;
           case 'correolaboral2':
               return "Correo Laboral";
               break;
           case 'tf21':
               return "Teléfono de Contacto ";
               break;
           case 'tf22':
               return "Teléfono Personal";
               break;
           case 'tf23':
               return "Teléfono Domicilio";
               break;
           case 'tf24':
               return "Teléfono Laboral";
               break;
           case 'tf25':
               return "Teléfono Otros";
               break;
           case 'tf26':
               return "Móvil ";
               break;
           case 'tf27':
               return "Móvil Personal";
               break;
           case 'tf28':
               return "Móvil Extra";
               break;
           case 'tf29':
               return "Móvil de Contacto ";
               break;
           case 'nombreasociado3':
               return "Asociado";
               break;
           case 'tipodocumento3':
               return "Tipo Documento";
               break;
           case 'numerodocumento3':
               return "Nro Documento";
               break;
           case 'ubicacion3':
               return "Ubicación";
               break;
           case 'correopersonal3':
               return "Correo Personal";
               break;
           case 'correolaboral3':
               return "Correo Laboral";
               break;
           case 'tf31':
               return "Teléfono de Contacto";
               break;
           case 'tf32':
               return "Teléfono Domicilio";
               break;
           case 'tf33':
               return "Teléfono Personal";
               break;
           case 'tf34':
               return "Teléfono Laboral";
               break;
           case 'tf35':
               return "Teléfono Otros";
               break;
           case 'tf36':
               return "Móvil";
               break;
           case 'tf37':
               return "Móvil Personal";
               break;
           case 'tf38':
               return "Móvil Extra";
               break;
           case 'tf39':
               return "Móvil Contacto";
               break;
           case 'cantidadintentos':
               return "Nro de intentos";
               break;
           case 'telefono':
               return "Teléfono *";
               break;
           case 'estado':
               return "Estado de Llamada *";
               break;
           case 'indicadorexitoconforme':
               return "Asociado Conforme? *";
               break;
           case 'motivo':
               return "Motivo *";
               break;
           case 'motivoc':
               return "Motivo *";
               break;
           case 'comentario':
               return "Comentario *";
               break;
           case 'contratoid':
               return "ID";
               break;
       }

       return $campo;
   }

   function dateDefaultFormat()
   {
       if (isset($this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']))
       {
           $sDate = str_replace('yyyy', 'Y', $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']);
           $sDate = str_replace('mm',   'm', $sDate);
           $sDate = str_replace('dd',   'd', $sDate);
           return substr(chunk_split($sDate, 1, $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_sep']), 0, -1);
       }
       elseif ('en_us' == $this->Ini->str_lang)
       {
           return 'm/d/Y';
       }
       else
       {
           return 'd/m/Y';
       }
   } // dateDefaultFormat

//
//--------------------------------------------------------------------------------------
   function Valida_campos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser, $teste_validade;
//---------------------------------------------------------
     $this->sc_force_zero = array();
      if ('' == $filtro || 'contratonumero' == $filtro)
        $this->ValidateField_contratonumero($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nombreedv' == $filtro)
        $this->ValidateField_nombreedv($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'supervisor' == $filtro)
        $this->ValidateField_supervisor($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fechaventa' == $filtro)
        $this->ValidateField_fechaventa($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'grupofechainauguracion' == $filtro)
        $this->ValidateField_grupofechainauguracion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nombreasociaso' == $filtro)
        $this->ValidateField_nombreasociaso($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tipodocumento1' == $filtro)
        $this->ValidateField_tipodocumento1($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'numerodocumento1' == $filtro)
        $this->ValidateField_numerodocumento1($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'ubicacion' == $filtro)
        $this->ValidateField_ubicacion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'correopersonal1' == $filtro)
        $this->ValidateField_correopersonal1($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'correolaboral1' == $filtro)
        $this->ValidateField_correolaboral1($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf11' == $filtro)
        $this->ValidateField_tf11($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf13' == $filtro)
        $this->ValidateField_tf13($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf12' == $filtro)
        $this->ValidateField_tf12($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf14' == $filtro)
        $this->ValidateField_tf14($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf15' == $filtro)
        $this->ValidateField_tf15($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf16' == $filtro)
        $this->ValidateField_tf16($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf17' == $filtro)
        $this->ValidateField_tf17($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf18' == $filtro)
        $this->ValidateField_tf18($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf19' == $filtro)
        $this->ValidateField_tf19($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nombreasociado2' == $filtro)
        $this->ValidateField_nombreasociado2($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tipodocumento2' == $filtro)
        $this->ValidateField_tipodocumento2($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'numerodocumento2' == $filtro)
        $this->ValidateField_numerodocumento2($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'ubicacion2' == $filtro)
        $this->ValidateField_ubicacion2($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'correopersonal2' == $filtro)
        $this->ValidateField_correopersonal2($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'correolaboral2' == $filtro)
        $this->ValidateField_correolaboral2($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf21' == $filtro)
        $this->ValidateField_tf21($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf22' == $filtro)
        $this->ValidateField_tf22($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf23' == $filtro)
        $this->ValidateField_tf23($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf24' == $filtro)
        $this->ValidateField_tf24($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf25' == $filtro)
        $this->ValidateField_tf25($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf26' == $filtro)
        $this->ValidateField_tf26($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf27' == $filtro)
        $this->ValidateField_tf27($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf28' == $filtro)
        $this->ValidateField_tf28($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf29' == $filtro)
        $this->ValidateField_tf29($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nombreasociado3' == $filtro)
        $this->ValidateField_nombreasociado3($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tipodocumento3' == $filtro)
        $this->ValidateField_tipodocumento3($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'numerodocumento3' == $filtro)
        $this->ValidateField_numerodocumento3($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'ubicacion3' == $filtro)
        $this->ValidateField_ubicacion3($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'correopersonal3' == $filtro)
        $this->ValidateField_correopersonal3($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'correolaboral3' == $filtro)
        $this->ValidateField_correolaboral3($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf31' == $filtro)
        $this->ValidateField_tf31($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf32' == $filtro)
        $this->ValidateField_tf32($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf33' == $filtro)
        $this->ValidateField_tf33($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf34' == $filtro)
        $this->ValidateField_tf34($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf35' == $filtro)
        $this->ValidateField_tf35($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf36' == $filtro)
        $this->ValidateField_tf36($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf37' == $filtro)
        $this->ValidateField_tf37($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf38' == $filtro)
        $this->ValidateField_tf38($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tf39' == $filtro)
        $this->ValidateField_tf39($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cantidadintentos' == $filtro)
        $this->ValidateField_cantidadintentos($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'telefono' == $filtro)
        $this->ValidateField_telefono($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'estado' == $filtro)
        $this->ValidateField_estado($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'indicadorexitoconforme' == $filtro)
        $this->ValidateField_indicadorexitoconforme($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'motivo' == $filtro)
        $this->ValidateField_motivo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'motivoc' == $filtro)
        $this->ValidateField_motivoc($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'comentario' == $filtro)
        $this->ValidateField_comentario($Campos_Crit, $Campos_Falta, $Campos_Erros);
//-- converter datas   
          $this->nm_converte_datas();
//---

      if (empty($Campos_Crit) && empty($Campos_Falta))
      {
      if (!isset($this->NM_ajax_flag) || 'validate_' != substr($this->NM_ajax_opcao, 0, 9))
      {
      $_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'on';
  if ((!isset($this->telefono ) || empty($this->telefono ) )){
	
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "Ingresar número de teléfono";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_Formulario_Llamada_Bienvenida' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "Ingresar número de teléfono";
 }
;
	}
if (strlen ($this->telefono )<5){
	
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "Ingresar número de teléfono con minimo 6 digitos";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_Formulario_Llamada_Bienvenida' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "Ingresar número de teléfono con minimo 6 digitos";
 }
;
	}
$valEstLlamada = $this->estado .'A';
if ($valEstLlamada=='A'){
 	
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "Estado Llamada:	Campo obligatorio";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_Formulario_Llamada_Bienvenida' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "Estado Llamada:	Campo obligatorio";
 }
;
 	}
if ((!isset($this->comentario ) || empty($this->comentario ) )){
 	
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "Comentario:	Campo obligatorio";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_Formulario_Llamada_Bienvenida' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "Comentario:	Campo obligatorio";
 }
;
 	}
$valconfLlamada =$this->indicadorexitoconforme .'B';
if ($valEstLlamada=='1A' && $valconfLlamada=='B'){
 	
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "Asociado Conforme?:	Campo obligatorio";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_Formulario_Llamada_Bienvenida' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "Asociado Conforme?:	Campo obligatorio";
 }
;
 	}
if (isset($this->Campos_Mens_erro) && !empty($this->Campos_Mens_erro))
{
    $_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off';
    return;
}
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off'; 
      }
      }
      if (!empty($Campos_Crit) || !empty($Campos_Falta) || !empty($this->Campos_Mens_erro))
      {
          if (!empty($this->sc_force_zero))
          {
              foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
              {
                  eval('$this->' . $sc_force_zero_field . ' = "";');
                  unset($this->sc_force_zero[$i_force_zero]);
              }
          }
      }

      if (empty($Campos_Crit) && empty($Campos_Falta) && empty($this->Campos_Mens_erro))
      {
          if (!isset($this->NM_ajax_flag) || 'validate_' != substr($this->NM_ajax_opcao, 0, 9))
          {
              $_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'on';
if (!isset($this->sc_temp_estadoMensaje)) {$this->sc_temp_estadoMensaje = (isset($_SESSION['estadoMensaje'])) ? $_SESSION['estadoMensaje'] : "";}
if (!isset($this->sc_temp_ContratoID)) {$this->sc_temp_ContratoID = (isset($_SESSION['ContratoID'])) ? $_SESSION['ContratoID'] : "";}
if (!isset($this->sc_temp_id)) {$this->sc_temp_id = (isset($_SESSION['id'])) ? $_SESSION['id'] : "";}
  

 $indExito = $this->estado ;
 $estadoLlamadaContrato = "0"; 


$insert_sql = "";
$msj = "Llamada de Bienvenida";

$sqlUsrLlamada = "SELECT 
	   UsuarioID
      ,RolID
      ,PersonaID
  FROM SEG_Usuario where usuarioNombre = '".$this->sc_temp_id."'";
 
      $nm_select = $sqlUsrLlamada; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->ListUserLlamada = array();
      $this->listuserllamada = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->ListUserLlamada[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->listuserllamada[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->ListUserLlamada = false;
          $this->ListUserLlamada_erro = $this->Db->ErrorMsg();
          $this->listuserllamada = false;
          $this->listuserllamada_erro = $this->Db->ErrorMsg();
      } 
;
$llamadaUserID =$this->listuserllamada[0][0];


if ($indExito=='1') {
	$msj =$msj." exitosa.";
	
	$indExitoConforme = $this->indicadorexitoconforme ;


	if ($indExitoConforme=='0') {
	 	$estadoLlamadaContrato = "2"; 
		$motivoConforme = $this->motivoc ;
		$msj =$msj." Usuario no conforme, el motivo es: ";

		$sqlMotivoNoConforme=	"SELECT ListaID,  ListaNombre
								FROM dbo.GEN_Lista 
								where Listatipo='LLamada no Conforme' and 
								 ListaID = ".$motivoConforme;

		 
      $nm_select = $sqlMotivoNoConforme; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->ListaNoConforme = array();
      $this->listanoconforme = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->ListaNoConforme[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->listanoconforme[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->ListaNoConforme = false;
          $this->ListaNoConforme_erro = $this->Db->ErrorMsg();
          $this->listanoconforme = false;
          $this->listanoconforme_erro = $this->Db->ErrorMsg();
      } 
;
		$motivoNoConforme=$this->listanoconforme[0][1];
		$msj =$msj.$motivoNoConforme.", número de celular ".$this->telefono .".";

		
		$sqlInsertVenLLamada = "INSERT INTO VEN_LlamadaBienvenida (
			  ContratoID
			  ,LlamadaBienvenidaTelefono
			  ,LlamadaBienvenidaEstado
			  ,LlamadaBienvenidaConforme
			  ,LlamadaBienvenidaNoConforme
			  ,LlamadaBienvenidaNoExito
			  ,LlamadaBienvenidaComentario
			  ,LlamadaBienvenidaFechaCreacion
			  ,UsuarioIDCreacion
			  ,LlamadaBienvenidaFechaModificacion
			  ,UsuarioIDModificacion
				) VALUES (".$this->sc_temp_ContratoID." 
				, '".$this->telefono . "'
				, '".$indExito."'
				, '".$indExitoConforme."'
				, ".$motivoConforme."
				, null 
				, '".$this->comentario ."'
				, Getdate()
				, ".$llamadaUserID."
				, null, null
				)";
		

			$sqlActualizarRestriccion="UPDATE FOC_ContratoRequisito
		   SET 
		   contratorequisitovalor = 1 ,
		   ContratoRequisitoUsuarioIDModificacion = ".$llamadaUserID.",
		   ContratoRequisitoObservacion = '".$msj."',
		   ContratoRequisitoFechaModificacion = Getdate()
		   WHERE ContratoID=".$this->sc_temp_ContratoID." and 
		   RequisitoID = 14";
		
     $nm_select = $sqlActualizarRestriccion; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                Formulario_Llamada_Bienvenida_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;
 
			$sqlActualizarRestriccionContrato="Execute  
			USP_FOC_Modificar_Restriccion_PorLlamadaBienvenida ".$this->sc_temp_ContratoID;
	

		    
     $nm_select = $sqlActualizarRestriccionContrato; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                Formulario_Llamada_Bienvenida_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;
		
		$this->enviarcorreonoconforme($this->sc_temp_ContratoID,$motivoNoConforme);
		
		
		}
	 if ($indExitoConforme=='1') {
	 	 $estadoLlamadaContrato = "1"; 

		$msj =$msj." Usuario conforme, ";
		$msj =$msj." número de celular ".$this->telefono .".";

		$sqlInsertVenLLamada = "INSERT INTO VEN_LlamadaBienvenida (
			  ContratoID
			  ,LlamadaBienvenidaTelefono
			  ,LlamadaBienvenidaEstado
			  ,LlamadaBienvenidaConforme
			  ,LlamadaBienvenidaNoConforme
			  ,LlamadaBienvenidaNoExito
			  ,LlamadaBienvenidaComentario
			  ,LlamadaBienvenidaFechaCreacion
			  ,UsuarioIDCreacion
			  ,LlamadaBienvenidaFechaModificacion
			  ,UsuarioIDModificacion
				) VALUES (".$this->sc_temp_ContratoID." 
				, '".$this->telefono . "'
				, '".$indExito."'
				, '".$indExitoConforme."'
				, null 
				, null
				, '".$this->comentario ."'
				, Getdate()
				, ".$llamadaUserID."
				, null, null
				)";

		 
			$sqlActualizarRestriccion="UPDATE FOC_ContratoRequisito
				   SET 
				   contratorequisitovalor = 1 ,
				   ContratoRequisitoUsuarioIDModificacion = ".$llamadaUserID.",
				   ContratoRequisitoObservacion = '',
				   ContratoRequisitoFechaModificacion = Getdate()
				   WHERE ContratoID=".$this->sc_temp_ContratoID." and 
				   RequisitoID = 14";

		    
     $nm_select = $sqlActualizarRestriccion; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                Formulario_Llamada_Bienvenida_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;
		 
			$sqlActualizarRestriccionContrato="Execute  
			USP_FOC_Modificar_Restriccion_PorLlamadaBienvenida ".$this->sc_temp_ContratoID;

		    
     $nm_select = $sqlActualizarRestriccionContrato; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                Formulario_Llamada_Bienvenida_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;
		}
}
if ($indExito=='0') {
	$msj =$msj. " no exitosa. A causa de: ";

	$motivoExitosa = $this->motivo ;

	$sqlMotivoNoExito=	"SELECT ListaID,  ListaNombre
					FROM dbo.GEN_Lista 
					where ListaTipo='LLamada no Exito' and
					ListaID = ".$motivoExitosa;
	 
      $nm_select = $sqlMotivoNoExito; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->ListaNoExito = array();
      $this->listanoexito = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->ListaNoExito[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->listanoexito[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->ListaNoExito = false;
          $this->ListaNoExito_erro = $this->Db->ErrorMsg();
          $this->listanoexito = false;
          $this->listanoexito_erro = $this->Db->ErrorMsg();
      } 
;
	$motivoNoExito=$this->listanoexito[0][1];
	$msj =$msj.$motivoNoExito.", número de celular ".$this->telefono .".";
			
	$sqlInsertVenLLamada = "INSERT INTO VEN_LlamadaBienvenida (
		  ContratoID
		  ,LlamadaBienvenidaTelefono
		  ,LlamadaBienvenidaEstado
		  ,LlamadaBienvenidaConforme
		  ,LlamadaBienvenidaNoConforme
		  ,LlamadaBienvenidaNoExito
		  ,LlamadaBienvenidaComentario
		  ,LlamadaBienvenidaFechaCreacion
		  ,UsuarioIDCreacion
		  ,LlamadaBienvenidaFechaModificacion
		  ,UsuarioIDModificacion
			) VALUES (".$this->sc_temp_ContratoID." 
			, '".$this->telefono . "'
			, '".$indExito."'
			, null
			, null
			, ".$motivoExitosa." 
			, '".$this->comentario ."'
			, Getdate()
			, ".$llamadaUserID."
			, null, null
			)";
	
			$sqlActualizarRestriccion="UPDATE FOC_ContratoRequisito
				   SET 
				   contratorequisitovalor = 2 ,
				   ContratoRequisitoUsuarioIDModificacion = ".$llamadaUserID.",
				   ContratoRequisitoObservacion = '".$msj."',
				   ContratoRequisitoFechaModificacion = Getdate()
				   WHERE ContratoID=".$this->sc_temp_ContratoID." and 
				   RequisitoID = 14";

		    
     $nm_select = $sqlActualizarRestriccion; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                Formulario_Llamada_Bienvenida_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;
	$sqlCantidadRegistrosNoExitosos= "SELECT COUNT (1) from VEN_LlamadaBienvenida
	where LlamadaBienvenidaEstado = '0' and ContratoID =".$this->sc_temp_ContratoID."";
	 
      $nm_select = $sqlCantidadRegistrosNoExitosos; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->CantidadNoExitosos = array();
      $this->cantidadnoexitosos = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->CantidadNoExitosos[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->cantidadnoexitosos[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->CantidadNoExitosos = false;
          $this->CantidadNoExitosos_erro = $this->Db->ErrorMsg();
          $this->cantidadnoexitosos = false;
          $this->cantidadnoexitosos_erro = $this->Db->ErrorMsg();
      } 
;
	$cantidadNoExitosos= 0;


	if(count($this->cantidadnoexitosos ) != 0){
	$cantidadNoExitosos=$this->cantidadnoexitosos[0][0];
	}

	if ($cantidadNoExitosos>=2){
	$sqlActualizarIndCallCenter="UPDATE FOC_Contrato
	   SET 
	   ContratoIndCallCenter = 1,
	   UsuarioIDModificacion = ".$llamadaUserID.",
	   ContratoFechaModificacion = Getdate()
	   WHERE ContratoID=".$this->sc_temp_ContratoID."";
	
     $nm_select = $sqlActualizarIndCallCenter; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                Formulario_Llamada_Bienvenida_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;
	}

}
$msj =$msj.$this->comentario .".";








     $nm_select = $sqlInsertVenLLamada; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                Formulario_Llamada_Bienvenida_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;

$executeProcedureSafComentario="execute USP_FOC_AgregarContratoAcuerdo ".$this->sc_temp_ContratoID.", '".$msj."', ".$llamadaUserID."";

     $nm_select = $executeProcedureSafComentario; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                Formulario_Llamada_Bienvenida_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;


$sqlActualizarUltimoEstado="UPDATE FOC_Contrato
	   SET 
	   ContratoEstadoLlamadaBienvenida ='".$estadoLlamadaContrato."',
	   UsuarioIDModificacion = ".$llamadaUserID.",
	   ContratoFechaModificacion = Getdate()
	   WHERE ContratoID=".$this->sc_temp_ContratoID."";

     $nm_select = $sqlActualizarUltimoEstado; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                Formulario_Llamada_Bienvenida_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;



$this->sc_temp_estadoMensaje=1;
if (isset($this->sc_temp_id)) { $_SESSION['id'] = $this->sc_temp_id;}
if (isset($this->sc_temp_ContratoID)) { $_SESSION['ContratoID'] = $this->sc_temp_ContratoID;}
if (isset($this->sc_temp_estadoMensaje)) { $_SESSION['estadoMensaje'] = $this->sc_temp_estadoMensaje;}
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off'; 
          }
      }
   }

    function ValidateField_contratonumero(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->contratonumero) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'contratonumero';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_contratonumero

    function ValidateField_nombreedv(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->nombreedv) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nombreedv';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nombreedv

    function ValidateField_supervisor(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->supervisor) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'supervisor';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_supervisor

    function ValidateField_fechaventa(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->fechaventa) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fechaventa';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fechaventa

    function ValidateField_grupofechainauguracion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->grupofechainauguracion) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'grupofechainauguracion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_grupofechainauguracion

    function ValidateField_nombreasociaso(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->nombreasociaso) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nombreasociaso';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nombreasociaso

    function ValidateField_tipodocumento1(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tipodocumento1) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tipodocumento1';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tipodocumento1

    function ValidateField_numerodocumento1(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->numerodocumento1) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'numerodocumento1';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_numerodocumento1

    function ValidateField_ubicacion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->ubicacion) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'ubicacion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_ubicacion

    function ValidateField_correopersonal1(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->correopersonal1) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'correopersonal1';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_correopersonal1

    function ValidateField_correolaboral1(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->correolaboral1) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'correolaboral1';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_correolaboral1

    function ValidateField_tf11(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf11) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf11';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf11

    function ValidateField_tf13(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf13) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf13';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf13

    function ValidateField_tf12(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf12) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf12';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf12

    function ValidateField_tf14(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf14) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf14';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf14

    function ValidateField_tf15(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf15) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf15';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf15

    function ValidateField_tf16(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf16) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf16';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf16

    function ValidateField_tf17(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf17) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf17';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf17

    function ValidateField_tf18(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf18) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf18';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf18

    function ValidateField_tf19(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf19) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf19';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf19

    function ValidateField_nombreasociado2(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->nombreasociado2) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nombreasociado2';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nombreasociado2

    function ValidateField_tipodocumento2(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tipodocumento2) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tipodocumento2';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tipodocumento2

    function ValidateField_numerodocumento2(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->numerodocumento2) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'numerodocumento2';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_numerodocumento2

    function ValidateField_ubicacion2(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->ubicacion2) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'ubicacion2';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_ubicacion2

    function ValidateField_correopersonal2(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->correopersonal2) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'correopersonal2';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_correopersonal2

    function ValidateField_correolaboral2(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->correolaboral2) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'correolaboral2';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_correolaboral2

    function ValidateField_tf21(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf21) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf21';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf21

    function ValidateField_tf22(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf22) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf22';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf22

    function ValidateField_tf23(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf23) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf23';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf23

    function ValidateField_tf24(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf24) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf24';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf24

    function ValidateField_tf25(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf25) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf25';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf25

    function ValidateField_tf26(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf26) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf26';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf26

    function ValidateField_tf27(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf27) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf27';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf27

    function ValidateField_tf28(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf28) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf28';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf28

    function ValidateField_tf29(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf29) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf29';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf29

    function ValidateField_nombreasociado3(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->nombreasociado3) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nombreasociado3';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nombreasociado3

    function ValidateField_tipodocumento3(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tipodocumento3) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tipodocumento3';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tipodocumento3

    function ValidateField_numerodocumento3(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->numerodocumento3) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'numerodocumento3';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_numerodocumento3

    function ValidateField_ubicacion3(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->ubicacion3) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'ubicacion3';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_ubicacion3

    function ValidateField_correopersonal3(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->correopersonal3) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'correopersonal3';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_correopersonal3

    function ValidateField_correolaboral3(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->correolaboral3) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'correolaboral3';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_correolaboral3

    function ValidateField_tf31(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf31) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf31';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf31

    function ValidateField_tf32(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf32) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf32';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf32

    function ValidateField_tf33(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf33) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf33';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf33

    function ValidateField_tf34(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf34) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf34';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf34

    function ValidateField_tf35(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf35) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf35';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf35

    function ValidateField_tf36(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf36) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf36';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf36

    function ValidateField_tf37(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf37) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf37';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf37

    function ValidateField_tf38(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf38) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf38';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf38

    function ValidateField_tf39(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tf39) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tf39';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tf39

    function ValidateField_cantidadintentos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->cantidadintentos) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'cantidadintentos';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_cantidadintentos

    function ValidateField_telefono(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->telefono) > 12) 
          { 
              $hasError = true;
              $Campos_Crit .= "Teléfono * " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 12 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['telefono']))
              {
                  $Campos_Erros['telefono'] = array();
              }
              $Campos_Erros['telefono'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 12 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['telefono']) || !is_array($this->NM_ajax_info['errList']['telefono']))
              {
                  $this->NM_ajax_info['errList']['telefono'] = array();
              }
              $this->NM_ajax_info['errList']['telefono'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 12 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
          if (NM_utf8_strlen($this->telefono) < 6) 
          { 
              $hasError = true;
              $Campos_Crit .= "Teléfono * " . $this->Ini->Nm_lang['lang_errm_mnch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['telefono']))
              {
                  $Campos_Erros['telefono'] = array();
              }
              $Campos_Erros['telefono'][] = $this->Ini->Nm_lang['lang_errm_mnch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['telefono']) || !is_array($this->NM_ajax_info['errList']['telefono']))
              {
                  $this->NM_ajax_info['errList']['telefono'] = array();
              }
              $this->NM_ajax_info['errList']['telefono'][] = $this->Ini->Nm_lang['lang_errm_mnch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $Teste_trab = "01234567890123456789";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8")
      {
          $Teste_trab = NM_conv_charset($Teste_trab, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
;
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = $this->telefono ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < mb_strlen($this->telefono, $_SESSION['scriptcase']['charset']); $x++) 
          { 
               for ($y = 0; $y < mb_strlen($Teste_trab, $_SESSION['scriptcase']['charset']); $y++) 
               { 
                    if (sc_substr($Teste_compara, $x, 1) == sc_substr($Teste_trab, $y, 1) ) 
                    { 
                        break ; 
                    } 
               } 
               if (sc_substr($Teste_compara, $x, 1) != sc_substr($Teste_trab, $y, 1) )  
               { 
                  $Teste_critica = 1 ; 
               } 
          } 
          if ($Teste_critica == 1) 
          { 
              $hasError = true;
              $Campos_Crit .= "Teléfono * " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['telefono']))
              {
                  $Campos_Erros['telefono'] = array();
              }
              $Campos_Erros['telefono'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['telefono']) || !is_array($this->NM_ajax_info['errList']['telefono']))
              {
                  $this->NM_ajax_info['errList']['telefono'] = array();
              }
              $this->NM_ajax_info['errList']['telefono'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'telefono';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_telefono

    function ValidateField_estado(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->estado == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
      if ($this->estado != "")
      { 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_estado']) && !in_array($this->estado, $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_estado']))
          {
              $hasError = true;
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['estado']))
              {
                  $Campos_Erros['estado'] = array();
              }
              $Campos_Erros['estado'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['estado']) || !is_array($this->NM_ajax_info['errList']['estado']))
              {
                  $this->NM_ajax_info['errList']['estado'] = array();
              }
              $this->NM_ajax_info['errList']['estado'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
      }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'estado';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_estado

    function ValidateField_indicadorexitoconforme(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->indicadorexitoconforme == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
      if ($this->indicadorexitoconforme != "")
      { 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_indicadorexitoconforme']) && !in_array($this->indicadorexitoconforme, $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_indicadorexitoconforme']))
          {
              $hasError = true;
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['indicadorexitoconforme']))
              {
                  $Campos_Erros['indicadorexitoconforme'] = array();
              }
              $Campos_Erros['indicadorexitoconforme'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['indicadorexitoconforme']) || !is_array($this->NM_ajax_info['errList']['indicadorexitoconforme']))
              {
                  $this->NM_ajax_info['errList']['indicadorexitoconforme'] = array();
              }
              $this->NM_ajax_info['errList']['indicadorexitoconforme'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
      }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'indicadorexitoconforme';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_indicadorexitoconforme

    function ValidateField_motivo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->motivo) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivo']) && !in_array($this->motivo, $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivo']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['motivo']))
                   {
                       $Campos_Erros['motivo'] = array();
                   }
                   $Campos_Erros['motivo'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['motivo']) || !is_array($this->NM_ajax_info['errList']['motivo']))
                   {
                       $this->NM_ajax_info['errList']['motivo'] = array();
                   }
                   $this->NM_ajax_info['errList']['motivo'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'motivo';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_motivo

    function ValidateField_motivoc(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->motivoc) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivoc']) && !in_array($this->motivoc, $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivoc']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['motivoc']))
                   {
                       $Campos_Erros['motivoc'] = array();
                   }
                   $Campos_Erros['motivoc'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['motivoc']) || !is_array($this->NM_ajax_info['errList']['motivoc']))
                   {
                       $this->NM_ajax_info['errList']['motivoc'] = array();
                   }
                   $this->NM_ajax_info['errList']['motivoc'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'motivoc';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_motivoc

    function ValidateField_comentario(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->comentario) > 250) 
          { 
              $hasError = true;
              $Campos_Crit .= "Comentario * " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['comentario']))
              {
                  $Campos_Erros['comentario'] = array();
              }
              $Campos_Erros['comentario'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['comentario']) || !is_array($this->NM_ajax_info['errList']['comentario']))
              {
                  $this->NM_ajax_info['errList']['comentario'] = array();
              }
              $this->NM_ajax_info['errList']['comentario'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'comentario';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_comentario

    function removeDuplicateDttmError($aErrDate, &$aErrTime)
    {
        if (empty($aErrDate) || empty($aErrTime))
        {
            return;
        }

        foreach ($aErrDate as $sErrDate)
        {
            foreach ($aErrTime as $iErrTime => $sErrTime)
            {
                if ($sErrDate == $sErrTime)
                {
                    unset($aErrTime[$iErrTime]);
                }
            }
        }
    } // removeDuplicateDttmError

   function nm_guardar_campos()
   {
    global
           $sc_seq_vert;
    $this->nmgp_dados_form['contratonumero'] = $this->contratonumero;
    $this->nmgp_dados_form['nombreedv'] = $this->nombreedv;
    $this->nmgp_dados_form['supervisor'] = $this->supervisor;
    $this->nmgp_dados_form['fechaventa'] = (strlen(trim($this->fechaventa)) > 19) ? str_replace(".", ":", $this->fechaventa) : trim($this->fechaventa);
    $this->nmgp_dados_form['grupofechainauguracion'] = $this->grupofechainauguracion;
    $this->nmgp_dados_form['nombreasociaso'] = $this->nombreasociaso;
    $this->nmgp_dados_form['tipodocumento1'] = $this->tipodocumento1;
    $this->nmgp_dados_form['numerodocumento1'] = $this->numerodocumento1;
    $this->nmgp_dados_form['ubicacion'] = $this->ubicacion;
    $this->nmgp_dados_form['correopersonal1'] = $this->correopersonal1;
    $this->nmgp_dados_form['correolaboral1'] = $this->correolaboral1;
    $this->nmgp_dados_form['tf11'] = $this->tf11;
    $this->nmgp_dados_form['tf13'] = $this->tf13;
    $this->nmgp_dados_form['tf12'] = $this->tf12;
    $this->nmgp_dados_form['tf14'] = $this->tf14;
    $this->nmgp_dados_form['tf15'] = $this->tf15;
    $this->nmgp_dados_form['tf16'] = $this->tf16;
    $this->nmgp_dados_form['tf17'] = $this->tf17;
    $this->nmgp_dados_form['tf18'] = $this->tf18;
    $this->nmgp_dados_form['tf19'] = $this->tf19;
    $this->nmgp_dados_form['nombreasociado2'] = $this->nombreasociado2;
    $this->nmgp_dados_form['tipodocumento2'] = $this->tipodocumento2;
    $this->nmgp_dados_form['numerodocumento2'] = $this->numerodocumento2;
    $this->nmgp_dados_form['ubicacion2'] = $this->ubicacion2;
    $this->nmgp_dados_form['correopersonal2'] = $this->correopersonal2;
    $this->nmgp_dados_form['correolaboral2'] = $this->correolaboral2;
    $this->nmgp_dados_form['tf21'] = $this->tf21;
    $this->nmgp_dados_form['tf22'] = $this->tf22;
    $this->nmgp_dados_form['tf23'] = $this->tf23;
    $this->nmgp_dados_form['tf24'] = $this->tf24;
    $this->nmgp_dados_form['tf25'] = $this->tf25;
    $this->nmgp_dados_form['tf26'] = $this->tf26;
    $this->nmgp_dados_form['tf27'] = $this->tf27;
    $this->nmgp_dados_form['tf28'] = $this->tf28;
    $this->nmgp_dados_form['tf29'] = $this->tf29;
    $this->nmgp_dados_form['nombreasociado3'] = $this->nombreasociado3;
    $this->nmgp_dados_form['tipodocumento3'] = $this->tipodocumento3;
    $this->nmgp_dados_form['numerodocumento3'] = $this->numerodocumento3;
    $this->nmgp_dados_form['ubicacion3'] = $this->ubicacion3;
    $this->nmgp_dados_form['correopersonal3'] = $this->correopersonal3;
    $this->nmgp_dados_form['correolaboral3'] = $this->correolaboral3;
    $this->nmgp_dados_form['tf31'] = $this->tf31;
    $this->nmgp_dados_form['tf32'] = $this->tf32;
    $this->nmgp_dados_form['tf33'] = $this->tf33;
    $this->nmgp_dados_form['tf34'] = $this->tf34;
    $this->nmgp_dados_form['tf35'] = $this->tf35;
    $this->nmgp_dados_form['tf36'] = $this->tf36;
    $this->nmgp_dados_form['tf37'] = $this->tf37;
    $this->nmgp_dados_form['tf38'] = $this->tf38;
    $this->nmgp_dados_form['tf39'] = $this->tf39;
    $this->nmgp_dados_form['cantidadintentos'] = $this->cantidadintentos;
    $this->nmgp_dados_form['telefono'] = $this->telefono;
    $this->nmgp_dados_form['estado'] = $this->estado;
    $this->nmgp_dados_form['indicadorexitoconforme'] = $this->indicadorexitoconforme;
    $this->nmgp_dados_form['motivo'] = $this->motivo;
    $this->nmgp_dados_form['motivoc'] = $this->motivoc;
    $this->nmgp_dados_form['comentario'] = $this->comentario;
    $this->nmgp_dados_form['contratoid'] = $this->contratoid;
    $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['fechaventa'] = $this->fechaventa;
      nm_limpa_data($this->fechaventa, $this->field_config['fechaventa']['date_sep']) ; 
   }
   function sc_add_currency(&$value, $symbol, $pos)
   {
       if ('' == $value)
       {
           return;
       }
       $value = (1 == $pos || 3 == $pos) ? $symbol . ' ' . $value : $value . ' ' . $symbol;
   }
   function sc_remove_currency(&$value, $symbol_dec, $symbol_tho, $symbol_mon)
   {
       $value = preg_replace('~&#x0*([0-9a-f]+);~i', '', $value);
       $sNew  = str_replace($symbol_mon, '', $value);
       if ($sNew != $value)
       {
           $value = str_replace(' ', '', $sNew);
           return;
       }
       $aTest = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '-', $symbol_dec, $symbol_tho);
       $sNew  = '';
       for ($i = 0; $i < strlen($value); $i++)
       {
           if ($this->sc_test_currency_char($value[$i], $aTest))
           {
               $sNew .= $value[$i];
           }
       }
       $value = $sNew;
   }
   function sc_test_currency_char($char, $test)
   {
       $found = false;
       foreach ($test as $test_char)
       {
           if ($char === $test_char)
           {
               $found = true;
           }
       }
       return $found;
   }
   function nm_clear_val($Nome_Campo)
   {
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
     if (isset($this->formatado) && $this->formatado)
     {
         return;
     }
     $this->formatado = true;
      if ((!empty($this->fechaventa) && 'null' != $this->fechaventa) || (!empty($format_fields) && isset($format_fields['fechaventa'])))
      {
          nm_volta_data($this->fechaventa, $this->field_config['fechaventa']['date_format']) ; 
          nmgp_Form_Datas($this->fechaventa, $this->field_config['fechaventa']['date_format'], $this->field_config['fechaventa']['date_sep']) ;  
      }
      elseif ('null' == $this->fechaventa || '' == $this->fechaventa)
      {
          $this->fechaventa = '';
      }
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $new_campo = '';
          $a_mask_ord  = array();
          $i_mask_size = -1;

          foreach (explode(';', $nm_mask) as $str_mask)
          {
              $a_mask_ord[ $this->nm_conta_mask_chars($str_mask) ] = $str_mask;
          }
          ksort($a_mask_ord);

          foreach ($a_mask_ord as $i_size => $s_mask)
          {
              if (-1 == $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
              elseif (strlen($nm_campo) >= $i_size && strlen($nm_campo) > $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
          }
          $nm_mask = $a_mask_ord[$i_mask_size];

          for ($i = 0; $i < strlen($nm_mask); $i++)
          {
              $test_mask = substr($nm_mask, $i, 1);
              
              if ('9' == $test_mask || 'a' == $test_mask || '*' == $test_mask)
              {
                  $new_campo .= substr($nm_campo, 0, 1);
                  $nm_campo   = substr($nm_campo, 1);
              }
              else
              {
                  $new_campo .= $test_mask;
              }
          }

                  $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($cont1 < $cont2 && $tam_campo <= $cont2 && $tam_campo > $cont1)
              {
                  $trab_mask = $ver_duas[1];
              }
              elseif ($cont1 > $cont2 && $tam_campo <= $cont2)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $trab_saida;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $trab_saida;
   } 
   function nm_conta_mask_chars($sMask)
   {
       $iLength = 0;

       for ($i = 0; $i < strlen($sMask); $i++)
       {
           if (in_array($sMask[$i], array('9', 'a', '*')))
           {
               $iLength++;
           }
       }

       return $iLength;
   }
   function nm_tira_mask(&$nm_campo, $nm_mask, $nm_chars = '')
   { 
      $mask_dados = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $tam_mask   = strlen($nm_mask);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $raw_campo = $this->sc_clear_mask($nm_campo, $nm_chars);
          $raw_mask  = $this->sc_clear_mask($nm_mask, $nm_chars);
          $new_campo = '';

          $test_mask = substr($raw_mask, 0, 1);
          $raw_mask  = substr($raw_mask, 1);

          while ('' != $raw_campo)
          {
              $test_val  = substr($raw_campo, 0, 1);
              $raw_campo = substr($raw_campo, 1);
              $ord       = ord($test_val);
              $found     = false;

              switch ($test_mask)
              {
                  case '9':
                      if (48 <= $ord && 57 >= $ord)
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case 'a':
                      if ((65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case '*':
                      if ((48 <= $ord && 57 >= $ord) || (65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;
              }

              if ($found)
              {
                  $test_mask = substr($raw_mask, 0, 1);
                  $raw_mask  = substr($raw_mask, 1);
              }
          }

          $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          for ($x=0; $x < strlen($mask_dados); $x++)
          {
              if (is_numeric(substr($mask_dados, $x, 1)))
              {
                  $trab_saida .= substr($mask_dados, $x, 1);
              }
          }
          $nm_campo = $trab_saida;
          return;
      }
      if ($tam_mask > $tam_campo)
      {
         $mask_desfaz = "";
         for ($mask_ind = 0; $tam_mask > $tam_campo; $mask_ind++)
         {
              $mask_char = substr($trab_mask, $mask_ind, 1);
              if ($mask_char == "z")
              {
                  $tam_mask--;
              }
              else
              {
                  $mask_desfaz .= $mask_char;
              }
              if ($mask_ind == $tam_campo)
              {
                  $tam_mask = $tam_campo;
              }
         }
         $trab_mask = $mask_desfaz . substr($trab_mask, $mask_ind);
      }
      $mask_saida = "";
      for ($mask_ind = strlen($trab_mask); $mask_ind > 0; $mask_ind--)
      {
          $mask_char = substr($trab_mask, $mask_ind - 1, 1);
          if ($mask_char == "x" || $mask_char == "z")
          {
              if ($tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
              }
          }
          else
          {
              if ($mask_char != substr($mask_dados, $tam_campo - 1, 1) && $tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
                  $mask_ind--;
              }
          }
          $tam_campo--;
      }
      if ($tam_campo > 0)
      {
         $mask_saida = substr($mask_dados, 0, $tam_campo) . $mask_saida;
      }
      $nm_campo = $mask_saida;
   }

   function sc_clear_mask($value, $chars)
   {
       $new = '';

       for ($i = 0; $i < strlen($value); $i++)
       {
           if (false === strpos($chars, $value[$i]))
           {
               $new .= $value[$i];
           }
       }

       return $new;
   }
//
   function nm_limpa_alfa(&$str)
   {
       if (get_magic_quotes_gpc())
       {
           if (is_array($str))
           {
               $x = 0;
               foreach ($str as $cada_str)
               {
                   $str[$x] = stripslashes($str[$x]);
                   $x++;
               }
           }
           else
           {
               $str = stripslashes($str);
           }
       }
   }
//
//-- 
   function nm_converte_datas($use_null = true, $bForce = false)
   {
      if ($this->fechaventa != "")  
      {
     nm_conv_form_data($this->fechaventa, $this->field_config['fechaventa']['date_format'], "AAAAMMDD", array($this->field_config['fechaventa']['date_sep'])) ;  
      }
   }
//
   function nm_prep_date_change($cmp_date, $format_dt)
   {
       $vl_return  = "";
       if ($cmp_date != 'null') {
           $vl_return .= (strpos($format_dt, "yy") !== false) ? substr($cmp_date,  0, 4) : "";
           $vl_return .= (strpos($format_dt, "mm") !== false) ? substr($cmp_date,  5, 2) : "";
           $vl_return .= (strpos($format_dt, "dd") !== false) ? substr($cmp_date,  8, 2) : "";
           $vl_return .= (strpos($format_dt, "hh") !== false) ? substr($cmp_date, 11, 2) : "";
           $vl_return .= (strpos($format_dt, "ii") !== false) ? substr($cmp_date, 14, 2) : "";
           $vl_return .= (strpos($format_dt, "ss") !== false) ? substr($cmp_date, 17, 2) : "";
       }
       return $vl_return;
   }
   function nm_conv_data_db($dt_in, $form_in, $form_out, $replaces = array())
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT") {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT") {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "SC_FORMAT_REGION") {
           $this->nm_data->SetaData($dt_in, strtoupper($form_in));
           $prep_out  = (strpos(strtolower($form_in), "dd") !== false) ? "dd" : "";
           $prep_out .= (strpos(strtolower($form_in), "mm") !== false) ? "mm" : "";
           $prep_out .= (strpos(strtolower($form_in), "aa") !== false) ? "aaaa" : "";
           $prep_out .= (strpos(strtolower($form_in), "yy") !== false) ? "aaaa" : "";
           return $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", $prep_out));
       }
       else {
           nm_conv_form_data($dt_out, $form_in, $form_out, $replaces);
           return $dt_out;
       }
   }

   function ajax_return_values()
   {
          $this->ajax_return_values_contratonumero();
          $this->ajax_return_values_nombreedv();
          $this->ajax_return_values_supervisor();
          $this->ajax_return_values_fechaventa();
          $this->ajax_return_values_grupofechainauguracion();
          $this->ajax_return_values_nombreasociaso();
          $this->ajax_return_values_tipodocumento1();
          $this->ajax_return_values_numerodocumento1();
          $this->ajax_return_values_ubicacion();
          $this->ajax_return_values_correopersonal1();
          $this->ajax_return_values_correolaboral1();
          $this->ajax_return_values_tf11();
          $this->ajax_return_values_tf13();
          $this->ajax_return_values_tf12();
          $this->ajax_return_values_tf14();
          $this->ajax_return_values_tf15();
          $this->ajax_return_values_tf16();
          $this->ajax_return_values_tf17();
          $this->ajax_return_values_tf18();
          $this->ajax_return_values_tf19();
          $this->ajax_return_values_nombreasociado2();
          $this->ajax_return_values_tipodocumento2();
          $this->ajax_return_values_numerodocumento2();
          $this->ajax_return_values_ubicacion2();
          $this->ajax_return_values_correopersonal2();
          $this->ajax_return_values_correolaboral2();
          $this->ajax_return_values_tf21();
          $this->ajax_return_values_tf22();
          $this->ajax_return_values_tf23();
          $this->ajax_return_values_tf24();
          $this->ajax_return_values_tf25();
          $this->ajax_return_values_tf26();
          $this->ajax_return_values_tf27();
          $this->ajax_return_values_tf28();
          $this->ajax_return_values_tf29();
          $this->ajax_return_values_nombreasociado3();
          $this->ajax_return_values_tipodocumento3();
          $this->ajax_return_values_numerodocumento3();
          $this->ajax_return_values_ubicacion3();
          $this->ajax_return_values_correopersonal3();
          $this->ajax_return_values_correolaboral3();
          $this->ajax_return_values_tf31();
          $this->ajax_return_values_tf32();
          $this->ajax_return_values_tf33();
          $this->ajax_return_values_tf34();
          $this->ajax_return_values_tf35();
          $this->ajax_return_values_tf36();
          $this->ajax_return_values_tf37();
          $this->ajax_return_values_tf38();
          $this->ajax_return_values_tf39();
          $this->ajax_return_values_cantidadintentos();
          $this->ajax_return_values_telefono();
          $this->ajax_return_values_estado();
          $this->ajax_return_values_indicadorexitoconforme();
          $this->ajax_return_values_motivo();
          $this->ajax_return_values_motivoc();
          $this->ajax_return_values_comentario();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
          }
   } // ajax_return_values

          //----- contratonumero
   function ajax_return_values_contratonumero($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("contratonumero", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->contratonumero);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['contratonumero'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nombreedv
   function ajax_return_values_nombreedv($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nombreedv", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nombreedv);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nombreedv'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- supervisor
   function ajax_return_values_supervisor($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("supervisor", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->supervisor);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['supervisor'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fechaventa
   function ajax_return_values_fechaventa($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fechaventa", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fechaventa);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fechaventa'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- grupofechainauguracion
   function ajax_return_values_grupofechainauguracion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("grupofechainauguracion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->grupofechainauguracion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['grupofechainauguracion'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nombreasociaso
   function ajax_return_values_nombreasociaso($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nombreasociaso", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nombreasociaso);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nombreasociaso'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tipodocumento1
   function ajax_return_values_tipodocumento1($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tipodocumento1", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tipodocumento1);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tipodocumento1'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- numerodocumento1
   function ajax_return_values_numerodocumento1($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("numerodocumento1", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->numerodocumento1);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['numerodocumento1'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- ubicacion
   function ajax_return_values_ubicacion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ubicacion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->ubicacion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['ubicacion'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- correopersonal1
   function ajax_return_values_correopersonal1($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("correopersonal1", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->correopersonal1);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['correopersonal1'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- correolaboral1
   function ajax_return_values_correolaboral1($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("correolaboral1", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->correolaboral1);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['correolaboral1'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf11
   function ajax_return_values_tf11($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf11", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf11);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf11'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf13
   function ajax_return_values_tf13($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf13", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf13);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf13'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf12
   function ajax_return_values_tf12($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf12", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf12);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf12'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf14
   function ajax_return_values_tf14($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf14", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf14);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf14'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf15
   function ajax_return_values_tf15($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf15", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf15);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf15'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf16
   function ajax_return_values_tf16($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf16", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf16);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf16'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf17
   function ajax_return_values_tf17($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf17", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf17);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf17'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf18
   function ajax_return_values_tf18($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf18", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf18);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf18'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf19
   function ajax_return_values_tf19($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf19", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf19);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf19'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nombreasociado2
   function ajax_return_values_nombreasociado2($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nombreasociado2", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nombreasociado2);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nombreasociado2'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tipodocumento2
   function ajax_return_values_tipodocumento2($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tipodocumento2", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tipodocumento2);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tipodocumento2'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- numerodocumento2
   function ajax_return_values_numerodocumento2($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("numerodocumento2", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->numerodocumento2);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['numerodocumento2'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- ubicacion2
   function ajax_return_values_ubicacion2($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ubicacion2", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->ubicacion2);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['ubicacion2'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- correopersonal2
   function ajax_return_values_correopersonal2($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("correopersonal2", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->correopersonal2);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['correopersonal2'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- correolaboral2
   function ajax_return_values_correolaboral2($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("correolaboral2", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->correolaboral2);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['correolaboral2'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf21
   function ajax_return_values_tf21($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf21", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf21);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf21'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf22
   function ajax_return_values_tf22($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf22", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf22);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf22'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf23
   function ajax_return_values_tf23($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf23", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf23);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf23'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf24
   function ajax_return_values_tf24($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf24", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf24);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf24'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf25
   function ajax_return_values_tf25($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf25", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf25);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf25'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf26
   function ajax_return_values_tf26($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf26", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf26);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf26'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf27
   function ajax_return_values_tf27($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf27", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf27);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf27'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf28
   function ajax_return_values_tf28($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf28", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf28);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf28'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf29
   function ajax_return_values_tf29($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf29", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf29);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf29'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nombreasociado3
   function ajax_return_values_nombreasociado3($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nombreasociado3", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nombreasociado3);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nombreasociado3'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tipodocumento3
   function ajax_return_values_tipodocumento3($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tipodocumento3", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tipodocumento3);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tipodocumento3'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- numerodocumento3
   function ajax_return_values_numerodocumento3($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("numerodocumento3", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->numerodocumento3);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['numerodocumento3'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- ubicacion3
   function ajax_return_values_ubicacion3($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ubicacion3", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->ubicacion3);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['ubicacion3'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- correopersonal3
   function ajax_return_values_correopersonal3($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("correopersonal3", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->correopersonal3);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['correopersonal3'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- correolaboral3
   function ajax_return_values_correolaboral3($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("correolaboral3", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->correolaboral3);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['correolaboral3'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf31
   function ajax_return_values_tf31($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf31", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf31);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf31'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf32
   function ajax_return_values_tf32($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf32", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf32);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf32'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf33
   function ajax_return_values_tf33($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf33", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf33);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf33'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf34
   function ajax_return_values_tf34($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf34", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf34);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf34'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf35
   function ajax_return_values_tf35($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf35", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf35);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf35'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf36
   function ajax_return_values_tf36($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf36", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf36);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf36'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf37
   function ajax_return_values_tf37($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf37", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf37);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf37'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf38
   function ajax_return_values_tf38($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf38", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf38);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf38'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tf39
   function ajax_return_values_tf39($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tf39", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tf39);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tf39'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- cantidadintentos
   function ajax_return_values_cantidadintentos($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cantidadintentos", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cantidadintentos);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cantidadintentos'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- telefono
   function ajax_return_values_telefono($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("telefono", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->telefono);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['telefono'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- estado
   function ajax_return_values_estado($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("estado", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->estado);
              $aLookup = array();
              $this->_tmp_lookup_estado = $this->estado;

$aLookup[] = array(Formulario_Llamada_Bienvenida_pack_protect_string('1') => str_replace('<', '&lt;',Formulario_Llamada_Bienvenida_pack_protect_string("Exitosa")));
$aLookup[] = array(Formulario_Llamada_Bienvenida_pack_protect_string('0') => str_replace('<', '&lt;',Formulario_Llamada_Bienvenida_pack_protect_string("No exitosa")));
$_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_estado'][] = '1';
$_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_estado'][] = '0';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['estado']) && !empty($this->NM_ajax_info['select_html']['estado']))
          {
              $sOptComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['estado']);
          }
          $this->NM_ajax_info['fldList']['estado'] = array(
                       'row'    => '',
               'type'    => 'radio',
               'switch'  => true,
               'valList' => array($sTmpValue),
               'colNum'  => 2,
               'optComp'  => $sOptComp,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['estado']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['estado']['valList'][$i] = Formulario_Llamada_Bienvenida_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['estado']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['estado']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['estado']['labList'] = $aLabel;
          }
   }

          //----- indicadorexitoconforme
   function ajax_return_values_indicadorexitoconforme($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("indicadorexitoconforme", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->indicadorexitoconforme);
              $aLookup = array();
              $this->_tmp_lookup_indicadorexitoconforme = $this->indicadorexitoconforme;

$aLookup[] = array(Formulario_Llamada_Bienvenida_pack_protect_string('1') => str_replace('<', '&lt;',Formulario_Llamada_Bienvenida_pack_protect_string("Conforme")));
$aLookup[] = array(Formulario_Llamada_Bienvenida_pack_protect_string('0') => str_replace('<', '&lt;',Formulario_Llamada_Bienvenida_pack_protect_string("No Conforme")));
$_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_indicadorexitoconforme'][] = '1';
$_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_indicadorexitoconforme'][] = '0';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['indicadorexitoconforme']) && !empty($this->NM_ajax_info['select_html']['indicadorexitoconforme']))
          {
              $sOptComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['indicadorexitoconforme']);
          }
          $this->NM_ajax_info['fldList']['indicadorexitoconforme'] = array(
                       'row'    => '',
               'type'    => 'radio',
               'switch'  => false,
               'valList' => array($sTmpValue),
               'colNum'  => 2,
               'optComp'  => $sOptComp,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['indicadorexitoconforme']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['indicadorexitoconforme']['valList'][$i] = Formulario_Llamada_Bienvenida_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['indicadorexitoconforme']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['indicadorexitoconforme']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['indicadorexitoconforme']['labList'] = $aLabel;
          }
   }

          //----- motivo
   function ajax_return_values_motivo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("motivo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->motivo);
              $aLookup = array();
              $this->_tmp_lookup_motivo = $this->motivo;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivo']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivo']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivo'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(Formulario_Llamada_Bienvenida_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', Formulario_Llamada_Bienvenida_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivo'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"motivo\"";
          if (isset($this->NM_ajax_info['select_html']['motivo']) && !empty($this->NM_ajax_info['select_html']['motivo']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['motivo']);
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->motivo == $sValue)
                  {
                      $this->_tmp_lookup_motivo = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['motivo'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['motivo']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['motivo']['valList'][$i] = Formulario_Llamada_Bienvenida_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['motivo']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['motivo']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['motivo']['labList'] = $aLabel;
          }
   }

          //----- motivoc
   function ajax_return_values_motivoc($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("motivoc", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->motivoc);
              $aLookup = array();
              $this->_tmp_lookup_motivoc = $this->motivoc;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivoc']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivoc'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivoc']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivoc'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(Formulario_Llamada_Bienvenida_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', Formulario_Llamada_Bienvenida_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivoc'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"motivoc\"";
          if (isset($this->NM_ajax_info['select_html']['motivoc']) && !empty($this->NM_ajax_info['select_html']['motivoc']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['motivoc']);
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->motivoc == $sValue)
                  {
                      $this->_tmp_lookup_motivoc = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['motivoc'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['motivoc']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['motivoc']['valList'][$i] = Formulario_Llamada_Bienvenida_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['motivoc']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['motivoc']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['motivoc']['labList'] = $aLabel;
          }
   }

          //----- comentario
   function ajax_return_values_comentario($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("comentario", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->comentario);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['comentario'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

    function fetchUniqueUploadName($originalName, $uploadDir, $fieldName)
    {
        $originalName = trim($originalName);
        if ('' == $originalName)
        {
            return $originalName;
        }
        if (!@is_dir($uploadDir))
        {
            return $originalName;
        }
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['upload_dir'][$fieldName][] = $newName;
            return $newName;
        }
    } // fetchUniqueUploadName

    function fetchFileNextName($uniqueName, $uniqueList)
    {
        $aPathinfo     = pathinfo($uniqueName);
        $fileExtension = $aPathinfo['extension'];
        $fileName      = $aPathinfo['filename'];
        $foundName     = false;
        $nameIt        = 1;
        if ('' != $fileExtension)
        {
            $fileExtension = '.' . $fileExtension;
        }
        while (!$foundName)
        {
            $testName = $fileName . '(' . $nameIt . ')' . $fileExtension;
            if (in_array($testName, $uniqueList))
            {
                $nameIt++;
            }
            else
            {
                $foundName = true;
                return $testName;
            }
        }
    } // fetchFileNextName

   function ajax_add_parameters()
   {
   } // ajax_add_parameters
//
function Estado_onClick()
{
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'on';
  
$original_estado = $this->estado;

if ($this->estado  == 1)     
{
	$this->nmgp_cmp_hidden["motivo"] = "off"; $this->NM_ajax_info['fieldDisplay']['motivo'] = 'off';
	$this->nmgp_cmp_hidden["indicadorexitoconforme"] = "on"; $this->NM_ajax_info['fieldDisplay']['indicadorexitoconforme'] = 'on';
}
if ($this->estado  == 0)
{
	$this->nmgp_cmp_hidden["motivo"] = "on"; $this->NM_ajax_info['fieldDisplay']['motivo'] = 'on';
	$this->nmgp_cmp_hidden["indicadorexitoconforme"] = "off"; $this->NM_ajax_info['fieldDisplay']['indicadorexitoconforme'] = 'off';
}	




$modificado_estado = $this->estado;
$this->nm_formatar_campos('estado');
if ($original_estado !== $modificado_estado || isset($this->nmgp_cmp_readonly['estado']) || (isset($bFlagRead_estado) && $bFlagRead_estado))
{
    $this->ajax_return_values_estado(true);
}
$this->NM_ajax_info['event_field'] = 'Estado';
Formulario_Llamada_Bienvenida_pack_ajax_response();
exit;
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off';
}
function InfUser()
{
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'on';
if (!isset($this->sc_temp_id)) {$this->sc_temp_id = (isset($_SESSION['id'])) ? $_SESSION['id'] : "";}
  
$SqlUsr = "SELECT 
	   UsuarioID
      ,RolID
      ,UsuarioNombre
      ,UsuarioClave
      ,UsuarioCambiaClave
      ,UsuarioActivo
      ,UsuarioEliminado
      ,UsuarioIntentosFallidosLogin
      ,UsuarioFechaModificacionClave
      ,PersonaID
      ,UsuarioIDCreacion
      ,UsuarioFechaCreacion
      ,UsuarioIDModificacion
      ,UsuarioFechaModificacion
  FROM SEG_Usuario where usuarioNombre = '".$this->sc_temp_id."'";
 
      $nm_select = $SqlUsr; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->Usr = array();
      $this->usr = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->Usr[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->usr[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Usr = false;
          $this->Usr_erro = $this->Db->ErrorMsg();
          $this->usr = false;
          $this->usr_erro = $this->Db->ErrorMsg();
      } 
;
echo $SqlUsr;
$userID =$this->usr[0][0];
if (isset($this->sc_temp_id)) { $_SESSION['id'] = $this->sc_temp_id;}
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off';
}
function LlamarInformacion()
{
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'on';
if (!isset($this->sc_temp_probando_prueba1)) {$this->sc_temp_probando_prueba1 = (isset($_SESSION['probando_prueba1'])) ? $_SESSION['probando_prueba1'] : "";}
if (!isset($this->sc_temp_ContratoID)) {$this->sc_temp_ContratoID = (isset($_SESSION['ContratoID'])) ? $_SESSION['ContratoID'] : "";}
  
$sqlCantidadRegistrosNoExitosos= "SELECT COUNT (1) from VEN_LlamadaBienvenida
where LlamadaBienvenidaEstado = '0' and ContratoID =".$this->sc_temp_ContratoID."";
 
      $nm_select = $sqlCantidadRegistrosNoExitosos; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->CantidadNoExitosos = array();
      $this->cantidadnoexitosos = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->CantidadNoExitosos[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->cantidadnoexitosos[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->CantidadNoExitosos = false;
          $this->CantidadNoExitosos_erro = $this->Db->ErrorMsg();
          $this->cantidadnoexitosos = false;
          $this->cantidadnoexitosos_erro = $this->Db->ErrorMsg();
      } 
;
$cantidadNoExitosos= 0;


if(count($this->cantidadnoexitosos ) != 0){
$cantidadNoExitosos=$this->cantidadnoexitosos[0][0];
}
$this->sc_master_value('cantidadIntentos', $cantidadNoExitosos);

$sql  = "Select distinct
  TC.ContratoNumero As Contrato,
  TC.ContratoFechaIngreso_Date As Fecha_Venta,
  TC.CertificadoValor As Certificado,
  T_REP_FOC_Asociado.AsociadoID As AsociadoID,
  T_REP_FOC_Asociado.PersonaApellidoPaterno + ' ' +
  T_REP_FOC_Asociado.PersonaApellidoMaterno + ' ' +
  T_REP_FOC_Asociado.PersonaNombre As Asociado,
  TCD.MontoCuotaCapital As Cuota_capital,
  T_REP_FOC_Asociado.PersonaTelefonoMovilContacto As Telf_contacto,
  T_REP_FOC_Asociado.DireccionFiscal_Telefono2 As Telf_personal,
  T_REP_FOC_Asociado.DireccionFiscal_Telefono1 As Telf_domicilio,
  T_REP_FOC_Asociado.DireccionLaboral_Telefono1 As Telf_laboral,
  T_REP_FOC_Asociado.DireccionLaboral_Telefono2 As Telf_otros,
  T_REP_FOC_Asociado.PersonaTelefono, 
  T_REP_FOC_Asociado.PersonaTelefonoMovil,
  T_REP_FOC_Asociado.PersonaTelefonoExtra,
  T_REP_FOC_Asociado.PersonaTelefonoMovilContacto,
  T_REP_FOC_Asociado.DireccionFiscal_TipoVia As Dirección_via,
  T_REP_FOC_Asociado.DireccionFiscal_DireccionDetalle As Dirección_fiscal,
  T_REP_FOC_Asociado.DireccionFiscal_Zona As Zona,
  T_REP_FOC_Asociado.DireccionFiscal_TipoZona As Tipo_zona,
  T_REP_FOC_Asociado.DireccionFiscal_Distrito As Distrito,
  T_REP_FOC_Asociado.DireccionFiscal_Provincia As Provincia,
  T_REP_FOC_Asociado.DireccionFiscal_Departamento As Departamento,
  T_REP_FOC_Asociado.PersonaCorreoPersonal As Correo_personal,
  T_REP_FOC_Asociado.PersonaCorreoTrabajo As Correo_laboral,
  T_REP_FOC_Asociado.Sexo As Sexo, T_REP_FOC_Asociado.EstadoCivil As  Estado_civil, 
  TC.NumeroAsociado As Nro_Socio,
  TC.GrupoDiaVencimiento As Dia_vcto,
  T_REP_FOC_Asociado.TipoDocumento As Tipo_doc,
  T_REP_FOC_Asociado.NumeroDocumento As Num_doc,
  TSS.SituacionContratoOrigen As Origen,
  '1111',
  TC.MarcaIngresoVehiculo As Marca_ingreso,
  TC.ModeloIngresoVehiculo As Modelo_ingreso,
  TC.PuntoExhibicionNombre As Punto_exhibición,
  TCD.EjecutivoVentaApellidoPaterno + ' ' +
  TCD.EjecutivoVentaApellidoMaterno + ' ' +
  TCD.EjecutivoVentaNombre As Vendedor,
  TCD.SupervisorVentaApellidoPaterno + ' ' +
  TCD.SupervisorVentaApellidoMaterno + ' ' +
  TCD.SupervisorVentaNombre As Supervisor,
  TC.ProductoNombre As Producto,
  TCD.FuerzaVenta As FFVV, 
  TC.Programa As  Programa, 
  TC.GrupoNumero As Grupo,
  TC.GrupoFechaInauguracion
From T_REP_FOC_ContratoDetalle  As TCD
Left Join T_REP_FOC_Contrato  As TC On TC.ContratoID =TCD.ContratoID
Left Join T_REP_FOC_Asociado_Detalle T_REP_FOC_Asociado  On TC.ContratoID = T_REP_FOC_Asociado.ContratoID 
Inner Join  T_REP_FOC_SeguimientoSituacion As TSS On TC.ContratoID = TSS.ContratoID 
Where  TC.ContratoID = ".$this->sc_temp_ContratoID;
 
      $nm_select = $sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->Rep = array();
      $this->rep = array();
      if ($SCrx = $this->Ini->nm_db_ds_saf_rep->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->Rep[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->rep[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Rep = false;
          $this->Rep_erro = $this->Ini->nm_db_ds_saf_rep->ErrorMsg();
          $this->rep = false;
          $this->rep_erro = $this->Ini->nm_db_ds_saf_rep->ErrorMsg();
      } 
;

$this->nmgp_cmp_hidden["motivo"] = "off"; $this->NM_ajax_info['fieldDisplay']['motivo'] = 'off';
$this->nmgp_cmp_hidden["indicadorexitoconforme"] = "off"; $this->NM_ajax_info['fieldDisplay']['indicadorexitoconforme'] = 'off';
$this->nmgp_cmp_hidden["motivoc"] = "off"; $this->NM_ajax_info['fieldDisplay']['motivoc'] = 'off';

if(!empty($this->rep )){
if(count($this->rep ) > 0) {
$Vendedor=$this->rep[0][35];
$Supervisor=$this->rep[0][36];
$GrupoFechaInauguracion=$this->rep[0][41];

$this->sc_master_value('GrupoFechaInauguracion',$this->nm_conv_data_db($GrupoFechaInauguracion, "db_format", "dd/mm/aaaa"));
	
$this->sc_master_value('Supervisor', '<a style="color: #fff; background-color: #2574A9; padding: 5px;text-decoration: none;" href="url" target="_blank"> <i style="padding: 0 5px;" class="icon_fa fas fa-mobile-alt"></i> VoiPocel</a> <a style="color: #fff; background-color: #2574A9; padding: 5px;text-decoration: none;" href="url" target="_blank"> <i style="padding:0 5px;" class="fab fa-whatsapp"></i> Whatsapp </a>');
 $this->sc_master_value('NombreEDV', trim($Vendedor)); 

    $Telf_contacto	=trim($this->rep[0][6]);
	$Telf_personal	=trim($this->rep[0][7]);
	$Telf_domicilio	=trim($this->rep[0][8]);
	$Telf_laboral	=trim($this->rep[0][9]);
	$Telf_otros	=trim($this->rep[0][10]);
	$Telf	=trim($this->rep[0][11]);
	
	$this->sc_temp_probando_prueba1 = trim($this->rep[0][11]);
	
	$Telf_movil	=trim($this->rep[0][12]);
	$Telf_extra	=trim($this->rep[0][13]);
	$mov_contacto =trim($this->rep[0][14]);
	$CorreoPer	=trim($this->rep[0][22]);
	$CorreoLab	=trim($this->rep[0][23]);
	$TipoDoc	=trim($this->rep[0][28]);
	$numDOc =trim($this->rep[0][29]);

	$distrito	=trim($this->rep[0][19]);
	$provincia	=trim($this->rep[0][20]);
	$departamento	=trim($this->rep[0][21]);	
	
	$this->ubicacion = $departamento.' - '.$provincia.' - '.$distrito;
	
if(!empty($Telf_contacto)){
	$this->sc_master_value('tf11',  trim($Telf_contacto));
}else{$this->nmgp_cmp_hidden["tf11"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf11'] = 'off';}

if(!empty($Telf_personal)){
	$this->sc_master_value('tf12',  trim($Telf_personal));
}else{$this->nmgp_cmp_hidden["tf12"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf12'] = 'off';}
if(!empty($Telf_domicilio)){$this->sc_master_value('tf13',  trim($Telf_domicilio));}else{$this->nmgp_cmp_hidden["tf13"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf13'] = 'off';}
if(!empty($Telf_laboral)){$this->sc_master_value('tf14',  trim($Telf_laboral));}else{$this->nmgp_cmp_hidden["tf14"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf14'] = 'off';}
if(!empty($Telf_otros)){$this->sc_master_value('tf15',  trim($Telf_otros));}else{$this->nmgp_cmp_hidden["tf15"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf15'] = 'off';}
if(!empty($Telf)){$this->sc_master_value('tf16',  trim($Telf));}else{$this->nmgp_cmp_hidden["tf16"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf16'] = 'off';}
if(!empty($Telf_movil)){$this->sc_master_value('tf17',  trim($Telf_movil));}else{$this->nmgp_cmp_hidden["tf17"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf17'] = 'off';}
if(!empty($Telf_extra)){$this->sc_master_value('tf18',  trim($Telf_extra));}else{$this->nmgp_cmp_hidden["tf18"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf18'] = 'off';}
if(!empty($mov_contacto)){$this->sc_master_value('tf19',  trim($mov_contacto));}else{$this->nmgp_cmp_hidden["tf19"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf19'] = 'off';}

if(!empty($CorreoPer)){$this->sc_master_value('CorreoPersonal1',  trim($CorreoPer));}else{$this->nmgp_cmp_hidden["correopersonal1"] = "off"; $this->NM_ajax_info['fieldDisplay']['correopersonal1'] = 'off';}
if(!empty($CorreoLab)){$this->sc_master_value('CorreoLaboral1',  trim($CorreoLab));}else{$this->nmgp_cmp_hidden["correolaboral1"] = "off"; $this->NM_ajax_info['fieldDisplay']['correolaboral1'] = 'off';}
if(!empty($TipoDoc)){$this->sc_master_value('TipoDocumento1',  trim($TipoDoc));}else{$this->nmgp_cmp_hidden["tipodocumento1"] = "off"; $this->NM_ajax_info['fieldDisplay']['tipodocumento1'] = 'off';}
if(!empty($numDOc)){$this->sc_master_value('NumeroDocumento1',  trim($numDOc));}else{$this->nmgp_cmp_hidden["numerodocumento1"] = "off"; $this->NM_ajax_info['fieldDisplay']['numerodocumento1'] = 'off';}
	
if(!empty($this->ubicacion)){$this->sc_master_value('Ubicacion',  trim($this->ubicacion));}else{$this->nmgp_cmp_hidden["ubicacion"] = "off"; $this->NM_ajax_info['fieldDisplay']['ubicacion'] = 'off';}


}

if(count($this->rep ) >1) {
	$NombreAsociado2=trim($this->rep[1][4]);
	$Telf_contacto2	=trim($this->rep[1][6]);
	$Telf_personal2	=trim($this->rep[1][7]);
	$Telf_domicilio2	=trim($this->rep[1][8]);
	$Telf_laboral2	=trim($this->rep[1][9]);
	$Telf_otros2	=trim($this->rep[1][10]);
	$Telf2	=trim($this->rep[1][11]);
	$Telf_movil2	=trim($this->rep[1][12]);
	$Telf_extra2	=trim($this->rep[1][13]);
	$mov_contacto2 =trim($this->rep[1][14]);
	
	$CorreoPer2	=trim($this->rep[1][22]);
	$CorreoLab2	=trim($this->rep[1][23]);
	$TipoDoc2	=trim($this->rep[1][28]);
	$numDoc2 =trim($this->rep[1][29]);
	
	$distrito2	=trim($this->rep[1][19]);
	$provincia2	=trim($this->rep[1][20]);
	$departamento2	=trim($this->rep[1][21]);	
	
	$this->ubicacion2 = $departamento2.' - '.$provincia2.' - '.$distrito2;
	
	
$this->sc_master_value('NombreAsociado2', trim($NombreAsociado2));

if(!empty($Telf_contacto2)){$this->sc_master_value('tf21', $Telf_contacto2);}else{$this->nmgp_cmp_hidden["tf21"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf21'] = 'off';}
if(!empty($Telf_personal2)){$this->sc_master_value('tf22', $Telf_personal2);}else{$this->nmgp_cmp_hidden["tf22"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf22'] = 'off';}
if(!empty($Telf_domicilio2)){$this->sc_master_value('tf23', $Telf_domicilio2);}else{$this->nmgp_cmp_hidden["tf23"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf23'] = 'off';}
if(!empty($Telf_laboral2)){$this->sc_master_value('tf24', $Telf_laboral2);}else{$this->nmgp_cmp_hidden["tf24"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf24'] = 'off';}
if(!empty($Telf_otros2)){$this->sc_master_value('tf25', $Telf_otros2);}else{$this->nmgp_cmp_hidden["tf25"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf25'] = 'off';}
if(!empty($Telf2)){$this->sc_master_value('tf26', $Telf2);}else{$this->nmgp_cmp_hidden["tf26"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf26'] = 'off';}
if(!empty($Telf_movil2)){$this->sc_master_value('tf27', $Telf_movil2);}else{$this->nmgp_cmp_hidden["tf27"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf27'] = 'off';}
if(!empty($Telf_extra2)){$this->sc_master_value('tf28', $Telf_extra2);}else{$this->nmgp_cmp_hidden["tf28"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf28'] = 'off';}
if(!empty($mov_contacto2)){$this->sc_master_value('tf29', $mov_contacto2);}else{$this->nmgp_cmp_hidden["tf29"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf29'] = 'off';}

if(!empty($CorreoPer2)){$this->sc_master_value('CorreoPersonal2', $CorreoPer2);}else{$this->nmgp_cmp_hidden["correopersonal2"] = "off"; $this->NM_ajax_info['fieldDisplay']['correopersonal2'] = 'off';}
if(!empty($CorreoLab2)){$this->sc_master_value('CorreoLaboral2', $CorreoLab2);}else{$this->nmgp_cmp_hidden["correolaboral2"] = "off"; $this->NM_ajax_info['fieldDisplay']['correolaboral2'] = 'off';}
if(!empty($TipoDoc2)){$this->sc_master_value('TipoDocumento2', $TipoDoc2);}else{$this->nmgp_cmp_hidden["tipodocumento2"] = "off"; $this->NM_ajax_info['fieldDisplay']['tipodocumento2'] = 'off';}
if(!empty($numDoc2)){$this->sc_master_value('NumeroDocumento2', $numDoc2);}else{$this->nmgp_cmp_hidden["numerodocumento2"] = "off"; $this->NM_ajax_info['fieldDisplay']['numerodocumento2'] = 'off';}	
	
if(!empty($this->ubicacion2)){$this->sc_master_value('Ubicacion2',  trim($this->ubicacion2));}else{$this->nmgp_cmp_hidden["ubicacion2"] = "off"; $this->NM_ajax_info['fieldDisplay']['ubicacion2'] = 'off';}


}else{
	
	$this->nmgp_cmp_hidden["nombreasociado2"] = "off"; $this->NM_ajax_info['fieldDisplay']['nombreasociado2'] = 'off';
	$this->Ini->nm_hidden_blocos[2] = "off"; $this->NM_ajax_info['blockDisplay']['2'] = 'off';

}


if(count($this->rep ) >2) {
	$NombreAsociado3=trim($this->rep[2][4]);
	$Telf_contacto3	=trim($this->rep[2][6]);
	$Telf_personal3	=trim($this->rep[2][7]);
	$Telf_domicilio3	=trim($this->rep[2][8]);
	$Telf_laboral3	=trim($this->rep[2][9]);
	$Telf_otros3	=trim($this->rep[2][10]);
	$Telf3	=trim($this->rep[2][11]);
	$Telf_movil3	=trim($this->rep[2][12]);
	$Telf_extra3	=trim($this->rep[2][13]);
	$mov_contacto3 =trim($this->rep[2][14]);
	
	$CorreoPer3	=trim($this->rep[2][22]);
	$CorreoLab3	=trim($this->rep[2][23]);
	$TipoDoc3	=trim($this->rep[2][28]);
	$numDoc3 =trim($this->rep[2][29]);
	$distrito3	=trim($this->rep[2][19]);
	$provincia	=trim($this->rep[2][20]);
	$departamento3	=trim($this->rep[2][21]);	
	
	$this->ubicacion3 = $departamento3.' - '.$provincia3.' - '.$distrito3;
	
$this->sc_master_value('NombreAsociado3', trim($NombreAsociado3));

if(!empty($Telf_contacto3)){$this->sc_master_value('tf31', $Telf_contacto3);}else{$this->nmgp_cmp_hidden["tf31"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf31'] = 'off';}
if(!empty($Telf_personal3)){$this->sc_master_value('tf32', $Telf_personal3);}else{$this->nmgp_cmp_hidden["tf32"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf32'] = 'off';}
if(!empty($Telf_domicilio3)){$this->sc_master_value('tf33', $Telf_domicilio3);}else{$this->nmgp_cmp_hidden["tf33"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf33'] = 'off';}
if(!empty($Telf_laboral3)){$this->sc_master_value('tf34', $Telf_laboral3);}else{$this->nmgp_cmp_hidden["tf34"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf34'] = 'off';}
if(!empty($Telf_otros3)){$this->sc_master_value('tf35', $Telf_otros3);}else{$this->nmgp_cmp_hidden["tf35"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf35'] = 'off';}
if(!empty($Telf3)){$this->sc_master_value('tf36', $Telf3);}else{$this->nmgp_cmp_hidden["tf36"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf36'] = 'off';}
if(!empty($Telf_movil3)){$this->sc_master_value('tf37', $Telf_movil3);}else{$this->nmgp_cmp_hidden["tf37"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf37'] = 'off';}
if(!empty($Telf_extra3)){$this->sc_master_value('tf38', $Telf_extra3);}else{$this->nmgp_cmp_hidden["tf38"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf38'] = 'off';}
if(!empty($mov_contacto3)){$this->sc_master_value('tf39', $mov_contacto3);}else{$this->nmgp_cmp_hidden["tf39"] = "off"; $this->NM_ajax_info['fieldDisplay']['tf39'] = 'off';}
	
if(!empty($CorreoPer3)){$this->sc_master_value('CorreoPersonal3', $CorreoPer3);}else{$this->nmgp_cmp_hidden["correopersonal3"] = "off"; $this->NM_ajax_info['fieldDisplay']['correopersonal3'] = 'off';}
if(!empty($CorreoLab3)){$this->sc_master_value('CorreoLaboral3', $CorreoLab3);}else{$this->nmgp_cmp_hidden["correolaboral3"] = "off"; $this->NM_ajax_info['fieldDisplay']['correolaboral3'] = 'off';}
if(!empty($TipoDoc3)){$this->sc_master_value('TipoDocumento3', $TipoDoc3);}else{$this->nmgp_cmp_hidden["tipodocumento3"] = "off"; $this->NM_ajax_info['fieldDisplay']['tipodocumento3'] = 'off';}
if(!empty($numDoc3)){$this->sc_master_value('NumeroDocumento3', $numDoc3);}else{$this->nmgp_cmp_hidden["numerodocumento3"] = "off"; $this->NM_ajax_info['fieldDisplay']['numerodocumento3'] = 'off';}	
	
if(!empty($this->ubicacion3)){$this->sc_master_value('Ubicacion3',  trim($this->ubicacion3));}else{$this->nmgp_cmp_hidden["ubicacion3"] = "off"; $this->NM_ajax_info['fieldDisplay']['ubicacion3'] = 'off';}

	
}else{
	
	$this->nmgp_cmp_hidden["nombreasociado3"] = "off"; $this->NM_ajax_info['fieldDisplay']['nombreasociado3'] = 'off';
	$this->Ini->nm_hidden_blocos[3] = "off"; $this->NM_ajax_info['blockDisplay']['3'] = 'off';

}

}else{
	$this->nmgp_cmp_hidden["nombreasociado2"] = "off"; $this->NM_ajax_info['fieldDisplay']['nombreasociado2'] = 'off';
	$this->Ini->nm_hidden_blocos[2] = "off"; $this->NM_ajax_info['blockDisplay']['2'] = 'off';
	$this->nmgp_cmp_hidden["nombreasociado3"] = "off"; $this->NM_ajax_info['fieldDisplay']['nombreasociado3'] = 'off';
	$this->Ini->nm_hidden_blocos[3] = "off"; $this->NM_ajax_info['blockDisplay']['3'] = 'off';


$this->NM_ajax_info['buttonDisplay']['ok'] = $this->nmgp_botoes["ok"] = "off";;
	
	

 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= 'Base de datos no actualizada, contactar con el área de Datos.';
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_Formulario_Llamada_Bienvenida' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = 'Base de datos no actualizada, contactar con el área de Datos.';
 }
;

if (isset($this->Campos_Mens_erro) && !empty($this->Campos_Mens_erro))
{
 if (isset($this->sc_temp_ContratoID)) { $_SESSION['ContratoID'] = $this->sc_temp_ContratoID;}
 if (isset($this->sc_temp_probando_prueba1)) { $_SESSION['probando_prueba1'] = $this->sc_temp_probando_prueba1;}
    if ($this->NM_ajax_flag)
    {
        $this->NM_ajax_info['redirExit']['action'] = "Formulario_Llamada_Bienvenida_fim.php?script_case_init=" . $this->form_encode_input($this->Ini->sc_page);
        $this->NM_ajax_info['redirExit']['metodo'] = 'location';
        $this->NM_ajax_info['redirExit']['target'] = "_self";
        $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = "https://int-ginni.pandero.com.pe/#/portal/externo/llamadaBienvenida";
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['sc_outra_jan'])
        {
            $_SESSION['scriptcase']['sc_outra_jan'] = "Formulario_Llamada_Bienvenida";
            $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['sc_outra_jan'] = false;
        }
        $_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off';
        Formulario_Llamada_Bienvenida_pack_ajax_response();
        exit;
    }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<head>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
<?php
 if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
 {
?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
 }
?>
</head>
<body>
<?php
 $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = "https://int-ginni.pandero.com.pe/#/portal/externo/llamadaBienvenida";
 if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['sc_outra_jan'])
 {
     $_SESSION['scriptcase']['sc_outra_jan'] = "Formulario_Llamada_Bienvenida";
     $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['sc_outra_jan'] = false;
 }
?>
<TABLE border="0" cellspacing="1" cellpadding="2" bgcolor="#406080" bordercolor="#406080" align="center">
 <TR bgcolor="#FF0000">
  <TD  align="left"><FONT face="Verdana, Arial, sans-serif" size="2" color="#FFFFFF"><B><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></B></FONT></TD>
 </TR>
 <TR bgcolor="#E4E8F0">
   <TD  align="center"><FONT face="Tahoma, Arial, sans-serif" size="2" color="#404040"><?php echo $this->Campos_Mens_erro ?></FONT></TD>
 </TR>
</TABLE>
<table align="center"><tr><td>
  <form name="Fexit" method=post
        action="Formulario_Llamada_Bienvenida_fim.php"
        target="_self">
    <input type=hidden name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page) ?>">
    <input type=submit value="OK">
  </form>
</td></tr></table>
</body>
</html>
<?php
   exit;
}
}
if (isset($this->sc_temp_ContratoID)) { $_SESSION['ContratoID'] = $this->sc_temp_ContratoID;}
if (isset($this->sc_temp_probando_prueba1)) { $_SESSION['probando_prueba1'] = $this->sc_temp_probando_prueba1;}
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off';
}
function SubirInformacion()
{
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'on';
if (!isset($this->sc_temp_ContratoID)) {$this->sc_temp_ContratoID = (isset($_SESSION['ContratoID'])) ? $_SESSION['ContratoID'] : "";}
if (!isset($this->sc_temp_id)) {$this->sc_temp_id = (isset($_SESSION['id'])) ? $_SESSION['id'] : "";}
  


 $indExito = $this->estado ;
 $estadoLlamadaContrato = "0"; 

$insert_sql = "";
$msj = "Llamada de Bienvenida";

$sqlUsrLlamada = "SELECT 
	   UsuarioID
      ,RolID
      ,PersonaID
  FROM SEG_Usuario where usuarioNombre = '".$this->sc_temp_id."'";
 
      $nm_select = $sqlUsrLlamada; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->ListUserLlamada = array();
      $this->listuserllamada = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->ListUserLlamada[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->listuserllamada[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->ListUserLlamada = false;
          $this->ListUserLlamada_erro = $this->Db->ErrorMsg();
          $this->listuserllamada = false;
          $this->listuserllamada_erro = $this->Db->ErrorMsg();
      } 
;
$llamadaUserID =$this->listuserllamada[0][0];


if ($indExito=='1') {
	$msj =$msj." exitosa.";
	
	$indExitoConforme = $this->indicadorexitoconforme ;


	if ($indExitoConforme=='0') {
	 	$estadoLlamadaContrato = "2"; 
		$motivoConforme = $this->motivoc ;
		$msj =$msj." Usuario no conforme, el motivo es: ";

		$sqlMotivoNoConforme=	"SELECT ListaID,  ListaNombre
								FROM dbo.GEN_Lista 
								where ListaTipo='LLamada no Conforme' and 
								 ListaID = ".$motivoConforme;

		 
      $nm_select = $sqlMotivoNoConforme; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->ListaNoConforme = array();
      $this->listanoconforme = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->ListaNoConforme[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->listanoconforme[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->ListaNoConforme = false;
          $this->ListaNoConforme_erro = $this->Db->ErrorMsg();
          $this->listanoconforme = false;
          $this->listanoconforme_erro = $this->Db->ErrorMsg();
      } 
;
		$motivoNoConforme=$this->listanoconforme[0][1];
		$msj =$msj.$motivoNoConforme.", número de celular ".$this->telefono .".";

		$sqlInsertVenLLamada = "INSERT INTO VEN_LlamadaBienvenida (
			  ContratoID
			  ,LlamadaBienvenidaTelefono
			  ,LlamadaBienvenidaEstado
			  ,LlamadaBienvenidaConforme
			  ,LlamadaBienvenidaNoConforme
			  ,LlamadaBienvenidaNoExito
			  ,LlamadaBienvenidaComentario
			  ,LlamadaBienvenidaFechaCreacion
			  ,UsuarioIDCreacion
			  ,LlamadaBienvenidaFechaModificacion
			  ,UsuarioIDModificacion
				) VALUES (".$this->sc_temp_ContratoID." 
				, '".$this->telefono . "'
				, '".$indExito."'
				, '".$indExitoConforme."'
				, null 
				, ".$motivoConforme."
				, '".$this->comentario ."'
				, Getdate()
				, ".$llamadaUserID."
				, null, null
				)";
		}
	 if ($indExitoConforme=='1') {
	 	 $estadoLlamadaContrato = "1"; 

		$msj =$msj." Usuario conforme, ";
		$msj =$msj." número de celular ".$this->telefono .".";

		$sqlInsertVenLLamada = "INSERT INTO VEN_LlamadaBienvenida (
			  ContratoID
			  ,LlamadaBienvenidaTelefono
			  ,LlamadaBienvenidaEstado
			  ,LlamadaBienvenidaConforme
			  ,LlamadaBienvenidaNoConforme
			  ,LlamadaBienvenidaNoExito
			  ,LlamadaBienvenidaComentario
			  ,LlamadaBienvenidaFechaCreacion
			  ,UsuarioIDCreacion
			  ,LlamadaBienvenidaFechaModificacion
			  ,UsuarioIDModificacion
				) VALUES (".$this->sc_temp_ContratoID." 
				, '".$this->telefono . "'
				, '".$indExito."'
				, '".$indExitoConforme."'
				, null 
				, null
				, '".$this->comentario ."'
				, Getdate()
				, ".$llamadaUserID."
				, null, null
				)";

		 
			$sqlActualizarRestriccion="UPDATE FOC_ContratoRequisito
				   SET 
				   contratorequisitovalor = 1 ,
				   ContratoRequisitoUsuarioIDModificacion = ".$llamadaUserID.",
				   ContratoRequisitoFechaModificacion = Getdate()
				   WHERE ContratoID=".$this->sc_temp_ContratoID." and 
				   RequisitoID = 14";

		    
     $nm_select = $sqlActualizarRestriccion; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                Formulario_Llamada_Bienvenida_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;

		}
}
if ($indExito=='0') {
	$msj =$msj. " no exitosa. A causa de: ";

	$motivoExitosa = $this->motivo ;

	$sqlMotivoNoExito=	"SELECT ListaID,  ListaNombre
					FROM dbo.GEN_Lista 
					where ListaTipo='LLamada no Exito' and
					ListaID = ".$motivoExitosa;
	 
      $nm_select = $sqlMotivoNoExito; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->ListaNoExito = array();
      $this->listanoexito = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->ListaNoExito[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->listanoexito[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->ListaNoExito = false;
          $this->ListaNoExito_erro = $this->Db->ErrorMsg();
          $this->listanoexito = false;
          $this->listanoexito_erro = $this->Db->ErrorMsg();
      } 
;
	$motivoNoExito=$this->listanoexito[0][1];
	$msj =$msj.$motivoNoExito.", número de celular ".$this->telefono .".";
			
	$sqlInsertVenLLamada = "INSERT INTO VEN_LlamadaBienvenida (
		  ContratoID
		  ,LlamadaBienvenidaTelefono
		  ,LlamadaBienvenidaEstado
		  ,LlamadaBienvenidaConforme
		  ,LlamadaBienvenidaNoConforme
		  ,LlamadaBienvenidaNoExito
		  ,LlamadaBienvenidaComentario
		  ,LlamadaBienvenidaFechaCreacion
		  ,UsuarioIDCreacion
		  ,LlamadaBienvenidaFechaModificacion
		  ,UsuarioIDModificacion
			) VALUES (".$this->sc_temp_ContratoID." 
			, '".$this->telefono . "'
			, '".$indExito."'
			, null
			, ".$motivoExitosa." 
			, null
			, '".$this->comentario ."'
			, Getdate()
			, ".$llamadaUserID."
			, null, null
			)";

	$sqlCantidadRegistrosNoExitosos= "SELECT COUNT (1) from VEN_LlamadaBienvenida
	where LlamadaBienvenidaEstado = '0' and ContratoID =".$this->sc_temp_ContratoID."";
	 
      $nm_select = $sqlCantidadRegistrosNoExitosos; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->CantidadNoExitosos = array();
      $this->cantidadnoexitosos = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->CantidadNoExitosos[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->cantidadnoexitosos[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->CantidadNoExitosos = false;
          $this->CantidadNoExitosos_erro = $this->Db->ErrorMsg();
          $this->cantidadnoexitosos = false;
          $this->cantidadnoexitosos_erro = $this->Db->ErrorMsg();
      } 
;
	$cantidadNoExitosos= 0;


	if(count($this->cantidadnoexitosos ) != 0){
	$cantidadNoExitosos=$this->cantidadnoexitosos[0][0];
	}

	if ($cantidadNoExitosos>=2){
	$sqlActualizarIndCallCenter="UPDATE FOC_Contrato
	   SET 
	   ContratoIndCallCenter = 1,
	   UsuarioIDModificacion = ".$llamadaUserID.",
	   ContratoFechaModificacion = Getdate()
	   WHERE ContratoID=".$this->sc_temp_ContratoID."";
	
     $nm_select = $sqlActualizarIndCallCenter; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                Formulario_Llamada_Bienvenida_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;
	}
}
$msj =$msj.$this->comentario .".";


     $nm_select = $sqlInsertVenLLamada; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                Formulario_Llamada_Bienvenida_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;

$executeProcedureSafComentario="execute USP_FOC_AgregarContratoAcuerdo ".$this->sc_temp_ContratoID.", '".$msj."', ".$llamadaUserID."";

     $nm_select = $executeProcedureSafComentario; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                Formulario_Llamada_Bienvenida_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;


$sqlActualizarUltimoEstado="UPDATE FOC_Contrato
	   SET 
	   ContratoEstadoLlamadaBienvenida ='".$estadoLlamadaContrato."',
	   UsuarioIDModificacion = ".$llamadaUserID.",
	   ContratoFechaModificacion = Getdate()
	   WHERE ContratoID=".$this->sc_temp_ContratoID."";

     $nm_select = $sqlActualizarUltimoEstado; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                Formulario_Llamada_Bienvenida_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;
if (isset($this->sc_temp_id)) { $_SESSION['id'] = $this->sc_temp_id;}
if (isset($this->sc_temp_ContratoID)) { $_SESSION['ContratoID'] = $this->sc_temp_ContratoID;}
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off';
}
function indicadorExitoConforme_onClick()
{
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'on';
  
$original_indicadorexitoconforme = $this->indicadorexitoconforme;
$original_indicadorexitoconforme = $this->indicadorexitoconforme;

if ($this->indicadorexitoconforme  == 1)     
{
	$this->nmgp_cmp_hidden["motivoc"] = "off"; $this->NM_ajax_info['fieldDisplay']['motivoc'] = 'off';
	$this->nmgp_cmp_hidden["indicadorexitoconforme"] = "on"; $this->NM_ajax_info['fieldDisplay']['indicadorexitoconforme'] = 'on';

}
else
{
	$this->nmgp_cmp_hidden["motivoc"] = "on"; $this->NM_ajax_info['fieldDisplay']['motivoc'] = 'on';
	$this->nmgp_cmp_hidden["indicadorexitoconforme"] = "on"; $this->NM_ajax_info['fieldDisplay']['indicadorexitoconforme'] = 'on';

	
}	



$modificado_indicadorexitoconforme = $this->indicadorexitoconforme;
$modificado_indicadorexitoconforme = $this->indicadorexitoconforme;
$this->nm_formatar_campos('indicadorexitoconforme');
if ($original_indicadorexitoconforme !== $modificado_indicadorexitoconforme || isset($this->nmgp_cmp_readonly['indicadorexitoconforme']) || (isset($bFlagRead_indicadorexitoconforme) && $bFlagRead_indicadorexitoconforme))
{
    $this->ajax_return_values_indicadorexitoconforme(true);
}
if ($original_indicadorexitoconforme !== $modificado_indicadorexitoconforme || isset($this->nmgp_cmp_readonly['indicadorexitoconforme']) || (isset($bFlagRead_indicadorexitoconforme) && $bFlagRead_indicadorexitoconforme))
{
    $this->ajax_return_values_indicadorexitoconforme(true);
}
$this->NM_ajax_info['event_field'] = 'indicadorExitoConforme';
Formulario_Llamada_Bienvenida_pack_ajax_response();
exit;
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off';
}
function traerToken() {
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'on';
  
    $tokenApp = "";
    try {
        $urlPrincipal = "https://dev3-ginni.pandero.com.pe";
        $tokenUrl = $urlPrincipal . "/api/autentificacion/oauth/token?encoding=UTF-8";
        $clientId = "appAsociados";
        $clientSecret = "secretAppAsociados";
        $grantType = "client_credentials";

        $postData = http_build_query(array('grant_type' => $grantType));

        $ch = curl_init($tokenUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Basic " . base64_encode("$clientId:$clientSecret"),
            "Content-type: application/x-www-form-urlencoded"
        ));

        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error en la solicitud de token:' . curl_error($ch);
        }

        curl_close($ch);

        $response = json_decode($result, true);

        $tokenApp = $response['access_token'];
        return $tokenApp;
    } catch (Exception $ex) {
        echo "Error: " . $ex->getMessage();
        return $tokenApp;
    }

$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off';
}
function enviarcorreonoconforme($ContratoID, $motivo) {
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'on';
  
		$token = $this->traerToken();
	$correoVendedor= "";
	$nombreVendedor= "";
	 $sqlpersonanombre = "SELECT concat (ContratoID,' / ', PersonaNombreCompleto) FROM  FOC_Contrato Fc INNER JOIN PER_Persona pp ON pp.PersonaID = Fc.PersonaID WHERE  	ContratoID =  " . $ContratoID;

     
      $nm_select = $sqlpersonanombre; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->Personanombrecompleto = array();
      $this->personanombrecompleto = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->Personanombrecompleto[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->personanombrecompleto[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Personanombrecompleto = false;
          $this->Personanombrecompleto_erro = $this->Db->ErrorMsg();
          $this->personanombrecompleto = false;
          $this->personanombrecompleto_erro = $this->Db->ErrorMsg();
      } 
;

    $contrato = $this->personanombrecompleto[0][0];
	$texto= "";
		 $sqlestadocontrato = "SELECT
		  CASE SUBSTRING(situacioncontratoid, 4, 1)
			WHEN '0' THEN 'Venta'
			WHEN '9' THEN 'Transferencia'
			WHEN '8' THEN 'Reubicación'
			WHEN '6' THEN 'Recupero'
			ELSE 'Otro'
		  END AS Prueba
		FROM FOC_Contrato
		where ContratoID=" . $ContratoID;

     
      $nm_select = $sqlestadocontrato; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->Sqlestadocontratoaux = array();
      $this->sqlestadocontratoaux = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->Sqlestadocontratoaux[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->sqlestadocontratoaux[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Sqlestadocontratoaux = false;
          $this->Sqlestadocontratoaux_erro = $this->Db->ErrorMsg();
          $this->sqlestadocontratoaux = false;
          $this->sqlestadocontratoaux_erro = $this->Db->ErrorMsg();
      } 
;
	

	$estadocontrato = $this->sqlestadocontratoaux[0][0];

	
	if($estado=='Venta')
		{
		
		$texto="De tener informacion adicional";
			$sqldatosdevendedor = "select EmpleadoCorreo,PersonaNombreCompleto from V					EN_Incentivo  vi
					inner join REH_Empleado re on re.EmpleadoID=vi.EmpleadoID
					inner join PER_Persona pp on pp.PersonaID= re.PersonaID
					where vi.CargoID=011
					and ContratoID=" . $ContratoID;

     
      $nm_select = $sqldatosdevendedor; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->Sqldatosvendedoraux = array();
      $this->sqldatosvendedoraux = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->Sqldatosvendedoraux[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->sqldatosvendedoraux[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Sqldatosvendedoraux = false;
          $this->Sqldatosvendedoraux_erro = $this->Db->ErrorMsg();
          $this->sqldatosvendedoraux = false;
          $this->sqldatosvendedoraux_erro = $this->Db->ErrorMsg();
      } 
;
	

	$correoVendedor = $this->sqldatosvendedoraux[0][0];
	$nombreVendedor = $this->sqldatosvendedoraux[0][1];
		
	}
	else {
		$texto="para la retencion de la venta de ser posible. De tener informacion que 			nos ayude con la retencion, contactarse con";
		 $sqldatosdevendedor="
				select  PersonaNombreCompleto , (select top 1 EmpleadoCorreo from 		reh_empleado re where re.PersonaID=su.PersonaID) as correo  from FOC_Contrato fc 
		inner join SEG_Usuario su on fc.UsuarioIDCreacion=su.UsuarioID
		inner join PER_Persona pp on pp.PersonaID= su.PersonaID
		where ContratoID=" . $ContratoID;

     
      $nm_select = $sqldatosdevendedor; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->Sqldatosvendedoraux = array();
      $this->sqldatosvendedoraux = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->Sqldatosvendedoraux[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->sqldatosvendedoraux[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Sqldatosvendedoraux = false;
          $this->Sqldatosvendedoraux_erro = $this->Db->ErrorMsg();
          $this->sqldatosvendedoraux = false;
          $this->sqldatosvendedoraux_erro = $this->Db->ErrorMsg();
      } 
;
	
	$correoVendedor = $this->sqldatosvendedoraux[0][1];
	$nombreVendedor = $this->sqldatosvendedoraux[0][0];
		
		}
			
	$motivoaux= $this->motivo;
	
	$copiaCorreo="jtabraj@pandero.com.pe";
	
	$respuestaNotificacion = new stdClass();
    $plantillaCorreo = "mailLlamadaBienvenidaJefasNoConforme";
    $tituloCorreo = "LLAMADA DE BIENVENIDA NO CONFORME CON INFORMACION";
    $urlPrincipal = "https://dev1-gcp-ginni.pandero.com.pe";
    $url = $urlPrincipal . "/administracion/gestornotificaciones/envioCorreo";

	echo "data".$nombreVendedor;
		echo "data2".$contrato;
		echo "data3".$motivoaux;
		echo "data4".$texto;
	
    $valores = array(
        "Nombre" => $nombreVendedor,
		"ContratoNombre" => $contrato,
        "Motivo" => $motivoaux,
        "Texto" => $texto
    );
	
	echo $valores;

    $correo = "notificaciones@pandero.com.pe";
    $prefijo = "externo";
    $correosVendedor = explode(',', $correoVendedor);
    $correosCC = explode(',', $copiaCorreo);

   $notificacionRequestBean = new stdClass();
$notificacionRequestBean->valores = $valores;
$notificacionRequestBean->correoCabecera = $correo;
$notificacionRequestBean->remitente = $correo;
$notificacionRequestBean->correos = $correosVendedor;
if (!empty($correosCC)) {
    $notificacionRequestBean->copias = $correosCC;
}
$notificacionRequestBean->plantilla = $plantillaCorreo;
$notificacionRequestBean->prefijo = $prefijo;
$notificacionRequestBean->tituloMensaje = $tituloCorreo;

$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n" .
                     "Authorization: Bearer " . $token,
        'method'  => 'POST',
        'content' => json_encode($notificacionRequestBean),
    ),
);

$context = stream_context_create($options);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($notificacionRequestBean));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-type: application/json",
    "Authorization: Bearer " . $token
));

$result = curl_exec($ch);
echo $result;

if (curl_errno($ch)) {
    $respuestaNotificacion->Mensaje = 'Error en la solicitud de correo: ' . curl_error($ch);
    $respuestaNotificacion->Estado = false;
    return false;
}

curl_close($ch);

$respuesta = json_decode($result);

if ($respuesta !== null) {
    $respuestaNotificacion->Mensaje = $respuesta->Mensaje;
    $respuestaNotificacion->Estado = true;
    return true;
} else {
    $respuestaNotificacion->Mensaje = 'Error en la decodificación JSON de la respuesta.';
    $respuestaNotificacion->Estado = false;
    return false;
}
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off';
}
function scajaxbutton_Volver_onClick()
{
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'on';
  



 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 {
$this->nmgp_redireciona_form("https://int-ginni.pandero.com.pe/#/portal/externo/llamadaBienvenida", $this->nm_location, "", "_self", "ret_self", 440, 630);
 };
 


$this->nm_formatar_campos();
$this->NM_ajax_info['event_field'] = 'scajaxbutton';
Formulario_Llamada_Bienvenida_pack_ajax_response();
exit;
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off';
}
function scajaxbutton_Guardar_onClick()
{
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'on';
  
$original_estado = $this->estado;
$original_indicadorexitoconforme = $this->indicadorexitoconforme;
$original_motivoc = $this->motivoc;
$original_telefono = $this->telefono;
$original_comentario = $this->comentario;
$original_motivo = $this->motivo;

$this->SubirInformacion();



$modificado_estado = $this->estado;
$modificado_indicadorexitoconforme = $this->indicadorexitoconforme;
$modificado_motivoc = $this->motivoc;
$modificado_telefono = $this->telefono;
$modificado_comentario = $this->comentario;
$modificado_motivo = $this->motivo;
$this->nm_formatar_campos('estado', 'indicadorexitoconforme', 'motivoc', 'telefono', 'comentario', 'motivo');
if ($original_estado !== $modificado_estado || isset($this->nmgp_cmp_readonly['estado']) || (isset($bFlagRead_estado) && $bFlagRead_estado))
{
    $this->ajax_return_values_estado(true);
}
if ($original_indicadorexitoconforme !== $modificado_indicadorexitoconforme || isset($this->nmgp_cmp_readonly['indicadorexitoconforme']) || (isset($bFlagRead_indicadorexitoconforme) && $bFlagRead_indicadorexitoconforme))
{
    $this->ajax_return_values_indicadorexitoconforme(true);
}
if ($original_motivoc !== $modificado_motivoc || isset($this->nmgp_cmp_readonly['motivoc']) || (isset($bFlagRead_motivoc) && $bFlagRead_motivoc))
{
    $this->ajax_return_values_motivoc(true);
}
if ($original_telefono !== $modificado_telefono || isset($this->nmgp_cmp_readonly['telefono']) || (isset($bFlagRead_telefono) && $bFlagRead_telefono))
{
    $this->ajax_return_values_telefono(true);
}
if ($original_comentario !== $modificado_comentario || isset($this->nmgp_cmp_readonly['comentario']) || (isset($bFlagRead_comentario) && $bFlagRead_comentario))
{
    $this->ajax_return_values_comentario(true);
}
if ($original_motivo !== $modificado_motivo || isset($this->nmgp_cmp_readonly['motivo']) || (isset($bFlagRead_motivo) && $bFlagRead_motivo))
{
    $this->ajax_return_values_motivo(true);
}
$this->NM_ajax_info['event_field'] = 'scajaxbutton';
Formulario_Llamada_Bienvenida_pack_ajax_response();
exit;


$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off';
}
function AlertifyjsConfirm(){
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'on';
  
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset = "UTF-8">
		<title>Alerta</title>

<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
</head>
<body>
	<script>
		alertify.alert('Estado Registro', 'Registro Exitoso!', function(){ alertify.success('Genial!'); });
	</script>
</body>
</html>
<?php
	
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off';
}
function ConsultarData($ContratoID, $tipo) {
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'on';
  	

	   $sqlpersonanombre = "SELECT PersonaNombreCompleto FROM FOC_Contrato Fc
                        INNER JOIN PER_Persona pp ON pp.PersonaID = Fc.PersonaID
                        WHERE ContratoID = " . $ContratoID;

     
      $nm_select = $sqlpersonanombre; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->Personanombrecompleto = array();
      $this->personanombrecompleto = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->Personanombrecompleto[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->personanombrecompleto[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Personanombrecompleto = false;
          $this->Personanombrecompleto_erro = $this->Db->ErrorMsg();
          $this->personanombrecompleto = false;
          $this->personanombrecompleto_erro = $this->Db->ErrorMsg();
      } 
;

    $personanombre = $this->personanombrecompleto[0][0];
	echo $personanombre;
	


	
    switch ($tipo) {
        case 'exitoso':
			
			
			
            echo "La consulta fue exitosa.";
            break;

        case 'noexitoso':
            echo "La consulta no fue exitosa.";
            break;
    }
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off';
}
function EnviarCorreo($tipo) {
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'on';
  

	$token = $this->traerToken();
	$this->enviarCorreo2("jhefe", "cliente","99999999" , "jtabraj@pandero.com.pe", "developertabraj@gmail.com",$token);


$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off';
}
function enviarCorreo2($nombreUsuario, $nombreCliente, $celular, $correoVendedor, $copiaCorreo, $token) {
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'on';
  
    $respuestaNotificacion = new stdClass();
    $plantillaCorreo = "mailLiberacionVacante";
    $tituloCorreo = "Tu separacion de vacante se encuentra en proceso de ser eliminada";
    $urlPrincipal = "https://dev3-ginni.pandero.com.pe";
    $url = $urlPrincipal . "/administracion/gestornotificaciones/envioCorreo";

    $valores = array(
        "NombreCliente" => $nombreCliente,
        "Celular" => $celular,
        "NombreUsuario" => $nombreUsuario
    );

    $correo = "notificaciones@pandero.com.pe";
    $prefijo = "externo";
    $correosVendedor = explode(',', $correoVendedor);
    $correosCC = explode(',', $copiaCorreo);

    $notificacionRequestBean = new stdClass();
    $notificacionRequestBean->valores = $valores;
    $notificacionRequestBean->correoCabecera = $correo;
    $notificacionRequestBean->remitente = $correo;
    $notificacionRequestBean->correos = $correosVendedor;
    if (!empty($correosCC)) {
        $notificacionRequestBean->copias = $correosCC;
    }
    $notificacionRequestBean->plantilla = $plantillaCorreo;
    $notificacionRequestBean->prefijo = $prefijo;
    $notificacionRequestBean->tituloMensaje = $tituloCorreo;

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n" .
                         "Authorization: Bearer " . $token,
            'method'  => 'POST',
            'content' => json_encode($notificacionRequestBean),
        ),
    );

    $context = stream_context_create($options);
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($notificacionRequestBean));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-type: application/json",
        "Authorization: Bearer " . $token
    ));

    $result = curl_exec($ch);
	echo $result;

    if (curl_errno($ch)) {
        $respuestaNotificacion->Mensaje = 'Error en la solicitud de correo: ' . curl_error($ch);
        $respuestaNotificacion->Estado = false;
        return false;
    }

    curl_close($ch);

    $respuesta = json_decode($result);

    if ($respuesta !== null) {
        $respuestaNotificacion->Mensaje = $respuesta->Mensaje;
        $respuestaNotificacion->Estado = true;
        return true;
    } else {
        $respuestaNotificacion->Mensaje = 'Error en la decodificación JSON de la respuesta.';
        $respuestaNotificacion->Estado = false;
        return false;
    }

$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off';
}
//
 function nm_gera_html()
 {
    global
           $nm_url_saida, $nmgp_url_saida, $nm_saida_global, $nm_apl_dependente, $glo_subst, $sc_check_excl, $sc_check_incl, $nmgp_num_form, $NM_run_iframe;
     if ($this->Embutida_proc)
     {
         return;
     }
     if ($this->nmgp_form_show == 'off')
     {
         exit;
     }
      if (isset($NM_run_iframe) && $NM_run_iframe == 1)
      {
          $this->nmgp_botoes['exit'] = "off";
      }
     $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['opc_ant'] = $this->nmgp_opcao;
     }
     else
     {
         $this->nmgp_opcao = $this->nmgp_opc_ant;
     }
     if (!empty($this->Campos_Mens_erro)) 
     {
         $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
         $this->Campos_Mens_erro = "";
     }
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              Formulario_Llamada_Bienvenida_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
      if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1) 
      { 
          $nm_saida_global = $_SESSION['scriptcase']['nm_sc_retorno']; 
      } 
    if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
    $_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'on';
  $EstLlamadaCombo =$this->estado .'A';
$EstconfCombo =$this->indicadorexitoconforme .'B';
if ($EstLlamadaCombo=='A')  
{

	$this->nmgp_cmp_hidden["motivo"] = "off"; $this->NM_ajax_info['fieldDisplay']['motivo'] = 'off';
	$this->nmgp_cmp_hidden["indicadorexitoconforme"] = "off"; $this->NM_ajax_info['fieldDisplay']['indicadorexitoconforme'] = 'off';
}else{
	 
if ($EstLlamadaCombo=='0A')  
{

	$this->nmgp_cmp_hidden["motivo"] = "on"; $this->NM_ajax_info['fieldDisplay']['motivo'] = 'on';
	$this->nmgp_cmp_hidden["indicadorexitoconforme"] = "off"; $this->NM_ajax_info['fieldDisplay']['indicadorexitoconforme'] = 'off';
}
if ($EstLlamadaCombo=='1A')  
{
	$this->nmgp_cmp_hidden["motivo"] = "off"; $this->NM_ajax_info['fieldDisplay']['motivo'] = 'off';
	$this->nmgp_cmp_hidden["indicadorexitoconforme"] = "on"; $this->NM_ajax_info['fieldDisplay']['indicadorexitoconforme'] = 'on';
	
	if ($EstconfCombo=='B')  
	{
		$this->nmgp_cmp_hidden["motivoc"] = "off"; $this->NM_ajax_info['fieldDisplay']['motivoc'] = 'off';
 	}else{
		if ($EstconfCombo=='0B')  
		{
			$this->nmgp_cmp_hidden["motivoc"] = "on"; $this->NM_ajax_info['fieldDisplay']['motivoc'] = 'on';
		}
		if ($EstconfCombo=='1B')  
		{
			$this->nmgp_cmp_hidden["motivoc"] = "off"; $this->NM_ajax_info['fieldDisplay']['motivoc'] = 'off';
		}
	}
}
 
}
$_SESSION['scriptcase']['Formulario_Llamada_Bienvenida']['contr_erro'] = 'off'; 
    }
    if (!empty($this->Campos_Mens_erro)) 
    {
        $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
    }
    $this->nm_guardar_campos();
    $this->nm_formatar_campos();
        $this->initFormPages();
    include_once("Formulario_Llamada_Bienvenida_form0.php");
        $this->hideFormPages();
 }

        function initFormPages() {
        } // initFormPages

        function hideFormPages() {
        } // hideFormPages

    function form_format_readonly($field, $value)
    {
        $result = $value;

        $this->form_highlight_search($result, $field, $value);

        return $result;
    }

    function form_highlight_search(&$result, $field, $value)
    {
        if ($this->proc_fast_search) {
            $this->form_highlight_search_quicksearch($result, $field, $value);
        }
    }

    function form_highlight_search_quicksearch(&$result, $field, $value)
    {
        $searchOk = false;
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array(""))) {
            $searchOk = true;
        }
        elseif ($field == $this->nmgp_fast_search && in_array($field, array(""))) {
            $searchOk = true;
        }

        if (!$searchOk || '' == $this->nmgp_arg_fast_search) {
            return;
        }

        $htmlIni = '<div class="highlight" style="background-color: #fafaca; display: inline-block">';
        $htmlFim = '</div>';

        if ('qp' == $this->nmgp_cond_fast_search) {
            $keywords = preg_quote($this->nmgp_arg_fast_search, '/');
            $result = preg_replace('/'. $keywords .'/i', $htmlIni . '$0' . $htmlFim, $result);
        } elseif ('eq' == $this->nmgp_cond_fast_search) {
            if (strcasecmp($this->nmgp_arg_fast_search, $value) == 0) {
                $result = $htmlIni. $result .$htmlFim;
            }
        }
    }


    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input


        function addUrlParam($url, $param, $value) {
                $urlParts  = explode('?', $url);
                $urlParams = isset($urlParts[1]) ? explode('&', $urlParts[1]) : array();
                $objParams = array();
                foreach ($urlParams as $paramInfo) {
                        $paramParts = explode('=', $paramInfo);
                        $objParams[ $paramParts[0] ] = isset($paramParts[1]) ? $paramParts[1] : '';
                }
                $objParams[$param] = $value;
                $urlParams = array();
                foreach ($objParams as $paramName => $paramValue) {
                        $urlParams[] = $paramName . '=' . $paramValue;
                }
                return $urlParts[0] . '?' . implode('&', $urlParams);
        }
 function allowedCharsCharset($charlist)
 {
     if ($_SESSION['scriptcase']['charset'] != 'UTF-8')
     {
         $charlist = NM_conv_charset($charlist, $_SESSION['scriptcase']['charset'], 'UTF-8');
     }
     return str_replace("'", "\'", $charlist);
 }

function sc_file_size($file, $format = false)
{
    if ('' == $file) {
        return '';
    }
    if (!@is_file($file)) {
        return '';
    }
    $fileSize = @filesize($file);
    if ($format) {
        $suffix = '';
        if (1024 >= $fileSize) {
            $fileSize /= 1024;
            $suffix    = ' KB';
        }
        if (1024 >= $fileSize) {
            $fileSize /= 1024;
            $suffix    = ' MB';
        }
        if (1024 >= $fileSize) {
            $fileSize /= 1024;
            $suffix    = ' GB';
        }
        $fileSize = $fileSize . $suffix;
    }
    return $fileSize;
}


 function new_date_format($type, $field)
 {
     $new_date_format_out = '';

     if ('DT' == $type)
     {
         $date_format  = $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = $this->field_config[$field]['date_display'];
         $time_format  = '';
         $time_sep     = '';
         $time_display = '';
     }
     elseif ('DH' == $type)
     {
         $date_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , 0, strpos($this->field_config[$field]['date_format'] , ';')) : $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], 0, strpos($this->field_config[$field]['date_display'], ';')) : $this->field_config[$field]['date_display'];
         $time_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , strpos($this->field_config[$field]['date_format'] , ';') + 1) : '';
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], strpos($this->field_config[$field]['date_display'], ';') + 1) : '';
     }
     elseif ('HH' == $type)
     {
         $date_format  = '';
         $date_sep     = '';
         $date_display = '';
         $time_format  = $this->field_config[$field]['date_format'];
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = $this->field_config[$field]['date_display'];
     }

     if ('DT' == $type || 'DH' == $type)
     {
         $date_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_format); $i++)
         {
             $char = strtolower(substr($date_format, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $date_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $date_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $disp_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_display); $i++)
         {
             $char = strtolower(substr($date_display, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $disp_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $disp_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $date_final = array();
         foreach ($date_array as $date_part)
         {
             if (in_array($date_part, $disp_array))
             {
                 $date_final[] = $date_part;
             }
         }

         $date_format = implode($date_sep, $date_final);
     }
     if ('HH' == $type || 'DH' == $type)
     {
         $time_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_format); $i++)
         {
             $char = strtolower(substr($time_format, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $time_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $time_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $disp_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_display); $i++)
         {
             $char = strtolower(substr($time_display, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $disp_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $disp_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $time_final = array();
         foreach ($time_array as $time_part)
         {
             if (in_array($time_part, $disp_array))
             {
                 $time_final[] = $time_part;
             }
         }

         $time_format = implode($time_sep, $time_final);
     }

     if ('DT' == $type)
     {
         $old_date_format = $date_format;
     }
     elseif ('DH' == $type)
     {
         $old_date_format = $date_format . ';' . $time_format;
     }
     elseif ('HH' == $type)
     {
         $old_date_format = $time_format;
     }

     for ($i = 0; $i < strlen($old_date_format); $i++)
     {
         $char = substr($old_date_format, $i, 1);
         if ('/' == $char)
         {
             $new_date_format_out .= $date_sep;
         }
         elseif (':' == $char)
         {
             $new_date_format_out .= $time_sep;
         }
         else
         {
             $new_date_format_out .= $char;
         }
     }

     $this->field_config[$field]['date_format'] = $new_date_format_out;
     if ('DH' == $type)
     {
         $new_date_format_out                                  = explode(';', $new_date_format_out);
         $this->field_config[$field]['date_format_js']        = $new_date_format_out[0];
         $this->field_config[$field . '_hora']['date_format'] = $new_date_format_out[1];
         $this->field_config[$field . '_hora']['time_sep']    = $this->field_config[$field]['time_sep'];
     }
 } // new_date_format

   function Form_lookup_estado()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "Exitosa?#?1?#?N?@?";
       $nmgp_def_dados .= "No exitosa?#?0?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_indicadorexitoconforme()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "Conforme?#?1?#?N?@?";
       $nmgp_def_dados .= "No Conforme?#?0?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_motivo()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivo']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivo']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivo'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivo']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivo']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivo'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivo'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_motivoc()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivoc']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivoc'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivoc']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivoc'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivoc']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivoc'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivoc']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivoc'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['Lookup_motivoc'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
function nmgp_redireciona($tipo=0)
{
   global $nm_apl_dependente;
   if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['scriptcase']['sc_tp_saida'] != "D" && $nm_apl_dependente != 1) 
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['nm_sc_retorno'];
   }
   else
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page];
   }
   if ($tipo == 2)
   {
       $nmgp_saida_form = "Formulario_Llamada_Bienvenida_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['nm_run_menu'] = 2;
       $nmgp_saida_form = "Formulario_Llamada_Bienvenida_fim.php";
   }
   $diretorio = explode("/", $nmgp_saida_form);
   $cont = count($diretorio);
   $apl = $diretorio[$cont - 1];
   $apl = str_replace(".php", "", $apl);
   $pos = strpos($apl, "?");
   if ($pos !== false)
   {
       $apl = substr($apl, 0, $pos);
   }
   if ($tipo != 1 && $tipo != 2)
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page][$apl]['where_orig']);
   }
   if ($this->NM_ajax_flag)
   {
       $sTarget = '_self';
       $this->NM_ajax_info['redir']['metodo']              = 'post';
       $this->NM_ajax_info['redir']['action']              = $nmgp_saida_form;
       $this->NM_ajax_info['redir']['target']              = $sTarget;
       $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       if (0 == $tipo)
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida'] = $this->nm_location;
       }
       Formulario_Llamada_Bienvenida_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
   {
?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
   }

?>
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
    <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
   </HEAD>
   <BODY>
   <FORM name="form_ok" method="POST" action="<?php echo $this->form_encode_input($nmgp_saida_form); ?>" target="_self">
<?php
   if ($tipo == 0)
   {
?>
     <INPUT type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($this->nm_location); ?>"> 
<?php
   }
?>
     <INPUT type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
   </FORM>
   <SCRIPT type="text/javascript">
      bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
      function scLigEditLookupCall()
      {
<?php
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['masterValue']);
?>
}
<?php
    }
}
?>
      document.form_ok.submit();
   </SCRIPT>
   </BODY>
   </HTML>
<?php
  exit;
}
function nmgp_redireciona_form($nm_apl_dest, $nm_apl_retorno, $nm_apl_parms, $nm_target="", $opc="", $alt_modal=430, $larg_modal=630)
{
   if (isset($this->NM_is_redirected) && $this->NM_is_redirected)
   {
       return;
   }
   if (is_array($nm_apl_parms))
   {
       $tmp_parms = "";
       foreach ($nm_apl_parms as $par => $val)
       {
           $par = trim($par);
           $val = trim($val);
           $tmp_parms .= str_replace(".", "_", $par) . "?#?";
           if (substr($val, 0, 1) == "$")
           {
               $tmp_parms .= $$val;
           }
           elseif (substr($val, 0, 1) == "{")
           {
               $val        = substr($val, 1, -1);
               $tmp_parms .= $this->$val;
           }
           elseif (substr($val, 0, 1) == "[")
           {
               $tmp_parms .= $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida'][substr($val, 1, -1)];
           }
           else
           {
               $tmp_parms .= $val;
           }
           $tmp_parms .= "?@?";
       }
       $nm_apl_parms = $tmp_parms;
   }
   if (empty($opc))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['opcao'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['opc_ant'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['retorno_edit'] = "";
   }
   $nm_target_form = (empty($nm_target)) ? "_self" : $nm_target;
   if (strtolower(substr($nm_apl_dest, -4)) != ".php" && (strtolower(substr($nm_apl_dest, 0, 7)) == "http://" || strtolower(substr($nm_apl_dest, 0, 8)) == "https://" || strtolower(substr($nm_apl_dest, 0, 3)) == "../"))
   {
       if ($this->NM_ajax_flag)
       {
           $this->NM_ajax_info['redir']['metodo'] = 'location';
           $this->NM_ajax_info['redir']['action'] = $nm_apl_dest;
           $this->NM_ajax_info['redir']['target'] = $nm_target_form;
           Formulario_Llamada_Bienvenida_pack_ajax_response();
           exit;
       }
       echo "<SCRIPT language=\"javascript\">";
       if (strtolower($nm_target) == "_blank")
       {
           echo "window.open ('" . $nm_apl_dest . "');";
           echo "</SCRIPT>";
           return;
       }
       else
       {
           echo "window.location='" . $nm_apl_dest . "';";
           echo "</SCRIPT>";
           $this->NM_close_db();
           exit;
       }
   }
   $dir = explode("/", $nm_apl_dest);
   if (count($dir) == 1)
   {
       $nm_apl_dest = str_replace(".php", "", $nm_apl_dest);
       $nm_apl_dest = $this->Ini->path_link . SC_dir_app_name($nm_apl_dest) . "/" . $nm_apl_dest . ".php";
   }
   if ($this->NM_ajax_flag)
   {
       $nm_apl_parms = str_replace("?#?", "*scin", NM_charset_to_utf8($nm_apl_parms));
       $nm_apl_parms = str_replace("?@?", "*scout", $nm_apl_parms);
       $this->NM_ajax_info['redir']['metodo']     = 'post';
       $this->NM_ajax_info['redir']['action']     = $nm_apl_dest;
       $this->NM_ajax_info['redir']['nmgp_parms'] = $nm_apl_parms;
       $this->NM_ajax_info['redir']['target']     = $nm_target_form;
       $this->NM_ajax_info['redir']['h_modal']    = $alt_modal;
       $this->NM_ajax_info['redir']['w_modal']    = $larg_modal;
       if ($nm_target_form == "_blank")
       {
           $this->NM_ajax_info['redir']['nmgp_outra_jan'] = 'true';
       }
       else
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida']      = $nm_apl_retorno;
           $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       }
       Formulario_Llamada_Bienvenida_pack_ajax_response();
       exit;
   }
   if ($nm_target == "modal")
   {
       if (!empty($nm_apl_parms))
       {
           $nm_apl_parms = str_replace("?#?", "*scin", $nm_apl_parms);
           $nm_apl_parms = str_replace("?@?", "*scout", $nm_apl_parms);
           $nm_apl_parms = "nmgp_parms=" . $nm_apl_parms . "&";
       }
       $par_modal = "?script_case_init=" . $this->Ini->sc_page . "&nmgp_outra_jan=true&nmgp_url_saida=modal&NMSC_modal=ok&";
       $this->redir_modal = "$(function() { tb_show('', '" . $nm_apl_dest . $par_modal . $nm_apl_parms . "TB_iframe=true&modal=true&height=" . $alt_modal . "&width=" . $larg_modal . "', '') })";
       $this->NM_is_redirected = true;
       return;
   }
   if ($nm_target == "_blank")
   {
?>
<form name="Fredir" method="post" target="_blank" action="<?php echo $nm_apl_dest; ?>">
  <input type="hidden" name="nmgp_parms" value="<?php echo $this->form_encode_input($nm_apl_parms); ?>"/>
</form>
<script type="text/javascript">
setTimeout(function() { document.Fredir.submit(); }, 250);
</script>
<?php
    return;
   }
?>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
   {
?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
   }

?>
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
    <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
    <SCRIPT type="text/javascript" src="../_lib/lib/js/jquery-3.6.0.min.js"></SCRIPT>
   </HEAD>
   <BODY>
<?php
   }
?>
<form name="Fredir" method="post" 
                  target="_self"> 
  <input type="hidden" name="nmgp_parms" value="<?php echo $this->form_encode_input($nm_apl_parms); ?>"/>
<?php
   if ($nm_target_form == "_blank")
   {
?>
  <input type="hidden" name="nmgp_outra_jan" value="true"/> 
<?php
   }
   else
   {
?>
  <input type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($nm_apl_retorno) ?>">
  <input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"/> 
<?php
   }
?>
</form> 
   <SCRIPT type="text/javascript">
<?php
   if ($nm_target_form == "modal")
   {
?>
       $(document).ready(function(){
           tb_show('', '<?php echo $nm_apl_dest ?>?script_case_init=<?php echo $this->Ini->sc_page; ?>&nmgp_url_saida=modal&nmgp_parms=<?php echo $this->form_encode_input($nm_apl_parms); ?>&nmgp_outra_jan=true&TB_iframe=true&height=<?php echo $alt_modal; ?>&width=<?php echo $larg_modal; ?>&modal=true', '');
       });
<?php
   }
   else
   {
?>
    $(function() {
       document.Fredir.target = "<?php echo $nm_target_form ?>"; 
       document.Fredir.action = "<?php echo $nm_apl_dest ?>";
       document.Fredir.submit();
    });
<?php
   }
?>
   </SCRIPT>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
?>
   </BODY>
   </HTML>
<?php
   }
?>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
       $this->NM_close_db();
       if ($this->Ini->nm_db_ds_saf_rep)
       {
           $this->Ini->nm_db_ds_saf_rep->Close();
       }
       exit;
   }
}
    function sc_master_value($sIndex, $sValue)
    {
        $sIndex = strtolower($sIndex);
        $this->NM_ajax_info['masterValue'][$sIndex] = $sValue;
        $_SESSION['sc_session'][$this->Ini->sc_page]['Formulario_Llamada_Bienvenida']['masterValue'] = $this->NM_ajax_info['masterValue'];
    } // sc_master_value
}
?>
