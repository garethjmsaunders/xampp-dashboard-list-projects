<!-- 
1. Navigate to xampp/dashboard
2. Change index.html to index.php
3. Insert the following code before the Community H3 heading; this code:
<div class="row">
  <div class="large-12 columns">
    <h3>Community</h3>
  </div>
</div>
 -->
<div class="row">
  <div class="large-12 columns">
    <h3>Projects</h3>
  </div>
</div>
<div class="row">
  <div class="large-12 columns">
    <?php
      // Get the directory one level up
      $parent_dir = dirname(__DIR__);

      // Scan the parent directory for directories
      $dirs = scandir($parent_dir);

      // Filter out '.' and '..', keep only directories, and exclude 'dashboard', 'webalizer', and 'xampp'
      $filtered_dirs = array_filter($dirs, function ($dir) use ($parent_dir) {
          return $dir !== '.' && $dir !== '..' && is_dir($parent_dir . '/' . $dir) &&
                 $dir !== 'dashboard' && $dir !== 'webalizer' && $dir !== 'xampp';
      });

      // Output the directory names in an unordered list with links
      echo '<ul>';
      foreach ($filtered_dirs as $dir) {
          echo '<li><a href="../' . $dir . '/">' . $dir . '</a></li>';
      }
      echo '</ul>';
    ?>
  </div>
</div>