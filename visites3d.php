<?php include 'includes/header.php'; ?>

<?php
// ID Sketchfab par défaut pour le modèle "futuristic-building"
$defaultModel = 'e73f9bb9981d469c8a8ccdc1f168faad';
$model = isset($_GET['model']) ? htmlspecialchars($_GET['model']) : $defaultModel;
$planImg = isset($_GET['plan']) ? htmlspecialchars($_GET['plan']) : 'immeuble-plan.png';
$planPdf = isset($_GET['pdf']) ? htmlspecialchars($_GET['pdf']) : 'immeuble.pdf';
?>

<div class="container py-5">
    <h1 class="mb-4 text-primary text-center">Visite 3D – Immeuble de bureaux</h1>
    <p class="text-center mb-4">Explorez l’immeuble en 3D interactif. Utilisez la souris ou votre doigt pour naviguer dans la maquette.</p>

    <div class="ratio ratio-16x9 rounded shadow mb-4" style="min-height:400px;">
        <!-- Sketchfab dynamique selon le paramètre GET -->
        <iframe
            title="Immeuble 3D"
            src="https://sketchfab.com/models/<?php echo $model; ?>/embed"
            frameborder="0"
            allow="autoplay; fullscreen; vr"
            allowfullscreen
            style="width:100%;height:100%;border:0;">
        </iframe>
    </div>

    <!-- Affichage du plan image si fourni -->
    <?php if ($planImg): ?>
        <div class="text-center mb-4">
            <h5 class="mb-3">Plan de l’immeuble</h5>
            <img src="img/plans/<?php echo $planImg; ?>" alt="Plan de l’immeuble" class="img-fluid rounded shadow" style="max-width:600px;">
        </div>
    <?php endif; ?>

    <!-- Affichage du plan PDF si fourni -->
    <?php if ($planPdf): ?>
        <div class="mb-4">
            <h5 class="mb-3 text-center">Plan PDF</h5>
            <div class="ratio ratio-4x3 rounded shadow">
                <iframe src="plans/<?php echo $planPdf; ?>" style="width:100%;height:100%;border:0;" allowfullscreen></iframe>
            </div>
            <div class="text-center mt-2">
                <a href="plans/<?php echo $planPdf; ?>" target="_blank" class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-file-pdf me-1"></i>Ouvrir le plan PDF
                </a>
            </div>
        </div>
    <?php endif; ?>

    <div class="text-center">
        <a href="portfolio.php" class="btn btn-outline-primary"><i class="fas fa-arrow-left me-2"></i>Retour au portfolio</a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>