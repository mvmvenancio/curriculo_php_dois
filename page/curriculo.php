<?php include '../includes/header.php'; ?>

    <main>
        <link rel="stylesheet" href="../css/style.css">

        <?php
        // Recebe o certificado pela URL (?file=nome.pdf)
        if (isset($_GET['file'])) {
            $file = basename($_GET['file']); // evita path traversal
            $path = "../imagem/" . $file;

            if (file_exists($path)) {
                ?>
                <section class="center-content">
                    <embed src="<?= $path ?>" type="application/pdf" width="500" height="500"><br>
                    <a href="<?= $path ?>" download class="download-button">Baixar Certificado</a>
                </section>
                <?php
            } else {
                echo "<p>❌ Certificado não encontrado.</p>";
            }
        } else {
            echo "<p>⚠️ Nenhum certificado selecionado.</p>";
        }
        ?>
    </main>

<?php include '../includes/footer.php'; ?>