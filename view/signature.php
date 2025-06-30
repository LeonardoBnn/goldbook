<div >
    <form action="index.php?page=inscription" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required>

        <label for="mail">Email :</label>
        <input type="email" name="mail" id="mail" required>

        <label for="numero">Numéro de téléphone :</label>
        <input type="text" name="numero" id="numero" required>

        <label for="sex">Sexe :</label>
        <select name="sex" id="sex" required>
            <option value="">-- Sélectionnez --</option>
            <option value="masculin">Masculin</option>
            <option value="feminin">Féminin</option>
        </select>

        <label for="commentaire">Commentaire :</label>
        <input type="text" name="commentaire" id="commentaire" required>

        <label for="signature">Signature :</label>
        <input type="text" name="signature" id="signature" required>

        <button type="submit" name="valider">Signée</button>
    </form>