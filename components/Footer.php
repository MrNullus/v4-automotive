<div class="container">
  <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top page-footer">

    <div class="col mb-3">
      <!-- logo  -->
      <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
        <img 
          class="image rounded-2 logo-footer"
          src="<?php echo assets('img/logo', 'v4automotive.png') ?>" 
          alt="V4 Automotive" 
          aria-label="V4 Automotive" 
        />
      </a>
      <p class="text-muted">
        <strong>&copy; 2022</strong>
      </p>
    </div>

    <div class="col mb-3">
    </div>

    <?php renderComponent( 'FooterContacts' ); ?>
    
  </footer>
</div>
