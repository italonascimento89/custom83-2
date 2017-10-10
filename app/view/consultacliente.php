<?php include_once 'app/view/partlals/header.php'; ?>
<body>
  <!--cabecalho-->
  <header id="navHeader">
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="http://www.o-corretor.com">
          <img src="app/assets/imgs/logoLow.png" alt="Custom83.com o maior portal automotivo da paraíba">
        </a>
        <button class="button navbar-burger">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </nav>
  </header>
    <!--FimCabecalho-->
    <div class="columns is-multiline is-gapless" id="columnContainer">
      <div class="column is-2" id="columnMenu">
        <section class="hero">
        <div class="hero-body">
          <div class="container">
            <h1 class="title has-text-white is-6">
              Ítalo Nascimento
            </h1>
            <h2 class="subtitle has-text-white is-6">
              Administrador
            </h2>
          </div>
        </div>
      </section>
    </div>
    <div class="column is-10" id="titleSection">
      <section class="hero" id="infoSection">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            Cadastro
          </h1>
          <h2 class="subtitle">
            Pessoa Juridica
          </h2>
        </div>
      </div>
      </section>
    </div>
    <div class="column is-2" id="menu">
      <nav class="navigation">
        <ul class="mainmenu">
          <li><a href=""><span class="icon"><i class="fa fa-home"></i></span>Dashboard</a></li>
          <li><a href=""><span class="icon"><i class="fa fa-sliders"></i></span>Sliders</a></li>
          <li><a href=""><span class="icon"><i class="fa fa-users"></i></span> Clientes</a>
            <ul class="submenu">
              <li><a href="">Pessoa Fisica</a></li>
              <li><a href="">Pessoa Juridica</a></li>
              <li><a href="">Desabilitados</a></li>
            </ul>
          </li>
          <li><a href=""><span class="icon"><i class="fa fa-university"></i></span> Lojas</a></li>
          <li><a href=""><span class="icon"><i class="fa fa-bars"></i></span>Categorias</a></li>
          <li><a href=""><span class="icon"><i class="fa fa-cart-arrow-down"></i></span>Produtos</a></li>
          <li><a href=""><span class="icon"><i class="fa fa-exclamation-triangle"></i></span> Alertas</a></li>
          <li><a href=""><span class="icon"><i class="fa fa fa-envelope-open"></i></span> Newsletter</a></li>
          <li><a href=""><span class="icon"><i class="fa fa-commenting"></i></span> Depoimentos</a></li>
          <li><a href=""><span class="icon"><i class="fa fa-comments-o"></i></span> Comentarios</a></li>
          <li><a href=""><span class="icon"><i class="fa fa-tags"></i></span> Ofertas</a></li>
          <li><a href=""><span class="icon"><i class="fa fa-address-card"></i></span> Usuarios do sistema</a></li>
        </ul>
      </nav>
    </div>

    <div class="column" id="containerInfoPessoais">
      <div class="column">
          <h1 class="title is-6">Informações Pessoais</h1>
            <div class="field">
            <label class="label" for="categoria ">Categoria</label>
            <div class="control is-expanded">
              <div class="select is-fullwidth">
                <select id="categoria">
                  <option>Loja</option>
                  <option>Prestador de serviço</option>
                </select>
              </div>
            </div>
          </div>
          <div class="field">
            <label class="label" for="cnpj">Cnpj</label>
            <div class="control">
              <input class="input" type="text" placeholder="Informe o Cnpj" id="cnpj">
            </div>
          </div>
          <div class="field">
            <label class="label" for="razaoSocial">Razão Social</label>
            <div class="control">
              <input class="input" type="text" placeholder="Informe a Razão Social" id="Razão Social">
            </div>
          </div>
          <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
              <input class="input" type="text" placeholder="Informe o email" id="email">
            </div>
          </div>
          <div class="field">
            <label class="label" for="site">Site</label>
            <div class="control">
              <input class="input" type="text" placeholder="Informe o site" id="site">
            </div>
          </div>
          <div class="field">
            <label class="label" for="telefoneFixo">Telefone Fixo</label>
            <div class="control">
              <input class="input" type="text" placeholder="Informe o Cnpj" id="telefoneFixo">
            </div>
          </div>
          <div class="field">
            <label class="label" for="telefoneCelular">Telefone Celular</label>
            <div class="control">
              <input class="input" type="text" placeholder="Informe o Cnpj" id="telefoneCelular">
            </div>
          </div>
      </div>
      </div>
      <div class="column" id="containerEndereco">
        <div class="column">
          <h1 class="title is-6">Endereço</h1>
          <div class="field">
            <label class="label" for="cep">Cep</label>
            <div class="control">
              <input class="input" type="text" placeholder="Informe o cep" id="cep">
            </div>
          </div>
          <div class="field">
            <label class="label" for="rua">Rua, Av...</label>
            <div class="control">
              <input class="input" type="text" placeholder="Informe a Rua" id="rua">
            </div>
          </div>
          <div class="field">
            <label class="label" for="complemento">Complemento</label>
            <div class="control">
              <input class="input" type="text" placeholder="Informe o complemento" id="complemento">
            </div>
          </div>
          <div class="field">
            <label class="label" for="numero">Nº</label>
            <div class="control">
              <input class="input" type="text" placeholder="Informe o nº" id="numero">
            </div>
          </div>
          <div class="field">
          <label class="label" for="estado">Estado</label>
          <div class="control is-expanded">
            <div class="select is-fullwidth">
              <select id="estado">
                <option>Paraíba</option>
                <option>Pernambuco</option>
              </select>
            </div>
          </div>
        </div>
        <div class="field">
        <label class="label" for="cidade">Cidade</label>
        <div class="control is-expanded">
          <div class="select is-fullwidth">
            <select id="cidade">
              <option>João Pessoa</option>
              <option>Cabedelo</option>
            </select>
          </div>
        </div>
      </div>
      <div class="field">
      <label class="label" for="bairro">Bairro</label>
      <div class="control is-expanded">
        <div class="select is-fullwidth">
          <select id="bairro">
            <option>Torre</option>
            <option>Centro</option>
            <option>Bancarios</option>
          </select>
        </div>
      </div>
    </div>
    </div>
    </div>
      <div class="column" id="containerConta">
        <div class="column">
          <h1 class="title is-6">Sobre a conta</h1>
          <div class="field">
            <label class="label" for="login">Login</label>
            <div class="control">
              <input class="input" type="text" placeholder="Informe o login" id="login">
            </div>
          </div>
          <div class="field">
            <label class="label" for="senha">Senha</label>
            <div class="control">
              <input class="input" type="text" placeholder="Informe a senha" id="senha">
            </div>
          </div>
          <div class="field">
          <label class="label" for="bairro">Grupo</label>
          <div class="control">
            <div class="select">
              <select id="bairro">
                <option>Ativo</option>
                <option>Inativo</option>
              </select>
            </div>
          </div>
        </div>
        <div class="field">
          <label class="label">informações sigilosas</label>
          <div class="control">
            <textarea class="textarea" placeholder="Textarea"></textarea>
          </div>
        </div>
        <div class="file">
          <label class="file-label">
            <input class="file-input" type="file" name="resume">
            <span class="file-cta">
              <span class="file-icon">
                <i class="fa fa-upload"></i>
              </span>
              <span class="file-label">
                Logomarca
              </span>
            </span>
          </label>
        </div>
        </br>
        <div class="field is-grouped">
          <div class="control">
            <button class="button is-info" type="submit">Cadastrar</button>
          </div>
          <div class="control">
            <button class="button is-link" type="reset">Limpar</button>
          </div>
        </div>
        </div>
      </div>
  </body>
</html>
