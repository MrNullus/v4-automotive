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
        placeholder="O que deseja?" 
      />

      <button class="btn btn-primary">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
    </div>
  </form>

  <div class="box-search-recents">
    <h4 class="subheading">Buscas recentes</h4>
    <ul class="list-recents">
      <li class="item-recent"><a href="#">Item 1</a></li>
      <li class="item-recent"><a href="#">Item 2</a></li>
      <li class="item-recent"><a href="#">Item 3</a></li>
    </ul>
  </div>

</aside>
