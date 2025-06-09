<?php include 'includes/header.php'; ?>

<div class="container py-5">
    <h1 class="mb-4 text-primary text-center">Nos réalisations</h1>
    <p class="text-center mb-5">Découvrez une sélection de nos projets BTP et IT, incluant plans, galeries photos, vidéos, et visites 3D interactives.</p>

    <!-- Filtres par catégorie -->
    <div class="d-flex justify-content-center mb-4 flex-wrap gap-2">
        <button class="btn btn-outline-primary active" data-filter="all">Tous</button>
        <button class="btn btn-outline-primary" data-filter="btp">BTP</button>
        <button class="btn btn-outline-primary" data-filter="it">IT</button>
        <button class="btn btn-outline-primary" data-filter="3d">Visites 3D</button>
    </div>

    <!-- Grille des projets -->
    <div class="row g-4" id="portfolioGrid">
        <!-- Exemple de projet BTP -->
        <div class="col-md-6 col-lg-4 portfolio-item" data-category="btp">
            <div class="card shadow-sm h-100">
                <img src="img/projets/villa1.jpg" class="card-img-top" alt="Villa moderne">
                <div class="card-body">
                    <h5 class="card-title">Villa contemporaine</h5>
                    <p class="card-text">Construction clé en main, Abidjan, 2024</p>
                    <a href="plans/villa1.pdf" target="_blank" class="btn btn-sm btn-outline-secondary mb-2"><i class="fas fa-file-pdf me-1"></i>Voir le plan</a>
                    <a href="visites3d/villa1.html" target="_blank" class="btn btn-sm btn-outline-primary mb-2"><i class="fas fa-vr-cardboard me-1"></i>Visite 3D</a>
                </div>
            </div>
        </div>
        <!-- Exemple de projet IT -->
        <div class="col-md-6 col-lg-4 portfolio-item" data-category="it">
            <div class="card shadow-sm h-100">
                <img src="img/projets/siteweb1.jpg" class="card-img-top" alt="Site web entreprise">
                <div class="card-body">
                    <h5 class="card-title">Site web entreprise</h5>
                    <p class="card-text">Développement web, PME locale, 2023</p>
                    <a href="https://client-exemple.com" target="_blank" class="btn btn-sm btn-outline-primary mb-2"><i class="fas fa-globe me-1"></i>Voir le site</a>
                </div>
            </div>
        </div>
        <!-- Exemple de projet avec visite 3D -->
        <div class="col-md-6 col-lg-4 portfolio-item" data-category="3d btp">
            <div class="card shadow-sm h-100">
                <img src="img/projets/immeuble3d.jpg" class="card-img-top" alt="Immeuble 3D">
                <div class="card-body">
                    <h5 class="card-title">Immeuble de bureaux</h5>
                    <p class="card-text">Maquette 3D interactive, 2024</p>
                    <a href="visites3d.php" target="_blank" class="btn btn-sm btn-outline-primary mb-2"><i class="fas fa-vr-cardboard me-1"></i>Visite 3D</a>
                    <a href="plans/immeuble.pdf" target="_blank" class="btn btn-sm btn-outline-secondary mb-2"><i class="fas fa-file-pdf me-1"></i>Voir le plan</a>
                </div>
            </div>
        </div>
        <!-- Ajoute ici d'autres projets dynamiquement ou statiquement -->
    </div>
</div>

<script>
    // Filtrage dynamique des projets
    const filterBtns = document.querySelectorAll('[data-filter]');
    const items = document.querySelectorAll('.portfolio-item');
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            const cat = this.getAttribute('data-filter');
            items.forEach(item => {
                if (cat === 'all' || item.getAttribute('data-category').includes(cat)) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
</script>

<?php include 'includes/footer.php'; ?>