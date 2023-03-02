# Gerador de Gráfico de Pizza

O projeto Pizza Chart consiste em criar uma API que recebe parâmetros em formato JSON e retorna um conjunto de ângulos que podem ser utilizados para gerar um gráfico de pizza.

## Como utilizar

Para utilizar o projeto, você deve seguir os seguintes passos:

-   Clonar o repositório para sua máquina local.
-   Instalar as dependências do projeto utilizando o gerenciador de pacotes Composer.
-   Acessar a rota criada com o método POST, passando os parâmetros como um JSON.

Para utilizar a API, deve-se enviar uma requisição HTTP POST para a rota http://localhost/api/pizza-chart contendo um corpo no formato JSON com as seguintes características:

-   Cada chave do objeto JSON representa uma categoria.
-   O valor de cada chave representa a quantidade de itens na categoria.

Exemplo:

-   POST http://localhost:8000/pizza-chart
-   Content-Type: application/json

```{ "English": 4, "Polish": 12, "Russian": 10, "Spanish": 2 }```
O retorno da API será um objeto JSON com a mesma estrutura do objeto de entrada, mas com os valores substituídos pelos ângulos correspondentes. Os ângulos são calculados a partir do valor de cada categoria em relação ao valor total.

O objeto de retorno terá, no máximo, duas casas decimais.
Exemplo:
```{"English": 51.43, "Polish": 154.29, "Russian": 128.57, "Spanish": 25.71 }```
