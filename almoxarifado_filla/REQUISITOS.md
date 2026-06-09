
# Sistema de Movimentação de Produtos

## Descrição
Sistema responsável pelo controle de produtos e suas movimentações de estoque, permitindo entrada e saída de mercadorias.

---

## 1. Requisitos Funcionais (RF)

### Produto
- **RF01**: O sistema deve permitir cadastrar um produto.
- **RF02**: O produto deve conter os seguintes campos:
  - Marca
  - Nome
  - Quantidade em estoque
- **RF03**: O sistema deve permitir editar os dados de um produto.
- **RF04**: O sistema deve permitir excluir um produto.
- **RF05**: O sistema deve listar todos os produtos cadastrados.

### Movimentação
- **RF06**: O sistema deve permitir registrar uma movimentação de produto.
- **RF07**: A movimentação deve conter:
  - Produto
  - Quantidade
  - Tipo (Entrada ou Saída)
- **RF08**: O sistema deve atualizar automaticamente o estoque do produto após uma movimentação.
- **RF09**: O sistema deve listar todas as movimentações realizadas.
- **RF10**: O sistema deve permitir filtrar movimentações por produto ou tipo.

---

## 2. Requisitos Não Funcionais (RNF)

- **RNF01**: O sistema deve ser desenvolvido utilizando o framework Laravel.
- **RNF02**: A interface administrativa deve ser construída com Filament.
- **RNF03**: O sistema deve ter desempenho suficiente para operações básicas sem atrasos perceptíveis.
- **RNF04**: O sistema deve garantir a integridade dos dados no banco.
- **RNF05**: O sistema deve possuir validação de dados nos formulários.
- **RNF06**: O sistema deve ser responsivo para uso em diferentes dispositivos.
- **RNF07**: O sistema deve utilizar banco de dados relacional (ex: MySQL ou PostgreSQL).

---

##  3. Regras de Negócio (RN)

- **RN01**: A quantidade de um produto não pode ser negativa.
- **RN02**: Movimentações do tipo "Saída" só podem ocorrer se houver estoque suficiente.
- **RN03**: Movimentações do tipo "Entrada" devem somar ao estoque atual.
- **RN04**: Movimentações do tipo "Saída" devem subtrair do estoque atual.
- **RN05**: Todo registro de movimentação deve estar vinculado a um produto existente.
- **RN06**: A quantidade informada na movimentação deve ser maior que zero.
- **RN07**: O tipo da movimentação deve ser obrigatoriamente "Entrada" ou "Saída".
- **RN08**: O estoque deve ser atualizado imediatamente após cada movimentação.

---

##  Observações
- O sistema pode ser expandido futuramente com:
  - Controle de usuários
  - Histórico detalhado
  - Relatórios de estoque
  - Alertas de estoque baixo