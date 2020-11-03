<?php
$app = \MapasCulturais\App::i();
$aldirBlancController = $app->controller('aldirblanc');
$linkSuporte      = isset($aldirBlancController->config['link_suporte']) ? $aldirBlancController->config['link_suporte'] : '';
$termosECondicoes = isset($aldirBlancController->config['privacidade_termos_condicoes']) ? $aldirBlancController->config['privacidade_termos_condicoes'] : $app->createUrl('auth', '', array('termos-e-condicoes'));
$logotipo = isset($aldirBlancController->config['logotipo_instituicao']) ? $aldirBlancController->config['logotipo_instituicao'] : '';?>

</section>

<?php if ($linkSuporte){
    ?>
    <div class="help-section">
        Precisa de ajuda? <a href="https://bit.ly/3hOQfBz" target="_blank"> Clique aqui </a> para falar com nossa equipe de suporte por chat. Ou envie um email para <a href="mailto:suportemapaculturalpa@gmail.com" target="_blank"> suportemapaculturalpa@gmail.com </a>
    </div>
    <?php
}?>

<footer id="main-footer">

    <?php if ($logotipo){
        ?>
       <div class="logo-state">
            <a href="http://www.secult.pa.gov.br/" target="_blank">
                <img src="<?= $logotipo ?>">
            </a>
        </div>
        <?php
    }?>

    <?php if ($termosECondicoes){
        ?>
        <a target="_blank" class="terms-conditions" href="<?= $termosECondicoes; ?> ">
            Politica de Privacidade e termos de condições de uso
        </a>
        <?php
    }?>

    <div class="credits">
        <a href="https://github.com/mapasculturais/mapasculturais" target="_blank">
        Software livre Mapas Culturais
        </a> 
        <span> por </span> 

        <a href="https://hacklab.com.br/" class="hacklab" target="_blank" style="white-space: nowrap;">
            hacklab <span>/</span>
        </a>

        <span> e comunidade </span>
        <!-- <img alt="Mapas Culturais e hacklab/" src="<?php $this->asset('aldirblanc/img/mapas-culturais-hacklab.png') ?>"> -->
    </div>
    <?php  if($aldirBlancController->config['zammad_enable']) {
                ?>
            <script src="<?= $aldirBlancController->config['zammad_src_chat']; ?>"></script>
            <script>
                $(function() {
                new ZammadChat({
                    background: '<?= $aldirBlancController->config['zammad_background_color']; ?>',
                    fontSize: '14px',
                    chatId: 1,
                    title: '<strong>Dúvidas?</strong> Fale conosco'

                });
                });
        </script>
         <style>.zammad-chat{
            z-index: 9999!important;
        }</style>
    
    <?php }?>
</footer>

<?php $this->bodyEnd(); ?>
</body>

</html>