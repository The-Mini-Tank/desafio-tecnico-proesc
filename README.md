# Change Log

## Resolução 3

Q1 - Correção nas rotas dentro do view 'Welcome'. \
Q2 - Correção nos parâmetros de action em 'create.blade' de categorias. \
Q3 - Foi criada uma function para estabelecer uma relação entre as duas tabelas por meio do método 'belongsTo', o novo parâmetro é passado para a view e acessado por {{ $produto -> category -> name }}. 

## Outros 
* Correção do nome das rotas 'listar' para melhor legibilidade.
* Criação da rota 'edit' de categorias, e correção do método de, GET para POST.
* View de edição de produtos ( antes vazia ) retorna uma view de página em manutenção. 


