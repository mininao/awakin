    <form method="POST" action="{{ url('index')}}" accept-charset="UTF-8">
        {{ csrf_field() }}
        <label for="nom">Nom du produit : </label>
        <input name="input_title" placeholder="Nom" type="text">
        <label for="description">Description : </label>
        <textarea name="input_description" rows="10" cols="50" placeholder="Description"></textarea>
        <label for="price">Prix : </label>
        <input name="input_price" placeholder="Prix" type="text">
        <input type="submit" value="Envoyer !">
    </form>
