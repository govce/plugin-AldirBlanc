<?php
  $app = \MapasCulturais\App::i();
  $aldirBlancUrl = $app->createUrl('aldirblanc','inicio');
  $auxilioSetorEventosUrl = $app->createUrl('opportunity','single', [2852]);
?>
<head>
  <style>
    section {
      max-width: 800px;
      margin: 0 auto;
    }

    h1 {
      color: #cc0033 !important;
    }

    a {
      font-weight: 0;
    }

    #main-footer {
      bottom: 0;
    }
  </style>
</head>

<body>
<section id="main-section" class="cleafix">
  <section class="lab-main-content">
    <h1>INSCRIÇÕES PARA LEI ALDIR BLANC <strong>ENCERRADAS</strong></h1>
    <p> Para acesso o formulário de inscrição e o resultado <a href="<?=$aldirBlancUrl?>">clique aqui </a></p>
    <br>
    <h2>AUXILIO FINANCEIRO AOS PROFISSIONAIS DO SETOR DE EVENTOS DO CEARÁ</h2>
    <p>
      Ação do Governo do Estado do Ceará que tem por objetivo conceder aos trabalhadores e trabalhadoras do setor de eventos um auxílio financeiro. Faz parte de um pacote de ações para socorrer o setor de eventos no Estado em meio à pandemia da Covid-19.
    </p>
    <p>
      O auxílio será pago em duas parcelas de R$ 500, mediante cadastro dos profissionais junto à Secretaria da Cultura do Estado, através do Mapa Cultural do Ceará. Cerca de 10 mil profissionais, como músicos, humoristas e técnicos de som, deverão ser beneficiados. Ao todo R$ 10 milhões serão investidos pelo Estado para transferência dessa renda. Estão inclusos músicos, humoristas, profissionais de circo, técnicos de som, luz e imagem, montadores de palcos, etc.
    </p>
    <p style="text-align:center">
      <a href="<?=$auxilioSetorEventosUrl?>" style="color:#FFF"> 
      <div class="btn" style="display: block; color: #FFF; width: 50%; margin: auto;">Solicite seu auxílio</div> </a>
    </p>
    <p style="text-align:center">
      MAIS INFORMAÇÕES: <a target="_blank" href="http://auxiliosetoreventos.secult.ce.gov.br/">auxiliosetoreventos.secult.ce.gov.br/</a>
    </p>
    <p>
      Siga nossas redes sociais: <br/>
      Facebook: <a target="_blank" href="https://www.facebook.com/secultceara/"> https://www.facebook.com/secultceara/ </a><br/>
      Instagram: <a target="_blank" href="https://www.instagram.com/secultceara/"> https://www.instagram.com/secultceara/</a>
    </p>
  </section>
</section>
</body>