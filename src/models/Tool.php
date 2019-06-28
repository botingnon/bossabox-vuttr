<?php
/**
 * Modelo da ferramenta
 * 
 * @category Model
 * @package  Bossabox
 * @author   Valdir Botingnon <valdir.botingnon@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 */
namespace Bossabox\Models;

use \Luracast\Restler\RestException;

class Tool extends \RedBeanPHP\SimpleModel
{

    /**
     * Formatação do modelo
     * 
     * @return array
     */
    public function format()
    {
        $this->bean->id = (int)$this->bean->id;
        $this->bean->tags = json_decode($this->bean->tags);
    }

    /**
     * Evento de carregamento
     * 
     * @return array
     */
    public function open()
    {
        $this->format();
    }

    /**
     * Validação de entrada da ferramenta
     * 
     * @throws Exception Quando o atributo tag foi informado, é um array 
     *      e contém um elemento
     * 
     * @return null
     */
    public function update()
    {
        if (!is_array($this->bean->tags)
            || count($this->bean->tags) == 0
        ) {
            throw new RestException(400, '`tag` is required.');
        }

        $this->bean->tags = json_encode($this->bean->tags);
    }

    /**
     * Evento de saída pós atualziação
     * 
     * @return array
     */
    public function after_update()
    {
        $this->format();
    }
}

