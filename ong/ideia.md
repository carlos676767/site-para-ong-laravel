Claro! Vou te passar um **plano completo e detalhado** para o projeto do site para ONG, incluindo backend, frontend, principais funcionalidades, tecnologias e fluxo geral. Assim você terá uma visão clara para construir de ponta a ponta com Laravel.

---

# Projeto: Site para ONG - “ONG Conecta”

---

## 1. Objetivo do Projeto

Criar uma plataforma web completa para ONGs pequenas e médias, que permita:

* Divulgar a ONG e seus projetos
* Captar doações online de forma segura
* Gerenciar voluntários e comunicar com a comunidade
* Publicar notícias e atualizações
* Facilitar o contato e a transparência da ONG

---

## 2. Tecnologias Sugeridas

| Camada           | Tecnologia                   |
| ---------------- | ---------------------------- |
| Backend          | Laravel 11                   |
| Frontend Admin   | Laravel Livewire + Blade     |
| Frontend Público | Blade + Tailwind CSS         |
| Banco de Dados   | MySQL / PostgreSQL           |
| Pagamentos       | Stripe, MercadoPago, PayPal  |
| E-mail           | Mailgun, Amazon SES, ou SMTP |
| Armazenamento    | Local / AWS S3 para mídias   |

---

## 3. Backend (Painel Administrativo)

### 3.1. Autenticação e Controle de Acesso

* Login seguro para administradores e editores
* Controle de permissões (ex: apenas admin pode deletar)
* Recuperação e alteração de senha

### 3.2. Gestão da ONG

* Editar perfil institucional (missão, visão, história)
* Upload de logo e imagens institucionais

### 3.3. Gestão de Projetos e Campanhas

* CRUD para projetos com título, descrição, status (ativo/concluído), datas, fotos
* Destaque para projetos prioritários na página inicial

### 3.4. Gestão de Notícias / Blog

* CRUD para posts com texto, imagens, categorias
* Agendamento de publicações

### 3.5. Gestão de Voluntários

* Listar inscrições recebidas
* Aprovar, rejeitar ou excluir voluntários
* Visualizar dados de contato e histórico

### 3.6. Gestão de Doações

* Visualizar todas as doações com filtros (data, valor)
* Status das doações (pendente, confirmada, cancelada)
* Exportar relatórios financeiros em CSV/Excel

### 3.7. Configuração de Pagamentos

* Integração com gateways (Stripe, MercadoPago)
* Configuração de valores fixos e personalizáveis para doação

### 3.8. Gerenciamento de Galeria de Fotos/Vídeos

* Upload e organização em álbuns
* Inserção em páginas públicas

### 3.9. Configurações Gerais

* SEO básico: meta tags, descrições
* Configuração de redes sociais vinculadas
* Personalização visual básica (cores, fontes)

---

## 4. Frontend (Site Público)

### 4.1. Página Inicial

* Breve apresentação da ONG (missão, visão, resumo)
* Destaques dos projetos ativos
* Chamadas para ação: doar, voluntariar

### 4.2. Página de Projetos e Campanhas

* Listagem paginada dos projetos
* Página detalhada com fotos, descrição e progresso

### 4.3. Página de Notícias

* Listagem de posts recentes
* Página detalhada para cada notícia

### 4.4. Página de Doações

* Formulário simples e seguro para doações
* Opção de valores fixos ou personalizados
* Confirmação e agradecimento pós-doação

### 4.5. Página de Voluntariado

* Formulário para inscrição de voluntários
* Informações sobre tipos de voluntariado e contatos

### 4.6. Galeria de Mídia

* Exibição responsiva de fotos e vídeos em álbuns

### 4.7. Página Sobre a ONG

* Detalhes completos sobre a ONG, equipe, parceiros

### 4.8. Contato

* Formulário de contato simples
* Informações da ONG: endereço, telefone, redes sociais
* Mapa interativo (Google Maps)

---

## 5. Fluxo Geral do Projeto

### 5.1. Usuário Administrador

1. Faz login no painel administrativo
2. Gerencia conteúdo (ONG, projetos, notícias)
3. Visualiza e gerencia voluntários e doações
4. Configura pagamentos e campanhas
5. Publica e edita conteúdo que aparece no site público

### 5.2. Visitante / Doador

1. Acessa o site público
2. Navega para conhecer a ONG e seus projetos
3. Realiza doações online com segurança
4. Inscreve-se para voluntariado
5. Consulta notícias e eventos

---

## 6. Detalhes Técnicos Importantes

* **Autenticação:** Laravel Breeze ou Jetstream para backend
* **Painel:** Livewire para reatividade e facilidade no CRUD
* **Pagamentos:** Implementar webhooks para confirmar doações automaticamente
* **Validações:** Forte validação nos formulários tanto backend quanto frontend
* **Segurança:** CSRF, XSS, validação de uploads
* **Uploads:** Usar Storage Laravel para facilitar armazenamento local ou na nuvem
* **SEO:** URLs amigáveis e meta tags dinâmicas
* **Responsividade:** Design mobile-first com Tailwind CSS

---

## 7. Roadmap Sugerido (Fases do Projeto)

| Fase   | O que entregar                                                          |
| ------ | ----------------------------------------------------------------------- |
| MVP    | Site público básico + autenticação admin + CRUD ONG, Projetos, Notícias |
| Fase 2 | Voluntariado + Doações (formulários + integração pagamento)             |
| Fase 3 | Dashboard admin avançado + relatórios + notificações                    |
| Fase 4 | Galeria multimídia + personalização visual + SEO aprimorado             |
| Fase 5 | Melhorias UX/UI + testes + documentação + deploy                        |




Claro! Vou te passar uma ideia bem organizada da estrutura do banco de dados para o site da ONG, contemplando as principais entidades e seus relacionamentos. Essa modelagem é pensada para Laravel com um banco relacional (MySQL, PostgreSQL).

---

# Estrutura do Banco de Dados (Modelo Relacional)

---

## Tabelas principais

| Tabela       | Descrição                                  |
| ------------ | ------------------------------------------ |
| `users`      | Usuários do sistema (admins, editores)     |
| `ongs`       | Dados institucionais da ONG                |
| `projects`   | Projetos e campanhas da ONG                |
| `news`       | Notícias e posts do blog                   |
| `volunteers` | Cadastro dos voluntários inscritos         |
| `donations`  | Registro das doações feitas                |
| `media`      | Arquivos de mídia (fotos, vídeos)          |
| `roles`      | Papéis de usuário (admin, editor)          |
| `role_user`  | Pivot table para relação usuários e papéis |

---

## Descrição das tabelas e principais campos






### 3. `projects`

| Campo       | Tipo        | Observação             |
| ----------- | ----------- | ---------------------- |
| id          | bigint (PK) |                        |
| ong\_id     | bigint (FK) | Referência para ONG    |
| title       | string      | Nome do projeto        |
| description | text        | Detalhes do projeto    |
| status      | enum        | ('ativo', 'concluído') |
| start\_date | date        |                        |
| end\_date   | date        | nullable               |
| created\_at | timestamp   |                        |
| updated\_at | timestamp   |                        |

### 4. `news`

| Campo         | Tipo        | Observação |
| ------------- | ----------- | ---------- |
| id            | bigint (PK) |            |
| ong\_id       | bigint (FK) |            |
| title         | string      |            |
| content       | text        |            |
| published\_at | timestamp   | nullable   |
| created\_at   | timestamp   |            |
| updated\_at   | timestamp   |            |

### 5. `volunteers`

| Campo       | Tipo        | Observação    |
| ----------- | ----------- | ------------- |
| id          | bigint (PK) |               |
| ong\_id     | bigint (FK) |               |
| name        | string      |               |
| email       | string      |               |
| phone       | string      |               |
| approved    | boolean     | default false |
| created\_at | timestamp   |               |
| updated\_at | timestamp   |               |



### 7. `media`

| Campo       | Tipo        | Observação         |
| ----------- | ----------- | ------------------ |
| id          | bigint (PK) |                    |
| ong\_id     | bigint (FK) |                    |
| project\_id | bigint (FK) | nullable           |
| type        | string      | 'image' ou 'video' |
| file\_path  | string      | Caminho do arquivo |
| description | string      | nullable           |
| created\_at | timestamp   |                    |
| updated\_at | timestamp   |                    |

### 8. `roles`

| Campo       | Tipo        | Observação            |
| ----------- | ----------- | --------------------- |
| id          | bigint (PK) |                       |
| name        | string      | ex: 'admin', 'editor' |
| created\_at | timestamp   |                       |
| updated\_at | timestamp   |                       |



