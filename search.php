<?php
    // Include the PHP functions to be used on the page 
    include('common.php'); 
	
    // Output header and navigation 
    outputHeader("BasketOverflow - Results");
    outputNavbar();
?>

 <!-- open the body -->
 <?php openBody() ?>

  <!-- ========================= FILTERS ========================= -->
  <div class="row">
      <aside class="col-md-3">
        <div class="card">
          <header class="card-header">
            <h6 class="title text-primary">Component Type</h6>
          </header>
          <div class="card-body">
            <label class="custom-control custom-checkbox">
              <input type="checkbox" checked="" class="custom-control-input">
              <div class="custom-control-label">CPU</div>
            </label>
            <label class="custom-control custom-checkbox">
              <input type="checkbox" checked="" class="custom-control-input">
              <div class="custom-control-label">Motherboard</div>
            </label>
            <label class="custom-control custom-checkbox">
              <input type="checkbox" checked="" class="custom-control-input">
              <div class="custom-control-label">Storage</div>
            </label>
            <label class="custom-control custom-checkbox">
              <input type="checkbox" checked="" class="custom-control-input">
              <div class="custom-control-label">Memory</div>
            </label>
            <label class="custom-control custom-checkbox">
              <input type="checkbox" checked="" class="custom-control-input">
              <div class="custom-control-label">Graphics Card</div>
            </label>
            <label class="custom-control custom-checkbox">
              <input type="checkbox" checked="" class="custom-control-input">
              <div class="custom-control-label">Network Card</div>
            </label>
          </div>
        </div>
      </aside>

      <!-- ========================= RESULTS ========================= -->
      <main class="col-md-9">
        <header class="border-bottom mb-4 pb-3 text-muted">
          <div class="form-inline">
            <select class=" form-control">
              <option>Price ascending</option>
              <option>Price descending</option>
            </select>
          </div>
        </header>

        <!-- ========================= LISTINGS ========================= -->
        <article class="card p-3">
          <div class="row ">
            <!-- image -->
            <a class="col-md-3" href="#"><img class="product-image" src="images/products/p_id_2.webp"></a>
            <!-- title and description -->
            <div class="col-md-6 my-auto">
              <a href="#" class="h5 title">AMD Ryzen 5 3600</a>
              <p>AMD Ryzen™ 5 3600, AM4, Zen 2, 6 Core, 12 Thread, 3.6GHz, 4.2GHz Turbo, 32MB L3, PCIe 4.0, 65W, CPU, +Wraith Stealth</p>
            </div>
            <!-- listing price and add to basket button -->
            <aside class="col-md-3 my-auto">
              <p class="price h3">£170.98</p><br>
              <a href="#" class="btn btn-primary">Add to basket</a>
            </aside>
          </div>
        </article><br>
        
        <article class="card p-3">
          <div class="row ">
            <!-- image -->
            <a class="col-md-3" href="#"><img class="product-image" src="images/products/p_id_1.webp"></a>
            <!-- title and description -->
            <div class="col-md-6 my-auto">
              <a href="#" class="h5 title"> AMD Ryzen 7 3700X</a>
              <p>AMD Ryzen™ 7 3700X, AM4, Zen 2, 8 Core, 16 Thread, 3.6GHz, 4.4GHz Turbo, 32MB L3, PCIe 4.0, 65W,
                CPU,+Wraith Prism</p>
            </div>
            <!-- listing price and add to basket button -->
            <aside class="col-md-3 my-auto">
              <p class="price h3">£287.99</p><br>
              <a href="#" class="btn btn-primary">Add to basket</a>
            </aside>
          </div>
        </article><br>

        <article class="card p-3">
          <div class="row ">
            <!-- image -->
            <a class="col-md-3" href="#"><img class="product-image" src="images/products/p_id_3.webp"></a>
            <!-- title and description -->
            <div class="col-md-6 my-auto">
              <a href="#" class="h5 title">AMD Ryzen Threadripper 3960X</a>
              <p>AMD Ryzen™ Threadripper 3960X, TRX4, Zen 2, 24 Core, 48 Thread, 3.8GHz, 4.5GHz Turbo, PCIe 4.0, 280W, CPU</p>
            </div>
            <!-- listing price and add to basket button -->
            <aside class="col-md-3 my-auto">
              <p class="price h3">£1,249.99</p><br>
              <a href="#" class="btn btn-primary">Add to basket</a>
            </aside>
          </div>
        </article><br>


        <!-- ========================= PAGE NAVIGATION ========================= -->
        <nav>
          <ul class="pagination">
            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>

      </main>


<!-- close body, output the footer, and end html -->
<?php outputFooter() ?>