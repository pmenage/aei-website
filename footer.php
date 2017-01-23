<?php wp_footer(); ?>

        <div class="devis banner-red banner">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-12">
                        <h2>Vous avez un projet ?</h2>
                        <p class="demande">
                            Faites une demande de devis, c'est rapide et gratuit !<br>
                            <button class="btn btn-default btn-lg">Demandez un devis</button>
                        </p>
                    </div>
                </div>
                
                <div class="row"> <!-- style="display:none;"> -->
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Demande de devis</h2>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="nom" class="col-sm-2 control-label">Nom</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nom" placeholder="Votre nom">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="email" placeholder="Votre email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="demande" class="col-sm-2 control-label">Demande</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" rows="5" id="demande" placeholder="Votre demande"></textarea> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="budget" class="col-sm-2 control-label">Budget</label>
                                <div class="col-sm-8">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsbudget" id="optionsbudget1" value="optionbudget1">
                                            Moins de 2000 euros
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsbudget" id="optionsbudget2" value="optionbudget2">
                                            Entre 2000 et 5000 euros
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsbudget" id="optionsbudget3" value="optionbudget3">
                                            Plus de 5000 euros
                                        </label>
                                    </div>
                        
                                </div>
                            </div><div class="form-group">
                                <label for="Délai" class="col-sm-2 control-label">Délai</label>
                                <div class="col-sm-8">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsdelais" id="optionsdelais1" value="optiondelai1">
                                            Moins de 3 mois
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsdelais" id="optionsdelais2" value="optiondelai2">
                                            Entre 3 et 6 mois
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsdelais" id="optionsdelai3" value="optiondelai3">
                                            Plus de 6 mois
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsdelais" id="optionsdelai4" value="optiondelai4">
                                            Le délai n'est pas important
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default btn-lg">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="banner-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <p>
                            <?php 
                            $the_query = new WP_Query(['pagename' => 'footer']);
                            $the_query->the_post();
                            the_content();
                            wp_reset_postdata();
                            ?>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p>À lire sur le blog d'AEI</p>
                        <?php
                        $the_query = new WP_Query(['posts_per_page' => 3]);
                        if ($the_query->have_posts()):
                            ?>
                            <ul>
                            <?php
                            while ($the_query->have_posts()): 
                                $the_query->the_post(); 
                                ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                                    <small><?php the_date(); ?></small></li>
                            <?php
                            endwhile;
                            ?>
                            </ul>
                            <?php
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php
                        $the_query = new WP_Query(['pagename' => 'footer']);
                        $the_query->the_post();
                        ?>
                        <div><?php the_field('slogan_partenaires'); ?></div>
                        <div class="logos_partenaires"><?php the_field('logos_partenaires_aei'); ?></div>
                        <?php
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>