<div class="bg-[#4630C2]">
  <div class="container flex flex-col mx-auto py-5 text-white align-center md:px-4 md:flex-row md:justify-between">
    <div class="align-center justify-center flex gap-2 mb-3 mx-auto p-4 md:m-0 md:p-0">
      <div class="flex flex-col align-center justify-center">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/icon-img.png" alt="">
      </div>
      <span class="flex-1">Rua José Vieira Martins, 270 | Pedreira, São Paulo/SP - Brasil</span>
    </div>

    <div class="flex flex-col gap-4 md:flex-row md:gap-12">
      <a href="#" class="flex align-center justify-center gap-2">
        <div><img src="<?= get_template_directory_uri(); ?>/assets/img/icon-tel.png" alt=""></div>
        <span>+55 (11) 5613-0200</span>
      </a>

      <a href="#" class="flex align-center justify-center gap-2">
        <div><img src="<?= get_template_directory_uri(); ?>/assets/img/icon-mail.png" alt=""></div>
        <span>contato@pedreira.org</span>
      </a>
    </div>
  </div>
</div>

<footer>
  <div class="container mx-auto">
    <div class="flex flex-wrap w-full gap-4 justify-between py-10 md:py-20 md:border-y md:border-[#042552]/[0.1] md:border-solid">

      <div class="w-full md:w-4/12 px-4 text-center md:text-start">
        <img class="mx-auto md:ml-0 mb-8 md:mb-12" src="<?= get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
        <div class="flex flex-wrap gap-3 align-center ">
          <div class="w-[142px] mx-auto md:mx-0">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/img-footer.png" alt="">
          </div>
          <div class="md:max-w-36">
            <p class="text-sm text-yant text-c-gray-400">4 anos consecutivos entre as 100 melhores ONG's do Brasil </p>
          </div>
        </div>
      </div>

      <div class="w-2/12 hidden md:block">
        <h3 class="font-yant font-bold text-[#4630C2] text-base mb-6">Sobre</h3>
        <ul>
          <li class="mb-4"><a href="#" class="font-manrope text-[#042552] text text-sm">O CEAP</a></li>
          <li class="mb-4"><a href="#" class="font-manrope text-[#042552] text text-sm">Diretoria e Conselho</a></li>
          <li class="mb-4"><a href="#" class="font-manrope text-[#042552] text text-sm">Transparência e Integridade</a></li>
          <li class="mb-4"><a href="#" class="font-manrope text-[#042552] text text-sm">Premiações e reconhecimentos</a></li>
        </ul>
      </div>

      <div class="w-2/12 hidden md:block">
        <h3 class="font-yant font-bold text-[#4630C2] text-base mb-6">Cursos</h3>
        <ul>
          <li class="mb-4"><a href="#" class="font-manrope text-[#042552] text text-sm">Modelo Educativo</a></li>
          <li class="mb-4"><a href="#" class="font-manrope text-[#042552] text text-sm">Ensino Complementar Intensivo</a></li>
          <li class="mb-4"><a href="#" class="font-manrope text-[#042552] text text-sm">Cursos Técnicos</a></li>
          <li class="mb-4"><a href="#" class="font-manrope text-[#042552] text text-sm">Cursos Livres</a></li>
        </ul>
      </div>

      <div class="w-full md:w-2/12 text-center md:text-start">
        <div class="hidden md:block">
          <h3 class="font-yant font-bold text-[#4630C2] mb-2 "><a href="#">Eventos</a></h3>
          <h3 class="font-yant font-bold text-[#4630C2] mb-2"><a href="#">Radar</a></h3>
          <h3 class="font-yant font-bold text-[#4630C2] mb-2"><a href="#">Colabore</a></h3>
        </div>

        <div class="py-8 border-y border-[#042552]/[0.1] border-solid md:border-0">
          <p class="font-yant font-bold text-[#4630C2] text-base mb-6">Acompanhe nas Redes</p>
          <div class="flex gap-[20px] justify-center md:justify-start">
            <a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/img/instagram.png" alt="Rede social Instagram " width="30" height="30"></a>
            <a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/img/linkedin.png" alt="Rede social linkedin" width="30" height="30"></a>
            <a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/img/facebook.png" alt="Rede social facebook" width="30" height="30"></a>
            <a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/img/twitter.png" alt="Rede social twitter" width="30" height="30"></a>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center py-8 text-xs md:text-sm font-manrope text-[#042552] px-4">
      <p class="mb-2"> © Copyright © 2024 Centro Educacional Assistencial Profissionalizante </p>
      <p class="mb-2"> Desenvolvido por aureadesign.co </p>
      <p class=""> Encarregado de Dados por Mknod Serviços e Comércio de Informática - Contato: dpo@pedreira.org </p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>