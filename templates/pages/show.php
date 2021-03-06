<div class="show">
  <?php $note = $params['note'] ?? null; ?>
  <?php if ($note) : ?>
    <ul>
      <li>Id: <?php echo $note['id'] ?></li>
      <li>Title: <?php echo $note['title'] ?></li>
      <li>
        <pre><?php echo $note['description'] ?></pre>
      </li>
      <li>Created: <?php echo $note['created'] ?></li>
    </ul>
    <a href="/?action=edit&id=<?php echo $note['id'] ?>">
      <button>Edit</button>
    </a>
  <?php else : ?>
    <div>There is no note to display</div>
  <?php endif; ?>
  <a href="/">
    <button>Back to the notes list</button>
  </a>
</div>