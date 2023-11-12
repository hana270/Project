<!-- resources/views/add.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Ajouter un bébé</h2>
        <form method="post" action="<?php echo e(route('bebes.store')); ?>">
            <?php echo csrf_field(); ?>


            <label for="id">Identifiant:</label>
            <input type="text" name="id" required><br>

            <label for="nom">Nom:</label>
            <input type="text" name="nom" required><br>

            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" required><br>

            <label for="nombre_ordonnel">Nombre ordonnel:</label>
            <input type="text" name="nombre_ordonnel" required><br>

            <label for="sexe">Sexe:</label>
            <select name="sexe" required>
                <option value="M">Masculin</option>
                <option value="F">Féminin</option>
            </select><br>

            <label for="date_naissance">Date de naissance:</label>
            <input type="date" name="date_naissance" required><br>

            <label for="lieu">Lieu:</label>
            <input type="text" name="lieu" required><br>

            <label for="date_acceptation">Date d'acceptation:</label>
            <input type="date" name="date_acceptation" required><br>

            <label for="date_integration">Date d'intégration:</label>
            <input type="date" name="date_integration" required><br>

            <label for="nom_mere_bio">Nom de la mère biologique:</label>
            <input type="text" name="nom_mere_bio" required><br>

            <label for="nom_pere_bio">Nom du père biologique:</label>
            <input type="text" name="nom_pere_bio" required><br>

            <label for="telephone">Téléphone:</label>
            <input type="text" name="telephone" required><br>

            <label for="adresse">Adresse:</label>
            <textarea name="adresse" required></textarea><br>

            <label for="nom_mere_adoptive">Nom de la mère adoptive:</label>
            <input type="text" name="nom_mere_adoptive" required><br>

            <label for="nom_pere_adoptive">Nom du père adoptif:</label>
            <input type="text" name="nom_pere_adoptive" required><br>

            <label for="tel_adoptive">Téléphone (adoptive):</label>
            <input type="text" name="tel_adoptive" required><br>

            <label for="adresse_adoptive">Adresse (adoptive):</label>
            <textarea name="adresse_adoptive" required></textarea><br>

            <!-- Ajoutez d'autres champs si nécessaire -->
            <br>
            <button type="submit">Ajouter</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\composer\my-new-project\resources\views/add.blade.php ENDPATH**/ ?>