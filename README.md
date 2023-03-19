# Pandemic Stats Tracker

Essa interface web foi criada utilizando HTML, CSS, JS e PHP.

O banco de dados (MySQL) armazena a data e hora de todos os acessos que o script fez à API-Covid-19, bem como qual o país escolhido para a consulta.

## O que é?

O **Pandemic Stats Tracker** possibilita ao usuário obter informações sobre os casos de mortes por Covid. Estes dados são obtidos por meio da API-Covid-19 que está disponível no servidor da Kidopi. A página permite escolher entre três países (Brazil, Canada ou Australia) e mostrar o número total de casos confirmados e mortes do país selecionado.

Clicando no botão no canto superior direito, ele levará a outra interface chamada **Pandemic Stats Comparison**. O usuário pode escolher dois países diferentes e será mostrado a diferença da taxa de morte entre os países selecionados.

## Pré-requisitos

- É necessário ter o XAMPP instalado. Este [link](https://youtu.be/COepL5-bNNI) ensina como instalá-lo.
- Coloque o projeto dentro da pasta "htdocs" do XAMPP.
- Abra o XAMPP e inicie MySQL clicando em "Start" no painel do XAMPP.
- Acesse o phpMyAdmin clicando em "Admin" ao lado do MySQL. 
- Crie um banco de dados e vá na aba "SQL". 
- Cole o comando SQL abaixo e clique em "Continuar":

    ```SQL
    CREATE TABLE acessos (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        pais VARCHAR(255) NOT NULL,
        data DATE NOT NULL,
        hora TIME NOT NULL
    );
    ```

- Abra o arquivo "lastAccessApi.php" e edite a linha abaixo com os dados do seu banco de dados:

    ```PHP
    $conexao = mysqli_connect('localhost', 'root', '', 'acesso_api_covid');
    ```

    Deve ficar assim:

    ```PHP
    $conexao = mysqli_connect("localhost", "user","password","database");
    ```
**OBS: O user padrão é o root e a senha padrão é vazia**


- No XAMPP inicie o Apache e clique em admin
- Inicialmente, aparecerá "Não há registros de acessos anteriores." mudando o país os dados armazenados no banco aparecerão no rodapé.


**Feito por [Victor Nathanael](https://www.linkedin.com/in/victornathanael/)**
