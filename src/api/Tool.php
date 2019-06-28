<?php
/**
 * Gerenciamento de ferramentas
 * 
 * @category Api
 * @package  Bossabox
 * @author   Valdir Botingnon <valdir.botingnon@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://localhost:3000/doc/#!/tools
 */
namespace Bossabox\Api;


class Tool
{

    /**
     * Lista de ferramentas
     * 
     * Retorna lista de ferramentas disponíveis podendo ser filtrada por tag
     *
     * @param string $tag {@from query}
     *                    Opcionalmente uma tag como filtro
     * 
     * @return array Lista de ferramentas
     */
    function index($tag = "")
    {
        try {
            $query = $tag ? 'tags LIKE ?' : '';

            return \R::exportAll(
                \R::findAll('tool', $query, ["%{$tag}%"])
            );
        } catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Cadastra ferramenta 
     * 
     * Cadastra uma nova ferramenta, em caso de sucesso retorna 
     * a ferramenta com seu identificador
     *                  
     * @param string $title       {@from body}{@min 1}{@max 255}
     *                            Título da ferramenta
     * @param string $link        {@from body}{@min 1}{@max 255}
     *                            Link da ferramenta
     * @param string $description {@from body}{@min 1}{@max 255}
     *                            Descrição da ferramenta
     * @param array  $tags        {@from body}{@type indexed}
     *                            Uma ou mais Tag da ferramenta
     *
     * @return array Ferrammenta cadastrada
     */
    function post($title, $link, $description, $tags)
    {
        $Tool = \R::dispense('tool');
        $Tool->title = $title;
        $Tool->link = $link;
        $Tool->description = $description;
        $Tool->tags = $tags;

        $id = \R::store($Tool);

        return $Tool;
    }

    /**
     * Apaga uma ferramenta
     * 
     * Apaga uma ferramenta de acordo com o id informado
     * 
     * @param int $id Identificador da ferramenta
     *
     * @return array
     */
    function delete($id)
    {
        $Tool = \R::load('tool', $id);
        \R::trash($Tool);

        return [];
    }

}

