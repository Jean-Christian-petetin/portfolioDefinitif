<!-- Grid for photos -->
            <div class="w3-row-padding" style="margin:0 -16px">
                <div class="w3-row">
                    <?php foreach ($projets as $projets_items): ?>
                        <div class="container w3-col l6">
                            <img src="<?php echo base_url(); ?>assets/img/logoJcDev.png" class="image" style="width:100%">
                            <div class="overlay">
                                <div class="text">
                                    <a href="<?php echo $projets_items['jc_lienProjet']; ?>"><h1><?php echo $projets_items['jc_nomProjet']; ?></h1></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <!-- end photo grid -->
            
            
            
            <?php for ($i = 0; $i < count($projets); $i++) { ?>
                    <div class="w3-half">
                        <?php if ($i % 2 == 0) { ?>
                            <div class="container">
                                <img src="<?php echo base_url(); ?>assets/img/logoJcDev.png" style="width:100%">
                                <div class="overlay">
                                    <div class="text">
                                        <a href="<?php echo $projets['jc_lienProjet']; ?>"><h1><?php echo $projets['jc_nomProjet']; ?></h1></a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>

