<?php return array (
  'index' => 
  array (
    'file' => 'index',
    'url' => 'index.html',
    'title' => 'Index file',
    'titles' => 
    array (
      0 => 
      array (
        0 => 'Index file',
        1 => 
        array (
          0 => 
          array (
            0 => 'Including',
            1 => 
            array (
            ),
          ),
        ),
      ),
    ),
    'ctime' => 1372853573,
    'depends' => 
    array (
      0 => 'otherpage',
      1 => 'subdir/test',
    ),
  ),
  'otherpage' => 
  array (
    'file' => 'otherpage',
    'url' => 'otherpage.html',
    'title' => 'Other page',
    'titles' => 
    array (
      0 => 
      array (
        0 => 'Other page',
        1 => 
        array (
          0 => 
          array (
            0 => 'First title',
            1 => 
            array (
            ),
          ),
          1 => 
          array (
            0 => 'Second title',
            1 => 
            array (
            ),
          ),
        ),
      ),
    ),
    'ctime' => 1372854532,
    'depends' => 
    array (
    ),
  ),
  'subdir/test' => 
  array (
    'file' => 'subdir/test',
    'url' => 'subdir/test.html',
    'title' => 'Subdir testing',
    'titles' => 
    array (
      0 => 
      array (
        0 => 'Subdir testing',
        1 => 
        array (
        ),
      ),
    ),
    'ctime' => 1372849301,
    'depends' => 
    array (
      0 => 'index',
      1 => 'subdir/test',
    ),
  ),
);