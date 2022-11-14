<link rel="stylesheet" href="<?php echo assets( 'css', 'sectionFeatures.css' ); ?>">

<?php  
// # Data Initial
$data = array(
  array( 
    'title' => 'Lorem', 
    'bg-image' => 'amortecedor.png', 
    'short-desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, molestiae qui corporis.'
  ),

  array( 
    'title' => 'Lorem', 
    'bg-image' => 'bateria-de-carro-moura.png', 
    'short-desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, molestiae qui corporis.'
  ),

  array( 
    'title' => 'Lorem', 
    'bg-image' => 'oleo-de-motor.png', 
    'short-desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, molestiae qui corporis.'
  )
);

?>

<div class="container px-4 py-3" id="custom-cards">

  <?php foreach ($data as $item): ?>
  <!-- single row -->
  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">

    <!-- single col -->
    <div class="col">

      <!-- card -->
      <div 
        style="background-image: url(<?php echo assets('img/brandings', $item['bg-image']); ?>);"
        class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg card-container"
      >
        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1 card-overlay">
          <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold text-color-primary">
            <?php echo $item['title']; ?>
          </h3>
          
          <ul class="d-flex list-unstyled mt-auto">
            <li class="d-flex align-items-center me-3 text-dark">
              <small>
                <?php echo $item['short-desc']; ?>
              </small>
            </li>
          </ul>
        </div>
      </div>
      <!-- end card -->  

    </div>
    <!-- end col -->

  </div>
  <!-- end row -->
  <?php endforeach; ?>
  
</div>