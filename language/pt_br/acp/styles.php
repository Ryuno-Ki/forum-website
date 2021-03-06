<?php
/**
*
* acp_styles [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.12
* @package language: Brazilian Portuguese
* @original version $Id: styles.php,v 1.40 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2008-01-13 - 00:55
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// phpBBrasil.com.br
$lang = array_merge($lang, array(
	'ACP_IMAGESETS_EXPLAIN'	=> 'Os grupos de imagens correspondem a todos os bot&otilde;es, f&oacute;rum, pastas (folder), etc. e outras imagens n&atilde;o espec&iacute;ficas do estilo usado pela comunidade. Aqui voc&ecirc; pode editar, exportar ou excluir grupos de imagens existentes e importar ou ativar novos grupos.',
	'ACP_STYLES_EXPLAIN'	=> 'Aqui voc&ecirc; pode gerenciar os estilos dispon&iacute;veis na sua comunidade. Um estilo consiste de uma template, um tema e um jogo de imagens. Voc&ecirc; pode alterar estilos existentes, excluir, desativar, re-ativar, criar ou importar novos. Voc&ecirc; tamb&eacute;m pode ver como um estilo ir&aacute; se parecer usando o bot&atilde;o de prever. O estilo padr&atilde;o atual est&aacute; notificado por um (*). Tamb&eacute;m listado est&aacute; o total de usu&aacute;rios que usam determinado estilo na comunidade, sobrescrever o estilo do usu&aacute;rio n&atilde;o ir&aacute; afetar estes contadores.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Uma template define compromisso com toda marca&ccedil;&atilde;o necess&aacute;ria para gerar a representa&ccedil;&atilde;o gr&aacute;fica de sua comunidade. Aqui voc&ecirc; pode editar templates existentes, excluir, exportar, importar e prever. Voc&ecirc; tamb&eacute;m pode modificar o c&oacute;digo da template usado para gerar os BBCodes.',
	'ACP_THEMES_EXPLAIN'	=> 'Daqui voc&ecirc; pode criar, instalar, editar, excluir e exportar temas. Um tema &eacute; a combina&ccedil;&atilde;o de cores e imagens que s&atilde;o aplicadas a sua template para definir o visual b&aacute;sico de sua comunidade. A variedade de op&ccedil;&otilde;es para edi&ccedil;&atilde;o e utiliza&ccedil;&atilde;o das fun&ccedil;&otilde;es dela dependem da configura&ccedil;&atilde;o de seu servidor e da instala&ccedil;&atilde;o do phpBB, veja o manual para detalhes futuros. Favor notar que quando criando novos temas, utilize da base de um tema pr&eacute;-instalado para sua localiza&ccedil;&atilde;o e organiza&ccedil;&atilde;o.',
	'ADD_IMAGESET'			=> 'Criar grupo de imagens',
	'ADD_IMAGESET_EXPLAIN'	=> 'Aqui voc&ecirc; pode criar um novo grupo de imagens. Dependendo da configura&ccedil;&atilde;o do seu servidor e das permiss&otilde;es dos arquivos voc&ecirc; pode ter op&ccedil;&otilde;es adicionais aqui. Por exemplo, voc&ecirc; deve estar apto a basear este grupo de imagens em um j&aacute; existente. Voc&ecirc; tamb&eacute;m deve de estar apto a enviar ou importar (de uma pasta onde se encontra o mesmo) um arquivo de grupo de imagens. Se voc&ecirc; enviar ou importar um arquivo, o nome do grupo de imagens pode ser definido opcionalmente do nome do arquivo (para fazer isto, deixe o nome do grupo de imagens em branco).',
	'ADD_STYLE'				=> 'Criar estilo',
	'ADD_STYLE_EXPLAIN'		=> 'Aqui voc&ecirc; pode criar um novo estilo. Dependendo da configura&ccedil;&atilde;o do seu servidor e das permiss&otilde;es dos arquivos voc&ecirc; pode ter op&ccedil;&otilde;es adicionais. Por exemplo, voc&ecirc; deve estar apto a basear este estilo em um j&aacute; existente. Voc&ecirc; tamb&eacute;m deve de estar apto a enviar ou importar (de uma pasta onde se encontra o mesmo) um arquivo de estilo. Se voc&ecirc; enviar ou importar um arquivo, o nome do estilo ser&aacute; determinado automaticamente.',
	'ADD_TEMPLATE'			=> 'Criar template',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Aqui voc&ecirc; pode adicionar uma nova template. Dependendo da configura&ccedil;&atilde;o do seu servidor e das permiss&otilde;es dos arquivos voc&ecirc; pode ter op&ccedil;&otilde;es adicionais aqui. Por exemplo, voc&ecirc; deve estar apto a basear esta template a um j&aacute; existente. Voc&ecirc; tamb&eacute;m deve de estar apto a enviar ou importar (de uma pasta onde se encontra o mesmo) um arquivo de imagens. Se voc&ecirc; enviar ou importar um arquivo, o nome da template pode ser definido opcionalmente do nome do arquivo (para fazer isto, deixe o nome da template em branco).',
	'ADD_THEME'				=> 'Criar tema',
	'ADD_THEME_EXPLAIN'		=> 'Aqui voc&ecirc; pode adicionar um novo tema. Dependendo da configura&ccedil;&atilde;o do seu servidor e das permiss&otilde;es dos arquivos voc&ecirc; deve de ter novos jogos de imagens para trabalhar. Por exemplo, voc&ecirc; deve estar apto a basear este tema em um j&aacute; existente. Voc&ecirc; tamb&eacute;m deve de estar apto a enviar ou importar (de uma pasta onde se encontra o mesmo) um arquivo de imagens. Se voc&ecirc; enviar ou importar um arquivo, o nome do tema pode ser definido opcionalmente do nome do arquivo (para fazer isto, deixe o nome do tema em branco).',
	'ARCHIVE_FORMAT'		=> 'Tipo de arquivo',
	'AUTOMATIC_EXPLAIN'		=> 'Deixe em branco para tentar detectar automaticamente.',

	'BACKGROUND'			=> 'Plano de fundo',
	'BACKGROUND_COLOUR'		=> 'Cor do plano de fundo',
	'BACKGROUND_IMAGE'		=> 'Imagem do plano de fundo',
	'BACKGROUND_REPEAT'		=> 'Repetir plano de fundo',
	'BOLD'					=> 'Negrito',

	'CACHE'							=> 'Cache',
	'CACHE_CACHED'					=> 'Cached',
	'CACHE_FILENAME'				=> 'Arquivo de template',
	'CACHE_FILESIZE'				=> 'Tamanho de arquivo',
	'CACHE_MODIFIED'				=> 'Modificado',
	'CONFIRM_IMAGESET_REFRESH'		=> 'Voc&ecirc; tem certeza que deseja atualizar todos os dados do grupo de imagens? Os dados do arquivo de configura&ccedil;&atilde;o do grupo de imagens ir&atilde;o sobrescrever todas as modifica&ccedil;&otilde;es do grupo de imagens que foram carregadas pelo editor do grupo de imagens.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Voc&ecirc; tem certeza que deseja limpar todo cache gerado pelos arquivos de sua template?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Voc&ecirc; tem certeza que deseja atualizar todos os dados da template no banco de dados com os conte&uacute;dos dos arquivos da template no sistema de arquivos? Isto ir&aacute; sobrescrever todas as modifica&ccedil;&otilde;es que foram carregadas pelo editor de template quando a mesma foi armazenada no banco de dados.',
	'CONFIRM_THEME_REFRESH'			=> 'Voc&ecirc; tem certeza que deseja atualizar os dados do tema armazenado no banco de dados com o conte&uacute;do do tema no sistema de arquivos? Isto ir&aacute; sobrescrever todas as modifica&ccedil;&otilde;es que foram carregadas pelo editor de tema quando a mesma foi armazenada no banco de dados.',
	'COPYRIGHT'						=> 'Copyright',
	'CREATE_IMAGESET'				=> 'Criar novo grupo de imagens',
	'CREATE_STYLE'					=> 'Criar novo estilo',
	'CREATE_TEMPLATE'				=> 'Criar nova template',
	'CREATE_THEME'					=> 'Criar novo tema',
	'CURRENT_IMAGE'					=> 'Imagem atual',

	'DEACTIVATE_DEFAULT'		=> 'Voc&ecirc; n&atilde;o pode desativar o estilo padr&atilde;o.',
	'DELETE_FROM_FS'			=> 'Remover do sistema de arquivo',
	'DELETE_IMAGESET'			=> 'Remover grupo de imagens',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Aqui voc&ecirc; pode remover o grupo de imagens selecionado do banco de dados. Adicionalmente, se voc&ecirc; tiver a permiss&atilde;o, voc&ecirc; pode selecionar para remover o grupo do sistema de arquivos. Por favor, note que n&atilde;o ser&aacute; poss&iacute;vel voltar atr&aacute;s ap&oacute;s esta a&ccedil;&atilde;o. Quando o grupo de imagens &eacute; deletado, ele &eacute; deletado para sempre do sistema. &Eacute; recomendado que primeiro voc&ecirc; exporte o seu grupo para um poss&iacute;vel uso no futuro.',
	'DELETE_STYLE'				=> 'Remover estilo',
	'DELETE_STYLE_EXPLAIN'		=> 'Aqui voc&ecirc; pode remover o estilo selecionado. Voc&ecirc; n&atilde;o pode remover todos os elementos do estilo por aqui. Estes devem ser removidos individualmente por seus respectivos formul&aacute;rios. Tome cuidado ao remover os estilos, n&atilde;o ser&aacute; poss&iacute;vel voltar atr&aacute;s ap&oacute;s esta a&ccedil;&atilde;o.',
	'DELETE_TEMPLATE'			=> 'Remover template',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Aqui voc&ecirc; pode remover a template selecionada do banco de dados. Adicionalmente, se voc&ecirc; tiver a permiss&atilde;o, voc&ecirc; pode selecionar para remover o grupo do sistema de arquivos. Por favor, note que n&atilde;o ser&aacute; poss&iacute;vel voltar atr&aacute;s ap&oacute;s esta a&ccedil;&atilde;o. Quando as templates s&atilde;o deletadas, elas s&atilde;o deletadas para sempre do sistema. &Eacute; recomendado que primeiro voc&ecirc; exporte o seu grupo para um poss&iacute;vel uso no futuro.',
	'DELETE_THEME'				=> 'Remover tema',
	'DELETE_THEME_EXPLAIN'		=> 'Aqui voc&ecirc; pode remover o tema selecionado do banco de dados. Adicionalmente, se voc&ecirc; tiver a permiss&atilde;o, voc&ecirc; pode selecionar para remover o tema do sistema de arquivos. Por favor, note que n&atilde;o ser&aacute; poss&iacute;vel voltar atr&aacute;s ap&oacute;s esta a&ccedil;&atilde;o. Quando o tema &eacute; deletado, ele &eacute; deletado para sempre do sistema. &Eacute; recomendado que primeiro voc&ecirc; exporte o seu tema para um poss&iacute;vel uso no futuro.',
	'DETAILS'					=> 'Detalhes',
	'DIMENSIONS_EXPLAIN'		=> 'Selecionando sim aqui, ir&aacute; incluir os par&acirc;metros de largura/altura.',

	'EDIT_DETAILS_IMAGESET'				=> 'Editar detalhes do grupo de imagens',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Aqui voc&ecirc; pode editar certos detalhes do grupo de imagens, tais como o seu nome.',
	'EDIT_DETAILS_STYLE'				=> 'Editar estilo',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'Usando o formul&aacute;rio abaixo, voc&ecirc; pode modificar este estilo existente. Voc&ecirc; pode alterar a combina&ccedil;&atilde;o da template, tema e grupo de imagens que definem o pr&oacute;prio estilo. Voc&ecirc; tamb&eacute;m pode fazer do estilo um padr&atilde;o.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Editar detalhes da template',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Aqui voc&ecirc; pode editar certos detalhes da template, tais como o seu nome. Voc&ecirc; tamb&eacute;m pode ter a op&ccedil;&atilde;o de alterar o armazenamento da folha de estilos do sistema de arquivos para o banco de dados e vice-versa. Esta op&ccedil;&atilde;o depende da configura&ccedil;&atilde;o do seu PHP e tamb&eacute;m se sua template pode ser alterada pelo servidor.',
	'EDIT_DETAILS_THEME'				=> 'Editar detalhes do tema',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Aqui voc&ecirc; pode editar certos detalhes do tema, tais como o nome. Voc&ecirc; tamb&eacute;m pode ter a op&ccedil;&atilde;o de alterar o armazenamento da folha de estilos do sistema de arquivos para o banco de dados e vice-versa. Esta op&ccedil;&atilde;o depende da configura&ccedil;&atilde;o do seu PHP e tamb&eacute;m se sua folha de estilos pode ser alterada pelo servidor.',
	'EDIT_IMAGESET'						=> 'Editar grupo de imagens',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Aqui voc&ecirc; pode editar imagens individuais que definem o grupo de imagens. Voc&ecirc; tamb&eacute;m pode especificar dimens&otilde;es para a imagem. Dimens&otilde;es s&atilde;o opcionais, e especificando-as, voc&ecirc; pode solucionar certos problemas de renderiza&ccedil;&atilde;o em alguns navegadores. Se n&atilde;o especific&aacute;-los, voc&ecirc; reduz um pouco o tamanho do banco de dados.',
	'EDIT_TEMPLATE'						=> 'Editar template',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Aqui voc&ecirc; pode editar a sua template diretamente. Por favor, lembre-se que estas edi&ccedil;&otilde;es s&atilde;o permanentes e n&atilde;o podem ser desfeitas ap&oacute;s serem enviadas. Se o PHP puder gravar nos arquivos da template em seu diret&oacute;rio de estilos, todas as mudan&ccedil;as feitas aqui ser&atilde;o salvas diretamente nestes arquivos. Se o PHP n&atilde;o puder gravar diretamente, esses arquivos s&atilde;o copiados no banco de dados e todas as mudan&ccedil;as s&oacute; ser&atilde;o refletidas l&aacute;. Por favor, tome cuidado quando editar sua template, lembre-se de fechar todos as vari&aacute;veis dos termos de substitui&ccedil;&atilde;o {XXXX} e demais estados condicionais dela.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'O arquivo da template n&atilde;o pode ser gravado, ent&atilde;o ele ser&aacute; armazenado no banco de dados contendo o arquivo modificado.',
	'EDIT_THEME'						=> 'Editar tema',
	'EDIT_THEME_EXPLAIN'				=> 'Aqui voc&ecirc; pode editar o tema selecionado, alterando cores, imagens, etc.',
	'EDIT_THEME_STORED_DB'				=> 'A folha de estilo (CSS) n&atilde;o pode ser gravada, ent&atilde;o a folha de estilo ser&aacute; armazenada no seu banco de dados contendo as modifica&ccedil;&otilde;es realizadas aqui.',
	'EDIT_THEME_STORE_PARSED'			=> 'O tema requer que a sua folha de estilos seja analisada gramaticalmente. Isto s&oacute; &eacute; poss&iacute;vel se for armazenado no banco de dados.',
	'EDITOR_DISABLED'					=> 'O editor do template est&aacute; desabilitado.',
	'EXPORT'							=> 'Exportar',

	'FOREGROUND'			=> 'Fundo de tela',
	'FONT_COLOUR'			=> 'Cor da fonte',
	'FONT_FACE'				=> 'Formato de fonte',
	'FONT_FACE_EXPLAIN'		=> 'Voc&ecirc; pode especificar m&uacute;ltiplas fontes separadas por v&iacute;rgulas. Se um usu&aacute;rio n&atilde;o tiver a primeira fonte instalada, a pr&oacute;xima fonte em funcionamento ser&aacute; escolhida.',
	'FONT_SIZE'				=> 'Tamanho da fonte',

	'GLOBAL_IMAGES'			=> 'Global',

	'HIDE_CSS'				=> 'Ocultar c&oacute;digo CSS',

	'IMAGE_WIDTH'				=> 'Largura da imagem',
	'IMAGE_HEIGHT'				=> 'Altura da imagem',
	'IMAGE'						=> 'Imagem',
	'IMAGE_NAME'				=> 'Nome da imagem',
	'IMAGE_PARAMETER'			=> 'Par&acirc;metro',
	'IMAGE_VALUE'				=> 'Valor',
	'IMAGESET_ADDED'			=> 'Novo grupo de imagens adicionado ao sistema de arquivos.',
	'IMAGESET_ADDED_DB'			=> 'Novo grupo de imagens adicionado ao banco de dados.',
	'IMAGESET_DELETED'			=> 'Grupo de imagens deletado com sucesso.',
	'IMAGESET_DELETED_FS'		=> 'Grupo de imagens removido do banco de dados, mas alguns arquivos podem permanecer no sistema de arquivos.',
	'IMAGESET_DETAILS_UPDATED'	=> 'Detalhes do grupo de imagens atualizado com sucesso.',
	'IMAGESET_ERR_ARCHIVE'		=> 'Por favor, selecione um m&eacute;todo de arquivo.',
	'IMAGESET_ERR_COPY_LONG'	=> 'O copyright n&atilde;o pode ter mais do que 60 caracteres.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'O grupo de imagens pode apenas conter caracteres alfa-num&eacute;ricos, -, +, _ e espa&ccedil;o.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Um grupo de imagens com este nome j&aacute; existe.',
	'IMAGESET_ERR_NAME_LONG'	=> 'O nome do grupo de imagens n&atilde;o pode ter mais do que 30 caracteres.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'O arquivo que voc&ecirc; especificou n&atilde;o cont&eacute;m um grupo de imagens v&aacute;lido.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Voc&ecirc; deve definir um nome para este grupo de imagens.',
	'IMAGESET_EXPORT'			=> 'Exportar grupo de imagens',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Aqui voc&ecirc; pode exportar um grupo de imagens na forma de um arquivo. Este arquivo conter&aacute; todos os dados necess&aacute;rios para instalar as defini&ccedil;&otilde;es de imagens em outra comunidade. Voc&ecirc; pode selecionar entre fazer o download do arquivo diretamente ou armazenar o arquivo no FTP para fazer download futuramente.',
	'IMAGESET_EXPORTED'			=> 'Grupo de imagens exportado com sucesso e armazenado em %s.',
	'IMAGESET_NAME'				=> 'Nome do grupo de imagens',
	'IMAGESET_REFRESHED'		=> 'Grupo de imagens atualizado com sucesso.',
	'IMAGESET_UPDATED'			=> 'Grupo de imagens atualizado com sucesso.',
	'ITALIC'					=> 'It&aacute;lico',

	'IMG_CAT_BUTTONS'		=> 'Bot&otilde;es localizados',
	'IMG_CAT_CUSTOM'		=> 'Imagens padr&atilde;o',
	'IMG_CAT_FOLDERS'		=> '&Iacute;cones de t&oacute;pico',
	'IMG_CAT_FORUMS'		=> '&Iacute;cones de f&oacute;rum',
	'IMG_CAT_ICONS'			=> '&Iacute;cones gerais',
	'IMG_CAT_LOGOS'			=> 'Logos',
	'IMG_CAT_POLLS'			=> 'Imagens de enquete',
	'IMG_CAT_UI'			=> 'Elementos gerais de interface de usu&aacute;rio',
	'IMG_CAT_USER'			=> 'Imagens adicionais',

	'IMG_SITE_LOGO'			=> 'Logo principal',
	'IMG_UPLOAD_BAR'		=> 'Barra de progresso do envio',
	'IMG_POLL_LEFT'			=> 'Final da enquete &agrave; esquerda',
	'IMG_POLL_CENTER'		=> 'Centro da enquete',
	'IMG_POLL_RIGHT'		=> 'Final da enquete &agrave; direita',
	'IMG_ICON_FRIEND'		=> 'Adicionar como amigo',
	'IMG_ICON_FOE'			=> 'Adicionar como ignorado',

	'IMG_FORUM_LINK'			=> 'Link do f&oacute;rum',
	'IMG_FORUM_READ'			=> 'F&oacute;rum',
	'IMG_FORUM_READ_LOCKED'		=> 'F&oacute;rum trancado',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Subf&oacute;rum',
	'IMG_FORUM_UNREAD'			=> 'Novas mensagens no f&oacute;rum',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Novas mensagens trancadas no f&oacute;rum',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Novas mensagens no subf&oacute;rum',
	'IMG_SUBFORUM_READ'			=> 'Legenda do subf&oacute;rum',
	'IMG_SUBFORUM_UNREAD'		=> 'Novas mensagens na legenda do subf&oacute;rum',
	
	'IMG_TOPIC_MOVED'			=> 'T&oacute;pico movido',

	'IMG_TOPIC_READ'				=> 'T&oacute;pico',
	'IMG_TOPIC_READ_MINE'			=> 'T&oacute;pico enviado para',
	'IMG_TOPIC_READ_HOT'			=> 'T&oacute;pico popular',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'T&oacute;pico popular enviado para',
	'IMG_TOPIC_READ_LOCKED'			=> 'T&oacute;pico trancado',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'T&oacute;pico trancado enviado para',

	'IMG_TOPIC_UNREAD'				=> 'T&oacute;pico com mensagens novas',
	'IMG_TOPIC_UNREAD_MINE'			=> 'T&oacute;pico enviado para novo',
	'IMG_TOPIC_UNREAD_HOT'			=> 'T&oacute;pico popular com mensagens novas',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'T&oacute;pico popular enviado para novo',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Novo t&oacute;pico trancado',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'T&oacute;pico trancado enviado para novo',

	'IMG_STICKY_READ'				=> 'T&oacute;pico fixo',
	'IMG_STICKY_READ_MINE'			=> 'T&oacute;pico fixo postado para',
	'IMG_STICKY_READ_LOCKED'		=> 'T&oacute;pico fixo bloqueado',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'T&oacute;pico fixo postado para',
	'IMG_STICKY_UNREAD'				=> 'Nova mensagem de t&oacute;pico fixo',
	'IMG_STICKY_UNREAD_MINE'		=> 'Nova mensagem de t&oacute;pico para nova',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Mensagem nova em t&oacute;pico fixo bloqueado',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Mensagem nova em t&oacute;pico fixo bloqueado',

	'IMG_ANNOUNCE_READ'					=> 'An&uacute;ncio',
	'IMG_ANNOUNCE_READ_MINE'			=> 'An&uacute;ncio postado para',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'An&uacute;ncio bloqueado',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'An&uacute;ncio postado e bloqueado para',
	'IMG_ANNOUNCE_UNREAD'				=> 'Nova mensagem no an&uacute;ncio',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Mensagem de an&uacute;ncio postada para',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Nova mensagem em an&uacute;ncio bloqueado',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'An&uacute;ncio bloqueado com nova mensagem',

	'IMG_GLOBAL_READ'					=> 'Global',
	'IMG_GLOBAL_READ_MINE'				=> 'Global postado para',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Global bloqueado',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Global postado bloqueado para',
	'IMG_GLOBAL_UNREAD'					=> 'Global nova mensagem',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Global para nova mensagem',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Global mensagens novas bloqueadas',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Global mensagem nova em bloqueado',

	'IMG_PM_READ'		=> 'Mensagem privada lida',
	'IMG_PM_UNREAD'		=> 'Mensagem privada n&atilde;o lida',

	'IMG_ICON_BACK_TOP'		=> 'Topo',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Enviar e-mail',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSN',
	'IMG_ICON_CONTACT_PM'		=> 'Enviar mensagem',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Website',

	'IMG_ICON_POST_DELETE'			=> 'Remover mensagem',
	'IMG_ICON_POST_EDIT'			=> 'Editar mensagem',
	'IMG_ICON_POST_INFO'			=> 'Mostrar detalhes da mensagem',
	'IMG_ICON_POST_QUOTE'			=> 'Citar mensagem',
	'IMG_ICON_POST_REPORT'			=> 'Notificar mensagem',
	'IMG_ICON_POST_TARGET'			=> 'Mini-mensagem',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Nova mini-mensagem',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Anexo',
	'IMG_ICON_TOPIC_LATEST'			=> '&Uacute;ltima mensagem',
	'IMG_ICON_TOPIC_NEWEST'			=> '&Uacute;ltima mensagem n&atilde;o lida',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Mensagem notificada',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Mensagem desaprovada',

	'IMG_ICON_USER_ONLINE'		=> 'Usu&aacute;rio online',
	'IMG_ICON_USER_OFFLINE'		=> 'Usu&aacute;rio offline',
	'IMG_ICON_USER_PROFILE'		=> 'Mostrar perfil',
	'IMG_ICON_USER_SEARCH'		=> 'Procurar mensagem',
	'IMG_ICON_USER_WARN'		=> 'Advertir usu&aacute;rio',

	'IMG_BUTTON_PM_FORWARD'		=> 'Encaminhar mensagem privada',
	'IMG_BUTTON_PM_NEW'			=> 'Nova mensagem privada',
	'IMG_BUTTON_PM_REPLY'		=> 'Responder mensagem privada',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'T&oacute;pico bloqueado',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Novo t&oacute;pico',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Responder t&oacute;pico',

	'IMG_USER_ICON1'		=> 'Imagem definida de usu&aacute;rio 1',
	'IMG_USER_ICON2'		=> 'Imagem definida de usu&aacute;rio 2',
	'IMG_USER_ICON3'		=> 'Imagem definida de usu&aacute;rio 3',
	'IMG_USER_ICON4'		=> 'Imagem definida de usu&aacute;rio 4',
	'IMG_USER_ICON5'		=> 'Imagem definida de usu&aacute;rio 5',
	'IMG_USER_ICON6'		=> 'Imagem definida de usu&aacute;rio 6',
	'IMG_USER_ICON7'		=> 'Imagem definida de usu&aacute;rio 7',
	'IMG_USER_ICON8'		=> 'Imagem definida de usu&aacute;rio 8',
	'IMG_USER_ICON9'		=> 'Imagem definida de usu&aacute;rio 9',
	'IMG_USER_ICON10'		=> 'Imagem definida de usu&aacute;rio 10',

	'INCLUDE_DIMENSIONS'		=> 'Incluir dimens&otilde;es',
	'INCLUDE_IMAGESET'			=> 'Incluir grupo de imagens',
	'INCLUDE_TEMPLATE'			=> 'Incluir template',
	'INCLUDE_THEME'				=> 'Incluir tema',
	'INHERITING_FROM'			=> 'Herda de',
	'INSTALL_IMAGESET'			=> 'Instalar grupo de imagens',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Aqui voc&ecirc; pode instalar seu grupo de imagens selecionado. Voc&ecirc; pode editar certos detalhes se assim desejar tamb&eacute;m.',
	'INSTALL_STYLE'				=> 'Instalar estilo',
	'INSTALL_STYLE_EXPLAIN'		=> 'Aqui voc&ecirc; pode instalar um novo estilo e se apropriado os elementos correspondentes do estilo. Se voc&ecirc; j&aacute; tem elementos relevantes para o estilo instalados, eles n&atilde;o ser&atilde;o sobrescritos. Alguns estilos requerem que os elementos j&aacute; estejam instalados. Se voc&ecirc; tentar instalar tal como um estilo e n&atilde;o ter os elementos necess&aacute;rios voc&ecirc; ser&aacute; notificado.',
	'INSTALL_TEMPLATE'			=> 'Instalar template',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Aqui voc&ecirc; pode instalar uma nova template. Dependendo da configura&ccedil;&atilde;o do seu servidor voc&ecirc; ter&aacute; uma variedade de op&ccedil;&otilde;es neste espa&ccedil;o.',
	'INSTALL_THEME'				=> 'Instalar tema',
	'INSTALL_THEME_EXPLAIN'		=> 'Aqui voc&ecirc; pode instalar seu tema selecionado. Voc&ecirc; pode editar certos detalhes se desejar ou usar os elementos padr&atilde;o da instala&ccedil;&atilde;o.',
	'INSTALLED_IMAGESET'		=> 'Grupo de imagens instalado',
	'INSTALLED_STYLE'			=> 'Estilos instalados',
	'INSTALLED_TEMPLATE'		=> 'Templates instaladas',
	'INSTALLED_THEME'			=> 'Temas instalados',

	'LINE_SPACING'				=> 'Espa&ccedil;o de linha',
	'LOCALISED_IMAGES'			=> 'Localizado',
	'LOCATION_DISABLED_EXPLAIN'	=> 'Est&aacute; configura&ccedil;&atilde;o foi herdada e n&atilde;o pode ser modificada.',

	'NO_CLASS'					=> 'N&atilde;o foi poss&iacute;vel encontrar classe na folha de estilo.',
	'NO_IMAGESET'				=> 'N&atilde;o foi poss&iacute;vel encontrar grupo de imagens no sistema.',
	'NO_IMAGE'					=> 'Nenhuma imagem',
	'NO_IMAGE_ERROR'			=> 'N&atilde;o foi poss&iacute;vel encontrar imagem no sistema.',
	'NO_STYLE'					=> 'N&atilde;o foi poss&iacute;vel encontrar estilo no sistema.',
	'NO_TEMPLATE'				=> 'N&atilde;o foi poss&iacute;vel encontrar template no sistema.',
	'NO_THEME'					=> 'N&atilde;o foi poss&iacute;vel encontrar tema no sistema.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Nenhum grupo de imagens removido encontrado.',
	'NO_UNINSTALLED_STYLE'		=> 'Nenhum estilo removido encontrado.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Nenhum template removido encontrado.',
	'NO_UNINSTALLED_THEME'		=> 'Nenhum tema removido encontrado.',
	'NO_UNIT'					=> 'Nenhum',

	'ONLY_IMAGESET'			=> 'Este &eacute; o &uacute;nico grupo de imagens restante, voc&ecirc; n&atilde;o pode excluir este.',
	'ONLY_STYLE'			=> 'Este &eacute; o &uacute;nico estilo restante, voc&ecirc; n&atilde;o pode excluir este.',
	'ONLY_TEMPLATE'			=> 'Esta &eacute; a &uacute;nica template restante, voc&ecirc; n&atilde;o pode excluir este.',
	'ONLY_THEME'			=> 'Este &eacute; o &uacute;nico tema restante, voc&ecirc; n&atilde;o pode excluir este.',
	'OPTIONAL_BASIS'		=> 'Base opcional',

	'REFRESH'					=> 'Atualizar',
	'REPEAT_NO'					=> 'Nenhum',
	'REPEAT_X'					=> 'Somente horizontal',
	'REPEAT_Y'					=> 'Somente vertical',
	'REPEAT_ALL'				=> 'Ambas dire&ccedil;&otilde;es',
	'REPLACE_IMAGESET'			=> 'Trocar grupo de imagens com',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Este grupo de imagens ser&aacute; trocado pelo que voc&ecirc; est&aacute; removendo em qualquer dos estilos.',
	'REPLACE_STYLE'				=> 'Trocar estilo com',
	'REPLACE_STYLE_EXPLAIN'		=> 'Este estilo ser&aacute; colocado pelo qual os usu&aacute;rios usam que voc&ecirc; est&aacute; removendo agora.',
	'REPLACE_TEMPLATE'			=> 'Trocar template com',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Esta template ser&aacute; colocada pelo qual os usu&aacute;rios usam que voc&ecirc; est&aacute; removendo agora.',
	'REPLACE_THEME'				=> 'Trocar tema com',
	'REPLACE_THEME_EXPLAIN'		=> 'Este tema ser&aacute; colocada pelo qual os usu&aacute;rios usam que voc&ecirc; est&aacute; removendo agora.',
	'REQUIRES_IMAGESET'			=> 'Este estilo requer o %s grupo de imagens estar instalado.',
	'REQUIRES_TEMPLATE'			=> 'Este estilo requer a %s template definida como instalada.',
	'REQUIRES_THEME'			=> 'Este estilo requer o  %s tema instalado.',

	'SELECT_IMAGE'				=> 'Selecionar imagem',
	'SELECT_TEMPLATE'			=> 'Selecionar arquivo de template',
	'SELECT_THEME'				=> 'Selecionar arquivo de tema',
	'SELECTED_IMAGE'			=> 'Selecionar imagem',
	'SELECTED_IMAGESET'			=> 'Selecionar grupo de imagens',
	'SELECTED_TEMPLATE'			=> 'Selecionar template',
	'SELECTED_TEMPLATE_FILE'	=> 'Selecionar arquivo de template',
	'SELECTED_THEME'			=> 'Selecionar tema',
	'SELECTED_THEME_FILE'		=> 'Selecionar arquivo de tema',
	'STORE_DATABASE'			=> 'Banco de Dados',
	'STORE_FILESYSTEM'			=> 'Sistema de arquivos',
	'STYLE_ACTIVATE'			=> 'Ativado',
	'STYLE_ACTIVE'				=> 'Ativar',
	'STYLE_ADDED'				=> 'Estilo adicionado com sucesso.',
	'STYLE_DEACTIVATE'			=> 'Desativado',
	'STYLE_DEFAULT'				=> 'Colocar como estilo padr&atilde;o',
	'STYLE_DELETED'				=> 'Estilo deletado com sucesso.',
	'STYLE_DETAILS_UPDATED'		=> 'Estilo editado com sucesso.',
	'STYLE_ERR_ARCHIVE'			=> 'Favor selecionar um m&eacute;todo de arquivo.',
	'STYLE_ERR_COPY_LONG'		=> 'O copyright n&atilde;o pode ser maior que 60 caracteres.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Voc&ecirc; deve selecionar pelo menos um elemento do estilo.',
	'STYLE_ERR_NAME_CHARS'		=> 'O nome do estilo s&oacute; pode conter caracteres alfa-num&eacute;ricos, -, +, _ e espa&ccedil;o.',
	'STYLE_ERR_NAME_EXIST'		=> 'Um estilo com este nome j&aacute; est&aacute; em uso.',
	'STYLE_ERR_NAME_LONG'		=> 'O nome do estilo n&atilde;o pode ser maior que 30 caracteres.',
	'STYLE_ERR_NO_IDS'			=> 'Voc&ecirc; deve selecionar uma template, tema e grupo de imagens para este estilo.',
	'STYLE_ERR_NOT_STYLE'		=> 'O arquivo importado ou enviado n&atilde;o cont&eacute;m um arquivo v&aacute;lido de estilo.',
	'STYLE_ERR_STYLE_NAME'		=> 'Voc&ecirc; deve suprir um nome para este estilo.',
	'STYLE_EXPORT'				=> 'Exportar estilo',
	'STYLE_EXPORT_EXPLAIN'		=> 'Aqui voc&ecirc; pode exportar um estilo na forma de um arquivo. Um estilo n&atilde;o precisa conter todos elementos mas este deve conter pelo menos um. Por exemplo, se voc&ecirc; criou um novo tema e um grupo de imagens para uma template usual voc&ecirc; simplesmente pode exportar o tema e o grupo de imagens e omitir a template. Voc&ecirc; deve tamb&eacute;m selecionar onde fazer o download diretamente ou armazenar no servidor para fazer via FTP o download.',
	'STYLE_EXPORTED'			=> 'Estilo exportado com sucesso e armazenado em %s.',
	'STYLE_IMAGESET'			=> 'Grupo de imagens',
	'STYLE_NAME'				=> 'Nome do estilo',
	'STYLE_TEMPLATE'			=> 'Template',
	'STYLE_THEME'				=> 'Tema',
	'STYLE_USED_BY'				=> 'Usado por (incluindo rob&ocirc;s)',

	'TEMPLATE_ADDED'			=> 'Template adicionada e armazenada no sistema.',
	'TEMPLATE_ADDED_DB'			=> 'Template adicionada e armazenada no banco de dados.',
	'TEMPLATE_CACHE'			=> 'Cache de Template',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'Por padr&atilde;o o cache do phpBB &eacute; compilado pela vers&atilde;o da template. Isto diminui a carga no servidor a cada vez que a p&aacute;gina &eacute; visualizada e assim  ir&aacute; reduzir o tempo de gera&ccedil;&atilde;o da mesma. Aqui voc&ecirc; pode ver o status do cache de cada arquivo e excluir individualmente por arquivo o cache ou de todos de uma vez.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Cache de template liberado com sucesso.',
	'TEMPLATE_CACHE_EMPTY'		=> 'N&atilde;o existe cache de templates.',
	'TEMPLATE_DELETED'			=> 'Template removida com sucesso.',
	'TEMPLATE_DELETE_DEPENDENT'	=> 'O template escolhido n&atilde;o pode ser apagado se houver um ou outro conjunto de templates que herdam a partir dele:',
	'TEMPLATE_DELETED_FS'		=> 'Template removida do banco de dados, mas os arquivos ainda permanecem no sistema.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Detalhes da template atualizados com sucesso.',
	'TEMPLATE_EDITOR'			=> 'HTML editor de template',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Tamanho do editor de template',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Favor selecionar um m&eacute;todo de arquivo.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'O diret&oacute;rio de cache usado para armazenar vers&otilde;es de cache de template n&atilde;o pode ser aberto.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'O copyright n&atilde;o pode ser exceder 60 caracteres.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'O nome da template pode conter somente caracteres alfa-num&eacute;ricos, -, +, _ e espa&ccedil;o.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Uma template com este nome j&aacute; est&aacute; em uso.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'O nome da template n&atilde;o pode exceder 30 caracteres.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'O arquivo que voc&ecirc; especificou n&atilde;o cont&eacute;m um arquivo de template v&aacute;lido.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'O novo template escolhido requer que seja instalado o template %s e n&atilde;o herdar&aacute; nada de si mesmo.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Voc&ecirc; deve entrar com um nome para esta template.',
	'TEMPLATE_EXPORT'			=> 'Exportar templates',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Aqui voc&ecirc; pode exportar uma template na forma de um arquivo. Este arquivo ir&aacute; conter todos os detalhes da template para ser instalada em outra comunidade da mesma forma que se apresenta aqui. Voc&ecirc; pode escolher por fazer o download diretamente agora ou armazenar a mesma no seu servidor e mais tarde fazer o download via FTP.',
	'TEMPLATE_EXPORTED'			=> 'Template exportado com sucesso e armazenada em %s.',
	'TEMPLATE_FILE'				=> 'Arquivo de template',
	'TEMPLATE_FILE_UPDATED'		=> 'Arquivo de template atualizado com sucesso.',
	'TEMPLATE_INHERITS'			=> 'Este template configura heran&ccedil;as a partir de %s e, portanto, voc� n&atilde;o poder&aacute; definir uma configura&ccedil;&atilde;o diferente de armazenamento do seu template modelo.',
	'TEMPLATE_LOCATION'			=> 'Armazenar template em',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Imagens s&atilde;o sempre armazenadas no sistema.',
	'TEMPLATE_NAME'				=> 'Nome da template',
	'TEMPLATE_REFRESHED'		=> 'Template atualizada com sucesso.',

	'THEME_ADDED'				=> 'Novo tema adicionado ao sistema.',
	'THEME_ADDED_DB'			=> 'Novo tema adicionado ao banco de dados.',
	'THEME_CLASS_ADDED'			=> 'Classe padr&atilde;o adicionada com sucesso.',
	'THEME_DELETED'				=> 'Tema removido com sucesso.',
	'THEME_DELETED_FS'			=> 'Tema removido do banco de dados, por&eacute;m os arquivos ainda se encontram no servidor.',
	'THEME_DETAILS_UPDATED'		=> 'Detalhes do tema atualizados com sucesso.',
	'THEME_EDITOR'				=> 'Editor de tema',
	'THEME_EDITOR_HEIGHT'		=> 'Altura do editor de tema',
	'THEME_ERR_ARCHIVE'			=> 'Favor selecionar um m&eacute;todo de arquivo.',
	'THEME_ERR_CLASS_CHARS'		=> 'Apenas caracteres alfa-num&eacute;ricos mais ., :, -, _ e # s&atilde;o classes de nome inv&aacute;lidas.',
	'THEME_ERR_COPY_LONG'		=> 'O copyright n&atilde;o pode exceder 60 caracteres.',
	'THEME_ERR_NAME_CHARS'		=> 'O nome do tema s&oacute; pode conter caracteres alfa-num&eacute;ricos, -, +, _ e espa&ccedil;o.',
	'THEME_ERR_NAME_EXIST'		=> 'Um tema com este nome j&aacute; est&aacute; em uso.',
	'THEME_ERR_NAME_LONG'		=> 'O nome do tema n&atilde;o pode exceder 30 caracteres.',
	'THEME_ERR_NOT_THEME'		=> 'O arquivo que voc&ecirc; especificou n&atilde;o cont&eacute;m um tema v&aacute;lido.',
	'THEME_ERR_REFRESH_FS'		=> 'Este tema &eacute; armazenado no sistema, ent&atilde;o n&atilde;o existe a necessidade de atualizar o mesmo.',
	'THEME_ERR_STYLE_NAME'		=> 'Voc&ecirc; deve entrar com um nome para este tema.',
	'THEME_FILE'				=> 'Arquivo de tema',
	'THEME_EXPORT'				=> 'Exportar Tema',
	'THEME_EXPORT_EXPLAIN'		=> 'Aqui voc&ecirc; pode exportar um tema na forma de arquivo. Este arquivo ir&aacute; conter todos os detalhes da template para ser instalada em outra comunidade da mesma forma que se apresenta aqui. Voc&ecirc; pode escolher por fazer o download diretamente agora ou armazenar a mesma no seu servidor e mais tarde fazer o download via FTP.',
	'THEME_EXPORTED'			=> 'Tema exportado com sucesso e armazenado em %s.',
	'THEME_LOCATION'			=> 'Folha de estilo armazenada em',
	'THEME_LOCATION_EXPLAIN'	=> 'Imagens s&atilde;o sempre armazenadas no sistema.',
	'THEME_NAME'				=> 'Nome do tema',
	'THEME_REFRESHED'			=> 'Tema atualizado com sucesso.',
	'THEME_UPDATED'				=> 'Tema atualizado com sucesso.',

	'UNDERLINE'				=> 'Underline',
	'UNINSTALLED_IMAGESET'	=> 'Grupo de imagens removidas',
	'UNINSTALLED_STYLE'		=> 'Estilos removidos',
	'UNINSTALLED_TEMPLATE'	=> 'Templates removidas',
	'UNINSTALLED_THEME'		=> 'Temas removidos',
	'UNSET'					=> 'Indefinido',

));

?>
