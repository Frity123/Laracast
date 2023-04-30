<?php require base_path("views/partials/head.php"); ?>
<?php require base_path("views/partials/nav.php"); ?>
<?php require base_path("views/partials/banner.php"); ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <p>
                <a href="/notes">Go back ...</a>
            </p>
            <p>
                <?= htmlspecialchars($note['body']); ?>
            </p>
            <?= $note['description']; ?>
            <footer class="mt-6">
                <a href="/note/edit?id=<?= $note['id']; ?>" class="text-gray-500 border border-current px-3 py-1 rounded">Edit</a>
            </footer>

<!--            <form method="POST" action="" class="mt-6">-->
<!--                <input type="hidden" name="_method" value="DELETE">-->
<!--                <input type="hidden" name="id" value="--><?php //= $note['id']; ?><!--">-->
<!--                <button class="text-sm text-red-500">-->
<!--                    Delete-->
<!--                </button>-->
<!--            </form>-->
        </div>
    </main>


<?php require base_path("views/partials/footer.php"); ?>


