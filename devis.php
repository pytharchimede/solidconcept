<?php include 'includes/header.php'; ?>

<style>
    .form-btp {
        background: linear-gradient(135deg, #f8f8f8 60%, #b78d65 100%);
        border-left: 8px solid #b78d65;
        transition: background 0.5s, border-color 0.5s;
    }

    .form-it {
        background: linear-gradient(135deg, #f8f8f8 60%, #3a3a6a 100%);
        border-left: 8px solid #3a3a6a;
        transition: background 0.5s, border-color 0.5s;
    }

    .switch-toggle {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .switch-label {
        font-weight: 600;
        color: #252525;
        letter-spacing: 1px;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 32px;
    }

    .switch input {
        display: none;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #b78d65;
        transition: .4s;
        border-radius: 32px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 24px;
        width: 24px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        transition: .4s;
        border-radius: 50%;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    input:checked+.slider {
        background-color: #3a3a6a;
    }

    input:checked+.slider:before {
        transform: translateX(28px);
    }

    .switch-text {
        font-weight: 600;
        color: #b78d65;
        transition: color 0.4s;
    }

    .switch-it .switch-text {
        color: #3a3a6a;
    }

    .client-type-group {
        display: flex;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .client-type-btn {
        flex: 1;
        border: 2px solid #b78d65;
        background: #fff;
        color: #b78d65;
        font-weight: 600;
        border-radius: 8px;
        padding: 0.75rem 0;
        cursor: pointer;
        transition: background 0.3s, color 0.3s, border-color 0.3s;
    }

    .client-type-btn.active,
    .client-type-btn:focus {
        background: #b78d65;
        color: #fff;
        border-color: #b78d65;
    }

    .form-it .client-type-btn {
        border-color: #3a3a6a;
        color: #3a3a6a;
    }

    .form-it .client-type-btn.active,
    .form-it .client-type-btn:focus {
        background: #3a3a6a;
        color: #fff;
        border-color: #3a3a6a;
    }

    .drag-drop-area {
        border: 2px dashed #b78d65;
        border-radius: 10px;
        background: #fff;
        text-align: center;
        padding: 2rem 1rem;
        cursor: pointer;
        transition: border-color 0.4s;
    }

    .form-it .drag-drop-area {
        border-color: #3a3a6a;
    }

    .drag-drop-area.dragover {
        background: #f3ede7;
        border-color: #252525;
    }
</style>

<div class="container py-5">
    <h1 class="mb-4 text-primary text-center">Demande de devis</h1>
    <form method="post" action="" enctype="multipart/form-data" id="devisForm" class="form-btp bg-light p-4 rounded shadow" style="max-width:650px;margin:auto;">
        <!-- Interrupteur BTP/IT -->
        <div class="switch-toggle">
            <span class="switch-label"><i class="fas fa-hard-hat me-2"></i>BTP</span>
            <label class="switch">
                <input type="checkbox" id="typeSwitch">
                <span class="slider"></span>
            </label>
            <span class="switch-label"><i class="fas fa-laptop-code me-2"></i>IT</span>
        </div>
        <!-- Type de client -->
        <div class="client-type-group mb-4">
            <button type="button" class="client-type-btn active" data-type="particulier"><i class="fas fa-user me-2"></i>Particulier</button>
            <button type="button" class="client-type-btn" data-type="entreprise"><i class="fas fa-building me-2"></i>Entreprise</button>
            <input type="hidden" name="client_type" id="clientTypeInput" value="particulier">
        </div>
        <!-- Champs spécifiques entreprise -->
        <div id="entrepriseFields" style="display:none;">
            <div class="mb-3">
                <label for="denomination" class="form-label fw-bold">Dénomination de l'entreprise</label>
                <input type="text" class="form-control form-control-lg" id="denomination" name="denomination">
            </div>
            <div class="mb-3">
                <label for="secteur" class="form-label fw-bold">Secteur d'activité</label>
                <input type="text" class="form-control form-control-lg" id="secteur" name="secteur">
            </div>
            <div class="mb-3">
                <label for="correspondant" class="form-label fw-bold">Nom du correspondant</label>
                <input type="text" class="form-control form-control-lg" id="correspondant" name="correspondant">
            </div>
        </div>
        <!-- Champs communs -->
        <div class="mb-3">
            <label for="nom" class="form-label fw-bold" id="labelNom">Nom</label>
            <input type="text" class="form-control form-control-lg" id="nom" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label fw-bold">Numéro de téléphone</label>
            <div class="input-group">
                <span class="input-group-text" style="background:#fff;">
                    <img src="https://flagcdn.com/24x18/ci.png" alt="Côte d'Ivoire" width="24" height="18" class="me-1">
                    +225
                </span>
                <input type="tel" class="form-control form-control-lg" id="telephone" name="telephone" required placeholder="Ex : 07 12 34 56 78" pattern="[0-9 ]{10,}">
            </div>
        </div>
        <div class="mb-3">
            <label for="whatsapp" class="form-label fw-bold">Numéro WhatsApp</label>
            <div class="input-group">
                <span class="input-group-text" style="background:#fff;">
                    <img src="https://flagcdn.com/24x18/ci.png" alt="Côte d'Ivoire" width="24" height="18" class="me-1">
                    <i class="fab fa-whatsapp text-success me-1"></i>
                    <span>https://wa.me/+225</span>
                </span>
                <input type="tel" class="form-control form-control-lg" id="whatsapp" name="whatsapp" required placeholder="Ex : 07 12 34 56 78" pattern="[0-9 ]{10,}">
            </div>
            <div class="form-text">
                Le lien WhatsApp sera : <span id="waLink" class="fw-bold text-primary">https://wa.me/225</span>
            </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label fw-bold">E-mail</label>
            <input type="email" class="form-control form-control-lg" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="projet" class="form-label fw-bold">Description du projet</label>
            <textarea class="form-control form-control-lg" id="projet" name="projet" rows="4" required placeholder="Décrivez votre projet, vos besoins, vos attentes..."></textarea>
        </div>
        <div class="mb-4">
            <label class="form-label fw-bold">Images ou documents relatifs au projet</label>
            <div class="drag-drop-area" id="drop-area">
                <i class="fas fa-cloud-upload-alt fa-2x text-primary mb-2"></i>
                <p class="mb-2">Glissez-déposez vos fichiers ici ou cliquez pour sélectionner</p>
                <input type="file" name="fichiers[]" id="fileElem" multiple accept="image/*,.pdf,.doc,.docx" style="display:none;">
                <button type="button" class="btn btn-outline-primary" onclick="document.getElementById('fileElem').click();">Choisir des fichiers</button>
                <div id="fileList" class="mt-2 small text-secondary d-flex flex-wrap gap-3"></div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg w-100"><i class="fas fa-paper-plane me-2"></i>Envoyer la demande</button>
    </form>
</div>

<script>
    // Sélection des éléments drag & drop
    const dropArea = document.getElementById('drop-area');
    const fileInput = document.getElementById('fileElem');
    const fileList = document.getElementById('fileList');


    // Interrupteur BTP/IT
    const typeSwitch = document.getElementById('typeSwitch');
    const devisForm = document.getElementById('devisForm');
    typeSwitch.addEventListener('change', function() {
        if (this.checked) {
            devisForm.classList.remove('form-btp');
            devisForm.classList.add('form-it');
        } else {
            devisForm.classList.remove('form-it');
            devisForm.classList.add('form-btp');
        }
    });

    // Sélection type de client
    const clientBtns = document.querySelectorAll('.client-type-btn');
    const clientTypeInput = document.getElementById('clientTypeInput');
    const entrepriseFields = document.getElementById('entrepriseFields');
    const labelNom = document.getElementById('labelNom');
    clientBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            clientBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            clientTypeInput.value = this.getAttribute('data-type');
            if (this.getAttribute('data-type') === 'entreprise') {
                entrepriseFields.style.display = '';
                labelNom.innerText = "Nom du demandeur";
                document.getElementById('nom').placeholder = "Nom du demandeur";
            } else {
                entrepriseFields.style.display = 'none';
                labelNom.innerText = "Nom";
                document.getElementById('nom').placeholder = "";
            }
        });
    });

    // Drag & drop preview avec suppression et aperçu image
    let filesArray = [];

    // Ajout fichiers sans doublons
    function addFiles(fileListInput) {
        for (let i = 0; i < fileListInput.length; i++) {
            // Empêche les doublons par nom et taille
            if (!filesArray.some(f => f.name === fileListInput[i].name && f.size === fileListInput[i].size)) {
                filesArray.push(fileListInput[i]);
            }
        }
        updateFileList();
    }

    function updateFileList() {
        fileList.innerHTML = '';
        filesArray.forEach((file, idx) => {
            let fileDiv = document.createElement('div');
            fileDiv.className = "position-relative me-2 mb-2";
            fileDiv.style.width = "90px";
            fileDiv.style.display = "inline-block";
            // Aperçu image
            if (file.type.startsWith('image/')) {
                let img = document.createElement('img');
                img.src = URL.createObjectURL(file);
                img.style.width = "80px";
                img.style.height = "80px";
                img.style.objectFit = "cover";
                img.className = "rounded border";
                fileDiv.appendChild(img);
            } else {
                // Icône fichier
                let icon = document.createElement('i');
                icon.className = "fas fa-file fa-3x text-secondary";
                fileDiv.appendChild(icon);
            }
            // Nom du fichier
            let nameDiv = document.createElement('div');
            nameDiv.className = "small text-truncate";
            nameDiv.textContent = file.name;
            fileDiv.appendChild(nameDiv);
            // Bouton suppression
            let delBtn = document.createElement('button');
            delBtn.type = "button";
            delBtn.className = "btn btn-sm btn-danger position-absolute top-0 end-0";
            delBtn.style.padding = "2px 6px";
            delBtn.innerHTML = "&times;";
            delBtn.onclick = function(event) {
                event.stopPropagation(); // Empêche l'ouverture du sélecteur de fichiers
                filesArray.splice(idx, 1);
                updateFileList();
            };
            fileDiv.appendChild(delBtn);
            fileList.appendChild(fileDiv);
        });

        // Mise à jour de l'input file pour l'envoi du formulaire
        let dataTransfer = new DataTransfer();
        filesArray.forEach(f => dataTransfer.items.add(f));
        fileInput.files = dataTransfer.files;
    }

    // Drag & drop events
    dropArea.addEventListener('click', function(e) {
        // Ouvre le sélecteur seulement si on clique directement sur la zone (pas sur un bouton ou une image)
        if (e.target === dropArea) {
            fileInput.click();
        }
    });
    dropArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropArea.classList.add('dragover');
    });
    dropArea.addEventListener('dragleave', () => {
        dropArea.classList.remove('dragover');
    });
    dropArea.addEventListener('drop', (e) => {
        e.preventDefault();
        dropArea.classList.remove('dragover');
        addFiles(e.dataTransfer.files);
    });
    fileInput.addEventListener('change', () => {
        addFiles(fileInput.files);
    });

    // WhatsApp dynamic link
    const whatsappInput = document.getElementById('whatsapp');
    const waLink = document.getElementById('waLink');
    whatsappInput.addEventListener('input', function() {
        let num = this.value.replace(/\D/g, '');
        waLink.textContent = 'https://wa.me/225' + num;
    });
</script>

<?php include 'includes/footer.php'; ?>