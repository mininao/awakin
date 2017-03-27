<form method="POST" action="{{ route('indexDashboardElior') }}" accept-charset="UTF-8">
    {{ csrf_field() }}
    <label for="title">Nom du produit :</label>
    <input placeholder="Nom" name="title" type="text" value="">
    <label for="description">Description :</label>
    <textarea placeholder="Description" name="description" cols="50" rows="10" value=""></textarea>
    <label for="price">Prix :</label>
    <input placeholder="Prix" name="price" type="text" value="">
    <input type="submit" value="Envoyer !">
</form>
