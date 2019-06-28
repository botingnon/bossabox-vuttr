# Aplicação VUTTR (Very Useful Tools to Remember)

Aplicação simples para gerenciar ferramentas com seus respectivos nomes, links, descrições e tags.

### Instruções de instalação

Clone este repositório:  
**`git clone git@github.com:diico/bossabox-vuttr.git`**

Em seguida, acesse o diretório do projeto:  
**`cd bossabox-vuttr`**  

Faça o build da imagem:  
**`docker-compose build`**  

Instale as dependências do projeto:  
**`docker exec bossabox-vuttr composer install`**  

Inicie os serviços:  
**`docker-compose up -d`**  

Execute o teste inicial:  
**`docker exec bossabox-vuttr composer test`**  

### Documentação  

Acesse a documentação da API que estará disponível no endereço:  
http://localhost:3000/doc  


#### Tecnologias utilizadas  

* Docker  
* PHP 7.2  
* Restler (http://restler3.luracast.com/)  
* RedBeanPHP (https://redbeanphp.com/)  


