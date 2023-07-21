# Pandemic Stats Tracker

Essa interface web foi criada utilizando HTML, CSS, JS e PHP.

O banco de dados (MySQL) armazena a data e hora de todos os acessos que o script fez à API-Covid-19, bem como qual o país escolhido para a consulta.

## 🤔 O que é?

O **Pandemic Stats Tracker** possibilita ao usuário obter informações sobre os casos de mortes por Covid. Estes dados são obtidos por meio da API-Covid-19 que está disponível no servidor da Kidopi. A página permite escolher entre três países (Brazil, Canada ou Australia) e mostrar o número total de casos confirmados e mortes do país selecionado.

Clicando no botão no canto superior direito, ele levará a outra interface chamada **Pandemic Stats Comparison**. O usuário pode escolher dois países diferentes e será mostrado a diferença da taxa de morte entre os países selecionados.

## 📋 Pré-requisitos

- Faça o download desse repositório na sua máquina.

- Instale o XAMPP seguindo esse [tutorial](https://youtu.be/COepL5-bNNI).

- Coloque as pastas do projeto dentro da pasta "htdocs" do XAMPP.

## ⚙️ Configurando o projeto

- Abra o XAMPP e no module Apache clique em "Start".
- No module MySQL clique em "Start" e depois em "Admin". 
- Com o navegador aberto no phpMyAdmin, crie um banco de dados com o nome de: **acesso_api_covid**
- Clique no banco que você acabou de criar, entre na aba "SQL" e cole o comando SQL abaixo e clique em "Continuar". 

    ```SQL
    CREATE TABLE acessos (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        pais VARCHAR(255) NOT NULL,
        data DATE NOT NULL,
        hora TIME NOT NULL
    );
    ```

- Se você criou seu banco com um nome diferente de *acesso_api_covid* edite o arquivo `config/database.php` e edite as informações.
    
**OBS: O user padrão é root e a senha padrão é uma string vazia**

## 🎯 Rodando o projeto

- No XAMPP, inicie o Apache clicando em "Start" e abra no navegador clicando em "Admin".
- Inicialmente, aparecerá "Não há registros de acessos anteriores." mudando o país os dados armazenados no banco aparecerão no rodapé.


**Feito por [Victor Nathanael](https://www.linkedin.com/in/victornathanael/)**
