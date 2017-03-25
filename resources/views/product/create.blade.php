<form method="POST" action="/administrateur/product" accept-charset="UTF-8">
    {{ csrf_field() }}
    <label for="nom">Nom du produit : </label>
    <input name="title" placeholder="Nom" type="text">
    <label for="description">Description : </label>
    <textarea name="description" rows="10" cols="50" placeholder="Description"></textarea>
    <label for="price">Prix : </label>
    <input name="price" placeholder="Prix" type="text">
    <input type="submit" value="Envoyer !">
</form>
