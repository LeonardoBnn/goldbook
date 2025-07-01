<div class="table-container">
    <h1>📜 Livre d'Or - Consultations</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Numéro</th>
                <th>Sexe</th>
                <th>Commentaire</th>
                <th>Signature</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($signatures as $signature): ?>
            <tr>
                <td><?= htmlspecialchars($signature['id']) ?></td>
                <td><?= htmlspecialchars($signature['nom']) ?></td>
                <td><?= htmlspecialchars($signature['prenom']) ?></td>
                <td><?= htmlspecialchars($signature['mail']) ?></td>
                <td><?= htmlspecialchars($signature['numero']) ?></td>
                <td><?= htmlspecialchars($signature['sex']) ?></td>
                <td><?= nl2br(htmlspecialchars($signature['commentaire'])) ?></td>
                <td><?= htmlspecialchars($signature['signature']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>