<?php include 'includes/header.php'; ?>

<style>
    .shop-card {
        transition: box-shadow 0.3s, transform 0.3s;
        border: none;
        border-radius: 18px;
        overflow: hidden;
        background: #fff;
    }

    .shop-card:hover {
        box-shadow: 0 8px 32px rgba(60, 60, 100, 0.15);
        transform: translateY(-6px) scale(1.03);
    }

    .shop-card img {
        border-radius: 0;
        object-fit: cover;
        height: 220px;
    }

    .badge {
        font-size: 0.95em;
        border-radius: 6px;
        padding: 0.5em 1em;
    }

    .shop-price {
        font-size: 1.2em;
        color: #b78d65;
        font-weight: bold;
    }

    .shop-btn {
        border-radius: 8px;
        font-weight: 600;
        letter-spacing: 1px;
        transition: background 0.2s, color 0.2s;
    }

    .shop-btn:hover {
        background: #b78d65;
        color: #fff;
        border-color: #b78d65;
    }

    .filter-bar {
        background: #f8f8f8;
        border-radius: 12px;
        box-shadow: 0 2px 12px rgba(60, 60, 100, 0.05);
        padding: 1.5rem 1rem;
        margin-bottom: 2rem;
    }
</style>

<div class="container py-5">
    <h1 class="mb-4 text-primary text-center">Marketplace BTP & Informatique</h1>
    <p class="text-center mb-5">Découvrez notre sélection de matériel de quincaillerie et informatique.<br>
        <span class="text-secondary">Filtrez, comparez et trouvez le produit adapté à vos besoins !</span>
    </p>

    <!-- Filtres -->
    <form class="row g-3 align-items-end mb-4 filter-bar" id="filters">
        <div class="col-md-3">
            <label class="form-label fw-bold"><i class="fas fa-layer-group me-2"></i>Catégorie</label>
            <select class="form-select" id="filter-category">
                <option value="all">Toutes</option>
                <option value="quincaillerie">Quincaillerie</option>
                <option value="informatique">Informatique</option>
            </select>
        </div>
        <div class="col-md-3">
            <label class="form-label fw-bold"><i class="fas fa-sitemap me-2"></i>Sous-catégorie</label>
            <select class="form-select" id="filter-subcategory">
                <option value="all">Toutes</option>
                <option value="outillage">Outillage</option>
                <option value="fixation">Fixation</option>
                <option value="reseau">Réseau</option>
                <option value="ordinateur">Ordinateur</option>
                <option value="imprimante">Imprimante</option>
            </select>
        </div>
        <div class="col-md-3">
            <label class="form-label fw-bold"><i class="fas fa-money-bill-wave me-2"></i>Prix max</label>
            <input type="number" class="form-control" id="filter-price" placeholder="Ex : 50000">
        </div>
        <div class="col-md-3">
            <label class="form-label fw-bold"><i class="fas fa-search me-2"></i>Recherche</label>
            <input type="text" class="form-control" id="filter-search" placeholder="Nom, marque...">
        </div>
    </form>

    <!-- Grille produits -->
    <div class="row g-4" id="shopGrid">
        <!-- Produit 1 -->
        <div class="col-md-6 col-lg-4 shop-item" data-category="quincaillerie" data-subcategory="outillage" data-price="15000" data-name="Perceuse Bosch">
            <div class="card shop-card h-100 shadow-sm">
                <img src="img/shop/perceuse.jpg" class="card-img-top" alt="Perceuse Bosch">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title mb-1">Perceuse Bosch</h5>
                    <span class="badge bg-primary mb-2 align-self-start">Quincaillerie - Outillage</span>
                    <p class="card-text small flex-grow-1">Puissante perceuse à percussion pour tous vos travaux.</p>
                    <div class="shop-price mb-2">15 000 FCFA</div>
                    <button class="btn btn-outline-success shop-btn mt-auto w-100"><i class="fas fa-shopping-cart me-2"></i>Ajouter au panier</button>
                </div>
            </div>
        </div>
        <!-- Produit 2 -->
        <div class="col-md-6 col-lg-4 shop-item" data-category="informatique" data-subcategory="ordinateur" data-price="350000" data-name="Ordinateur HP ProBook">
            <div class="card shop-card h-100 shadow-sm">
                <img src="img/shop/ordinateur.jpg" class="card-img-top" alt="Ordinateur HP">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title mb-1">Ordinateur HP ProBook</h5>
                    <span class="badge bg-info mb-2 align-self-start">Informatique - Ordinateur</span>
                    <p class="card-text small flex-grow-1">PC portable performant pour le bureau et la maison.</p>
                    <div class="shop-price mb-2">350 000 FCFA</div>
                    <button class="btn btn-outline-success shop-btn mt-auto w-100"><i class="fas fa-shopping-cart me-2"></i>Ajouter au panier</button>
                </div>
            </div>
        </div>
        <!-- Produit 3 -->
        <div class="col-md-6 col-lg-4 shop-item" data-category="quincaillerie" data-subcategory="fixation" data-price="5000" data-name="Visserie Assortiment">
            <div class="card shop-card h-100 shadow-sm">
                <img src="img/shop/visserie.jpg" class="card-img-top" alt="Visserie">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title mb-1">Assortiment de visserie</h5>
                    <span class="badge bg-primary mb-2 align-self-start">Quincaillerie - Fixation</span>
                    <p class="card-text small flex-grow-1">Boîte de 300 vis et chevilles pour tous supports.</p>
                    <div class="shop-price mb-2">5 000 FCFA</div>
                    <button class="btn btn-outline-success shop-btn mt-auto w-100"><i class="fas fa-shopping-cart me-2"></i>Ajouter au panier</button>
                </div>
            </div>
        </div>
        <!-- Produit 4 -->
        <div class="col-md-6 col-lg-4 shop-item" data-category="informatique" data-subcategory="imprimante" data-price="120000" data-name="Imprimante Canon">
            <div class="card shop-card h-100 shadow-sm">
                <img src="img/shop/imprimante.jpg" class="card-img-top" alt="Imprimante Canon">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title mb-1">Imprimante Canon Pixma</h5>
                    <span class="badge bg-info mb-2 align-self-start">Informatique - Imprimante</span>
                    <p class="card-text small flex-grow-1">Imprimante multifonction couleur Wi-Fi.</p>
                    <div class="shop-price mb-2">120 000 FCFA</div>
                    <button class="btn btn-outline-success shop-btn mt-auto w-100"><i class="fas fa-shopping-cart me-2"></i>Ajouter au panier</button>
                </div>
            </div>
        </div>
        <!-- Produit 5 -->
        <div class="col-md-6 col-lg-4 shop-item" data-category="informatique" data-subcategory="reseau" data-price="25000" data-name="Switch TP-Link">
            <div class="card shop-card h-100 shadow-sm">
                <img src="img/shop/switch.jpg" class="card-img-top" alt="Switch TP-Link">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title mb-1">Switch TP-Link 8 ports</h5>
                    <span class="badge bg-info mb-2 align-self-start">Informatique - Réseau</span>
                    <p class="card-text small flex-grow-1">Switch Ethernet Gigabit pour réseau d'entreprise.</p>
                    <div class="shop-price mb-2">25 000 FCFA</div>
                    <button class="btn btn-outline-success shop-btn mt-auto w-100"><i class="fas fa-shopping-cart me-2"></i>Ajouter au panier</button>
                </div>
            </div>
        </div>
        <!-- Ajoute d'autres produits dynamiquement ou statiquement -->
    </div>
</div>

<script>
    // Filtres dynamiques JS (catégorie, sous-catégorie, prix, recherche)
    const filterCategory = document.getElementById('filter-category');
    const filterSubcategory = document.getElementById('filter-subcategory');
    const filterPrice = document.getElementById('filter-price');
    const filterSearch = document.getElementById('filter-search');
    const items = document.querySelectorAll('.shop-item');

    // Sous-catégories par catégorie
    const subcategories = {
        all: [{
                value: "all",
                label: "Toutes"
            },
            {
                value: "outillage",
                label: "Outillage"
            },
            {
                value: "fixation",
                label: "Fixation"
            },
            {
                value: "reseau",
                label: "Réseau"
            },
            {
                value: "ordinateur",
                label: "Ordinateur"
            },
            {
                value: "imprimante",
                label: "Imprimante"
            }
        ],
        quincaillerie: [{
                value: "all",
                label: "Toutes"
            },
            {
                value: "outillage",
                label: "Outillage"
            },
            {
                value: "fixation",
                label: "Fixation"
            }
        ],
        informatique: [{
                value: "all",
                label: "Toutes"
            },
            {
                value: "ordinateur",
                label: "Ordinateur"
            },
            {
                value: "imprimante",
                label: "Imprimante"
            },
            {
                value: "reseau",
                label: "Réseau"
            }
        ]
    };

    function updateSubcategories() {
        const cat = filterCategory.value;
        let options = subcategories[cat] || subcategories.all;
        filterSubcategory.innerHTML = "";
        options.forEach(opt => {
            let option = document.createElement('option');
            option.value = opt.value;
            option.textContent = opt.label;
            filterSubcategory.appendChild(option);
        });
    }

    function filterShop() {
        const cat = filterCategory.value;
        const subcat = filterSubcategory.value;
        const price = parseInt(filterPrice.value) || Infinity;
        const search = filterSearch.value.toLowerCase();

        items.forEach(item => {
            const itemCat = item.getAttribute('data-category');
            const itemSubcat = item.getAttribute('data-subcategory');
            const itemPrice = parseInt(item.getAttribute('data-price'));
            const itemName = item.getAttribute('data-name').toLowerCase();

            const matchCat = (cat === 'all' || itemCat === cat);
            const matchSubcat = (subcat === 'all' || itemSubcat === subcat);
            const matchPrice = (itemPrice <= price);
            const matchSearch = (itemName.includes(search));

            if (matchCat && matchSubcat && matchPrice && matchSearch) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        });
    }

    filterCategory.addEventListener('change', function() {
        updateSubcategories();
        filterShop();
    });
    filterSubcategory.addEventListener('change', filterShop);
    filterPrice.addEventListener('input', filterShop);
    filterSearch.addEventListener('input', filterShop);

    // Initialisation au chargement
    updateSubcategories();
</script>

<?php include 'includes/footer.php'; ?>