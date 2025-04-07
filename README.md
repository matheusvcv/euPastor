# MyChurch WebSystem

🚧 **Em construção** 🚧

O **MyChurch WebSystem** é um sistema de administração de igrejas que oferece diversos módulos para facilitar o gerenciamento de atividades religiosas. Seu objetivo é ajudar líderes religiosos a lidarem com suas responsabilidades de forma mais ágil, segura e eficiente.

## 📦 Módulos disponíveis

### 📘 Escola Bíblica Dominical
Sistema voltado para o ensino religioso, dividido em departamentos que podem conter uma ou mais turmas. Os professores têm acesso ao sistema e podem:

- Gerenciar suas turmas
- Adicionar aulas e temas de estudo
- Controlar a frequência dos alunos
- Atribuir e registrar notas

### 🧑‍🤝‍🧑 Lista de Membros
Exibe todos os membros cadastrados na unidade religiosa, com informações como:

- Dados pessoais e de contato
- Status de participação religiosa
- Renda declarada (usada para sugerir o valor do dízimo)

Este módulo também permite exportar a lista em formato Excel, o que é útil para relatórios e organização administrativa.

### 🛠️ Configuração de Membros
Permite cadastrar novos membros, excluir membros existentes, e editar informações diretamente na lista, com campos dinâmicos e sem necessidade de recarregar a página.

### 🔐 Cadastro de Usuários
Módulo destinado à criação de acessos ao sistema. O administrador preenche um formulário com informações básicas, além de definir nome de usuário e senha para cada novo usuário.

---

## ✅ Vantagens do Sistema

O sistema possui um login seguro, com as seguintes proteções:

- ✔️ Validação de campos obrigatórios
- ✔️ Proteção contra SQL Injection
- ✔️ Uso da função `password_verify()` para comparação de senhas hash
- ✔️ Uso de sessões para armazenar os dados do usuário autenticado

---

## 🛠️ Tecnologias Utilizadas

- PHP (programação orientada a objetos)
- MySQL (banco de dados)
- HTML
- CSS

---

Se quiser, posso adicionar um sumário, badges, instruções de instalação ou um exemplo de uso. É só me dizer!
