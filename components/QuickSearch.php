<link rel="stylesheet" href="<?php echo assets( 'css', 'quickSearch.css' ); ?>">

<aside class="box-quick-search">

  <form 
    action="<?php echo url_controllers('QuickSearch'); ?>"
    method="POST"
  >
    <?php if ( !empty($aviso) ): ?>
      <h2 class="heading"> 
        <?php echo $aviso; ?> 
      </h2>
    <?php endif; ?>
    <div class="box-search d-flex justify-content-between align-items-center gap-3">
      
      <input 
        class="input p-2 border w-100" 
        type="search" 
        name="searchInput" 
        id="searchInput" 
        placeholder="O que proucura?" 
      />

      <button class="btn btn-primary btn-search">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
    </div>
  </form>

  <div class="box-search-recents">
    <h4 class="subheading">Buscas recentes</h4>
    <ul class="list-recents">
      <li class="item-recent"><a href="#">Oléos</a></li>
      <li class="item-recent"><a href="#">Bateria de Carro</a></li>
      <li class="item-recent"><a href="#">Parabrisa</a></li>
    </ul>
  </div>

</aside>
