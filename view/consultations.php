<h2 >Historique des Signatures</h2>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Numéro</th>
            <th>Sexe</th>
            <th>Sex</th>
            <th>Commentaire</th>
            <th>Signature</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= htmlspecialchars($client["nom"]) ?></td>
            <td><?= htmlspecialchars($client["prenom"]) ?></td>
            <td><?= htmlspecialchars($client["mail"]) ?></td>
            <td><?= htmlspecialchars($client["numero"]) ?></td>
            <td><?= htmlspecialchars($client["sex"]) ?></td>
            <td><?= htmlspecialchars($client["commentaire"]) ?></td>
            <td><?= htmlspecialchars($client["signature"]) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>