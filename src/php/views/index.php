<?php defined('safe_access') or die('Restricted access!'); ?>
<div id="page_content">
    <div id="page_content_inner">
        <!-- statistics (small charts) -->
        <div class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>
            <div>
                <div class="md-card">
                    <div class="md-card-content">
                        <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_visitors peity_data">5,3,9,6,5,9,7</span></div>
                        <span class="uk-text-muted uk-text-small">Unique Customer</span>
                        <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>793</noscript></span></h2>
                    </div>
                </div>
            </div>
            <div>
                <div class="md-card">
                    <div class="md-card-content">
                        <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_sale peity_data">2,1,3,4,0,2,2,5,4,6</span></div>
                        <span class="uk-text-muted uk-text-small">Returned Orders</span>
                        <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>297</noscript></span></h2>
                    </div>
                </div>
            </div>
            <div>
                <div class="md-card">
                    <div class="md-card-content">
                        <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_sale peity_data">2,3,2,7,8,7,2,3,5,4</span></div>
                        <span class="uk-text-muted uk-text-small">Returned Sales</span>
                        <h2 class="uk-margin-remove">$<span class="countUpMe">0<noscript>180515</noscript></span></h2>
                    </div>
                </div>
            </div>
            <!-- <div>
                <div class="md-card">
                    <div class="md-card-content">
                        <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_sale peity_data">0,2,1,3,4,1,2,1,4,7</span></div>
                        <span class="uk-text-muted uk-text-small">Discounted</span>
                        <h2 class="uk-margin-remove">$<span class="countUpMe">0<noscript>566750</noscript></span></h2>
                    </div>
                </div>
            </div> -->
            <div>
                <div class="md-card">
                    <div class="md-card-content">
                        <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data">6/100</span></div>
                        <span class="uk-text-muted uk-text-small">Percentage Returned Orders</span>
                        <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>6</noscript></span>%</h2>
                    </div>
                </div>
            </div>
            <!-- <div>
                <div class="md-card">
                    <div class="md-card-content">
                        <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_live peity_data">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span></div>
                        <span class="uk-text-muted uk-text-small">Visitors (live)</span>
                        <h2 class="uk-margin-remove" id="peity_live_text">46</h2>
                    </div>
                </div>
            </div> -->
        </div>

        <!-- superstore chart -->
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-1-1">
                <div class="md-card">
                    <div class="md-card-toolbar">
                        <h3 class="md-card-toolbar-heading-text">
                            Linked graphics, Metrics per Month
                        </h3>
                    </div>
                    <div class="md-card-content">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div id="mg_superstore_chart_id" class="mGraph"></div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div id="mg_superstore_profit_id" class="mGraph"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-grid">
            <div class="uk-width-large-2-3">
                <div class="md-card">
                    <div class="md-card-content">
                        <h4 class="heading_c uk-margin-bottom">State with Most Returned Orders</h4>
                        <div id="chartist_distributed_series" class="chartist"></div>
                    </div>
                </div>
            </div>
            <div class="uk-width-medium-1-3">
                <div class="md-card">
                    <div class="md-card-toolbar">
                        <h3 class="md-card-toolbar-heading-text">
                            Returned Orders Per Customer Segment
                        </h3>
                    </div>
                    <div class="md-card-content">
                        <div id="c3_donut_category" class="c3chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-large-1-2">
                <div class="md-card">
                    <div class="md-card-content">
                        <h4 class="heading_c uk-margin-bottom"> Percentage Orders Returned per Quantity</h4>
                        <div id="c3_chart_scatter" class="c3chart"></div>
                    </div>
                </div>
            </div>
            <div class="uk-width-large-1-2">
                <div class="md-card">
                    <div class="md-card-toolbar">
                        <div class="md-card-toolbar-actions">
                            <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                            <i class="md-icon material-icons">&#xE5D5;</i>
                        </div>
                        <h3 class="md-card-toolbar-heading-text">
                            Returned Orders by Segment Chart
                        </h3>
                    </div>
                    <div class="md-card-content">
                        <div id="c3_chart_category" class="c3chart"></div>
                        <div class="md-card-fullscreen-content">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- large chart -->

    </div>
</div>

<!-- secondary sidebar -->
<aside id="sidebar_secondary" class="tabbed_sidebar">
    <ul class="uk-tab uk-tab-icons uk-tab-grid" data-uk-tab="{connect:'#dashboard_sidebar_tabs', animation:'slide-horizontal'}">
        <li class="uk-active uk-width-1-3"><a href="#"><i class="material-icons">&#xE422;</i></a></li>
        <li class="uk-width-1-3 chat_sidebar_tab"><a href="#"><i class="material-icons">&#xE0B7;</i></a></li>
        <li class="uk-width-1-3"><a href="#"><i class="material-icons">&#xE8B9;</i></a></li>
    </ul>

    <div class="scrollbar-inner">
        <ul id="dashboard_sidebar_tabs" class="uk-switcher">
            <li>
                <div class="timeline timeline_small uk-margin-bottom">
                    <div class="timeline_item">
                        <div class="timeline_icon timeline_icon_success"><i class="material-icons">&#xE85D;</i></div>
                        <div class="timeline_date">
                            <?php $moment = new Moment\Moment();
                            echo $moment->startOf('month')->addDays(8)->format('d'); ?>
                            <span><?php $moment = new Moment\Moment();
                                    echo $moment->format('M'); ?></span>
                        </div>
                        <div class="timeline_content">Created ticket <a href="#"><strong>#3289</strong></a></div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_icon timeline_icon_danger"><i class="material-icons">&#xE5CD;</i></div>
                        <div class="timeline_date">
                            <?php $moment = new Moment\Moment();
                            echo $moment->startOf('month')->addDays(14)->format('d'); ?>
                            <span><?php $moment = new Moment\Moment();
                                    echo $moment->format('M'); ?></span>
                        </div>
                        <div class="timeline_content">Deleted post <a href="#"><strong><?php echo $faker->sentence(6); ?></strong></a></div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_icon"><i class="material-icons">&#xE410;</i></div>
                        <div class="timeline_date">
                            <?php $moment = new Moment\Moment();
                            echo $moment->startOf('month')->addDays(18)->format('d'); ?>
                            <span><?php $moment = new Moment\Moment();
                                    echo $moment->format('M'); ?></span>
                        </div>
                        <div class="timeline_content">
                            Added photo
                            <div class="timeline_content_addon">
                                <img src="<?php echo $img_path ?>/gallery/Image16.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_icon timeline_icon_primary"><i class="material-icons">&#xE0B9;</i></div>
                        <div class="timeline_date">
                            <?php $moment = new Moment\Moment();
                            echo $moment->startOf('month')->addDays(20)->format('d'); ?>
                            <span><?php $moment = new Moment\Moment();
                                    echo $moment->format('M'); ?></span>
                        </div>
                        <div class="timeline_content">
                            New comment on post <a href="#"><strong><?php echo $faker->sentence(4); ?></strong></a>
                            <div class="timeline_content_addon">
                                <blockquote>
                                    <?php echo $faker->sentence(10); ?>&hellip;
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_icon timeline_icon_warning"><i class="material-icons">&#xE7FE;</i></div>
                        <div class="timeline_date">
                            <?php $moment = new Moment\Moment();
                            echo $moment->startOf('month')->addDays(28)->format('d'); ?>
                            <span><?php $moment = new Moment\Moment();
                                    echo $moment->format('M'); ?></span>
                        </div>
                        <div class="timeline_content">
                            Added to Friends
                            <div class="timeline_content_addon">
                                <ul class="md-list md-list-addon">
                                    <li>
                                        <div class="md-list-addon-element">
                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt="" />
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><?php echo $faker->firstNameFemale; ?> <?php echo $faker->lastName; ?></span>
                                            <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(4); ?></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <ul class="md-list md-list-addon chat_users">
                    <li>
                        <div class="md-list-addon-element">
                            <span class="element-status element-status-success"></span>
                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt="" />
                        </div>
                        <div class="md-list-content">
                            <div class="md-list-action-placeholder"></div>
                            <span class="md-list-heading"><?php echo $faker->firstNameFemale;
                                                            echo ' ' . $faker->lastName; ?></span>
                            <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(2); ?></span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-addon-element">
                            <span class="element-status element-status-success"></span>
                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_09_tn.png" alt="" />
                        </div>
                        <div class="md-list-content">
                            <div class="md-list-action-placeholder"></div>
                            <span class="md-list-heading"><?php echo $faker->firstNameFemale;
                                                            echo ' ' . $faker->lastName; ?></span>
                            <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(2); ?></span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-addon-element">
                            <span class="element-status element-status-danger"></span>
                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_04_tn.png" alt="" />
                        </div>
                        <div class="md-list-content">
                            <div class="md-list-action-placeholder"></div>
                            <span class="md-list-heading"><?php echo $faker->firstNameFemale;
                                                            echo ' ' . $faker->lastName; ?></span>
                            <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(2); ?></span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-addon-element">
                            <span class="element-status element-status-warning"></span>
                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_07_tn.png" alt="" />
                        </div>
                        <div class="md-list-content">
                            <div class="md-list-action-placeholder"></div>
                            <span class="md-list-heading"><?php echo $faker->firstNameFemale;
                                                            echo ' ' . $faker->lastName; ?></span>
                            <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(2); ?></span>
                        </div>
                    </li>
                </ul>
                <div class="chat_box_wrapper chat_box_small" id="chat">
                    <div class="chat_box chat_box_colors_a">
                        <div class="chat_message_wrapper">
                            <div class="chat_user_avatar">
                                <img class="md-user-image" src="assets/img/avatars/avatar_11_tn.png" alt="" />
                            </div>
                            <ul class="chat_message">
                                <li>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eum? </p>
                                </li>
                                <li>
                                    <p> Lorem ipsum dolor sit amet.<span class="chat_message_time">13:38</span> </p>
                                </li>
                            </ul>
                        </div>
                        <div class="chat_message_wrapper chat_message_right">
                            <div class="chat_user_avatar">
                                <img class="md-user-image" src="assets/img/avatars/avatar_03_tn.png" alt="" />
                            </div>
                            <ul class="chat_message">
                                <li>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem delectus distinctio dolor earum est hic id impedit ipsum minima mollitia natus nulla perspiciatis quae quasi, quis recusandae, saepe, sunt totam.
                                        <span class="chat_message_time">13:34</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="chat_message_wrapper">
                            <div class="chat_user_avatar">
                                <img class="md-user-image" src="assets/img/avatars/avatar_11_tn.png" alt="" />
                            </div>
                            <ul class="chat_message">
                                <li>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ea mollitia pariatur porro quae sed sequi sint tenetur ut veritatis.
                                        <span class="chat_message_time">23 Jun 1:10am</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="chat_message_wrapper chat_message_right">
                            <div class="chat_user_avatar">
                                <img class="md-user-image" src="assets/img/avatars/avatar_03_tn.png" alt="" />
                            </div>
                            <ul class="chat_message">
                                <li>
                                    <p> Lorem ipsum dolor sit amet, consectetur. </p>
                                </li>
                                <li>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        <span class="chat_message_time">Friday 13:34</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <h4 class="heading_c uk-margin-small-bottom uk-margin-top">General Settings</h4>
                <ul class="md-list">
                    <li>
                        <div class="md-list-content">
                            <div class="uk-float-right">
                                <input type="checkbox" data-switchery data-switchery-size="small" checked id="settings_site_online" name="settings_site_online" />
                            </div>
                            <span class="md-list-heading">Site Online</span>
                            <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-content">
                            <div class="uk-float-right">
                                <input type="checkbox" data-switchery data-switchery-size="small" id="settings_seo" name="settings_seo" />
                            </div>
                            <span class="md-list-heading">Search Engine Friendly URLs</span>
                            <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-content">
                            <div class="uk-float-right">
                                <input type="checkbox" data-switchery data-switchery-size="small" id="settings_url_rewrite" name="settings_url_rewrite" />
                            </div>
                            <span class="md-list-heading">Use URL rewriting</span>
                            <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                        </div>
                    </li>
                </ul>
                <hr class="md-hr">
                <h4 class="heading_c uk-margin-small-bottom uk-margin-top">Other Settings</h4>
                <ul class="md-list">
                    <li>
                        <div class="md-list-content">
                            <div class="uk-float-right">
                                <input type="checkbox" data-switchery data-switchery-size="small" data-switchery-color="#7cb342" checked id="settings_top_bar" name="settings_top_bar" />
                            </div>
                            <span class="md-list-heading">Top Bar Enabled</span>
                            <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-content">
                            <div class="uk-float-right">
                                <input type="checkbox" data-switchery data-switchery-size="small" data-switchery-color="#7cb342" id="settings_api" name="settings_api" />
                            </div>
                            <span class="md-list-heading">Api Enabled</span>
                            <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-content">
                            <div class="uk-float-right">
                                <input type="checkbox" data-switchery data-switchery-size="small" data-switchery-color="#d32f2f" id="settings_minify_static" checked name="settings_minify_static" />
                            </div>
                            <span class="md-list-heading">Minify JS files automatically</span>
                            <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <button type="button" class="chat_sidebar_close uk-close"></button>
    <div class="chat_submit_box">
        <div class="uk-input-group">
            <input type="text" class="md-input" name="submit_message" id="submit_message" placeholder="Send message">
            <span class="uk-input-group-addon">
                <a href="#"><i class="material-icons md-24">&#xE163;</i></a>
            </span>
        </div>
    </div>

</aside>
<!-- secondary sidebar end -->