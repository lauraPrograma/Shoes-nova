<?php
$this->layout("product",["categories"=> $categories]);

//var_dump($categories);

?>
    <div class="row">
                    
                    <div class="Portifolio">
                     <?php 
                     foreach($stores as $store){
                     
                     ?>
                        <div class="portfolio-item1">
                            <a class="portfolio-link1" >
                                <div class="portfolio-hover1">
                                    <div class="portfolio-hover-content1"><i class="port1"></i></div>
                                </div>
                               
                            </a>
                            <div class="portfolio-caption1">
                                <div class="portfolio-heading1"><?= $store->name?></div>
                                <div class="text-muted1"> R$<?= moneyFormat( $store->price)?></div>
                                <div class="text-muted1">ver</div>

                            </div>
                            <?php
                               }
                               ?>

                        </div>
                        
    
                    </div>