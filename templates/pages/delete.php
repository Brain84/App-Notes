<div class="show">
  <?php $note = $params['note'] ?? null; ?>
  <?php if ($note) : ?>
    <ul>
      <li>Id: <?php echo $note['id'] ?></li>
      <li>Title: <?php echo $note['title'] ?></li>
      <li>
        <pre><?php echo $note['description'] ?></pre>
      </li>
      <li>Date: <?php echo $note['created'] ?></li>
    </ul>
    <form method="POST" action="/?action=delete">
      <input name="id" type="hidden" value="<?php echo $note['id'] ?>" />
      <input type="submit" value="Usuń" />
    </form>
  <?php else : ?>
    <div>There are no notes to display</div>
  <?php endif; ?>
  <a href="/">
    <button>Back to the notes list</button>
  </a>
</div>