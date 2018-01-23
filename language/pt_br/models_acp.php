<?php
/**
 *
 * @package Post Models Extension
 * @copyright (c) 2015 Zoddo <zoddo.ino@gmail.com>
 * @copyright (c) 2007 Elglobo <http://www.phpbb-services.com>
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.1.0] (https://github.com/phpBBTraducoes)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ADD_NEW_MODEL'			=> 'Adicionar novo modelo de post',
	'FOUNDERS'				=> 'Fundadores',
	'MODEL'					=> 'Modelo',
	'MODEL_ADD'				=> 'Adicionar modelo de post',
	'MODEL_ADDED'			=> 'Modelo de post adicionado com sucesso.',
	'MODEL_AUTH'			=> 'Modelo de permissão',
	'MODEL_AUTH_EXPLAIN'	=> 'Defina a permissão necessária para visualizar este modelo. <br /> Você também terá que autorizar os usuários a utilizar modelos de postagem definindo a permissão apropriada.',
	'MODEL_ALREADY_EXIST'	=> 'Já existe um modelo com este título, insira outro título para este modelo.',
	'MODEL_CONTENT'			=> 'Conteúdo do modelo',
	'MODEL_CONTENT_EXPLAIN'	=> 'O conteúdo do modelo será inserido, como ele no corpo da mensagem',
	'MODEL_EDIT'			=> 'Editar modelo de post',
	'MODEL_EDIT_EXPLAIN'	=> 'Aqui você pode adicionar ou editar um modelo de post.',
	'MODEL_LANGUAGE'		=> 'Idioma do modelo',
	'MODEL_PM'				=> 'Exibir em mensagens privadas',
	'MODEL_PM_EXPLAIN'		=> 'Você também deve autorizar os usuários a usar modelos de postagem em mensagens privadas, definindo a permissão apropriada.',
	'MODEL_SETTINGS'		=> 'Configurações do modelo',
	'MODEL_TITLE'			=> 'Nome do modelo',
	'MODEL_UPDATED'			=> 'Modelo de post atualizado com sucesso.',
	'MODEL_REMOVED'			=> 'Modelo de post removido com sucesso.',

	'NO_EXIST'				=> 'O pacote de idiomas não está mais disponível.',
	'NO_MODEL_INFO'			=> 'Você deve especificar um título, um conteúdo e um idioma para o seu modelo.',
	'NO_MODEL'				=> 'O modelo de post não pôde ser encontrado.',
	'NO_PERMISSIONS'		=> 'Você não possui a permissão necessária para gerenciar modelos de postagem.',
));
