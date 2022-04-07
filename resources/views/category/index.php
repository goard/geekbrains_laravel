<?php foreach($categoryList as $category): ?>
  <div class="category">
    <h3>
      <a href="<?=route('category.show', ['id' => $category['id']])?>">
        <?=$category['name']?>
      </a>
    </h3>
  </div>
  <hr/>
<?php endforeach; ?>