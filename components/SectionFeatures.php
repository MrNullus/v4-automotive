<?php  
// # Extendendo Estilos
// extends_styles([ 'sectionFeatures' ]);

// # Data Initial
$data = [
  [
    'title' => 'Amortecedores', 
    'bg-image' => 'amortecedor.png', 
    'short-desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, molestiae qui corporis.'
  ],

  [
    'title' => 'Baterias de Carro Moura', 
    'bg-image' => 'bateria-de-carro-moura.png', 
    'short-desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, molestiae qui corporis.'
  ],

  [
    'title' => 'Oleos de motor', 
    'bg-image' => 'oleo-de-motor.png', 
    'short-desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, molestiae qui corporis.'
  ]
];

?>

<div class="container custom-cards">

  <header class="section-header">
    <h3 class="heading">Em alta</h3>
  </header>

  <div class="wrapper">
    <?php foreach ($data as $item): ?>
    <!-- single row -->
    <div class="row py-3">

      <!-- single col -->
      <div class="col">

        <!-- card -->
        <div 
          style="background-image: url(<?php echo assets('img/brandings', $item['bg-image']); ?>);"
          class="card card-cover overflow-hidden rounded-4 shadow-lg card-container"
        >
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1 card-overlay">
            <h3 class="mb-4 display-6 lh-1 fw-bold text-color-primary">
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
  
</div>