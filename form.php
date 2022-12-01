<form  action="thanks.php"  method="post">
    <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="nom">
    </div>
    <div>
        <label  for="prenom">Prénom :</label>
        <input  type="text"  id="prenom"  name="prénom">
    </div>
    <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="e-mail">
    </div>
    <div>
        <label  for="telephone">Téléphone :</label>
        <input  type="text"  id="telephone"  name="téléphone">
    </div>
    <div>
        <label  for="sujet">Téléphone :</label>
        <select type="select" id="telephone" name="sujet">
            <option value="sujet1">sujet1</option>
            <option value="sujet2">sujet2</option>
            <option value="sujet3">sujet3</option>
        </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>