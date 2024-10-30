<div class="metabox-holder has-right-sidebar" id="poststuff">
    <div id="side-info-column" class="inner-sidebar">
        <div class="postbox">
            <h3>About <?php echo $pluginData['name']; ?></h3>
            <div class="inside">
                <center>
                    <img width="200" src="<?php echo plugins_url($pluginData['slug'] . '/images/logo.jpg'); ?>"
                         alt="">
                </center>
                <p>Name : <?php echo $pluginData['name']; ?></p>
                <p>Author : <a target="_blank" href="http://www.easantos.net">Easantos</a></p>
                <p>Website : <a href="http://www.easantos.net" target="_blank">www.easantos.net</a></p>
                <p>Email : <a href="mailto:suporte@easantos.net" target="_blank">suporte@easantos.net</a></p>
            </div>
        </div>
        <div class="postbox">
            <h3>About Easantos</h3>
            <div class="inside">
                <center><img src="http://www.easantos.net/logo.png"></center>
                <p><strong>Easantos</strong> provides a full range of WordPress web development services,
                    including
                    theme implementation and plugin development at competitive prices.</p>
            </div>
        </div>
        <div class="postbox">
            <h3>Our list of plugins</h3>
            <?php
            $ourPlugins = array(
                array(
                    'slug' => 'the-content-index',
                    'name' => 'The Content Index',
                ),
                array(
                    'slug' => 'category-articles-list',
                    'name' => 'Category Articles List',
                ),
                array(
                    'slug' => 'import-social-statistics',
                    'name' => 'Import Social Statistics',
                ),
                array(
                    'slug' => 'content-evaluation',
                    'name' => 'Content Evaluation',
                ),
                array(
                    'slug' => 'a-z',
                    'name' => 'A-Z',
                ),
            );
            ?>
            <div class="inside">
                <ul>
                    <?php foreach ($ourPlugins as $plugin) { ?>
                        <li>
                            <img
                                src="<?php echo plugins_url($pluginData['slug'] . '/images/common/' . $plugin['slug'] . '.png'); ?>"
                                alt="<?php echo $plugin['name']; ?>">
                            <a target="_blank"
                               href="https://wordpress.org/plugins/<?php echo $plugin['slug']; ?>/"><?php echo $plugin['name']; ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>