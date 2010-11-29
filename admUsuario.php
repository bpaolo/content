<?php 
  include_once dirname(__FILE__).'/classes/class.FrontController.php';
  $frontController = new FrontController();
  $vetUsuario = $frontController->iniciarAdm($_GET['pag'],'usuario','admUsuario.php');
    
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script language="Javascript" src="scripts/funcoes.js"></script>
<script language="Javascript" src="scripts/FormContext.js"></script>
<!-- saved from url=(0014)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="file:///E|/wamp/www/sgi/Templates/modelo_base.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<link rel="shortcut icon" href="/ProativadoPara/Templates/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>:: Proativa do Par&aacute; ::</title>
<!-- InstanceEndEditable -->
<link href="/ProativadoPara/style.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url();
}
#Layer1 {
	position:relative;
	width:100%;
	z-index:auto;
	visibility: visible;
	height: 700px;
	overflow: auto;
	top: 3px;
	right: 3px;
}
.style17 {font-size: 10px}
.style2 {font-family: Tahoma, Verdana, Arial}
#noticias {	position:relative;
	width:207px;
	height:300px;
	z-index:1;
	overflow: auto;
	visibility: visible;
	scrollbar-face-color: #C6C6C6;
	scrollbar-highlight-color: #C6C6C6;
	scrollbar-shadow-color: #E2E2E2;
	scrollbar-3dlight-color: #C6C6C6;
	scrollbar-arrow-color: #4A527A;
	scrollbar-track-color: #4A527A;
	scrollbar-darkshadow-color: #000000;
	top: 5px;
}
a:link {
	color: #FF0000;
}
a:visited {
	color: #FF0000;
	text-decoration: none;
}
a:hover {
	color: #FF0000;
	text-decoration: underline;
}
.style10 {font-weight: bold}
.style4 {color: #FFFFFF}
.style21 {
	color: #FFFFFF;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	text-align: center;
}
.style22 {color: #E2E2E2}
-->
</style>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body onload="MM_preloadImages('file:///D|/images/botao_home_on.gif','file:///D|/images/botao_instituicao_on.gif','file:///D|/images/botao_galeria_on.gif','file:///D|/images/botao_video_ON.gif','file:///D|/images/botao_leis_ON.gif','file:///D|/images/botao_fale_on.gif','file:///D|/images/botao_depoimentos_on.png','file:///D|/images/botao_curriculo_on.png','file:///D|/images/botao_vagas_on.png','file:///D|/images/botao_instalacoes_on.png','file:///D|/images/botao_treinamentos_on.png')"><table width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td width="17" rowspan="4" valign="top" background="/ProativadoPara/images/bg_left.gif">&nbsp;</td>
    <td height="37" background="/ProativadoPara/images/botao_topo.gif"><div align="right"><a name="topo" id="topo"></a><img src="/ProativadoPara/images/separator.gif" width="2" height="37" /><a href="/ProativadoPara/index.html"><img src="/ProativadoPara/images/botao_home.gif" alt="Volta &agrave; p&aacute;gina inicial" name="Image4" width="88" height="37" border="0" id="Image4" onmouseover="MM_swapImage('Image4','','file:///D|/images/botao_home_on.gif',1);MM_swapImage('Image4','','/ProativadoPara/images/botao_home_on.gif',1)" onmouseout="MM_swapImgRestore()" /></a><img src="/ProativadoPara/images/separator.gif" width="2" height="37" /><a href="/ProativadoPara/instituicao.html"><img src="/ProativadoPara/images/botao_instituicao.gif" alt="Institui&ccedil;&atilde;o" name="Image1" width="88" height="37" border="0" id="Image1" onmouseover="MM_swapImage('Image1','','file:///D|/images/botao_instituicao_on.gif',1);MM_swapImage('Image1','','/ProativadoPara/images/botao_instituicao_on.gif',1)" onmouseout="MM_swapImgRestore()" /></a><img src="/ProativadoPara/images/separator.gif" width="2" height="37" /><a href="/ProativadoPara/galeria.html"><img src="/ProativadoPara/images/botao_galeria.gif" alt="Conhe&ccedil;a alguns Aprendizes" name="Image3" width="88" height="37" border="0" id="Image3" onmouseover="MM_swapImage('Image3','','file:///D|/images/botao_galeria_on.gif',1);MM_swapImage('Image3','','/ProativadoPara/images/botao_galeria_on.gif',1)" onmouseout="MM_swapImgRestore()" /></a><a href="file:///D|/instituicao.html"></a><img src="/ProativadoPara/images/separator.gif" width="2" height="37" /><a href="/ProativadoPara/video.html"><img src="/ProativadoPara/images/botao_video_an.gif" alt="Assista aos v&iacute;deos da Proativa" name="Image2" width="60" height="37" border="0" id="Image2" onmouseover="MM_swapImage('Image2','','file:///D|/images/botao_video_ON.gif',1);MM_swapImage('Image2','','/ProativadoPara/images/botao_video_ON.gif',1)" onmouseout="MM_swapImgRestore()" /></a><img src="/ProativadoPara/images/separator.gif" width="2" height="37" /><a href="/ProativadoPara/leis_dec.html"><img src="/ProativadoPara/images/botao_leis.gif" alt="Leis, Decretos e Portarias" name="Image10" width="110" height="37" border="0" id="Image10" onmouseover="MM_swapImage('Image10','','file:///D|/images/botao_leis_ON.gif',1);MM_swapImage('Image10','','/ProativadoPara/images/botao_leis_ON.gif',1)" onmouseout="MM_swapImgRestore()" /></a><img src="/ProativadoPara/images/separator.gif" width="2" height="37" /><a href="/ProativadoPara/contato.html"><img src="/ProativadoPara/images/botao_fale.gif" alt="Entre em contato conosco" name="Image11" width="88" height="37" border="0" id="Image11" onmouseover="MM_swapImage('Image11','','file:///D|/images/botao_fale_on.gif',1);MM_swapImage('Image11','','/ProativadoPara/images/botao_fale_on.gif',1)" onmouseout="MM_swapImgRestore()" /></a><img src="/ProativadoPara/images/separator.gif" width="2" height="37" /></div></td>
    <td width="17" rowspan="4" background="/ProativadoPara/images/bg_right.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="113" background="/ProativadoPara/images/fundo-esq.gif"><table width="100%" cellpadding="0" cellspacing="0" id="topo">
      <tr>
        <td width="17%"><img src="/ProativadoPara/images/topo_r1_c1.png" alt="Volta &agrave; p&aacute;gina inicial" width="150" height="113" border="0" usemap="#Map" /></td>
        <td width="100%"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="466" height="113" align="right">
          <param name="movie" value="/ProativadoPara/animacoes/banner_topo.swf" />
          <param name="quality" value="high" />
          <embed src="/ProativadoPara/animacoes/banner_topo.swf" width="466" height="113" align="right" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
        </object></td>
        <td width="18%"><div align="right"><img src="/ProativadoPara/images/topo-jpg_r1_c3.jpg" width="164" height="113" /></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="60" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="246" height="60" valign="top" background="/ProativadoPara/images/fon04.gif"><table width="246" height="46" border="0" cellpadding="0" cellspacing="0" background="file:///D|/images/fon04.gif" id="data-hora">
          <tr>
            <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td></td>
                </tr>
              </table>
                <div align="left" class="noticia">
                  <p align="center">
                    <script language="JavaScript" 
      src="/ProativadoPara/vnu_datestamp.js" type="text/javascript"></script>
                  </p>
                </div></td>
          </tr>
        </table></td>
        <td width="100%" background="/ProativadoPara/images/fim_barra_menu.gif"><a href="/ProativadoPara/depoimentos.html"><img src="/ProativadoPara/images/botao_depoimentos.png" alt="Confira os depoimentos" name="Image5" width="102" height="60" border="0" id="Image5" onmouseover="MM_swapImage('Image5','','file:///D|/images/botao_depoimentos_on.png',1);MM_swapImage('Image5','','/ProativadoPara/images/botao_depoimentos_on.png',1)" onmouseout="MM_swapImgRestore()" /></a><img src="/ProativadoPara/images/fim_barra_menu.gif" width="2" height="60" /><a href="/ProativadoPara/curriculo.html"><img src="/ProativadoPara/images/botao_curriculo.png" alt="Envie o seu curr&iacute;culo" name="Image6" width="98" height="60" border="0" id="Image6" onmouseover="MM_swapImage('Image6','','file:///D|/images/botao_curriculo_on.png',1);MM_swapImage('Image6','','/ProativadoPara/images/botao_curriculo_on.png',1)" onmouseout="MM_swapImgRestore()" /></a><img src="/ProativadoPara/images/fim_barra_menu.gif" width="2" height="60" /><a href="/ProativadoPara/vagas.html"><img src="/ProativadoPara/images/botao_vagas.png" alt="Confira as vagas dispon&iacute;veis" name="Image7" width="98" height="60" border="0" id="Image7" onmouseover="MM_swapImage('Image7','','file:///D|/images/botao_vagas_on.png',1);MM_swapImage('Image7','','/ProativadoPara/images/botao_vagas_on.png',1)" onmouseout="MM_swapImgRestore()" /></a><img src="/ProativadoPara/images/fim_barra_menu.gif" width="2" height="60" /><a href="/ProativadoPara/instalacoes.html"><img src="/ProativadoPara/images/botao_instalacoes.png" alt="Conhe&ccedil;a nossas instala&ccedil;&otilde;es" name="Image8" width="98" height="60" border="0" usemap="#Image8Map" id="Image8" onmouseover="MM_swapImage('Image8','','file:///D|/images/botao_instalacoes_on.png',1);MM_swapImage('Image8','','/ProativadoPara/images/botao_instalacoes_on.png',1)" onmouseout="MM_swapImgRestore()" /></a><img src="/ProativadoPara/images/fim_barra_menu.gif" width="2" height="60" /><a href="/ProativadoPara/treinamentos.html"><img src="/ProativadoPara/images/botao_treinamentos.png" alt="Consulte os nossos treinamentos" name="Image9" width="98" height="60" border="0" id="Image9" onmouseover="MM_swapImage('Image9','','file:///D|/images/botao_treinamentos_on.png',1);MM_swapImage('Image9','','/ProativadoPara/images/botao_treinamentos_on.png',1)" onmouseout="MM_swapImgRestore()" /></a><img src="/ProativadoPara/images/fim_barra_menu.gif" width="2" height="60" /></td>
      </tr>
    </table>    </td>
  </tr>
  <tr>
    <td height="19"><table width="100%" height="16" cellpadding="0" cellspacing="0">
      <tr>
        <td width="24%" valign="top" background="/ProativadoPara/images/top01_02.gif"><img src="/ProativadoPara/images/top01_02.gif" width="10" height="16" /></td>
        <td width="52%" background="/ProativadoPara/images/top01_02.gif"><img src="/ProativadoPara/images/top01_02.gif" width="10" height="16" /></td>
        <td width="24%" background="/ProativadoPara/images/top01_02.gif"><img src="/ProativadoPara/images/top01_02.gif" width="10" height="16" /></td>
      </tr>
      <tr>
        <td valign="top"><table width="220" height="500" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="220">&nbsp;</td>
            <td width="220" class="noticia"><img src="/ProativadoPara/images/top_carreiradetalento.gif" width="220" height="63" /></td>
            <td width="220" height="63">&nbsp;</td>
          </tr>
          <tr>
            <td width="220" height="126">&nbsp;</td>
            <td width="220" background="/ProativadoPara/images/fon01.gif"><br />
              <table width="209" cellpadding="0" cellspacing="0" class="max-gehringer" id="max_gehringer">
              <tr>
                <td width="6">&nbsp;</td>
                <td width="60"><div align="left"><img src="/ProativadoPara/images/max_gehringer/max.jpg" width="57" height="66" /></div></td>
                <td width="152"><div align="justify"><strong> Candidato n&atilde;o deve revelar seus transtornos mentais, mas deve procurar tratamento es-pecializado. </strong><span class="style2"><a href="/ProativadoPara/max-gehringer/19.07.09.html">Leia mais...</a></span></div></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3" align="center"><div align="center">Outras mat&eacute;rias  de Max Gehringer</div></td>
              </tr>
              <tr>
                <td colspan="3"><div align="right" class="style2"><span class="leia_mais"><a href="file:///D|/max-gehringer/04.01.09.html"></a></span>
                  <form name="max_antigas" id="max_antigas">
                    <div align="center">
                      <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
                        <option selected="selected">Selecione</option>
                        <option value="/ProativadoPara/max-gehringer/19.07.09.html">19.07.09</option>
                        <option value="/ProativadoPara/max-gehringer/12.07.09.html">12.07.09</option>
                        <option value="/ProativadoPara/max-gehringer/05.07.09.html">05.07.09</option>
                        <option value="/ProativadoPara/max-gehringer/28.06.09.html">28.06.09</option>
                        <option value="/ProativadoPara/max-gehringer/21.06.09.html">21.06.09</option>
                        <option value="/ProativadoPara/max-gehringer/14.06.09.html">14.06.09</option>
                        <option value="/ProativadoPara/max-gehringer/07.06.09.html">07.06.09</option>
                        <option value="/ProativadoPara/max-gehringer/31.05.09.html">31.05.09</option>
                        <option value="/ProativadoPara/max-gehringer/24.05.09.html">24.05.09</option>
                        <option value="/ProativadoPara/max-gehringer/17.05.09.html">17.05.09</option>
                        <option value="/ProativadoPara/max-gehringer/10.05.09.html">10.05.09</option>
                        <option value="/ProativadoPara/max-gehringer/03.05.09.html">03.05.09</option>
                        <option value="/ProativadoPara/max-gehringer/12.04.09.html">12.04.09</option>
                        <option value="/ProativadoPara/max-gehringer/05.04.2009.html">05.04.2009</option>
                        <option value="/ProativadoPara/max-gehringer/29.03.09.html">29.03.09</option>
                        <option value="/ProativadoPara/max-gehringer/22.03.09.html">22.03.09</option>
                        <option value="/ProativadoPara/max-gehringer/15.03.09.html">15.03.09</option>
                        <option value="/ProativadoPara/max-gehringer/08.03.09.html">08.03.09</option>
                        <option value="/ProativadoPara/max-gehringer/01.03.09.html">01.03.09</option>
                        <option value="/ProativadoPara/max-gehringer/22.02.09.html">22.02.09</option>
                        <option value="/ProativadoPara/max-gehringer/15.02.09.html">15.02.09</option>
                        <option value="/ProativadoPara/max-gehringer/08.02.09.html">08.02.09</option>
                        <option value="/ProativadoPara/max-gehringer/01.02.09.html">01.02.09</option>
                        <option value="/ProativadoPara/max-gehringer/25.01.09.html">25.01.09</option>
                        <option value="/ProativadoPara/max-gehringer/18.01.09.html">18.01.09</option>
                        <option value="/ProativadoPara/max-gehringer/11.01.09.html">11.01.09</option>
                        <option value="/ProativadoPara/max-gehringer/04.01.09.html">04.01.09</option>
                      </select>
                    </div>
                  </form>
                </div></td>
              </tr>
            </table></td>
            <td width="220">&nbsp;</td>
          </tr>
          <tr>
            <td width="220">&nbsp;</td>
            <td width="220" height="63" class="noticia"><img src="/ProativadoPara/images/top_parceiros.gif" width="220" height="63" /></td>
            <td width="220">&nbsp;</td>
          </tr>
          <tr>
            <td width="220" height="181">&nbsp;</td>
            <td width="220" align="center" background="/ProativadoPara/images/fon01.gif"><div align="center">
              <p><br />
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="162" height="162">
                  <param name="movie" value="/ProativadoPara/animacoes/parceiros1.swf" />
                  <param name="quality" value="high" />
                  <embed src="/ProativadoPara/animacoes/parceiros1.swf" width="162" height="162" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
                </object>
              </p>
              <p class="left">&nbsp;</p>
              <p class="left">&nbsp;</p>
              <p class="left">&nbsp;</p>
              <p class="left">&nbsp;</p>
              <p class="left">&nbsp;</p>
              <p class="left">&nbsp;</p>
              <p class="left">&nbsp;</p>
              <p class="left">&nbsp;</p>
              <p class="left">&nbsp;</p>
              <p class="left">&nbsp;</p>
              <p class="left">&nbsp;</p>
              <p class="left">&nbsp;</p>
              <p class="left">&nbsp; </p>
            </div></td>
            <td width="220">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="71" background="/ProativadoPara/images/bot_font_proa02.gif"><div align="center"><!-- InstanceBeginEditable name="EditRegion4" --><!-- InstanceEndEditable --></div></td>
            <td>&nbsp;</td>
          </tr>
          
          
        </table>          </td>
        <td valign="top"><table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td height="10">&nbsp;</td>
            <td><!-- InstanceBeginEditable name="EditRegion3" -->
			<?=Util::getMsg($_GET['msg'])?>
              <a href="file:///C|/Documents and Settings/infoli/Configura&ccedil;&otilde;es locais/Temporary Internet Files/Content.IE5/98GO5M4F/cadUsuario.php" title="cadastrar usuario">cadastrar usuario</a></div>
<FORM name='formAction' method='POST' action=''>
  <table>
    <tr>
      <th scope='col'>&nbsp;</th>
      <th scope='col'>Nome</th>
      <th scope='col'>Id</th>
      <th scope='col'>Email</th>
      <th scope='col'>Login</th>
      <th scope='col'>Senha</th>
      <th scope='col'>Telefone</th>
      <th scope='col'>Permissao</th>
    </tr>
    <?
	if ($vetUsuario){
		while ($usuario = array_shift($vetUsuario)){
?>
    <tr>
      <td><input type='radio'  name='rdOpcao' value='<?=Util::Encode($usuario->getIdusuario())?>' class='' />
      </td>
      <td><a href="galeria.php?id=<?=$usuario->getIdusuario()?>">
        <?=$usuario->getNome();?>
      </a></td>
      <td><?=$usuario->getIdusuario();?></td>
      <td><?=($usuario->getEmail()=='')?'sem registro':$usuario->getEmail();?></td>
      <td><?=$usuario->getLogin();?></td>
      <td><?=$usuario->getSenha();?></td>
      <td><?=($usuario->getTelefone()=='')?'sem registro':$usuario->getTelefone();?></td>
      <td><?=($usuario->getPermissao()=='1')?'administrador':'cliente'?></td>
    </tr>
    <?
	}
?>
  </table>
  <div id='botoesAcao'>
<INPUT type='button'  name='btnExcluir' value='Excluir' class='buttonForm' onClick = 'submitForm(document.formAction, "delUsuario.php",true);'>
<INPUT type='button'  name='btnEditar' value='Editar' class='buttonForm' onClick = 'submitForm(document.formAction, "editUsuario.php",false);'>
<INPUT type='button'  name='btnDetalhes' value='Detalhes' class='buttonForm' onClick = 'submitForm(document.formAction, "detUsuario.php",false);'>
</div>
<?
	}else{
?><strong>N&atilde;o h&aacute; nenhum registro cadastrado!</strong>
<?
	}
?>
</FORM>
<?=$frontController->paginacao->paginas()?>  <!-- InstanceEndEditable --></td>
            <td height="10">&nbsp;</td>
          </tr>
        </table>
          <div align="center"><a href="#topo"><img src="/ProativadoPara/images/volta-topo.png" alt="Ir para o topo desta p&aacute;gina" width="26" height="9" border="0" /></a><br />
            <br />
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="403" height="65">
            <param name="movie" value="/ProativadoPara/animacoes/appa_qualificando.swf" />
            <param name="quality" value="high" />
            <embed src="/ProativadoPara/animacoes/appa_qualificando.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="403" height="65"></embed>
            </object>
          </div></td>
        <td valign="top"><table width="220" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="10">&nbsp;</td>
            <td><img src="/ProativadoPara/images/top_atendimento.gif" width="220" height="63" /></td>
            <td width="10" height="63">&nbsp;</td>
          </tr>
          <tr>
            <td width="10">&nbsp;</td>
            <td background="/ProativadoPara/images/fon01.gif"><table width="160" align="center" id="msn">
              <tr>
                <td><script type="text/javascript" src="http://settings.messenger.live.com/controls/1.0/PresenceButton.js"></script>
                  <div
  id="Microsoft_Live_Messenger_PresenceButton_e4cfd5aba0746984"
  msgr:width="160"
  msgr:backcolor="#77ADCF"
  msgr:altbackcolor="#FFFFFF"
  msgr:forecolor="#424542"
  msgr:conversationurl="http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=e4cfd5aba0746984@apps.messenger.live.com&amp;mkt=en-US&amp;useTheme=true&amp;themeName=blue&amp;foreColor=333333&amp;backColor=E8F1F8&amp;linkColor=333333&amp;borderColor=AFD3EB&amp;buttonForeColor=333333&amp;buttonBackColor=EEF7FE&amp;buttonBorderColor=AFD3EB&amp;buttonDisabledColor=EEF7FE&amp;headerForeColor=0066A7&amp;headerBackColor=8EBBD8&amp;menuForeColor=333333&amp;menuBackColor=FFFFFF&amp;chatForeColor=333333&amp;chatBackColor=FFFFFF&amp;chatDisabledColor=F6F6F6&amp;chatErrorColor=760502&amp;chatLabelColor=6E6C6C"></div>
                  <script type="text/javascript" src="http://messenger.services.live.com/users/e4cfd5aba0746984@apps.messenger.live.com/presence?dt=&amp;mkt=en-US&amp;cb=Microsoft_Live_Messenger_PresenceButton_onPresence"></script></td>
              </tr>
            </table>
              <table width="160" align="center" cellpadding="0" cellspacing="4" class="noticia" id="legenda">
              <tr>
                <td width="80"><div align="center"><span class="style17"><img src="/ProativadoPara/images/msn_off.png" width="10" height="13" /> Off-line</span></div></td>
                <td width="80"><div align="center"><span class="style17"><img src="/ProativadoPara/images/msn_on.png" width="10" height="13" /> On-line</span></div></td>
                </tr>
            </table></td>
            <td width="10">&nbsp;</td>
          </tr>
          <tr>
            <td width="10">&nbsp;</td>
            <td height="63"><img src="/ProativadoPara/images/top_noticias.gif" width="220" height="63" /></td>
            <td width="10">&nbsp;</td>
          </tr>
          <tr>
            <td width="10">&nbsp;</td>
            <td valign="top" background="/ProativadoPara/images/fon01.gif"><table width="207" height="300" cellpadding="0" cellspacing="0" id="layer">
              <tr>
                <td valign="top"><div id="noticias">
                  <p align="justify" class="left"><img src="file:///D|/Site New Proativa/images/dot_g.gif" width="5" height="5" alt="" border="0" align="middle" /> A Proativa do Par&aacute; completa 4 anos e comemora em ritmo junino com parceiros, colabo-radores (...) <a href="/ProativadoPara/niver.html">Leia mais...</a></p>
                  <p align="justify" class="left"><img src="file:///D|/Site New Proativa/images/dot_g.gif" width="5" height="5" alt="" border="0" align="middle" /> Caf&eacute; da manh&atilde; da Proativa do Par&aacute; com seus parceiros, aprendizes e facilitadores. <a href="/ProativadoPara/cafe.html">Leia mais...</a></p>
                  <p align="justify" class="left"><img src="file:///D|/Site New Proativa/images/dot_g.gif" width="5" height="5" alt="" border="0" align="middle" />  Curso de Recepcionista - Confira mais sobre a conclus&atilde;o da 1&ordf; turma de 2009. <a href="/ProativadoPara/curso_recep.html">Leia mais... </a></p>
                  <p align="justify" class="left"><img src="file:///D|/Site New Proativa/images/dot_g.gif" width="5" height="5" alt="" border="0" align="middle" /> Sugest&atilde;o para quem pretende ter sucesso no mercado de trabalho e ser valorizado socialmente. <a href="/ProativadoPara/noticia10.html">Leia mais...</a></p>
                  <p align="justify" class="left"><img src="file:///D|/Site New Proativa/images/dot_g.gif" width="5" height="5" alt="" border="0" align="middle" />&nbsp;Nova lei de est&aacute;gio pode gerar redu&ccedil;&atilde;o de oferta. <a href="/ProativadoPara/nova-lei-estagio.html">Leia mais...</a></p>
                  <p align="justify" class="left"><img src="file:///D|/Site New Proativa/images/dot_g.gif" width="5" height="5" alt="" border="0" align="middle" />  Agora a Proativa do Par&aacute; &eacute; Escola T&eacute;cnica. <a href="/ProativadoPara/appa-esc-tec.html">Leia mais...</a></p>
                  <p align="justify" class="left"><img src="file:///D|/Site New Proativa/images/dot_g.gif" width="5" height="5" alt="" border="0" align="middle" /> Guia pr&aacute;tico da Nova Ortografia Brasileira. <a href="/ProativadoPara/guia-pratico-ort-bras.html">Leia mais...</a></p>
                  <p align="justify" class="left"><img src="file:///D|/Site New Proativa/images/dot_g.gif" width="5" height="5" alt="" border="0" align="middle" /> O Governo do Par&aacute;, reconhece a Assosia&ccedil;&atilde;o Proativa do Par&aacute; como de Utilidade P&uacute;blica. <a href="/ProativadoPara/utilidade-publica.html">Leia mais...</a></p>
                  <p align="justify" class="left"><img src="file:///D|/Site New Proativa/images/dot_g.gif" width="5" height="5" alt="" border="0" align="middle" /> O que &eacute; preciso aprender para contratar Jovem Aprendiz. <a href="/ProativadoPara/contratar-jovem-aprendiz.html">Leia mais...</a></p>
                  <p align="justify" class="left"><img src="file:///D|/Site New Proativa/images/dot_g.gif" width="5" height="5" alt="" border="0" align="middle" /> A import&acirc;ncia da Escola Preparat&oacute;ria de futuros aprendizes na vida dos adolescentes e jovens. <a href="/ProativadoPara/esc_prep.html">Leia mais...</a></p>
                  <p align="justify" class="left"><img src="file:///D|/Site New Proativa/images/dot_g.gif" width="5" height="5" alt="" border="0" align="middle" /> Leia a mat&eacute;ria publicada no Jornal O Liberal. <a href="/ProativadoPara/aprendizagem.html">Leia mais...</a></p>
                  <p align="justify" class="left"><img src="file:///D|/Site New Proativa/images/dot_g.gif" width="5" height="5" alt="" border="0" align="middle" /> Sal&aacute;rio m&iacute;nimo brasileiro. Medida Provis&oacute;ria n&ordm;421 de 29/01/2008. <a href="/ProativadoPara/sal-minimo.html">Leia mais...</a></p>
                </div>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p></td>
              </tr>
            </table></td>
            <td width="10">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="71" valign="top" background="/ProativadoPara/images/bot_font_proa02.gif"><div align="left"><span class="style22">_</span><img src="/ProativadoPara/animacoes/appa-orkut.gif" alt="Participe da comunidade" width="200" height="60" border="0" /></div></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      
    </table>    </td>
  </tr>
  <tr>
    <td valign="top" background="/ProativadoPara/images/bg_left.gif">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
    <td background="/ProativadoPara/images/bg_right.gif">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" background="/ProativadoPara/images/bg_left.gif">&nbsp;</td>
    <td height="41" valign="middle" background="/ProativadoPara/images/fon_bot01.gif"><table width="100%" cellpadding="0" cellspacing="0">
      
      <tr>
        <td class="title01 style4"><span class="style10">
          <marquee behavior="repeat">
          <em>Aprendiz, no caminho da conscientiza&ccedil;&atilde;o!</em>
          </marquee>
        </span></td>
      </tr>
    </table></td>
    <td background="/ProativadoPara/images/bg_right.gif">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" background="/ProativadoPara/images/bg_left.gif">&nbsp;</td>
    <td height="65" valign="bottom" background="/ProativadoPara/images/fon_bot02.gif"><table width="100%" height="56" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="28" align="center" valign="middle"><div align="center" class="noticia  style21">          Copyright &copy; 2008-2009. Associa&ccedil;&atilde;o Proativa do Par&aacute; - APPA<br />
          Todos os Direitos Reservados.</div>          </td>
      </tr>
      <tr>
        <td height="28" valign="bottom"><div align="right"><a href="mailto:myllermeireles@gmail.com"><img name="desenvolvedor" src="/ProativadoPara/images/desenvolvedor.png" width="185" height="10" border="0" id="desenvolvedor" alt="" /></a></div></td>
      </tr>
    </table></td>
    <td background="/ProativadoPara/images/bg_right.gif">&nbsp;</td>
  </tr>
</table>

<map name="Map" id="Map">
  <area shape="poly" coords="114,19" href="#" />
<area shape="poly" coords="17,83" href="#" /><area shape="poly" coords="11,78,30,43,60,17,80,14,106,16,120,25,125,32,116,62,97,82,71,95,47,99" href="http://www.proativadopara.com.br/" alt="Volta &agrave; p&aacute;gina inicial" />
</map>
</body>
<!-- InstanceEnd --></html>