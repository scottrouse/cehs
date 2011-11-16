<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
?>

<div class="um_standard_header">
            <div id="accessibenav">
                Accessible Navigation. Go to: <a href="#mainnav">Navigation</a>
                <a href="#content">Main Content</a>
                <a href="#footercontent">Footer</a>
            </div>
            <div id="logo">
                <a href="http://www.umt.edu/" target="_parent" title="The University of Montana Homepage"><img alt="The University of Montana" src="/sites/all/themes/cehs/images/umlogo.png" title="UM Logo"></a>
            </div>
            <div id="TopSearch">
                <div id="navrightlinks_wrap">
                    <ul>
                        <li>
                            <a href="http://www.umt.edu/home/atoz/">A to Z Index</a>
                        </li>
                        <li>
                            <a class="last" href="http://www.umt.edu/home/directory/">Directory</a>
                        </li>
                        <li>
                            <a class="header_last" href="http://www.umt.edu/">UM Home</a>
                        </li>
                    </ul>
                </div>
                <div class="search">
                    <form accept-charset="utf-8" action="http://www.umt.edu/home/search/" id="cse-search-box" method="get">
                        <label for="q">
                            Search UM
                        </label>
                        <input class="gradient_button search_input" id="q" name="q" onblur="resetText(this);" onfocus="clearBox(this);" placeholder="Search UM" value="Search UM" type="text"><input name="cx" value="004842374792843146445:2r-2xi1nlr4" type="hidden"><input name="cof" value="FORID:10" type="hidden"><input name="ie" value="UTF-8" type="hidden"><input class="gradient_button search_button" name="sa" value="Go" type="submit">
                    </form>
                </div>
            </div>
        </div>

<div id="page-wrapper"><div id="page">
  <div id="branding-header">

  	
  	<div id="branding-college">
  		<a href="http://www.health.umt.edu/" title="The College of Health Professions and Biomedical Sciences">
  			<img src="/<?php print $directory; ?>/images/chp.png" alt="The College of Health Professions and Biomedical Sciences" width="1000" height="43" />
  		</a>
  	</div>
  	
  	<div id="branding-department">
  		<div id="bmed-text">
  			<a href="http://www.health.umt.edu/schools/biomed/" title="The Department of Biomedical and Pharmaceutical Sciences">
  				<img src="/<?php print $directory; ?>/images/bmed-text.png" alt="The Department of Biomedical and Pharmaceutical Sciences" width="528" height="24" />
  			</a>
  		</div>
  		<div id="bmed-logo">
  			<a href="http://www.health.umt.edu/schools/biomed/" title="The Department of Biomedical and Pharmaceutical Sciences">
  				<img src="/<?php print $directory; ?>/images/bmed-logo.png" alt="The Department of Biomedical and Pharmaceutical Sciences" width="78" height="78" />
  			</a>
  		</div>
  	</div>
  </div>
  
  
  <div id="header"><div class="section clearfix">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan">
        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name"><strong>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </strong></div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div><!-- /#name-and-slogan -->
    <?php endif; ?>

    <?php print theme('links__system_secondary_menu', array(
      'links' => $secondary_menu,
      'attributes' => array(
        'id' => 'secondary-menu',
        'class' => array('links', 'inline', 'clearfix'),
      ),
      'heading' => array(
        'text' => $secondary_menu_heading,
        'level' => 'h2',
        'class' => array('element-invisible'),
      ),
    )); ?>

    <?php print render($page['header']); ?>

  </div></div><!-- /.section, /#header -->

  <div id="main-wrapper"><div id="main" class="clearfix<?php if ($main_menu || $page['navigation']) { print ' with-navigation'; } ?>">

    <div id="content" class="column"><div class="section">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if ($tabs = render($tabs)): ?>
        <div class="tabs"><?php print $tabs; ?></div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content_top']); ?>
      <?php print render($page['content']); ?>
      <?php print render($page['content_bottom']); ?>
      <?php print $feed_icons; ?>
    </div></div><!-- /.section, /#content -->

    <?php if ($page['navigation'] || $main_menu): ?>
      <div id="navigation"><div class="section clearfix">

        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu',
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>

        <?php print render($page['navigation']); ?>

      </div></div><!-- /.section, /#navigation -->
    <?php endif; ?>

    <?php print render($page['sidebar_first']); ?>

    <?php print render($page['sidebar_second']); ?>

  </div></div><!-- /#main, /#main-wrapper -->

  <?php print render($page['footer']); ?>

</div></div><!-- /#page, /#page-wrapper -->

<?php print render($page['bottom']); ?>

<div class="um_standard_footer" id="footercontent">
            <ul>
                <li>
                    <a href="http://www.umt.edu/">The University of Montana</a>
                </li>
                <li>
                    Missoula, MT
                </li>
                <li>
                    <a href="http://www.umt.edu/home/comments">Contact UM Switchboard</a>
                </li>
                <li class="last">
                    <a href="http://www.umt.edu/home/accessibility">Accessibility</a>
                </li>
            </ul>
        </div>
