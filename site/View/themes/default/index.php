<?php $this->theme->header();?>

<?php 
  $data['ctx'] = $this;
  $this->theme->block('header-block', $data);
?>

<?php 
  $data['ctx'] = $this;
  $this->theme->block('hero', $data);
?>

<?php 
  $data['ctx'] = $this;
  $data['cards'] = [
    [
      "id" => 1,
      "name" => 'Andrii',
      "provider" => 'Clever Counts',
      "color" => '#9d9d9d',
      "icon" => getIcon('dog'),
      "title" => "20/2000",
      "progress" => "90"
    ],
    [
      "id" => 2,
      "name" => 'Vlad',
      "provider" => 'Closet Of Choices',
      "color" => '#f6a851',
      "icon" => getIcon('bird'),
      "title" => "20/2000",
      "progress" => "10"
    ],
    [
      "id" => 3,
      "name" => 'Sergii',
      "provider" => 'Handy Help',
      "color" => '#f7cade',
      "icon" => getIcon('bird'),
      "title" => "20/2000",
      "progress" => "80"
    ],
    [
      "id" => 1,
      "name" => 'Andrii',
      "provider" => 'Full Force',
      "color" => '#a76d5f',
      "icon" => getIcon('bird'),
      "title" => "20/2000",
      "progress" => "10"
    ],
    [
      "id" => 2,
      "name" => 'Vlad',
      "provider" => 'Dream Collection',
      "color" => '#54534f',
      "icon" => getIcon('bird'),
      "title" => "20/2000",
      "progress" => "30"
    ],
    [
      "id" => 3,
      "name" => 'Sergii',
      "provider" => 'Knick Knack Patty Wack',
      "color" => '#9d9d9d',
      "icon" => getIcon('bird'),
      "title" => "20/2000",
      "progress" => "50"
    ]
  ];

  $this->theme->block('cards', $data);
?>

<?php $this->theme->footer();?>
