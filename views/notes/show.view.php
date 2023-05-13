<?php require partial('header.php') ?>
<?php require partial('nav.php'); ?>
<?php require partial('banner.php'); ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 hover:underline">Go back...</a>
        </p>
        <p>
            <?= $note['body'] ?>
        </p>
    </div>
</main>
<?php require partial('footer.php'); ?>