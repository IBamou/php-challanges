<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (!empty($lessons)): ?>
    <div class="lessons-grid">
        <?php foreach ($lessons as $lesson): ?>
            <div class="lesson-card">
            <div class="lesson-content">
                    <span class="badge badge-<?= strtolower($lesson['level'] ?? 'beginner') ?>">
                       Level: <?= htmlspecialchars($lesson['level'] ?? 'Beginner') ?>
                    </span>
                    
                    <h2 class="lesson-title">Title: <?= htmlspecialchars($lesson['title']) ?></h2>
                    <p class="lesson-desc">Description: <?= htmlspecialchars($lesson['description'] ?? '') ?></p>

                </div>
            </div>
            <hr>
        <?php endforeach; ?>
    </div>
    <?php endif ?>
</body>
</html>