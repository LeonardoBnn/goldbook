<main>
    <div class="form-container">
        <h1>📜 Livre d'Or - Signature</h1>
        <form method="POST" action="index.php?page=signature" class="signature-form">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

            <div style="display:none;">
                <label>Ne pas remplir ce champ :</label>
                <input type="text" name="website" value="">
            </div>

            <label>Nom :</label>
            <input type="text" name="nom" maxlength="100" required>

            <label>Prénom :</label>
            <input type="text" name="prenom" maxlength="100" required>

            <label>Email :</label>
            <input type="email" name="mail" maxlength="255" required>

            <label>Numéro :</label>
            <input type="text" name="numero" maxlength="20" required>

            <label>Sexe :</label>
            <select name="sex" required>
                <option value="masculin">Masculin</option>
                <option value="feminin">Féminin</option>
            </select>

            <label>Commentaire :</label>
            <textarea name="commentaire" maxlength="500" required></textarea>

            <label>Signature :</label>
            <input type="text" name="signature" maxlength="100" required>

            <button type="submit">Signer</button>
        </form>
    </div>
</main>