
<?php

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // nettoyage et validation des données soumises via le formulaire 
    if(!isset($_POST['nom']) || trim($_POST['nom']) === '') 
        $errors[] = "Le nom est obligatoire";
    if(!isset($_POST['prénom']) || trim($_POST['prénom']) === '') 
        $errors[] = "Le prénom est obligatoire";
    if(!isset($_POST['e-mail']) || trim($_POST['e-mail']) === '') 
        $errors[] = "L'e-mail est obligatoire";
    if (filter_var($_POST['e-mail'], FILTER_VALIDATE_EMAIL)) {
        echo('"' . $_POST['e-mail'] . ' is a valid email address"');
        } else {
        echo('"' . $_POST['e-mail'] . ' is not a valid email address"');
    }
    if(!isset($_POST['téléphone']) || trim($_POST['téléphone']) === '') 
        $errors[] = "Le téléphone est obligatoire";
    if(!isset($_POST['sujet']) || trim($_POST['sujet']) === '') 
        $errors[] = "La sujet est obligatoire";
    if(!isset($_POST['message']) || trim($_POST['message']) === '') 
        $errors[] = "Le message est obligatoire";

    if(empty($errors)) {
        // traitement du formulaire
        // puis redirection
        header('Location: success.php');
    }
}
?>

<?php // Affichage des éventuelles erreurs 
if (count($errors) > 0) : ?>
   <div class="border border-danger rounded p-3 m-5 bg-danger">
       <ul>
           <?php foreach ($errors as $error) : ?>
               <li><?= $error ?></li>
           <?php endforeach; ?>
       </ul>
   </div>
<?php endif; ?>

<form  action="thanks.php"  method="post">
    <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="nom" class="form-control" required>
    </div>
    <div>
        <label  for="prenom">Prénom :</label>
        <input  type="text"  id="prenom"  name="prénom" class="form-control" required>
    </div>
    <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="e-mail" class="form-control" required>
    </div>
    <div>
        <label  for="telephone">Téléphone :</label>
        <input  type="text"  id="telephone"  name="téléphone" class="form-control" required>
    </div>
    <div>
        <label  for="sujet">Sujet :</label>
        <select type="select" id="sujet" name="sujet" class="form-control" required>
            <option value="sujet1">sujet1</option>
            <option value="sujet2">sujet2</option>
            <option value="sujet3">sujet3</option>
        </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="message" class="form-control" required></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>