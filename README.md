# Clube Goianiense de Automobilismo (CGA) 🏁

Bem-vindo ao repositório oficial do website do **Clube Goianiense de Automobilismo (CGA)**. Este projeto consiste em um portal web dinâmico, moderno e de alta performance desenvolvido para divulgar campeonatos, regulamentos, transparência e conectar a comunidade automobilística do estado de Goiás.

---

## 🏎️ Sobre o CGA

O Clube Goianiense de Automobilismo (CGA) é o epicentro do esporte a motor em Goiás, organizando e homologando campeonatos de diversas categorias, tais como:
* Kart
* Marcas e Pilotos
* Turismo
* Arrancada
* Drift
* Track Day

O portal serve como plataforma centralizadora para divulgação de resultados, cronogramas de etapas, transparência de documentos de gestão, credenciamento de pilotos e informações de contato.

---

## 🛠️ Tecnologias Utilizadas

Este projeto foi construído utilizando um conjunto de tecnologias web focadas em simplicidade, manutenibilidade e alta performance visual:

* **Core**: PHP (Modularização e controle de visualizações), HTML5 e Vanilla JavaScript (Efeitos interativos e dinâmicos)
* **Estilização**: Vanilla CSS3 personalizado com variáveis de design para um tema esportivo escuro premium (Dark Mode)
* **Fontes e Ícones**: FontAwesome e Google Fonts (Inter, Roboto)
* **Layout**: CSS Grid, Flexbox e Bento Grid para apresentação moderna e responsiva

---

## 📂 Estrutura do Projeto

Abaixo está detalhada a organização de diretórios e arquivos do projeto:

```text
cgautomobilismo.com.br/
│
├── includes/                      # Componentes reutilizáveis PHP
│   ├── header.php                 # Cabeçalho global com menu de navegação
│   └── footer.php                 # Rodapé global e scripts comuns
│
├── assets/                        # Arquivos de estilização, scripts e mídias
│   ├── css/
│   │   └── style.css              # Estilo principal e design system
│   ├── js/
│   │   └── main.js                # Lógica e interações JavaScript
│   ├── images/                    # Imagens do projeto
│   └── video/                     # Vídeos de background e banners
│
├── index.php                      # Página inicial (Dashboard de Eventos e Classificação)
├── sobre.php                      # História do CGA e Diretoria Executiva
├── patrocinadores.php             # Relação de apoiadores e benefícios de patrocínio
├── transparencia.php              # Documentos de prestação de contas e atas da diretoria
├── contato.php                    # Formulário de contato e filiação de pilotos
└── acessibilidade.php             # Diretrizes e opções de acessibilidade do portal
```

---

## 🚀 Como Executar o Projeto Localmente

Como o projeto é construído sobre PHP, você precisará de um ambiente de servidor local para rodá-lo perfeitamente.

### Requisitos Mínimos
* PHP 7.4 ou superior
* Servidor Web (Apache / Nginx / PHP Built-in Server)

### Passos para Execução

#### Opção 1: Usando o Laragon ou XAMPP (Recomendado)
1. Baixe e instale o [Laragon](https://laragon.org/) ou o [XAMPP](https://www.apachefriends.org/).
2. Clone o repositório dentro do diretório root do servidor web:
   * **Laragon**: `C:\laragon\www\cgautomobilismo.com.br`
   * **XAMPP**: `C:\xampp\htdocs\cgautomobilismo.com.br`
3. Inicie o Apache no painel de controle do seu servidor local.
4. Acesse no seu navegador: `http://localhost/cgautomobilismo.com.br` (ou `http://cgautomobilismo.com.br.test` se estiver usando o Laragon com domínios virtuais).

#### Opção 2: Servidor Interno do PHP (Via Terminal)
Se você tem o PHP configurado nas suas variáveis de ambiente:
1. Abra o terminal na pasta raiz do projeto.
2. Execute o comando:
   ```bash
   php -S localhost:8000
   ```
3. Abra seu navegador e acesse: [http://localhost:8000](http://localhost:8000)

---

## 📄 Licença e Contato

Este projeto é de uso exclusivo da administração do **Clube Goianiense de Automobilismo**. 

Para mais informações sobre filiações, cronogramas ou suporte ao portal:
* **Site Oficial:** [cgautomobilismo.com.br](https://cgautomobilismo.com.br)
* **Formulário de Contato:** Visite a seção de contato diretamente no portal.
