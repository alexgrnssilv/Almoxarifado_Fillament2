# Manual do Usuário – Sistema de Movimentação de Produtos

![Sistema de Estoque](https://source.unsplash.com/1200x400/?warehouse,inventory)

---

## 1. Introdução

O sistema **Almoxarifado_Movimentações** é uma aplicação web desenvolvida em **Laravel com Filament**, voltada para o controle de movimentação de produtos.

### Objetivos do sistema

- Controlar entradas e saídas de produtos  
- Registrar movimentações no estoque  
- Gerar rastreabilidade dos itens  
- Facilitar a gestão de inventário  

---

## 2. Acesso ao Sistema

![Login sistema](https://source.unsplash.com/800x300/?login,security)

### 2.1 Como acessar

1. Abra o navegador  
2. Digite o endereço do sistema  
3. Informe:
   - E-mail  
   - Senha  
4. Clique em **Entrar**

---

## 3. Tela Principal (Painel)

![Dashboard](https://source.unsplash.com/1200x400/?dashboard,admin)

Após o login, o usuário terá acesso ao painel administrativo do Filament, contendo:

- Menu lateral com módulos  
- Listagem de dados  
- Botões de ação (criar, editar, excluir)  

---

## 4. Cadastro de Produtos

![Produtos](https://source.unsplash.com/1200x400/?products,inventory)

### 4.1 Cadastrar novo produto

1. Acesse o menu **Produtos**  
2. Clique em **Criar Produto**  
3. Preencha:

   - Nome do produto  
   - Código/SKU (se houver)  
   - Quantidade inicial  
   - Descrição (opcional)  

4. Clique em **Salvar**

---

### 4.2 Editar produto

1. Clique no produto na lista  
2. Modifique os dados desejados  
3. Clique em **Salvar**

---

### 4.3 Excluir produto

1. Clique no botão **Excluir**  
2. Confirme a ação  

---

## 5. Movimentação de Produtos

![Movimentação estoque](https://source.unsplash.com/1200x400/?warehouse,logistics)

Este é o principal recurso do sistema.

### 5.1 Tipos de movimentação

O sistema trabalha com dois tipos principais:

- **Entrada** (adicionar estoque)  
- **Saída** (remover estoque)  

---

### 5.2 Registrar movimentação

1. Acesse o menu **Movimentações**  
2. Clique em **Nova Movimentação**  
3. Preencha:

   - Produto  
   - Tipo (Entrada ou Saída)  
   - Quantidade  
   - Data  
   - Observação (opcional)  

4. Clique em **Salvar**

---

### 5.3 Regras importantes

- Entrada aumenta o estoque  
- Saída diminui o estoque  
- Não é possível retirar mais do que o disponível  
- oda movimentação fica registrada no histórico  

---

## 6. Controle de Estoque

![Controle de estoque](https://source.unsplash.com/1200x400/?inventory,management)

O sistema atualiza automaticamente o estoque com base nas movimentações.

### Visualização

- Quantidade atual por produto  
- Histórico de alterações  
- Situação do estoque  

---

## 7. Histórico de Movimentações

![Histórico](https://source.unsplash.com/1200x400/?data,history)

### Funções disponíveis

- Visualizar movimentações anteriores  
- Filtrar por:
  - Produto  
  - Tipo  
  - Data  
- Auditoria de alterações  

---

## 8. Relatórios (se implementado)

![Relatórios](https://source.unsplash.com/1200x400/?reports,analytics)

O sistema pode oferecer:

- Relatório de estoque atual  
- Relatório de entradas/saídas  
- Exportação de dados  

---

## Conclusão

Este sistema foi desenvolvido para proporcionar controle eficiente, transparência e organização na gestão de produtos, permitindo decisões mais rápidas e assertivas.

---
