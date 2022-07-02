## Oque é 
Este é um teste proposto para servir como demostrativo de habilidades para que seja possível analisar a capacidade de resolver problemas com as tecnologias indicadas.

## Detalhes
É possível encontrar oque foi solicidato no [ARQUIVO DO TESTE](https://github.com/skymarkos7/teste_junor_php/blob/master/REQUISITOS.pdf) disponível aqui no repositório.


## Tempo
O [TESTE](https://github.com/skymarkos7/teste_junor_php/blob/master/REQUISITOS.pdf) é dividido em 4 tarefas as quais foi definito data de entrega pelo próprio desafiado que concorre a vaga de DEV junior. Ficou definido um desafio por fim de semana (tempo que o desafiado tem a disposição) totalizando 4 semanas e finalizando no dia 06/06/2022.  
- Foi possível terminar antecipadamente :)


## Processo
1- Subi os arquivos no github  
2- Criei uma nova branch para desenvolvimento  
3- Emergindo as branch's sempre que necessário  
4- Todas as novas modificaçaões são feitas na branch de desenvolvimento.  
5- Descrevi todo o processo de desenvolvimento no arquivo readme.md para melhor acompanhamento  
6- [PRINT da linda do tempo](https://api.lourencoautopecas.com.br/captura.png)  das modificações no GIT.

### 1. Tarefa: formulário de contato  
- Os requisitos  dessa tarefa estão disponíveis [aqui](https://github.com/skymarkos7/teste_junor_php/blob/master/REQUISITOS.pdf)
- Foi adicionado REQUERE nos campos HTML para especificar a obrigatoriedade e feito validação também no javaScript para garantir o preenchimento dos campos obrigatórios e usando o focus no campo pendente.
- Utilizei um serviço externo para o envio do email chamado [
FORMSPREE](https://formspree.io/), com os devidos ajustes foi possível enviar por ajax e sem sair da página um email com as informações solicitadas. Obs: o plano gratuito limita 100 emails por mÊs e gastei 55 durante o desenvolvimento ;)
- Hospedei uma imagem com o [resultado](https://estoque.lourencoautopecas.com.br/Capturar.PNG), que pode ser conferido [aqui](https://estoque.lourencoautopecas.com.br/Capturar.PNG).

### 2. Tarefa: festa de fim de ano  
- Os requisitos  dessa tarefa estão disponíveis [aqui](https://github.com/skymarkos7/teste_junor_php/blob/master/REQUISITOS.pdf).
- Reutilizei o código JavaScript usado para envio do formulário de contato na tarefa anterior, e o fiz gravar os dados no banco.
- Utilizei o arquivo envia_comentario.php para buscar e listar as opnioes autores e datas já dentro de uma tag HTML para facilitar a formatação.
- o campo comentário foi limitador a 255 caracteres pelo HTML com o "maxlength" e limitador no banco.
- utilizei uma variável PHP "$festa" na página index.php para fazer a destinção das opniões.
- Para facilitar o arquivo SQL está disponível no meu [GOOGE DRIVE](https://drive.google.com/file/d/1UzH60zAq9agShJIl-CfHNvTlcjjhukOT/view?usp=sharing)

### 3. Tarefa: bandeira_ip
- Os requisitos  dessa tarefa estão disponíveis [aqui](https://github.com/skymarkos7/teste_junor_php/blob/master/REQUISITOS.pdf).
- No [Google cloud](https://cloud.google.com/) criei um perfil e ativei o serviço de api mais adequada, li um pouco da documentação e usei minhas chaves de autenticação.
- A implementação está correta e funcionando embora algumas cidades menores retornem imagem turisticas da cidade e não da bandeira (mesmo passando uma string BANDEIRA ou FLAG antes do nome da cidade). 
- Após inserir uma linguagem PT-br os resultados melhoraram mas ainda retorna divergências.
- A integração com a [API de localização por IP](http://ip-api.com) ficou totalmente funcional

### 4. Tarefa: tela do aplicativo
- Os requisitos  dessa tarefa estão disponíveis [aqui](https://github.com/skymarkos7/teste_junor_php/blob/master/REQUISITOS.pdf).
- Tive dificuldade para encontrar um programa que permitisse extrair as imagens e icones de forma fácil, então algumas imagens e icones foram recortadas da imagem psd para serem utilizadas.
- Uma captura do resultado pode ser encontrada em [aqui](https://api.lourencoautopecas.com.br/captura2.png) para ter uma prévia.


## Autor
Nome: [Marcos Lourenço](https://www.linkedin.com/in/skymarkos7/)    
Contato: [82-996909200](https://api.whatsapp.com/send?phone=5582996909200&text=oi%20Marcos%20te%20achei%20pelo%20git%20hub%20no%20projeto%20PHP%20junior)



