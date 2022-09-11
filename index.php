<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="application-name" content="Risa Engenharia">
    <meta name="description" content="Risa Engenharia e Segurança do Trabalho" />
    <meta name="author" content="devJoãoVictor" />
    <meta name="keywords" content="risa engenharia, segurança do trabalho, adequações, consultoria, documentações, sobre nós, treinamentos, kit de emergência, kit cipa" />
    <meta name="robots" content="index, nofollow" />
    <title>Contato - Risa Engenharia</title>


    
    
    <link rel="stylesheet" href="../fontawesome/css/all.css" />
    <link rel="stylesheet" href="../css/contato.css" />
    <link rel="stylesheet" href="../css/animacoes.css" />
    

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav id="navigation">
      <div class="wrapper">
        <a class="logo" href="../index.html">
          <img class="logo-inicio fadeDown animate" src="../assets/Risa-logo.png" alt="logo" width="70" height="70">
        </a>

        <div class="menu">
          <ul class="nav-bar fadeDown animate">
            <li>
              <a onclick="closeMenu()" href="adequacoes.html">Adequações</a>
            </li>
            <li><a onclick="closeMenu()" href="consultoria.html">Consultoria</a></li>
            <li><a onclick="closeMenu()" href="documentacoes.html">Documentações</a></li>
            <li><a onclick="closeMenu()" href="treinamentos.html">Treinamentos</a></li>
            <li class="sub-menu">
              <a class="sobre">Sobre nós</a>
              <ul>
                <li><a onclick="closeMenu()" href="historia.html">Historia</a></li>
                <li><a onclick="closeMenu()" href="causa-social.html">Causa social</a></li>
              </ul>
            </li>
          </ul>

          <ul class="social-links">
            <li><a href="contato.html" aria-label="Enviar um email"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="https://wa.me/+5511949207713?text=Olá, Gostaria de Agendar um horario!" target="_blank" aria-label="Enviar uma mensagem via Whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li>
            <li><a href="https://www.instagram.com/engenhariarisa/?hl=bn" target="_blank" aria-label="Visitar o Instagram"><i class="fa-brands fa-instagram"></i></a></li>
          </ul>
        </div>

        <button
          aria-expanded="false"
          aria-label="Abrir menu"
          onclick="openMenu()"
          class="open-menu fadeDown animate"
        >
          <i class="fa-solid fa-bars"></i>
        </button>
        <button
          aria-expanded="true"
          aria-label="Fechar menu"
          onclick="closeMenu()"
          class="close-menu"
        >
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
    </nav>

    <div id="menu-icons">
      <div class="content">
        <div class="navigation fadeDown animate">
          <ul class="icons">
            <li><a href="contato.html" aria-label="Enviar um email"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="https://wa.me/+5511949207713?text=Olá, Gostaria de Agendar um horario!" target="_blank" aria-label="Enviar uma mensagem via Whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li>
            <li><a href="https://www.instagram.com/engenhariarisa/?hl=bn" target="_blank" aria-label="Visitar o Instagram"><i class="fa-brands fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

    <section id="home">
      <div class="wrapper">
        <div class="wrapper-content">
          <div class="contact zoomIn animate">
              <div class="contactInfo">
                  <picture>
                      <span><img class="img-contato animate fadeLeft" src="../assets/Risa.png" alt="Contato Risa Engenharia" width="100%" height="100%"></span>
                  </picture>
              </div>
              <div class="contactForm fadeRight animate">
                  <h2>Envie-nos uma mensagem</h2>
                  <form id="form">
                      <div class="formBox">
                          <div class="inputBox w50">
                              <input type="text" id="nome" name="name" required>
                              <label for="name">Nome</label>
                          </div>
                          <div class="inputBox w50">
                              <input type="email" id="email" name="email" required>
                              <label for="email">Email</label>
                          </div>
                          <div class="inputBox w50">
                              <input type="tel" id="phone" name="tel" required  maxlength="15" pattern="\(\d{2}\)\s*\d{5}-\d{4}">
                              <label for="tel">Telefone</label>
                          </div>
                          <div class="inputBox w50">
                              <input type="text" id="subject" name="subject" required list="sugestaoContato">
                              <label for="assunto">Assunto</label>
                              <datalist id="sugestaoContato">
                                  <option value="Adequações">Adequações</option>
                                  <option value="Consultoria">Consultoria</option>
                                  <option value="Documentações">Documentações</option>
                                  <option value="Treinamento">Treinamento</option>
                                  <option value="Outros">Outros</option>
                              </datalist>
                          </div>
                          <div class="inputBox w100">
                              <textarea id="message" name="message" required></textarea>
                              <label for="mensagem">Mensagem</label>
                          </div>
                          <div class="inputBox btn-enviar">
                              <input id="button" type="submit" disabled="disabled" value="Enviar"><i class="fa-solid fa-paper-plane"></i>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
        </div>
      </div>


      <div id="container">
        <div class="toast">
            <div class="toast-content">
                <i class="fas fa-solid fa-check check"></i>

                <div class="message">
                    <span class="text text-1">Sucesso!</span>
                    <span class="text text-2">Email Enviado.</span>
                </div>
            </div>
            <i class="fa-solid fa-xmark close"></i>

            <div class="progress"></div>
        </div>

    </div>

    </section>

    <section class="background fadeUp animate">
      <div class="bubbles">
          <span style="--i:11;"></span>
          <span style="--i:12;"></span>
          <span style="--i:24;"></span>
          <span style="--i:10;"></span>
          <span style="--i:14;"></span>
          <span style="--i:23;"></span>
          <span style="--i:18;"></span>
          <span style="--i:16;"></span>
          <span style="--i:19;"></span>
          <span style="--i:20;"></span>
          <span style="--i:22;"></span>
          <span style="--i:25;"></span>
          <span style="--i:18;"></span>
          <span style="--i:21;"></span>
          <span style="--i:15;"></span>
          <span style="--i:13;"></span>
          <span style="--i:26;"></span>
          <span style="--i:17;"></span>
          <span style="--i:13;"></span>
          <span style="--i:28;"></span>
      </div>
    </section>

    <script src="../js/main.js"></script>
    <script src="../js/contato.js"></script>
  </body>
</html>
